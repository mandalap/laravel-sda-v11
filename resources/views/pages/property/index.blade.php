@extends('layouts.app')

@section('title')
    Daftar Properti
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route :title="$kategori ? $kategori->kategori : 'Semua Properti'" :backRoute="route('beranda')" :showBackground="true" textColor="text-custom-gray-10" />

    @livewire('property-list', [
        'kategori' => $kategori,
        'lokasiOptions' => $lokasiOptions,
    ])
@endsection


@push('addon-script')
@endpush
