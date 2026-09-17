@extends('public.layouts.app')

@section('title', '| Artikel & Publikasi')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-semmi-dark pt-24 pb-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-semmi-gold sm:text-5xl">Artikel & Publikasi</h1>
        <p class="mt-4 text-lg text-gray-300 max-w-3xl">Kumpulan artikel, opini, dokumen publik, dan literasi keislaman-kebangsaan karya kader Serikat Mahasiswa Muslimin Indonesia.</p>
        
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
                    <span class="text-white font-medium" aria-current="page">Publikasi</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <!-- Filter Bar Minimalis -->
        <div class="mb-12 flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-gray-200 pb-6">
            <div class="flex gap-2 w-full sm:w-auto overflow-x-auto pb-2 sm:pb-0">
                <button type="button" class="rounded-full bg-semmi px-4 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-semmi-dark transition-colors whitespace-nowrap">Semua</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Opini Kader</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Artikel Ilmiah</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Dokumen Publik</button>
                <button type="button" class="rounded-full bg-white px-4 py-1.5 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 transition-colors whitespace-nowrap">Jurnal</button>
            </div>

            <!-- Search -->
            <div class="relative w-full sm:w-64 flex-shrink-0">
                <input type="text" placeholder="Cari publikasi..." class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- MAIN CONTENT: LISTING -->
            <div class="w-full lg:w-2/3">
                @php
                    $publications = [
                        ['title' => 'Relevansi Nilai-Nilai Kepemudaan Syarikat Islam di Era Digital', 'type' => 'Opini Kader', 'author' => 'Muhammad Rizqi', 'date' => '05 Sep 2026', 'excerpt' => 'Menghadapi era disrupsi teknologi, pemuda Islam dihadapkan pada tantangan yang tidak mudah. Artikel ini mengupas bagaimana relevansi pemikiran HOS Tjokroaminoto dalam...'],
                        ['title' => 'Laporan Pertanggungjawaban (LPJ) Pengurus Besar SEMMI Periode 2023-2025', 'type' => 'Dokumen Publik', 'author' => 'Sekretariat Jenderal', 'date' => '28 Ags 2026', 'excerpt' => 'Dokumen resmi yang merangkum seluruh perjalanan, pencapaian program, serta laporan keuangan Pengurus Besar SEMMI selama satu periode kepengurusan (Format PDF).'],
                        ['title' => 'Membangun Kemandirian Ekonomi Umat Melalui Koperasi Mahasiswa', 'type' => 'Artikel Ilmiah', 'author' => 'Bidang Ekonomi & Kewirausahaan', 'date' => '12 Ags 2026', 'excerpt' => 'Kajian strategis mengenai urgensi pembentukan dan pengembangan Koperasi Mahasiswa (Kopma) di setiap kampus sebagai pilar kemandirian ekonomi kader SEMMI.'],
                        ['title' => 'Buku Panduan Kaderisasi Nasional (Buku Pedoman LK I, LK II, LK III)', 'type' => 'Publikasi Organisasi', 'author' => 'Bidang Kaderisasi', 'date' => '01 Ags 2026', 'excerpt' => 'Buku pedoman resmi yang menjadi rujukan utama dalam pelaksanaan jenjang kaderisasi (Basic, Intermediate, dan Advance Training) di lingkungan SEMMI seluruh Indonesia.'],
                    ];
                @endphp

                <div class="grid grid-cols-1 gap-8">
                    @foreach($publications as $pub)
                    <!-- PUBLICATION CARD -->
                    <div class="group flex flex-col sm:flex-row gap-6 bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        
                        <!-- Icon/Type Indicator -->
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-semmi/10 text-semmi group-hover:bg-semmi group-hover:text-white transition-colors">
                            @if($pub['type'] == 'Dokumen Publik' || $pub['type'] == 'Publikasi Organisasi')
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            @else
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2 text-xs">
                                <span class="font-bold uppercase tracking-wider text-semmi">{{ $pub['type'] }}</span>
                                <span class="text-gray-300">&bull;</span>
                                <time class="text-gray-500 font-medium">{{ $pub['date'] }}</time>
                            </div>
                            <h3 class="font-heading text-xl font-bold uppercase tracking-tight text-gray-900 group-hover:text-semmi transition-colors mb-2">
                                <a href="#">{{ $pub['title'] }}</a>
                            </h3>
                            <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                                {{ $pub['excerpt'] }}
                            </p>
                            
                            <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    Oleh: <span class="font-bold text-gray-900 ml-1">{{ $pub['author'] }}</span>
                                </div>
                                <a href="#" class="inline-flex items-center text-sm font-bold uppercase tracking-wide text-semmi hover:text-semmi-dark transition-colors">
                                    Baca
                                    <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                <div class="mt-12 text-center">
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-md border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 transition-colors">
                        Tampilkan Lebih Banyak
                    </button>
                </div>
            </div>

            <!-- SIDEBAR: KATEGORI & ARSIP -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-24">
                    
                    <h3 class="font-heading text-lg font-bold text-semmi-dark uppercase mb-5 border-b border-gray-100 pb-3">Kategori Publikasi</h3>
                    <ul role="list" class="space-y-3 mb-8">
                        <li>
                            <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                <span class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                    Opini Kader
                                </span>
                                <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">56</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                <span class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                    Artikel Ilmiah
                                </span>
                                <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">18</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                <span class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                    Dokumen Publik
                                </span>
                                <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">24</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                <span class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                    Jurnal
                                </span>
                                <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">8</span>
                            </a>
                        </li>
                    </ul>

                    <h3 class="font-heading text-lg font-bold text-semmi-dark uppercase mb-5 border-b border-gray-100 pb-3">Arsip</h3>
                    <ul role="list" class="space-y-3">
                        <li>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-semmi transition-colors underline underline-offset-4 decoration-gray-200 hover:decoration-semmi">2026</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-semmi transition-colors underline underline-offset-4 decoration-gray-200 hover:decoration-semmi">2025</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-semmi transition-colors underline underline-offset-4 decoration-gray-200 hover:decoration-semmi">2024</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
