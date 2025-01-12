<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    
    <form method="post" action="{{ route('payment.update', $payment->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="id_boking" :value="__('ID Booking')" />
            <x-text-input id="id_boking" name="id_boking" type="number" class="mt-1 block w-full text-white" :value="old('id_boking', $payment->id_boking)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('id_boking')" />
        </div>
        <div>
            <x-input-label for="Tgl_Pembayaran" :value="__('Tgl Pembayaran')" />
            <x-text-input id="Tgl_Pembayaran" name="Tgl_Pembayaran" type="date" class="mt-1 block w-full text-white" :value="old('Tgl_Pembayaran', $payment->Tgl_Pembayaran)" required autofocus autocomplete="date" />
            <x-input-error class="mt-2" :messages="$errors->get('Tgl_Pembayaran')" />
        </div>
        <div>
            <x-input-label for="Metode_Pembayaran" :value="__('Metode Pembayaran')" />
            <x-text-input id="Metode_Pembayaran" name="Metode_Pembayaran" type="number" class="mt-1 block w-full text-white" :value="old('Metode_Pembayaran', $payment->Metode_Pembayaran)" required autofocus autocomplete="methode" />
            <x-input-error class="mt-2" :messages="$errors->get('Metode_Pembayaran')" />
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
