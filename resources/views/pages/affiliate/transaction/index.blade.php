@extends('layouts.app')

@section('title')
    Affiliate-Transaksi
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

    @include('includes.footerAgency')

@endsection

@push('addon-script')
@endpush
