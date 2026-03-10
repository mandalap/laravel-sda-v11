@extends('layouts.app')

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
    <x-navigation-route :title="$pageTitle" :backRoute="route('beranda')" :showBackground="true" textColor="text-custom-gray-10" />

    @livewire('property-list', [
        'lokasiOptions' => $lokasiOptions,
        'kategoriOptions' => $kategoriOptions,
        'kelompokOptions' => $kelompokOptions,
        'preKategoriIds' => $preKategoriIds ?? [],
        'preKelompokId' => $preKelompokId ?? null,
    ])
@endsection
