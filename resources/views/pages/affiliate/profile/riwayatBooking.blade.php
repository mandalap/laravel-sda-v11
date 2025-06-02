@extends('layouts.app')

@section('title')
    Affiliate-Riwayat Booking
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
    <x-top-nav-agency title="Riwayat Booking" back-route="affiliate.dashboard" />
@endsection

@push('addon-script')
@endpush
