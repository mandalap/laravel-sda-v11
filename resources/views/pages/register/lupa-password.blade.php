@extends('layouts.guest')

@section('title')
    Lupa Kata Sandi
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <!-- component -->
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-[#AE1679] to-[#D81D76]">
        <div class="p-8 w-full max-w-md bg-white rounded-xl shadow-lg">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-24" alt="icon">
            <h2 class="mt-3 text-2xl font-semibold text-center text-custom-gray-100">Lupa Kata Sandi</h2>

            <p class="mt-3 text-sm text-center text-custom-gray-80">Masukkan nomor whatsapp Kamu<br>Kami akan mengirim sandi
                terbaru
            </p>

            <form class="space-y-4" action="{{ route('resetpassword') }}" method="POST">
                @csrf
                <div>
                    <x-input-field label="Nomor WhatsApp" type="tel" name="telepon"
                        placeholder="Masukkan Nomor WhatsApp" value="{{ old('telepon') }}" required />
                </div>

                <x-button-primary type="submit" :full-width="true">
                    Kirim Sandi
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

@push('addon-script')
@endpush
