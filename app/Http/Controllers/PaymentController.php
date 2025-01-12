<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Http\Requests\PaymentUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $keyword = $request->input('keywordpayment'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $payments = payment::where('Metode_Pembayaran', 'like', '%' . $keyword . '%')
                            ->orWhere('Tgl_Pembayaran', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($payments->isEmpty()) {
                $payments = payment::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $payments = payment::all();
        }

        return view('Payment', compact('payments'));
    }

    public function index2(Request $request): View
    {
        $keyword = $request->input('keywordpayment'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $payments = payment::where('Metode_Pembayaran', 'like', '%' . $keyword . '%')
                            ->orWhere('Tgl_Pembayaran', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($payments->isEmpty()) {
                $payments = payment::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $payments = payment::all();
        }

        return view('PaymentAdmin', compact('payments'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $payment = payment::find($id);

        return view('paymentupdate.edit', [
            'payment' => $payment,
        ]);
    }

    public function edit2($id): View
    {
        $payment = payment::find($id);

        return view('paymentupdate.editAdmin', [
            'payment' => $payment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $payment = payment::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $payment->fill($request->validated());

        // Jika email berubah, reset verifikasi email
        //if ($payment->isDirty('email')) {
        //    $payment->email_verified_at = null;
        //}

        // Menyimpan perubahan
        $payment->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('payment.edit', $payment->id)->with('status', 'profile-updated');
    }

    public function update2(PaymentUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $payment = payment::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $payment->fill($request->validated());

        // Jika email berubah, reset verifikasi email
        //if ($payment->isDirty('email')) {
        //    $payment->email_verified_at = null;
        //}

        // Menyimpan perubahan
        $payment->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('paymentAdmin.edit', $payment->id)->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $payment = Payment::find($id);
    
        // Pastikan admin ditemukan
        if ($payment) {
            $payment->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('payment')->with('error', 'Payment not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('payment')->with('success', 'payment deleted successfully');
    }

    public function destroy2($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $payment = Payment::find($id);
    
        // Pastikan admin ditemukan
        if ($payment) {
            $payment->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('paymentAdmin')->with('error', 'Payment not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('paymentAdmin')->with('success', 'payment deleted successfully');
    }
}
