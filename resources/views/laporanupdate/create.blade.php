<x-app-layout>
    <x-slot:title>
        <x-super-nav>
                    <x-nav-link :href="route('laporan')" :active="request()->routeIs('laporan')">
                        {{'Laporan'}}    
                    </x-nav-link>
        </x-super-nav>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>

    <div class="h-screen text-white p-8">
        <h2 class="text-4xl font-bold dark:text-white p-4">Laporan Baru</h2>
        
        <div class="flex space-x-4 p-4">
                    <div class="w-full max-w-sm p-4 bg-amber-100   rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-5xl font-extrabold tracking-tight">{{ $averageLamaMenginap }}</span>
                        </div>
                        <h5 class="mb-4 mt-4 text-xl font-medium text-gray-500 dark:text-gray-400">Rata-rata Lama menginap</h5>
                    </div>

                    <div class="w-full max-w-sm p-4 bg-amber-400   rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-5xl font-extrabold tracking-tight">{{ $kamarTerpesan }}</span>
                        </div>
                        <h5 class="mb-4 mt-4 text-xl font-medium text-gray-500 dark:text-gray-400">Kamar Terpesan</h5>
                    </div>

                    <div class="w-full max-w-sm p-4 bg-amber-200  rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-5xl font-extrabold tracking-tight">{{ $kamarTersedia }}</span>
                        </div>
                        <h5 class="mb-4 mt-4 text-xl font-medium text-gray-500 dark:text-gray-400">Kamar Tersedia</h5>
                    </div>

                    <div class="w-full max-w-sm p-4 bg-amber-500 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-5xl font-extrabold tracking-tight">{{ $jumlahPemesanan }}</span>
                        </div>
                        <h5 class="mb-4 mt-4 text-xl font-medium text-gray-500 dark:text-gray-400">Jumlah Pemesanan</h5>
                    </div>

                    <div class="w-full max-w-sm p-4 bg-amber-200  rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-5xl font-extrabold tracking-tight">{{ $totalPendapatan }}</span>
                        </div>
                        <h5 class="mb-4 mt-4 text-xl font-medium text-gray-500 dark:text-gray-400">Total Pendapatan</h5>
                    </div>
        </div>
        <form class="flex space-x-2 p-3" method="post" action="{{ route('laporan.store') }}" >
            @csrf

            <input type="hidden" name="avarage_lama_menginap" value="{{ $averageLamaMenginap }}">
            <input type="hidden" name="jml_pemesanan" value="{{ $jumlahPemesanan }}">
            <input type="hidden" name="jml_kamar_terpesan" value="{{ $kamarTerpesan }}">
            <input type="hidden" name="jml_kamar_tersedia" value="{{ $kamarTersedia }}">
            <input type="hidden" name="total_pendapatan" value="{{ $totalPendapatan }}">
            <input type="hidden" name="Tgl_Laporan" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
            
            <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Saved.') }}</p>
                @endif
            
        </form>
    
    </div>

    

</x-app-layout>
