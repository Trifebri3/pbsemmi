@extends('public.layouts.app')

@section('title', '| Detail Pengurus')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-semmi-dark pt-24 pb-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-semmi-gold sm:text-5xl">Profil Pengurus</h1>
        
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
                    <a href="/organisasi" class="text-gray-300 hover:text-white transition-colors">Organisasi</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="text-white font-medium" aria-current="page">Detail</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- MAIN CONTENT: DETAIL PENGURUS -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-6 lg:px-8">
        
        <!-- NOTE FOR BACKEND: Data yang ditampilkan di bawah ini HANYA data anggota yang diset 'is_public = true' oleh Admin sesuai SOW. -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            
            <!-- Cover / Banner Atas -->
            <div class="h-32 sm:h-48 w-full bg-gradient-to-r from-semmi-dark to-semmi relative">
                <!-- Motif islami atau ornamen bisa ditambahkan di sini -->
                <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')] mix-blend-overlay"></div>
            </div>

            <!-- Profile Info -->
            <div class="relative px-6 sm:px-12 pb-12">
                
                <!-- Foto Profile melayang di atas cover -->
                <div class="-mt-16 sm:-mt-24 mb-6 flex justify-center sm:justify-start">
                    <div class="h-32 w-32 sm:h-40 sm:w-40 rounded-full bg-gray-100 border-4 border-white shadow-md flex items-center justify-center overflow-hidden relative">
                         <!-- Placeholder image -->
                         <div class="absolute inset-0 bg-semmi/10 flex items-center justify-center">
                            <svg class="h-20 w-20 text-semmi/40" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                         </div>
                    </div>
                </div>

                <!-- Nama & Jabatan -->
                <div class="text-center sm:text-left mb-8">
                    <h2 class="font-heading text-3xl font-bold uppercase text-gray-900 tracking-tight">Ahmad Fauzi</h2>
                    <p class="text-lg font-semibold text-semmi mt-1">Ketua Umum</p>
                </div>

                <!-- List Detail (Hanya yang diizinkan publik) -->
                <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                    <div class="sm:col-span-1 border-t border-gray-100 pt-4">
                        <dt class="text-xs font-bold uppercase tracking-wider text-gray-500">Divisi / Bidang</dt>
                        <dd class="mt-1 text-sm font-medium text-gray-900">Pengurus Inti</dd>
                    </div>
                    <div class="sm:col-span-1 border-t border-gray-100 pt-4">
                        <dt class="text-xs font-bold uppercase tracking-wider text-gray-500">Periode Jabatan</dt>
                        <dd class="mt-1 text-sm font-medium text-gray-900">2026 - 2028</dd>
                    </div>
                    <div class="sm:col-span-1 border-t border-gray-100 pt-4">
                        <dt class="text-xs font-bold uppercase tracking-wider text-gray-500">Wilayah (Provinsi)</dt>
                        <dd class="mt-1 text-sm font-medium text-gray-900">Pusat</dd>
                    </div>
                    <div class="sm:col-span-1 border-t border-gray-100 pt-4">
                        <dt class="text-xs font-bold uppercase tracking-wider text-gray-500">Cabang (Kota/Kab)</dt>
                        <dd class="mt-1 text-sm font-medium text-gray-900">Pusat</dd>
                    </div>
                    <div class="sm:col-span-2 border-t border-gray-100 pt-4">
                        <dt class="text-xs font-bold uppercase tracking-wider text-gray-500">Komisariat (Kampus)</dt>
                        <dd class="mt-1 text-sm font-medium text-gray-900">Universitas Indonesia</dd>
                    </div>
                </dl>
                
            </div>
        </div>

        <div class="mt-8 flex justify-center">
            <a href="/organisasi" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-semmi transition-colors">
                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Struktur Organisasi
            </a>
        </div>

    </div>
</div>
@endsection
