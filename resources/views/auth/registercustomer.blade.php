<x-guest-layout>
    <form method="POST" action="{{ route('registercustomer.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="Nama" :value="__('Nama')" />
            <x-text-input id="Nama" class="block mt-1 w-full" type="text" name="Nama" :value="old('Nama')" required autofocus autocomplete="Nama" />
            <x-input-error :messages="$errors->get('Nama')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="Email" :value="__('Email')" />
            <x-text-input id="Email" class="block mt-1 w-full" type="Email" name="Email" :value="old('Email')" required autocomplete="Email" />
            <x-input-error :messages="$errors->get('Email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="No_Tlp" :value="__('Nomor Telephone')" />
            <x-text-input id="No_Tlp" class="block mt-1 w-full" type="text" name="No_Tlp" :value="old('No_Tlp')" required autofocus autocomplete="No_Tlp" />
            <x-input-error :messages="$errors->get('No_Tlp')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="No_KTP" :value="__('Nomor KTP')" />
            <x-text-input id="No_KTP" class="block mt-1 w-full" type="text" name="No_KTP" :value="old('No_KTP')" required autofocus autocomplete="No_KTP" />
            <x-input-error :messages="$errors->get('No_KTP')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('logincustomer') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
