<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // Memastikan bahwa route tersedia dan mendapatkan nama route
        $routeName = $request->route() ? $request->route()->getName() : null;

        // Cek jika routeName tersedia dan tidak cocok dengan login route
        if ($routeName !== 'loginadmin' && $routeName !== 'logincustomer' && $routeName !== 'login') {
            // Cek apakah user sudah login dengan guard yang ditentukan
            if (Auth::guard($guard)->check()) {
                return $next($request);
            }

            // Jika tidak memiliki akses, redirect ke halaman login admin
            return redirect('/loginadmin');
        }

        // Lanjutkan request jika route adalah login
        return $next($request);
    }

    

}
