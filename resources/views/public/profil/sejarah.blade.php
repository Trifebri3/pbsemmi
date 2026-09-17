@extends('public.layouts.app')

@section('title', '| Sejarah')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-white pt-24 pb-12 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-heading text-4xl font-bold uppercase tracking-widest text-gray-900 sm:text-5xl">Sejarah SEMMI</h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl">Mengenal lebih dekat profil, sejarah, serta nilai-nilai dasar perjuangan Serikat Mahasiswa Muslimin Indonesia.</p>
        
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
                    <span class="text-gray-900 font-medium" aria-current="page">Sejarah</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <!-- Deskripsi Organisasi -->
            <div>
                <h2 class="font-heading text-3xl font-bold uppercase tracking-tight text-gray-900 sm:text-4xl">Mengenal Lebih Dekat</h2>
                <div class="mt-8 space-y-6 text-lg leading-8 text-gray-700">
                    <p class="font-medium text-gray-900">Serikat Mahasiswa Muslimin Indonesia (SEMMI) adalah organisasi pergerakan mahasiswa Islam yang berlandaskan pada nilai-nilai keislaman dan semangat kebangsaan.</p>
                    
                    <p>Lahir di tengah dinamika perjuangan bangsa, SEMMI berkomitmen untuk terus menjaga independensi, idealisme, dan integritas moral dalam mengawal setiap proses perjalanan bangsa Indonesia menuju cita-citanya.</p>
                    
                    <p>Fokus utama pergerakan kami adalah pembinaan kader yang intelektual, berakhlak mulia, serta memiliki kepekaan sosial tinggi, agar siap menjadi lokomotif perubahan dan pemimpin masa depan umat dan bangsa.</p>
                </div>
            </div>

            <!-- Foto Organisasi Placeholder -->
            <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] shadow-md border border-gray-200">
                <div class="absolute inset-0 bg-gray-300">
                    <img src="{{ asset('default.png') }}" alt="Sejarah SEMMI" class="object-cover w-full h-full opacity-90">
                </div>
            </div>

        </div>

        <!-- Nilai Organisasi -->
        <div class="mt-24 border-t border-gray-200 pt-16">
            <h3 class="font-heading text-2xl font-bold uppercase text-gray-900 text-center mb-10">Nilai-Nilai Dasar</h3>
            <dl class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 text-center shadow-sm">
                    <dt class="font-heading text-xl font-bold uppercase text-semmi mb-3">Keislaman</dt>
                    <dd class="text-sm text-gray-600">Menjadikan ajaran Islam sebagai landasan moral dan spiritual dalam setiap gerak langkah organisasi.</dd>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 text-center shadow-sm">
                    <dt class="font-heading text-xl font-bold uppercase text-semmi mb-3">Kebangsaan</dt>
                    <dd class="text-sm text-gray-600">Berkomitmen menjaga keutuhan NKRI dan berkontribusi untuk kemajuan bangsa dan negara.</dd>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 text-center shadow-sm">
                    <dt class="font-heading text-xl font-bold uppercase text-semmi mb-3">Intelektualitas</dt>
                    <dd class="text-sm text-gray-600">Mengedepankan tradisi keilmuan, berpikir kritis, dan inovatif dalam memecahkan masalah kemasyarakatan.</dd>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 text-center shadow-sm">
                    <dt class="font-heading text-xl font-bold uppercase text-semmi mb-3">Integritas</dt>
                    <dd class="text-sm text-gray-600">Menjunjung tinggi kejujuran, amanah, dan konsistensi antara perkataan dan perbuatan.</dd>
                </div>
            </dl>
        </div>

    </div>
</div>
@endsection
