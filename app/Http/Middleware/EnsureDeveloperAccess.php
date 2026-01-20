<?php
// app/Http/Middleware/EnsureDeveloperAccess.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureDeveloperAccess
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth('member')->user();

        // Jika tidak login sebagai member
        if (!$user) {
            return redirect()->route('filament.developer.auth.login');
        }

        // Jika member tidak punya developer profile atau belum approved
        if (!$user->isDeveloper()) {
            auth('member')->logout();

            return redirect()
                ->route('filament.developer.auth.login')
                ->with('error', 'Akun Anda belum disetujui sebagai developer.');
        }

        return $next($request);
    }
}
