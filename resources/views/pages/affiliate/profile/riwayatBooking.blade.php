@extends('layouts.app')

@section('title')
    Affiliate-Riwayat Booking
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
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
    <x-navigation-route title="Riwayat Booking" :backRoute="route('affiliate.dashboard')" :showBackground="false" textColor="text-primary" />

    @if ($bookings->isEmpty())
        @include('components.no-data')
    @else
        <div class="container">
            <div id="booking-list">
                @include('pages.affiliate.profile.partials.riwayatBookingList')
            </div>

            <div id="loading" class="hidden">
                @for ($i = 0; $i < 3; $i++)
                    <section class="relative px-5 mb-3">
                        <div class="card w-full">
                            <div class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white gap-3">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="skeleton w-5 h-5 rounded shrink-0"></div>
                                        <div class="skeleton h-5 rounded-md w-24"></div>
                                    </div>
                                    <div class="skeleton h-6 rounded w-16"></div>
                                </div>

                                <div class="border-t border-custom-gray-40"></div>

                                <div class="flex flex-row gap-2 items-center">
                                    <div class="w-20 sm:w-24 md:w-40 h-16 sm:h-20 md:h-24 flex-shrink-0 rounded skeleton">
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0 gap-1">
                                        <div class="skeleton h-4 rounded-md w-full"></div>
                                        <div class="skeleton h-3 rounded-md w-3/4"></div>
                                        <div class="skeleton h-3 rounded-md w-5/6"></div>
                                        <div class="flex items-center gap-1">
                                            <div class="skeleton w-3 h-3 sm:w-4 sm:h-4 rounded shrink-0"></div>
                                            <div class="skeleton h-3 rounded-md w-1/2"></div>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="skeleton w-3 h-3 sm:w-4 sm:h-4 rounded shrink-0"></div>
                                            <div class="skeleton h-3 rounded-md w-2/5"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t border-custom-gray-40"></div>

                                <div class="flex justify-between items-center">
                                    <div class="skeleton h-5 rounded-md w-1/3"></div>
                                    <div class="text-right">
                                        <div class="skeleton h-4 rounded-md w-24 ml-auto"></div>
                                    </div>
                                </div>
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

            <div id="observer-target" class="h-10"></div>
        </div>
    @endif
@endsection

@push('addon-script')
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
                const response = await fetch(`{{ route('affiliate.profile.riwayatBooking') }}?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                riwayatBookingList.insertAdjacentHTML('beforeend', data.html);

                // Initialize countdowns for new items
                document.querySelectorAll(`[id^=countdown-]`).forEach(el => {
                    const expiryTimeUTC = el.getAttribute("data-expiry");
                    if (expiryTimeUTC) {
                        startCountdown(el.id.split('-')[1], expiryTimeUTC);
                    }
                });

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
            rootMargin: '0px 0px 200px 0px'
        });

        if (observerTarget) {
            observer.observe(observerTarget);
        }
    </script>
@endpush
