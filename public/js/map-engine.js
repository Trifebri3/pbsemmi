/**
 * SEMMI Map Engine
 * 3-Level Interactive Map System
 */

document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map', {
        zoomControl: false,
        minZoom: 4,
        maxZoom: 18,
    }).setView([-1.5, 118.0], 5);

    L.control.zoom({ position: 'topright' }).addTo(map);

    // CartoDB Positron Basemap (Matches Institut Hijau example)
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 20
    }).addTo(map);

    let currentLevel = 'indonesia';
    let geojsonLayer = null;
    let markersLayer = L.markerClusterGroup({
        chunkedLoading: true,
        spiderfyOnMaxZoom: true,
        showCoverageOnHover: false,
        zoomToBoundsOnClick: true
    });
    map.addLayer(markersLayer);

    const loader = document.getElementById('map-loader');
    const breadcrumbContainer = document.getElementById('breadcrumb-container');
    const statTotal = document.getElementById('stat-total');
    const statWilayah = document.getElementById('stat-wilayah');

    const styles = {
        // Emerald Green Choropleth Palette
        level1: { weight: 1, color: '#ffffff', fillColor: '#a7f3d0', fillOpacity: 0.9 }, // Min
        level2: { weight: 1, color: '#ffffff', fillColor: '#6ee7b7', fillOpacity: 0.9 },
        level3: { weight: 1, color: '#ffffff', fillColor: '#34d399', fillOpacity: 0.9 },
        level4: { weight: 1, color: '#ffffff', fillColor: '#059669', fillOpacity: 0.9 }, // Max
        hover: { weight: 2, color: '#ffffff', fillColor: '#047857', fillOpacity: 1 }, // Dark emerald
        regency: { weight: 1, color: '#ffffff', fillColor: '#a7f3d0', fillOpacity: 0.6 },
        regencyHover: { weight: 2, color: '#ffffff', fillColor: '#10b981', fillOpacity: 0.8 }
    };

    // Helper to get color based on count
    function getColor(d, maxCount) {
        if(d === 0) return '#f8fafc'; // Empty/Slate 50
        const ratio = d / maxCount;
        return ratio > 0.75 ? styles.level4.fillColor :
               ratio > 0.50 ? styles.level3.fillColor :
               ratio > 0.25 ? styles.level2.fillColor :
                              styles.level1.fillColor;
    }

    window.mapEngine = {
        init: function() {
            this.loadLevel1();
        },
        
        showLoader: () => loader.classList.remove('hidden'),
        hideLoader: () => loader.classList.add('hidden'),

        resetToIndonesia: function() {
            if (currentLevel === 'indonesia') return;
            markersLayer.clearLayers();
            this.loadLevel1();
            map.flyTo([-1.5, 118.0], 5, { duration: 1 });
            this.updateBreadcrumb([]);
        },

        // LEVEL 1: Indonesia (Provinces)
        loadLevel1: async function() {
            this.showLoader();
            currentLevel = 'indonesia';
            
            try {
                // Fetch GeoJSON for provinces (assuming public/data-indonesia/provinsi.geojson exists)
                // If the user hasn't provided a valid geojson, this might fail, so we catch it.
                let geoResponse = await fetch('/data-indonesia/indonesia-prov.geojson');
                if(!geoResponse.ok) {
                    // Fallback to a remote open source geojson if local is missing
                    geoResponse = await fetch('https://raw.githubusercontent.com/ans-4175/peta-indonesia-geojson/master/indonesia-prov.geojson');
                }
                const geoData = await geoResponse.json();

                // Fetch data from API
                const apiResponse = await fetch('/api/map/provinces');
                const apiData = await apiResponse.json();
                
                // Map API data to GeoJSON
                const dataMap = new Map();
                let totalLocations = 0;
                apiData.forEach(prov => {
                    dataMap.set(prov.name.toUpperCase(), prov.locations_count);
                    totalLocations += prov.locations_count;
                });

                statTotal.innerText = totalLocations;
                statWilayah.innerText = apiData.length || 38;

                // Find max count for choropleth scale
                let maxCount = Math.max(...apiData.map(p => p.locations_count), 1);

                if (geojsonLayer) map.removeLayer(geojsonLayer);
                
                geojsonLayer = L.geoJSON(geoData, {
                    style: (feature) => {
                        const count = dataMap.get((feature.properties.Propinsi || feature.properties.NAME_1 || "").toUpperCase()) || 0;
                        return {
                            weight: 1,
                            color: '#ffffff',
                            fillColor: getColor(count, maxCount),
                            fillOpacity: 0.9,
                            className: 'transition-all duration-300'
                        };
                    },
                    onEachFeature: (feature, layer) => {
                        const name = feature.properties.Propinsi || feature.properties.NAME_1;
                        const count = dataMap.get(name.toUpperCase()) || 0;
                        
                        layer.bindTooltip(`<b>${name}</b><br>${count} Lokasi`, { sticky: true, className: 'custom-tooltip' });
                        
                        layer.on({
                            mouseover: (e) => e.target.setStyle(styles.hover),
                            mouseout: (e) => geojsonLayer.resetStyle(e.target),
                            click: (e) => this.loadLevel2(name, apiData.find(p => p.name.toUpperCase() === name.toUpperCase())?.id)
                        });
                    }
                }).addTo(map);

            } catch (error) {
                console.error("Error loading Level 1:", error);
                alert("Gagal memuat data provinsi.");
            } finally {
                this.hideLoader();
            }
        },

        // LEVEL 2: Province (Regencies)
        loadLevel2: async function(provinceName, provinceId) {
            if (!provinceId) return alert("Data provinsi belum tersedia di database.");
            
            this.showLoader();
            currentLevel = 'province';
            
            try {
                // Fetch Regency GeoJSON (if available)
                // You can point this to the /data-indonesia/kota/ directory if they have geojsons there
                // We will just zoom and load markers for now as a fallback if regency geojson is missing
                
                markersLayer.clearLayers();
                if (geojsonLayer) map.removeLayer(geojsonLayer);

                const apiResponse = await fetch(`/api/map/locations?province_id=${provinceId}`);
                const locations = await apiResponse.json();

                statTotal.innerText = locations.length;
                this.updateBreadcrumb([{ name: provinceName, action: `mapEngine.loadLevel2('${provinceName}', '${provinceId}')` }]);

                this.renderMarkers(locations);
                
                // Zoom to bounds of markers
                if (locations.length > 0) {
                    const bounds = L.latLngBounds(locations.map(loc => [loc.latitude, loc.longitude]));
                    map.flyToBounds(bounds, { padding: [50, 50], duration: 1 });
                }

            } catch (error) {
                console.error("Error loading Level 2:", error);
            } finally {
                this.hideLoader();
            }
        },

        renderMarkers: function(locations) {
            markersLayer.clearLayers();
            locations.forEach(loc => {
                const marker = L.marker([loc.latitude, loc.longitude]);
                marker.bindPopup(`
                    <div class="p-0 overflow-hidden w-64">
                        ${loc.photo ? `<img src="${loc.photo}" alt="${loc.name}" class="w-full h-32 object-cover">` : ''}
                        <div class="p-3">
                            <h3 class="font-bold text-lg text-gray-800 leading-tight mb-1">${loc.name}</h3>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 bg-green-100 text-green-800 text-xs font-semibold rounded-full">${loc.category}</span>
                                <span class="px-2 py-0.5 ${loc.status === 'Aktif' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800'} text-xs font-semibold rounded-full">${loc.status}</span>
                            </div>
                            
                            ${loc.address ? `
                                <div class="flex items-start gap-1 mt-2 text-xs text-gray-600">
                                    <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <span>${loc.address}</span>
                                </div>
                            ` : ''}
                            
                            ${loc.contact_number ? `
                                <div class="flex items-center gap-1 mt-1 text-xs text-gray-600">
                                    <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <span>${loc.contact_number}</span>
                                </div>
                            ` : ''}

                            <hr class="my-3 border-gray-100">
                            <p class="text-xs text-gray-500 line-clamp-2">${loc.description || '-'}</p>
                            
                            ${loc.instagram_url ? `
                                <a href="${loc.instagram_url}" target="_blank" class="mt-3 block w-full text-center bg-gray-50 hover:bg-semmi/10 text-semmi border border-gray-200 hover:border-semmi font-medium py-1.5 px-3 rounded-lg text-xs transition-colors">
                                    Lihat Instagram
                                </a>
                            ` : ''}
                        </div>
                    </div>
                `, { className: 'custom-popup p-0' });
                markersLayer.addLayer(marker);
            });
        },

        applyFilters: async function() {
            const search = document.getElementById('filter-search').value;
            const category = document.getElementById('filter-category').value;
            
            this.showLoader();
            try {
                let url = `/api/map/locations?search=${search}&category=${category}`;
                const apiResponse = await fetch(url);
                const locations = await apiResponse.json();
                
                statTotal.innerText = locations.length;
                if (geojsonLayer) map.removeLayer(geojsonLayer);
                
                this.renderMarkers(locations);
                if (locations.length > 0) {
                    const bounds = L.latLngBounds(locations.map(loc => [loc.latitude, loc.longitude]));
                    map.flyToBounds(bounds, { padding: [50, 50], duration: 1 });
                }
            } catch (error) {
                console.error("Error filtering:", error);
            } finally {
                this.hideLoader();
            }
        },

        updateBreadcrumb: function(trail) {
            let html = `
                <li class="inline-flex items-center">
                    <button onclick="mapEngine.resetToIndonesia()" class="hover:text-semmi transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Indonesia
                    </button>
                </li>
            `;
            
            trail.forEach(item => {
                html += `
                    <li>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <button onclick="${item.action}" class="ml-1 text-gray-700 hover:text-semmi font-semibold">${item.name}</button>
                        </div>
                    </li>
                `;
            });
            
            breadcrumbContainer.innerHTML = html;
        },

        exportData: function() {
            window.open('/api/map/locations?export=csv', '_blank');
        }
    };

    // Initialize Map Engine
    mapEngine.init();
});
