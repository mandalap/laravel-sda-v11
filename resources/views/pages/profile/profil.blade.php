@extends('layouts.app')

@section('title')
    Akun
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Akun" :showBackground="true" textColor="text-custom-gray-10" />

    <div id="Header" class="relative flex gap-3 px-5">
        <div class="flex flex-col">
            @if (Auth::user()->thumbnail)
                <img src="{{ asset('storage/' . Auth::user()->thumbnail) }}" class="w-14 h-14 rounded-full border border-dark"
                    alt="icon">
            @else
                <img src="{{ asset('/assets/images/icons/profil-default.png') }}"
                    class="w-14 h-14 rounded-full border bg-custom-gray-10" alt="Default thumbnail">
            @endif
        </div>
        <div class="flex flex-col shrink-0">
            <h1 class="font-bold text-base text-custom-gray-10">{{ Auth::user()->nama }}</h1>
            <p class="text-sm text-custom-gray-10">{{ Auth::user()->telepon }}</p>
        </div>
    </div>

    <div id="PengaturanAkun" class="relative flex items-center justify-between gap-1 px-5 mt-4">
        <div class="flex flex-col w-full rounded-2xl border border-custom-gray-40 p-3 gap-1 bg-custom-gray-10">
            <label class="relative flex items-center justify-between">
                <p class="text-base text-custom-gray-100 font-medium">Pengaturan Akun</p>
            </label>
            <div class="flex flex-col gap-1">
                <a href="{{ route('detail.profil') }}" class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <img src="{{ 'assets/images/icons/profile-primary.png' }}" class="w-6 h-6" alt="icon">
                        <p class="text-sm text-custom-gray-90">Profil</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>
                <hr class="border-custom-gray-40 ml-8">

                <a href="{{ route('index.password') }}" class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <img src="{{ 'assets/images/icons/password-primary.png' }}" class="w-6 h-6" alt="icon">

                        <p class="text-sm text-custom-gray-90">Password</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>

                <hr class="border-custom-gray-40 ml-8">

                <a href="{{ route('riwayat.booking') }}" class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <img src="{{ 'assets/images/icons/history-primary.png' }}" class="w-6 h-6" alt="icon">

                        <p class="text-sm text-custom-gray-90">Riwayat Booking</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>

                <a href="{{ route('purchase.history') }}" class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M21.75 6H2.25C1.83579 6 1.5 6.33579 1.5 6.75V17.25C1.5 17.6642 1.83579 18 2.25 18H21.75C22.1642 18 22.5 17.6642 22.5 17.25V6.75C22.5 6.33579 22.1642 6 21.75 6Z"
                                stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.5 6L22.5 11.25" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16.5 18L22.5 12.75" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.5 6L1.5 11.25" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.5 18L1.5 12.75" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <p class="text-sm text-custom-gray-90">Riwayat Pembelian</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>

                <hr class="border-custom-gray-40 ml-8">

                <a href="{{ route('developer.index') }}" class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <img src="{{ 'assets/images/icons/kerjasama-primary.png' }}" class="w-6 h-6" alt="icon">
                        <p class="text-sm text-custom-gray-90">Sajada Developer</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>

                <hr class="border-custom-gray-40 ml-8">

                <a href="{{ route('affiliate.index') }}"
                    class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <img src="{{ 'assets/images/icons/affiliate-primary.png' }}" class="w-6 h-6" alt="icon">
                        <p class="text-sm text-custom-gray-90">Sajada Affiliate</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>
            </div>
        </div>
    </div>

    <div id="buttonExit" class="relative flex items-center justify-between gap-1 p-5">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit"
                class="flex justify-center items-center w-full h-9 rounded-full border border-danger-main text-danger-main hover:bg-danger-main hover:text-white transition-all duration-300">
                Keluar
            </button>
        </form>

    </div>

    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
