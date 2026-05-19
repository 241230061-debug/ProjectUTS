<x-admin-layout>
    @php
        $totalBerat = \App\Models\TrashTransaction::sum('weight_kg') ?? 0;
        $totalPoin = \App\Models\TrashTransaction::sum('points_earned') ?? 0;
        $totalTrx = \App\Models\TrashTransaction::count();
    @endphp

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <div>
            <h2 class="text-2xl font-bold text-[#1a3a2a]">Laporan Transaksi Sampah</h2>
            <p class="text-gray-600 text-sm mt-1">Pantau pergerakan sampah yang disetor dan poin yang didistribusikan.</p>
        </div>
        <button onclick="alert('Fitur Export PDF/Excel akan segera hadir!')" class="bg-white border-2 border-[#40916c] text-[#40916c] hover:bg-[#40916c] hover:text-white px-4 py-2 rounded-lg text-sm font-bold transition-colors flex items-center gap-2 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            Export Laporan
        </button>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-[#40916c]/10 border border-[#40916c]/20 text-[#1a3a2a] rounded-lg font-semibold text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-1">Total Transaksi</p>
                <h3 class="text-4xl font-black text-[#1a3a2a]">{{ number_format($totalTrx, 0, ',', '.') }} <span class="text-lg font-medium text-gray-400">kali</span></h3>
            </div>
            <svg class="absolute -bottom-4 -right-4 w-24 h-24 text-gray-100" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/></svg>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-1">Sampah Terkumpul</p>
                <h3 class="text-4xl font-black text-[#40916c]">{{ number_format($totalBerat, 1, ',', '.') }} <span class="text-lg font-medium text-gray-400">Kg</span></h3>
            </div>
            <svg class="absolute -bottom-4 -right-4 w-24 h-24 text-gray-100" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/></svg>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-1">Poin Distribusi</p>
                <h3 class="text-4xl font-black text-[#c9a84c]">{{ number_format($totalPoin, 0, ',', '.') }} <span class="text-lg font-medium text-gray-400">Pts</span></h3>
            </div>
            <svg class="absolute -bottom-4 -right-4 w-24 h-24 text-gray-100" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-[#f8f5ee]/50">
            <h3 class="font-bold text-[#1a3a2a]">Riwayat Setoran Terbaru</h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#f8f5ee] text-gray-500 text-xs uppercase tracking-wider border-b border-gray-200">
                        <th class="py-4 px-6 font-semibold">ID</th>
                        <th class="py-4 px-6 font-semibold">Penyetor</th>
                        <th class="py-4 px-6 font-semibold">Kategori Sampah</th>
                        <th class="py-4 px-6 text-center font-semibold">Berat</th>
                        <th class="py-4 px-6 text-center font-semibold">Reward Poin</th>
                        <th class="py-4 px-6 font-semibold">Tanggal</th>
                        <th class="py-4 px-6 font-semibold">Status</th> <th class="py-4 px-6 text-center font-semibold">Aksi</th> </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @forelse ($transactions as $trx)
                        <tr class="border-b border-gray-50 hover:bg-green-50/30 transition duration-150">
                            <td class="py-4 px-6 text-gray-400 font-mono text-xs">#TRX-{{ str_pad($trx->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td class="py-4 px-6">
                                <div class="font-bold text-[#1a3a2a]">{{ $trx->user->name ?? 'Anonim/Dihapus' }}</div>
                                <div class="text-xs text-gray-400">{{ $trx->user->email ?? '-' }}</div>
                            </td>
                            <td class="py-4 px-6 capitalize">
                                <span class="bg-gray-100 border border-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1 w-max">
                                    <span class="w-2 h-2 rounded-full bg-[#40916c]"></span>
                                    {{ $trx->trash_type }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <span class="font-extrabold text-[#1a3a2a]">{{ number_format($trx->weight_kg, 1) }}</span> 
                                <span class="text-xs text-gray-500">Kg</span>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <span class="bg-yellow-50 text-yellow-700 border border-yellow-200 px-2 py-1 rounded text-xs font-bold">
                                    + {{ $trx->points_earned }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-gray-500 text-xs">
                                {{ $trx->created_at->format('d M Y') }} <br>
                                <span class="text-gray-400">{{ $trx->created_at->format('H:i') }} WIB</span>
                            </td>
                            
                            <td class="py-4 px-6">
                                @if($trx->status === 'pending')
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-bold">Pending</span>
                                @elseif($trx->status === 'approved')
                                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-bold">Selesai</span>
                                @endif
                            </td>

                            <td class="py-4 px-6">
                                <div class="flex items-center justify-center gap-2">
                                    @if($trx->status === 'pending')
                                        <form action="/admin/laporan-sampah/{{ $trx->id }}/konfirmasi" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="bg-[#40916c] hover:bg-[#2d5a43] text-white px-2.5 py-1.5 rounded text-xs font-semibold shadow-sm transition">
                                                Konfirmasi
                                            </button>
                                        </form>
                                    @endif

                                    <form action="/admin/laporan-sampah/{{ $trx->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin membatalkan & menghapus permanen data setoran ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-2.5 py-1.5 rounded text-xs font-semibold shadow-sm transition">
                                            Batal
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-12 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-400">
                                    <svg class="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <p class="text-lg font-medium text-gray-500">Belum Ada Transaksi</p>
                                    <p class="text-sm mt-1">Data setoran sampah dari user akan muncul di sini.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="p-4 border-t border-gray-100 bg-gray-50">
            {{ $transactions->links() }}
        </div>
    </div>
</x-admin-layout>