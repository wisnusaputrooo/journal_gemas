<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah pengguna terautentikasi
        if (!Auth::check()) {
            return redirect('login'); // Redirect ke halaman login jika belum terautentikasi
        }

        // Cek apakah pengguna memiliki role yang sesuai
        if (Auth::user()->role !== $role) {
            return redirect('home'); // Redirect jika role tidak sesuai
        }

        return $next($request);
    }
}
