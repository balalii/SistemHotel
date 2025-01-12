<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    
    <form method="post" action="{{ route('kamar.update', $kamar->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="id_hotel" :value="__('ID Hotel')" />
            <x-text-input id="id_hotel" name="id_hotel" type="number" class="mt-1 block w-full text-white" :value="old('id_hotel', $kamar->id_hotel)" required autofocus autocomplete="hotel" />
            <x-input-error class="mt-2" :messages="$errors->get('id_hotel')" />
        </div>

        <div>
            <x-input-label for="jenis_kamar" :value="__('Jenis Kamar')" />
            <x-text-input id="jenis_kamar" name="jenis_kamar" type="text" class="mt-1 block w-full text-white" :value="old('jenis_kamar', $kamar->jenis_kamar)" required autofocus autocomplete="kamar" />
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kamar')" />
        </div>

        <div>
            <x-input-label for="status_ketersediaan" :value="__('Status Ketersediaan')" />
            <x-text-input id="status_ketersediaan" name="status_ketersediaan" type="number" class="mt-1 block w-full text-white" :value="old('status_ketersediaan', $kamar->status_ketersediaan)" required autofocus autocomplete="sedia" />
            <x-input-error class="mt-2" :messages="$errors->get('status_ketersediaan')" />
        </div>

        <div>
            <x-input-label for="harga_permalam" :value="__('Harga Permalam')" />
            <x-text-input id="harga_permalam" name="harga_permalam" type="number" class="mt-1 block w-full text-white" :value="old('harga_permalam', $kamar->harga_permalam)" required autofocus autocomplete="harga" />
            <x-input-error class="mt-2" :messages="$errors->get('harga_permalam')" />
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
