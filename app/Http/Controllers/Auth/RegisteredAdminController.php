<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredAdminController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registeradmin');
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
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = admin::create([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'password' => Hash::make($request->password),
        ]);


        Auth::guard('admin')->login($admin);  

        return redirect(route('dashboard.admin', absolute: false));
    }
}
