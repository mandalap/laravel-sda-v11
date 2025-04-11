@extends('layouts.app')

@section('title')
    Riwayat Booking
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[60px]">
        <a href="{{ route('profil') }}"
            class="flex items-center justify-center w-12 h-12 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{ asset('/assets/images/icons/arrow-left.svg') }}" class="w-[28px] h-[28px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Riwayat Booking</p>
        <div class="w-12 dummy-btn"></div>
    </div>

    <div class="container">
        <h2 class="mb-4">Riwayat Booking Saya</h2>

        <div id="booking-list">
            @include('pages.profile.partials.riwayatBookingList')
        </div>

        <div id="loading" class="text-center mt-4 hidden">
            <p>Sedang memuat...</p>
        </div>

        @if ($bookings->hasMorePages())
            <div class="text-center mt-4">
                <button id="load-more" class="px-4 py-2 bg-[#d40065] text-white rounded-lg">Muat lebih banyak</button>
            </div>
        @endif
    </div>
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
        const loadMoreBtn = document.getElementById('load-more');
        const riwayatBookingList = document.getElementById('booking-list');
        const loading = document.getElementById('loading');

        async function loadMoreData() {
            page++;
            loadMoreBtn.style.display = 'none';
            loading.classList.remove('hidden');

            try {
                const response = await fetch(`{{ url('riwayat-booking') }}?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json(); // Parse JSON response

                // Tambahkan HTML baru ke daftar booking
                riwayatBookingList.insertAdjacentHTML('beforeend', data.html);
                loading.classList.add('hidden');

                // Cek apakah masih ada halaman berikutnya
                if (!data.hasMorePages) {
                    loadMoreBtn.remove();
                } else {
                    loadMoreBtn.style.display = 'block';
                }
            } catch (error) {
                Alert::toast('Terjadi kesalahan', 'error')->autoClose(10000);
                loading.classList.add('hidden');
                loadMoreBtn.style.display = 'block';
            }
        }

        loadMoreBtn.addEventListener('click', loadMoreData);
    </script>
@endpush
