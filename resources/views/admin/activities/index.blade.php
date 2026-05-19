<x-admin-layout>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <div>
            <h2 class="text-2xl font-bold text-[#1a3a2a]">Kelola Kegiatan</h2>
            <p class="text-gray-600 text-sm mt-1">Daftar agenda, sosialisasi, dan kegiatan operasional SiPedLing.</p>
        </div>
        <a href="/admin/activities/create" class="bg-[#40916c] hover:bg-[#2d5a43] text-white px-4 py-2 rounded-lg text-sm font-bold transition-colors shadow-sm">
            + Tambah Kegiatan
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-[#40916c]/10 border border-[#40916c]/20 text-[#1a3a2a] rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#f8f5ee] text-gray-500 text-xs uppercase tracking-wider border-b border-gray-200">
                        <th class="py-4 px-6 font-semibold">Nama Kegiatan</th>
                        <th class="py-4 px-6 font-semibold">Tanggal</th>
                        <th class="py-4 px-6 font-semibold">Lokasi</th>
                        <th class="py-4 px-6 text-center font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @forelse ($activities as $activity)
                        <tr class="border-b border-gray-50 hover:bg-gray-50 transition duration-150">
                            
                            <td class="py-4 px-6 font-medium text-gray-900">
                                {{ $activity->title }}
                            </td>
                            
                            <td class="py-4 px-6 text-gray-600">
                                {{ $activity->activity_date }}
                            </td>
                            
                            <td class="py-4 px-6 text-gray-600">
                                {{ $activity->location }}
                            </td>

                            <td class="py-4 px-6">
                                <div class="flex justify-center gap-2">
                                    <a href="/admin/activities/{{ $activity->id }}/edit" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded text-xs font-semibold shadow-sm inline-block">
                                        Edit
                                    </a>

                                    <form action="/admin/activities/{{ $activity->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded text-xs font-semibold shadow-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-8 text-center text-gray-500">Belum ada kegiatan yang dijadwalkan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if(method_exists($activities, 'links'))
            <div class="p-4 border-t border-gray-100 bg-gray-50">
                {{ $activities->links() }}
            </div>
        @endif
    </div>
</x-admin-layout>