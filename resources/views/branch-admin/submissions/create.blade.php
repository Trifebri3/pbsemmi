<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Pengajuan Publikasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded text-sm text-blue-700">
                        <strong>Informasi:</strong> Setiap publikasi yang diajukan akan melalui proses kurasi dan persetujuan oleh Admin Pusat (PB SEMMI) sebelum diterbitkan di website resmi.
                    </div>

                    <form action="{{ route('branch-admin.submissions.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Judul Publikasi</label>
                            <input type="text" name="title" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Kategori / Tipe</label>
                            <select name="type" required class="w-full md:w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="Berita">Berita Cabang</option>
                                <option value="Kegiatan">Laporan Kegiatan</option>
                                <option value="Opini">Opini / Artikel Kader</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Konten / Isi Artikel</label>
                            <textarea name="content" rows="10" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Tuliskan isi publikasi di sini..."></textarea>
                        </div>

                        <div class="flex items-center justify-end">
                            <a href="{{ route('branch-admin.submissions.index') }}" class="text-gray-600 hover:text-gray-900 font-medium mr-4">Batal</a>
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-md">Kirim Pengajuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
