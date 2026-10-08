@extends('public.layouts.app')

@section('title', '| Kontak Kami')

@section('content')

<div class="bg-gray-50/50 min-h-screen font-sans selection:bg-semmi selection:text-white pb-24">
    <!-- Premium Header / Hero -->
    <div class="relative w-full h-[450px] bg-gradient-to-br from-semmi-dark via-semmi to-green-700 flex items-center overflow-hidden shadow-2xl">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-5 mix-blend-overlay z-0"></div>
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-yellow-400 rounded-full blur-[100px] opacity-20"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-white rounded-full blur-[100px] opacity-10"></div>
        
        <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8 w-full text-center">
            <span class="inline-block py-1.5 px-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-yellow-300 text-xs font-bold tracking-widest uppercase mb-6 shadow-xl">Sapa Kami</span>
            <h1 class="font-heading text-5xl sm:text-6xl lg:text-7xl font-extrabold uppercase tracking-tight text-white mb-6 drop-shadow-lg">
                Hubungi Kami
            </h1>
            <p class="text-lg md:text-xl text-semmi-light/90 max-w-2xl mx-auto font-light leading-relaxed">
                Punya pertanyaan, saran, atau ingin mengundang PB SEMMI dalam kegiatan? Jangan ragu untuk menghubungi kami.
            </p>
        </div>
    </div>

    <div class="relative z-30 mx-auto max-w-7xl px-6 lg:px-8 -mt-24">
        
        <div class="flex flex-col lg:flex-row gap-10">
            
            <!-- LEFT COLUMN: Contact Info & Maps -->
            <div class="w-full lg:w-1/3 space-y-8">
                
                <!-- Premium Contact Cards -->
                <div class="bg-white/90 backdrop-blur-xl p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                    <h2 class="font-heading text-2xl font-bold uppercase text-gray-900 mb-8 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-semmi-light flex items-center justify-center text-semmi">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </span>
                        Info Kontak
                    </h2>
                    
                    <dl class="space-y-8 text-base text-gray-600">
                        <!-- Alamat -->
                        <div class="group flex gap-x-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors">
                            <dt class="flex-none">
                                <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-semmi-light to-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                </div>
                            </dt>
                            <dd>
                                <strong class="text-gray-900 block mb-1 font-bold">Sekretariat Pusat</strong>
                                <span class="text-sm leading-relaxed block">Gedung Pusat Perfilman H. Usmar Ismail Lt. 2<br>Jl. H.R. Rasuna Said Kav. C-22, Jakarta Selatan</span>
                            </dd>
                        </div>
                        
                        <!-- Email -->
                        <div class="group flex gap-x-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors">
                            <dt class="flex-none">
                                <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-semmi-light to-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                                </div>
                            </dt>
                            <dd class="flex items-center">
                                <a href="mailto:sekretariat@semmi.or.id" class="text-sm font-semibold text-gray-900 hover:text-semmi transition-colors">sekretariat@semmi.or.id</a>
                            </dd>
                        </div>
                        
                        <!-- WhatsApp -->
                        <div class="group flex gap-x-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors">
                            <dt class="flex-none">
                                <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-semmi-light to-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                                </div>
                            </dt>
                            <dd class="flex items-center">
                                <a href="https://wa.me/6281234567890" target="_blank" class="text-sm font-semibold text-gray-900 hover:text-semmi transition-colors">+62 812-3456-7890</a>
                            </dd>
                        </div>
                    </dl>
                </div>

                <!-- Google Maps (Premium Embed Placeholder) -->
                <div class="bg-white p-2 rounded-3xl shadow-xl overflow-hidden relative border border-gray-100 h-64 group hover:shadow-2xl transition-shadow">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.305608670417!2d106.82914197475061!3d-6.223377793764835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3fbba91ef41%3A0xcda6cf30b7c9ad0!2sGedung%20Pusat%20Perfilman%20H.%20Usmar%20Ismail!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                        class="absolute inset-0 w-full h-full rounded-[22px] border-0 filter grayscale hover:grayscale-0 transition-all duration-700" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <!-- RIGHT COLUMN: Contact Form -->
            <div class="w-full lg:w-2/3">
                <div class="bg-white/95 backdrop-blur-2xl rounded-3xl shadow-2xl border border-gray-100 p-8 sm:p-12 relative overflow-hidden">
                    <!-- Form decorative blob -->
                    <div class="absolute -top-32 -right-32 w-64 h-64 bg-semmi-light/50 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <h2 class="font-heading text-3xl font-extrabold uppercase text-gray-900 mb-2 relative z-10">Kirim <span class="text-semmi">Pesan</span></h2>
                    <p class="text-sm text-gray-500 mb-10 relative z-10">Isi formulir di bawah ini dengan detail, dan kami akan membalas pesan Anda secepatnya.</p>
                    
                    <form action="#" method="POST" class="space-y-8 relative z-10">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <div>
                                <label for="nama" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="block w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-gray-900 focus:ring-2 focus:ring-semmi/50 focus:border-semmi focus:bg-white transition-all shadow-inner" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="instansi" class="block text-sm font-bold text-gray-700 mb-2">Instansi / Organisasi</label>
                                <input type="text" name="instansi" id="instansi" class="block w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-gray-900 focus:ring-2 focus:ring-semmi/50 focus:border-semmi focus:bg-white transition-all shadow-inner" placeholder="Universitas / Lembaga">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <div>
                                <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Valid</label>
                                <input type="email" name="email" id="email" class="block w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-gray-900 focus:ring-2 focus:ring-semmi/50 focus:border-semmi focus:bg-white transition-all shadow-inner" placeholder="anda@email.com">
                            </div>
                            <div>
                                <label for="telepon" class="block text-sm font-bold text-gray-700 mb-2">No. WhatsApp</label>
                                <input type="tel" name="telepon" id="telepon" class="block w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-gray-900 focus:ring-2 focus:ring-semmi/50 focus:border-semmi focus:bg-white transition-all shadow-inner" placeholder="0812...">
                            </div>
                        </div>

                        <div>
                            <label for="subjek" class="block text-sm font-bold text-gray-700 mb-2">Subjek Pesan</label>
                            <input type="text" name="subjek" id="subjek" class="block w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-gray-900 focus:ring-2 focus:ring-semmi/50 focus:border-semmi focus:bg-white transition-all shadow-inner" placeholder="Perihal pesan Anda">
                        </div>

                        <div>
                            <label for="pesan" class="block text-sm font-bold text-gray-700 mb-2">Detail Pesan</label>
                            <textarea id="pesan" name="pesan" rows="6" class="block w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-gray-900 focus:ring-2 focus:ring-semmi/50 focus:border-semmi focus:bg-white transition-all shadow-inner resize-none" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="button" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 rounded-xl bg-gradient-to-r from-semmi to-green-600 hover:from-semmi-dark hover:to-semmi text-sm font-bold uppercase tracking-widest text-white shadow-lg shadow-semmi/30 transform hover:-translate-y-1 hover:shadow-xl transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-semmi">
                                <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
