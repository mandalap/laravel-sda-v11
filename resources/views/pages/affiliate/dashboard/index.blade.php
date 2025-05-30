@extends('layouts.app')

@section('title')
    Sajada Affiliate
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[200px] rounded-bl-[30px] rounded-br-[30px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>
    <div id="Top-nav" class="relative flex items-center px-4 pt-5">
        <a href="{{ route('profil') }}">
            <div class="flex w-10 h-10 shrink-0">
                <img src="{{ asset('assets/images/icons/back.svg') }}" alt="icon">
            </div>
        </a>
    </div>

    <div class="mt-5 mb-7 px-5">
        <div class=" relative flex flex-col text-center w-fit mx-auto gap-2">
            <h1 class="font-semibold text-2xl leading-[27px] text-white ">Mulai Jualan Sekarang!</h1>
            <p class="text-sm leading-[21px] text-[#909DBF] text-white">Nimkati Keuntungan Program Sukses Agen Baru
            </p>
        </div>
    </div>

    <div id="Feature" class="px-[18px] relative z-10 py-5">
        <div class="bg-white p-[18px_16px] rounded-xl overflow-hidden grid grid-cols-2 gap-2 shadow-md">
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Link</p>
                </div>
            </a>
        </div>
    </div>

    <section id="Promo" class="relative z-10 flex flex-col gap-3 px-4 py-5 bg-[#F5F6F8] ">
        <div class="grid grid-cols-3 gap-5">
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Komisi</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Komisi</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Komisi</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Komisi</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Komisi</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/land.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-xs text-[#757C98] leading-[21px]">Komisi</p>
                </div>
            </a>
        </div>
    </section>

    @include('includes.footerAgency')
@endsection

@push('addon-script')
@endpush
