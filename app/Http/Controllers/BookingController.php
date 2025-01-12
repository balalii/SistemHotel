<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        
        //dd($request->all());
        $booking = $request;
        return view('allcustomer.book.checkout', compact('booking'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View|JsonResponse
    {
        //dd($request->all());

        $request->validate([
            'id_customer' => ['required', 'integer'],
            'id_kamar' => ['required', 'integer'],
            'Tgl_masuk' => ['required', 'date'],
            'Tgl_keluar' => ['required', 'date'],
            'lama_menginap' => ['required', 'integer'],
            'jumlah_total' => ['required', 'numeric', 'min:0'],
            'Metode_Pembayaran' => ['required', 'string', 'max:255'],
        ]);

        $lastBooking = booking::orderBy('id_boking', 'desc')->first();
        $nextId = $lastBooking ? $lastBooking->id + 1 : 1;
        
        $Tgl_boking = date('Y-m-d');
        $Tgl_Pembayaran = date('Y-m-d');
        $inputMetode = $request->Metode_Pembayaran;

        $Metode_Pembayaran = match ($inputMetode) {
            'BRI' => 1,
            'BNI' => 2,
            'BCA' => 3,
            'Mandiri' => 4,
            default => null, // Nilai default jika tidak cocok
        };

        // Cek jika metode pembayaran tidak valid
        if ($Metode_Pembayaran === null) {
            return response()->json(['error' => 'Metode pembayaran tidak valid.'], 400);
        }

        $tanggalMasuk = $request->input('Tgl_masuk'); 
        $tanggalKeluar = $request->input('Tgl_keluar'); 

        if (!$tanggalMasuk || !$tanggalKeluar) {
            return response()->json(['error' => 'Tanggal masuk dan tanggal keluar wajib diisi.'], 400);
        }

        $startDate = Carbon::createFromFormat('Y-m-d', $tanggalMasuk);
        $endDate = Carbon::createFromFormat('Y-m-d', $tanggalKeluar);

        if ($startDate->gt($endDate)) {
            return response()->json(['error' => 'Tanggal masuk tidak boleh lebih besar dari tanggal keluar.'], 400);
        }
        
        // Iterasi untuk menghasilkan daftar tanggal
        while ($startDate->lte($endDate)) {
            booking::create([
                'id_boking' => $nextId,
                'id_customer' => $request->id_customer,
                'id_kamar' => $request->id_kamar,
                'Tgl_boking' => $Tgl_boking,
                'Tgl_masuk' => $request->Tgl_masuk,
                'Tgl_keluar' => $request->Tgl_keluar,
                'Tgl_Nginap' => $startDate->format('Y-m-d'),
                'lama_menginap' => $request->lama_menginap,
                'jumlah_total' => $request->jumlah_total,
                'Metode_Pembayaran' => $Metode_Pembayaran,

            ]);
            $startDate->addDay();
        }
        
        $payment = payment::create([
            'id_boking' => $nextId,
            'Tgl_Pembayaran' => $Tgl_Pembayaran,
            'Metode_Pembayaran' => $Metode_Pembayaran,
        ]);

        
        return view('allcustomer.book.success', compact('payment'));
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
