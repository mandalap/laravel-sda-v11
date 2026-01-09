<?php
// app/Http/Middleware/PreventDuplicateDeveloperRegistration.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventDuplicateDeveloperRegistration
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $member = auth('member')->user();

        if (!$member) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        if ($member->isDeveloper()) {
            return redirect('/developer');
        }

        $developer = $member->developer;

        if ($developer) {
            if ($developer->status === 'pending') {
                return redirect()->route('developer.pending')
                    ->with('info', 'Anda sudah terdaftar. Pendaftaran sedang diproses.');
            }

            if ($developer->status === 'rejected' || $developer->status === 'ditolak') {
                return $next($request);
            }
        }

        return $next($request);
    }
}
