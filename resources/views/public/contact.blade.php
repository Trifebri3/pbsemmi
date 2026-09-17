@extends('public.layouts.app')

@section('title', '| Kontak Kami')

@section('content')

<!-- HEADER / HERO -->
<div class="relative w-full h-[350px] bg-semmi-dark flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-semmi-dark to-semmi z-10 opacity-90"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-10 z-0"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8 w-full">
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-tight text-white mb-4">
            Hubungi Kami
        </h1>
        <p class="text-lg text-gray-200 max-w-2xl">
            Punya pertanyaan, saran, atau ingin mengundang PB SEMMI dalam kegiatan? Jangan ragu untuk menghubungi kami melalui kanal resmi di bawah ini.
        </p>
    </div>
</div>

<div class="bg-gray-50 py-16 sm:py-24 relative -mt-16 z-30">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- LEFT COLUMN: Contact Info & Maps -->
            <div class="w-full lg:w-1/2 space-y-8">
                
                <!-- Contact Cards -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <h2 class="font-heading text-2xl font-bold uppercase text-semmi-dark mb-6">Informasi Kontak</h2>
                    
                    <dl class="space-y-6 text-base text-gray-600">
                        <!-- Alamat -->
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Alamat</span>
                                <div class="h-10 w-10 rounded-full bg-semmi/10 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                </div>
                            </dt>
                            <dd>
                                <strong class="text-gray-900 block mb-1">Sekretariat Pengurus Besar</strong>
                                Gedung Pusat Perfilman H. Usmar Ismail Lt. 2<br>
                                Jl. H.R. Rasuna Said Kav. C-22, Kuningan,<br>
                                Jakarta Selatan, DKI Jakarta 12940
                            </dd>
                        </div>
                        <!-- Email -->
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <div class="h-10 w-10 rounded-full bg-semmi/10 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                                </div>
                            </dt>
                            <dd class="flex items-center">
                                <a href="mailto:sekretariat@semmi.or.id" class="hover:text-semmi font-medium transition-colors">sekretariat@semmi.or.id</a>
                            </dd>
                        </div>
                        <!-- WhatsApp -->
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">WhatsApp</span>
                                <div class="h-10 w-10 rounded-full bg-semmi/10 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                                </div>
                            </dt>
                            <dd class="flex items-center">
                                <a href="https://wa.me/6281234567890" target="_blank" class="hover:text-semmi font-medium transition-colors">+62 812-3456-7890 (Admin / Humas)</a>
                            </dd>
                        </div>
                    </dl>

                    <!-- Social Media -->
                    <div class="mt-10 border-t border-gray-100 pt-8">
                        <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-4">Sosial Media Kami</h3>
                        <div class="flex gap-4">
                            <a href="#" class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-all transform hover:-translate-y-1">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            <a href="#" class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-all transform hover:-translate-y-1">
                                <span class="sr-only">Twitter / X</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-all transform hover:-translate-y-1">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-semmi hover:text-white transition-all transform hover:-translate-y-1">
                                <span class="sr-only">YouTube</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Google Maps (Embed Placeholder) -->
                <div class="bg-gray-300 w-full h-80 rounded-2xl shadow-md overflow-hidden relative border border-gray-200">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.305608670417!2d106.82914197475061!3d-6.223377793764835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3fbba91ef41%3A0xcda6cf30b7c9ad0!2sGedung%20Pusat%20Perfilman%20H.%20Usmar%20Ismail!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                        class="absolute inset-0 w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <!-- RIGHT COLUMN: Contact Form -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8 sm:p-10">
                    <h2 class="font-heading text-2xl font-bold uppercase text-semmi-dark mb-2">Kirim Pesan</h2>
                    <p class="text-sm text-gray-500 mb-8">Isi formulir di bawah ini dan kami akan membalas pesan Anda secepatnya.</p>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="instansi" class="block text-sm font-semibold leading-6 text-gray-900">Instansi / Organisasi</label>
                                <div class="mt-2">
                                    <input type="text" name="instansi" id="instansi" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="telepon" class="block text-sm font-semibold leading-6 text-gray-900">No. Telepon / WhatsApp</label>
                                <div class="mt-2">
                                    <input type="tel" name="telepon" id="telepon" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="subjek" class="block text-sm font-semibold leading-6 text-gray-900">Subjek</label>
                            <div class="mt-2">
                                <input type="text" name="subjek" id="subjek" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="pesan" class="block text-sm font-semibold leading-6 text-gray-900">Isi Pesan</label>
                            <div class="mt-2">
                                <textarea id="pesan" name="pesan" rows="5" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>

                        <div>
                            <button type="button" class="w-full flex justify-center items-center rounded-md bg-semmi px-3 py-3.5 text-sm font-bold uppercase tracking-widest text-white shadow-sm hover:bg-semmi-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi transition-colors">
                                <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" /></svg>
                                Kirim Pesan Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
