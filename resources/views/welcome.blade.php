@extends('public.layouts.app')

@section('content')
<div class="relative isolate overflow-hidden bg-white">
  <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
      <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
        Uji Coba Header <span class="text-semmi">SEMMI</span>
      </h1>
      <p class="mt-6 text-lg leading-8 text-gray-600">
        Header telah dibuat sesuai dengan brief. Mendukung tampilan responsive, sticky header, dan mobile menu (hamburger).
      </p>
    </div>
  </div>
</div>

<!-- Map Section -->
<div class="bg-gray-50 py-16 lg:py-24 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 z-0 opacity-30">
        <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full bg-semmi blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute top-1/2 -right-24 w-64 h-64 rounded-full bg-semmi blur-3xl opacity-20" style="animation: pulse 4s infinite 1s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4">Peta Wilayah <span class="text-semmi">SEMMI</span></h2>
            <p class="mt-4 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Jelajahi jaringan kepengurusan SEMMI di seluruh nusantara. Klik pada provinsi untuk melihat detail informasi wilayah.</p>
        </div>
        
        <div class="relative w-full rounded-[2rem] overflow-hidden shadow-2xl border border-gray-200/60 bg-white p-2">
            <div id="indonesia-map" class="w-full h-full z-10 rounded-[1.5rem]" style="height: 600px; min-height: 50vh;"></div>
            
            <!-- Floating info badge -->
            <div class="absolute bottom-6 right-6 z-20 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-xl shadow-lg border border-gray-100 flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-[#10b981] animate-ping"></div>
                <span class="text-sm font-medium text-gray-700">Peta Interaktif</span>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Map
        const map = L.map('indonesia-map', {
            zoomControl: false, // We'll position it custom
            scrollWheelZoom: false,
            minZoom: 4,
            maxZoom: 10,
        }).setView([-1.5, 118.0], 5); // Center on Indonesia with a good framing

        // Custom position for zoom control
        L.control.zoom({
            position: 'topright'
        }).addTo(map);

        // CartoDB Positron (Light map with labels, clean look)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        let geojsonLayer;

        // Map Style corresponding to the user's green preference
        const defaultStyle = {
            weight: 1.5,
            color: '#ffffff', // White borders
            fillColor: '#34d399', // Emerald 400 - vibrant green
            fillOpacity: 0.85,
            className: 'transition-all duration-300 ease-in-out' // Smooth transitions
        };

        const highlightStyle = {
            weight: 2.5,
            color: '#ffffff', 
            fillColor: '#059669', // Emerald 600 - darker green for hover
            fillOpacity: 1
        };

        // Add a loading indicator (optional, but good UX)
        const mapContainer = document.getElementById('indonesia-map');
        mapContainer.classList.add('cursor-wait');

        // Fetch GeoJSON for Indonesia Provinces
        fetch('https://raw.githubusercontent.com/ans-4175/peta-indonesia-geojson/master/indonesia-prov.geojson')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                geojsonLayer = L.geoJSON(data, {
                    style: defaultStyle,
                    onEachFeature: onEachFeature
                }).addTo(map);
                mapContainer.classList.remove('cursor-wait');
            })
            .catch(error => {
                console.error("Error loading map data:", error);
                mapContainer.classList.remove('cursor-wait');
                // Fallback message could be added here
            });

        function highlightFeature(e) {
            const layer = e.target;
            layer.setStyle(highlightStyle);
            if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                layer.bringToFront();
            }
        }

        function resetHighlight(e) {
            geojsonLayer.resetStyle(e.target);
        }

        function zoomToFeature(e) {
            const layer = e.target;
            // Smooth zoom to the selected province
            map.flyToBounds(layer.getBounds(), {
                padding: [50, 50], 
                maxZoom: 7,
                duration: 1.5
            });
            
            // Handle different GeoJSON property structures
            const propName = layer.feature.properties.Propinsi || layer.feature.properties.NAME_1 || "Provinsi Tidak Diketahui";
            
            // Show a premium popup
            const popupContent = `
                <div class="p-4 text-center min-w-[200px]">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-semmi" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-1 leading-tight">${propName}</h3>
                    <p class="text-sm text-gray-500 mb-4">Informasi wilayah & kepengurusan</p>
                    <button onclick="alert('Membuka detail untuk ${propName}... Nanti bisa diarahkan ke halaman detail.')" class="w-full bg-semmi hover:bg-green-700 text-white px-4 py-2 rounded-xl text-sm font-semibold transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Lihat Detail
                    </button>
                </div>
            `;

            L.popup({
                className: 'premium-popup',
                closeButton: true,
                autoPanPadding: [50, 50]
            })
            .setLatLng(e.latlng)
            .setContent(popupContent)
            .openOn(map);
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
            
            // Premium Tooltip
            const propName = feature.properties.Propinsi || feature.properties.NAME_1 || "Provinsi";
            layer.bindTooltip(`
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-semmi"></span>
                    <span class="font-semibold text-gray-800">${propName}</span>
                </div>
            `, {
                sticky: true,
                className: 'premium-tooltip',
                direction: 'top',
                offset: [0, -10]
            });
        }
    });
</script>

<style>
    /* Premium Map Styling Overrides */
    
    /* Popups */
    .premium-popup .leaflet-popup-content-wrapper {
        border-radius: 1.5rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.5);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        padding: 0;
    }
    .premium-popup .leaflet-popup-content {
        margin: 0;
        line-height: normal;
    }
    .premium-popup .leaflet-popup-tip-container {
        display: none; /* Hide the default tip for a cleaner floating look */
    }
    .premium-popup .leaflet-popup-close-button {
        top: 12px !important;
        right: 12px !important;
        color: #9ca3af !important;
        background: #f3f4f6 !important;
        border-radius: 50% !important;
        width: 24px !important;
        height: 24px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 0 !important;
        font-size: 16px !important;
        line-height: 1 !important;
        transition: all 0.2s !important;
    }
    .premium-popup .leaflet-popup-close-button:hover {
        background: #e5e7eb !important;
        color: #4b5563 !important;
    }

    /* Tooltips */
    .premium-tooltip {
        background-color: rgba(255, 255, 255, 0.95) !important;
        border: 1px solid #f3f4f6 !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        border-radius: 0.75rem !important;
        padding: 0.5rem 1rem !important;
        font-family: inherit !important;
        backdrop-filter: blur(4px);
    }
    .premium-tooltip::before {
        display: none !important; /* Hide the little triangle */
    }

    /* Controls */
    .leaflet-control-zoom {
        border: none !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        border-radius: 0.75rem !important;
        overflow: hidden;
        margin: 1.5rem !important;
    }
    .leaflet-control-zoom a {
        color: #374151 !important;
        background-color: white !important;
        width: 36px !important;
        height: 36px !important;
        line-height: 36px !important;
        transition: all 0.2s;
    }
    .leaflet-control-zoom a:hover {
        background-color: #f9fafb !important;
        color: #059669 !important; /* SEMMI green */
    }
    .leaflet-control-zoom-in {
        border-bottom: 1px solid #f3f4f6 !important;
    }

    /* Map container aesthetics */
    .leaflet-container {
        font-family: inherit;
        background: #eef2f6; /* Very light blue-gray for the ocean */
    }
    
    /* Ensure vector layers transition smoothly on style change */
    path.leaflet-interactive {
        transition: fill 0.3s ease, fill-opacity 0.3s ease, stroke 0.3s ease, stroke-width 0.3s ease;
    }
</style>
@endsection
