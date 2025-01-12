<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    
    <form method="post" action="{{ route('laporanAdmin.update', $laporan->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="id_kamar" :value="__('ID Kamar')" />
            <x-text-input id="id_kamar" name="id_kamar" type="number" class="mt-1 block w-full text-white" :value="old('id_kamar', $laporan->id_kamar)" required autofocus autocomplete="id_kamar" />
            <x-input-error class="mt-2" :messages="$errors->get('id_kamar')" />
        </div>

        <div>
            <x-input-label for="id_payment" :value="__('ID Payment')" />
            <x-text-input id="id_payment" name="id_payment" type="number" class="mt-1 block w-full text-white" :value="old('id_payment', $laporan->id_payment)" required autofocus autocomplete="id_payment" />
            <x-input-error class="mt-2" :messages="$errors->get('id_payment')" />
        </div>

        <div>
            <x-input-label for="id_boking" :value="__('ID Booking')" />
            <x-text-input id="id_boking" name="id_boking" type="number" class="mt-1 block w-full text-white" :value="old('id_boking', $laporan->id_boking)" required autofocus autocomplete="id_boking" />
            <x-input-error class="mt-2" :messages="$errors->get('id_boking')" />
        </div>

        <div>
            <x-input-label for="average_lama_menginap" :value="__('Average Lama Menginap')" />
            <x-text-input id="average_lama_menginap" name="average_lama_menginap" type="number" step="0.1" class="mt-1 block w-full text-white" :value="old('average_lama_menginap', $laporan->average_lama_menginap)" required autofocus autocomplete="average_lama_menginap" />
            <x-input-error class="mt-2" :messages="$errors->get('average_lama_menginap')" />
        </div>

        <div>
            <x-input-label for="jml_kamar_terpesan" :value="__('Jumlah Kamar Terpesan')" />
            <x-text-input id="jml_kamar_terpesan" name="jml_kamar_terpesan" type="number" class="mt-1 block w-full text-white" :value="old('jml_kamar_terpesan', $laporan->jml_kamar_terpesan)" required autofocus autocomplete="jml_kamar_terpesan" />
            <x-input-error class="mt-2" :messages="$errors->get('jml_kamar_terpesan')" />
        </div>

        <div>
            <x-input-label for="jml_pemesanan" :value="__('Jumlah Pemesanan')" />
            <x-text-input id="jml_pemesanan" name="jml_pemesanan" type="number" class="mt-1 block w-full text-white" :value="old('jml_pemesanan', $laporan->jml_pemesanan)" required autofocus autocomplete="jml_pemesanan" />
            <x-input-error class="mt-2" :messages="$errors->get('jml_pemesanan')" />
        </div>

        <div>
            <x-input-label for="jml_kamar_tersedia" :value="__('Jumlah Kamar Tersedia')" />
            <x-text-input id="jml_kamar_tersedia" name="jml_kamar_tersedia" type="number" class="mt-1 block w-full text-white" :value="old('jml_kamar_tersedia', $laporan->jml_kamar_tersedia)" required autofocus autocomplete="jml_kamar_tersedia" />
            <x-input-error class="mt-2" :messages="$errors->get('jml_kamar_tersedia')" />
        </div>

        <div>
            <x-input-label for="total_pendapatan" :value="__('Total Pendapatan')" />
            <x-text-input id="total_pendapatan" name="total_pendapatan" type="number" step="0.01" class="mt-1 block w-full text-white" :value="old('total_pendapatan', $laporan->total_pendapatan)" required autofocus autocomplete="total_pendapatan" />
            <x-input-error class="mt-2" :messages="$errors->get('total_pendapatan')" />
        </div>

        <div>
            <x-input-label for="Tgl_Laporan" :value="__('Tanggal Laporan')" />
            <x-text-input id="Tgl_Laporan" name="Tgl_Laporan" type="date" class="mt-1 block w-full text-white" :value="old('Tgl_Laporan', $laporan->Tgl_Laporan)" required autofocus autocomplete="Tgl_Laporan" />
            <x-input-error class="mt-2" :messages="$errors->get('Tgl_Laporan')" />
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
