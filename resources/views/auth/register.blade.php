<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Full Name')" class="text-[#1a3a2a] font-semibold mb-1.5 block" />
            <x-text-input id="name" class="block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:bg-white focus:border-[#40916c] focus:ring-2 focus:ring-[#40916c] focus:ring-opacity-50 transition-all duration-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-[#1a3a2a] font-semibold mb-1.5 block" />
            <x-text-input id="email" class="block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:bg-white focus:border-[#40916c] focus:ring-2 focus:ring-[#40916c] focus:ring-opacity-50 transition-all duration-200" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-[#1a3a2a] font-semibold mb-1.5 block" />
            <x-text-input id="password" class="block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:bg-white focus:border-[#40916c] focus:ring-2 focus:ring-[#40916c] focus:ring-opacity-50 transition-all duration-200"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-[#1a3a2a] font-semibold mb-1.5 block" />
            <x-text-input id="password_confirmation" class="block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:bg-white focus:border-[#40916c] focus:ring-2 focus:ring-[#40916c] focus:ring-opacity-50 transition-all duration-200"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between pt-4">
            <a class="text-sm text-gray-500 hover:text-[#40916c] transition-colors" href="{{ route('login') }}">
                {{ __('Sudah Ada Akun?') }}
            </a>

            <x-primary-button class="px-8 py-3 bg-[#1a3a2a] hover:bg-[#40916c] focus:bg-[#40916c] active:bg-[#1a3a2a] focus:ring-2 focus:ring-[#40916c] focus:ring-offset-2 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>