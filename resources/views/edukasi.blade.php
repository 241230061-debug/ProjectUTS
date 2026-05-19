<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukasi Lingkungan - SiPedLing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        forest: '#1a3a2a',
                        moss: '#40916c',
                        pale: '#e8f0eb',
                        stone: '#6b7280',
                        cream: '#fcfcfc'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Merriweather', 'serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-cream text-forest font-sans antialiased selection:bg-moss selection:text-white">

    <nav class="py-6 px-[5%] flex justify-between items-center bg-[#1a3a2a] border-b border-gray-100 sticky top-0 z-50">
        <a href="/" class="text-2xl font-serif text-color = green hover:text-moss transition">SiPed<span class="text-gold">Ling</span></a>
        <div class="flex gap-6 text-sm font-semibold">
            <a href="/" class="text-stone hover:text-moss transition-colors">Beranda</a>
            <a href="/edukasi" class="text-moss">Edukasi</a>
        </div>
    </nav>

    <section class="py-24 px-[5%] bg-pale text-center relative overflow-hidden">
        <div class="relative z-10 max-w-3xl mx-auto">
            <p class="text-moss text-xs font-bold tracking-widest uppercase mb-3">Pusat Pengetahuan</p>
            <h1 class="font-serif text-4xl md:text-5xl mb-6 text-forest leading-tight">Mulai Peduli Lingkungan dari Diri Sendiri</h1>
            <p class="text-stone leading-relaxed text-lg">Pelajari apa itu sampah, bagaimana mengelolanya dengan bijak, dan jadilah bagian dari solusi untuk bumi yang lebih hijau.</p>
        </div>
    </section>

    <section class="py-20 px-[5%] bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="font-serif text-3xl mb-4">Apa itu Sampah?</h2>
                <p class="text-stone leading-relaxed mb-6">
                    Sampah adalah sisa kegiatan sehari-hari manusia atau proses alam yang berbentuk padat. Seringkali kita menganggapnya sebagai barang yang tidak berguna lagi, padahal jika dikelola dengan benar, sampah bisa memiliki nilai ekonomis dan tidak merusak alam.
                </p>
                <div class="bg-pale p-6 rounded-xl border-l-4 border-moss">
                    <h3 class="font-bold text-forest mb-2">Dampak Buruk Sampah Bagi Lingkungan:</h3>
                    <ul class="list-disc pl-5 text-stone text-sm space-y-2">
                        <li><strong>Pencemaran Air & Tanah:</strong> Merusak ekosistem sungai dan menurunkan kualitas kesuburan tanah.</li>
                        <li><strong>Sumber Penyakit:</strong> Menjadi sarang nyamuk, lalat, dan bakteri yang memicu demam berdarah hingga diare.</li>
                        <li><strong>Pemanasan Global:</strong> Sampah organik di TPA yang membusuk menghasilkan gas metana (gas rumah kaca).</li>
                        <li><strong>Bencana Alam:</strong> Penyumbatan saluran air oleh sampah plastik adalah penyebab utama banjir di perkotaan.</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100 rounded-2xl h-48 md:h-64 rounded-tr-[4rem] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sampah Plastik" class="w-full h-full object-cover opacity-80">
                </div>
                <div class="bg-moss rounded-2xl h-48 md:h-64 mt-8 rounded-bl-[4rem] p-6 flex flex-col justify-center text-white">
                    <span class="text-4xl mb-2">🌍</span>
                    <p class="font-serif font-bold text-lg">Bumi Hanya Satu</p>
                    <p class="text-xs text-green-100 mt-2">Mari jaga agar tetap layak huni untuk generasi mendatang.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-[5%] bg-cream">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl mb-4">Kenali Jenis Sampahmu</h2>
                <p class="text-stone max-w-2xl mx-auto">Langkah pertama dalam pengelolaan sampah adalah mengetahui jenisnya agar penanganannya tepat sasaran.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-white border-2 border-gray-100 rounded-2xl hover:border-moss hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-green-100 text-green-600 rounded-xl flex items-center justify-center text-3xl mb-6">🍂</div>
                    <h3 class="font-bold text-xl mb-3">Sampah Organik</h3>
                    <p class="text-stone text-sm leading-relaxed mb-4">Sampah yang berasal dari sisa makhluk hidup dan mudah terurai oleh alam secara alami.</p>
                    <p class="text-xs text-gray-500 mb-4"><strong>Contoh:</strong> Sisa makanan, sayuran, daun kering, cangkang telur.</p>
                </div>

                <div class="p-8 bg-white border-2 border-gray-100 rounded-2xl hover:border-blue-400 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-3xl mb-6">♻️</div>
                    <h3 class="font-bold text-xl mb-3">Sampah Anorganik</h3>
                    <p class="text-stone text-sm leading-relaxed mb-4">Sampah yang sulit atau butuh ratusan tahun untuk terurai. Seringkali bisa didaur ulang.</p>
                    <p class="text-xs text-gray-500 mb-4"><strong>Contoh:</strong> Botol plastik, kaleng, kantong kresek, kardus, kaca.</p>
                </div>

                <div class="p-8 bg-white border-2 border-gray-100 rounded-2xl hover:border-red-400 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-red-100 text-red-600 rounded-xl flex items-center justify-center text-3xl mb-6">🔋</div>
                    <h3 class="font-bold text-xl mb-3">Sampah B3</h3>
                    <p class="text-stone text-sm leading-relaxed mb-4">Bahan Berbahaya dan Beracun yang memerlukan penanganan khusus agar tidak mencemari.</p>
                    <p class="text-xs text-gray-500 mb-4"><strong>Contoh:</strong> Baterai bekas, lampu TL, obat kadaluarsa, cairan pembersih.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-[5%] bg-forest text-cream">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <p class="text-moss font-bold tracking-widest uppercase mb-2">Solusi Global</p>
                    <h2 class="font-serif text-3xl mb-6">Prinsip 3R: Kunci Pengelolaan Sampah</h2>
                    <p class="text-gray-300 leading-relaxed mb-8">Pengelolaan sampah yang baik dimulai dari diri sendiri dengan menerapkan prinsip 3R. Langkah sederhana yang memberikan dampak luar biasa.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-moss text-white rounded-full flex items-center justify-center font-bold text-xl shrink-0">1</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Reduce (Mengurangi)</h4>
                                <p class="text-gray-400 text-sm">Minimalkan penggunaan barang yang menghasilkan sampah. Contoh: membawa tas belanja sendiri, menolak sedotan plastik.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-moss text-white rounded-full flex items-center justify-center font-bold text-xl shrink-0">2</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Reuse (Menggunakan Kembali)</h4>
                                <p class="text-gray-400 text-sm">Gunakan kembali barang yang masih layak pakai. Contoh: memakai botol minum isi ulang, mengubah botol bekas jadi pot tanaman.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-moss text-white rounded-full flex items-center justify-center font-bold text-xl shrink-0">3</div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Recycle (Mendaur Ulang)</h4>
                                <p class="text-gray-400 text-sm">Mengolah sampah menjadi produk baru yang bermanfaat. Contoh: mengumpulkan plastik dan kardus untuk disetorkan ke bank sampah.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#244b36] p-8 md:p-10 rounded-3xl border border-moss/30">
                    <h3 class="font-serif text-2xl mb-6">Apa Manfaat Daur Ulang?</h3>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-start gap-3">
                            <span class="text-moss">✔</span>
                            <span>Mencegah penumpukan sampah di Tempat Pembuangan Akhir (TPA).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-moss">✔</span>
                            <span>Menghemat energi dan sumber daya alam (bahan baku pembuatan produk baru).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-moss">✔</span>
                            <span>Mengurangi emisi karbon penyebab perubahan iklim.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-moss">✔</span>
                            <span>Menciptakan lapangan kerja baru dan memberikan nilai ekonomi tambahan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-[5%] bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-serif text-3xl mb-12 text-center text-forest">Aksi Nyata di Rumah</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-2xl">🗑️</span>
                        <h3 class="font-bold text-xl">Panduan Memilah Sampah</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="p-4 border border-gray-100 rounded-xl bg-pale/50 flex gap-4">
                            <span class="font-bold text-moss">01</span>
                            <p class="text-sm text-stone"><strong>Siapkan 2-3 Tempat Sampah:</strong> Pisahkan tempat sampah untuk organik, anorganik (plastik/kertas), dan residu/B3.</p>
                        </div>
                        <div class="p-4 border border-gray-100 rounded-xl bg-pale/50 flex gap-4">
                            <span class="font-bold text-moss">02</span>
                            <p class="text-sm text-stone"><strong>Bersihkan Dulu:</strong> Cuci atau bilas kemasan plastik, kaleng, atau botol kaca dari sisa makanan sebelum dibuang/disimpan.</p>
                        </div>
                        <div class="p-4 border border-gray-100 rounded-xl bg-pale/50 flex gap-4">
                            <span class="font-bold text-moss">03</span>
                            <p class="text-sm text-stone"><strong>Lipat / Remukkan:</strong> Remukkan botol air mineral dan lipat kardus untuk menghemat ruang penyimpanan.</p>
                        </div>
                        <div class="p-4 border border-gray-100 rounded-xl bg-pale/50 flex gap-4">
                            <span class="font-bold text-moss">04</span>
                            <p class="text-sm text-stone"><strong>Setorkan:</strong> Bawa sampah anorganik yang sudah terpilah rapi ke SiPedLing untuk ditukar menjadi poin!</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-2xl">🌱</span>
                        <h3 class="font-bold text-xl">Kebiasaan Ramah Lingkungan</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-cream p-5 rounded-xl border border-gray-100 text-center hover:border-moss transition-colors">
                            <div class="text-3xl mb-2">🛍️</div>
                            <p class="text-sm font-semibold text-forest">Bawa Tas Belanja</p>
                            <p class="text-xs text-stone mt-1">Katakan tidak pada kantong plastik sekali pakai.</p>
                        </div>
                        <div class="bg-cream p-5 rounded-xl border border-gray-100 text-center hover:border-moss transition-colors">
                            <div class="text-3xl mb-2">🥤</div>
                            <p class="text-sm font-semibold text-forest">Botol Minum Sendiri</p>
                            <p class="text-xs text-stone mt-1">Gunakan tumbler untuk kurangi botol kemasan.</p>
                        </div>
                        <div class="bg-cream p-5 rounded-xl border border-gray-100 text-center hover:border-moss transition-colors">
                            <div class="text-3xl mb-2">🍽️</div>
                            <p class="text-sm font-semibold text-forest">Habiskan Makanan</p>
                            <p class="text-xs text-stone mt-1">Kurangi food waste dengan makan secukupnya.</p>
                        </div>
                        <div class="bg-cream p-5 rounded-xl border border-gray-100 text-center hover:border-moss transition-colors">
                            <div class="text-3xl mb-2">💡</div>
                            <p class="text-sm font-semibold text-forest">Hemat Energi</p>
                            <p class="text-xs text-stone mt-1">Matikan lampu & air jika tidak digunakan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-[5%] pb-24">
        <div class="max-w-4xl mx-auto bg-moss text-white rounded-3xl p-10 md:p-16 text-center shadow-xl">
            <h2 class="font-serif text-3xl md:text-4xl mb-4">Ayo Ambil Peran Sekarang!</h2>
            <p class="text-green-50 mb-8 max-w-2xl mx-auto leading-relaxed">
                Pengetahuan saja tidak cukup tanpa tindakan. Mulailah memilah sampah di rumahmu hari ini. Setorkan sampah anorganikmu ke SiPedLing, selamatkan bumi, dan dapatkan keuntungannya!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/#kontak" class="bg-white text-moss px-8 py-3.5 rounded-lg font-bold hover:bg-pale transition-colors shadow-sm">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-gray-100 py-8 text-center text-sm text-stone">
        <p>&copy; {{ date('Y') }} SiPedLing. Peduli Lingkungan, Peduli Masa Depan.</p>
    </footer>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>