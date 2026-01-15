@extends('layouts.app')

@section('title')
    Status Pendaftaran Developer
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Kerjasama" :backRoute="route('beranda')" textColor="text-primary" />

    <div class="flex flex-col items-center justify-center text-center px-5 mt-12 md:mt-16"
        style="min-height: calc(50svh - 3rem);">
        <img src="{{ asset('assets/images/icons/waiting-developer.svg') }}" alt="icon" class="w-44 h-44 mx-auto">
        <div class="space-y-1 items-center justify-center">
            <p class="text-lg md:text-xl text-primary font-medium">Menunggu Verifikasi Admin</p>
            <p class="text-sm text-custom-gray-80">Pendaftaran kerja sama kamu saat ini sudah masuk dan sedang menunggu
                verifikasi dari admin kami</p>
        </div>
    </div>

    @push('addon-script')
    @endpush
@endsection
