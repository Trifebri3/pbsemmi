@extends('public.layouts.app')

@section('title', '| Struktur Organisasi')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="relative bg-gradient-to-br from-gray-900 to-semmi-dark pt-32 pb-20 overflow-hidden shadow-2xl">
    <!-- Decorative Shapes -->
    <div class="absolute inset-0 z-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] mix-blend-overlay"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-500 rounded-full blur-[120px] opacity-20 -mr-20 -mt-20"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-semmi rounded-full blur-[100px] opacity-30 -ml-20 -mb-20"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 text-center sm:text-left flex flex-col sm:flex-row justify-between items-center gap-6">
        <div>
            <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold uppercase tracking-tight text-white mb-4 drop-shadow-md">
                Struktur <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500">Organisasi</span>
            </h1>
            <p class="mt-2 text-lg text-semmi-light/90 max-w-2xl font-light">
                Kenali susunan pengurus Serikat Mahasiswa Muslimin Indonesia dari tingkat pusat hingga komisariat.
            </p>
        </div>
        
        <nav class="flex bg-white/10 backdrop-blur-md px-6 py-3 rounded-full border border-white/20 shadow-xl" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-white hover:text-yellow-300 transition-colors font-semibold">Beranda</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-white/50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="text-yellow-300 font-bold tracking-wide" aria-current="page">Organisasi</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- MAIN CONTENT: FILTER & PENGURUS -->
