<footer class="bg-white border-t border-emerald-100 mt-12">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-1">
                <h3 class="text-xl font-bold text-emerald-600 mb-4">🌱 ProjectUTSbol</h3>
                <p class="text-gray-500 text-sm">
                    Solusi modern untuk mengelola sampah dan menjaga kelestarian bumi kita. Mulai dari langkah kecil untuk dampak yang besar.
                </p>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Menu Utama</h4>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="{{ route('dashboard') }}" class="hover:text-emerald-600">Beranda</a></li>
                    <li><a href="{{ route('trash.create') }}" class="hover:text-emerald-600">Setor Sampah</a></li>
                    <li><a href="{{ route('rewards.index') }}" class="hover:text-emerald-600">Katalog Hadiah</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Kontak</h4>
                <p class="text-sm text-gray-600">Email: 241230061@utsbol.com</p>
                <p class="text-sm text-gray-600 mt-2">Lokasi: Sanggau</p>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-100 pt-8 text-center">
            <p class="text-gray-400 text-xs">
                &copy; {{ date('Y') }} Project UTS BOL
            </p>
        </div>
    </div>
</footer>