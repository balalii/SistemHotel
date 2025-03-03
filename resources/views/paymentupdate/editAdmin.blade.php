<x-app-layout2>
    <x-slot:title>
        <x-super-nav2>
                    <x-nav-link :href="route('payment.Admin')" :active="request()->routeIs('payment.Admin')">
                        {{'Payment'}}    
                    </x-nav-link>
        </x-super-nav2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>
    
    <div class="py-8 h-full bg-fixed bg-cover" style="background-color: #151419;">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: #f56e0f;">
                <div class="max-w-xl">
                    @include('paymentupdate.partials.update2-profile-information-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout2>
