<x-admin-layout>
    <div class="max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-[#1a3a2a]">Edit Kegiatan</h2>
                <p class="text-gray-600">Perbarui informasi agenda atau kegiatan komunitas.</p>
            </div>
            <a href="/admin/activities" class="text-[#40916c] hover:underline text-sm font-medium">&larr; Kembali</a>
        </div>

        @if ($errors->any())
            <div class="mb-5 p-4 bg-red-50 border border-red-200 text-red-600 rounded-lg">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <form action="/admin/activities/{{ $activity->id }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label class="block font-semibold text-[#1a3a2a] mb-1.5">Nama/Judul Kegiatan</label>
                    <input type="text" name="title" value="{{ old('title', $activity->title) }}" placeholder="Misal: Kerja Bakti Massal" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                </div>

                <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-semibold text-[#1a3a2a] mb-1.5">Tanggal Pelaksanaan</label>
                        <input type="date" name="activity_date" value="{{ old('activity_date', \Carbon\Carbon::parse($activity->activity_date)->format('Y-m-d')) }}" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                    </div>
                    <div>
                        <label class="block font-semibold text-[#1a3a2a] mb-1.5">Lokasi</label>
                        <input type="text" name="location" value="{{ old('location', $activity->location) }}" placeholder="Misal: Balai Desa / RT 04" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block font-semibold text-[#1a3a2a] mb-1.5">Deskripsi Singkat</label>
                    <textarea name="description" rows="4" placeholder="Jelaskan detail kegiatan di sini..." class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>{{ old('description', $activity->description) }}</textarea>
                </div>

                <div class="flex justify-end mt-8">
                    <button type="submit" class="bg-[#40916c] hover:bg-[#1a3a2a] text-white px-6 py-2.5 rounded-lg font-semibold transition-colors duration-200">
                        Perbarui Kegiatan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>