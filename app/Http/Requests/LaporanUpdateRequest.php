<?php

namespace App\Http\Requests;

use App\Models\laporan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LaporanUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'avarage_lama_menginap' => ['required', 'numeric', 'min:0'],
            'jml_kamar_terpesan' => ['required', 'integer'],
            'jml_pemesanan' => ['required', 'integer'],
            'jml_kamar_tersedia' => ['required', 'integer'],
            'total_pendapatan' => ['required', 'numeric', 'min:0'],
            'Tgl_Laporan' => ['required', 'date'],
        ];
    }
}
