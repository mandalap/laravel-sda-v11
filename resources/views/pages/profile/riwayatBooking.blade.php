@extends('layouts.app')

@section('title')
    Riwayat Booking
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        /* Skeleton animation */
        @keyframes pulse {
            0% {
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }

        .skeleton {
            background-color: #E8E8E8;
            animation: pulse 1.5s infinite ease-in-out;
        }
    </style>
@endpush

@section('content')
    <x-navigation-route title="Riwayat Booking" backRoute="{{ route('profil') }}" textColor="text-custom-gray-10"
        :showBackground="true" />

    @if ($bookings->isEmpty())
        @include('components.no-data')
    @else
        <div class="container">
            <div id="booking-list">
                @include('pages.profile.partials.riwayatBookingList')
            </div>

            <div id="loading" class="hidden">
                <!-- Skeleton loader cards -->
                @for ($i = 0; $i < 3; $i++)
                    <section class="relative px-5 mb-3">
                        <div class="card w-full">
                            <div class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white gap-3">

                                <!-- Bagian 1: Invoice & Status Skeleton -->
                                <div class="flex justify-between items-center">
                                    <!-- Invoice Skeleton -->
                                    <div class="flex items-center gap-2">
                                        <div class="skeleton w-5 h-5 rounded shrink-0"></div>
                                        <div class="skeleton h-5 rounded-md w-24"></div>
                                    </div>

                                    <!-- Status Badge Skeleton -->
                                    <div class="skeleton h-6 rounded w-16"></div>
                                </div>

                                <!-- Garis Pembatas 1 -->
                                <div class="border-t border-custom-gray-40"></div>

                                <!-- Bagian 2: Gambar dan Informasi Booking Skeleton -->
                                <div class="flex flex-row gap-2 items-center">
                                    <!-- Gambar Skeleton -->
                                    <div class="w-20 sm:w-24 md:w-40 h-16 sm:h-20 md:h-24 flex-shrink-0 rounded skeleton">
                                    </div>

                                    <!-- Konten Skeleton -->
                                    <div class="flex flex-col flex-1 min-w-0 gap-1">
                                        <!-- Nama Project -->
                                        <div class="skeleton h-4 rounded-md w-full"></div>
                                        <!-- Nama Product -->
                                        <div class="skeleton h-3 rounded-md w-3/4"></div>
                                        <!-- Alamat -->
                                        <div class="skeleton h-3 rounded-md w-5/6"></div>

                                        <!-- Lokasi dengan Icon -->
                                        <div class="flex items-center gap-1">
                                            <div class="skeleton w-3 h-3 sm:w-4 sm:h-4 rounded shrink-0"></div>
                                            <div class="skeleton h-3 rounded-md w-1/2"></div>
                                        </div>

                                        <!-- Harga dengan Icon -->
                                        <div class="flex items-center gap-1">
                                            <div class="skeleton w-3 h-3 sm:w-4 sm:h-4 rounded shrink-0"></div>
                                            <div class="skeleton h-3 rounded-md w-2/5"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Garis Pembatas 2 -->
                                <div class="border-t border-custom-gray-40"></div>

                                <!-- Bagian 3: Nama Blok dan Jumlah Pembayaran Skeleton -->
                                <div class="flex justify-between items-center">
                                    <!-- Nama Blok Skeleton -->
                                    <div class="skeleton h-5 rounded-md w-1/3"></div>

                                    <!-- Jumlah Pembayaran Skeleton -->
                                    <div class="text-right">
                                        <div class="skeleton h-4 rounded-md w-24 ml-auto"></div>
                                    </div>
                                </div>

                                <!-- Bagian 4: Informasi Tambahan Skeleton (hanya untuk variasi) -->
                                @if ($i === 0)
                                    <div class="space-y-1">
                                        <div class="skeleton h-3 rounded-md w-3/4"></div>
                                        <div class="skeleton h-3 rounded-md w-1/2"></div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </section>
                @endfor
            </div>

            <!-- Observer target untuk infinite scroll -->
            <div id="observer-target" class="h-10"></div>
        </div>
    @endif
@endsection

@push('addon-script')
    <script>
        function startCountdown(bookingId, expiryTimeUTC) {
            const countdownElement = document.getElementById(`countdown-${bookingId}`);
            if (!countdownElement) return;

            // Konversi UTC ke GMT+7 di JavaScript
            const expiryDateUTC = new Date(expiryTimeUTC + "Z"); // Pastikan waktu dianggap sebagai UTC
            const expiryDateGMT7 = new Date(expiryDateUTC.getTime() + (7 * 60 * 60 * 1000)); // Tambah 7 jam

            function updateCountdown() {
                const now = new Date().getTime(); // Waktu sekarang dalam UTC
                const remainingTime = expiryDateUTC.getTime() - now;

                if (remainingTime <= 0) {
                    countdownElement.innerText = "Waktu habis!";
                    countdownElement.classList.remove("text-primary");
                    countdownElement.classList.add("text-danger-main");
                    return;
                }

                const hours = Math.floor((remainingTime / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((remainingTime / (1000 * 60)) % 60);
                const seconds = Math.floor((remainingTime / 1000) % 60);

                countdownElement.innerText = `${hours} jam ${minutes} menit ${seconds} detik`;
                countdownElement.classList.add("text-primary");
                countdownElement.classList.remove("text-danger-main");

                setTimeout(updateCountdown, 1000);
            }

            updateCountdown();
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("[id^=countdown-]").forEach(el => {
                const expiryTimeUTC = el.getAttribute("data-expiry");
                if (expiryTimeUTC) {
                    startCountdown(el.id.split('-')[1], expiryTimeUTC);
                }
            });
        });
    </script>
    <script>
        let page = 1;
        let isLoading = false;
        let hasMorePages = {{ $bookings->hasMorePages() ? 'true' : 'false' }};
        const riwayatBookingList = document.getElementById('booking-list');
        const loading = document.getElementById('loading');
        const observerTarget = document.getElementById('observer-target');

        async function loadMoreData() {
            if (isLoading || !hasMorePages) return;

            isLoading = true;
            page++;
            loading.classList.remove('hidden');

            try {
                const response = await fetch(`{{ url('riwayat-booking') }}?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                // Tambahkan HTML baru ke daftar booking
                riwayatBookingList.insertAdjacentHTML('beforeend', data.html);

                // Initialize countdowns for new items
                document.querySelectorAll(`[id^=countdown-]`).forEach(el => {
                    const expiryTimeUTC = el.getAttribute("data-expiry");
                    if (expiryTimeUTC) {
                        startCountdown(el.id.split('-')[1], expiryTimeUTC);
                    }
                });

                // Update hasMorePages status
                hasMorePages = data.hasMorePages;

                isLoading = false;
                loading.classList.add('hidden');
            } catch (error) {
                console.error('Error loading more data:', error);
                isLoading = false;
                loading.classList.add('hidden');
            }
        }

        // Set up Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && hasMorePages && !isLoading) {
                loadMoreData();
            }
        }, {
            rootMargin: '0px 0px 200px 0px' // Load more when target is 200px from viewport
        });

        // Start observing
        if (observerTarget) {
            observer.observe(observerTarget);
        }
    </script>
@endpush
