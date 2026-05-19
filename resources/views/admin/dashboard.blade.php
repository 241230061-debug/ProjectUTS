<x-admin-layout>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-[#1a3a2a]">Ikhtisar SiPedLing</h2>
        <p class="text-gray-600">Pantau perkembangan user dan setoran sampah hari ini.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="p-4 bg-blue-50 text-blue-600 rounded-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-medium">Total Pengguna</p>
                <p class="text-2xl font-bold text-[#1a3a2a]">{{ $totalUsers }} <span class="text-sm font-normal text-gray-400">User</span></p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="p-4 bg-[#40916c]/10 text-[#40916c] rounded-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-medium">Sampah Terkumpul</p>
                <p class="text-2xl font-bold text-[#1a3a2a]">{{ $totalBeratSampah }} <span class="text-sm font-normal text-gray-400">Kg</span></p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="p-4 bg-[#c9a84c]/10 text-[#c9a84c] rounded-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-medium">Total Setoran</p>
                <p class="text-2xl font-bold text-[#1a3a2a]">{{ $totalTransaksi }} <span class="text-sm font-normal text-gray-400">Kali</span></p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 lg:col-span-2">
            <h3 class="text-lg font-bold text-[#1a3a2a] mb-4">Setoran Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#f8f5ee] text-gray-600 text-sm border-b border-gray-200">
                            <th class="py-3 px-4 rounded-tl-lg">Nama User</th>
                            <th class="py-3 px-4">Jenis Sampah</th>
                            <th class="py-3 px-4">Berat</th>
                            <th class="py-3 px-4">Poin Didapat</th>
                            <th class="py-3 px-4 rounded-tr-lg">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700">
                        @forelse ($recentTransactions as $trx)
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                <td class="py-3 px-4 font-medium text-[#1a3a2a]">{{ $trx->user->name ?? 'User Dihapus' }}</td>
                                <td class="py-3 px-4 capitalize">{{ $trx->trash_type }}</td>
                                <td class="py-3 px-4">{{ $trx->weight_kg }} Kg</td>
                                <td class="py-3 px-4 text-[#40916c] font-semibold">+{{ $trx->points_earned }}</td>
                                <td class="py-3 px-4 text-gray-500">{{ $trx->created_at->diffForHumans() }}</td>
                                <td class="py-3 px-4">
    @if($trx->status === 'pending')
        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-bold">Pending</span>
    @elseif($trx->status === 'approved')
        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-bold">Selesai</span>
    @endif
</td>
<td class="py-3 px-4">
    @if($trx->status === 'pending')
        <form action="{{ route('admin.transactions.approve', $trx->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="bg-[#40916c] text-white px-3 py-1 rounded text-xs hover:bg-[#1a3a2a]">
                Konfirmasi
            </button>
        </form>
    @else
        <span class="text-gray-400 text-xs">-</span>
    @endif
</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-gray-500">Belum ada data setoran sampah.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h3 class="text-lg font-bold text-[#1a3a2a] mb-4">Komposisi Sampah (Kg)</h3>
            <div class="relative w-full aspect-square">
                <canvas id="sampahChart"></canvas>
            </div>
        </div>

    </div>
    <div class="mt-6 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-5">
            <div>
                <h3 class="text-lg font-bold text-[#1a3a2a]">Agenda Kegiatan Terdekat</h3>
                <p class="text-xs text-gray-500 mt-1">Jadwal kegiatan operasional dan komunitas.</p>
            </div>
            <a href="/admin/activities" class="text-sm text-[#40916c] hover:text-[#1a3a2a] font-semibold transition-colors">
                Kelola Semua &rarr;
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @forelse ($upcomingActivities as $activity)
                <div class="flex items-start gap-4 p-4 border border-gray-100 rounded-xl hover:bg-gray-50 hover:border-[#40916c]/30 transition-all duration-200 group">
                    <div class="bg-[#40916c]/10 text-[#40916c] min-w-[65px] text-center rounded-lg p-2.5 group-hover:bg-[#40916c] group-hover:text-white transition-colors">
                        <span class="block text-[10px] font-bold uppercase tracking-wider">{{ \Carbon\Carbon::parse($activity->activity_date)->translatedFormat('M') }}</span>
                        <span class="block text-xl font-black leading-none mt-1">{{ \Carbon\Carbon::parse($activity->activity_date)->format('d') }}</span>
                    </div>
                    
                    <div>
                        <h4 class="font-bold text-[#1a3a2a] text-sm mb-1 line-clamp-1">{{ $activity->title }}</h4>
                        <p class="text-xs text-gray-500 mb-2 line-clamp-2">{{ $activity->description }}</p>
                        <div class="flex items-center text-xs font-medium text-gray-400">
                            <svg class="w-3.5 h-3.5 mr-1 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="truncate max-w-[120px]">{{ $activity->location }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="md:col-span-3 text-center py-8 text-gray-500 bg-gray-50 rounded-xl border border-dashed border-gray-200">
                    Belum ada agenda kegiatan yang dijadwalkan dalam waktu dekat.
                </div>
            @endforelse
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('sampahChart');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Plastik', 'Kertas', 'Besi/Logam'],
                datasets: [{
                    data: [{{ $sampahPlastik }}, {{ $sampahKertas }}, {{ $sampahBesi }}],
                    backgroundColor: [
                        '#40916c', // Mint Green
                        '#c9a84c', // Gold
                        '#1a3a2a'  // Dark Green
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { padding: 20, font: { family: 'ui-sans-serif, system-ui' } }
                    }
                },
                cutout: '70%'
            }
        });
    </script>
</x-admin-layout>