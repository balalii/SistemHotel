<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    
    <form method="post" action="{{ route('customer.update', $customer->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="Nama" :value="__('Name')" />
            <x-text-input id="Nama" name="Nama" type="text" class="mt-1 block w-full text-white" :value="old('name', $customer->Nama)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="No_Tlp" :value="__('Nomor Telephone')" />
            <x-text-input id="No_Tlp" name="No_Tlp" type="text" class="mt-1 block w-full text-white" :value="old('nomor', $customer->No_Tlp)" required autofocus autocomplete="nomor" />
            <x-input-error class="mt-2" :messages="$errors->get('nomor')" />
        </div>

        <div>
            <x-input-label for="No_KTP" :value="__('NIK')" />
            <x-text-input id="No_KTP" name="No_KTP" type="text" class="mt-1 block w-full text-white" :value="old('nomor2', $customer->No_KTP)" required autofocus autocomplete="nomor2" />
            <x-input-error class="mt-2" :messages="$errors->get('nomor2')" />
        </div>

        <div>
            <x-input-label for="Email" :value="__('Email')" />
            <x-text-input id="Email" name="Email" type="email" class="mt-1 block w-full text-white" :value="old('email', $customer->Email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($customer instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $customer->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <!--@if (session('status') === 'profile-updated')-->
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            <!--@endif-->
        </div>
    </form>
</section>
