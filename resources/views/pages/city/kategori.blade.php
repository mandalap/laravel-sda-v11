@extends('layouts.app')

@section('title')
    Daftar Lokasi {{ $kategori->kategori }}
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="{{ $kategori->kategori }}" :backRoute="route('beranda')" :showBackground="true"
        textColor="text-custom-gray-10" />

    @if ($cities->isEmpty())
        @include('components.no-data')
    @else
        <section id="Store-list" class="flex flex-col gap-4 px-5">
            @foreach ($cities as $city)
                <a href="{{ route('lihatproperti', ['propertiKategori' => $kategori->slug, 'propertiCity' => $city->slug, 'filter' => 'none']) }}"
                    class="card z-10">
                    <div
                        class="flex flex-col gap-2 rounded-2xl ring-1 ring-custom-gray-40 pb-4 bg-custom-gray-10 overflow-hidden transition-all duration-300 hover:ring-1 hover:ring-primary">
                        <div class="w-full h-[120px] flex shrink-0 overflow-hidden relative">
                            <img src="{{ asset('storage/' . $city->thumbnail) }}" class="object-cover w-full h-full"
                                alt="thumbnail">
                            @if ($city->jumlah_produk_tersedia == 0)
                                <p
                                    class="rounded-full p-[6px_10px] bg-danger-main w-fit h-fit font-medium text-[10px] leading-[15px] text-custom-gray-10 absolute top-4 right-4">
                                    Habis
                                </p>
                            @else
                                <p
                                    class="rounded-full p-[6px_10px] bg-green-primary w-fit h-fit font-medium text-[10px] leading-[15px] text-custom-gray-10 absolute top-4 right-4">
                                    Tersedia
                                </p>
                            @endif
                        </div>
                        <div class="flex justify-between items-center px-3">
                            <div class="title flex flex-col gap-2">
                                <div class="flex gap-1 items-center">
                                    <h1 class="font-medium text-sm w-fit">{{ $city->regency->name }}</h1>
                                </div>
                                <p class="text-xs leading-[21px] text-custom-gray-80">{{ $city->province->name }}</p>
                            </div>
                            <div class="rating flex flex-col gap-2">
                                <div class="flex items-center justify-end text-right">
                                    <h1 class="font-medium text-sm w-fit">
                                        {{ $city->jumlah_project }} Properti
                                    </h1>
                                </div>
                                <div class="flex items-center justify-end text-right">
                                    <p class="text-xs leading-[21px] text-custom-gray-80">
                                        {{ $city->jumlah_produk_tersedia }} Unit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </section>
    @endif

    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
