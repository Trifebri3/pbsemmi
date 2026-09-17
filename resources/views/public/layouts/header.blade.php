<header x-data="{ mobileMenuOpen: false, scrolled: false }"
        @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
        :class="{ 'shadow-sm border-b border-semmi': scrolled, 'bg-white border-b border-gray-100': !scrolled, 'bg-white': true }"
        class="sticky top-0 z-50 w-full transition-all duration-300">
    
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5 flex items-center">
                <span class="sr-only">PB SEMMI</span>
                <img class="h-12 w-auto" src="{{ asset('logolandscape.png') }}" alt="PB SEMMI Logo">
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex lg:hidden">
            <button type="button" 
                    @click="mobileMenuOpen = true"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 hover:text-semmi transition-colors">
                <span class="sr-only">Buka menu utama</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex lg:gap-x-6 lg:flex-1 lg:justify-end items-center">
            <a href="/" class="text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors">Beranda</a>
            
            <!-- Profil Dropdown -->
            <div class="relative py-2" x-data="{ open: false }" @click.away="open = false" @mouseenter="open = true" @mouseleave="open = false">
                <button type="button" @click="open = !open" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors focus:outline-none">
                    Profil
                    <svg class="h-4 w-4 flex-none text-gray-400 transition-transform duration-200" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-1"
                     class="absolute -left-4 top-full z-10 pt-2 w-64 focus:outline-none" style="display: none;">
                    <div class="rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5">
                        <a href="/profil/sejarah" class="block rounded-lg px-3 py-2.5 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Sejarah</a>
                        <a href="/profil/visi-misi" class="block rounded-lg px-3 py-2.5 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Visi & Misi</a>
                        <a href="/profil/tugas-fungsi" class="block rounded-lg px-3 py-2.5 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Ruang Lingkup Tugas & Fungsi</a>
                        <a href="/organisasi" class="block rounded-lg px-3 py-2.5 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Struktur Organisasi</a>
                        <a href="/kontak" class="block rounded-lg px-3 py-2.5 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Lokasi & Kontak</a>
                    </div>
                </div>
            </div>

            <a href="/program" class="text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors">Program</a>
            <a href="/berita" class="text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors">Berita</a>
            <a href="/publikasi" class="text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors">Publikasi</a>
            <a href="/dokumentasi" class="text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors">Dokumentasi</a>
            <a href="/keanggotaan" class="text-sm/6 font-semibold text-gray-900 hover:text-semmi transition-colors">Keanggotaan</a>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         style="display: none;" 
         class="lg:hidden" 
         role="dialog" 
         aria-modal="true">
        
        <!-- Background backdrop -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 bg-black/50"></div>
             
        <div x-show="mobileMenuOpen"
             @click.away="mobileMenuOpen = false"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5 flex items-center">
                    <span class="sr-only">PB SEMMI</span>
                    <img class="h-10 w-auto" src="{{ asset('logolandscape.png') }}" alt="PB SEMMI Logo">
                </a>
                <button type="button" 
                        @click="mobileMenuOpen = false"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700 hover:text-semmi transition-colors">
                    <span class="sr-only">Tutup menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Beranda</a>
                        
                        <!-- Profil Dropdown Mobile -->
                        <div x-data="{ openProfil: false }">
                            <button type="button" @click="openProfil = !openProfil" class="-mx-3 flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">
                                Profil
                                <svg :class="{'rotate-180': openProfil}" class="h-5 w-5 flex-none transition-transform duration-200 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Sub-menu -->
                            <div x-show="openProfil" style="display: none;" class="mt-2 space-y-2">
                                <a href="/profil/sejarah" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-medium text-gray-600 hover:bg-gray-50 hover:text-semmi transition-colors">Sejarah</a>
                                <a href="/profil/visi-misi" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-medium text-gray-600 hover:bg-gray-50 hover:text-semmi transition-colors">Visi & Misi</a>
                                <a href="/profil/tugas-fungsi" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-medium text-gray-600 hover:bg-gray-50 hover:text-semmi transition-colors">Ruang Lingkup Tugas & Fungsi</a>
                                <a href="/organisasi" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-medium text-gray-600 hover:bg-gray-50 hover:text-semmi transition-colors">Struktur Organisasi</a>
                                <a href="/kontak" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-medium text-gray-600 hover:bg-gray-50 hover:text-semmi transition-colors">Lokasi & Kontak</a>
                            </div>
                        </div>

                        <a href="/program" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Program</a>
                        <a href="/berita" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Berita</a>
                        <a href="/publikasi" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Publikasi</a>
                        <a href="/dokumentasi" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Dokumentasi</a>
                        <a href="/keanggotaan" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 hover:text-semmi transition-colors">Keanggotaan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
