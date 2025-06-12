@extends('layouts.app')

@section('title')
    Affiliate - Transaksi
@endsection

@push('prepend-style')
@endpush

@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <!-- Top Nav Agency -->
    <x-top-nav-agency title="Transaksi" back-route="affiliate.dashboard" />

    @if ($transactions->isEmpty())
        @include('components.no-data')
    @else
        <div class="container px-3 sm:px-5 py-6 sm:py-10 z-50">
            <!-- Daftar Transaksi -->
            <div class="bg-white shadow-md rounded-[20px] p-3 sm:p-4">

                <!-- Desktop Table View -->
                <div class="hidden lg:block">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="px-3 py-3 font-semibold text-sm">Invoice</th>
                                    <th class="px-3 py-3 font-semibold text-sm">Product</th>
                                    <th class="px-3 py-3 font-semibold text-sm">Member</th>
                                    <th class="px-3 py-3 font-semibold text-sm">Jumlah Fee</th>
                                    <th class="px-3 py-3 font-semibold text-sm">Status</th>
                                    <th class="px-3 py-3 font-semibold text-sm">Tanggal Pengambilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="border-t hover:bg-gray-50">
                                        <td class="px-3 py-3 text-sm">{{ $transaction->bookingTransaction->invoice }}</td>
                                        <td class="px-3 py-3 text-sm">
                                            <div class="max-w-xs">
                                                <div class="font-medium">
                                                    {{ $transaction->bookingTransaction->product->nama_product }}</div>
                                                <div class="text-gray-500 text-xs">
                                                    {{ $transaction->bookingTransaction->product->project->nama_project }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-sm">{{ $transaction->bookingTransaction->member->nama }}
                                        </td>
                                        <td class="px-3 py-3 text-sm">
                                            Rp {{ number_format($transaction->jumlah_fee, 0, ',', '.') }}
                                        </td>
                                        <td class="px-3 py-3 text-sm">
                                            <span
                                                class="px-2 py-1 rounded-[10px] text-xs font-medium
                                            @if (strtolower($transaction->status) == 'diambil') bg-red-100 text-red-800
                                            @elseif(strtolower($transaction->status) == 'tersedia') bg-green-100 text-green-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                                {{ ucfirst($transaction->status) }}
                                            </span>
                                        </td>
                                        <td class="px-3 py-3 text-sm">
                                            @if ($transaction->tanggal_pengambilan)
                                                {{ \Carbon\Carbon::parse($transaction->tanggal_pengambilan)->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}
                                            @else
                                                <span class="text-gray-400">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Mobile Card View -->
                <div class="lg:hidden space-y-3">
                    @foreach ($transactions as $transaction)
                        <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                            <!-- Header Card -->
                            <div class="flex justify-between items-start mb-2">
                                <div class="flex-1">
                                    <div class="text-xs font-medium text-gray-600 mb-1">Invoice</div>
                                    <div class="text-sm font-semibold text-gray-900">
                                        {{ $transaction->bookingTransaction->invoice }}</div>
                                </div>
                                <div class="ml-2">
                                    <span
                                        class="px-2 py-1 rounded-[10px] text-xs font-medium
                                    @if (strtolower($transaction->status) == 'diambil') bg-red-100 text-red-800
                                    @elseif(strtolower($transaction->status) == 'tersedia') bg-green-100 text-green-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                        {{ ucfirst($transaction->status) }}
                                    </span>
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="mb-2">
                                <div class="text-xs font-medium text-gray-600 mb-1">Product</div>
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $transaction->bookingTransaction->product->nama_product }}</div>
                                <div class="text-xs text-gray-500">
                                    {{ $transaction->bookingTransaction->product->project->nama_project }}</div>
                            </div>

                            <!-- Member and Fee Row -->
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex-1">
                                    <div class="text-xs font-medium text-gray-600 mb-1">Member</div>
                                    <div class="text-sm text-gray-900">{{ $transaction->bookingTransaction->member->nama }}
                                    </div>
                                </div>
                                <div class="ml-3 text-right">
                                    <div class="text-xs font-medium text-gray-600 mb-1">Fee</div>
                                    <div class="text-sm">
                                        Rp {{ number_format($transaction->jumlah_fee, 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>

                            <!-- Date -->
                            @if ($transaction->tanggal_pengambilan)
                                <div class="pt-2 border-t border-gray-200">
                                    <div class="text-xs font-medium text-gray-600 mb-1">Tanggal Pengambilan</div>
                                    <div class="text-xs text-gray-900">
                                        {{ \Carbon\Carbon::parse($transaction->tanggal_pengambilan)->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>

                <!-- Pagination -->
                <div class="mt-6">
                    {{ $transactions->links() }}
                </div>
            </div>
        </div>

        @include('includes.footerAgency')
    @endif
@endsection

@push('addon-script')
@endpush
