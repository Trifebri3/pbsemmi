<!-- Leaflet & Plugins CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />

<style>
    /* Custom Styling for Map Dashboard */
    .info.legend {
        background: white;
        padding: 10px 14px;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        font-size: 13px;
        line-height: 18px;
        color: #333;
    }
    .info.legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.8;
        border-radius: 4px;
    }

    /* Custom Tooltip */
    .custom-tooltip {
        background-color: rgba(255, 255, 255, 0.95);
        border: none;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        border-radius: 8px;
        padding: 8px 12px;
        font-weight: 600;
        color: #1f2937;
    }
    .custom-tooltip::before { display: none; }
</style>

<div style="display: flex; flex-direction: row; width: 100%; height: {{ $height ?? '700px' }}; overflow: hidden; background: #f9fafb;" class="rounded-2xl border border-gray-200 shadow-sm relative">
    <!-- Sidebar Panel -->
    <div style="width: 384px; flex-shrink: 0; background: white; z-index: 20; display: flex; flex-direction: column; height: 100%; border-right: 1px solid #e5e7eb; box-shadow: 4px 0 15px rgba(0,0,0,0.05);">
        <div class="p-6 border-b border-gray-100" style="flex-shrink: 0;">
            <h2 class="text-2xl font-bold text-gray-900 mb-1">Peta Sebaran</h2>
            <p class="text-sm text-gray-500">Jaringan Kepengurusan SEMMI</p>
        </div>

        <div class="p-6" style="flex-grow: 1; overflow-y: auto;">
            <!-- Breadcrumb Navigation -->
            <div class="mb-6 bg-gray-50 p-3 rounded-lg border border-gray-100">
                <nav class="flex text-sm font-medium text-gray-600" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1" id="breadcrumb-container">
                        <li class="inline-flex items-center">
                            <button onclick="mapEngine.resetToIndonesia()" class="hover:text-semmi transition-colors flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                Indonesia
                            </button>
                        </li>
                        <!-- Dynamic Breadcrumbs injected here -->
                    </ol>
                </nav>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 gap-4 mb-8" id="stats-container">
                <div class="bg-green-50 rounded-xl p-4 border border-green-100">
                    <div class="text-green-600 text-sm font-semibold mb-1">Total Titik</div>
                    <div class="text-2xl font-bold text-gray-900" id="stat-total">0</div>
                </div>
                <div class="bg-blue-50 rounded-xl p-4 border border-blue-100">
                    <div class="text-blue-600 text-sm font-semibold mb-1">Wilayah</div>
                    <div class="text-2xl font-bold text-gray-900" id="stat-wilayah">38</div>
                </div>
            </div>

            <!-- Filters -->
            <div class="space-y-4">
                <h3 class="font-semibold text-gray-900 text-sm uppercase tracking-wider">Filter Data</h3>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pencarian</label>
                    <input type="text" id="filter-search" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-semmi focus:ring-semmi text-sm" placeholder="Cari nama lokasi...">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                    <select id="filter-category" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-semmi focus:ring-semmi text-sm">
                        <option value="">Semua Kategori</option>
                        <option value="Sekretariat">Sekretariat</option>
                        <option value="Cabang">Cabang Utama</option>
                        <option value="Ranting">Ranting</option>
                    </select>
                </div>
                
                <button onclick="mapEngine.applyFilters()" class="w-full bg-semmi hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors mt-2">
                    Terapkan Filter
                </button>
            </div>
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50" style="flex-shrink: 0;">
            <button onclick="mapEngine.exportData()" class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg transition-colors">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Export CSV
            </button>
        </div>
    </div>

    <!-- Map Area -->
    <div style="flex-grow: 1; height: 100%; position: relative; z-index: 10;">
        <!-- Loading Overlay -->
        <div id="map-loader" class="absolute inset-0 bg-white/80 backdrop-blur-sm z-[1000] flex flex-col items-center justify-center hidden">
            <div class="animate-spin rounded-full h-12 w-12 border-4 border-gray-200 border-t-semmi mb-4"></div>
            <p class="text-gray-600 font-medium animate-pulse">Memuat data spasial...</p>
        </div>
        
        <div id="map" style="width: 100%; height: 100%; z-index: 10;"></div>
    </div>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>

<!-- The Map Engine Script -->
<script src="{{ asset('js/map-engine.js') }}"></script>
