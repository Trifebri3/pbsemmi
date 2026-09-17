@extends('public.layouts.app')

@section('title', '| Beranda')

@section('content')
<!-- HERO CAROUSEL (FEATURED ARTICLES) -->
<div class="bg-gray-50 pt-8 pb-12 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <!-- Carousel Container -->
        <div x-data="{ 
                activeSlide: 1, 
                slides: [1, 2, 3],
                init() {
                    setInterval(() => {
                        this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1;
                    }, 5000);
                }
             }" 
             class="relative w-full overflow-hidden shadow-xl"
             style="height: 500px;">
             
            <!-- Slides -->
            <div class="relative h-full w-full">
                <!-- Slide 1 -->
                <div x-show="activeSlide === 1" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-300 absolute inset-0"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-105"
                     class="absolute inset-0 h-full w-full bg-gray-200 flex items-center justify-center">
                    
                    <!-- Placeholder Image (Replace with real image in CMS) -->
                    <div class="absolute inset-0 bg-gray-300">
                        <img src="{{ asset('default.png') }}" alt="Berita 1" class="object-cover w-full h-full opacity-80">
                    </div>

                    <!-- Overlay Box (Bottom Left) -->
                    <div class="absolute bottom-0 left-0 w-full sm:w-2/3 lg:w-1/2 bg-black/70 p-6 sm:p-8 backdrop-blur-sm">
                        <span class="inline-block bg-gray-800 text-white text-xs font-bold uppercase tracking-wider px-2 py-1 mb-3">Berita Terbaru</span>
                        <h2 class="text-white text-2xl sm:text-3xl font-bold leading-tight">
                            <a href="/berita/semmi-tegaskan-komitmen-kawal-demokrasi" class="hover:text-semmi transition-colors">SEMMI Tegaskan Komitmen Kawal Demokrasi dan Keadilan Sosial di Seluruh Pelosok Negeri</a>
                        </h2>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div x-show="activeSlide === 2" x-cloak
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-300 absolute inset-0"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-105"
                     class="absolute inset-0 h-full w-full bg-gray-300 flex items-center justify-center">
                     
                    <div class="absolute inset-0 bg-gray-300">
                        <img src="{{ asset('default.png') }}" alt="Berita 2" class="object-cover w-full h-full opacity-80">
                    </div>

                    <div class="absolute bottom-0 left-0 w-full sm:w-2/3 lg:w-1/2 bg-black/70 p-6 sm:p-8 backdrop-blur-sm">
                        <span class="inline-block bg-gray-800 text-white text-xs font-bold uppercase tracking-wider px-2 py-1 mb-3">Pendidikan</span>
                        <h2 class="text-white text-2xl sm:text-3xl font-bold leading-tight">
                            <a href="/berita/beasiswa-aktivis-semmi-resmi-diluncurkan" class="hover:text-semmi transition-colors">Beasiswa Aktivis SEMMI Resmi Diluncurkan untuk Mahasiswa Berprestasi</a>
                        </h2>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div x-show="activeSlide === 3" x-cloak
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-300 absolute inset-0"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-105"
                     class="absolute inset-0 h-full w-full bg-gray-200 flex items-center justify-center">
                     
                    <div class="absolute inset-0 bg-gray-300">
                        <img src="{{ asset('default.png') }}" alt="Berita 3" class="object-cover w-full h-full opacity-80">
                    </div>

                    <div class="absolute bottom-0 left-0 w-full sm:w-2/3 lg:w-1/2 bg-black/70 p-6 sm:p-8 backdrop-blur-sm">
                        <span class="inline-block bg-gray-800 text-white text-xs font-bold uppercase tracking-wider px-2 py-1 mb-3">Daerah</span>
                        <h2 class="text-white text-2xl sm:text-3xl font-bold leading-tight">
                            <a href="/berita/musyawarah-cabang-semmi-jawa-barat" class="hover:text-semmi transition-colors">Musyawarah Cabang SEMMI Jawa Barat Berlangsung Sukses dan Damai</a>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Pagination Dots (Bottom Right) -->
            <div class="absolute bottom-6 right-6 flex space-x-2 z-20">
                <template x-for="slide in slides" :key="slide">
                    <button @click="activeSlide = slide"
                            :class="{'bg-semmi': activeSlide === slide, 'bg-gray-300 hover:bg-gray-400': activeSlide !== slide}"
                            class="w-6 h-6 sm:w-8 sm:h-8 transition-colors duration-200 focus:outline-none shadow-sm flex items-center justify-center text-xs font-bold"
                            :aria-label="'Go to slide ' + slide">
                    </button>
                </template>
            </div>
        </div>

        <!-- News Ticker (Marquee) Below Carousel -->
        <div class="mt-4 bg-white border border-gray-200 flex items-center shadow-sm">
            <div class="bg-semmi/20 text-semmi font-bold px-4 py-3 uppercase tracking-wider text-sm flex-shrink-0 border-r border-gray-200">
                INFO
            </div>
            <div class="overflow-hidden relative w-full flex items-center py-3">
                <div class="animate-marquee whitespace-nowrap text-sm text-gray-700 italic font-medium px-4">
                    Hasil Kajian dan Analisis Data kini tersedia secara publik di halaman Publikasi. &nbsp;&bull;&nbsp; Pendaftaran Beasiswa SEMMI 2026 telah dibuka, segera lengkapi berkas Anda. &nbsp;&bull;&nbsp; Mari sukseskan agenda Rapat Kerja Nasional bulan depan.
                </div>
            </div>
        </div>
        
        <!-- Inline style for marquee animation -->
        <style>
            .animate-marquee {
                animation: marquee 25s linear infinite;
                display: inline-block;
            }
            @keyframes marquee {
                0% { transform: translateX(100%); }
                100% { transform: translateX(-100%); }
            }
        </style>

    </div>
