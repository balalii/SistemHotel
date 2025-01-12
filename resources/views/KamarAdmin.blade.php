<x-app-layout2>
    <x-slot:title>
        <x-super-nav2>
                    <x-nav-link :href="route('kamar.Admin')" :active="request()->routeIs('kamar.Admin')">
                        {{'Kamar'}}    
                    </x-nav-link> 
        </x-super-nav2>
    </x-slot>
    <div class="py-8 h-full bg-fixed bg-cover p-8 space-y-8" style="background-color: #151419;">
            <h2 class="text-4xl font-bold text-white p-4">Data Kamar</h2>      
<!--<div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">-->
            <div class="p-4 sm:p-8 sm:rounded-2xl 0 shadow-2xl shadow-gray-800" style="background-color: #f56e0f;">
                <div class="w-full space-y-8">
                    <div class="mt-8"></div>
                    <div class="w-full flex justify-end">
                            <a href="#" class="bg-white mx-3 p-1 px-4 rounded-xl"><h1 class="text-2xl">+</h1></a>
                    </div>
                    <form class="w-full flex gap-4" role="search" method="GET" action="{{ route('kamar.Admin') }}">
                        @csrf
                        <input class="flex-grow rounded-md px-4 py-1 border-black/10 shadow shadow-xl " style="background-color: #f56e0f;"type="search" placeholder="Search" aria-label="Search" id="keywordkamar" name="keywordkamar">
                        <x-primary-button>{{ __('Cari') }}</x-primary-button>
                    </form>
                    <div class="flex-[4]">
                        <table class="table-auto w-full rounded-md text-gray-700">
                                <thead>
                                    <tr class="border-b border-b-2 border-amber-500">
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">Id Kamar</th>
                                        <th class="px-4 py-2">Jenid Kamar</th>
                                        <th class="px-4 py-2">Harga Permalam</th>
                                        <th class="px-4 py-2">      </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($kamar as $kamar)
                                        <tr class="border-b border-red-800">
                                            <td class="px-4 py-3">{{ $loop->iteration }}</td> <!-- Nomor Otomatis -->   
                                            <td class="px-4 py-3">{{$kamar->id}}</td>
                                            <td class="px-4 py-3">{{$kamar->jenis_kamar}}</td>
                                            <td class="px-4 py-3">{{$kamar->harga_permalam}}</td>
                                            
                                            <td class="flex px-4 py-3 space-x-2">
                                                <!-- Modal toggle -->
                                                <button data-modal-target="default-modal-{{ $kamar->id }}" data-modal-toggle="default-modal-{{ $kamar->id }}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                                                    Hapus
                                                </button>

                                                <!-- Main modal -->
                                                <div id="default-modal-{{ $kamar->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                    Apakah anda yakin ingin menghapus kamar ini?
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-{{ $kamar->id }}">
                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-4 md:p-5 space-y-4">
                                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                                    Saat anda menghapus data kamar ini, semua sumber daya dan data akan secara permanen dihapus!
                                                                </p>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <form action="{{ route('kamarAdmin.destroy', $kamar->id) }}" method="POST" class="p-6">
                                                                @csrf
                                                                @method('delete')
                                                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="default-modal-{{ $kamar->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
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
                                                <x-primary-link href="{{ route('kamarAdmin.edit', $kamar->id) }}">{{ __('Edit') }}</x-primary-link>
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
</x-app-layout2>


    