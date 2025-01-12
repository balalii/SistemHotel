<x-hotel-book>
    <x-slot:title>
        <x-super-nav3>
                    <h1 class="text-4xl font-black px-3 font-serif content-center" style="color: #1b1b1b;" ><strong>AG</strong></h1>
        </x-super-nav3>
    </x-slot:title>

    <div class="p-8 h-full bg-fixed bg-cover" style="background-color: #151419;">
        

        <div class="justify-self-center p-8 rounded-2xl my-24 text-white" style="background-color: #262626;">
                
                <div class="border-b border-black p-8">
                    <h1 class="justify-self-center">Transaksi Berhasil !</h1>
                    <p class="justify-self-center">Pembayaran berhasil dilakukan</p>
                </div>
                
                <div class="grid grid-cols-2 p-8">
                    <div class=" p-4">
                        <span>Id Booking</span>
                    </div>
                    <div class="flex justify-end p-4">
                        <p>{{$payment->id_boking}}</p>
                    </div>
                    <div class="p-4">
                        <span>Metode Pembayaran</span>
                    </div>
                    <div class="flex justify-end p-4">
                        <p>{{$payment->Metode_Pembayaran}}</p>
                    </div>
                    <div class="p-4">
                        <span>Waktu Pembayaran</span>
                    </div>
                    <div class="flex justify-end p-4">
                        <p>{{$payment->Tgl_Pembayaran}}</p>
                    </div>
                </div>
        </div>
        
    </div>

</x-hotel-book>