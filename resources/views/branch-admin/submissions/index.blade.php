<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Pengajuan Publikasi') }}
            </h2>
            <a href="{{ route('branch-admin.submissions.create') }}" class="px-4 py-2 bg-green-600 text-white rounded-md text-sm font-semibold hover:bg-green-700">Buat Pengajuan Baru</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full whitespace-nowrap text-left text-sm">
                        <thead class="bg-gray-50 text-gray-700">
                            <tr>
                                <th class="px-6 py-3 font-semibold">Judul</th>
                                <th class="px-6 py-3 font-semibold">Tipe</th>
                                <th class="px-6 py-3 font-semibold">Status</th>
                                <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($submissions as $submission)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    {{ $submission->title }}
                                    <div class="text-xs text-gray-400 font-normal mt-1">{{ $submission->created_at->format('d M Y H:i') }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">{{ $submission->type }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    @php
                                        $statusColors = [
                                            'Pending' => 'bg-yellow-100 text-yellow-800',
                                            'Approved' => 'bg-green-100 text-green-800',
                                            'Rejected' => 'bg-red-100 text-red-800',
                                            'Draft' => 'bg-gray-100 text-gray-800',
                                        ];
                                        $color = $statusColors[$submission->status] ?? 'bg-gray-100 text-gray-800';
                                    @endphp
                                    <span class="px-2 py-1 {{ $color }} rounded-full text-xs font-semibold">
                                        {{ $submission->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    @if($submission->status === 'Pending' || $submission->status === 'Draft')
                                    <form action="{{ route('branch-admin.submissions.destroy', $submission) }}" method="POST" class="inline-block" onsubmit="return confirm('Batal pengajuan?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Batal</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                                    Belum ada pengajuan publikasi.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $submissions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
