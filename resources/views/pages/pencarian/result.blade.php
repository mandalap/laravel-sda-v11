@extends('layouts.app')

@section('title')
    Hasil Pencarian
@endsection

@push('prepend-style')
    <style>
        .no-outline {
            outline: none;
        }

        /* Skeleton Loading Animation */
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
    <x-navigation-route title="Hasil Pencarian" :backRoute="route('cari-properti')" :showBackground="true" textColor="text-custom-gray-10" />

    <div id="Header" class="relative flex items-center justify-between gap-2 px-5">
        <p class="text-sm font-medium text-custom-gray-10">{{ $product->total() }} Hasil pencarian ditemukan</p>
    </div>

    <!-- Property List Container -->
    <div id="property-list" class="flex relative flex-col gap-4 px-5 mt-5">
        @include('pages.pencarian.partials.propertyList')
    </div>

    <!-- Loading Skeleton -->
    <div id="loading" class="hidden relative px-5 mt-5 mb-3">
        <div class="flex flex-row gap-[10px] rounded-2xl border border-custom-gray-40 p-3 bg-white mb-4">
            <!-- Image placeholder -->
            <div class="w-32 sm:w-40 md:w-60 flex-shrink-0 rounded overflow-hidden skeleton h-24 sm:h-28 md:h-32">
            </div>

            <!-- Content placeholder -->
            <div class="flex flex-col gap-1 flex-1 min-h-0">
                <!-- Title and Address -->
                <div class="flex flex-col gap-1">
                    <div class="h-4 skeleton rounded w-full"></div>
                    <div class="h-3 skeleton rounded w-3/4"></div>
                </div>

                <!-- Divider -->
                <div class="border-t border-custom-gray-30 my-1"></div>

                <!-- Details -->
                <div class="flex flex-col gap-[6px]">
                    <!-- Location -->
                    <div class="flex items-center gap-[6px]">
                        <div class="w-4 h-4 sm:w-5 sm:h-5 skeleton rounded flex-shrink-0"></div>
                        <div class="h-3 skeleton rounded w-2/3"></div>
                    </div>
                    <!-- Category -->
                    <div class="flex items-center gap-[6px]">
                        <div class="w-4 h-4 sm:w-5 sm:h-5 skeleton rounded flex-shrink-0"></div>
                        <div class="h-3 skeleton rounded w-1/2"></div>
                    </div>
                    <!-- Availability -->
                    <div class="flex items-center gap-[6px]">
                        <div class="w-4 h-4 sm:w-5 sm:h-5 skeleton rounded flex-shrink-0"></div>
                        <div class="h-3 skeleton rounded w-3/5"></div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-custom-gray-30 my-1"></div>

                <!-- Price placeholder -->
                <div class="flex items-center">
                    <div class="h-5 skeleton rounded w-2/5"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Observer target for infinite scroll -->
    <div id="observer-target" class="h-10"></div>
@endsection

@push('addon-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let page = 1;
            let isLoading = false;
            let hasMorePages = {{ $product->hasMorePages() ? 'true' : 'false' }};
            const propertyList = document.getElementById('property-list');
            const loading = document.getElementById('loading');
            const observerTarget = document.getElementById('observer-target');

            // Get URL query parameters for maintaining search context
            const urlParams = new URLSearchParams(window.location.search);
            const nama = urlParams.get('nama') || '';
            const lokasi = urlParams.get('lokasi') || '';

            async function loadMoreData() {
                if (isLoading || !hasMorePages) return;

                isLoading = true;
                page++;
                loading.classList.remove('hidden');

                try {
                    // Create form data to send as POST
                    const formData = new FormData();
                    formData.append('nama', nama);
                    formData.append('lokasi', lokasi);
                    formData.append('page', page);
                    formData.append('_token', '{{ csrf_token() }}');

                    const response = await fetch('{{ route('findproperti') }}', {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        },
                        body: formData
                    });

                    const data = await response.json();

                    // Add new HTML to property list
                    propertyList.insertAdjacentHTML('beforeend', data.html);

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

            // Show initial skeleton loader
            window.addEventListener('load', function() {
                loading.classList.add('hidden');
            });
        });
    </script>
@endpush
