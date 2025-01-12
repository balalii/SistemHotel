<?php

namespace App\Http\Requests;

use App\Models\admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminUpdateRequest extends FormRequest
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