</div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-semmi/10 text-semmi text-sm font-semibold mb-6 border border-semmi/20">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-semmi opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-semmi"></span>
                    </span>
                    Selamat Datang di Portal Resmi PB SEMMI
                </div>
                
                <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-tight text-gray-900 leading-[1.1]">
                    Merajut Ukhuwah, <br>
                    Membangun <span class="text-semmi">Peradaban</span>
                </h1>
                
                <p class="mt-6 text-lg text-gray-600 max-w-xl">
                    Serikat Mahasiswa Muslimin Indonesia. Wadah pergerakan mahasiswa Islam yang berlandaskan pada ajaran agama, Pancasila, dan UUD 1945 untuk mewujudkan masyarakat adil makmur yang diridhai Allah SWT.
                </p>
                
                <!-- CTAs -->
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="/tentang" class="rounded-md bg-semmi px-6 py-3 text-sm font-bold uppercase tracking-wide text-white shadow-sm hover:bg-gray-900 transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi">
                        Pelajari Lebih Lanjut
                    </a>
                    <a href="/keanggotaan" class="rounded-md bg-white border border-gray-300 px-6 py-3 text-sm font-bold uppercase tracking-wide text-gray-700 hover:bg-gray-50 transition-colors">
                        Bergabung Bersama Kami
                    </a>
                </div>
            </div>
            
            <!-- Image / Visual Content -->
            <div class="relative lg:block">
                <div class="relative mx-auto max-w-md lg:max-w-none rounded-2xl overflow-hidden shadow-2xl border-4 border-white bg-semmi/15 aspect-[4/3] flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-tr from-semmi/30 to-semmi/10 flex flex-col items-center justify-center text-center p-6">
                        <svg class="size-20 text-semmi/60 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span class="text-base font-bold text-semmi uppercase tracking-widest">[ DOKUMENTASI PB SEMMI ]</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- QUICK ACCESS SECTION -->
<div class="bg-white py-12 sm:py-16 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-5 text-center">
            <a href="#" class="group flex flex-col items-center p-4 hover:bg-gray-50 transition-colors">
                <span class="font-heading font-semibold uppercase text-gray-500 group-hover:text-semmi transition-colors">Berita</span>
            </a>
            <a href="#" class="group flex flex-col items-center p-4 hover:bg-gray-50 transition-colors">
                <span class="font-heading font-semibold uppercase text-gray-500 group-hover:text-semmi transition-colors">Kegiatan</span>
            </a>
            <a href="#" class="group flex flex-col items-center p-4 hover:bg-gray-50 transition-colors">
                <span class="font-heading font-semibold uppercase text-gray-500 group-hover:text-semmi transition-colors">Pernyataan Sikap</span>
            </a>
            <a href="#" class="group flex flex-col items-center p-4 hover:bg-gray-50 transition-colors">
                <span class="font-heading font-semibold uppercase text-gray-500 group-hover:text-semmi transition-colors">Organisasi</span>
            </a>
            <a href="#" class="group flex flex-col items-center p-4 hover:bg-gray-50 transition-colors col-span-2 sm:col-span-1">
                <span class="font-heading font-semibold uppercase text-gray-500 group-hover:text-semmi transition-colors">Jaringan SEMMI</span>
            </a>
        </div>
    </div>
