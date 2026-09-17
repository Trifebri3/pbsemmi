@extends('public.layouts.app')

@section('title', '| Berita & Artikel')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-semmi-dark pt-24 pb-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-semmi-gold sm:text-5xl">Berita & Informasi</h1>
        
        <nav class="mt-6 flex" aria-label="Breadcrumb">
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
                    <span class="text-white font-medium" aria-current="page">Berita</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <!-- FEATURED NEWS -->
        <div class="mb-16">
            <div class="relative w-full h-[400px] sm:h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-md">
                <!-- Cover Image Placeholder -->
                <div class="absolute inset-0 bg-gray-300 flex items-center justify-center">
                    <svg class="h-20 w-20 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-semmi-dark via-semmi-dark/70 to-transparent"></div>
                
                <div class="absolute inset-0 flex flex-col justify-end p-8 sm:p-12">
                    <span class="inline-flex w-max items-center rounded-md bg-semmi-gold px-2.5 py-1 text-xs font-bold uppercase tracking-wider text-semmi-dark mb-4">Laporan Utama</span>
                    <h2 class="font-heading text-3xl sm:text-5xl font-bold uppercase text-white leading-tight max-w-4xl group-hover:text-gray-200 transition-colors">
                        <a href="/berita/semmi-tegaskan-komitmen-kawal-demokrasi">
                            <span class="absolute inset-0"></span>
                            PB SEMMI Resmi Gelar Rapat Kerja Nasional 2026 di Jakarta
                        </a>
                    </h2>
                    <div class="mt-4 flex items-center gap-4 text-sm text-gray-300">
                        <span class="flex items-center">
                            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            15 September 2026
                        </span>
                        <span class="flex items-center">
                            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            Bidang Humas
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- MAIN CONTENT: BERITA TERBARU -->
            <div class="w-full lg:w-2/3">
                <h3 class="font-heading text-2xl font-bold uppercase text-semmi-dark mb-8 border-b border-gray-200 pb-3">Berita Terbaru</h3>
                
                @php
                    $news = [
                        ['title' => 'Silaturahmi Kebangsaan PB SEMMI dengan Pimpinan MPR RI', 'date' => '12 Sep 2026', 'cat' => 'Nasional', 'excerpt' => 'Dalam rangka memperkuat nilai-nilai kebangsaan, perwakilan Pengurus Besar Serikat Mahasiswa Muslimin Indonesia (PB SEMMI) melakukan audiensi...'],
                        ['title' => 'Peringati Hari Kemerdekaan, SEMMI Jabar Gelar Diskusi Pemuda', 'date' => '20 Ags 2026', 'cat' => 'Daerah', 'excerpt' => 'Ratusan pemuda dan mahasiswa memadati aula utama untuk mengikuti diskusi kepemudaan yang diselenggarakan oleh Pimpinan Wilayah SEMMI Jawa Barat...'],
                        ['title' => 'Tanggapan PB SEMMI Terkait Isu Kenaikan Harga Pangan', 'date' => '15 Ags 2026', 'cat' => 'Pernyataan Sikap', 'excerpt' => 'Menyikapi polemik kenaikan harga bahan pokok, PB SEMMI mengeluarkan pernyataan resmi mendesak pemerintah untuk segera melakukan stabilisasi...'],
                        ['title' => 'Pelatihan Kepemimpinan Perempuan SEMMI Sukses Dilaksanakan', 'date' => '05 Ags 2026', 'cat' => 'Kegiatan', 'excerpt' => 'Bidang Pemberdayaan Perempuan PB SEMMI sukses melaksanakan program pelatihan kepemimpinan yang diikuti oleh puluhan delegasi kader perempuan dari seluruh Indonesia...'],
                    ];
                @endphp

                <div class="space-y-10">
                    @foreach($news as $item)
                    <!-- NEWS CARD (Horizontal) -->
                    <article class="relative flex flex-col sm:flex-row gap-6 group overflow-hidden bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <!-- Thumbnail -->
                        <div class="sm:w-1/3 shrink-0 h-48 sm:h-auto bg-gray-200 relative overflow-hidden">
                            <div class="absolute inset-0 bg-semmi/10 flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                                <svg class="h-8 w-8 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col justify-between p-6 sm:p-6 sm:pl-0">
                            <div>
                                <div class="flex items-center gap-x-4 text-xs mb-3">
                                    <time datetime="2026-09-12" class="text-gray-500 font-semibold">{{ $item['date'] }}</time>
                                    <span class="relative z-10 rounded-full bg-semmi/10 px-3 py-1 font-bold uppercase tracking-wider text-semmi">{{ $item['cat'] }}</span>
                                </div>
                                <h4 class="font-heading text-xl font-bold uppercase tracking-tight text-gray-900 group-hover:text-semmi transition-colors">
                                    <a href="/berita/semmi-tegaskan-komitmen-kawal-demokrasi">
                                        <span class="absolute inset-0"></span>
                                        {{ $item['title'] }}
                                    </a>
                                </h4>
                                <p class="mt-3 text-sm leading-6 text-gray-600 line-clamp-2">{{ $item['excerpt'] }}</p>
                            </div>
                            <div class="mt-4 flex items-center">
                                <span class="text-sm font-bold uppercase text-semmi group-hover:text-semmi-dark transition-colors inline-flex items-center">
                                    Baca Selengkapnya
                                    <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                                </span>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                <div class="mt-12 flex items-center justify-center">
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-semmi px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- SIDEBAR: SEARCH & CATEGORY -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-24">
                    
                    <!-- Search -->
                    <div class="mb-8">
                        <label for="search" class="block font-heading text-lg font-bold text-semmi-dark uppercase mb-3">Pencarian</label>
                        <div class="relative">
                            <input type="text" id="search" placeholder="Cari artikel..." class="block w-full rounded-md border-0 py-2.5 pl-4 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div>
                        <h4 class="font-heading text-lg font-bold text-semmi-dark uppercase mb-4 border-b border-gray-100 pb-2">Kategori Berita</h4>
                        <ul role="list" class="space-y-3">
                            <li>
                                <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                    <span class="flex items-center">
                                        <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                        Nasional
                                    </span>
                                    <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">24</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                    <span class="flex items-center">
                                        <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                        Daerah
                                    </span>
                                    <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">45</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                    <span class="flex items-center">
                                        <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                        Kegiatan
                                    </span>
                                    <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">31</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group flex items-center justify-between text-sm font-semibold text-gray-600 hover:text-semmi transition-colors">
                                    <span class="flex items-center">
                                        <svg class="mr-2 h-4 w-4 text-gray-400 group-hover:text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                        Pernyataan Sikap
                                    </span>
                                    <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs text-gray-500 group-hover:bg-semmi/10 group-hover:text-semmi">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
