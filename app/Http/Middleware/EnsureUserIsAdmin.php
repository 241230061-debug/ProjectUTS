<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Jangan lupa tambahkan baris ini
use Symfony\Component\HttpFoundation\Response;
use App\Models\Transaction;
use App\Models\User;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah user sudah login
        // 2. Cek apakah kolom 'role' milik user tersebut adalah 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Silakan masuk (lanjutkan proses)
        }
        // Jika dia bukan admin (atau belum login), arahkan kembali ke dashboard biasa
        return redirect('/dashboard')->with('error', 'Akses ditolak! Anda bukan admin.');
    }
}