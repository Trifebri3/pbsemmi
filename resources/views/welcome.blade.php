@extends('public.layouts.app')

@section('content')
<div class="bg-gray-50/50 min-h-screen font-sans selection:bg-semmi selection:text-white">
    
    <!-- Premium Hero Section -->
    <div class="relative bg-gradient-to-br from-semmi-dark via-semmi to-green-700 overflow-hidden pt-32 pb-20 lg:pt-48 lg:pb-32">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay"></div>
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-yellow-400 rounded-full blur-[120px] opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-[600px] h-[600px] bg-white rounded-full blur-[120px] opacity-10"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-yellow-300 text-sm font-bold tracking-widest uppercase mb-8 shadow-2xl">
                <span class="relative flex h-2.5 w-2.5 mr-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-yellow-500"></span>
                </span>
                Selamat Datang di SEMMI
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tight text-white mb-8 drop-shadow-2xl font-heading uppercase leading-tight">
                Membangun Generasi <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-600">Pemimpin Masa Depan</span>
            </h1>
            
            <p class="mt-6 text-lg md:text-xl lg:text-2xl leading-relaxed text-semmi-light/90 max-w-3xl mx-auto font-light mb-12">
                Serikat Mahasiswa Muslimin Indonesia (SEMMI) hadir sebagai wadah perjuangan intelektual, spiritual, dan sosial bagi mahasiswa di seluruh nusantara.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/organisasi" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 text-base font-bold text-semmi-dark bg-yellow-400 hover:bg-yellow-300 rounded-2xl shadow-lg shadow-yellow-400/30 transition-all transform hover:-translate-y-1 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400 uppercase tracking-wide">
                    Kenali Kami
                </a>
                <a href="/opportunities" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 text-base font-bold text-white bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 rounded-2xl shadow-lg transition-all transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white uppercase tracking-wide">
                    Jelajahi Peluang
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 -mt-16 sm:-mt-24 mb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-semmi to-green-600 text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-semmi/30 transform group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-semmi transition-colors">Intelektualitas</h3>
                <p class="text-gray-600 leading-relaxed">Mengembangkan wawasan, literasi, dan nalar kritis mahasiswa melalui berbagai diskusi dan kajian progresif.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="group bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-amber-500 text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-yellow-500/30 transform group-hover:-rotate-6 transition-transform">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-amber-500 transition-colors">Spiritualitas</h3>
                <p class="text-gray-600 leading-relaxed">Membentuk karakter yang kuat berlandaskan nilai-nilai keislaman dan etika luhur di tengah dinamika zaman.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="group bg-white/80 backdrop-blur-xl p-8 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/30 transform group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Solidaritas</h3>
                <p class="text-gray-600 leading-relaxed">Membangun kepedulian sosial, kebersamaan, dan kontribusi nyata bagi masyarakat serta kemajuan bangsa.</p>
            </div>
        </div>
    </div>
</div>
@endsection
