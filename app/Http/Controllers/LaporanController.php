<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\booking;
use App\Models\kamar;
use App\Http\Requests\LaporanUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $keyword = $request->input('keywordlaporan'); // Mengambil nilai 'keyword' dari request
        $PeriodeLaporan = $request->input('PeriodeLaporan');
        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $laporans = laporan::whereRaw('strftime("%Y", Tgl_Laporan) like ?', ['%' . $keyword . '%'])
                    ->orWhere('id', 'like', '%' . $keyword . '%')
                    ->get();


            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($laporans->isEmpty()) {
                $laporans = laporan::all();
            }
        } else if($PeriodeLaporan && !$keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $laporans = laporan::whereRaw('strftime("%Y", Tgl_Laporan) like ?', ['%' . $PeriodeLaporan . '%'])
                    ->get();


            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($laporans->isEmpty()) {
                $laporans = laporan::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin  
            $laporans = laporan::all();
        }

        return view('Laporan', compact('laporans'));
    }

    public function index2(Request $request): View
    {
        $keyword = $request->input('keywordlaporan'); // Mengambil nilai 'keyword' dari request
        $PeriodeLaporan = $request->input('PeriodeLaporan');
        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $laporans = laporan::whereRaw('strftime("%Y", Tgl_Laporan) like ?', ['%' . $keyword . '%'])
                    ->orWhere('id', 'like', '%' . $keyword . '%')
                    ->get();


            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($laporans->isEmpty()) {
                $laporans = laporan::all();
            }
        } else if($PeriodeLaporan && !$keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $laporans = laporan::whereRaw('strftime("%Y", Tgl_Laporan) like ?', ['%' . $PeriodeLaporan . '%'])
                    ->get();


            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($laporans->isEmpty()) {
                $laporans = laporan::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin  
            $laporans = laporan::all();
        }

        return view('LaporanAdmin', compact('laporans'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $averageLamaMenginap = booking::avg('lama_menginap');
        $kamarTerpesan = kamar::where('status_ketersediaan', false)->count();
        $kamarTersedia = kamar::where('status_ketersediaan', true)->count();
        $currentYear = date('Y');
        $jumlahPemesanan = booking::whereYear('Tgl_booking', $currentYear)->count();
        $totalPendapatan = booking::sum('jumlah_total');
        return view('laporanupdate.create',[
            'averageLamaMenginap' => $averageLamaMenginap,
            'kamarTerpesan' => $kamarTerpesan,
            'kamarTersedia' => $kamarTersedia,
            'jumlahPemesanan' => $jumlahPemesanan,
            'totalPendapatan' => $totalPendapatan,
        ] );
    }

    public function create2():View
    {
        $averageLamaMenginap = booking::avg('lama_menginap');
        $kamarTerpesan = kamar::where('status_ketersediaan', false)->count();
        $kamarTersedia = kamar::where('status_ketersediaan', true)->count();
        $currentYear = date('Y');
        $jumlahPemesanan = booking::whereYear('Tgl_booking', $currentYear)->count();
        $totalPendapatan = booking::sum('jumlah_total');
        return view('laporanupdate.createAdmin',[
            'averageLamaMenginap' => $averageLamaMenginap,
            'kamarTerpesan' => $kamarTerpesan,
            'kamarTersedia' => $kamarTersedia,
            'jumlahPemesanan' => $jumlahPemesanan,
            'totalPendapatan' => $totalPendapatan,
        ] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaporanUpdateRequest $request): RedirectResponse
    {
        // Validasi sudah dilakukan oleh LaporanUpdateRequest
        
        // Menyimpan data menggunakan mass assignment dengan validated() hasil dari form request
        Laporan::create($request->validated());
    
        // Redirect ke dashboard setelah berhasil menyimpan
        return redirect(route('laporan.create', absolute: false))->with('status', 'Laporan telah disimpan');
    }

    public function store2(LaporanUpdateRequest $request): RedirectResponse
    {
        // Validasi sudah dilakukan oleh LaporanUpdateRequest
        
        // Menyimpan data menggunakan mass assignment dengan validated() hasil dari form request
        Laporan::create($request->validated());
    
        // Redirect ke dashboard setelah berhasil menyimpan
        return redirect(route('laporanAdmin.create', absolute: false))->with('status', 'Laporan telah disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $laporan = laporan::find($id);

        return view('laporanupdate.edit', [
            'laporan' => $laporan,
        ]);
    }

    public function edit2($id): View
    {
        $laporan = laporan::find($id);

        return view('laporanupdate.editAdmin', [
            'laporan' => $laporan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LaporanUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $laporan = laporan::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $laporan->fill($request->validated());

        // Jika email berubah, reset verifikasi email
        if ($laporan->isDirty('email')) {
            $laporan->email_verified_at = null;
        }

        // Menyimpan perubahan
        $laporan->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('laporan.edit', $laporan->id)->with('status', 'profile-updated');
    }

    public function update2(LaporanUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $laporan = laporan::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $laporan->fill($request->validated());

        // Menyimpan perubahan
        $laporan->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('laporanAdmin.edit', $laporan->id)->with('status', 'profile-updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $laporan = Laporan::find($id);
    
        // Pastikan admin ditemukan
        if ($laporan) {
            $laporan->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('laporan')->with('error', 'laporan not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('laporan')->with('success', 'Admin deleted successfully');
    }

    public function destroy2($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $laporan = Laporan::find($id);
    
        // Pastikan admin ditemukan
        if ($laporan) {
            $laporan->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('laporanAdmin')->with('error', 'laporan not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('laporanAdmin')->with('success', 'Admin deleted successfully');
    }

}
