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
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[60px]">
        <a href="{{ route('profil') }}"
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{ asset('/assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Riwayat Booking</p>
        <div class="w-12 dummy-btn"></div>
    </div>

    @if ($bookings->isEmpty())
        @include('components.no-data')
    @else
        <div class="container">
            <h2 class="mb-4">Riwayat Booking Saya</h2>

            <div id="booking-list">
                @include('pages.profile.partials.riwayatBookingList')
            </div>

            <div id="loading" class="hidden">
                <!-- Skeleton loader cards -->
                <section class="flex relative flex-col gap-4 px-5 mt-5 mb-3">
                    <div class="card w-full">
                        <div class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white">
                            <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] skeleton"></div>
                            <div class="flex flex-col gap-3 text-left w-full">
                                <div class="skeleton h-6 rounded-md w-3/4"></div>
                                <div class="skeleton h-4 rounded-md w-1/2"></div>
                                <div class="skeleton h-4 rounded-md w-2/3"></div>
                                <hr class="border-[#F1F2F6]">
                                <div class="flex items-start gap-[6px]">
                                    <div class="skeleton w-5 h-5 rounded-full shrink-0"></div>
                                    <div class="skeleton h-4 rounded-md w-1/3"></div>
                                </div>
                                <div class="flex items-start gap-[6px]">
                                    <div class="skeleton w-5 h-5 rounded-full shrink-0"></div>
                                    <div class="skeleton h-4 rounded-md w-2/5"></div>
                                </div>
                                <div class="flex items-start gap-[6px]">
                                    <div class="skeleton w-5 h-5 rounded-full shrink-0"></div>
                                    <div class="skeleton h-4 rounded-md w-1/4"></div>
                                </div>
                                <hr class="border-[#F1F2F6]">
                                <div class="flex">
                                    <div class="skeleton h-6 rounded-md w-1/3"></div>
                                </div>
                                <div class="flex">
                                    <div class="skeleton h-6 rounded-full w-1/4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Second skeleton card -->

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
                    countdownElement.classList.add("text-red-500");
                    return;
                }

                const hours = Math.floor((remainingTime / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((remainingTime / (1000 * 60)) % 60);
                const seconds = Math.floor((remainingTime / 1000) % 60);

                countdownElement.innerText = `${hours}jam ${minutes}menit ${seconds}detik`;

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
