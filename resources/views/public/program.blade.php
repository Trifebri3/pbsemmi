@extends('public.layouts.app')

@section('title', '| Program Kerja')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-white pt-24 pb-12 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-gray-900 sm:text-5xl">Program Kerja</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-3xl">Langkah nyata perjuangan organisasi melalui berbagai program pengembangan, pengabdian, dan advokasi masyarakat.</p>
        
        <nav class="mt-8 flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-gray-500 hover:text-semmi transition-colors">Beranda</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900 font-medium" aria-current="page">Program Kerja</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- MAIN CONTENT: LISTING PROGRAM -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <!-- Filter Bar Minimalis -->
        <div class="mb-12 flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-gray-200 pb-6">
            <div class="flex gap-2 w-full sm:w-auto overflow-x-auto pb-2 sm:pb-0">
                <button type="button" class="rounded-full bg-semmi px-4 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-semmi-dark transition-colors whitespace-nowrap">Semua Program</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Kaderisasi</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Sosial & Pengabdian</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Intelektual</button>
            </div>

            <!-- Search -->
            <div class="relative w-full sm:w-64 flex-shrink-0">
                <input type="text" placeholder="Cari program..." class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Grid Program -->
        @php
            $programs = [
                ['title' => 'Latihan Kader I (Basic Training) Nasional', 'kategori' => 'Kaderisasi', 'tanggal' => '15 - 18 Agustus 2026', 'lokasi' => 'Pusdiklat Kemensos, Jakarta'],
                ['title' => 'Simposium Kebangsaan Pemuda Islam', 'kategori' => 'Intelektual', 'tanggal' => '10 September 2026', 'lokasi' => 'Gedung MPR/DPR RI'],
                ['title' => 'Bakti Sosial Peduli Bencana Semeru', 'kategori' => 'Sosial & Pengabdian', 'tanggal' => '22 - 25 September 2026', 'lokasi' => 'Lumajang, Jawa Timur'],
                ['title' => 'Pelatihan Jurnalistik dan Media Digital', 'kategori' => 'Keterampilan', 'tanggal' => '05 Oktober 2026', 'lokasi' => 'Asrama Haji Pondok Gede'],
                ['title' => 'Latihan Kader II (Intermediate Training)', 'kategori' => 'Kaderisasi', 'tanggal' => '12 - 19 Oktober 2026', 'lokasi' => 'Bandung, Jawa Barat'],
                ['title' => 'Seminar Kewirausahaan Mahasiswa', 'kategori' => 'Ekonomi', 'tanggal' => '28 Oktober 2026', 'lokasi' => 'Auditorium UIN Syarif Hidayatullah'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($programs as $program)
            <!-- CARD PROGRAM -->
            <div class="group flex flex-col overflow-hidden rounded-xl bg-white shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                <!-- Thumbnail -->
                <div class="relative w-full shrink-0 h-48 bg-gray-200 overflow-hidden">
                    <div class="absolute inset-0 bg-semmi/10 flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                        <svg class="h-12 w-12 text-semmi/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <!-- Kategori Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center rounded-md bg-white/90 backdrop-blur-sm px-2 py-1 text-xs font-bold text-semmi-dark ring-1 ring-inset ring-gray-900/10 uppercase tracking-wider">
                            {{ $program['kategori'] }}
                        </span>
                    </div>
                </div>

                <!-- Konten -->
                <div class="flex flex-1 flex-col justify-between p-6">
                    <div class="flex-1">
                        <h3 class="font-heading text-xl font-bold uppercase tracking-tight text-gray-900 group-hover:text-semmi transition-colors line-clamp-2">
                            <a href="/program/beasiswa-aktivis">
                                <span class="absolute inset-0"></span>
                                {{ $program['title'] }}
                            </a>
                        </h3>
                        
                        <div class="mt-4 space-y-2">
                            <div class="flex items-start text-sm text-gray-600">
                                <svg class="mr-2 h-5 w-5 shrink-0 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                                <span>{{ $program['tanggal'] }}</span>
                            </div>
                            <div class="flex items-start text-sm text-gray-600">
                                <svg class="mr-2 h-5 w-5 shrink-0 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span class="line-clamp-1">{{ $program['lokasi'] }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Button CTA -->
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-bold uppercase tracking-wide text-semmi group-hover:text-semmi-dark transition-colors">
                            Selengkapnya
                            <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /CARD PROGRAM -->
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-16 text-center">
            <button type="button" class="inline-flex items-center gap-x-2 rounded-md border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi transition-colors">
                Muat Lebih Banyak Program
            </button>
        </div>

    </div>
</div>

@endsection
