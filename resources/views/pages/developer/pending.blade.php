@extends('layouts.app')

@section('title')
    Status Pendaftaran Developer
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        .card {
            border-radius: 1rem;
        }

        .btn {
            border-radius: 0.5rem;
            font-weight: 500;
        }

        .alert {
            border-radius: 0.75rem;
            border: none;
        }

        svg {
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .border-primary {
            border: 2px solid #0d6efd !important;
        }
    </style>
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
