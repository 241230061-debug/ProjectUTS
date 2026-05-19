<x-admin-layout>
    <div class="max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-[#1a3a2a]">Edit Data User</h2>
                <p class="text-gray-600">Ubah informasi akun milik {{ $user->name }}.</p>
            </div>
            <a href="/admin/users" class="text-[#40916c] hover:underline text-sm font-medium">&larr; Kembali</a>
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
            <form action="/admin/users/{{ $user->id }}" method="POST">
                @csrf
                @method('PUT') <div class="mb-4">
                    <label class="block font-semibold text-[#1a3a2a] mb-1.5">Nama Pengguna</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                </div>

                <div class="mb-4">
                    <label class="block font-semibold text-[#1a3a2a] mb-1.5">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                </div>

                <div class="mb-4 grid grid-cols-2 gap-4">
                    <div>
                        <label class="block font-semibold text-[#1a3a2a] mb-1.5">Peran (Role)</label>
                        <select name="role" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User Biasa</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-semibold text-[#1a3a2a] mb-1.5">Total Poin</label>
                        <input type="number" name="points" value="{{ old('points', $user->points) }}" class="w-full border-gray-300 rounded-lg focus:ring-[#40916c] focus:border-[#40916c]" required>
                    </div>
                </div>

                <div class="flex justify-end mt-8">
                    <button type="submit" class="bg-[#40916c] hover:bg-[#1a3a2a] text-white px-6 py-2.5 rounded-lg font-semibold transition-colors duration-200">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>