<div class="bg-gray-50/50 py-16 sm:py-24 selection:bg-semmi selection:text-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-10">
            
            <!-- Sidebar: Premium Filters -->
            <div class="w-full lg:w-1/4 flex-shrink-0">
                <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl border border-gray-100 p-8 sticky top-24">
                    <h3 class="font-heading text-xl font-bold text-gray-900 uppercase mb-8 flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-semmi-light flex items-center justify-center text-semmi shadow-inner">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                        </span>
                        Filter
                    </h3>

                    <!-- Dummy Filter Form for Frontend -->
                    <form class="space-y-6">
                        
                        <!-- Filter Periode -->
                        <div>
                            <label for="periode" class="block text-sm font-bold text-gray-700 mb-2">Periode Kepengurusan</label>
                            <select id="periode" name="periode" class="block w-full rounded-xl bg-gray-50 border-0 py-3 pl-4 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-200 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm font-medium cursor-pointer transition-all">
                                <option>2026 - 2028</option>
                                <option>2023 - 2025</option>
                                <option>2020 - 2022</option>
                            </select>
                        </div>

                        <!-- Filter Wilayah -->
                        <div>
                            <label for="wilayah" class="block text-sm font-bold text-gray-700 mb-2">Wilayah</label>
                            <select id="wilayah" name="wilayah" class="block w-full rounded-xl bg-gray-50 border-0 py-3 pl-4 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-200 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm font-medium cursor-pointer transition-all">
                                <option value="">Semua Wilayah</option>
                                <option>DKI Jakarta</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                            </select>
                        </div>

                        <!-- Filter Cabang -->
                        <div>
                            <label for="cabang" class="block text-sm font-bold text-gray-700 mb-2">Cabang</label>
                            <select id="cabang" name="cabang" class="block w-full rounded-xl bg-gray-50 border-0 py-3 pl-4 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-200 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm font-medium cursor-pointer transition-all">
                                <option value="">Semua Cabang</option>
                                <option>Jakarta Pusat</option>
                                <option>Jakarta Selatan</option>
                                <option>Bandung</option>
                            </select>
                        </div>

                        <!-- Filter Komisariat -->
                        <div>
                            <label for="komisariat" class="block text-sm font-bold text-gray-700 mb-2">Komisariat</label>
                            <select id="komisariat" name="komisariat" class="block w-full rounded-xl bg-gray-50 border-0 py-3 pl-4 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-200 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm font-medium cursor-pointer transition-all">
                                <option value="">Semua Komisariat</option>
                                <option>Universitas Indonesia</option>
                                <option>UIN Jakarta</option>
                            </select>
                        </div>

                        <!-- Filter Bidang/Divisi -->
                        <div>
                            <label for="bidang" class="block text-sm font-bold text-gray-700 mb-2">Bidang / Divisi</label>
                            <select id="bidang" name="bidang" class="block w-full rounded-xl bg-gray-50 border-0 py-3 pl-4 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-200 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm font-medium cursor-pointer transition-all">
                                <option value="">Semua Bidang</option>
                                <option>Pengurus Inti</option>
                                <option>Organisasi</option>
                                <option>Kaderisasi</option>
                                <option>Hukum & HAM</option>
                            </select>
                        </div>

                        <div class="pt-6 border-t border-gray-100">
                            <button type="button" class="w-full flex justify-center items-center py-3.5 px-4 rounded-xl shadow-lg text-sm font-bold uppercase tracking-widest text-white bg-gradient-to-r from-semmi to-semmi-dark hover:from-semmi-dark hover:to-semmi focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-semmi transition-all transform hover:-translate-y-1 hover:shadow-xl">
                                Terapkan Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Content Area: Grid Pengurus -->
            <div class="w-full lg:w-3/4">
                
                <div class="mb-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b border-gray-200 pb-6">
                    <h2 class="text-3xl font-extrabold font-heading text-gray-900 uppercase tracking-tight">Pengurus Besar (Pusat)</h2>
                    <span class="inline-flex items-center rounded-full bg-white px-4 py-1.5 text-sm font-bold text-semmi border border-gray-200 shadow-sm">
                        Total 12 Pengurus
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

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach($pengurus as $person)
                    <!-- CARD PENGURUS -->
                    <a href="/organisasi/pengurus-pusat" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:-translate-y-2 focus:outline-none focus:ring-2 focus:ring-semmi focus:ring-offset-2 flex flex-col h-full">
                        
                        <!-- Premium Header Image / Color block -->
                        <div class="h-24 w-full bg-gradient-to-r from-semmi via-semmi-dark to-green-800 opacity-90 group-hover:opacity-100 transition-opacity"></div>
                        
                        <!-- Avatar -->
                        <div class="absolute top-8 left-1/2 -translate-x-1/2">
                            <div class="relative h-28 w-28 rounded-full bg-white p-1.5 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <div class="h-full w-full rounded-full bg-gray-50 flex items-center justify-center overflow-hidden">
                                    <!-- Placeholder -->
                                    <svg class="h-16 w-16 text-gray-300 transform translate-y-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Data Informasi -->
                        <div class="pt-16 pb-8 px-6 text-center flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-semmi transition-colors truncate" title="{{ $person['name'] }}">{{ $person['name'] }}</h3>
                                <p class="text-sm font-bold text-yellow-500 mt-1 uppercase tracking-wide">{{ $person['jabatan'] }}</p>
                            </div>
                            
                            <div class="mt-6 flex flex-col gap-2">
                                <div class="bg-gray-50 rounded-xl p-3 flex flex-col text-sm border border-gray-100 group-hover:bg-semmi-light/30 transition-colors">
                                    <span class="text-gray-400 text-xs font-semibold uppercase tracking-wider mb-1">Wilayah & Cabang</span>
                                    <span class="font-bold text-gray-700">{{ $person['wilayah'] }} - {{ $person['cabang'] }}</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2 text-xs">
                                    <div class="bg-gray-50 rounded-lg py-2 px-2 border border-gray-100">
                                        <span class="block text-gray-400 font-semibold mb-0.5">Bidang</span>
                                        <span class="font-bold text-gray-700 truncate block">{{ $person['bidang'] }}</span>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg py-2 px-2 border border-gray-100">
                                        <span class="block text-gray-400 font-semibold mb-0.5">Periode</span>
                                        <span class="font-bold text-gray-700 block">{{ $person['periode'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /CARD PENGURUS -->
                    @endforeach
                </div>

                <!-- Pagination Placeholder Premium -->
                <div class="mt-14 flex items-center justify-center">
                    <nav class="isolate inline-flex -space-x-px rounded-xl shadow-md bg-white overflow-hidden border border-gray-200" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-3 py-2 text-gray-400 hover:bg-gray-50 focus:z-20 transition-colors">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-semmi px-5 py-2.5 text-sm font-bold text-white focus:z-20 border-l border-r border-semmi">1</a>
                        <a href="#" class="relative inline-flex items-center px-5 py-2.5 text-sm font-bold text-gray-700 hover:bg-gray-50 hover:text-semmi focus:z-20 transition-colors border-r border-gray-200">2</a>
                        <a href="#" class="relative hidden items-center px-5 py-2.5 text-sm font-bold text-gray-700 hover:bg-gray-50 hover:text-semmi focus:z-20 transition-colors border-r border-gray-200 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2.5 text-sm font-semibold text-gray-400 border-r border-gray-200">...</span>
                        <a href="#" class="relative inline-flex items-center px-3 py-2 text-gray-400 hover:bg-gray-50 focus:z-20 transition-colors">
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
