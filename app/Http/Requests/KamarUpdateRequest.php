<?php

namespace App\Http\Requests;

use App\Models\kamar;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KamarUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_hotel' => ['required', 'integer'],
            'jenis_kamar' => ['required', 'string', 'max:255'],
            'status_ketersediaan' => ['required', 'boolean'], // or 'in:1,0' if you expect numeric values
            'harga_permalam' => ['required', 'numeric', 'min:0'],
        ];
    }


    /**
     * Menentukan apakah pengguna dapat membuat permintaan ini.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
