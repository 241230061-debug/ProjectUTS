<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-[#1a3a2a]">Manajemen User</h2>
            <p class="text-gray-600">Daftar seluruh pengguna aplikasi SiPedLing.</p>
        </div>
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
                    <tr class="bg-[#f8f5ee] text-gray-600 text-sm border-b border-gray-200">
                        <th class="py-3 px-6">Nama Pengguna</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6 text-center">Peran</th>
                        <th class="py-3 px-6 text-center">Total Poin</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @forelse ($users as $user)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="py-3 px-6 font-medium text-[#1a3a2a]">{{ $user->name }}</td>
                            <td class="py-3 px-6">{{ $user->email }}</td>
                            <td class="py-3 px-6 text-center">
                                @if($user->role === 'admin')
                                    <span class="bg-[#1a3a2a] text-white px-3 py-1 rounded-full text-xs">Admin</span>
                                @else
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">User</span>
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center font-bold text-[#c9a84c]">{{ $user->points ?? 0 }}</td>
                            <td class="py-3 px-6">
                                <div class="flex items-center justify-center gap-2">
                                 <a href="/admin/users/{{ $user->id }}/edit" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded text-xs font-semibold transition shadow-sm">
                                   Edit
                                </a>
        
                                  <form action="/admin/users/{{ $user->id }}" method="POST" class="inline-block m-0 p-0" onsubmit="return confirm('Yakin ingin menghapus user ini? Semua data sampah miliknya mungkin ikut terhapus atau menjadi anonim.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: #ef4444;" class="hover:bg-red-600 text-white px-3 py-1.5 rounded text-xs font-semibold transition shadow-sm">
                                Hapus
                            </button>
                     </form>
                </div>
             </td>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-gray-500">Belum ada user yang terdaftar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="p-4 border-t border-gray-100">
            {{ $users->links() }}
        </div>
    </div>
</x-admin-layout>