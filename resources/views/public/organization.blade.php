@extends('public.layouts.app')

@section('title', '| Struktur Organisasi')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-white pt-24 pb-12 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-gray-900 sm:text-5xl">Struktur Kepengurusan</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-3xl">Kenali susunan pengurus Serikat Mahasiswa Muslimin Indonesia dari tingkat pusat hingga komisariat.</p>
        
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
                    <span class="text-gray-900 font-medium" aria-current="page">Organisasi</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- MAIN CONTENT: FILTER & PENGURUS -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-10">
            
            <!-- Sidebar: Filters -->
            <div class="w-full lg:w-1/4 flex-shrink-0">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-24">
                    <h3 class="font-heading text-lg font-bold text-semmi-dark uppercase mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-semmi" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        Filter Struktur
                    </h3>

                    <!-- Dummy Filter Form for Frontend -->
                    <form class="space-y-5">
                        
                        <!-- Filter Periode -->
                        <div>
                            <label for="periode" class="block text-sm font-semibold text-gray-700">Periode</label>
                            <select id="periode" name="periode" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                                <option>2026 - 2028</option>
                                <option>2023 - 2025</option>
                                <option>2020 - 2022</option>
                            </select>
                        </div>

                        <!-- Filter Wilayah -->
                        <div>
                            <label for="wilayah" class="block text-sm font-semibold text-gray-700">Wilayah</label>
                            <select id="wilayah" name="wilayah" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                                <option value="">Semua Wilayah</option>
                                <option>DKI Jakarta</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                            </select>
                        </div>

                        <!-- Filter Cabang -->
                        <div>
                            <label for="cabang" class="block text-sm font-semibold text-gray-700">Cabang</label>
                            <select id="cabang" name="cabang" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                                <option value="">Semua Cabang</option>
                                <option>Jakarta Pusat</option>
                                <option>Jakarta Selatan</option>
                                <option>Bandung</option>
                            </select>
                        </div>

                        <!-- Filter Komisariat -->
                        <div>
                            <label for="komisariat" class="block text-sm font-semibold text-gray-700">Komisariat</label>
                            <select id="komisariat" name="komisariat" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                                <option value="">Semua Komisariat</option>
                                <option>Universitas Indonesia</option>
                                <option>UIN Jakarta</option>
                            </select>
                        </div>

                        <!-- Filter Bidang/Divisi -->
                        <div>
                            <label for="bidang" class="block text-sm font-semibold text-gray-700">Bidang / Divisi</label>
                            <select id="bidang" name="bidang" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-semmi sm:text-sm">
                                <option value="">Semua Bidang</option>
                                <option>Pengurus Inti</option>
                                <option>Organisasi</option>
                                <option>Kaderisasi</option>
                                <option>Hukum & HAM</option>
                            </select>
                        </div>

                        <div class="pt-4">
                            <button type="button" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold uppercase tracking-wide text-white bg-semmi hover:bg-semmi-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-semmi transition-colors">
                                Terapkan Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Content Area: Grid Pengurus -->
            <div class="w-full lg:w-3/4">
                
                <div class="mb-8 flex items-center justify-between border-b border-gray-200 pb-5">
                    <h2 class="text-2xl font-bold font-heading text-semmi-dark uppercase tracking-wide">Pengurus Besar (Pusat)</h2>
                    <span class="inline-flex items-center rounded-full bg-semmi-light px-3 py-1 text-sm font-semibold text-semmi">
                        Menampilkan 12 Data
                    </span>
                </div>

                <!-- Mock Data for Cards -->
                @php
                    $pengurus = [
                        ['name' => 'Ahmad Fauzi', 'jabatan' => 'Ketua Umum', 'wilayah' => 'Pusat', 'cabang' => 'Pusat', 'periode' => '2026 - 2028', 'bidang' => 'Pengurus Inti'],
                        ['name' => 'Budi Santoso', 'jabatan' => 'Sekretaris Jenderal', 'wilayah' => 'Pusat', 'cabang' => 'Pusat', 'periode' => '2026 - 2028', 'bidang' => 'Pengurus Inti'],
                        ['name' => 'Siti Aminah', 'jabatan' => 'Bendahara Umum', 'wilayah' => 'Pusat', 'cabang' => 'Pusat', 'periode' => '2026 - 2028', 'bidang' => 'Pengurus Inti'],
                        ['name' => 'Rahmat Hidayat', 'jabatan' => 'Ketua Bidang Organisasi', 'wilayah' => 'Pusat', 'cabang' => 'Pusat', 'periode' => '2026 - 2028', 'bidang' => 'Organisasi'],
                        ['name' => 'Fatimah Az Zahra', 'jabatan' => 'Sekretaris Bidang Organisasi', 'wilayah' => 'Pusat', 'cabang' => 'Pusat', 'periode' => '2026 - 2028', 'bidang' => 'Organisasi'],
                        ['name' => 'Ilham Maulana', 'jabatan' => 'Ketua Bidang Kaderisasi', 'wilayah' => 'Pusat', 'cabang' => 'Pusat', 'periode' => '2026 - 2028', 'bidang' => 'Kaderisasi'],
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($pengurus as $person)
                    <!-- CARD PENGURUS -->
                    <a href="/organisasi/pengurus-pusat" class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all group block focus:outline-none focus:ring-2 focus:ring-semmi focus:ring-offset-2">
                        
                        <!-- Foto Bagian Atas -->
                        <div class="pt-6 pb-0 flex justify-center">
                            <div class="relative h-32 w-32 rounded-full bg-gray-100 overflow-hidden border-4 border-gray-100 group-hover:border-semmi transition-colors flex items-center justify-center">
                                <!-- Placeholder -->
                                <div class="absolute inset-0 bg-semmi/5 flex flex-col items-center justify-center transition-transform group-hover:scale-105">
                                    <svg class="h-16 w-16 text-semmi/30" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Data Informasi -->
                        <div class="p-5 border-t-4 border-semmi-gold">
                            <h3 class="text-lg font-bold text-gray-900 truncate" title="{{ $person['name'] }}">{{ $person['name'] }}</h3>
                            <p class="text-sm font-semibold text-semmi mt-1">{{ $person['jabatan'] }}</p>
                            
                            <div class="mt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="mr-2 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Wilayah: <span class="ml-1 font-medium text-gray-900">{{ $person['wilayah'] }}</span>
                                </div>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="mr-2 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    Cabang: <span class="ml-1 font-medium text-gray-900">{{ $person['cabang'] }}</span>
                                </div>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="mr-2 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Periode: <span class="ml-1 font-medium text-gray-900">{{ $person['periode'] }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /CARD PENGURUS -->
                    @endforeach
                </div>

                <!-- Pagination Placeholder -->
                <div class="mt-12 flex items-center justify-center">
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-semmi px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
