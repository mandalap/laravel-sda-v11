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
<div id="Content-Container" class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
    <div id="Background" class="absolute top-0 w-full h-[300px] rounded-b-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]"></div>
    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
        <a href="{{ route('cari-properti') }}" class="flex overflow-hidden justify-center items-center w-10 h-10 bg-white rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[28px] h-[28px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Hasil Semua Pencarian</p>
        <div class="w-12 dummy-btn"></div>
    </div>
    <div id="Header" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
        <div class="flex flex-col gap-[6px]">
            <h1 class="font-bold text-[25px] leading-[48px] text-white">Hasil Pencarian</h1>
            <p class="text-white">Tersedia {{ $product->total() }} Properti</p>
        </div>
    </div>
    
    <!-- Property List Container -->
    <div id="property-list" class="flex relative flex-col gap-4 px-5 mt-5 mb-9">
        @include('pages.pencarian.partials.propertyList')
    </div>
    
    <!-- Loading Skeleton -->
    <div id="loading" class="hidden px-5">
        <div class="flex rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white mb-4">
            <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] skeleton"></div>
            <div class="flex flex-col gap-3 w-full">
                <div class="skeleton h-6 rounded-md w-3/4"></div>
                <div class="skeleton h-4 rounded-md w-1/2"></div>
                <hr class="border-[#F1F2F6]">
                <div class="flex items-center gap-[6px]">
                    <div class="skeleton w-5 h-5 rounded-full"></div>
                    <div class="skeleton h-4 rounded-md w-1/3"></div>
                </div>
                <div class="flex items-center gap-[6px]">
                    <div class="skeleton w-5 h-5 rounded-full"></div>
                    <div class="skeleton h-4 rounded-md w-1/4"></div>
                </div>
                <hr class="border-[#F1F2F6]">
                <div class="skeleton h-5 rounded-md w-2/5"></div>
            </div>
        </div>
    </div>
    
    <!-- Observer target for infinite scroll -->
    <div id="observer-target" class="h-10"></div>
</div>
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

                const response = await fetch('{{ route("findproperti") }}', {
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