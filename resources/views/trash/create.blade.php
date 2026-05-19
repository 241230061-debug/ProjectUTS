<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <h3 class="text-2xl font-bold mb-4 text-[#1a3a2a]">Form Buang Sampah</h3>

                @if ($errors->any())
                    <div class="mb-5 p-4 bg-red-50 border border-red-200 text-red-600 rounded-lg">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('trash.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block font-semibold text-[#1a3a2a] mb-1.5">Jenis Sampah</label>
                        <select name="trash_type" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]">
                            <option value="plastik">Plastik</option>
                            <option value="kertas">Kertas</option>
                            <option value="besi">Besi / Logam</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label class="block font-semibold text-[#1a3a2a] mb-1.5">Berat (KG)</label>
                        <input type="number" step="0.1" name="weight_kg" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                    </div>

                    <button type="submit" class="bg-[#40916c] hover:bg-[#1a3a2a] text-white px-6 py-2.5 rounded-lg font-semibold transition-colors duration-200 shadow-sm">
                        Setor Sampah
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>