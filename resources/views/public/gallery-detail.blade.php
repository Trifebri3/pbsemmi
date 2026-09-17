@extends('public.layouts.app')

@section('title', '| Detail Dokumentasi')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-semmi-dark pt-24 pb-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-gray-400 hover:text-white transition-colors">Beranda</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
                </li>
                <li>
                    <a href="/dokumentasi" class="text-gray-400 hover:text-white transition-colors">Dokumentasi</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
                </li>
                <li>
                    <span class="text-white font-semibold" aria-current="page">Nasional</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="bg-gray-50 pb-16 sm:pb-24">
    
    <!-- MAIN HERO IMAGE (Lightbox target placeholder) -->
    <div class="w-full h-[50vh] sm:h-[70vh] bg-gray-900 relative flex items-center justify-center cursor-zoom-in group">
        <div class="absolute inset-0 bg-semmi/10"></div>
        <svg class="h-24 w-24 text-white/30 group-hover:scale-110 transition-transform duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
        <div class="absolute bottom-6 right-6">
            <span class="inline-flex items-center gap-2 rounded-full bg-black/50 px-4 py-2 text-sm font-medium text-white backdrop-blur-md">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" /></svg>
                Perbesar
            </span>
        </div>
    </div>

    <div class="mx-auto max-w-5xl px-6 lg:px-8 mt-12">
        
        <!-- HEADER INFO -->
        <div class="text-center mb-12">
            <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold uppercase tracking-tight text-gray-900 mb-6">
                Latihan Kader I (Basic Training) Nasional 2026
            </h1>
            <div class="flex flex-wrap items-center justify-center gap-6 text-sm font-semibold text-gray-600">
                <span class="flex items-center">
                    <svg class="mr-2 h-5 w-5 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" /></svg>
                    15 Agustus 2026
                </span>
                <span class="flex items-center">
                    <svg class="mr-2 h-5 w-5 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                    Pusdiklat Kemensos, Jakarta
                </span>
            </div>
            
            <p class="mt-8 text-lg text-gray-700 max-w-3xl mx-auto">
                Potret antusiasme para calon kader dari berbagai daerah saat mengikuti serangkaian materi in-door dan dinamika kelompok pada Latihan Kader I Tingkat Nasional yang diselenggarakan oleh Pengurus Besar SEMMI. Kegiatan ini dihadiri langsung oleh Ketua Umum dan para pemateri nasional.
            </p>
        </div>

        <!-- MORE PHOTOS GALLERY -->
        <div class="mb-16">
            <h3 class="font-heading text-xl font-bold uppercase text-semmi-dark mb-6 border-b border-gray-200 pb-3">Galeri Foto (12)</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @for($i=1; $i<=8; $i++)
                <div class="aspect-square bg-gray-200 rounded-lg relative overflow-hidden group cursor-zoom-in">
                    <div class="absolute inset-0 flex items-center justify-center bg-semmi/5">
                        <svg class="h-8 w-8 text-semmi/30 group-hover:scale-125 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- VIDEOS (If Any) -->
        <div class="mb-16">
            <h3 class="font-heading text-xl font-bold uppercase text-semmi-dark mb-6 border-b border-gray-200 pb-3">Video Liputan</h3>
            <div class="aspect-video w-full max-w-3xl mx-auto bg-gray-900 rounded-2xl relative overflow-hidden shadow-lg flex items-center justify-center group cursor-pointer border border-gray-800">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-20"></div>
                <div class="h-20 w-20 rounded-full bg-semmi-gold/90 flex items-center justify-center pl-1 group-hover:bg-semmi-gold transition-colors z-10">
                    <svg class="h-10 w-10 text-semmi-dark" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                </div>
            </div>
        </div>

        <!-- PROGRAM TERKAIT -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 text-center">
            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">Program Terkait</h3>
            <h4 class="font-heading text-2xl font-bold text-semmi-dark uppercase mb-6">Latihan Kader I (Basic Training) Nasional</h4>
            <a href="/program/beasiswa-aktivis" class="inline-flex justify-center rounded-md bg-semmi px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-semmi-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi transition-colors">
                Lihat Detail Program
            </a>
        </div>

    </div>
</div>

@endsection
