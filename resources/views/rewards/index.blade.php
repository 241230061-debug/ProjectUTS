<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">{{ session('error') }}</div>
            @endif

            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Tukar Poin (Poin Kamu: {{ Auth::user()->points }})</h3>
                
                <div class="grid grid-cols-2 gap-4">
                    @foreach($rewards as $reward)
                    <div class="border p-4 rounded shadow-sm">
                        <h4 class="font-bold text-lg">{{ $reward->name }}</h4>
                        <p class="text-gray-600 mb-4">{{ $reward->points_required }} Poin</p>
                        <form action="{{ route('rewards.redeem', $reward->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded w-full">Tukar</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>