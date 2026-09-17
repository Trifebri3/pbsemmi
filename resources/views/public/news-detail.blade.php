@extends('public.layouts.app')

@section('title', '| Detail Berita')

@section('content')

<!-- HEADER & BREADCRUMB -->
<div class="bg-white pt-24 pb-8 border-b border-gray-100">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
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
                    <a href="/berita" class="text-gray-500 hover:text-semmi transition-colors">Berita</a>
                </li>
                <li>
                    <svg class="h-4 w-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.5a.75.75 0 010 1.08l-4.5 4.5a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900 font-semibold" aria-current="page">Nasional</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="bg-white py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- MAIN ARTICLE -->
            <div class="w-full lg:w-2/3">
                
                <!-- Judul & Meta -->
                <div class="mb-10">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="inline-flex items-center rounded-md bg-semmi/10 px-2.5 py-1 text-sm font-bold uppercase tracking-wider text-semmi">Nasional</span>
                        <span class="text-sm font-medium text-gray-500 flex items-center">
                            <svg class="mr-1.5 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            12 September 2026
                        </span>
                    </div>
                    <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold uppercase tracking-tight text-gray-900 leading-tight mb-6">
                        Silaturahmi Kebangsaan PB SEMMI dengan Pimpinan MPR RI
                    </h1>
                    
                    <div class="flex items-center justify-between border-y border-gray-100 py-4">
                        <!-- Penulis -->
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">Bidang Kominfo PB SEMMI</p>
                                <p class="text-xs text-gray-500">Penulis</p>
                            </div>
                        </div>

                        <!-- Share Button -->
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Bagikan</span>
                            <div class="flex gap-2">
                                <a href="#" class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-colors">
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                </a>
                                <a href="#" class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-colors">
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                                </a>
                                <a href="#" class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-colors">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-10 w-full rounded-2xl bg-gray-200 aspect-[16/9] relative overflow-hidden shadow-sm">
                    <div class="absolute inset-0 bg-semmi/10 flex items-center justify-center">
                        <svg class="h-16 w-16 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                </div>

                <!-- Isi Berita -->
                <div class="prose prose-lg prose-semmi max-w-none text-gray-700">
                    <p><strong>JAKARTA</strong> — Dalam rangka memperkuat nilai-nilai kebangsaan dan mendiskusikan berbagai persoalan kepemudaan, perwakilan Pengurus Besar Serikat Mahasiswa Muslimin Indonesia (PB SEMMI) melakukan audiensi dan silaturahmi kebangsaan dengan Pimpinan Majelis Permusyawaratan Rakyat Republik Indonesia (MPR RI) di Gedung Nusantara III, Kompleks Parlemen, Senayan, Jakarta, pada hari ini.</p>
                    <p>Rombongan PB SEMMI yang dipimpin langsung oleh Ketua Umum disambut hangat oleh jajaran pimpinan MPR RI. Pertemuan ini berlangsung produktif dengan membahas berbagai isu strategis, khususnya terkait peran aktif mahasiswa Islam dalam mengawal demokrasi dan menanggulangi ancaman disintegrasi bangsa.</p>
                    <p>Ketua Umum PB SEMMI menyampaikan bahwa sebagai organisasi pergerakan, SEMMI akan terus memposisikan diri sebagai mitra kritis sekaligus strategis pemerintah. "Kami di SEMMI meyakini bahwa pemuda dan mahasiswa adalah tulang punggung peradaban bangsa. Oleh karena itu, sinergi dengan berbagai lembaga negara, termasuk MPR, sangat penting untuk menyamakan persepsi terkait konsensus dasar kebangsaan kita: Pancasila, UUD 1945, NKRI, dan Bhinneka Tunggal Ika," jelasnya.</p>
                    
                    <!-- Quote Block -->
                    <blockquote class="border-l-4 border-semmi-gold bg-gray-50 p-6 italic font-medium text-gray-900 my-8">
                        "Kami di SEMMI meyakini bahwa pemuda dan mahasiswa adalah tulang punggung peradaban bangsa. Sinergi dengan lembaga negara sangat penting untuk menyamakan persepsi."
                    </blockquote>

                    <p>Dalam kesempatan tersebut, Pimpinan MPR RI juga mengapresiasi langkah PB SEMMI yang terus konsisten menyuarakan isu-isu kebangsaan yang konstruktif. Diharapkan ke depannya, kolaborasi antara MPR dan SEMMI dapat terus berlanjut melalui berbagai program sosialisasi 4 Pilar Kebangsaan yang menyasar kalangan mahasiswa di kampus-kampus di seluruh Indonesia.</p>
                </div>

                <!-- Gallery -->
                <div class="mt-16 pt-10 border-t border-gray-100">
                    <h3 class="font-heading text-2xl font-bold uppercase text-semmi-dark mb-6">Galeri Kegiatan</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="aspect-square bg-gray-200 rounded-lg relative overflow-hidden"><div class="absolute inset-0 flex items-center justify-center bg-semmi/5"><svg class="h-8 w-8 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg></div></div>
                        <div class="aspect-square bg-gray-200 rounded-lg relative overflow-hidden"><div class="absolute inset-0 flex items-center justify-center bg-semmi/5"><svg class="h-8 w-8 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg></div></div>
                        <div class="aspect-square bg-gray-200 rounded-lg relative overflow-hidden"><div class="absolute inset-0 flex items-center justify-center bg-semmi/5"><svg class="h-8 w-8 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg></div></div>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR: RELATED ARTICLES -->
            <div class="w-full lg:w-1/3">
                <div class="bg-gray-50 rounded-xl p-6 lg:p-8 sticky top-24">
                    <h3 class="font-heading text-xl font-bold uppercase text-semmi-dark mb-6 border-b border-gray-200 pb-3">Berita Terkait</h3>
                    
                    <ul role="list" class="space-y-6">
                        <li class="group flex flex-col gap-y-3 cursor-pointer">
                            <div class="h-32 w-full rounded-md bg-gray-200 relative overflow-hidden">
                                <div class="absolute inset-0 bg-semmi/10 flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                                    <svg class="h-8 w-8 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 group-hover:text-semmi transition-colors line-clamp-2 leading-snug">Peringati Hari Kemerdekaan, SEMMI Jabar Gelar Diskusi Pemuda</h4>
                                <p class="text-xs text-gray-500 mt-1">20 Agustus 2026</p>
                            </div>
                        </li>

                        <li class="group flex flex-col gap-y-3 cursor-pointer pt-6 border-t border-gray-200">
                            <div class="h-32 w-full rounded-md bg-gray-200 relative overflow-hidden">
                                <div class="absolute inset-0 bg-semmi/10 flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                                    <svg class="h-8 w-8 text-semmi/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 group-hover:text-semmi transition-colors line-clamp-2 leading-snug">Tanggapan PB SEMMI Terkait Isu Kenaikan Harga Pangan</h4>
                                <p class="text-xs text-gray-500 mt-1">15 Agustus 2026</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
