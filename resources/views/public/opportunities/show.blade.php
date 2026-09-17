@extends('public.layouts.app')
@section('title', '| ' . $opportunity->title)

@section('content')
<div class="bg-gray-50 min-h-screen pb-12">
    <!-- Breadcrumb & Header -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex text-sm font-medium text-gray-500 mb-4" aria-label="Breadcrumb">
                <a href="{{ route('public.map') }}" class="hover:text-semmi transition-colors">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('opportunities.index') }}" class="hover:text-semmi transition-colors">Information & Opportunities</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900 truncate">{{ $opportunity->title }}</span>
            </nav>
            
            <div class="flex flex-col md:flex-row md:items-start justify-between gap-4">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-semmi-light text-semmi border border-green-200">
                            {{ $opportunity->category }}
                        </span>
                        @if($opportunity->is_featured)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-yellow-100 text-yellow-800">
                                Unggulan
                            </span>
                        @endif
                        <span class="text-sm text-gray-500 flex items-center">
                            <svg class="mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ $opportunity->created_at->translatedFormat('d F Y') }}
                        </span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight">
                        {{ $opportunity->title }}
                    </h1>
                    @if($opportunity->provider)
                        <p class="text-gray-600 mt-2 font-medium">Oleh: {{ $opportunity->provider }}</p>
                    @endif
                </div>
                
                @if($opportunity->embed_url)
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ $opportunity->external_url ?? $opportunity->embed_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-semmi transition-colors">
                            <svg class="mr-2 -ml-1 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Buka di Tab Baru
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="overflow-hidden">
            
            @if($opportunity->embed_url)
                <!-- EMBED MODE -->
                <div class="w-full relative rounded-2xl overflow-hidden shadow-lg mb-8" style="padding-top: 56.25%;">
                    <!-- 16:9 Aspect Ratio Container -->
                    <iframe 
                        src="{{ $opportunity->embed_url }}" 
                        class="absolute inset-0 w-full h-full border-0" 
                        allowfullscreen 
                        sandbox="allow-scripts allow-same-origin allow-popups allow-forms"
                        loading="lazy"
                        title="{{ $opportunity->title }}">
                    </iframe>
                </div>
                
                <div class="md:px-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Deskripsi</h3>
                    <div class="prose prose-green max-w-none text-gray-700 text-lg leading-relaxed">
                        {!! nl2br(e($opportunity->description)) !!}
                    </div>
                </div>

            @else
                <!-- EXTERNAL LINK MODE -->
                <div class="text-center flex flex-col items-center justify-center py-12 md:py-20">
                    @if($opportunity->thumbnail)
                        <img src="{{ $opportunity->thumbnail }}" alt="{{ $opportunity->title }}" class="w-full max-w-4xl rounded-2xl shadow-xl mb-10 object-cover max-h-[500px]">
                    @else
                        <div class="w-32 h-32 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 mb-6">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        </div>
                    @endif
                    
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Informasi Selengkapnya Tersedia di Situs Eksternal</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                        {{ $opportunity->description ?? 'Silakan kunjungi sumber asli untuk membaca informasi lengkap mengenai peluang ini.' }}
                    </p>
                    
                    @if($opportunity->external_url)
                        <a href="{{ $opportunity->external_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-semmi hover:bg-semmi-dark shadow-sm transition-all hover:shadow-md transform hover:-translate-y-0.5">
                            Kunjungi Sumber Informasi
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        
                        <p class="mt-4 text-xs text-gray-400 flex items-center justify-center">
                            <svg class="mr-1 h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            Mengarahkan ke: {{ parse_url($opportunity->external_url, PHP_URL_HOST) }}
                        </p>
                    @endif
                </div>
            @endif
            
        </div>
    </div>
</div>
@endsection
