<x-hotel-book>
    <x-slot:title>
        <x-super-nav3>
                    <h1 class="text-4xl font-black px-3 font-serif content-center" style="color: #1b1b1b;" ><strong>AG</strong></h1>
        </x-super-nav3>
    </x-slot>
    <div class="p-8 h-full bg-fixed bg-cover" style="background-color: #151419;">
            
            <div class="p-8">
                <div class="grid grid-cols-2 gap-8 p-8 rounded-2xl" >
                    
                    <div class="rounded-2xl" style="background-color: #262626;">
                        <div class="p-8 content-start">
                            <div>
                                <img class="h-auto rounded-lg" src="{{ asset('storage/' . $kamar->media_path) }}" alt="">
                            </div>
                            
                        </div>

                        <div class="p-8 space-y-8">
                                <h1 class="text-5xl font-bold text-white">{{$kamar->nama_kamar}}</h1>
                                    <div class="flex items-center mt-2.5 mb-5">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                        </div>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                                    </div>
                        </div>
                        
                    </div>
                    

                    <div class="space-y-8 rounded-2xl p-8">
                        
                        <dl class="w-full text-white divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Nomor Kamar</dt>
                                <dd class="text-lg font-semibold">{{$kamar->id}}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Tiper Kamar</dt>
                                <dd class="text-lg font-semibold">{{$kamar->jenis_kamar}}</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Ukuran Kamar</dt>
                                <dd class="text-lg font-semibold">{{$kamar->ukuran_kamar}}</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Harga Permalam</dt>
                                <dd class="text-lg font-semibold">Rp {{$kamar->harga_permalam}}</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-300 md:text-lg dark:text-gray-400">Status Ketersediaan</dt>
                                <dd class="text-lg font-semibold">
                                    Silahkan cek pada tanggal check in dan check out
                                </dd>
                            </div>

                        </dl>
                        

                        <!--card-->
                        <div class="grid grid-cols-2">

                            <div>
                                <h2 class="mb-2 text-lg font-semibold text-gray-300 dark:text-white">Fasilitas</h2>
                                <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 {{ $kamar->AC == 1 ? 'text-green-500 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }} flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                        </svg>
                                        <span class="{{ $kamar->AC == 1 ? 'text-white' : 'text-gray-500' }}">AC</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 {{ $kamar->Wifi == 1 ? 'text-green-500 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }} flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                        </svg>
                                        <span class="{{ $kamar->Wifi == 1 ? 'text-white' : 'text-gray-500' }}">WI-FI</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 {{ $kamar->{'Android Tv'} == 1 ? 'text-green-500 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }} flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                        </svg>
                                        <span class="{{ $kamar->{'Android Tv'} == 1 ? 'text-white' : 'text-gray-500' }}">Android TV</span>

                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 {{ $kamar->Karaoke == 1 ? 'text-green-500 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }} flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                        </svg>
                                        <span class="{{ $kamar->Karaoke == 1 ? 'text-white' : 'text-gray-500' }}">Karaoke</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-3.5 h-3.5 me-2 {{ $kamar->Trademill == 1 ? 'text-green-500 dark:text-green-400' : 'text-gray-500 dark:text-gray-400' }} flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                        </svg>
                                        <span class="{{ $kamar->Trademill == 1 ? 'text-white' : 'text-gray-500' }}">Trademill</span>
                                    </li>
                                </ul>


                            </div>
                            <form method="post" action="{{ route('globalbook.checkout') }}" class="w-full p-8 max-w-sm rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700" style="background-color: #878787;">
                                @csrf
                                            
                                <div class="text-xl font-semibold text-gray-200" id="hargapermalam">{{$kamar->harga_permalam}}<span class="text-sm font-normal">/ night</span></div>
                                <input type="hidden" name="id_customer" value="{{ auth('customer')->id(); }}">
                                <input type="hidden" name="id_kamar" value="{{ $kamar->id }}">
                                <input type="hidden" name="nama_kamar" value="{{ $kamar->nama_kamar }}">
                                <input type="hidden" name="harga_permalam" value="{{ $kamar->harga_permalam }}">
                                <input type="hidden" name="gambar_kamar" value="{{ $kamar->media_path }}">
                                <div class="mt-4 border bg-white shadow shadow-xl shadow-balck rounded-md p-3">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <label class="block text-sm text-gray-600">CHECK-IN</label>
                                            <input type="date" id="checkin-input" name="Tgl_masuk" class="font-medium text-gray-900 border-none rounded-md p-0 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        </div>
                                        <div>
                                            <label class="block text-sm text-gray-600">CHECKOUT</label>
                                            <input type="date" id="checkout-input" name="Tgl_keluar" class="font-medium text-gray-900 border-none rounded-md p-0 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        </div>
                                    </div>

                                        <script>
                                            let differenceInDays = 0; // Variabel untuk menyimpan selisih hari
                                            const tanggalTidakTersedia = @json($bookings);

                                            const inputTanggal = document.getElementById('checkin-input');
                                            const inputTanggalcheckout = document.getElementById('checkout-input');

                                            // Fungsi untuk menonaktifkan tanggal-tanggal tertentu
                                            inputTanggal.addEventListener('input', function () {
                                                const tanggalDipilih = inputTanggal.value;

                                                // Jika tanggal yang dipilih ada dalam daftar yang tidak diperbolehkan
                                                if (tanggalTidakTersedia.includes(tanggalDipilih)) {
                                                    alert("Tanggal ini tidak tersedia. Silakan pilih tanggal lain.");
                                                    inputTanggal.value = ''; // Reset nilai input
                                                }
                                            });

                                            inputTanggalcheckout.addEventListener('input', function () {
                                                const tanggalDipilih = inputTanggalcheckout.value;

                                                // Jika tanggal yang dipilih ada dalam daftar yang tidak diperbolehkan
                                                if (tanggalTidakTersedia.includes(tanggalDipilih)) {
                                                    alert("Tanggal ini tidak tersedia. Silakan pilih tanggal lain.");
                                                    inputTanggalcheckout.value = ''; // Reset nilai input
                                                }
                                            });

                                            // Fungsi untuk menghitung selisih hari
                                            function calculateDifference() {
                                                const checkinDate = new Date(document.getElementById('checkin-input').value);
                                                const checkoutDate = new Date(document.getElementById('checkout-input').value);

                                                // Pastikan kedua input sudah memiliki nilai dan valid
                                                if (checkinDate && checkoutDate) {
                                                    if (checkoutDate <= checkinDate) {
                                                        alert("Tanggal check-out tidak boleh lebih awal atau sama dengan tanggal check-in.");
                                                        differenceInDays = 0; // Reset jika tidak valid
                                                    } else {
                                                        const differenceInMilliseconds = checkoutDate - checkinDate;
                                                        differenceInDays = differenceInMilliseconds / (1000 * 60 * 60 * 24); // Konversi ke hari
                                                    }
                                                } else {
                                                    differenceInDays = 0; // Reset jika tidak valid
                                                }

                                                document.getElementById('lama_menginap').value = differenceInDays;

                                                updateBeforeCleaningFee(); // Perbarui total sebelum biaya kebersihan
                                                updateTotal(); // Perbarui total keseluruhan
                                            }

                                            // Fungsi untuk mengupdate total sebelum biaya kebersihan
                                            function updateBeforeCleaningFee() {
                                                const hargapermalam = parseFloat(document.getElementById('hargapermalam').textContent.replace('Rp', '').replace(',', '').trim());
                                                const totalBeforeCleaning = hargapermalam * differenceInDays;

                                                // Menampilkan total sebelum biaya kebersihan dengan format mata uang
                                                document.getElementById('before-cleaning-fee').textContent = `Rp ${totalBeforeCleaning.toLocaleString('id-ID')}`;
                                            }

                                            // Fungsi untuk mengupdate total setelah biaya kebersihan
                                            function updateTotal() {
                                                const hargapermalam = parseFloat(document.getElementById('hargapermalam').textContent.replace('Rp', '').replace(',', '').trim());
                                                const biayakebersihan = parseFloat(document.getElementById('biayakebersihan').textContent.trim() || '0');
                                                const total = hargapermalam * differenceInDays + biayakebersihan;
                                                const totalValue = hargapermalam * differenceInDays + biayakebersihan;

                                                // Menampilkan total dengan format mata uang
                                                document.getElementById('total').textContent = `Rp ${total.toLocaleString('id-ID')}`;
                                                document.getElementById('jumlah_total').value = totalValue;
                                                document.getElementById('biaya_kebersihan').value = biayakebersihan;
                                            }

                                            // Tambahkan event listener untuk input tanggal
                                            document.getElementById('checkin-input').addEventListener('change', calculateDifference);
                                            document.getElementById('checkout-input').addEventListener('change', calculateDifference);
                                        </script>

                                    <div class="mt-2">
                                        <label class="block text-sm text-gray-600">GUESTS</label>
                                        <select name="jumlah_tamu" class="w-full px-3 py-2 border rounded-md text-gray-900 focus:outline-none focus:ring-1 focus:ring-pink-500">
                                            <option>1 guest</option>
                                            <option>2 guests</option>
                                            <option>3 guests</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" id="lama_menginap" name="lama_menginap">
                                <input type="hidden" id="jumlah_total" name="jumlah_total">
                                <input type="hidden" id="biaya_kebersihan" name="biaya_kebersihan">
                                <button class="w-full mt-4 px-4 py-2 text-white bg-pink-500 rounded-lg hover:bg-pink-600">
                                    Reserve
                                </button>
                                <p class="mt-2 text-sm text-center text-gray-300">You won't be charged yet</p>
                                <div class="mt-4 text-gray-200">
                                    <div class="flex justify-between">
                                        <span>Total Before Cleaning Fee</span>
                                        <span id="before-cleaning-fee">Rp 0</span>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <span>Cleaning fee</span>
                                        <span id="biayakebersihan">2</span>
                                    </div>
                                </div>
                                <div class="mt-4 border-t pt-4 text-lg font-medium text-gray-200 flex justify-between">
                                    <span>Total before taxes</span>
                                    <span id="total">Rp 0</span>
                                </div>
                            </form>


                        

                    </div>
                </div>    
                
            </div>

            
    </div>


    

</x-hotel-book>