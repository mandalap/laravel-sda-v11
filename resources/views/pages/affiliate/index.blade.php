@extends('layouts.app')

@section('title')
    Sajada Affiliate
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Sajada Affiliate" :backRoute="route('beranda')" :showBackground="true" textColor="text-custom-gray-10" />

    <div id="Top-nav" class="relative flex items-center px-5">
        <div class="gap-1">
            <p class="font-semibold text-xl text-custom-gray-10">Mulai Jualan Sekarang!</p>
            <p class="text-sm text-custom-gray-10">Nikmati Keuntungan Program Sukses Agen Baru</p>
        </div>
    </div>

    <div id="Feature" class="relative px-5">
        <!-- Cards -->
        <div class="flex flex-col gap-5 mt-5">
            <div class="rounded-2xl">
                <div
                    class="flex flex-col gap-2 rounded-2xl ring-1 ring-custom-gray-40 bg-custom-gray-10 overflow-hidden transition-all duration-300 hover:ring-1 hover:ring-primary">
                    <div class="w-full h-[170px] md:h-[220px] flex shrink-0 overflow-hidden relative">
                        <img src="assets/images/photos/affiliate-thumb-2.jpg" class="w-full h-full object-cover" alt="Penjualan">
                    </div>
                    <div class="flex flex-col p-3 gap-2">
                        <h3 class="font-medium text-base text-custom-gray-100">
                            Sajada Affiliate Member
                        </h3>
                        <p class="text-xs text-custom-gray-80">
                            Mendapatkan komisi tambahan sebesar <span class="text-custom-gray-90 font-bold">50Rb s/d
                                100Rb</span> per transaksi penjualan
                            yang
                            terselesaikan dari member yang ditambahkan dari link promosi atau kode referral.
                        </p>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl">
                <div
                    class="flex flex-col gap-2 rounded-2xl ring-1 ring-custom-gray-40 bg-custom-gray-10 overflow-hidden transition-all duration-300 hover:ring-1 hover:ring-primary">
                    <div class="w-full h-[170px] md:h-[220px] flex shrink-0 overflow-hidden relative">
                        <img src="assets/images/photos/affiliate-thumb-1.png" class="w-full h-full object-cover" alt="Penjualan">
                    </div>
                    <div class="flex flex-col p-3 gap-2">
                        <h3 class="font-medium text-base text-custom-gray-100">
                            Sajada Affiliate Penjualan
                        </h3>
                        <p class="text-xs text-custom-gray-80">
                            Mendapatkan komisi tambahan sebesar <span class="text-custom-gray-90 font-bold">500 ribu s/d 2
                                juta</span> per transaksi penjualan
                            yang terselesaikan dari link promosi atau kode referral.
                        </p>
                    </div>
                </div>
            </div>

            <a href="{{ route('affiliate.daftar') }}">
                <x-button-primary type="submit" :full-width="true">
                    Daftar sebagai Agen Penjualan
                </x-button-primary>
            </a>

        </div>
    </div>
@endsection

@push('addon-script')
@endpush