</div>
<!-- TENTANG SINGKAT SECTION -->
<div class="bg-semmi-light py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <div class="grid max-w-xl grid-cols-1 gap-8 text-base/7 text-gray-700 lg:max-w-none lg:grid-cols-2 lg:gap-16 items-center">
                
                <!-- Text Content -->
                <div>
                    <h2 class="font-heading text-4xl font-bold tracking-tight text-semmi-dark sm:text-5xl uppercase">Tentang SEMMI</h2>
                    <div class="mt-8 flex flex-col gap-6">
                        <p class="text-lg font-medium text-gray-900">Serikat Mahasiswa Muslimin Indonesia (SEMMI) didirikan pada tahun 1956, lahir dari semangat pergerakan nasional dan nilai-nilai keislaman.</p>
                        <p>Sebagai organisasi yang berakar kuat pada nilai keislaman dan kebangsaan, SEMMI berdedikasi untuk mencetak kader-kader pemimpin masa depan yang tidak hanya unggul secara intelektual, tetapi juga memiliki integritas moral dan komitmen terhadap kesejahteraan umat dan kemajuan bangsa Indonesia.</p>
                    </div>
                    <div class="mt-10">
                        <a href="#" class="inline-flex items-center gap-2 font-semibold text-semmi hover:text-semmi-dark transition-colors">
                            Baca Sejarah Lengkap
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Image Placeholder -->
                <div class="relative overflow-hidden rounded-2xl bg-gray-200 aspect-[4/3] lg:aspect-auto lg:h-[400px]">
                    <div class="absolute inset-0 bg-gray-300">
                        <img src="{{ asset('default.png') }}" alt="Tentang SEMMI" class="object-cover w-full h-full opacity-90">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- PETA PERSEBARAN NASIONAL SECTION -->
