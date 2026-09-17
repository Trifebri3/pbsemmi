@extends('public.layouts.app')

@section('title', '| Dokumentasi Kegiatan')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-semmi-dark pt-24 pb-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-semmi-gold sm:text-5xl">Dokumentasi & Galeri</h1>
        <p class="mt-4 text-lg text-gray-300 max-w-3xl">Rekam jejak visual dari setiap kegiatan, program, dan momen bersejarah yang diselenggarakan oleh Serikat Mahasiswa Muslimin Indonesia di seluruh pelosok nusantara.</p>
        
        <nav class="mt-8 flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-gray-300 hover:text-white transition-colors">Beranda</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="text-white font-medium" aria-current="page">Dokumentasi</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <!-- Filters -->
        <div class="mb-12 bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <h3 class="font-heading text-lg font-bold text-semmi-dark uppercase mb-4">Filter Galeri</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                
                <!-- Filter Tahun -->
                <div>
                    <label for="tahun" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Tahun</label>
                    <select id="tahun" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                        <option>Semua Tahun</option>
                        <option>2026</option>
                        <option>2025</option>
                    </select>
                </div>
                
                <!-- Filter Kegiatan -->
                <div>
                    <label for="kegiatan" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Jenis Kegiatan</label>
                    <select id="kegiatan" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                        <option>Semua Kegiatan</option>
                        <option>Nasional</option>
                        <option>Cabang / Wilayah</option>
                    </select>
                </div>
                
                <!-- Filter Program -->
                <div>
                    <label for="program" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Program</label>
                    <select id="program" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                        <option>Semua Program</option>
                        <option>Latihan Kader I</option>
                        <option>Diskusi Publik</option>
                    </select>
                </div>
                
                <!-- Filter Wilayah -->
                <div>
                    <label for="wilayah" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Wilayah</label>
                    <select id="wilayah" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                        <option>Semua Wilayah</option>
                        <option>DKI Jakarta</option>
                        <option>Jawa Barat</option>
                    </select>
                </div>

            </div>
            <div class="mt-4 flex justify-end">
                <button type="button" class="bg-semmi hover:bg-semmi-dark text-white text-sm font-bold uppercase tracking-wide px-6 py-2 rounded-md shadow-sm transition-colors focus:ring-2 focus:ring-semmi focus:ring-offset-2">Terapkan Filter</button>
            </div>
        </div>

        <!-- MASONRY GRID -->
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
            
            @php
                // Dummy data for masonry
                // Using different heights (aspect ratios) to show masonry effect
                $galleries = [
                    ['title' => 'Latihan Kader I (Basic Training) Nasional', 'loc' => 'Pusdiklat Kemensos, Jakarta', 'date' => '15 Ags 2026', 'h' => 'h-[400px]', 'img' => 'bg-gray-200'],
                    ['title' => 'Silaturahmi Kebangsaan Bersama MPR RI', 'loc' => 'Gedung MPR RI', 'date' => '12 Sep 2026', 'h' => 'h-[250px]', 'img' => 'bg-gray-300'],
                    ['title' => 'Bakti Sosial Peduli Bencana Semeru', 'loc' => 'Lumajang, Jawa Timur', 'date' => '22 Sep 2026', 'h' => 'h-[350px]', 'img' => 'bg-gray-200'],
                    ['title' => 'Diskusi Pemuda "Peran Pemuda di Era Digital"', 'loc' => 'Bandung, Jawa Barat', 'date' => '20 Ags 2026', 'h' => 'h-[300px]', 'img' => 'bg-gray-300'],
                    ['title' => 'Pelantikan Pengurus Cabang Jakarta Pusat', 'loc' => 'Balai Kota DKI Jakarta', 'date' => '05 Sep 2026', 'h' => 'h-[450px]', 'img' => 'bg-gray-200'],
                    ['title' => 'Seminar Nasional Ekonomi Syariah', 'loc' => 'UIN Syarif Hidayatullah', 'date' => '10 Okt 2026', 'h' => 'h-[280px]', 'img' => 'bg-gray-300'],
                ];
            @endphp

            @foreach($galleries as $item)
            <!-- GALLERY ITEM -->
            <a href="/dokumentasi/rakernas-2023" class="group block relative w-full rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all cursor-zoom-in {{ $item['h'] }} {{ $item['img'] }} break-inside-avoid border border-gray-100">
                <!-- Placeholder Image overlay icon -->
                <div class="absolute inset-0 flex items-center justify-center transition-transform duration-500 group-hover:scale-110">
                    <svg class="h-12 w-12 text-semmi/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <!-- Content (Appears on Hover) -->
                <div class="absolute inset-0 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0">
                    <p class="text-semmi-gold font-bold text-xs uppercase tracking-wider mb-2">{{ $item['date'] }}</p>
                    <h3 class="font-heading font-bold text-xl uppercase text-white leading-tight mb-2">{{ $item['title'] }}</h3>
                    <p class="text-sm font-medium text-gray-300 flex items-center">
                        <svg class="mr-1.5 h-4 w-4 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        {{ $item['loc'] }}
                    </p>
                </div>
            </a>
            @endforeach

        </div>

        <div class="mt-16 text-center">
            <button type="button" class="inline-flex items-center gap-x-2 rounded-md border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 transition-colors">
                Tampilkan Lebih Banyak Foto
            </button>
        </div>

    </div>
</div>

@endsection
