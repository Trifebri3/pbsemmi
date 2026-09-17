@extends('public.layouts.app')

@section('title', '| Keanggotaan')

@section('content')

<!-- HEADER / HERO -->
<div class="relative w-full h-[400px] sm:h-[500px] bg-semmi-dark flex items-center overflow-hidden">
    <!-- Background elements -->
    <div class="absolute inset-0 bg-gradient-to-r from-semmi-dark to-semmi-dark/70 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-10 z-0"></div>
    <div class="absolute inset-y-0 right-0 w-1/2 bg-semmi/20 blur-[100px] rounded-full z-0"></div>

    <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8 w-full">
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-tight text-white mb-6">
            Mari Bergabung <br class="hidden sm:block">Bersama <span class="text-semmi-gold">SEMMI</span>
        </h1>
        <p class="text-lg text-gray-300 max-w-2xl mb-8">
            Jadilah bagian dari pergerakan pemuda dan mahasiswa Islam Indonesia untuk mewujudkan peradaban bangsa yang adil, makmur, dan diridhai Allah SWT.
        </p>
        <div class="flex flex-wrap gap-4">
            <a href="#form-daftar" class="rounded-md bg-semmi px-6 py-3 text-sm font-bold uppercase tracking-wide text-white shadow-sm hover:bg-white hover:text-semmi transition-colors">
                Daftar Sekarang
            </a>
            <a href="#info-anggota" class="rounded-md bg-white/10 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white backdrop-blur-md hover:bg-white/20 transition-colors">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-16 sm:py-24" id="info-anggota">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="flex flex-col lg:flex-row gap-16">
            <!-- LEFT COLUMN: Informasi Keanggotaan -->
            <div class="w-full lg:w-1/2 space-y-12">
                
                <!-- Apa itu Anggota -->
                <div>
                    <h2 class="font-heading text-2xl font-bold uppercase text-semmi-dark border-b border-gray-200 pb-3 mb-6">Siapa Anggota SEMMI?</h2>
                    <div class="prose prose-semmi text-gray-700">
                        <p>Anggota Serikat Mahasiswa Muslimin Indonesia (SEMMI) adalah mahasiswa muslim Indonesia yang terdaftar di Perguruan Tinggi, menyetujui asas, tujuan, dan usaha organisasi, serta telah lulus dalam tahapan pengkaderan dasar (Latihan Kader I).</p>
                    </div>
                </div>

                <!-- Syarat & Prosedur -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="h-12 w-12 rounded-lg bg-semmi/10 flex items-center justify-center mb-4">
                            <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <h3 class="font-heading text-lg font-bold uppercase text-semmi-dark mb-3">Syarat Umum</h3>
                        <ul class="text-sm text-gray-600 space-y-2 list-disc pl-4">
                            <li>Beragama Islam</li>
                            <li>Mahasiswa aktif (D3/S1) di perguruan tinggi seluruh Indonesia</li>
                            <li>Bersedia mengikuti seluruh tahapan kaderisasi</li>
                            <li>Menaati AD/ART Organisasi</li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="h-12 w-12 rounded-lg bg-semmi/10 flex items-center justify-center mb-4">
                            <svg class="h-6 w-6 text-semmi" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" /></svg>
                        </div>
                        <h3 class="font-heading text-lg font-bold uppercase text-semmi-dark mb-3">Alur Pendaftaran</h3>
                        <ol class="text-sm text-gray-600 space-y-2 list-decimal pl-4">
                            <li>Mengisi formulir online</li>
                            <li>Verifikasi data oleh admin Cabang</li>
                            <li>Wawancara (Screening)</li>
                            <li>Mengikuti Latihan Kader I (Basic Training)</li>
                        </ol>
                    </div>
                </div>

                <!-- FAQ -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="font-heading text-2xl font-bold uppercase text-semmi-dark border-b border-gray-200 pb-3 mb-6">FAQ Pendaftaran</h2>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-base font-bold text-gray-900 mb-2">Kapan jadwal Latihan Kader I diadakan?</h4>
                            <p class="text-sm text-gray-600">Jadwal LK I diselenggarakan secara berkala oleh masing-masing Pengurus Cabang (tingkat Kota/Kabupaten). Silakan isi form terlebih dahulu, Anda akan dihubungi oleh pengurus cabang terdekat.</p>
                        </div>
                        <div>
                            <h4 class="text-base font-bold text-gray-900 mb-2">Apakah pendaftaran dipungut biaya?</h4>
                            <p class="text-sm text-gray-600">Pendaftaran online melalui website tidak dipungut biaya. Biaya akomodasi LK I akan diinformasikan kemudian oleh panitia pelaksana di wilayah masing-masing.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Form Pendaftaran -->
            <div class="w-full lg:w-1/2" id="form-daftar">
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden sticky top-24">
                    
                    <div class="bg-semmi p-6 sm:px-8">
                        <h3 class="font-heading text-2xl font-bold uppercase tracking-wide text-white">Formulir Pendaftaran</h3>
                        <p class="text-sm text-white/80 mt-1">Lengkapi data diri Anda di bawah ini dengan benar.</p>
                    </div>

                    <form action="#" method="POST" class="p-6 sm:p-8 space-y-6">
                        
                        <!-- Data Pribadi -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div>
                                <label for="tempat_lahir" class="block text-sm font-semibold leading-6 text-gray-900">Tempat Lahir</label>
                                <div class="mt-2">
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="tanggal_lahir" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Lahir</label>
                                <div class="mt-2">
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-sm font-semibold leading-6 text-gray-900 mb-2">Jenis Kelamin</label>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center">
                                        <input id="jk_l" name="jk" type="radio" value="Laki-laki" class="h-4 w-4 border-gray-300 text-semmi focus:ring-semmi">
                                        <label for="jk_l" class="ml-2 block text-sm font-medium leading-6 text-gray-900">Laki-laki</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="jk_p" name="jk" type="radio" value="Perempuan" class="h-4 w-4 border-gray-300 text-semmi focus:ring-semmi">
                                        <label for="jk_p" class="ml-2 block text-sm font-medium leading-6 text-gray-900">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kontak & Kampus -->
                        <div class="border-t border-gray-200 pt-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="wa" class="block text-sm font-semibold leading-6 text-gray-900">No. WhatsApp</label>
                                <div class="mt-2">
                                    <input type="text" name="wa" id="wa" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email Aktif</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="alamat" class="block text-sm font-semibold leading-6 text-gray-900">Alamat Lengkap Domisili</label>
                                <div class="mt-2">
                                    <textarea id="alamat" name="alamat" rows="2" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Pilihan Struktur & Dokumen -->
                        <div class="border-t border-gray-200 pt-6 space-y-6">
                            <div>
                                <label for="wilayah_daftar" class="block text-sm font-semibold leading-6 text-gray-900">Pilih Wilayah (Provinsi)</label>
                                <div class="mt-2">
                                    <select id="wilayah_daftar" name="wilayah_daftar" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                        <option value="">-- Pilih Wilayah --</option>
                                        <option>DKI Jakarta</option>
                                        <option>Jawa Barat</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="cabang_daftar" class="block text-sm font-semibold leading-6 text-gray-900">Cabang (Kota/Kab)</label>
                                    <div class="mt-2">
                                        <input type="text" name="cabang_daftar" id="cabang_daftar" placeholder="Contoh: Jakarta Selatan" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="komisariat_daftar" class="block text-sm font-semibold leading-6 text-gray-900">Komisariat (Kampus)</label>
                                    <div class="mt-2">
                                        <input type="text" name="komisariat_daftar" id="komisariat_daftar" placeholder="Contoh: Universitas Indonesia" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="angkatan" class="block text-sm font-semibold leading-6 text-gray-900">Tahun Angkatan Kuliah</label>
                                    <div class="mt-2">
                                        <input type="text" name="angkatan" id="angkatan" placeholder="Contoh: 2024" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="foto" class="block text-sm font-semibold leading-6 text-gray-900">Pas Foto (JPG/PNG)</label>
                                    <div class="mt-2">
                                        <input type="file" name="foto" id="foto" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <button type="button" class="w-full rounded-md bg-semmi px-3 py-3.5 text-sm font-bold uppercase tracking-widest text-white shadow-sm hover:bg-semmi-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi transition-colors">
                                Kirim Formulir Pendaftaran
                            </button>
                            <p class="text-xs text-center text-gray-500 mt-4">Dengan mengirimkan formulir ini, Anda menyetujui seluruh syarat dan ketentuan yang berlaku.</p>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
