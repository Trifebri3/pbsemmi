<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 bg-gradient-to-r from-semmi-dark via-semmi to-green-800 p-6 rounded-2xl shadow-xl transform transition-all hover:scale-[1.01]">
            <div>
                <h2 class="font-extrabold text-2xl text-white tracking-wide uppercase font-heading drop-shadow-md">
                    {{ __('Dashboard Cabang: ') }} <span class="text-yellow-400">{{ $branch->name ?? 'Belum Diatur' }}</span>
                </h2>
                <p class="text-semmi-light text-sm mt-1 opacity-90">Selamat datang kembali di panel administrasi cabang.</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="px-5 py-2 bg-white/20 backdrop-blur-md border border-white/30 text-white rounded-full text-sm font-bold shadow-lg flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
                    Admin Cabang
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50/50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Profil Cabang Card -->
            <div class="relative group bg-white overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100">
                <!-- Decorative background elements -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-gradient-to-br from-green-100 to-green-50 opacity-50 blur-3xl group-hover:scale-110 transition-transform duration-700"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-gradient-to-tr from-yellow-50 to-transparent opacity-50 blur-3xl group-hover:scale-110 transition-transform duration-700"></div>

                <div class="relative p-8 md:p-10 flex flex-col md:flex-row gap-8 items-center md:items-start z-10">
                    <!-- Photo -->
                    <div class="relative flex-shrink-0 group-hover:-translate-y-2 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-tr from-semmi to-yellow-400 rounded-3xl blur opacity-30 group-hover:opacity-50 transition-opacity"></div>
                        @if(isset($branch) && $branch->photo)
                            <img src="{{ $branch->photo }}" alt="Foto Sekretariat" class="relative w-40 h-40 object-cover rounded-3xl shadow-lg border-4 border-white">
                        @else
                            <div class="relative w-40 h-40 bg-gradient-to-br from-gray-50 to-gray-200 flex items-center justify-center rounded-3xl shadow-lg border-4 border-white text-gray-400">
                                <svg class="w-16 h-16 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Info -->
                    <div class="text-center md:text-left flex-grow">
                        <div class="inline-block px-3 py-1 bg-green-100 text-semmi text-xs font-bold rounded-full mb-3 uppercase tracking-wider">Profil Sekretariat</div>
                        <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 tracking-tight group-hover:text-semmi transition-colors">{{ $branch->name ?? 'Cabang Anda' }}</h3>
                        
                        <div class="space-y-3">
                            <div class="flex items-start md:items-center justify-center md:justify-start gap-3 p-3 bg-gray-50 rounded-2xl transition-colors hover:bg-gray-100">
                                <div class="bg-white p-2 rounded-full shadow-sm text-semmi">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">{{ $branch->address ?? 'Alamat belum diatur' }}</span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start gap-3 p-3 bg-gray-50 rounded-2xl transition-colors hover:bg-gray-100">
                                <div class="bg-white p-2 rounded-full shadow-sm text-semmi">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <span class="text-gray-700 font-medium">{{ $branch->contact_number ?? 'Kontak belum diatur' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Data Anggota -->
                <div class="group relative bg-white rounded-3xl p-1 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-3xl opacity-0 group-hover:opacity-100 blur transition-opacity duration-300"></div>
                    <div class="relative h-full bg-white rounded-[23px] p-8 flex flex-col justify-between overflow-hidden">
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-blue-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-700"></div>
                        
                        <div class="relative z-10 text-center flex-grow flex flex-col items-center justify-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-50 text-blue-600 rounded-2xl shadow-sm flex items-center justify-center mx-auto mb-6 transform group-hover:rotate-6 transition-transform duration-300">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Database Anggota</h4>
                            <p class="text-sm text-gray-500 leading-relaxed mb-8">Kelola data kader dan anggota cabang Anda secara komprehensif.</p>
                        </div>
                        
                        <div class="relative z-10 w-full mt-auto">
                            <a href="{{ route('branch-admin.members.index') }}" class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-blue-500/30 transition-all group-hover:shadow-blue-500/50">
                                <span>Kelola Anggota</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Laporan -->
                <div class="group relative bg-white rounded-3xl p-1 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-500 to-orange-400 rounded-3xl opacity-0 group-hover:opacity-100 blur transition-opacity duration-300"></div>
                    <div class="relative h-full bg-white rounded-[23px] p-8 flex flex-col justify-between overflow-hidden">
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-amber-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-700"></div>
                        
                        <div class="relative z-10 text-center flex-grow flex flex-col items-center justify-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-amber-100 to-amber-50 text-amber-600 rounded-2xl shadow-sm flex items-center justify-center mx-auto mb-6 transform group-hover:-rotate-6 transition-transform duration-300">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-amber-600 transition-colors">Laporan Rutin</h4>
                            <p class="text-sm text-gray-500 leading-relaxed mb-8">Kirimkan dan pantau laporan berkala cabang Anda ke PB SEMMI.</p>
                        </div>
                        
                        <div class="relative z-10 w-full mt-auto">
                            <a href="#" class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-500/30 transition-all group-hover:shadow-amber-500/50">
                                <span>Buat Laporan</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Publikasi -->
                <div class="group relative bg-white rounded-3xl p-1 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-400 rounded-3xl opacity-0 group-hover:opacity-100 blur transition-opacity duration-300"></div>
                    <div class="relative h-full bg-white rounded-[23px] p-8 flex flex-col justify-between overflow-hidden">
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-green-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-700"></div>
                        
                        <div class="relative z-10 text-center flex-grow flex flex-col items-center justify-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-50 text-green-600 rounded-2xl shadow-sm flex items-center justify-center mx-auto mb-6 transform group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">Pengajuan Publikasi</h4>
                            <p class="text-sm text-gray-500 leading-relaxed mb-8">Ajukan artikel, berita, atau publikasi kegiatan resmi cabang.</p>
                        </div>
                        
                        <div class="relative z-10 w-full mt-auto">
                            <a href="{{ route('branch-admin.submissions.index') }}" class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-700 hover:to-emerald-600 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-green-500/30 transition-all group-hover:shadow-green-500/50">
                                <span>Kelola Publikasi</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
