@extends('public.layouts.app')

@section('title', '| Ruang Lingkup Tugas & Fungsi')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-white pt-24 pb-12 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-gray-900 sm:text-5xl">Tugas & Fungsi</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl">Ruang lingkup, peran utama, serta tanggung jawab strategis organisasi dalam pengabdian kepada masyarakat, bangsa, dan negara.</p>
        
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
                    <span class="text-gray-900 font-medium">Profil</span>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900 font-medium" aria-current="page">Tugas & Fungsi</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- TUGAS & FUNGSI SECTION -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Ruang Lingkup Tugas -->
            <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-sm border border-gray-200">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-semmi/10">
                        <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                        </svg>
                    </div>
                    <h2 class="font-heading text-2xl font-bold uppercase text-gray-900">Ruang Lingkup Tugas</h2>
                </div>
                
                <p class="text-gray-600 mb-6">
                    Dalam rangka mewujudkan visi dan misinya, organisasi memiliki tugas pokok yang mencakup:
                </p>
                <ul role="list" class="space-y-4 text-gray-700">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Menyelenggarakan pembinaan, pelatihan, dan pendidikan kepemimpinan.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Melakukan advokasi kebijakan publik yang berpihak pada keadilan sosial.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Membangun kemitraan strategis dengan berbagai pemangku kepentingan.</span>
                    </li>
                </ul>
            </div>

            <!-- Fungsi Organisasi -->
            <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-sm border border-gray-200">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-semmi/10">
                        <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                    </div>
                    <h2 class="font-heading text-2xl font-bold uppercase text-gray-900">Fungsi Strategis</h2>
                </div>
                
                <p class="text-gray-600 mb-6">
                    Organisasi berperan sebagai wadah pengabdian dengan fungsi-fungsi operasional:
                </p>
                <ul role="list" class="space-y-4 text-gray-700">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Sebagai laboratorium kepemimpinan mahasiswa Islam.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Sebagai sarana perumusan dan penyampaian aspirasi umat.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Sebagai katalisator pemberdayaan sosial dan ekonomi masyarakat.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
