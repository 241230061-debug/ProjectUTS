<x-app-layout>
    <div class="py-12 bg-cream min-h-screen font-sans">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-pale border-l-4 border-moss text-moss p-4 rounded-lg shadow-sm mb-6 flex items-center" role="alert">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-gradient-to-br from-forest via-[#0d2b1e] to-[#051a10] rounded-3xl shadow-xl p-8 text-white mb-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 opacity-10">
                    <svg class="w-64 h-64 -mt-10 -mr-10" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A12.014 12.014 0 0010.326 5a12.02 12.02 0 00-2.31-2.9A12.016 12.016 0 002.3 1.046c-.524-.13-.98.326-.85.85A12.015 12.015 0 005 10.326a12.018 12.018 0 00-2.9 2.31A12.015 12.015 0 001.046 21.3c.13.524.586.98 1.11.85a12.015 12.015 0 008.43-3.155A12.016 12.016 0 0013.486 21.3c.524.13.98-.326.85-.85a12.015 12.015 0 00-3.155-8.43 12.016 12.016 0 002.31-2.9A12.016 12.016 0 0021.3 2.3c.13-.524-.326-.98-.85-.85z" clip-rule="evenodd"></path></svg>
                </div>
                
                <div class="relative z-10">
                    <h3 class="text-3xl font-serif mb-2">Halo, {{ Auth::user()->name }}! 👋</h3>
                    <p class="text-lg text-white/70 max-w-2xl">Setiap sampah yang kamu pilah dan buang pada tempatnya adalah satu langkah besar menyelamatkan bumi kita. Yuk, tukarkan sampahmu menjadi hadiah bermanfaat!</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 flex items-center justify-between border-b-4 border-moss mb-8">
                <div>
                    <p class="text-sm text-stone font-bold uppercase tracking-wider mb-1">Total Poin Kebaikanmu</p>
                    <p class="text-5xl font-serif text-moss font-bold">{{ number_format(Auth::user()->points, 0, ',', '.') }} <span class="text-xl font-sans font-semibold text-stone">PTS</span></p>
                </div>
                <div class="bg-[#fef9ec] p-4 rounded-full shadow-inner">
                    <svg class="w-12 h-12 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                
                <div class="bg-white rounded-3xl shadow-sm hover:shadow-custom transition-shadow duration-300 overflow-hidden group border border-gray-100">
                    <div class="h-40 bg-pale flex items-center justify-center group-hover:bg-mint/30 transition-colors">
                        <svg class="w-20 h-20 text-moss transition-transform group-hover:scale-110 duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </div>
                    <div class="p-8 text-center">
                        <h4 class="text-2xl font-serif text-forest mb-3 font-bold">Setor Sampahmu</h4>
                        <p class="text-stone mb-8 leading-relaxed">Punya botol plastik, kertas, atau logam bekas? Jangan dibuang sembarangan! Setorkan ke sistem kami dan dapatkan poinnya.</p>
                        <a href="{{ route('trash.create') }}" class="inline-flex items-center justify-center w-full bg-moss hover:bg-forest text-white font-bold py-4 px-6 rounded-xl transition-all transform active:scale-95 shadow-md">
                            Mulai Setor Sekarang
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm hover:shadow-custom transition-shadow duration-300 overflow-hidden group border border-gray-100">
                    <div class="h-40 bg-[#fef9ec] flex items-center justify-center group-hover:bg-[#fdebc8] transition-colors">
                        <svg class="w-20 h-20 text-gold transition-transform group-hover:scale-110 duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                    </div>
                    <div class="p-8 text-center">
                        <h4 class="text-2xl font-serif text-forest mb-3 font-bold">Katalog Hadiah</h4>
                        <p class="text-stone mb-8 leading-relaxed">Kerja kerasmu menjaga lingkungan pantas diapresiasi. Tukarkan poin yang sudah terkumpul dengan berbagai voucher dan hadiah menarik!</p>
                        <a href="{{ route('rewards.index') }}" class="inline-flex items-center justify-center w-full bg-gold hover:bg-[#b08f3a] text-white font-bold py-4 px-6 rounded-xl transition-all transform active:scale-95 shadow-md">
                            Lihat & Tukar Hadiah
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>