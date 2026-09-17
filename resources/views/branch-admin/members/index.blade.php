<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Database Anggota Cabang') }}
            </h2>
            <a href="{{ route('branch-admin.members.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-semibold hover:bg-blue-700">Tambah Anggota</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full whitespace-nowrap text-left text-sm">
                        <thead class="bg-gray-50 text-gray-700">
                            <tr>
                                <th class="px-6 py-3 font-semibold">Nama</th>
                                <th class="px-6 py-3 font-semibold">Asal Kampus</th>
                                <th class="px-6 py-3 font-semibold">Kontak</th>
                                <th class="px-6 py-3 font-semibold">Status Kaderisasi</th>
                                <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($members as $member)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900 flex items-center gap-3">
                                    @if($member->photo)
                                        <img src="{{ $member->photo }}" class="w-8 h-8 rounded-full object-cover">
                                    @else
                                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold">
                                            {{ substr($member->name, 0, 1) }}
                                        </div>
                                    @endif
                                    {{ $member->name }}
                                </td>
                                <td class="px-6 py-4 text-gray-600">{{ $member->campus ?? '-' }}</td>
                                <td class="px-6 py-4 text-gray-600">
                                    <div class="flex flex-col">
                                        <span>{{ $member->phone ?? '-' }}</span>
                                        <span class="text-xs text-gray-400">{{ $member->email ?? '-' }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-semibold">
                                        {{ $member->status_kaderisasi }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 font-medium mr-3">Edit</a>
                                    <form action="{{ route('branch-admin.members.destroy', $member) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus anggota ini?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                    Belum ada data anggota. <a href="{{ route('branch-admin.members.create') }}" class="text-blue-600 underline">Tambah anggota pertama</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $members->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
