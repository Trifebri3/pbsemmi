<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard Cabang: ') }} {{ $branch->name ?? 'Belum Diatur' }}
            </h2>
            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-bold">Admin Cabang</span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Profil Cabang -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 flex gap-6">
                    @if(isset($branch) && $branch->photo)
                        <img src="{{ $branch->photo }}" alt="Foto Sekretariat" class="w-32 h-32 object-cover rounded-xl shadow">
                    @else
                        <div class="w-32 h-32 bg-gray-100 flex items-center justify-center rounded-xl shadow text-gray-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                    
                    <div>
                        <h3 class="text-2xl font-bold mb-2">{{ $branch->name ?? 'Cabang Anda' }}</h3>
                        <p class="text-gray-600 mb-1 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            {{ $branch->address ?? 'Alamat belum diatur' }}
                        </p>
                        <p class="text-gray-600 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            {{ $branch->contact_number ?? 'Kontak belum diatur' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Main Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Data Anggota -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-blue-500">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Database Anggota</h4>
                        <p class="text-sm text-gray-500 mb-4">Kelola data kader dan anggota cabang Anda.</p>
                        <a href="{{ route('branch-admin.members.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors w-full">Kelola Anggota</a>
                    </div>
                </div>

                <!-- Laporan -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-amber-500">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-amber-50 text-amber-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Laporan Rutin</h4>
                        <p class="text-sm text-gray-500 mb-4">Kirimkan laporan berkala ke PB SEMMI.</p>
                        <a href="#" class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-4 rounded transition-colors w-full">Buat Laporan</a>
                    </div>
                </div>

                <!-- Publikasi -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-green-500">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-green-50 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pengajuan Publikasi</h4>
                        <p class="text-sm text-gray-500 mb-4">Ajukan artikel berita atau publikasi kegiatan.</p>
                        <a href="{{ route('branch-admin.submissions.index') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition-colors w-full">Kelola Publikasi</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
