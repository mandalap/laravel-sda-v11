@extends('layouts.app')

@section('title')
    Hasil Pencarian Booking
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
    <x-navigation-route title="Detail Booking" :backRoute="route('check-booking')" :showBackground="false" textColor="text-primary" />

    <div class="flex flex-col gap-5">
        <div class="flex flex-col gap-5 px-5">
            <p class="font-semibold text-sm text-custom-gray-100">Produk yang dipesan</p>
            <div
                class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 text-left gap-3">

                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/invoice.png') }}" class="w-5 h-5 flex-shrink-0"
                            alt="invoice">
                        <span class="text-sm font-medium text-custom-gray-80">{{ $booking->invoice }}</span>
                    </div>

                    <div>
                        @if ($booking->status == 'pending')
                            <div
                                class="inline-flex py-1 px-2 rounded bg-warning-secondary text-sm font-medium text-warning-pressed">
                                PENDING
                            </div>
                        @elseif ($booking->status == 'booking')
                            <div
                                class="inline-flex py-1 px-2 rounded bg-success-secondary text-sm font-medium text-success-pressed">
                                BOOKING
                            </div>
                        @elseif ($booking->status == 'cancel')
                            <div
                                class="inline-flex py-1 px-2 rounded bg-danger-secondary text-sm font-medium text-danger-pressed">
                                BATAL
                            </div>
                        @endif
                    </div>
                </div>

                <div class="border-t border-custom-gray-40"></div>

                <div class="flex flex-row gap-2 items-center">
                    <div
                        class="w-32 sm:w-56 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                        <img src="{{ asset('storage/' . $booking->product->project->thumbnail) }}"
                            class="w-full h-full object-contain" alt="{{ $booking->product->name }}">
                    </div>

                    <div class="flex flex-col flex-1 min-w-0">
                        <div class="flex flex-col gap-1">
                            <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                                {{ $booking->product->project->nama_project }}
                            </h3>
                            <p class="text-xs text-custom-gray-70 line-clamp-1">
                                {{ $booking->product->project->alamat_project }}</p>
                            <div class="flex items-center gap-[4px] sm:gap-[6px]">
                                <img src="{{ asset('assets/images/icons/location2.png') }}"
                                    class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                <p class="text-xs text-custom-gray-70 truncate">
                                    {{ $booking->product->project->lokasi->regency->name }}
                                </p>
                            </div>
                            <div class="flex items-center gap-[4px] sm:gap-[6px]">
                                <img src="{{ asset('assets/images/icons/tag.png') }}"
                                    class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                <p class="text-xs text-custom-gray-70 truncate">Rp
                                    {{ number_format($booking->total_harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center px-5 gap-3">
            <p class="font-semibold text-sm text-custom-gray-100">Informasi Pelanggan</p>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Nama</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">{{ $booking->member->nama }}</p>
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Nomor Whatsapp</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">{{ $booking->member->telepon }}</p>
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Nomor Properti</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">{{ $booking->product->nama_product }}
                </p>
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Tanggal Transaksi</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">
                    {{ $booking->created_at->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}
                </p>
            </div>
        </div>

        <hr class="border-custom-gray-40 mx-5">


        <div class="flex flex-col justify-center px-5 gap-3">
            <div class="flex flex-col justify-center">
                <p class="font-semibold text-sm text-custom-gray-100">Rincian Pembayaran</p>
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80">Anda perlu melunasi pembayaran secara cash atau melalui transfer
                    setelah melakukan survei lokasi</p>
            </div>
            <div class="flex flex-col justify-center">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('assets/images/icons/wallet-primary.png') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-custom-gray-80 leading-none flex items-center">Harga boking</p>
                    </div>
                    <p class="text-sm text-custom-gray-100 leading-none font-semibold">Rp
                        {{ number_format($booking->jumlah_uang_booking, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>

        <hr class="border-custom-gray-40 mx-5">

        <div class="flex flex-col justify-center px-5 gap-3">
            <div class="flex flex-col justify-center">
                <p class="font-semibold text-sm text-custom-gray-100">Rincian Harga Produk</p>
            </div>
            <div class="flex flex-col justify-center px-2 gap-2">
                <div class="flex flex-row justify-between">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Harga produk</p>
                    <p class="font-medium text-sm text-custom-gray-80 leading-none"> Rp
                        {{ number_format($booking->harga_tanah, 0, ',', '.') }}</p>
                </div>
                <div class="flex flex-row justify-between">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Potongan harga</p>
                    <p class="font-medium text-sm text-primary leading-none"> -Rp
                        {{ number_format($booking->diskon, 0, ',', '.') }}</p>
                </div>
                <hr class="border-custom-gray-40">
                <div class="flex flex-row justify-between">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Total pembayaran produk</p>
                    <p class="font-semibold text-sm text-custom-gray-100 leading-none">Rp
                        {{ number_format($booking->total_harga, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div id="BottomNav" class="relative flex w-full h-[80px] shrink-0 items-center justify-center">
        <div class="w-full max-w-[640px] px-5">
            @if ($booking->is_paid)
                <div class="flex justify-center items-center rounded-2xl h-[52px] p-3 bg-success-main">
                    <!-- Info Section -->
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-6 h-6" alt="icon">
                        <span class="text-sm font-semibold text-custom-gray-10">Sudah Dibayar</span>
                    </div>
                </div>
            @else
                <div class="flex justify-center items-center rounded-2xl h-[52px] p-3 bg-warning-main">
                    <!-- Info Section -->
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('assets/images/icons/alert-circle.png') }}" class="w-6 h-6" alt="icon">
                        <span class="text-sm font-semibold text-custom-gray-100">Belum Dibayar</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
@push('addon-script')
    <script src="{{ asset('js/accodion.js') }}"></script>
    <script>
        // Get all tab buttons
        const tabLinks = document.querySelectorAll('.tab-link');

        // Add click event listener to each button
        tabLinks.forEach(button => {
            button.addEventListener('click', () => {
                // Get the target tab id from the data attribute
                const targetTab = button.getAttribute('data-target-tab');
                console.log(targetTab)
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Show the target tab content
                document.querySelector(targetTab).classList.toggle('hidden');
            });
        });
    </script>
@endpush
