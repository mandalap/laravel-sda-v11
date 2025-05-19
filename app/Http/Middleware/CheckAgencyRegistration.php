<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agency;
use RealRashid\SweetAlert\Facades\Alert;

class CheckAgencyRegistration
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil user yang sedang login
        $user = Auth::guard('member')->user();

        // Cek apakah user terdaftar di tabel agency
        $isRegistered = Agency::where('member_id', $user->id)->exists();

        if (!$isRegistered) {
            // Jika belum terdaftar, redirect ke affiliate.index
            Alert::toast('Silahkan daftar terlebih dahulu.', 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->route('affiliate.daftar');
        }

        return $next($request);
    }
}
