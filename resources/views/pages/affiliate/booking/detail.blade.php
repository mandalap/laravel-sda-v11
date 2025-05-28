@extends('layouts.app')

@section('title')
    Affiliate-Booking {{ $project->nama_project }}
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[230px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>
    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
        <a href="{{ route('affiliate.booking.index') }}"
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Informasi Pelanggan</p>
        <div class="w-12 dummy-btn"></div>
    </div>
    <div id="Header" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white">
            <div class="flex gap-4">
                <div class="flex w-[120px] h-[132px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full"
                        alt="{{ $project->nama_project }}">
                </div>
                <div class="flex flex-col w-full gap-3">
                    <p class="font-semibold text-base leading-[27px] line-clamp-2 min-h-[54px]">{{ $project->nama_project }}
                    </p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">{{ $project->lokasi->regency->name }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div
        class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
        <label class="relative flex items-center justify-between">
            <p class="text-base font-semibold">Marketing</p>
            <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                alt="icon">
            <input type="checkbox" class="absolute hidden">
        </label>
        <div class="flex flex-col gap-4 pt-[22px]">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/user.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Nama</p>
                </div>
                <p class="text-sm font-semibold">{{ $member->nama }}</p>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/phone.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Telepon</p>
                </div>
                <p class="text-sm font-semibold">{{ $member->telepon }}</p>
            </div>
        </div>
    </div>
    <form action="{{ route('affiliate.booking.checkout', $project->slug) }}" method="POST"
        class="relative flex flex-col rounded-[30px] mx-5 gap-6 mt-5 pt-5 bg-[#F5F6F8]">
        @csrf
        <div class="flex flex-col gap-[6px] px-5">
            <h1 class="text-base font-semibold">Informasi Data Pelanggan </h1>
            <p class="text-xs text-ngekos-grey">Isi kolom di bawah ini dengan data Anda yang valid</p>
        </div>
        <div id="InputContainer" class="flex flex-col gap-[18px]">
            <div class="flex flex-col w-full gap-2 px-5">
                <p class="text-base font-semibold">Nama Lengkap</p>
                <label
                    class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/user.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="text" name="nama" id="name"
                        class="w-full font-semibold outline-none appearance-none placeholder:text-ngekos-grey text-sm placeholder:font-normal"
                        placeholder="Masukkan Nama Lengkap">
                </label>
            </div>
            <div class="flex flex-col w-full gap-2 px-5">
                <p class="text-base font-semibold">Telepon</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/phone.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="tel" name="telepon" id="phone"
                        class="w-full font-semibold outline-none appearance-none placeholder:text-ngekos-grey text-sm placeholder:font-normal"
                        placeholder="Masukkan Nomor Telepon">
                </label>
            </div>

            <div class="flex flex-col gap-2 px-5 w-full">
                <p class="text-base font-semibold">Pilih Properti</p>
                <label
                    class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/search2.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="text" id="search" placeholder="Cari produk..."
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey text-sm placeholder:font-normal"
                        onkeyup="filterProducts()">
                </label>
            </div>
            <div class="flex flex-col gap-2">
                <div class="overflow-x-hidden w-full swiper">
                    <div class="swiper-wrapper flex space-x-3 px-1 md:px-0" id="product-list">
                        @forelse ($products as $product)
                            <div class="swiper-slide !w-fit py-1 product-item">
                                <label
                                    class="relative flex flex-col items-center justify-center w-fit rounded-3xl p-[14px_20px] gap-3 bg-white border border-white hover:border-[#d40065] has-[:checked]:ring-2 has-[:checked]:ring-[#d40065] transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/real-estate.svg') }}"
                                        class="w-6 h-6 sm:w-8 sm:h-8" alt="icon">
                                    <p class="font-semibold text-nowrap text-xs sm:text-sm text-center leading-snug">
                                        {{ $product->nama_product }}</p>
                                    <input type="radio" name="product_id"
                                        class="absolute top-1/2 left-1/2 opacity-0 -z-10"
                                        value="{{ $product->code_product }}"
                                        onchange="updateCodeProduct('{{ $product->code_product }}')">
                                </label>
                            </div>
                        @empty
                            <p>Tidak ada produk tersedia.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div id="BottomNav" class="relative flex w-full justify-center h-[132px] shrink-0 bg-white">
            <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
                <div
                    class="flex items-center justify-between rounded-[40px] py-4 px-6 bg-gradient-to-r from-[#a7006d] to-[#d40065]">
                    <div class="flex flex-col gap-[2px]">
                        {{-- <p id="price" class="font-bold text-xl leading-[30px] text-white">
                            <!-- price dari js -->
                        </p> --}}
                        <span class="text-base text-white">Total Booking</span>
                        <p class="font-bold text-base leading-[30px] text-white">
                            Rp 100.000
                        </p>
                    </div>
                    <button type="submit"
                        class="flex shrink-0 rounded-full py-[14px] px-5 bg-white hover:bg-black hover:text-white font-bold text-black text-sm">
                        Booking Sekarang
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('addon-script')
    <script>
        function filterProducts() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const productItems = document.querySelectorAll('.product-item');
            let visibleCount = 0;

            productItems.forEach(item => {
                const productName = item.querySelector('p').textContent.toLowerCase();
                if (productName.includes(searchInput)) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            // Jika hanya ada satu item yang terlihat, atur posisi
            if (visibleCount === 1) {
                const visibleItem = Array.from(productItems).find(item => item.style.display !== 'none');
                if (visibleItem) {
                    // Pusatkan item
                    const swiperWrapper = document.querySelector('.swiper-wrapper');
                    const itemWidth = visibleItem.offsetWidth;
                    const totalWidth = itemWidth * visibleCount; // Total lebar item yang terlihat
                    const offset = (swiperWrapper.offsetWidth - totalWidth) / 2; // Hitung offset untuk memusatkan
                    swiperWrapper.style.transform = `translateX(${offset}px)`; // Pusatkan item
                }
            } else {
                // Reset transform jika lebih dari satu item terlihat
                const swiperWrapper = document.querySelector('.swiper-wrapper');
                swiperWrapper.style.transform = 'translateX(0)';
            }
        }
    </script>
@endpush
