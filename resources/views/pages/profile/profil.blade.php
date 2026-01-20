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

                <hr class="border-custom-gray-40 ml-8">

                <a href="{{ route('developer.index') }}" class="flex justify-between items-center h-11 hover:text-primary">
                    <div class="flex items-center gap-2">
                        <img src="{{ 'assets/images/icons/kerjasama-primary.png' }}" class="w-6 h-6" alt="icon">
                        <p class="text-sm text-custom-gray-90">Sajada Developer</p>
                    </div>
                    <img src="{{ asset('assets/images/icons/arrow-profile.png') }}" class="w-5 h-5" alt="icon">
                </a>

                <hr class="border-custom-gray-40 ml-8">

                <a href="{{ route('affiliate.index') }}" class="flex justify-between items-center h-11 hover:text-primary">
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

    {{-- <div id="Lainnya" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white">
            <label class="relative flex items-center justify-between">
                <p class="text-lg font-semibold">Lainnya</p>
            </label>
            <div class="flex flex-col gap-4">
                <a href="" class="flex justify-between items-center hover:text-[#d40065]">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <p class="font-normal text-sm">Tentang Kami (Belum Tersedia)</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
                <a href="" class="flex justify-between items-center hover:text-[#d40065]">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                        </svg>

                        <p class="font-normal text-sm">Peraturan Komunitas (Belum Tersedia)</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>

                <a href="" class="flex justify-between items-center hover:text-[#d40065]">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>

                        <p class="font-normal text-sm">Kebijakan Sajada (Belum Tersedia)</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>

                <a href="" class="flex justify-between items-center hover:text-[#d40065]">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>

                        <p class="font-normal text-sm">Informasi (Belum Tersedia)</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>

                <a href="" class="flex justify-between items-center hover:text-[#d40065]">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                        <p class="font-normal text-sm">Ajukan Penghapusan Akun (Belum Tersedia)</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex justify-between items-center hover:text-[#d40065] w-full text-left">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-3A2.25 2.25 0 0 0 8.25 5.25V9m-3 3h12m-9 6.75A2.25 2.25 0 0 1 8.25 18V9m6.75 9a2.25 2.25 0 0 1-2.25 2.25H10.5A2.25 2.25 0 0 1 8.25 18V9">
                                </path>
                            </svg>
                            <p class="font-normal text-sm">Keluar</p>
                        </div>
                    </button>
                </form>

            </div>
        </div>
    </div> --}}
    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
