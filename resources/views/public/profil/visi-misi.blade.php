@extends('public.layouts.app')

@section('title', '| Visi & Misi')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-white pt-24 pb-12 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-gray-900 sm:text-5xl">Visi & Misi</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl">Arah, cita-cita, dan langkah strategis perjuangan Serikat Mahasiswa Muslimin Indonesia.</p>
        
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
                    <span class="text-gray-900 font-medium" aria-current="page">Visi & Misi</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- VISI & MISI SECTION -->
<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Visi -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-200">
                <div class="h-14 w-14 rounded-full bg-semmi/10 flex items-center justify-center mb-6">
                    <svg class="h-8 w-8 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h2 class="font-heading text-3xl font-bold uppercase text-gray-900 mb-4">Visi</h2>
                <p class="text-lg text-gray-700 leading-relaxed font-medium">
                    "Terwujudnya masyarakat adil makmur yang diridhai Allah Subhanahu Wata'ala melalui pergerakan mahasiswa Islam yang berkualitas, mandiri, dan berkarakter kebangsaan."
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-200">
                <div class="h-14 w-14 rounded-full bg-gray-100 flex items-center justify-center mb-6">
                    <svg class="h-8 w-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <h2 class="font-heading text-3xl font-bold uppercase text-gray-900 mb-6">Misi</h2>
                
                <ul role="list" class="space-y-4 text-gray-700">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Membina keislaman, keimanan, dan ketakwaan kader.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Mengembangkan potensi intelektual dan profesionalisme mahasiswa.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Berperan aktif dalam kehidupan berbangsa dan bernegara.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-semmi" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span>Menegakkan nilai-nilai keadilan sosial.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
