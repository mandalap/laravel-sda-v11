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
    <x-navigation-route title="Booking" :backRoute="route('detailproject', [$project->jenis->slug, $project->kategori->slug, $project->slug])" :showBackground="false" textColor="text-primary" />

    @php
        // Menghitung jumlah produk Tersedia untuk proyek saat ini
        $jumlahProdukTersedia = $project->project_product()->where('status', 'Tersedia')->count();
    @endphp

    <div class="flex flex-col gap-5">

        <!-- Bagian 1: Produk yang dipesan -->
        <div class="flex flex-col gap-5 px-5">
            <p class="font-semibold text-sm text-custom-gray-100">Produk yang dipesan</p>
            <div
                class="flex flex-row gap-2.5 rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 items-center">
                <!-- Gambar -->
                <div
                    class="w-32 sm:w-40 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="w-full h-full object-contain"
                        alt="{{ $project->nama_project }}">
                </div>
                <!-- Deskripsi -->
                <div class="flex flex-col gap-1 flex-1 min-h-0">
                    <!-- Nama & Alamat -->
                    <div class="flex flex-col gap-1">
                        <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                            {{ $project->nama_project }}
                        </h3>
                        <p class="text-xs text-custom-gray-70 line-clamp-1">{{ $project->alamat_project }}</p>
                    </div>
                    <hr class="border-custom-gray-30 my-1">
                    <!-- Detail Lokasi -->
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/location2.png') }}"
                                class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                            <p class="text-xs text-custom-gray-70 truncate">
                                {{ $project->lokasi->regency->name }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/category.png') }}"
                                class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                            <p class="text-xs text-custom-gray-70 truncate">
                                {{ $project->kategori->kategori }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/layer.png') }}"
                                class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                            <p class="text-xs text-custom-gray-70 truncate">
                                Tersisa {{ $project->project_product->where('status', 'Tersedia')->count() }} Unit
                            </p>
                        </div>
                    </div>
                    <hr class="border-custom-gray-30 my-1">
                    <div class="flex items-center">
                        <p class="text-sm font-semibold text-primary">
                            {!! $project->getPriceDisplay([
                                'price_class' => 'text-sm font-bold text-primary',
                                'strike_class' => 'text-xs text-custom-gray-80 font-medium',
                                'strike_top' => '2px',
                            ]) !!}</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-custom-gray-40">

        <!-- Bagian 2: Form dengan Informasi Project -->
        <form action="{{ route('checkout', [$project->slug]) }}" method="POST"
            class="flex flex-col gap-5 bg-custom-gray-10">
            @csrf

            <div class="flex flex-col gap-5 px-5">
                <h1 class="font-semibold text-sm text-custom-gray-100">Informasi Pelanggan</h1>

                <div class="flex flex-col gap-[18px]">
                    <x-input-fieldv2 label="Nama Lengkap" name="nama" type="text" :value="$member->nama" readonly
                        icon="assets/images/icons/user-primary.png" />

                    <x-input-fieldv2 label="Nomor Whatsapp" name="telepon" type="number" :value="$member->telepon" readonly
                        icon="assets/images/icons/phone-primary.png" />

                    <x-input-fieldv2 label="Kode Refferal (Opsional)" name="refferal" type="text" :value="old('refferal')"
                        icon="assets/images/icons/refferal-primary.png" placeholder="Masukkan Kode Refferal" />
                </div>

                <div class="flex flex-col gap-[18px]">
                    {{-- Field pencarian menggunakan component yang sama --}}
                    <x-input-fieldv2 label="Pilih Produk" name="search" type="text"
                        icon="assets/images/icons/search-primary.png" placeholder="Cari produk" onkeyup="filterProducts()"
                        id="search" />

                    <div class="flex flex-col gap-2">
                        <div class="overflow-x-hidden w-full swiper">
                            <div class="swiper-wrapper" id="product-list">
                                @forelse ($products as $product)
                                    <div class="swiper-slide !w-fit py-[2px] product-item">
                                        <label
                                            class="relative flex flex-col items-center justify-center w-fit rounded-lg w-16 h-16 p-2 bg-white border border-custom-gray-50 hover:border-primary has-[:checked]:ring-1 has-[:checked]:ring-primary transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/building.png') }}" class="w-8 h-8"
                                                alt="icon">
                                            <p class="text-[10px] font-medium text-custom-gray-90 text-nowrap">
                                                {{ $product->nama_product }}</p>
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
                </div>
            </div>

            <div id="BottomNav" class="relative flex w-full h-[90px] shrink-0">
                <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-50">
                    <div
                        class="flex items-center justify-between rounded-full h-[61px] pl-6 pr-2 bg-gradient-to-t from-secondary to-primary">
                        <!-- Info Section -->
                        <div class="flex flex-col justify-center">
                            <span class="text-xs text-custom-gray-10 leading-none mb-1">Biaya Booking</span>
                            <p class="font-bold text-lg text-custom-gray-10 leading-none">
                                Rp100.000
                            </p>
                        </div>

                        <button type="submit"
                            class="flex items-center justify-center shrink-0 rounded-full w-[120px] h-[45px] p-3 text-sm bg-primary-secondary font-bold text-primary hover:bg-black hover:text-white transition-all duration-300 whitespace-nowrap">
                            Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('addon-script')
    <script src="{{ asset('js/cust-info.js') }}"></script>
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
