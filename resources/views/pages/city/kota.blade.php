@extends('layouts.app')

@section('title')
    Lihat Semua Kota
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Pilihan Lokasi" :backRoute="route('beranda')" :showBackground="true" textColor="text-custom-gray-10" />

    <section id="Store-list" class="flex flex-col gap-4 px-5">
        @php
            // Menghitung jumlah produk Tersedia untuk setiap kota
            $citiesWithProductCount = $cities->map(function ($city) {
                $jumlahProdukTersedia = $city->project
                    ->flatMap(function ($project) {
                        return $project->project_product()->where('status', 'Tersedia')->get();
                    })
                    ->count();

                // Menambahkan jumlah produk Tersedia ke objek kota
                $city->jumlah_produk_Tersedia = $jumlahProdukTersedia;

                return $city;
            });

            // Mengurutkan kota berdasarkan jumlah produk Tersedia (descending)
            $sortedCities = $citiesWithProductCount->sortByDesc('jumlah_produk_Tersedia');
        @endphp

        @forelse ($sortedCities as $city)
            {{-- <a href="{{ route('properti', ['citiesType' => $city->slug]) }}" class="card"> --}}
            <a href="{{ route('lihatproperti', ['propertiKategori' => 'all', 'propertiCity' => $city->slug, 'filter' => 'none']) }}"
                class="card z-10">
                <div
                    class="flex flex-col gap-2 rounded-2xl ring-1 ring-custom-gray-40 pb-4 bg-custom-gray-10 overflow-hidden transition-all duration-300 hover:ring-1 hover:ring-primary">
                    <div class="w-full h-[120px] flex shrink-0 overflow-hidden relative">
                        <img src="{{ asset('storage/' . $city->thumbnail) }}" class="object-cover w-full h-full"
                            alt="thumbnail">
                        @if ($city->jumlah_produk_Tersedia == 0)
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
                                    {{ $city->project->count() }} Proyek
                                </h1>
                            </div>
                            <div class="flex items-center justify-end text-right">
                                <p class="text-xs leading-[21px] text-custom-gray-80">
                                    {{ $city->jumlah_produk_Tersedia }} Properti
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <p class="text-center">Data belum Tersedia</p>
        @endforelse
    </section>

    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
