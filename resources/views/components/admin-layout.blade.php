<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel — EkoNusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#f8f5ee]">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-[#1a3a2a] text-white flex flex-col shadow-xl">
            <div class="p-6">
                <a href="/" class="text-2xl font-serif font-bold text-white">
                    🌱 Admin<span class="text-[#c9a84c]">Bol</span>
                </a>
            </div>
            
            <nav class="flex-1 px-4 space-y-2">
                <a href="/admin/dashboard" class="block px-4 py-2 rounded-lg hover:bg-[#40916c] transition {{ request()->is('admin/dashboard') ? 'bg-[#40916c]' : '' }}">Dashboard</a>
                <a href="/admin/users" class="block px-4 py-2 rounded-lg hover:bg-[#40916c] transition {{ request()->is('admin/users') ? 'bg-[#40916c]' : '' }}">Manajemen User</a>
                <a href="/admin/laporan-sampah" class="block px-4 py-2 rounded-lg hover:bg-[#40916c] transition {{ request()->is('admin/laporan-sampah') ? 'bg-[#40916c]' : '' }}">Laporan Sampah</a>
                <a href="/admin/activities" class="block px-4 py-2 rounded-lg hover:bg-[#40916c] transition {{ request()->is('admin/activities') ? 'bg-[#40916c]' : '' }}">Kelola Kegiatan</a>
            </nav>

            <div class="p-4 border-t border-white/10">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left px-4 py-2 text-sm text-red-300 hover:bg-red-900/30 rounded-lg">
                        Keluar Akun
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 flex flex-col">
            <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-8">
                <h1 class="text-lg font-semibold text-[#1a3a2a]">Admin Dashboard</h1>
            </header>

            <div class="p-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>