<div class="bg-gray-50 py-24 sm:py-32 border-b border-gray-200" x-data="networkMap()">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-sm font-bold text-semmi uppercase tracking-widest">Peta Nasional</span>
            <h2 class="mt-2 font-heading text-3xl font-bold uppercase tracking-tight text-gray-900 sm:text-4xl">Persebaran Jaringan SEMMI</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Pilih provinsi di bawah ini untuk melihat daftar wilayah cabang/kabupaten yang telah menjangkau seluruh pelosok Nusantara.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Map Static Image -->
            <div class="w-full bg-semmi/5 border-b border-gray-200 relative flex justify-center items-center p-8">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 pointer-events-none"></div>
                <img src="{{ asset('peta-indonesia.jpg') }}" alt="Peta Indonesia" class="w-full max-w-4xl h-auto object-contain relative z-10 mix-blend-multiply opacity-90 hover:opacity-100 transition-opacity duration-500">
            </div>

            <div class="p-6 sm:p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Provinsi Selection -->
                    <div>
                        <label for="provinsi" class="block text-sm font-bold uppercase text-gray-700 mb-2">Pilih Provinsi</label>
                        <select id="provinsi" x-model="selectedProvinsi" @change="fetchKabupaten()" class="block w-full rounded-md border border-gray-300 py-3 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-1 focus:ring-semmi sm:text-sm shadow-sm transition-colors cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <option value="">-- Pilih Provinsi --</option>
                            <template x-for="prov in provinsiList" :key="prov.id">
                                <option :value="prov.id" x-text="prov.nama"></option>
                            </template>
                        </select>
                    </div>

                    <!-- Kabupaten Selection -->
                    <div>
                        <label for="kabupaten" class="block text-sm font-bold uppercase text-gray-700 mb-2">Daftar Kabupaten/Cabang</label>
                        <select id="kabupaten" x-model="selectedKabupaten" :disabled="!selectedProvinsi || (kabupatenList.length === 0 && !isLoading)" class="block w-full rounded-md border border-gray-300 py-3 pl-3 pr-10 text-base focus:border-semmi focus:outline-none focus:ring-1 focus:ring-semmi sm:text-sm shadow-sm transition-colors disabled:bg-gray-100 disabled:text-gray-400 bg-gray-50 hover:bg-gray-100 cursor-pointer">
                            <option value="" x-show="!isLoading" x-text="kabupatenList.length === 0 ? '-- Pilih Provinsi Terlebih Dahulu --' : '-- Pilih Kabupaten/Cabang --'"></option>
                            <option value="" x-show="isLoading" disabled>Memuat Data...</option>
                            <template x-for="kab in kabupatenList" :key="kab.id">
                                <option :value="kab.id" x-text="kab.nama"></option>
                            </template>
                        </select>
                    </div>
                </div>

                <!-- Show selected region info -->
                <div x-show="selectedKabupaten" style="display: none;" x-transition class="mt-8 p-6 bg-semmi/5 rounded-xl border border-semmi/20">
                    <div class="flex items-start gap-4">
                        <div class="h-10 w-10 rounded-full bg-semmi flex items-center justify-center flex-shrink-0">
                            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900 uppercase">Cabang <span x-text="getKabupatenName()"></span></h4>
                            <p class="text-gray-600 mt-1 font-medium">Provinsi <span x-text="getProvinsiName()"></span></p>
                            <div class="mt-4">
                                <a href="/kontak" class="text-sm font-bold text-semmi hover:text-semmi-dark underline underline-offset-4">Lihat Detail Kontak & Pengurus Cabang &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('networkMap', () => ({
            provinsiList: [],
            kabupatenList: [],
            selectedProvinsi: '',
            selectedKabupaten: '',
            isLoading: false,

            init() {
                // Fetch Data Provinsi
                fetch('/data-indonesia/provinsi.json')
                    .then(response => response.json())
                    .then(data => {
                        this.provinsiList = data.sort((a, b) => a.nama.localeCompare(b.nama));
                    })
                    .catch(error => console.error('Error fetching provinsi:', error));
            },


            fetchKabupaten() {
                this.selectedKabupaten = '';
                this.kabupatenList = [];
                
                if (!this.selectedProvinsi) return;

                this.isLoading = true;
                fetch(`/data-indonesia/kabupaten/${this.selectedProvinsi}.json`)
                    .then(response => response.json())
                    .then(data => {
                        this.kabupatenList = data.sort((a, b) => a.nama.localeCompare(b.nama));
                        setTimeout(() => { this.isLoading = false; }, 300);
                    })
                    .catch(error => {
                        console.error('Error fetching kabupaten:', error);
                        this.isLoading = false;
                    });
            },

            getProvinsiName() {
                const prov = this.provinsiList.find(p => p.id === this.selectedProvinsi);
                return prov ? prov.nama : '';
            },

            getKabupatenName() {
                const kab = this.kabupatenList.find(k => k.id === this.selectedKabupaten);
                return kab ? kab.nama : '';
            }
        }))
    })
</script>

