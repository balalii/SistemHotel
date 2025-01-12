<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Menangani permintaan masuk ke aplikasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah admin terautentikasi menggunakan guard 'admin'
        if (!Auth::guard('admin')->check()) {
            // Jika tidak terautentikasi, alihkan ke halaman login admin
            return redirect()->route('admin.login'); // Pastikan Anda punya route 'admin.login'
        }

        // Jika terautentikasi, lanjutkan ke request berikutnya
        return $next($request);
    }
}

//middleware ini adalah middleware tambahan yang saya ingin saya gunakan untuk authentikasi admin sebelumnya dan belum saya gunakan