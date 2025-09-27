@extends('layouts.app')

@section('title')
    Affiliate-Booking Berhasil
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[330px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]"></div>
    <div class="relative flex flex-col gap-[30px] my-[30px] px-5">
        <h1 class="font-bold text-[30px] leading-[45px] text-center text-white">Booking Berhasil<br>Selamat!</h1>
        <div id="Header" class="relative flex items-center justify-between gap-2">
            <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white">
                <div class="flex gap-4">
                    <div class="flex w-[120px] h-[132px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full"
                            alt="{{ $project->nama_project }}">
                    </div>
                    <div class="flex flex-col w-full gap-3">
                        <p class="font-semibold text-lg leading-[27px] line-clamp-2 min-h-[54px]">
                            {{ $project->nama_project }}</p>
                        <p class="font-semibold text-lg leading-[27px] line-clamp-2 min-h-[54px]">
                            {{ $product->nama_product }}</p>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location2.png') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location2.png') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-sm text-ngekos-grey">{{ $project->lokasi->regency->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-[18px]">
            <p class="font-semibold">Invoice Transaksi</p>
            <div class="flex items-center rounded-full p-[14px_20px] gap-3 bg-[#F5F6F8]">
                <img src="{{ asset('assets/images/icons/invoice.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                <p class="font-semibold">{{ $booking->invoice }}</p>
            </div>
        </div>
        <div class="flex flex-col gap-[14px]">
            <a href="{{ route('affiliate.booking.index') }}"
                class="w-full rounded-full p-[14px_20px] text-center font-bold text-white bg-gradient-to-r from-[#a7006d] to-[#d40065] hover:bg-black">
                Cari Properti Lain
            </a>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
