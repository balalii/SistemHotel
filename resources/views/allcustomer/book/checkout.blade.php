<x-hotel-book>
    <x-slot:title>
        <x-super-nav3>
                    <h1 class="text-4xl font-black px-3 font-serif content-center" style="color: #1b1b1b;" ><strong>AG</strong></h1>
        </x-super-nav3>
    </x-slot>
    <div class="p-8 h-full bg-fixed bg-cover" style="background-color: #151419;">
            
            <div class="p-8  justify-item-center space-y-8 my-24">


                <form method="post" action="{{ route('globalbook.pay') }}" class="max-w-8xl grid grid-cols-2 gap-8 p-8  justify-self-center rounded-xl" style="background-color: #262626;"  >
                    @csrf    
                    <input type="hidden" name="id_customer" value="{{ auth('customer')->id() }}">
                    <input type="hidden" name="id_kamar" value="{{ $booking->id_kamar }}">
                    <input type="hidden" name="Tgl_masuk" value="{{ $booking->Tgl_masuk }}">
                    <input type="hidden" name="Tgl_keluar" value="{{ $booking->Tgl_keluar }}">
                    <input type="hidden" name="lama_menginap" value="{{ $booking->lama_menginap }}">
                    <input type="hidden" name="jumlah_total" value="{{ $booking->jumlah_total }}">

                    <div class="space-y-8 p-8 rounded-2xl">
                        <div class="flex">
                            <h2 class="text-4xl font-bold text-white">Request To Book</h2>
                        </div>        
                        <dl class="w-full text-white divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Nomor Kamar</dt>
                                <dd class="text-lg font-semibold">{{$booking->id_kamar}}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Dates</dt>
                                <dd class="text-lg font-semibold">{{$booking->Tgl_masuk}} - {{$booking->Tgl_keluar}}</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Jumlah Tamu</dt>
                                <dd class="text-lg font-semibold">{{$booking->jumlah_tamu}}</dd>
                            </div>
                        </dl>

                        
                        <div class="max-w-sm">
                            <label for="bank" class="block mb-2 text-lg font-medium text-gray-200 dark:text-white">Metode Pembayaran</label>
                            <select id="bank" name="Metode_Pembayaran"  class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="BRI" selected>BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="BCA">BCA</option>
                                <option value="Mandiri">Mandiri</option>
                            </select>
                        </div>

                        

                    </div>

                    <div class=" ">
                        <!--card-->
                        <div class="flex h-full justify-center">
                            <div class="w-full p-8 max-w-sm rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700" style="background-color: #878787;">
                                
                                <div class="grid grid-cols-2 space-x-2 border-b border-white pb-8">
                                    <div >
                                        <img class="rounded-2xl" src="{{ URL::asset('storage/' . $booking->gambar_kamar) }}" alt="product image" />
                                    </div>

                                    <div class="h-full text-white flex items-center">
                                        <p class="text-center">{{$booking->nama_kamar}}</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="px-5 py-5 text-white mt-4">
                                    <h1 class="border-b border-white pb-2"><strong>Price Details</strong></h1>
                                    <div class="grid grid-cols-2 py-8">
                                        <div>
                                            biaya kamar:
                                        </div>
                                        <div>
                                            Rp.{{$booking->harga_permalam}}x{{$booking->lama_menginap}}
                                        </div>
                                        <div>
                                            biaya kebersihan:
                                        </div>
                                        <div>
                                            Rp.{{$booking->biaya_kebersihan}}
                                        </div>
                                    </div>
                                    <h1 class="border-b border-white pb-2"><strong>Total</strong></h1>
                                    <div class="flex items-center justify-between mt-6">
                                        <span class="text-3xl font-bold text-white dark:text-white">Rp.{{$booking->jumlah_total}}</span>
                                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">bayar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>    
                
            </div>

            
    </div>
</x-hotel-book>