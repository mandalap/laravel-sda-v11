@extends('layouts.guest')

@section('title')
    Daftar
@endsection

@section('content')
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-secondary to-primary">
        <div class="p-8 w-full max-w-md bg-white rounded-2xl shadow-lg">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-24" alt="icon">
            <h2 class="mt-4 mb-6 text-xl font-semibold text-center text-gray-900">Daftar</h2>

            <form class="space-y-4" method="POST" action="{{ route('store.register') }}">
                @csrf

                <x-input-fieldv2 label="Sapaan" name="sapaan" type="select" placeholder="Pilih Sapaan"
                    icon="assets/images/icons/sapaan-primary.png" :options="['Bang' => 'Bang', 'Kak' => 'Kak', 'Pak' => 'Pak', 'Bu' => 'Bu']" />

                <x-input-fieldv2 label="Nama Lengkap" name="nama" type="text" placeholder="Masukkan Nama Lengkap"
                    icon="assets/images/icons/user-primary.png" value="{{ old('nama', $google_pending['nama'] ?? '') }}"
                    required />

                <x-input-fieldv2 label="Nomor WhatsApp" name="telepon" type="tel" value="{{ old('telepon') }}"
                    placeholder="Masukkan No. WhatsApp, cth: 08xxxxxx" icon="assets/images/icons/phone-primary.png"
                    required />

                <x-input-fieldv2 label="Email {{ $google_pending ? '' : '(Opsional)' }}" name="email" type="email"
                    placeholder="Masukkan Email" icon="assets/images/icons/email-primary.png"
                    value="{{ old('email', $google_pending['email'] ?? '') }}" :readonly="(bool) $google_pending" />

                {{-- Kode Referral --}}
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-4 rounded-lg border border-green-200">
                    <h4 class="text-sm font-medium text-gray-90 mb-3">
                        Kode Referral {{ $is_referral ? '' : '(Opsional)' }}
                    </h4>
                    <div>
                        <input type="text" name="referral_code" id="referral_code"
                            value="{{ old('referral_code', $referral_code) }}" {{ $is_referral ? 'readonly' : '' }}
                            class="mt-1 block w-full px-3 py-2 border border-gray-40 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 {{ $is_referral ? 'bg-gray-100 cursor-not-allowed' : '' }} placeholder-custom-gray-70"
                            placeholder="{{ $is_referral ? 'Kode referral otomatis terisi' : 'Masukkan kode referral' }}">

                        @error('referral_code')
                            <p class="mt-1 text-xs text-danger-main">{{ $message }}</p>
                        @enderror

                        @if (!$is_referral)
                            <p class="mt-2 text-xs text-danger-main">
                                Jika Anda memiliki kode referral dari Agency kami, silahkan ketikkan kodenya di sini.
                            </p>
                        @endif
                    </div>
                </div>

                <x-button-primary type="submit" :full-width="true">
                    Daftar
                </x-button-primary>
            </form>

            <div class="mt-4 text-sm text-center text-custom-gray-100">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-primary hover:text-black">Masuk</a>
            </div>
        </div>
    </div>

    @include('includes.script')
@endsection
