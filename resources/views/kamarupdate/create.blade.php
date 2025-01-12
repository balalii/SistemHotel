<x-app-layout>
    <x-slot:title>
        <x-super-nav>
                    <x-nav-link :href="route('kamar')" :active="request()->routeIs('kamar')">
                        {{'Kamar'}}    
                    </x-nav-link>
        </x-super-nav>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kamar') }}
        </h2>
    </x-slot>

    <div class="py-8 h-full bg-fixed bg-cover p-8 space-y-8" style="background-color: #151419;">
        <h2 class="text-4xl font-bold text-white p-4">Add Data Kamar</h2>
        
            <div class="p-4 sm:p-8 sm:rounded-2xl 0 shadow-2xl shadow-gray-800" style="background-color: #f56e0f;">
                <div class="max-w-xl">
                    @include('kamarupdate.partials.create-profile-information-form')
                </div>
            </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        </div>
    </div>
</x-app-layout>
