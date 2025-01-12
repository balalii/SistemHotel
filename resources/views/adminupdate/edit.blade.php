<x-app-layout>
    <x-slot:title>
        <x-super-nav>
                    <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                        {{'Admin'}}    
                    </x-nav-link>
        </x-super-nav>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-8 h-full bg-fixed bg-cover" style="background-color: #151419;">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: #f56e0f;">
                <div class="max-w-xl">
                    @include('adminupdate.partials.update-profile-information-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
