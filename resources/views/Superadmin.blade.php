<x-app-layout>
<div class="py-12 h-dvh">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-amber-900 sm:rounded-lg 0 shadow-2xl shadow-gray-800">
                <div class="w-full space-y-8">
                    <div>
                        <h1 class="text-2xl text-white"><strong>Data Super Admin</strong></h1>
                    </div>
                    <div class="w-full flex space-x-8">
                            <div class="flex-[4]"></div>
                            <x-primary-button>{{ __('Tambah Admin') }}</x-primary-button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                                </ul>
                            </div>
                    </div>

                    <form class="w-full flex gap-4" role="search">
                            <input class="flex-[4] rounded-md px-4 py-1" type="search" placeholder="Search" aria-label="Search">
                            <x-primary-button>{{ __('Cari') }}</x-primary-button>
                    </form>
                    <div class="flex-[4]">
                        <table class="table-auto w-full rounded-md text-white">
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
                                                                
                                        <tr class="border-b border-amber-500">
                                            <td class="px-4 py-3">1</td>
                                            <td class="px-4 py-3">4234</td>
                                            <td class="px-4 py-3">hdgauwdaw</td>
                                            <td class="px-4 py-3">4234224</td>
                                            <td class="px-4 py-3"><x-primary-button>{{ __('Hapus') }}</x-primary-button><x-primary-button>{{ __('Edit') }}</x-primary-button></td>
                                        </tr>
                                        <tr class="border-b border-amber-500">
                                            <td class="px-4 py-3">1</td>
                                            <td class="px-4 py-3">4234</td>
                                            <td class="px-4 py-3">hdgauwdaw</td>
                                            <td class="px-4 py-3">4234224</td>
                                            <td class="px-4 py-3"><x-primary-button>{{ __('Hapus') }}</x-primary-button><x-primary-button>{{ __('Edit') }}</x-primary-button></td>
                                        </tr>
                                        <tr class="border-b border-amber-500">
                                            <td class="px-4 py-3">1</td>
                                            <td class="px-4 py-3">4234</td>
                                            <td class="px-4 py-3">hdgauwdaw</td>
                                            <td class="px-4 py-3">4234224</td>
                                            <td class="px-4 py-3"><x-primary-button>{{ __('Hapus') }}</x-primary-button><x-primary-button>{{ __('Edit') }}</x-primary-button></td>
                                        </tr>
                                        <tr class="border-b border-amber-500">
                                            <td class="px-4 py-3">1</td>
                                            <td class="px-4 py-3">4234</td>
                                            <td class="px-4 py-3">hdgauwdaw</td>
                                            <td class="px-4 py-3">4234224</td>
                                            <td class="px-4 py-3"><x-primary-button>{{ __('Hapus') }}</x-primary-button><x-primary-button>{{ __('Edit') }}</x-primary-button></td>
                                        </tr>
                                        <tr class="border-b border-amber-500">
                                            <td class="px-4 py-3">1</td>
                                            <td class="px-4 py-3">4234</td>
                                            <td class="px-4 py-3">hdgauwdaw</td>
                                            <td class="px-4 py-3">4234224</td>
                                            <td class="px-4 py-3"><x-primary-button>{{ __('Hapus') }}</x-primary-button><x-primary-button>{{ __('Edit') }}</x-primary-button></td>
                                        </tr>
                                                           
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


    