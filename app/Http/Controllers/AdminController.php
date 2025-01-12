<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Requests\AdminUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
    */

    public function index(Request $request): View
    {
        $keyword = $request->input('keywordadmin'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $admins = Admin::where('Nama', 'like', '%' . $keyword . '%')
                            ->orWhere('Email', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($admins->isEmpty()) {
                $admins = Admin::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $admins = Admin::all();
        }

        return view('Admin', compact('admins'));
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
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $admin = Admin::find($id);

        return view('adminupdate.edit', [
            'admin' => $admin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $admin = Admin::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $admin->fill($request->validated());

        // Jika email berubah, reset verifikasi email
        if ($admin->isDirty('email')) {
            $admin->email_verified_at = null;
        }

        // Menyimpan perubahan
        $admin->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('admin.edit', $admin->id)->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $admin = Admin::find($id);
    
        // Pastikan admin ditemukan
        if ($admin) {
            $admin->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('dashboard')->with('error', 'Admin not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('admin')->with('success', 'Admin deleted successfully');
    }

}
