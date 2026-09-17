<footer class="bg-white border-t border-gray-200" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-4 xl:gap-12">
            
            <!-- Kolom 1: Logo & Deskripsi -->
            <div class="space-y-6 xl:col-span-1">
                <a href="/" class="flex items-center">
                    <img class="h-16 w-auto bg-white rounded-md p-1" src="{{ asset('logolandscape.png') }}" alt="PB SEMMI Logo">
                </a>
                <p class="text-sm leading-6 text-gray-600">
                    Serikat Mahasiswa Muslimin Indonesia. Organisasi pergerakan mahasiswa Islam yang berlandaskan pada ajaran agama, Pancasila, dan UUD 1945, bertekad mewujudkan masyarakat adil makmur yang diridhai Allah SWT.
                </p>
            </div>

            <!-- Kolom 2: Navigasi Utama -->
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-bold uppercase tracking-wider text-semmi">Menu Utama</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="/" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Beranda</a>
                            </li>
                            <li>
                                <a href="/tentang" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="/keanggotaan" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Keanggotaan</a>
                            </li>
                            <li>
                                <a href="/kontak" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Kolom 3: Informasi & Publikasi -->
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-semmi">Aktivitas</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="/organisasi" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Struktur Organisasi</a>
                            </li>
                            <li>
                                <a href="/program" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Program Kerja</a>
                            </li>
                            <li>
                                <a href="/berita" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Berita Terkini</a>
                            </li>
                            <li>
                                <a href="/dokumentasi" class="text-sm leading-6 text-gray-600 hover:text-semmi transition-colors">Dokumentasi & Galeri</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kolom 4: Kontak & Social Media -->
            <div class="mt-16 xl:mt-0 xl:col-span-1 space-y-6">
                <h3 class="text-sm font-bold uppercase tracking-wider text-semmi">Hubungi Kami</h3>
                <ul role="list" class="space-y-4">
                    <li class="flex items-start text-sm leading-6 text-gray-600">
                        <svg class="h-6 w-6 shrink-0 mr-3 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        <span>Gedung Pusat Perfilman H. Usmar Ismail Lt. 2, Jl. H.R. Rasuna Said Kav. C-22, Jakarta Selatan</span>
                    </li>
                    <li class="flex items-center text-sm leading-6 text-gray-600">
                        <svg class="h-6 w-6 shrink-0 mr-3 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        <a href="mailto:sekretariat@semmi.or.id" class="hover:text-semmi transition-colors">sekretariat@semmi.or.id</a>
                    </li>
                    <li class="flex items-center text-sm leading-6 text-gray-600">
                        <svg class="h-6 w-6 shrink-0 mr-3 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                        <a href="https://wa.me/6281234567890" target="_blank" class="hover:text-semmi transition-colors">+62 812-3456-7890</a>
                    </li>
                </ul>
                <div class="flex gap-x-5 mt-6">
                    <a href="#" class="text-gray-400 hover:text-semmi transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-semmi transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-semmi transition-colors">
                        <span class="sr-only">X (Twitter)</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- BOTTOM BAR -->
        <div class="mt-16 border-t border-gray-200 pt-8 sm:mt-20 lg:mt-24 flex flex-col sm:flex-row items-center justify-between">
            <p class="text-xs leading-5 text-gray-500">&copy; {{ date('Y') }} Pengurus Besar Serikat Mahasiswa Muslimin Indonesia (PB SEMMI). All rights reserved.</p>
            <div class="flex gap-4 mt-4 sm:mt-0 text-xs text-gray-500">
                <a href="#" class="hover:text-semmi transition-colors">Privacy Policy</a>
                <span>&bull;</span>
                <a href="#" class="hover:text-semmi transition-colors">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>