<!-- STATISTIK ORGANISASI SECTION -->
<div class="bg-white py-24 sm:py-32 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <div class="text-center mb-16">
                <h2 class="text-base font-bold text-semmi uppercase tracking-widest mb-2">Angka & Fakta</h2>
                <h3 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold uppercase text-gray-900">Jaringan Kami di Seluruh Nusantara</h3>
                <p class="mt-4 text-lg leading-8 text-gray-600">Menjangkau seluruh pelosok negeri, membangun peradaban dari berbagai lini.</p>
            </div>
            
            <dl class="mt-16 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col bg-gray-50 p-8 rounded-2xl border border-gray-100 text-center">
                    <dt class="text-sm font-semibold leading-6 text-gray-600 uppercase tracking-wide">Jumlah Anggota</dt>
                    <dd class="order-first font-heading text-5xl font-bold tracking-tight text-semmi mb-2">12,450+</dd>
                </div>
                <div class="flex flex-col bg-gray-50 p-8 rounded-2xl border border-gray-100 text-center">
                    <dt class="text-sm font-semibold leading-6 text-gray-600 uppercase tracking-wide">Wilayah (Provinsi)</dt>
                    <dd class="order-first font-heading text-5xl font-bold tracking-tight text-semmi mb-2">34</dd>
                </div>
                <div class="flex flex-col bg-gray-50 p-8 rounded-2xl border border-gray-100 text-center">
                    <dt class="text-sm font-semibold leading-6 text-gray-600 uppercase tracking-wide">Cabang (Kota/Kab)</dt>
                    <dd class="order-first font-heading text-5xl font-bold tracking-tight text-semmi mb-2">312</dd>
                </div>
                <div class="flex flex-col bg-gray-50 p-8 rounded-2xl border border-gray-100 text-center">
                    <dt class="text-sm font-semibold leading-6 text-gray-600 uppercase tracking-wide">Komisariat (Kampus)</dt>
                    <dd class="order-first font-heading text-5xl font-bold tracking-tight text-semmi mb-2">840+</dd>
                </div>
                <div class="flex flex-col bg-gray-50 p-8 rounded-2xl border border-gray-100 text-center">
                    <dt class="text-sm font-semibold leading-6 text-gray-600 uppercase tracking-wide">Program Unggulan</dt>
                    <dd class="order-first font-heading text-5xl font-bold tracking-tight text-semmi mb-2">45</dd>
                </div>
                <div class="flex flex-col bg-gray-50 p-8 rounded-2xl border border-gray-100 text-center">
                    <dt class="text-sm font-semibold leading-6 text-gray-600 uppercase tracking-wide">Total Kegiatan</dt>
                    <dd class="order-first font-heading text-5xl font-bold tracking-tight text-semmi mb-2">1,200+</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
<!-- STRUKTUR KEPENGURUSAN SINGKAT SECTION -->
<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-bold text-semmi uppercase tracking-widest mb-2">Struktur Kepengurusan</h2>
            <h3 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold uppercase text-gray-900 mb-6">Pengurus Besar SEMMI</h3>
            <p class="text-lg text-gray-600">
                Pucuk pimpinan organisasi tingkat nasional periode 2026-2029 yang diamanahkan melalui kongres nasional.
            </p>
        </div>
        
        <!-- Mock Data for Frontend, to be replaced with Database Query -->
        @php
            $pengurus = [
                ['name' => 'Ahmad Fauzi', 'jabatan' => 'Ketua Umum', 'periode' => '2026 - 2028', 'foto' => ''],
                ['name' => 'Budi Santoso', 'jabatan' => 'Sekretaris Jenderal', 'periode' => '2026 - 2028', 'foto' => ''],
                ['name' => 'Siti Aminah', 'jabatan' => 'Bendahara Umum', 'periode' => '2026 - 2028', 'foto' => ''],
                ['name' => 'Rahmat Hidayat', 'jabatan' => 'Ketua Bidang Organisasi', 'periode' => '2026 - 2028', 'foto' => ''],
            ];
        @endphp

        <ul role="list" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @foreach($pengurus as $person)
            <li>
                <div class="group flex flex-col items-center bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <!-- Photo Placeholder -->
                    <div class="mx-auto h-32 w-32 rounded-full bg-gray-200 overflow-hidden border-4 border-semmi/10 group-hover:border-semmi transition-colors flex items-center justify-center">
                         <img src="{{ asset('default.png') }}" alt="{{ $person['name'] }}" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mt-6 text-lg font-bold leading-7 tracking-tight text-semmi-dark uppercase">{{ $person['name'] }}</h3>
                    <p class="text-sm font-semibold leading-6 text-semmi">{{ $person['jabatan'] }}</p>
                    <p class="text-xs leading-6 text-gray-500 mt-1">Periode {{ $person['periode'] }}</p>
                </div>
            </li>
            @endforeach
        </ul>

        <div class="mt-16 text-center">
            <a href="/organisasi" class="inline-flex items-center gap-x-2 rounded-md bg-semmi px-6 py-3 text-sm font-bold uppercase tracking-wide text-white shadow-sm hover:bg-gray-900 transition-colors">
                Lihat Struktur Lengkap
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
