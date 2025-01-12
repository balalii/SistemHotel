<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredCustomerController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registercustomer');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Nama' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:admins,email'],
            'No_Tlp' => ['required', 'string', 'max:255'],
            'No_KTP' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $customer = customer::create([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'No_Tlp' => $request->No_Tlp,
            'No_KTP' => $request->No_KTP,             
            'password' => Hash::make($request->password),
        ]);


        Auth::guard('customer')->login($customer);  

        return redirect(route('globalbook', absolute: false));
    }
}
