@extends('public.layouts.app')
@section('title', '| Information & Opportunities')

@section('content')
<div class="bg-gray-50 min-h-screen pb-12">
    <!-- Hero Section -->
    <div class="bg-semmi text-white py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 font-heading uppercase tracking-wide">Information & Opportunities Hub</h1>
            <p class="text-lg text-semmi-light max-w-2xl mx-auto">
                Pusat informasi terpadu terkait beasiswa, event, pelatihan, dan berbagai kesempatan menarik lainnya untuk pengembangan diri Anda.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        
        <!-- Filter Bar -->
        <div class="mb-10">
            <form action="{{ route('opportunities.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                <div class="flex-grow">
                    <label class="sr-only" for="search">Pencarian</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" id="search" value="{{ request('search') }}" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-semmi focus:border-semmi sm:text-sm" placeholder="Cari judul informasi...">
                    </div>
                </div>
                
                <div class="md:w-64">
                    <label class="sr-only" for="category">Kategori</label>
                    <select name="category" id="category" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-lg focus:outline-none focus:ring-semmi focus:border-semmi sm:text-sm">
                        <option value="">Semua Kategori</option>
                        @foreach(['Informasi', 'Beasiswa', 'Event', 'Program', 'Kompetisi', 'Pelatihan', 'Lowongan', 'Pengumuman'] as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div>
                    <button type="submit" class="w-full md:w-auto bg-semmi hover:bg-semmi-dark text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                        Terapkan
                    </button>
                </div>
            </form>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($opportunities as $opp)
                <div class="group flex flex-col transition-transform hover:-translate-y-1">
                    <div class="relative h-56 bg-gray-100 rounded-2xl overflow-hidden mb-4">
                        @if($opp->thumbnail)
                            <img src="{{ $opp->thumbnail }}" alt="{{ $opp->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                        
                        <div class="absolute top-3 right-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/90 backdrop-blur-sm text-semmi shadow-sm">
                                {{ $opp->category }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 leading-snug mb-2 line-clamp-2 group-hover:text-semmi transition-colors">
                            {{ $opp->title }}
                        </h3>
                        
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg class="flex-shrink-0 mr-1.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>{{ $opp->created_at->translatedFormat('d F Y') }}</span>
                            @if($opp->provider)
                                <span class="mx-2">•</span>
                                <span class="truncate font-medium text-gray-600">{{ $opp->provider }}</span>
                            @endif
                        </div>
                        
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            {{ $opp->description ?? 'Tidak ada deskripsi singkat.' }}
                        </p>
                        
                        <div class="mt-auto pt-2">
                            <a href="{{ route('opportunities.show', $opp->slug) }}" class="inline-flex items-center text-semmi hover:text-semmi-dark font-semibold transition-colors">
                                Lihat Informasi
                                <svg class="ml-1 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-12 text-center bg-white rounded-xl border border-gray-200">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada data</h3>
                    <p class="mt-1 text-sm text-gray-500">Belum ada informasi yang sesuai dengan pencarian Anda.</p>
                    @if(request('search') || request('category'))
                        <div class="mt-6">
                            <a href="{{ route('opportunities.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-semmi bg-semmi-light hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-semmi">
                                Hapus Filter
                            </a>
                        </div>
                    @endif
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $opportunities->links() }}
        </div>

    </div>
</div>
@endsection
