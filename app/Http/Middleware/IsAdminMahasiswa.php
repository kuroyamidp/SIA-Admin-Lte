<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdminMahasiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna memiliki role 'admin' atau 'mahasiswa'
        if (Auth::check() && (Auth::user()->role_id == 0 || Auth::user()->role_id == 2)) {
            return $next($request);
        }
        
        // Jika tidak memiliki salah satu role, kembalikan akses ditolak
        abort(403, 'Akses Ditolak');
    }
}
