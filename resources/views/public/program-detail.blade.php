@extends('public.layouts.app')

@section('title', '| Detail Program Kerja')

@section('content')

<!-- HEADER / COVER IMAGE -->
<div class="relative w-full h-[400px] lg:h-[500px] bg-gray-900 overflow-hidden">
    <!-- Placeholder untuk Cover Image -->
    <div class="absolute inset-0 bg-gradient-to-tr from-semmi-dark to-semmi-dark/80 mix-blend-multiply"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-20"></div>
    
    <div class="absolute inset-0 flex flex-col justify-end pb-12 sm:pb-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
            <span class="inline-block rounded-full bg-semmi-gold px-3 py-1 text-sm font-bold uppercase tracking-wider text-semmi-dark mb-4">
                Kaderisasi
            </span>
            <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold uppercase text-white max-w-4xl leading-tight">
                Latihan Kader I (Basic Training) Nasional 2026
            </h1>
        </div>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- LEFT COLUMN: Deskripsi & Dokumentasi -->
            <div class="w-full lg:w-2/3">
                
                <!-- Deskripsi -->
                <div class="prose prose-lg prose-semmi max-w-none text-gray-700">
                    <h2 class="font-heading text-2xl font-bold uppercase text-semmi-dark border-b border-gray-200 pb-2 mb-6">Deskripsi Program</h2>
                    <p>Latihan Kader I (LK I) atau Basic Training merupakan pintu gerbang pertama bagi mahasiswa Islam yang ingin bergabung dengan Serikat Mahasiswa Muslimin Indonesia (SEMMI). Program ini didesain secara nasional untuk menyamakan frekuensi dan standarisasi kualitas kader di seluruh Indonesia.</p>
                    <p>Kegiatan ini akan berlangsung selama 4 hari 3 malam dengan pendekatan materi di dalam ruangan (in-door) dan dinamika kelompok (out-door) untuk menanamkan pemahaman keislaman, kebangsaan, serta pengenalan dasar-dasar organisasi.</p>
                    
                    <h3 class="font-heading text-xl font-bold uppercase text-semmi-dark mt-10 mb-4">Tujuan Kegiatan</h3>
                    <ul>
                        <li>Terbinanya kepribadian Muslim yang berkualitas akademis, sadar akan fungsi dan peranannya dalam berorganisasi serta hak dan kewajibannya sebagai kader umat dan bangsa.</li>
                        <li>Memahami pedoman dasar organisasi SEMMI serta nilai-nilai dasar pergerakannya.</li>
                        <li>Membentuk karakter kepemimpinan awal yang siap terjun ke dunia aktivisme kampus dan masyarakat.</li>
                    </ul>
                </div>

                <!-- Dokumentasi -->
                <div class="mt-16">
                    <h2 class="font-heading text-2xl font-bold uppercase text-semmi-dark border-b border-gray-200 pb-2 mb-6">Dokumentasi</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <!-- Placeholder Foto 1 -->
                        <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden relative">
                            <div class="absolute inset-0 flex items-center justify-center bg-semmi/5">
                                <svg class="h-10 w-10 text-semmi/30" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                        </div>
                        <!-- Placeholder Foto 2 -->
                        <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden relative">
                            <div class="absolute inset-0 flex items-center justify-center bg-semmi/5">
                                <svg class="h-10 w-10 text-semmi/30" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                        </div>
                        <!-- Placeholder Foto 3 -->
                        <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden relative">
                            <div class="absolute inset-0 flex items-center justify-center bg-semmi/5">
                                <span class="text-sm font-bold text-semmi/50">+ 5 Foto</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Info Pelaksanaan & Related News -->
            <div class="w-full lg:w-1/3">
                
                <!-- Info Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8 -mt-24 lg:-mt-32 relative z-10">
                    <h3 class="font-heading text-lg font-bold uppercase text-semmi-dark border-b border-gray-100 pb-4 mb-6">Informasi Pelaksanaan</h3>
                    
                    <dl class="space-y-6">
                        <!-- Waktu -->
                        <div>
                            <dt class="flex items-center text-sm font-semibold text-gray-500 mb-1">
                                <svg class="h-5 w-5 mr-2 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Waktu
                            </dt>
                            <dd class="text-base font-bold text-gray-900 pl-7">15 - 18 Agustus 2026</dd>
                        </div>
                        
                        <!-- Lokasi -->
                        <div>
                            <dt class="flex items-center text-sm font-semibold text-gray-500 mb-1">
                                <svg class="h-5 w-5 mr-2 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lokasi
                            </dt>
                            <dd class="text-base font-bold text-gray-900 pl-7">Pusdiklat Kemensos, Jakarta</dd>
                        </div>
                        
                        <!-- Pelaksana -->
                        <div>
                            <dt class="flex items-center text-sm font-semibold text-gray-500 mb-1">
                                <svg class="h-5 w-5 mr-2 text-semmi-gold" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                                Pelaksana
                            </dt>
                            <dd class="text-base font-bold text-gray-900 pl-7">Pengurus Besar SEMMI (Bidang Kaderisasi)</dd>
                        </div>
                    </dl>
                </div>

                <!-- Related News -->
                <div class="mt-12">
                    <h3 class="font-heading text-lg font-bold uppercase text-semmi-dark mb-6">Berita Terkait</h3>
                    <ul role="list" class="space-y-6">
                        <!-- News Item 1 -->
                        <li class="group flex gap-x-4 cursor-pointer">
                            <div class="h-16 w-16 flex-none rounded-md bg-gray-200"></div>
                            <div>
                                <p class="text-sm font-bold text-gray-900 group-hover:text-semmi transition-colors line-clamp-2">Persiapan Latihan Kader I Tingkat Nasional Hampir Rampung</p>
                                <p class="text-xs text-gray-500 mt-1">10 Agustus 2026</p>
                            </div>
                        </li>
                        <!-- News Item 2 -->
                        <li class="group flex gap-x-4 cursor-pointer">
                            <div class="h-16 w-16 flex-none rounded-md bg-gray-200"></div>
                            <div>
                                <p class="text-sm font-bold text-gray-900 group-hover:text-semmi transition-colors line-clamp-2">500 Peserta Dari Berbagai Provinsi Siap Ikuti LK I SEMMI</p>
                                <p class="text-xs text-gray-500 mt-1">08 Agustus 2026</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
