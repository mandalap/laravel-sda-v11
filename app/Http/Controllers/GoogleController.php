<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MemberProvider;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class GoogleController extends Controller
{

    public function redirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): RedirectResponse
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')
                ->withErrors(['google' => 'Login Google gagal, silakan coba lagi.']);
        }

        $provider = MemberProvider::where('provider', 'google')
            ->where('provider_id', $googleUser->getId())
            ->first();

        if ($provider) {
            return $this->loginMember($provider->member);
        }

        $member = Member::where('email', $googleUser->getEmail())
            ->whereNotNull('email_verified_at')
            ->first();

        if ($member) {
            $member->providers()->create([
                'provider'       => 'google',
                'provider_id'    => $googleUser->getId(),
                'provider_token' => $googleUser->token,
            ]);

            return $this->loginMember($member);
        }

        session([
            'google_pending' => [
                'google_id'  => $googleUser->getId(),
                'nama'       => $googleUser->getName(),
                'email'      => $googleUser->getEmail(),
                'avatar'     => $googleUser->getAvatar(),
                'token'      => $googleUser->token,
                'expired_at' => now()->addMinutes(5)->timestamp,
            ]
        ]);

        return redirect()->route('daftar')->with('from_google', true);
    }

    public function connectRedirect(): RedirectResponse
    {
        session(['google_intent' => 'connect']);

        return Socialite::driver('google')
            ->redirectUrl(config('app.url') . '/profil/google/callback')
            ->redirect();
    }

    public function connectCallback(): RedirectResponse
    {
        if (session('google_intent') !== 'connect') {
            return $this->callback();
        }

        session()->forget('google_intent');

        $member = Auth::guard('member')->user();
        if (! $member) {
            return redirect()->route('login');
        }

        try {
            $googleUser = Socialite::driver('google')
                ->redirectUrl(config('app.url') . '/profil/google/callback')
                ->user();
        } catch (\Exception $e) {
            Log::error('Google connect error: ' . $e->getMessage());
            Alert::toast('Gagal menghubungkan akun Google. Silakan coba lagi.', 'error')
                ->autoClose(5000)
                ->timerProgressBar();
            return redirect()->route('detail.profil');
        }

        $alreadyUsed = MemberProvider::where('provider', 'google')
            ->where('provider_id', $googleUser->getId())
            ->where('member_id', '!=', $member->id)
            ->exists();

        if ($alreadyUsed) {
            Alert::toast('Akun Google ini sudah terhubung ke akun lain.', 'error')
                ->autoClose(5000)
                ->timerProgressBar();
            return redirect()->route('detail.profil');
        }

        if ($member->hasGoogleConnected()) {
            Alert::toast('Akun Anda sudah terhubung dengan Google.', 'warning')
                ->autoClose(5000)
                ->timerProgressBar();
            return redirect()->route('detail.profil');
        }

        $member->providers()->create([
            'provider'       => 'google',
            'provider_id'    => $googleUser->getId(),
            'provider_token' => $googleUser->token,
        ]);

        if (empty($member->email)) {
            $member->update([
                'email'             => $googleUser->getEmail(),
                'email_verified_at' => now(),
            ]);
        }

        if (empty($member->thumbnail)) {
            $updateData['thumbnail'] = $googleUser->getAvatar();
        }

        if (! empty($updateData)) {
            $member->update($updateData);
        }

        Alert::toast('Akun Google berhasil dihubungkan!', 'success')
            ->autoClose(5000)
            ->timerProgressBar();

        return redirect()->route('detail.profil');
    }

    public function disconnect(): RedirectResponse
    {
        $member = Auth::guard('member')->user();

        $provider = $member->providers()->where('provider', 'google')->first();

        if (! $provider) {
            Alert::toast('Akun Google tidak ditemukan.', 'error')
                ->autoClose(6000)
                ->timerProgressBar();
            return redirect()->route('detail.profil');
        }

        $provider->delete();

        if ($member->email_verified_at) {
            $member->update([
                'email'             => null,
                'email_verified_at' => null,
            ]);
        }

        Alert::toast('Akun Google berhasil diputuskan.', 'success')
            ->autoClose(6000)
            ->timerProgressBar();

        return redirect()->route('detail.profil');
    }

    private function loginMember(Member $member): RedirectResponse
    {
        if ($member->status !== 'active') {
            return redirect()->route('login')
                ->withErrors(['google' => 'Akun Anda tidak aktif. Hubungi admin.']);
        }

        Auth::guard('member')->login($member);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
