<?php

namespace App\Http\Requests;

use App\Models\payment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaymentUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_boking' => ['required', 'integer'],
            'Tgl_Pembayaran' => ['required', 'date'],
            'Metode_Pembayaran' => ['required', 'integer', 'between:1,255'],
        ];
    }
}
