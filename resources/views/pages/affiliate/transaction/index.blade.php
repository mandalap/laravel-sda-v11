@extends('layouts.app')

@section('title')
    Affiliate - Transaksi
@endsection

@push('prepend-style')
@endpush

@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Transaksi" textColor="text-custom-gray-10" :showBackground="true" :showAgencyProfile="true"
        :agencyData="auth()->user()" />

    @if ($transactions->isEmpty())
        @include('components.no-data')
    @else
        <div class="container z-10 relative px-5 mb-3">
            <div id="transaction-container" class="flex flex-col gap-5">
                @include('pages.affiliate.transaction.partials.transactionList', [
                    'transactions' => $transactions,
                ])
            </div>

            {{-- Skeleton Loading --}}
            <div id="skeleton-loader" class="hidden">
                @include('pages.affiliate.transaction.partials.skeletonLoader')
            </div>

            {{-- End of List Message --}}
            <div id="end-message" class="hidden text-center py-6">
                <p class="text-sm text-custom-gray-70">Semua transaksi telah dimuat</p>
            </div>
        </div>
    @endif

    @include('includes.footerAgency')
@endsection

@push('addon-script')
    <script>
        let currentPage = {{ $transactions->currentPage() }};
        let lastPage = {{ $transactions->lastPage() }};
        let isLoading = false;

        // Infinite Scroll Handler
        window.addEventListener('scroll', function() {
            // Jika sedang loading atau sudah halaman terakhir, skip
            if (isLoading || currentPage >= lastPage) {
                return;
            }

            // Check if user scrolled near bottom (200px before end)
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 200) {
                loadMoreTransactions();
            }
        });

        function loadMoreTransactions() {
            isLoading = true;

            // Show skeleton loader
            document.getElementById('skeleton-loader').classList.remove('hidden');

            // Increment page
            currentPage++;

            // AJAX Request
            fetch(`{{ route('affiliate.transaction.index') }}?page=${currentPage}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Hide skeleton loader
                    document.getElementById('skeleton-loader').classList.add('hidden');

                    if (data.html) {
                        // Append new transactions
                        document.getElementById('transaction-container').insertAdjacentHTML('beforeend', data.html);
                    }

                    // Update hasMorePages
                    if (!data.hasMorePages) {
                        document.getElementById('end-message').classList.remove('hidden');
                    }

                    lastPage = data.lastPage;
                    isLoading = false;
                })
                .catch(error => {
                    console.error('Error loading transactions:', error);
                    document.getElementById('skeleton-loader').classList.add('hidden');
                    isLoading = false;
                    currentPage--; // Rollback page increment on error
                });
        }
    </script>
@endpush
