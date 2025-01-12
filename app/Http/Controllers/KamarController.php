<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\booking;
use App\Http\Requests\KamarUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $keyword = $request->input('keywordkamar'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $kamar = kamar::where('jenis_kamar', 'like', '%' . $keyword . '%')
                            ->orWhere('harga_permalam', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($kamar->isEmpty()) {
                $kamar = kamar::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $kamar = kamar::all();
        }

        return view('Kamar', compact('kamar'));
    }

    public function index2(Request $request): View
    {
        $keyword = $request->input('keywordkamar'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $kamar = kamar::where('jenis_kamar', 'like', '%' . $keyword . '%')
                            ->orWhere('harga_permalam', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($kamar->isEmpty()) {
                $kamar = kamar::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $kamar = kamar::all();
        }

        return view('KamarAdmin', compact('kamar'));
    }

    public function index3(Request $request): View
    {
        $keyword = $request->input('keywordkamar'); // Mengambil nilai 'keyword' dari request

        // Jika ada keyword, cari data yang cocok
        if ($keyword) {
            // Pencarian berdasarkan keyword, bisa disesuaikan dengan kolom yang relevan (misal Nama atau Email)
            $kamar = kamar::where('jenis_kamar', 'like', '%' . $keyword . '%')
                            ->orWhere('harga_permalam', 'like', '%' . $keyword . '%')
                            ->orWhere('id', 'like', '%' . $keyword . '%')
                            ->get();

            // Jika tidak ada data yang cocok, kembalikan semua data admin
            if ($kamar->isEmpty()) {
                $kamar = kamar::all();
            }
        } else {
            // Jika tidak ada keyword, kembalikan semua data admin
            $kamar = kamar::all();
        }

        return view('allcustomer.book.global', compact('kamar'));
    }

    public function index4($id,$responseType = 'view'): View|JsonResponse
    {
        $kamar = kamar::find($id);

        if (!$kamar) {
            if ($responseType === 'json') {
                return response()->json(['error' => 'Room not found'], 404);
            }
            abort(404, 'Room not found');
        }

        $bookings = booking::where('id_kamar', $id)->pluck('Tgl_Nginap')->toArray();

        if ($responseType === 'json') {
            return response()->json([
                'kamar' => $kamar,
                'bookings' => $bookings,
            ]);
        }

        return view('allcustomer.book.view', [
            'kamar' => $kamar,
            'bookings' => json_encode($bookings), // Kirimkan juga daftar booking ke view
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('kamarupdate.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
    */
    public function store(Request $request): RedirectResponse
    {
        
        //dd($request->file('media'));
        //dd($request->all(), $request->file('media'), $request->hasFile('media'));
        //dd($request->all(), $request->file('media'), $_FILES);

        $request->validate([
            'id_hotel' => ['required', 'integer'],
            'nama_kamar' => ['required', 'string', 'max:255'],
            'jenis_kamar' => ['required', 'string', 'max:255'],
            'ukuran_kamar' => ['required', 'string', 'max:255'],
            'jumlah_bedroom' => ['required', 'integer'],
            'ratings' => ['required', 'integer'],
            'status_ketersediaan' => ['required', 'boolean'],
            'harga_permalam' => ['required', 'numeric', 'min:0'],
            'AC' => ['required', 'boolean'],
            'Wifi' => ['required', 'boolean'],
            'Android_Tv'=> ['required', 'boolean'],
            'Karaoke' => ['required', 'boolean'],
            'Trademill'=> ['required', 'boolean'],
            'media' => ['nullable', 'file', 'mimes:jpg,jpeg,png,mp4,mov,avi', 'max:1024000'],
        ]);

        //dd($request->all());
        
        
        
    	// Jika ada file media, simpan
        $mediaPath = null;
        if ($request->hasFile('media')) {
            try {
                //dd($request->file('media')->store('uploads/media', 'public'));
                $mediaPath = $request->file('media')->store('uploads/media', 'public');
                //dd($mediaPath);
            } catch (\Exception $e) {
                //return redirect()->back()->withErrors(['media' => 'Gagal mengunggah file.']);
                dd('Error: ' . $e->getMessage());
            }
        }else{
            dd('No file detected.');
        }

        
        $makam = kamar::create([
            'id_hotel' => ($request->id_hotel),
            'nama_kamar' => ($request->nama_kamar),
            'jenis_kamar' => ($request->jenis_kamar),
            'ukuran_kamar' => ($request->ukuran_kamar),
            'jumlah_bedroom' => ($request->jumlah_bedroom),
            'ratings' => ($request->ratings),
            'status_ketersediaan' => ($request->status_ketersediaan),
            'harga_permalam' => ($request->harga_permalam),
            'AC' => ($request->AC),
            'Wifi' => ($request->Wifi),
            'Android Tv'=> ($request->Android_Tv),
            'Karaoke' => ($request->Karaoke),
            'Trademill'=> ($request->Trademill),
            'media_path' => ($mediaPath)
        ]);

        return redirect(route('kamar.create', absolute: false));
    }
    
    /**
     * Display the specified resource.
     */
    public function show(kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $kamar = Kamar::find($id);

        return view('kamarupdate.edit', [
            'kamar' => $kamar,
        ]);
    }

    public function edit2($id): View
    {
        $kamar = Kamar::find($id);

        return view('kamarupdate.editAdmin', [
            'kamar' => $kamar,
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(KamarUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $kamar = Kamar::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $kamar->fill($request->validated());

        // Menyimpan perubahan
        $kamar->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('kamar.edit', $kamar->id)->with('status', 'profile-updated');
    }

    public function update2(KamarUpdateRequest $request, $id): RedirectResponse
    {
        // Mengambil admin berdasarkan ID yang diberikan
        $kamar = Kamar::find($id);
        
        // Mengisi atribut admin dengan data yang sudah divalidasi
        $kamar->fill($request->validated());

        // Menyimpan perubahan
        $kamar->save();

        // Redirect kembali dengan status berhasil
        return Redirect::route('kamarAdmin.edit', $kamar->id)->with('status', 'profile-updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $kamar = Kamar::find($id);
    
        // Pastikan admin ditemukan
        if ($kamar) {
            $kamar->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('kamar')->with('error', 'kamar not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('kamar')->with('success', 'kamar deleted successfully');
    }

    public function destroy2($id): RedirectResponse
    {
        // Cari admin berdasarkan ID
        $kamar = Kamar::find($id);
    
        // Pastikan admin ditemukan
        if ($kamar) {
            $kamar->delete(); // Hapus data admin
        } else {
            // Jika admin tidak ditemukan, bisa memberikan respons error atau pesan
            return redirect('kamarAdmin')->with('error', 'kamar not found');
        }

        // Redirect ke dashboard setelah penghapusan
        return redirect('kamarAdmin')->with('success', 'kamar deleted successfully');
    }
}
