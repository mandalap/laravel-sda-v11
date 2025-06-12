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
        class="absolute top-0 w-full h-[200px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <div id="Top-nav" class="relative flex items-center justify-center px-7 pt-5 mb-5">
        <div class="text-center">
            <h1 class="font-semibold text-xl sm:text-2xl leading-tight text-white">Mulai Jualan Sekarang!</h1>
            <p class="text-xs sm:text-sm leading-tight text-white mt-1">Nikmati Keuntungan Program Sukses Agen Baru</p>
        </div>
    </div>

    <div id="Feature" class="relative px-4">
        <div class="bg-white flex flex-col p-4 sm:p-[18px_16px] rounded-xl overflow-hidden shadow-md">
            <!-- Program Success Banner -->
            <div class="flex flex-col sm:flex-row w-full max-w-md mx-auto items-center">
                <img src="assets/images/icons/agen-1.png" class="w-[150px] sm:w-[150px]" alt="Program Agen">
                <div class="flex flex-col justify-center ml-0 sm:ml-3 mt-3 sm:mt-0 text-center sm:text-left">
                    <div class="flex flex-wrap justify-center sm:justify-start items-center gap-1 sm:gap-2 mb-4 sm:mb-9">
                        <h1 class="font-bold text-lg sm:text-xl">PROGRAM SUKSES AGEN BARU</h1>
                    </div>
                    <h1 class="text-xs sm:text-sm pr-1">Rekomendasikan produk dan dapatkan komisi</h1>
                </div>
            </div>

            <!-- Cards -->
            <div class="flex flex-col gap-4 mt-5">
                <div class="card shadow-lg rounded-[30px]">
                    <div
                        class="flex flex-col sm:flex-row rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                        <div class="flex justify-center sm:justify-start">
                            <img src="assets/images/icons/penjualan.png" class="w-32 sm:w-[150px]" alt="Penjualan">
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <h3 class="font-semibold text-base sm:text-lg line-clamp-2 text-center sm:text-left">
                                Sajada Affiliate Member
                            </h3>
                            <hr class="border-[#F1F2F6]">
                            <p class="text-xs sm:text-sm text-center sm:text-left">
                                Mendapatkan komisi tambahan sebesar <strong>50Rb s/d 100Rb</strong> per transaksi penjualan yang
                                terselesaikan dari member yang ditambahkan dari link promosi atau kode referral.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-lg rounded-[30px]">
                    <div
                        class="flex flex-col sm:flex-row rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                        <div class="flex justify-center sm:justify-start">
                            <img src="assets/images/icons/penjualan-1.png" class="w-32 sm:w-[150px]" alt="Penjualan">
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <h3 class="font-semibold text-base sm:text-lg line-clamp-2 text-center sm:text-left">
                                Sajada Affiliate Penjualan
                            </h3>
                            <hr class="border-[#F1F2F6]">
                            <p class="text-xs sm:text-sm text-center sm:text-left">
                                Mendapatkan komisi tambahan sebesar <strong>500Rb s/d 2 juta</strong> per transaksi penjualan yang
                                terselesaikan dari link promosi atau kode referral.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div id="BottomButton" class="relative flex w-full h-[98px] shrink-0 items-center justify-center">
            <div class="fixed bottom-[30px] w-full max-w-[640px] px-5 z-10">
                <a href="{{ route('affiliate.daftar') }}"
                    class="flex w-full justify-center rounded-full p-[14px_20px] bg-gradient-to-r from-[#a7006d] to-[#d40065] hover:from-[#d40065] hover:to-[#ff4495] font-semibold text-white text-sm sm:text-base transition-all duration-300">
                    Daftar sebagai Agen Penjualan
                </a>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
