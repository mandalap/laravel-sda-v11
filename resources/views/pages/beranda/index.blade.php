@extends('layouts.app')

@section('title')
    Beranda
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <link href="{{ asset('counter.css') }}" rel="stylesheet">
    <style>
        .swiper-pagination-bullet-active {
            background: white !important;
            transform: scale(1.2);
        }
    </style>
@endpush

@section('content')
    <div id="Background" class="absolute top-0 w-full h-[190px] bg-gradient-to-t from-secondary to-primary"></div>

    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
        <div class="flex flex-col gap-1 text-white">
            <h1 class="text-xl font-semibold">Halo Sahabat Investa,</h1>
            <h1 class="text-sm leading-[20px]">Temukan Property Impian Kamu</h1>
        </div>
        <a href="#" class="flex justify-center items-center h-19 overflow-hidden rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="w-[48px] h-[54px]" alt="icon">
        </a>
    </div>

    @if ($promoBanners->isNotEmpty())
        <section id="Promo" class="flex relative flex-col gap-3 mt-[20px]">
            <div>
                <div class="banner-landscape-container relative">
                    <div class="swiper-banner overflow-hidden w-full">
                        <div class="swiper-wrapper">
                            @foreach ($promoBanners as $banner)
                                <div
                                    class="swiper-slide !w-[calc(100%-3rem)] md:!w-[450px] lg:!w-[550px] flex shrink-0 rounded-[20px] overflow-hidden aspect-[353/171]">
                                    <a href="{{ $banner->redirect_url }}"
                                        class="w-full h-full rounded-[20px] overflow-hidden hover:border-primary transition-all duration-300">
                                        <img src="{{ asset('storage/' . $banner->image) }}"
                                            class="w-full h-full object-cover rounded-[20px]" alt="promo">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <div id="Feature" class="px-[20px] mt-[18px] relative z-10">
        <div class="bg-white p-4 rounded-2xl border border-custom-gray-40 overflow-hidden grid grid-cols-4 gap-x-3 gap-y-4">
            @forelse ($kategories as $kategori)
                <a href="{{ route('properti.index', $kategori->slug) }}">
                    <div class="flex flex-col items-center gap-1">
                        <div class="w-9 h-9 flex shrink-0">
                            <img src="{{ asset('storage/' . $kategori->icon) }}" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-center text-xs text-custom-gray-90 leading-[21px]">
                            {{ $kategori->kategori }}
                        </p>
                    </div>
                </a>
            @empty
            @endforelse

            <a href="{{ route('sajada.berdasi') }}">
                <div class="flex flex-col items-center gap-1">
                    <div class="w-9 h-9 flex shrink-0">
                        <img src="{{ asset('assets/images/icons/berdasi.png') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center text-xs text-custom-gray-90 leading-[21px]">Pemberkasan</p>
                </div>
            </a>
            <a href="{{ route('sajada.jaksel') }}">
                <div class="flex flex-col items-center gap-1">
                    <div class="w-9 h-9 flex shrink-0">
                        <img src="{{ asset('assets/images/icons/jaksel.png') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center text-xs text-custom-gray-90 leading-[21px]">Kelola Lahan</p>
                </div>
            </a>
            <a href="{{ route('affiliate.index') }}">
                <div class="flex flex-col items-center gap-1">
                    <div class="w-9 h-9 flex shrink-0">
                        <img src="{{ asset('assets/images/icons/agen.png') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center text-xs text-custom-gray-90 leading-[21px]">Daftar Agen</p>
                </div>
            </a>
            <a href="{{ route('developer.index') }}">
                <div class="flex flex-col items-center gap-1">
                    <div class="w-9 h-9 flex shrink-0">
                        <img src="{{ asset('assets/images/icons/kerja-sama.png') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center text-xs text-custom-gray-90 leading-[21px]">Developer</p>
                </div>
            </a>
        </div>
    </div>

    <section id="Popular" class="flex flex-col mt-5 gap-3">
        <div class="flex justify-between items-center px-5">
            <h2 class="text-base font-semibold text-custom-gray-100">Properti Populer</h2>
            @if ($popularKelompok = $kelompoks->where('slug', 'popular')->first())
                <a
                    href="{{ route('lihatsemua', ['propertiType' => $popularKelompok->slug, 'propertiKategori' => 'all', 'filter' => 'none']) }}">
                    <div class="flex gap-1 items-center">
                        <span class="text-sm text-primary">Lihat Semua</span>
                        <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-4 h-4 shrink-0"
                            alt="icon">
                    </div>
                </a>
            @endif
        </div>

        <div class="overflow-x-hidden gap-4 w-full swiper">
            <div class="swiper-wrapper">
                @forelse ($projects->filter(fn($project) => $project->kelompok->slug === 'popular') as $popular)
                    <div class="swiper-slide !w-fit">
                        <a href="{{ route('detailproject', [$popular->jenis->slug, $popular->kategori->slug, $popular->slug]) }}"
                            class="card">
                            <div
                                class="flex flex-col w-[250px] shrink-0 rounded-2xl border border-custom-gray-40 p-3 gap-[10px] hover:border-primary text-black transition-all duration-300">
                                <div class="relative">
                                    <div class="flex w-full h-[180px] shrink-0 rounded bg-[#D9D9D9] overflow-hidden">
                                        <img src="{{ asset('storage/' . $popular->thumbnail) }}"
                                            class="object-cover w-full h-full"
                                            alt="{{ $popular->jenis->jenis }} {{ $popular->kategori->kategori }} {{ $popular->nama_project }} di {{ $popular->alamat_project }} - {{ $popular->lokasi->regency->name }}">
                                    </div>
                                    <x-project-availability-badge :project="$popular" />
                                </div>

                                <div class="flex flex-col gap-1">
                                    <h3 class="text-sm font-medium text-custom-gray-100">{{ $popular->nama_project }}</h3>
                                    <p class="text-xs text-custom-gray-70">
                                        {{ \Illuminate\Support\Str::limit($popular->alamat_project, 35) }}</p>
                                </div>

                                <hr class="border-custom-gray-30">

                                <div class="flex flex-col gap-1.5">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/location2.png') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70">{{ $popular->lokasi->regency->name }}</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/category.png') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70">{{ $popular->kategori->kategori }}</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/layer.png') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70">
                                            Tersisa {{ $popular->project_product->where('status', 'Tersedia')->count() }}
                                            Unit
                                        </p>
                                    </div>
                                </div>

                                <hr class="border-custom-gray-30">

                                <div class="flex">
                                    <div class="flex items-center">
                                        <div>
                                            {!! $popular->getPriceDisplay() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="flex justify-between items-center px-5">
                        <h2 class="text-sm">Properti belum tersedia</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="Cities" class="flex flex-col p-5 gap-3 ">
        <div class="flex justify-between items-center">
            <h2 class="text-base font-semibold text-custom-gray-100">Pilihan Lokasi</h2>
            <a href="{{ route('lihatkota') }}">
                <div class="flex gap-1 items-center">
                    <span class="text-sm text-primary">Lihat Semua</span>
                    <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-4 h-4 shrink-0"
                        alt="icon">
                </div>
            </a>
        </div>

        <div class="grid grid-cols-2 gap-5">
            @forelse ($cities as $city)
                <a href="{{ route('lihatproperti', ['propertiKategori' => 'all', 'propertiCity' => $city->slug, 'filter' => 'none']) }}"
                    class="card">
                    <div
                        class="flex items-center rounded-lg p-2 gap-1.5 bg-white border border-custom-gray-40 overflow-hidden transition-all duration-300 hover:border-primary">
                        <div class="w-[47px] h-[47px] flex shrink-0 rounded-[4px] overflow-hidden">
                            <img src="{{ asset('storage/' . $city->thumbnail) }}" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col">
                            <h3 class="font-medium text-xs">{{ $city->regency->name }}</h3>
                            <p class="text-[10px] text-custom-gray-70">{{ $city->project_count }} Properti</p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="card">
                    <p class="text-center">Data belum tersedia</p>
                </div>
            @endforelse
        </div>
    </section>

    <section id="Best" class="flex flex-col gap-4">
        <div class="flex justify-between items-center px-5">
            <h2 class="text-base font-semibold text-custom-gray-100">Kavling Terbaik</h2>
            @if ($popularKelompok = $kelompoks->where('slug', 'terbaik')->first())
                <a
                    href="{{ route('lihatsemua', ['propertiType' => $popularKelompok->slug, 'propertiKategori' => 'tanah-kavling', 'filter' => 'none']) }}">
                    <div class="flex gap-1 items-center">
                        <span class="text-sm text-primary">Lihat Semua</span>
                        <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-4 h-4 shrink-0"
                            alt="icon">
                    </div>
                </a>
            @endif
        </div>

        <div class="flex flex-col gap-3 px-5">
            @forelse ($tanahKavlingTerbaik as $kavlingterbaik)
                <a href="{{ route('detailproject', [$kavlingterbaik->jenis->slug, $kavlingterbaik->kategori->slug, $kavlingterbaik->slug]) }}"
                    class="card">
                    <div
                        class="flex flex-row gap-[10px] rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 items-center">
                        <div
                            class="relative w-40 sm:w-40 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                            <img src="{{ asset('storage/' . $kavlingterbaik->thumbnail) }}"
                                class="w-full h-full object-contain" alt="{{ $kavlingterbaik->nama_project }}">
                            <x-project-availability-badge :project="$kavlingterbaik" />
                        </div>

                        <div class="flex flex-col gap-1 flex-1 min-h-0">
                            <div class="flex flex-col gap-1">
                                <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                                    {{ $kavlingterbaik->nama_project }}
                                </h3>
                                <p class="text-xs text-custom-gray-70 line-clamp-1">{{ $kavlingterbaik->alamat_project }}
                                </p>
                            </div>

                            <hr class="border-custom-gray-30 my-1">

                            <div class="flex flex-col gap-[6px]">
                                <div class="flex items-center gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/location2.png') }}"
                                        class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 line-clamp-1">
                                        {{ $kavlingterbaik->lokasi->regency->name }}
                                    </p>
                                </div>
                                <div class="flex items-center gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/category.png') }}"
                                        class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">
                                        {{ $kavlingterbaik->kategori->kategori }}</p>
                                </div>
                                <div class="flex items-center gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/layer.png') }}"
                                        class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">
                                        Tersisa
                                        {{ $kavlingterbaik->project_product->where('status', 'Tersedia')->count() }} Unit
                                    </p>
                                </div>
                            </div>

                            <hr class="border-custom-gray-30 my-1">

                            <div class="flex items-center">
                                <p class="text-sm font-semibold text-primary">
                                    {!! $kavlingterbaik->getPriceDisplay() !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="flex justify-between items-center px-5">
                    <h2 class="text-sm">Properti belum tersedia</h2>
                </div>
            @endforelse
        </div>
    </section>

    @if ($testimoniBanners->isNotEmpty())
        <section id="Testimonials" class="flex relative z-10 flex-col gap-3 mt-[20px]">
            <div>
                <div class="banner-landscape-container relative">
                    <div class="swiper-banner overflow-hidden w-full">
                        <div class="swiper-wrapper">
                            @foreach ($testimoniBanners as $banner)
                                <div
                                    class="swiper-slide !w-[calc(100%-3rem)] md:!w-[450px] lg:!w-[550px] flex shrink-0 rounded-[20px] overflow-hidden aspect-[353/171]">
                                    <div
                                        class="w-full h-full rounded-[20px] overflow-hidden hover:border-primary transition-all duration-300">
                                        <img src="{{ asset('storage/' . $banner->image) }}"
                                            class="w-full h-full object-cover rounded-[20px]" alt="testimonial">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section id="Rekomendasi" class="flex flex-col gap-4 mt-5">
        <div class="flex justify-between items-center px-5">
            <h2 class="text-base font-semibold text-custom-gray-100">Hunian Rekomendasi</h2>
            @if ($popularKelompok = $kelompoks->where('slug', 'rekomendasi')->first())
                <a
                    href="{{ route('lihatsemua', ['propertiType' => $popularKelompok->slug, 'propertiKategori' => 'rumah', 'filter' => 'none']) }}">
                    <div class="flex gap-1 items-center">
                        <span class="text-sm text-primary">Lihat Semua</span>
                        <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-4 h-4 shrink-0"
                            alt="icon">
                    </div>
                </a>
            @endif
        </div>
        <div class="flex flex-col gap-3 px-5">
            @forelse ($hunianRekomendasi as $hunianRekomendasi)
                <a href="{{ route('detailproject', [$hunianRekomendasi->jenis->slug, $hunianRekomendasi->kategori->slug, $hunianRekomendasi->slug]) }}"
                    class="card">
                    <div
                        class="flex flex-row gap-[10px] rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 items-center">
                        <div
                            class="relative w-40 sm:w-40 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                            <img src="{{ asset('storage/' . $hunianRekomendasi->thumbnail) }}"
                                class="w-full h-full object-contain" alt="{{ $hunianRekomendasi->nama_project }}">
                            <x-project-availability-badge :project="$hunianRekomendasi" />
                        </div>

                        <div class="flex flex-col gap-1 flex-1 min-h-0">
                            <div class="flex flex-col gap-1">
                                <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                                    {{ $hunianRekomendasi->nama_project }}
                                </h3>
                                <p class="text-xs text-custom-gray-70 line-clamp-1">
                                    {{ $hunianRekomendasi->alamat_project }}
                                </p>
                            </div>

                            <hr class="border-custom-gray-30 my-1">

                            <div class="flex flex-col gap-[6px]">
                                <div class="flex items-center gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/location2.png') }}"
                                        class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">
                                        {{ $hunianRekomendasi->lokasi->regency->name }}
                                    </p>
                                </div>
                                <div class="flex items-center gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/category.png') }}"
                                        class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">
                                        {{ $hunianRekomendasi->kategori->kategori }}</p>
                                </div>
                                <div class="flex items-center gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/layer.png') }}"
                                        class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">
                                        Tersisa
                                        {{ $hunianRekomendasi->project_product->where('status', 'Tersedia')->count() }}
                                        Unit
                                    </p>
                                </div>
                            </div>

                            <hr class="border-custom-gray-30 my-1">

                            <div class="flex items-center">
                                <p class="text-sm font-semibold text-primary">
                                    {!! $hunianRekomendasi->getPriceDisplay() !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="flex justify-between items-center">
                    <h2 class="text-sm">Properti belum tersedia</h2>
                </div>
            @endforelse
        </div>
    </section>

    <div class="counter-wrapper mt-5">
        <section id="Counter" class="flex flex-cols p-5 gap-3 justify-between bg-gray-100">
            <article class="flex flex-col items-center">
                <div class="flex justify-center items-center mb-6 w-14 h-14">
                    <img src="{{ asset('assets/images/icons/estate-agent.svg') }}" class="object-cover" alt="icon">
                </div>
                <h2 class="text-center">
                    <div class="flex items-center justify-center mb-2">
                        <span class="tabular-nums text-secondary text-base font-bold counter-number"
                            data-target="{{ $properties }}">0</span>
                        <span class="text-secondary text-base font-bold">+</span>
                    </div>
                    <span class="inline-flex font-medium text-sm text-custom-gray-100">Properti</span>
                </h2>
            </article>

            <article class="flex flex-col items-center">
                <div class="flex justify-center items-center mb-6 w-14 h-14">
                    <img src="{{ asset('assets/images/icons/property.svg') }}" class="object-cover" alt="icon">
                </div>
                <h2 class="text-center">
                    <div class="flex items-center justify-center mb-2">
                        <span class="tabular-nums text-secondary text-base font-bold counter-number"
                            data-target="{{ $products }}">0</span>
                        <span class="text-secondary text-base font-bold">+</span>
                    </div>
                    <span class="inline-flex font-medium text-sm text-custom-gray-100">Produk</span>
                </h2>
            </article>

            <article class="flex flex-col items-center">
                <div class="flex justify-center items-center mb-6 w-14 h-14">
                    <img src="{{ asset('assets/images/icons/leader.png') }}" class="object-cover" alt="icon">
                </div>
                <h2 class="text-center">
                    <div class="flex items-center justify-center mb-2">
                        <span class="tabular-nums text-secondary text-base font-bold counter-number"
                            data-target="{{ $agency }}">0</span>
                        <span class="text-secondary text-base font-bold">+</span>
                    </div>
                    <span class="inline-flex font-medium text-sm text-custom-gray-100">Agen</span>
                </h2>
            </article>

            <article class="flex flex-col items-center">
                <div class="flex justify-center items-center mb-6 w-14 h-14">
                    <img src="{{ asset('assets/images/icons/group.svg') }}" class="object-cover" alt="icon">
                </div>
                <h2 class="text-center">
                    <div class="flex items-center justify-center mb-2">
                        <span class="tabular-nums text-secondary text-base font-bold counter-number"
                            data-target="{{ $members }}">0</span>
                        <span class="text-secondary text-base font-bold">+</span>
                    </div>
                    <span class="inline-flex font-medium text-sm text-custom-gray-100">Pengguna</span>
                </h2>
            </article>
        </section>
    </div>

    <div class="counter-wrapper mt-5">
        <section id="PartnerKerjasama" class="flex flex-col gap-3 p-4 bg-primary">
            <div class="flex justify-center w-full">
                <p class="text-center text-custom-gray-10 text-base font-semibold">
                    Partner Kerjasama Kami
                </p>
            </div>

            <div class="partner-swiper-container overflow-hidden w-full">
                <div class="partner-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex items-center justify-center">
                            <div class="w-[80px] h-[80px] bg-white rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('assets/images/photos/riil-property.png') }}"
                                    class="w-full h-full object-contain" alt="Riil Property">
                            </div>
                        </div>
                        <div class="swiper-slide flex items-center justify-center">
                            <div class="w-[80px] h-[80px] bg-white rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('assets/images/photos/erka-land.png') }}"
                                    class="w-full h-full object-contain" alt="Erka Land">
                            </div>
                        </div>
                        <div class="swiper-slide flex items-center justify-center">
                            <div class="w-[80px] h-[80px] bg-white rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('assets/images/photos/baiti-land.png') }}"
                                    class="w-full h-full object-contain" alt="Baiti Land">
                            </div>
                        </div>
                        <div class="swiper-slide flex items-center justify-center">
                            <div class="w-[80px] h-[80px] bg-white rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('assets/images/photos/munzalan.png') }}"
                                    class="w-full h-full object-contain" alt="Munzalan">
                            </div>
                        </div>
                        <div class="swiper-slide flex items-center justify-center">
                            <div class="w-[80px] h-[80px] bg-white rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('assets/images/photos/sajada.png') }}"
                                    class="w-full h-full object-contain" alt="Sajada">
                            </div>
                        </div>
                        <div class="swiper-slide flex items-center justify-center">
                            <div class="w-[80px] h-[80px] bg-white rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('assets/images/photos/propertimu.png') }}"
                                    class="w-full h-full object-contain" alt="Propertimu">
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>


    @include('includes.footer')
@endsection

@push('addon-script')
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var landscapeSwiper = new Swiper('.swiper-banner', {
                slidesPerView: 'auto',
                spaceBetween: 12,
                grabCursor: true,
                loop: true,
                centeredSlides: false,
                slidesOffsetBefore: 20,
                slidesOffsetAfter: 20,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    type: 'bullets',
                    dynamicBullets: true,
                },
                keyboard: {
                    enabled: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 'auto',
                        spaceBetween: 12,
                    },
                    768: {
                        slidesPerView: 'auto',
                        spaceBetween: 12,
                    },
                    1024: {
                        slidesPerView: 'auto',
                        spaceBetween: 16,
                    },
                }
            });

            function updateFraction(swiper) {
                const fractionElement = document.querySelector('.testimonial-fraction');
                if (fractionElement) {
                    const activeIndex = swiper.realIndex + 1;
                    const totalSlides = document.querySelectorAll(
                        '.swiper-banner .swiper-slide:not(.swiper-slide-duplicate)').length;
                    fractionElement.textContent = `${activeIndex}/${totalSlides}`;
                }
            }

            landscapeSwiper.a11y.enable();
        });

        document.addEventListener('DOMContentLoaded', function() {
            var partnerSwiper = new Swiper('.partner-swiper', {
                slidesPerView: 4,
                spaceBetween: 8,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                speed: 1000,
                breakpoints: {
                    320: {
                        slidesPerView: 4,
                        spaceBetween: 8,
                    },
                    480: {
                        slidesPerView: 4,
                        spaceBetween: 8,
                    },
                    640: {
                        slidesPerView: 5,
                        spaceBetween: 8,
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function animateCounter(element, target) {
                let current = 0;
                const increment = target / 100; // Adjust speed by changing divisor
                const duration = 2000; // 2 seconds
                const stepTime = duration / 100;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.textContent = Math.floor(current);
                }, stepTime);
            }

            // Intersection Observer for triggering animation when visible
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(entry.target.getAttribute('data-target'));
                        animateCounter(entry.target, target);
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            // Observe all counter elements
            const counters = document.querySelectorAll('.counter-number');
            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
@endpush
