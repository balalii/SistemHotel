<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Requests\CustomerUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request): View
    {
        $keyword = $request->input('keywordcustomer'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $customers = customer::where('Nama', 'like', '%' . $keyword . '%')
                            ->orWhere('Email', 'like', '%' . $keyword . '%')
                            ->orWhere('No_Tlp', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($customers->isEmpty()) {
                $customers = customer::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $customers = customer::all();
        }

        return view('customer', compact('customers'));
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
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $customer = customer::find($id);

        return view('customerupdate.edit', [
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $customer = customer::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $customer->fill($request->validated());

        // Jika email berubah, reset verifikasi email
        if ($customer->isDirty('email')) {
            $customer->email_verified_at = null;
        }

        // Menyimpan perubahan
        $customer->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('customer.edit', $customer->id)->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $customer = customer::find($id);
    
        // Pastikan admin ditemukan
        if ($customer) {
            $customer->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('customer')->with('error', 'customer not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('customer')->with('success', 'Admin deleted successfully');
    }
}
