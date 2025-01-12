<x-app-layout>
    <x-slot:title>
        <x-super-nav>
                    <x-nav-link :href="route('laporan')" :active="request()->routeIs('laporan')">
                        {{'Laporan'}}    
                    </x-nav-link>
        </x-super-nav>
    </x-slot>
    <div class="py-8 h-full bg-fixed bg-cover p-8 space-y-8" style="background-color: #151419;">
            <h2 class="text-4xl font-bold text-white p-4">Data Laporan</h2>      
<!--<div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">-->
            <div class="p-4 sm:p-8 sm:rounded-2xl 0 shadow-2xl shadow-gray-800" style="background-color: #f56e0f;">
                <div class="w-full space-y-8">
                    <div></div>
                    <div class="w-full flex space-x-8">
                            <div class="flex-[4]"></div>
                            <a href="{{ route('laporan.create') }}" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">{{ __('Generate Laporan') }}</a>
                    </div>

                    <form class="w-full flex gap-4" role="search" method="GET" action="{{ route('laporan') }}">
                        @csrf
                        <!-- Search Input (flex-grow to take remaining space) -->
                        <input class="flex-grow rounded-md px-4 py-1 border-black/10 shadow shadow-xl " style="background-color: #f56e0f;" type="search" placeholder="Search" aria-label="Search" id="keywordlaporan" name="keywordlaporan">
                        
                        <!-- Year input for Laporan -->
                        <input class="flex-[0] rounded-md ps-4 py-1 bg-blue-700 text-white" id="PeriodeLaporan" name="PeriodeLaporan" type="number" min="1000" class="mt-1 block w-full text-white" placeholder="Tahun Periode Laporan" />
                        
                        <!-- Primary Button (flex-shrink to take minimal space) -->
                        <x-primary-button class="flex-shrink-0">{{ __('Cari') }}</x-primary-button>
                    </form>


                    <div class="flex-[4]">
                        <table class="table-auto w-full rounded-md text-gray-700">
                                <thead>
                                    <tr class="border-b border-b-2 border-amber-500">
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">Id Laporan</th>
                                        <th class="px-4 py-2">Periode Laporan</th>
                                        <th class="px-4 py-2">Tanggal Laporan</th>
                                        <th class="px-4 py-2">      </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($laporans as $laporan)
                                        <tr class="border-b border-red-800">
                                            <td class="px-4 py-3">{{ $loop->iteration }}</td> <!-- Nomor Otomatis -->   
                                            <td class="px-4 py-3">{{$laporan->id}}</td>
                                            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($laporan->Tgl_Laporan)->year }}</td>
                                            <td class="px-4 py-3">{{$laporan->created_at}}</td>

                                            
                                            <td class="flex px-4 py-3 space-x-2">
                                                <!-- Modal toggle -->
                                                <button data-modal-target="default-modal-{{ $laporan->id }}" data-modal-toggle="default-modal-{{ $laporan->id }}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                                                    Hapus
                                                </button>

                                                <!-- Main modal -->
                                                <div id="default-modal-{{ $laporan->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                    Apakah anda yakin ingin menghapus laporan ini?
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-{{ $laporan->id }}">
                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-4 md:p-5 space-y-4">
                                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                                    Saat anda menghapus data laporan ini, semua sumber daya dan data akan secara permanen dihapus!
                                                                </p>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" class="p-6">
                                                                @csrf
                                                                @method('delete')
                                                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="default-modal-{{ $laporan->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                                        Cancel
                                                                    </button>
                                                                    <x-danger-button class="ms-3">
                                                                        {{ __('Hapus') }}
                                                                    </x-danger-button>
                                                                </div>
                                                                
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <x-primary-link href="{{ route('laporan.edit', $laporan->id) }}">{{ __('Edit') }}</x-primary-link>
                                            </td>
                                        </tr>
                                    @endforeach                        
                                                           
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const currentYear = new Date().getFullYear();
                            const yearInput = document.getElementById('PeriodeLaporan');
                            
                            // Set the max and min dynamically
                            yearInput.setAttribute('max', currentYear);  // Set max to current year
                            yearInput.setAttribute('min', 1000);  // Set min to a reasonable year (e.g., 1000)
                            
                            // Set the default value to the current year
                            yearInput.value = currentYear;
                        });
</script>

    