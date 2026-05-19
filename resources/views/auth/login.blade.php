<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-[#1a3a2a] font-semibold mb-1.5 block" />
            <x-text-input id="email" class="block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:bg-white focus:border-[#40916c] focus:ring-2 focus:ring-[#40916c] focus:ring-opacity-50 transition-all duration-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-[#1a3a2a] font-semibold mb-1.5 block" />
            <x-text-input id="password" class="block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:bg-white focus:border-[#40916c] focus:ring-2 focus:ring-[#40916c] focus:ring-opacity-50 transition-all duration-200"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-gray-300 text-[#40916c] shadow-sm focus:ring-[#40916c]" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-gray-500 hover:text-[#1a3a2a] transition-colors" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
            @endif
        </div>

        <div>
            <x-primary-button class="w-full justify-center px-6 py-3 bg-[#1a3a2a] hover:bg-[#40916c] focus:bg-[#40916c] active:bg-[#1a3a2a] rounded-lg transition-all duration-200 shadow-md font-bold text-white">
                {{ __('LOG IN') }}
            </x-primary-button>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 text-center text-sm text-gray-600">
            {{ __("Belum punya akun?") }}
            <a href="{{ route('register') }}" class="font-bold text-[#40916c] hover:text-[#1a3a2a] transition-colors">
                {{ __('Daftar Sekarang') }}
            </a>
        </div>
    </form>
</x-guest-layout>