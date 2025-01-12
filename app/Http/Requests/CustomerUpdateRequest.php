<?php

namespace App\Http\Requests;

use App\Models\customer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Nama' => ['required', 'string', 'max:255'],
            'No_Tlp' => ['required', 'string', 'max:255'],
            'No_KTP' => ['required', 'string', 'max:255'],
            'Email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                 //Rule::unique(Admin::class)->ignore('id'),
            ],

            //'Email' => ['required', 'string', 'max:255'],
        ];
    }
}
