@extends('public.layouts.app')
@section('title', '| Information & Opportunities')

@section('content')
<div class="bg-gray-50/50 min-h-screen pb-12 font-sans selection:bg-semmi selection:text-white">
    
    <!-- Luxurious Hero Section -->
    <div class="relative bg-gradient-to-br from-semmi-dark via-semmi to-green-700 text-white py-24 px-4 overflow-hidden shadow-2xl">
        <!-- Abstract Background Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full bg-white opacity-5 blur-3xl mix-blend-overlay"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] rounded-full bg-yellow-400 opacity-10 blur-[100px] mix-blend-overlay translate-x-1/3 translate-y-1/3"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPjxyZWN0IHdpZHRoPSI4IiBoZWlnaHQ9IjgiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSIvPjxwYXRoIGQ9Ik0wIDBMOCA4Wk04IDBMMCA4WiIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')] opacity-30"></div>
        </div>

        <div class="relative max-w-7xl mx-auto text-center z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-yellow-300 text-xs font-bold tracking-widest uppercase mb-6 shadow-xl shadow-black/10">Discover Your Future</span>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold mb-6 font-heading uppercase tracking-tight drop-shadow-lg">
                Information & <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500 filter drop-shadow-md">Opportunities</span>
            </h1>
            
            <p class="text-lg md:text-xl text-semmi-light/90 max-w-3xl mx-auto leading-relaxed font-light">
                Pusat informasi terpadu terkait beasiswa, event, pelatihan, dan berbagai kesempatan emas untuk mengembangkan potensi diri Anda ke level berikutnya.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20">
        
        <!-- Premium Floating Filter Bar -->
        <div class="mb-14">
            <form action="{{ route('opportunities.index') }}" method="GET" class="bg-white/80 backdrop-blur-xl p-4 rounded-3xl shadow-2xl border border-white flex flex-col md:flex-row gap-4 items-center">
                <div class="flex-grow w-full">
                    <label class="sr-only" for="search">Pencarian</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-6 w-6 text-gray-400 group-focus-within:text-semmi transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" id="search" value="{{ request('search') }}" class="block w-full pl-12 pr-4 py-4 bg-gray-50/50 border-0 rounded-2xl focus:ring-2 focus:ring-semmi/50 text-gray-700 text-base placeholder-gray-400 transition-all shadow-inner" placeholder="Temukan kesempatan menarik...">
                    </div>
                </div>
                
                <div class="w-full md:w-64 flex-shrink-0">
                    <label class="sr-only" for="category">Kategori</label>
                    <div class="relative">
                        <select name="category" id="category" class="block w-full py-4 pl-4 pr-10 bg-gray-50/50 border-0 rounded-2xl focus:ring-2 focus:ring-semmi/50 text-gray-700 text-base appearance-none transition-all shadow-inner font-medium cursor-pointer">
                            <option value="">Semua Kategori</option>
                            @foreach(['Informasi', 'Beasiswa', 'Event', 'Program', 'Kompetisi', 'Pelatihan', 'Lowongan', 'Pengumuman'] as $cat)
                                <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>
                
                <div class="w-full md:w-auto flex-shrink-0">
                    <button type="submit" class="w-full md:w-auto bg-gradient-to-r from-semmi to-semmi-dark hover:from-semmi-dark hover:to-semmi text-white font-bold py-4 px-8 rounded-2xl shadow-lg shadow-semmi/30 transform transition-all hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-semmi active:scale-95 flex items-center justify-center gap-2">
                        <span>Eksplorasi</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Luxurious Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-10">
            @forelse($opportunities as $opp)
                <div class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 flex flex-col h-full border border-gray-100 hover:-translate-y-2">
                    <!-- Image Container with Hover Zoom -->
                    <div class="relative h-60 w-full overflow-hidden bg-gray-100">
                        @if($opp->thumbnail)
                            <img src="{{ $opp->thumbnail }}" alt="{{ $opp->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center text-gray-300 bg-gradient-to-br from-gray-50 to-gray-200">
                                <svg class="w-16 h-16 mb-2 opacity-50 group-hover:scale-110 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-sm font-medium opacity-50">No Image</span>
                            </div>
                        @endif
                        
                        <!-- Gradient Overlay for Image -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>

                        <!-- Floating Badges -->
                        <div class="absolute top-4 right-4 z-10 flex flex-col gap-2 items-end">
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide bg-white/90 backdrop-blur-md text-semmi shadow-lg border border-white/50">
                                {{ $opp->category }}
                            </span>
                        </div>
                        
                        <!-- Date overlay at bottom of image -->
                        <div class="absolute bottom-4 left-4 z-10">
                            <div class="flex items-center text-white/90 text-sm font-medium drop-shadow-md">
                                <svg class="mr-1.5 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>{{ $opp->created_at->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content Area -->
                    <div class="p-6 flex flex-col flex-grow bg-white relative z-20">
                        <h3 class="text-xl font-extrabold text-gray-900 leading-tight mb-3 line-clamp-2 group-hover:text-semmi transition-colors duration-300">
                            {{ $opp->title }}
                        </h3>
                        
                        @if($opp->provider)
                            <div class="inline-flex items-center px-3 py-1 bg-semmi-light/50 text-semmi-dark text-xs font-semibold rounded-lg mb-4 w-fit">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                {{ $opp->provider }}
                            </div>
                        @endif
                        
                        <p class="text-gray-500 text-sm line-clamp-3 mb-6 leading-relaxed">
                            {{ $opp->description ?? 'Informasi lebih detail mengenai kesempatan ini dapat dilihat pada halaman spesifik.' }}
                        </p>
                        
                        <!-- Action Button -->
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('opportunities.show', $opp->slug) }}" class="inline-flex items-center justify-center text-sm font-bold text-semmi group-hover:text-semmi-dark transition-colors">
                                Baca Selengkapnya
                            </a>
                            <a href="{{ route('opportunities.show', $opp->slug) }}" class="w-10 h-10 rounded-full bg-semmi-light flex items-center justify-center text-semmi group-hover:bg-semmi group-hover:text-white transition-all duration-300 transform group-hover:translate-x-1 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-span-full py-20 flex flex-col items-center justify-center text-center bg-white rounded-3xl border border-gray-100 shadow-xl relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-50/50 to-white pointer-events-none"></div>
                    <div class="relative z-10 p-4 bg-gray-50 rounded-full mb-4 shadow-inner">
                        <svg class="h-16 w-16 text-semmi/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z M10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-gray-900 mb-2 relative z-10">Pencarian Tidak Ditemukan</h3>
                    <p class="text-base text-gray-500 max-w-md mx-auto mb-8 relative z-10">Belum ada informasi yang sesuai dengan filter pencarian Anda. Coba gunakan kata kunci lain atau hapus filter.</p>
                    @if(request('search') || request('category'))
                        <div class="relative z-10">
                            <a href="{{ route('opportunities.index') }}" class="inline-flex items-center px-8 py-3 bg-semmi text-white font-bold rounded-2xl shadow-lg hover:bg-semmi-dark hover:shadow-xl transition-all transform hover:-translate-y-1">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                Reset Filter Pencarian
                            </a>
                        </div>
                    @endif
                </div>
            @endforelse
        </div>

        <!-- Pagination styling enhancement -->
        <div class="mt-12">
            {{ $opportunities->links() }}
        </div>

    </div>
</div>
@endsection

