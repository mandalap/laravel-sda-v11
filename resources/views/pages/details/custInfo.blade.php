@extends('layouts.app')

@section('title')
    Informasi Pelanggan
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        .swiper {
            display: flex;
            /* Menggunakan flexbox untuk menjaga posisi item */
            overflow: hidden;
            /* Sembunyikan overflow */
        }

        .swiper-wrapper {
            display: flex;
            /* Pastikan wrapper juga menggunakan flex */
            transition: transform 0.3s ease;
            /* Tambahkan transisi untuk efek yang lebih halus */
        }
    </style>
@endpush

@section('content')
    <div id="Content-Container"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
        <div id="Background"
            class="absolute top-0 w-full h-[230px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
        </div>
        <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
            <a href="{{ route('detailproject', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}"
                class="flex overflow-hidden justify-center items-center w-10 h-10 bg-white rounded-full shrink-0">
                <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[28px] h-[28px]"
                    alt="{{ $project->jenis->jenis }} {{ $project->kategori->kategori }} {{ $project->nama_project }} di {{ $project->alamat_project }} - {{ $project->lokasi->regency->name }}">
            </a>
            <p class="font-semibold text-white">Informasi Pelanggan</p>
            <div class="w-10 dummy-btn"></div>
        </div>

        @php
            // Menghitung jumlah produk Tersedia untuk proyek saat ini
            $jumlahProdukTersedia = $project->project_product()->where('status', 'Tersedia')->count();
        @endphp

        <div id="Header" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
            <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white">
                <div class="flex gap-4">
                    <div class="flex w-[120px] h-[132px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full"
                            alt="icon">
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <p class="text-lg font-semibold">
                            {{ $project->nama_project }}
                        </p>
                        <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $project->lokasi->regency->name }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/layer.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">Tersedia - {{ $jumlahProdukTersedia }} Properti</p>
                        </div>
                        @php
                            $harga = $project->project_product->min('harga');
                            $diskon = $project->project_product->min('discount'); // Asumsi diskon dalam persen
                            $harga_setelah_diskon = $harga - $diskon;
                        @endphp

                        <hr class="border-[#F1F2F6]">
                        <div class="flex">
                            <p class="text-sm lg:text-lg font-semibold text-[#d40065]">Rp
                                {{ number_format($harga_setelah_diskon) }}</p>
                            <p class="ml-2 text-xs font-semibold text-gray-500 line-through">Rp {{ number_format($harga) }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <form action="{{ route('checkout', [$project->slug]) }}" method="POST"
            class="relative flex flex-col gap-6 mt-5 pt-5 bg-[#F5F6F8]">
            @csrf
            <div class="flex flex-col gap-[6px] px-5">
                <h1 class="text-base font-semibold">Informasi Data Pelanggan </h1>
                {{-- <p class="text-sm text-ngekos-grey">Isi kolom di bawah ini dengan data Anda yang valid</p> --}}
            </div>
            <div id="InputContainer" class="flex flex-col gap-[18px]">
                <div class="flex flex-col gap-2 px-5 w-full">
                    <p class="text-sm font-semibold">Nama Lengkap</p>
                    <label
                        class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/user.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <input type="text" name="nama" id="nama" value="{{ $member->nama }}"
                            class="text-sm w-full bg-white appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Masukkan Nama Lengkap" readonly>
                    </label>
                </div>

                {{-- <div class="flex flex-col gap-2 px-5 w-full">
                    <p class="text-sm font-semibold">Email</p>
                    <label
                        class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/mail.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <input class= "text-sm" type="email" name="email" id="email" value="{{ $member->email }}"
                            class="w-full appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Masukkan Email">
                    </label>
                </div> --}}
                <div class="flex flex-col gap-2 px-5 w-full">
                    <p class="text-sm font-semibold">Telepon</p>
                    <label
                        class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/phone.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <input type="number" name="telepon" id="telepon" value="{{ $member->telepon }}"
                            class="text-sm w-full bg-white appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Masukkan Nomor Telepon" readonly>
                    </label>
                </div>

                <div class="flex flex-col gap-2 px-5 w-full">
                    <p class="text-sm font-semibold">Kode Refferal (Opsional)</p>
                    <label
                        class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/referall.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <input type="text" name="refferal" id="refferal"
                            class="text-sm w-full bg-white appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Masukkan Kode Refferal">
                    </label>
                </div>

                <div class="flex flex-col gap-2 px-5 w-full">
                    <p class="text-sm font-semibold">Pilih Properti</p>
                    <label
                        class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white focus-within:ring-1 focus-within:ring-[#d40065] transition-all duration-300">
                        <img src="{{ asset('assets/images/icons/search2.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <input type="text" id="search" placeholder="Cari produk..."
                            class="text-sm w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                            onkeyup="filterProducts()">
                    </label>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="overflow-x-hidden w-full swiper">
                        <div class="swiper-wrapper" id="product-list">
                            @forelse ($products as $product)
                                <div class="swiper-slide !w-fit py-[2px] product-item">
                                    <label
                                        class="relative flex flex-col items-center justify-center w-fit rounded-3xl p-[14px_20px] gap-3 bg-white border border-white hover:border-[#d40065] has-[:checked]:ring-2 has-[:checked]:ring-[#d40065] transition-all duration-300">
                                        <img src="{{ asset('assets/images/icons/real-estate.svg') }}" class="w-8 h-8"
                                            alt="icon">
                                        <p class="text-sm font-semibold text-nowrap">{{ $product->nama_product }}</p>
                                        <input type="radio" name="product"
                                            class="absolute top-1/2 left-1/2 opacity-0 -z-10"
                                            value="{{ $product->code_product }}"
                                            @if ($selectedProduct && $selectedProduct->code_product === $product->code_product) checked @endif
                                            onchange="updateCodeProduct('{{ $product->code_product }}')">
                                    </label>
                                </div>
                            @empty
                                <p>Tidak ada produk tersedia.</p>
                            @endforelse

                        </div>
                    </div>
                </div>

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
            </div>

            <div id="BottomNav" class="relative flex w-full h-[132px] shrink-0 bg-white">
                <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
                    <div
                        class="flex items-center justify-between rounded-[40px] py-4 px-6 bg-gradient-to-r from-[#a7006d] to-[#d40065]">
                        <div class="flex flex-col gap-[2px]">
                            <p id="price" class="font-bold text-sm leading-[30px] text-white">
                                <!-- price dari js -->
                            </p>
                            <span class="text-sm text-white">Total Booking</span>
                            <p class="font-bold text-lg leading-[30px] text-white">
                                Rp 100.000
                            </p>
                        </div>
                        <button type="submit"
                            class="flex shrink-0 text-sm rounded-full py-[14px] px-5 bg-white hover:bg-black hover:text-white font-bold text-black">
                            Lanjutkan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('addon-script')
    <script src="{{ asset('js/cust-info.js') }}"></script>
@endpush
