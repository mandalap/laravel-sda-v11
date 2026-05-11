@extends('layouts.app')

@section('title')
    Affiliate-Booking
@endsection

@section('content')
    <x-navigation-route title="Booking" textColor="text-custom-gray-10" :showBackground="true" :showAgencyProfile="true"
        :agencyData="auth()->user()" />

    @livewire('property-list', [
        'mode' => 'booking',
        'kategoriOptions' => $kategoriOptions,
        'lokasiOptions' => $lokasiOptions,
    ])

    @include('includes.footerAgency')
@endsection
