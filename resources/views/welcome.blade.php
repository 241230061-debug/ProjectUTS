<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectUTSBol — Platform Lingkungan Hidup</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'system-ui', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        forest: '#1a3a2a',
                        leaf: '#2d6a4f',
                        moss: '#40916c',
                        mint: '#74c69d',
                        pale: '#d8f3dc',
                        cream: '#f8f5ee',
                        bark: '#6b4226',
                        stone: '#7c7c6e',
                        gold: '#c9a84c',
                    },
                    boxShadow: {
                        'custom': '0 4px 24px rgba(26,58,42,0.12)',
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-cream text-forest scroll-smooth">

    <nav class="fixed top-0 w-full z-50 bg-forest/95 backdrop-blur-sm px-[5%] flex items-center justify-between h-[68px]">
        <div class="font-serif text-xl text-mint tracking-tight">
            SiPed<span class="text-gold">Ling</span>
        </div>
        
        <ul class="flex gap-8 list-none md:flex hidden">
            <li><a href="#program" class="text-white/75 no-underline text-sm font-medium transition-colors hover:text-mint">Program</a></li>
            <li><a href="#kegiatan" class="text-white/75 no-underline text-sm font-medium transition-colors hover:text-mint">Kegiatan</a></li>
            <li><a href="#dampak" class="text-white/75 no-underline text-sm font-medium transition-colors hover:text-mint">Dampak</a></li>
            <li><a href="#artikel" class="text-white/75 no-underline text-sm font-medium transition-colors hover:text-mint">Artikel</a></li>
            <li><a href="#kontak" class="text-white/75 no-underline text-sm font-medium transition-colors hover:text-mint">Kontak</a></li>
            <li><a href="/edukasi" class="text-white/75 no-underline text-sm font-medium transition-colors hover:text-mint">Edukasi</a></li>
        </ul>
        
                @if (Route::has('login'))
                    @auth
                        {{-- Jika yang login adalah ADMIN --}}
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ url('/admin/dashboard') }}" class="border-2 border-mint/40 text-mint px-8 py-3.5 rounded-lg no-underline font-medium text-base transition-all hover:bg-mint/10">
                                Dashboard Admin
                            </a>
                        {{-- Jika yang login adalah USER BIASA --}}
                        @else
                            <a href="{{ url('/dashboard') }}" class="border-2 border-mint/40 text-mint px-8 py-3.5 rounded-lg no-underline font-medium text-base transition-all hover:bg-mint/10">
                                Mari Buang Sampah Sekarang
                            </a>
                        @endif

                    {{-- Jika BELUM LOGIN sama sekali --}}
                    @else
                        <a href="{{ route('register') }}" class="border-2 border-mint/40 text-mint px-8 py-3.5 rounded-lg no-underline font-medium text-base transition-all hover:bg-mint/10">
                            Login Sekarang
                        </a>
                    @endauth
                @endif
            </div>
    </nav>

    <section class="min-h-screen bg-gradient-to-br from-forest via-[#0d2b1e] to-[#051a10] flex items-center px-[5%] relative overflow-hidden" id="beranda">
        <div class="absolute inset-0 opacity-40" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%2340916c\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
        
        <div class="max-w-[680px] relative z-10 pt-20">
            <div class="inline-flex items-center gap-2 bg-mint/15 border border-mint/30 text-mint px-4 py-1.5 rounded-full text-xs font-medium tracking-wide mb-6">
                <span class="text-[10px] animate-pulse">●</span> Platform Lingkungan Hidup Indonesia
            </div>
            
            <h1 class="font-serif text-4xl md:text-6xl text-white leading-tight mb-5">
                Bersama Jaga <em class="text-mint not-italic">Bumi Nusantara</em> untuk Generasi Mendatang
            </h1>
            
            <p class="text-white/65 text-lg leading-relaxed mb-10 max-w-[520px]">
                Ubah sampahmu menjadi koin kebaikan! Platform digital yang menghubungkan komunitas, relawan, dan pemerintah dalam upaya pelestarian lingkungan hidup.
            </p>
            
            <div class="flex gap-4 flex-wrap">
                <a href="#program" class="bg-moss text-white px-8 py-3.5 rounded-lg no-underline font-semibold text-base transition-all hover:bg-mint hover:text-forest hover:-translate-y-0.5 inline-flex items-center gap-2">
                    Lihat Program ↓
                </a>
                
                @if (Route::has('login'))
                    @auth
                        {{-- Jika yang login adalah ADMIN --}}
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ url('/admin/dashboard') }}"
                            </a>
                        {{-- Jika yang login adalah USER BIASA --}}
                        @else
                            <a href="{{ url('/dashboard') }}" class="border-2 border-mint/40 text-mint px-8 py-3.5 rounded-lg no-underline font-medium text-base transition-all hover:bg-mint/10">
                                Mari Buang Sampah Sekarang
                            </a>
                        @endif

                    {{-- Jika BELUM LOGIN sama sekali --}}
                    @else
                        <a href="{{ route('register') }}" class="border-2 border-mint/40 text-mint px-8 py-3.5 rounded-lg no-underline font-medium text-base transition-all hover:bg-mint/10">
                            Login Sekarang
                        </a>
                    @endauth
                @endif
            </div>
            
            <div class="grid grid-cols-3 gap-px bg-mint/15 border border-mint/20 rounded-xl overflow-hidden mt-12">
                <div class="bg-forest/50 p-5 text-center">
                    <div class="font-serif text-3xl text-mint font-bold">2.412</div>
                    <div class="text-xs text-white/50 uppercase tracking-wider mt-1">Relawan Aktif</div>
                </div>
                <div class="bg-forest/50 p-5 text-center">
                    <div class="font-serif text-3xl text-mint font-bold">300</div>
                    <div class="text-xs text-white/50 uppercase tracking-wider mt-1">Provinsi</div>
                </div>
                <div class="bg-forest/50 p-5 text-center">
                    <div class="font-serif text-3xl text-mint font-bold">61+</div>
                    <div class="text-xs text-white/50 uppercase tracking-wider mt-1">Program Selesai</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-[5%] bg-white" id="program">
        <p class="text-moss text-xs font-semibold tracking-widest uppercase mb-3">Program Utama</p>
        <h2 class="font-serif text-3xl md:text-4xl leading-tight mb-4">Inisiatif Kami untuk<br>Lingkungan yang Lebih Sehat</h2>
        <p class="text-stone text-base leading-relaxed max-w-[560px]">Kami menjalankan berbagai program berbasis data dan teknologi untuk memastikan dampak nyata bagi ekosistem dan masyarakat.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">
            <div class="bg-cream rounded-xl p-8 border-2 border-transparent transition-all cursor-pointer relative overflow-hidden hover:border-moss hover:-translate-y-1 hover:shadow-custom group">
                <div class="absolute top-0 left-0 right-0 h-1 bg-moss"></div>
                <div class="w-14 h-14 rounded-xl bg-pale flex items-center justify-center mb-5 text-2xl group-hover:scale-110 transition-transform">🌳</div>
                <h3 class="font-serif text-xl mb-2.5">Penghijauan Kota</h3>
                <p class="text-stone text-sm leading-relaxed">Program penanaman pohon di kawasan perkotaan untuk mengurangi polusi udara dan meningkatkan kualitas hidup warga.</p>
                <span class="inline-block mt-4 bg-pale text-moss text-xs font-semibold px-3 py-1 rounded-full">1.200 Pohon Ditanam</span>
            </div>
            
            <div class="bg-[#fef9ec] rounded-xl p-8 border-2 border-transparent transition-all cursor-pointer relative overflow-hidden hover:border-gold hover:-translate-y-1 hover:shadow-custom group">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gold"></div>
                <div class="w-14 h-14 rounded-xl bg-yellow-100 flex items-center justify-center mb-5 text-2xl group-hover:scale-110 transition-transform">♻️</div>
                <h3 class="font-serif text-xl mb-2.5">Pengelolaan Sampah</h3>
                <p class="text-stone text-sm leading-relaxed">Edukasi dan fasilitas daur ulang sampah di tingkat RT/RW agar sampah bernilai ekonomi bagi masyarakat.</p>
                <span class="inline-block mt-4 bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">320 Titik Daur Ulang</span>
            </div>
        </div>
    </section>

    <section class="py-24 px-[5%]" id="kegiatan">
        <p class="text-moss text-xs font-semibold tracking-widest uppercase mb-3">Jadwal Kegiatan</p>
        <h2 class="font-serif text-3xl md:text-4xl leading-tight mb-4">Kegiatan Mendatang</h2>
        <p class="text-stone text-base leading-relaxed max-w-[560px]">Bergabunglah dalam kegiatan nyata di lapangan dan buat perbedaan bersama ribuan relawan kami.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @forelse ($activities as $activity)
        <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow border-l-4 border-[#40916c]">
            <p class="text-[#40916c] text-sm font-bold uppercase tracking-wider mb-3">
                {{ \Carbon\Carbon::parse($activity->activity_date)->translatedFormat('d F Y') }}
            </p>
            <h3 class="text-2xl font-serif text-[#1a3a2a] mb-3">{{ $activity->title }}</h3>
            <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                {{ $activity->description }}
            </p>
            <div class="flex items-center text-sm font-medium text-gray-500">
                <svg class="w-4 h-4 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                {{ $activity->location }}
            </div>
        </div>
    @empty
        <div class="col-span-1 md:col-span-2 bg-white/50 border-2 border-dashed border-gray-200 rounded-xl p-10 text-center">
            <p class="text-gray-500 font-medium">Belum ada jadwal kegiatan dalam waktu dekat. Pantau terus ya!</p>
        </div>
    @endforelse
</div>
    </section>

    <section class="py-24 px-[5%] bg-forest relative overflow-hidden" id="dampak">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")"></div>
        </div>

        <div class="relative z-10 text-center max-w-6xl mx-auto">
            <p class="text-mint text-xs font-semibold tracking-widest uppercase mb-3 animate-fade-in">Dampak Kami</p>
            <h2 class="font-serif text-3xl md:text-5xl leading-tight mb-6 text-white animate-slide-up" style="animation-delay: 0.2s;">Angka yang <span class="text-mint">Berbicara</span></h2>
            <p class="text-white/60 text-lg leading-relaxed mb-16 animate-slide-up max-w-2xl mx-auto" style="animation-delay: 0.4s;">Sejak 2020, kami telah menciptakan dampak nyata melalui kolaborasi komunitas dan teknologi.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Impact Card 1 -->
                <div class="text-center p-8 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-500 animate-slide-up group" style="animation-delay: 0.6s;">
                    <div class="font-serif text-4xl md:text-5xl text-mint font-bold mb-2 animate-pulse-slow" data-target="58">24</div>
                    <div class="text-white/60 text-sm mb-1">Lahan Dihijaukan</div>
                    <div class="text-gold text-lg font-medium">58 Ha</div>
                    <div class="w-0 group-hover:w-full h-0.5 bg-mint transition-all duration-500 mt-4 mx-auto"></div>
                </div>

                <!-- Impact Card 2 -->
                <div class="text-center p-8 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-500 animate-slide-up group" style="animation-delay: 0.8s;">
                    <div class="font-serif text-4xl md:text-5xl text-mint font-bold mb-2 animate-pulse-slow" data-target="240">12</div>
                    <div class="text-white/60 text-sm mb-1">Sampah Didaur Ulang</div>
                    <div class="text-gold text-lg font-medium">240 Ton</div>
                    <div class="w-0 group-hover:w-full h-0.5 bg-mint transition-all duration-500 mt-4 mx-auto"></div>
                </div>

                <!-- Impact Card 3 -->
                <div class="text-center p-8 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-500 animate-slide-up group" style="animation-delay: 1s;">
                    <div class="font-serif text-4xl md:text-5xl text-mint font-bold mb-2 animate-pulse-slow" data-target="1200">300</div>
                    <div class="text-white/60 text-sm mb-1">Relawan Terdaftar</div>
                    <div class="text-gold text-lg font-medium">1,200+</div>
                    <div class="w-0 group-hover:w-full h-0.5 bg-mint transition-all duration-500 mt-4 mx-auto"></div>
                </div>

                <!-- Impact Card 4 -->
                <div class="text-center p-8 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-500 animate-slide-up group" style="animation-delay: 1.2s;">
                    <div class="font-serif text-4xl md:text-5xl text-mint font-bold mb-2 animate-pulse-slow" data-target="38">61</div>
                    <div class="text-white/60 text-sm mb-1">Peningkatan Udara</div>
                    <div class="text-gold text-lg font-medium">38%</div>
                    <div class="w-0 group-hover:w-full h-0.5 bg-mint transition-all duration-500 mt-4 mx-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-[5%]" id="artikel">
        <p class="text-moss text-xs font-semibold tracking-widest uppercase mb-3">Berita &amp; Artikel</p>
        <h2 class="font-serif text-3xl md:text-4xl leading-tight mb-4">Terbaru dari SiPedLing</h2>
        <p class="text-stone text-base leading-relaxed max-w-[560px]">Ikuti perkembangan terkini seputar lingkungan hidup, program kami, dan tips berkelanjutan.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mt-14">
            <div class="bg-white rounded-xl overflow-hidden shadow-custom transition-transform hover:-translate-y-1">
                <div class="h-[180px] flex items-center justify-center text-5xl bg-pale">🌲</div>
                <div class="p-6">
                    <div class="text-moss text-xs font-bold tracking-wide uppercase">Penghijauan</div>
                    <h3 class="font-serif text-lg my-1.5 leading-tight">10.000 Pohon Berhasil Ditanam di Kawasan Penyangga Ibu Kota</h3>
                    <p class="text-stone text-sm leading-relaxed">Program penghijauan masif yang melibatkan 400 relawan dari 15 komunitas berbeda sukses dilaksanakan.</p>
                    <div class="flex items-center gap-2 mt-4 text-stone text-xs">📅 2 Mei 2026 · ⏱ 4 menit baca</div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-custom transition-transform hover:-translate-y-1">
                <div class="h-[180px] flex items-center justify-center text-5xl bg-blue-50">🌊</div>
                <div class="p-6">
                    <div class="text-moss text-xs font-bold tracking-wide uppercase">Lautan</div>
                    <h3 class="font-serif text-lg my-1.5 leading-tight">Teknologi AI untuk Pantau Polusi Plastik di Perairan Indonesia</h3>
                    <p class="text-stone text-sm leading-relaxed">Platform ini kini menggunakan kecerdasan buatan untuk mendeteksi sebaran sampah plastik di laut secara akurat.</p>
                    <div class="flex items-center gap-2 mt-4 text-stone text-xs">📅 28 April 2026 · ⏱ 6 menit baca</div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-custom transition-transform hover:-translate-y-1">
                <div class="h-[180px] flex items-center justify-center text-5xl bg-yellow-50">🌱</div>
                <div class="p-6">
                    <div class="text-moss text-xs font-bold tracking-wide uppercase">Pertanian</div>
                    <h3 class="font-serif text-lg my-1.5 leading-tight">Petani Muda Jogja Buktikan Pertanian Organik Lebih Menguntungkan</h3>
                    <p class="text-stone text-sm leading-relaxed">Kisah inspiratif petani muda yang berhasil meningkatkan pendapatan 60% setelah beralih ke pertanian organik.</p>
                    <div class="flex items-center gap-2 mt-4 text-stone text-xs">📅 20 April 2026 · ⏱ 5 menit baca</div>
                </div>
            </div>
        </div>
    </section>

<section class="py-24 px-[5%] bg-white" id="kontak">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div>
            <p class="text-moss text-xs font-semibold tracking-widest uppercase mb-3">Hubungi Kami</p>
            <h2 class="font-serif text-3xl mb-4">Mari Bergerak Bersama</h2>
            <p class="text-stone leading-relaxed mb-8">Punya pertanyaan, ingin menjadi relawan, atau ingin bermitra dengan saya? Saya terbuka untuk semua bentuk kolaborasi demi lingkungan yang lebih baik. Hubungi saya langsung melalui media di bawah ini.</p>

            <div class="flex items-start gap-4 mb-5">
                <div class="w-10 h-10 bg-pale rounded-lg flex items-center justify-center flex-shrink-0 text-lg">📍</div>
                <div>
                    <strong class="block text-xs text-stone mb-0.5">Alamat</strong>
                    <span class="text-sm text-forest">Kampus Universitas Muhammadiyah Pontianak</span>
                </div>
            </div>
            
            <div class="flex items-start gap-4 mb-5">
                <div class="w-10 h-10 bg-pale rounded-lg flex items-center justify-center flex-shrink-0 text-lg">📧</div>
                <div>
                    <strong class="block text-xs text-stone mb-0.5">Email</strong>
                    <span class="text-sm text-forest">241230061@utsbol.com</span>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <a href="https://wa.me/6282254145576" target="_blank" rel="noopener noreferrer" 
               class="group flex items-center gap-5 p-6 bg-white border-2 border-gray-100 rounded-2xl hover:border-green-500 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-green-50 text-green-500 rounded-full flex items-center justify-center group-hover:bg-green-500 group-hover:text-white transition-colors duration-300 flex-shrink-0">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 0C5.385 0 0 5.385 0 12.031c0 2.128.552 4.135 1.528 5.926L.16 24l6.236-1.636C8.15 23.313 10.04 23.86 12.031 23.86c6.646 0 12.031-5.385 12.031-12.031S18.677 0 12.031 0zm5.825 17.337c-.247.697-1.43 1.341-1.968 1.408-.475.06-1.066.113-3.414-.858-2.81-1.163-4.636-4.043-4.773-4.226-.138-.184-1.14-1.517-1.14-2.893 0-1.376.716-2.056.97-2.327.253-.271.553-.339.737-.339.184 0 .368 0 .521.008.161.008.375-.061.583.438.215.516.737 1.794.8 1.94.062.146.101.316.008.5-.092.184-.138.301-.276.461-.138.161-.284.346-.415.484-.138.138-.284.292-.123.568.161.276.716 1.182 1.536 1.92.632.568 1.521.844 1.798.983.276.138.438.115.6-.061.161-.177.691-.806.876-1.083.184-.276.368-.23.614-.138.246.092 1.551.737 1.82.868.268.13.445.192.506.3.061.108.061.63-.185 1.327z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#1a3a2a] text-xl mb-1 group-hover:text-green-600 transition-colors">WhatsApp</h3>
                    <p class="text-gray-500 text-sm">Chat langsung di Whatsapp Kami</p>
                </div>
                <div class="ml-auto text-gray-300 group-hover:text-green-500 group-hover:translate-x-1 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>

            <a href="https://instagram.com/nabbiiil_" target="_blank" rel="noopener noreferrer" 
               class="group flex items-center gap-5 p-6 bg-white border-2 border-gray-100 rounded-2xl hover:border-pink-500 hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 bg-pink-50 text-pink-500 rounded-full flex items-center justify-center group-hover:bg-gradient-to-tr group-hover:from-yellow-400 group-hover:via-pink-500 group-hover:to-purple-500 group-hover:text-white transition-all duration-300 flex-shrink-0">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#1a3a2a] text-xl mb-1 group-hover:text-pink-600 transition-colors">Instagram</h3>
                    <p class="text-gray-500 text-sm">Lihat aktivitas di instagram kami</p>
                </div>
                <div class="ml-auto text-gray-300 group-hover:text-pink-500 group-hover:translate-x-1 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>
        </div>
    </div>
</section>
    <footer class="bg-[#0d2b1e] text-white/60 py-16 px-[5%] pb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <div class="lg:col-span-2">
                <div class="font-serif text-xl text-mint mb-3">SiPedLing<span class="text-gold">Bol</span></div>
                <p class="text-sm leading-relaxed max-w-sm">Platform digital untuk pelestarian lingkungan hidup Indonesia. Mengubah sampah menjadi berkah.</p>
            </div>
            
            <div>
                <h4 class="text-white text-sm font-semibold tracking-wide uppercase mb-4">Program Kami</h4>
                <ul class="list-none space-y-2">
                    <li><a href="{{ route('trash.create') }}" class="text-white/55 no-underline text-sm transition-colors hover:text-mint">Setor Sampah</a></li>
                    <li><a href="{{ route('rewards.index') }}" class="text-white/55 no-underline text-sm transition-colors hover:text-mint">Katalog Hadiah</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-white text-sm font-semibold tracking-wide uppercase mb-4">Navigasi</h4>
                <ul class="list-none space-y-2">
                    <li><a href="#beranda" class="text-white/55 no-underline text-sm transition-colors hover:text-mint">Beranda</a></li>
                    <li><a href="#program" class="text-white/55 no-underline text-sm transition-colors hover:text-mint">Program</a></li>
                    <li><a href="#kontak" class="text-white/55 no-underline text-sm transition-colors hover:text-mint">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-white/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs">© 2026 SiPedLING. Hak cipta dilindungi.</p>
            <span class="text-xs bg-mint/10 border border-mint/20 text-mint px-3 py-1 rounded-full">⚙ Built with Laravel + Blade + Tailwind</span>
        </div>
    </footer>

    <div class="fixed bottom-8 right-8 bg-forest text-white px-6 py-4 rounded-xl shadow-2xl translate-y-[150%] opacity-0 transition-all duration-500 z-50 border-l-4 border-mint" id="toast">
        ✅ Pesan berhasil dikirim! Kami akan menghubungi Anda segera.
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>