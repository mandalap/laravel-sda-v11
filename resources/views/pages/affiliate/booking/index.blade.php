@extends('layouts.app')

@section('title')
    Affiliate-Booking
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        #filter_dropdown {
            left: unset;
            /* Hapus posisi left yang sebelumnya */
            right: 0;
            /* Tempatkan dropdown di sisi kanan */
            transform: translateX(-10%);
            /* Geser dropdown ke kiri agar tidak keluar dari layar */
        }

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

        .animate-pulse {
            animation: pulse 1.5s ease-in-out infinite;
        }

        /* Hide skeleton loader initially */
        #skeleton-loader {
            display: none;
        }

        /* No more data message */
        #no-more-data {
            display: none;
            text-align: center;
            padding: 20px 0;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[570px] rounded-bl-[30px] rounded-br-[30px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>
    
    <!-- Top Nav Agency -->
    <x-top-nav-agency title="Booking Properti" back-route="affiliate.dashboard" />

    <div id="Header" class="relative flex flex-col items-center gap-2 px-5 mt-[18px] text-center">
        <p class="text-white">{{ $projectCount }} Project Ditemukan</p>
    </div>
    <div class="flex sticky top-0 z-20 gap-4 items-center px-5 py-2 mt-6 w-full bg-white shadow-md">

        <form action="" class="flex relative z-10 flex-row flex-grow items-center w-full">

            <input type="hidden" name="filter" value="{{ request()->query('filter', 'none') }}">
            <div
                class="flex items-center rounded-full p-[6px_10px] bg-white w-full transition-all duration-300 focus-within:ring-1 focus-within:ring-[#d40065] ring-gray-300 ring-1">
                <div class="w-4 h-4 flex shrink-0 mr-[4px]">
                    <img src="{{ asset('assets/images/icons/search.svg') }}" alt="icon">
                </div>
                <input type="text" name="cari" id="cari_kavling" class="w-full text-xs bg-white outline-none"
                    placeholder="Tuliskan nama lokasi" value="{{ request()->query('cari') }}">
                <button type="submit"
                    class="ml-2 flex justify-center rounded-full p-[6px_12px] bg-[#d40065] font-bold text-white hover:bg-black hover:text-white text-xs">Cari</button>
            </div>
        </form>
        <div class="relative">
            <button type="button" id="filter_button"
                class="p-2 bg-white border border-gray-300 rounded-md hover:border-[#d40065]">
                <img src="{{ asset('assets/images/icons/filter.svg') }}" alt="filter icon" class="w-5 h-5">
            </button>
            <div id="filter_dropdown"
                class="hidden absolute left-0 p-2 mt-2 w-40 text-sm text-black bg-white rounded-md border border-gray-300 shadow-lg">
                <a href="{{ route('affiliate.booking.index', ['filter' => 'terbaru']) }}"
                    class="block p-2 w-full text-left hover:bg-gray-200">
                    Listing Terbaru
                </a>
                <a href="{{ route('affiliate.booking.index', ['filter' => 'terlama']) }}"
                    class="block p-2 w-full text-left hover:bg-gray-200">Listing
                    Terlama
                </a>
            </div>
        </div>
    </div>

    <!-- Projects container where items will be loaded -->
    <div id="projects-container">
        @include('pages.affiliate.booking.itemProperti')
    </div>

    <!-- Skeleton loader (single item) -->
    <div id="skeleton-loader">
        @include('pages.affiliate.booking.skeletonLoader')
    </div>

    <!-- No more data message -->
    <div id="no-more-data">
        Semua properti telah ditampilkan
    </div>

    @include('includes.footerAgency')
@endsection

@push('addon-script')
    <script>
        // Typewriter effect for search placeholder
        timeout_var = null;

        function typeWriter(selector_target, text_list, placeholder = false, i = 0, text_list_i = 0, delay_ms = 200) {
            if (!i) {
                if (placeholder) {
                    document.querySelector(selector_target).placeholder = "";
                } else {
                    document.querySelector(selector_target).innerHTML = "";
                }
            }
            txt = text_list[text_list_i];
            if (i < txt.length) {
                if (placeholder) {
                    document.querySelector(selector_target).placeholder += txt.charAt(i);
                } else {
                    document.querySelector(selector_target).innerHTML += txt.charAt(i);
                }
                i++;
                setTimeout(typeWriter, delay_ms, selector_target, text_list, placeholder, i, text_list_i);
            } else {
                text_list_i++;
                if (typeof text_list[text_list_i] === "undefined") {
                    setTimeout(typeWriter, (delay_ms * 5), selector_target, text_list, placeholder);
                } else {
                    i = 0;
                    setTimeout(typeWriter, (delay_ms * 3), selector_target, text_list, placeholder, i, text_list_i);
                }
            }
        }

        text_list = [
            "Cari properti dengan nama lokasi. \"PAL\"",
            "Sungai Raya",
            "Serdam",
            "Punggur",
            "Rasau Jaya",
            "Pontianak",
            "Kubu Raya",
            "Singkawang",
            "Mempawah",
            "Sambas",
            "Cari properti dengan nama project. \"Parit Berkat\"",
            "Parit Rintis",
            "Parit Buluh",
        ];

        return_value = typeWriter("#cari_kavling", text_list, true);

        // Filter dropdown toggle
        document.getElementById('filter_button').addEventListener('click', function() {
            const filter = document.getElementById('filter_dropdown');
            filter.classList.toggle('hidden');
        });

        // Infinite scroll implementation
        let currentPage = 1;
        let isLoading = false;
        let hasMorePages = true;

        // Function to load more properties
        function loadMoreProjects() {
            if (isLoading || !hasMorePages) return;

            isLoading = true;
            document.getElementById('skeleton-loader').style.display = 'block';

            // Get current filters from URL
            const urlParams = new URLSearchParams(window.location.search);
            const filter = urlParams.get('filter') || '';
            const cari = urlParams.get('cari') || '';

            // Increment page
            currentPage++;

            // Fetch next page of projects
            fetch(`{{ route('affiliate.booking.index') }}?filter=${filter}&cari=${cari}&page=${currentPage}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Hide skeleton loader
                    document.getElementById('skeleton-loader').style.display = 'none';

                    // Append new projects to container
                    document.getElementById('projects-container').insertAdjacentHTML('beforeend', data.html);

                    // Check if there are more pages
                    hasMorePages = data.hasMorePages;

                    if (!hasMorePages) {
                        document.getElementById('no-more-data').style.display = 'block';
                    }

                    isLoading = false;
                })
                .catch(error => {
                    console.error('Error loading more projects:', error);
                    isLoading = false;
                    document.getElementById('skeleton-loader').style.display = 'none';
                });
        }

        // Detect when user scrolls near the bottom of the page
        window.addEventListener('scroll', function() {
            const scrollHeight = Math.max(
                document.body.scrollHeight, document.documentElement.scrollHeight,
                document.body.offsetHeight, document.documentElement.offsetHeight,
                document.body.clientHeight, document.documentElement.clientHeight
            );

            // Load more projects when user is 200px from bottom of page
            if (window.innerHeight + window.pageYOffset >= scrollHeight - 200) {
                loadMoreProjects();
            }
        });
    </script>
@endpush
