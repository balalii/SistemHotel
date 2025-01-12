<section>
    <header>
        <h2 class="text-lg font-medium text-gray-700">
            {{ __('Menambahkan Data Kamar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700">
            {{ __("Menambahkan data kamar berupa id kamar, nama kamar, jenis kamar dan dll.") }}
        </p>
    </header>

    
    <form method="post" action="{{ route('kamar.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf

        <div>
            <x-input-label for="id_hotel" :value="__('ID Hotel')" />
            <x-text-input id="id_hotel" name="id_hotel" type="number" class="mt-1 block w-full text-white" :value="old('id_hotel')" required autofocus autocomplete="hotel" />
            <x-input-error class="mt-2" :messages="$errors->get('id_hotel')" />
        </div>

        <div>
            <x-input-label for="nama_kamar" :value="__('Nama Kamar')" />
            <x-text-input id="nama_kamar" name="nama_kamar" type="text" class="mt-1 block w-full text-white" :value="old('nama_kamar')" required autofocus autocomplete="nama_kamar" />
            <x-input-error class="mt-2" :messages="$errors->get('nama_kamar')" />
        </div>

        <div>
            <x-input-label for="jenis_kamar" :value="__('Jenis Kamar')" />
            <x-text-input id="jenis_kamar" name="jenis_kamar" type="text" class="mt-1 block w-full text-white" :value="old('jenis_kamar')" required autofocus autocomplete="kamar" />
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kamar')" />
        </div>

        <div>
            <x-input-label for="ukuran_kamar" :value="__('Ukuran Kamar')" />
            <x-text-input id="ukuran_kamar" name="ukuran_kamar" type="text" class="mt-1 block w-full text-white" :value="old('ukuran_kamar')" required autofocus autocomplete="ukuran_kamar" />
            <x-input-error class="mt-2" :messages="$errors->get('ukuran_kamar')" />
        </div>
    
        <div>
            <x-input-label for="harga_permalam" :value="__('Harga Per Malam')" />
            <x-text-input id="harga_permalam" name="harga_permalam" type="number" class="mt-1 block w-full text-white" :value="old('harga_permalam')" required autofocus autocomplete="harga_permalam" />
            <x-input-error class="mt-2" :messages="$errors->get('harga_permalam')" />
        </div>
        
        <div>
            <x-input-label for="jumlah_bedroom" :value="__('Jumlah Bedroom')" />
            <x-text-input id="jumlah_bedroom" name="jumlah_bedroom" type="number" class="mt-1 block w-full text-white" :value="old('jumlah_bedroom')" required autofocus autocomplete="jumlah_bedroom" />
            <x-input-error class="mt-2" :messages="$errors->get('jumlah_bedroom')" />
        </div>

        <div>
            <x-input-label for="ratings" :value="__('ratings')" />
            <x-text-input id="ratings" name="ratings" type="number" class="mt-1 block w-full text-white" :value="old('ratings')" required autofocus autocomplete="ratings" />
            <x-input-error class="mt-2" :messages="$errors->get('ratings')" />
        </div>
        
        <div>
            <x-input-label for="status_ketersediaan" :value="__('Status Ketersediaan')" />
            <x-text-input id="status_ketersediaan" name="status_ketersediaan" type="number" class="mt-1 block w-full text-white" :value="old('status_ketersediaan')" required autofocus autocomplete="sedia" />
            <x-input-error class="mt-2" :messages="$errors->get('status_ketersediaan')" />
        </div>

        <div>
            <x-input-label for="AC" :value="__('AC')" />
            <x-text-input id="AC" name="AC" type="number" class="mt-1 block w-full text-white" :value="old('AC')" required autofocus autocomplete="AC" />
            <x-input-error class="mt-2" :messages="$errors->get('AC')" />
        </div>

        <div>
            <x-input-label for="Wifi" :value="__('Wifi')" />
            <x-text-input id="Wifi" name="Wifi" type="number" class="mt-1 block w-full text-white" :value="old('Wifi')" required autofocus autocomplete="Wifi" />
            <x-input-error class="mt-2" :messages="$errors->get('Wifi')" />
        </div>

        <div>
            <x-input-label for="Android_Tv" :value="__('Android Tv')" />
            <x-text-input id="Android_Tv" name="Android_Tv" type="number" class="mt-1 block w-full text-white" :value="old('Android_Tv')" required autofocus autocomplete="Android_Tv" />
            <x-input-error class="mt-2" :messages="$errors->get('Android_Tv')" />
        </div>

        <div>
            <x-input-label for="Karaoke" :value="__('Karaoke')" />
            <x-text-input id="Karaoke" name="Karaoke" type="number" class="mt-1 block w-full text-white" :value="old('Karaoke')" required autofocus autocomplete="Karaoke" />
            <x-input-error class="mt-2" :messages="$errors->get('Karaoke')" />
        </div>

        <div>
            <x-input-label for="Trademill" :value="__('Trademill')" />
            <x-text-input id="Trademill" name="Trademill" type="number" class="mt-1 block w-full text-white" :value="old('Trademill')" required autofocus autocomplete="Trademill" />
            <x-input-error class="mt-2" :messages="$errors->get('Trademill')" />
        </div>

        <div>
                               <label for="media" class="block">Upload Media (Optional)</label>
                               <input type="file" name="media" id="media" accept="image/,video/">
                                @error('media')
                                    <div class="mt-2 text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
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
