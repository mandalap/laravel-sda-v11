@extends('layouts.app')

@section('title')

@endsection

@push('prepend-style')
<style>
    .no-outline {
    outline: none;
}
</style>
@endpush
@push('addon-style')
@endpush

@section('content')
<div id="Content-Container" class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
    <div id="Background" class="absolute top-0 w-full h-[300px] rounded-b-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]"></div>
    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
        <a href="{{ route('cara-properti') }}" class="flex overflow-hidden justify-center items-center w-10 h-10 bg-white rounded-full shrink-0">
            <img src="assets/images/icons/arrow-left.svg" class="w-[28px] h-[28px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Hasil Semua Pencarian</p>
        <div class="w-12 dummy-btn"></div>
    </div>
    <div id="Header" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
        <div class="flex flex-col gap-[6px]">
            <h1 class="font-bold text-[32px] leading-[48px] text-white">Hasil Pencarian</h1>
            <p class="text-white">Tersedia {{ $product->count() }} Properti</p>
        </div>
    </div>
    <section id="Result" class="flex relative flex-col gap-4 px-5 mt-5 mb-9">
        @forelse ( $product as $item )
        <a href="{{ route('detailproject', [$item->jenis->slug, $item->kategori->slug, $item->slug]) }}" class="card">
            <div class="flex rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    <div class="relative">
                        <button class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                            Turun Harga
                        </button>
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" class="object-cover w-full h-full" alt="{{ $item->jenis->jenis }} {{ $item->kategori->kategori }} {{ $item->nama_project }} di {{ $item->alamat_project }} - {{ $item->lokasi->regency->name }}">
                    </div>
                </div>
                <div class="flex flex-col gap-3 w-full">
                    <h3 class="font-semibold text-lg">{{ $item->nama_project }}</h3>
                    <p class="text-sm text-ngekos-grey">{{ $item->alamat_project }}</p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex items-center gap-[6px]">
                        <img src="assets/images/icons/location.svg" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-sm text-ngekos-grey">{{ $item->lokasi->regency->name }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="assets/images/icons/profile-2user.svg" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-sm text-ngekos-grey">{{ $item->kategori->kategori }}</p>
                    </div>
                    <hr class="border-[#F1F2F6]">
                    @php
                        $harga = $item->project_product->min('harga');
                        $diskon = $item->project_product->min('discount'); // Asumsi diskon dalam persen
                        $harga_setelah_diskon = $harga - $diskon;
                    @endphp
                    <div class="flex">
                        <p class="text-sm lg:text-lg font-semibold text-[#d40065]">Rp 100.000.000</p>
                        <p class="ml-2 text-[0.625rem] font-semibold text-gray-500 line-through">{{ number_format($harga) }}</p>
                    </div>
                </div>
            </div>
        </a>
        @empty

        @endforelse
    </section>
</div>

@endsection
@push('addon-script')

@endpush
