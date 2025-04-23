@extends('layouts.app')

@section('title')
    Beranda
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <link href="{{ asset('counter.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[180px] rounded-bl-[30px] rounded-br-[30px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>

    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
        <div class="flex flex-col gap-1 text-white">
            <p>Halo Sahabat Investa,</p>
            <h1 class="font-bold text-sm leading-[20px] ">Temukan Property Impian Kamu</h1>
        </div>
        <a href="#" class="flex justify-center items-center w-20 h-20 overflow-hidden rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="w-[60px] h-[60px]" alt="icon">
        </a>
    </div>

    @if ($testimoniBanners->isNotEmpty())
        <section id="Testimonials" class="flex relative z-10 flex-col gap-3 px-4 mt-[20px] ">
            <!-- Landscape Testimonials -->
            <div>
                <div class="testimonial-landscape-container relative">
                    <div class="testimonial-landscape-swiper overflow-hidden w-full">
                        <div class="swiper-wrapper">
                            <!-- Loop untuk Menampilkan Gambar dari Database -->
                            @foreach ($testimoniBanners as $banner)
                                <div class="swiper-slide aspect-[360/120] flex shrink-0 rounded-[20px] overflow-hidden">
                                    <div
                                        class="w-[610px] h-[200px] rounded-[20px] overflow-hidden hover:border-[#d40065] transition-all duration-300">
                                        <!-- Menampilkan Gambar dari Storage -->
                                        <img src="{{ asset('storage/' . $banner->image) }}"
                                            class="w-full h-full object-cover rounded-[20px]" alt="testimonial">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Navigation arrows positioned on sides -->
                    <button
                        class="landscape-prev absolute left-1 top-1/2 transform -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center bg-white/80 rounded-full shadow-md">
                        <img src="{{ asset('assets/images/icons/left-arrow.svg') }}" class="w-5 h-5" alt="prev">
                    </button>

                    <button
                        class="landscape-next absolute right-1 top-1/2 transform -translate-y-1/2 z-10 w-8 h-8 flex items-center justify-center bg-white/80 rounded-full shadow-md">
                        <img src="{{ asset('assets/images/icons/right-arrow.svg') }}" class="w-5 h-5" alt="next">
                    </button>
                </div>
            </div>
        </section>
    @endif



    <section id="height" class="flex flex-col p-2 gap-4 bg-[#F5F6F8] mt-[30px]"></section>

    <div id="Feature" class="px-[18px] relative z-10">
        <div class="bg-white p-[18px_16px] rounded-xl overflow-hidden grid grid-cols-4 gap-[27px]">
            @forelse ($kategories as $kategori)
                <a href="{{ route('kategori', $kategori->slug) }}">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="{{ asset('storage/' . $kategori->icon) }}" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-center  text-xs text-[#757C98] leading-[21px]">{{ $kategori->kategori }}
                        </p>
                    </div>
                </a>
            @empty
            @endforelse

            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/folder.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center  text-xs text-[#757C98] leading-[21px]">Validasi Berkas</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/farmer.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center  text-xs text-[#757C98] leading-[21px]">Kelola Lahan</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/leader.png') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center  text-xs text-[#757C98] leading-[21px]">Daftar Agen</p>
                </div>
            </a>
            <a href="list-city.html">
                <div class="flex flex-col gap-2 items-center">
                    <div class="w-[40px] h-[40px] flex shrink-0">
                        <img src="{{ asset('assets/images/icons/handshake.svg') }}" class="object-cover" alt="icon">
                    </div>
                    <p class="font-medium text-center text-xs text-[#757C98] leading-[21px]">Kerja Sama</p>
                </div>
            </a>
        </div>
    </div>

    <section id="height" class="flex flex-col p-2 gap-4 bg-[#F5F6F8] mt-[30px]"></section>

    {{-- Popular --}}
    <section id="Popular" class="flex flex-col gap-4">
        <div class="flex justify-between items-center px-5 mt-5">
            <h2 class="text-sm font-bold">Properti Popular</h2>
            @if ($popularKelompok = $kelompoks->where('slug', 'popular')->first())
                <a
                    href="{{ route('lihatsemua', ['propertiType' => $popularKelompok->slug, 'propertiKategori' => 'all', 'filter' => 'none']) }}">
                    <div class="flex gap-1 items-center">
                        <span class="text-sm">Lihat Semua</span>
                        <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                    </div>
                </a>
            @endif
        </div>

        <div class="overflow-x-hidden gap-4 w-full swiper">
            <div class="swiper-wrapper">
                @forelse ($projects->filter(function($project) { return $project->kelompok->slug === 'popular'; }) as $popular)
                    <div class="swiper-slide !w-fit">
                        <a href="{{ route('detailproject', [$popular->jenis->slug, $popular->kategori->slug, $popular->slug]) }}"
                            class="card">
                            <div
                                class="flex flex-col w-[250px] shrink-0 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 gap-[10px] hover:border-[#d40065] text-black transition-all duration-300">
                                <div class="relative">
                                    <button
                                        class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                                        Turun Harga
                                    </button>
                                    <div class="flex w-full h-[150px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                                        <img src="{{ asset('storage/' . $popular->thumbnail) }}"
                                            class="object-cover w-full h-full"
                                            alt="{{ $popular->jenis->jenis }} {{ $popular->kategori->kategori }} {{ $popular->nama_project }} di {{ $popular->alamat_project }} - {{ $popular->lokasi->regency->name }}">
                                    </div>
                                </div>

                                <div class="flex flex-col gap-3">
                                    <h3 class="text-sm font-semibold">{{ $popular->nama_project }}</h3>
                                    <p class="text-sm text-ngekos-grey">{{ $popular->alamat_project }}</p>
                                    <hr class="border-[#F1F2F6]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/location.svg') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-xs text-ngekos-grey">{{ $popular->lokasi->regency->name }}</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/3dcube.svg') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-xs text-ngekos-grey">{{ $popular->kategori->kategori }}</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/profile-2user.svg') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-xs text-ngekos-grey">Tersisa
                                            {{ $popular->project_product->where('status', 'Tersedia')->count() }} Unit</p>
                                    </div>

                                    @php
                                        $harga = $popular->project_product->min('harga');
                                        $diskon = $popular->project_product->min('discount'); // Asumsi diskon dalam persen
                                        $harga_setelah_diskon = $harga - $diskon;
                                    @endphp

                                    <hr class="border-[#F1F2F6]">
                                    <div class="flex">
                                        <p class="text-sm lg:text-sm font-semibold text-[#d40065]">Rp
                                            {{ number_format($harga_setelah_diskon) }}</p>
                                        <p class="ml-2 text-xs font-semibold text-gray-500 line-through">Rp
                                            {{ number_format($harga) }}</p>
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
    {{-- End Popular --}}

    <section id="Cities" class="flex flex-col p-5 gap-4 bg-[#F5F6F8] mt-[30px]">
        <div class="flex justify-between items-center">
            <h2 class="text-sm font-bold">Pilihan Lokasi</h2>
            <a href="{{ route('lihatkota') }}">
                <div class="flex gap-1 items-center">
                    <span class="text-sm">Lihat Semua</span>
                    <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-6 h-6 shrink-0"
                        alt="icon">
                </div>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-4">
            @forelse ($cities as $city)
                <a href="{{ route('lihatproperti', ['propertiKategori' => 'all', 'propertiCity' => $city->slug, 'filter' => 'none']) }}"
                    class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-emerald-text-emerald-600 transition-all duration-300 hover:border-[#d40065] ">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="{{ asset('storage/' . $city->thumbnail) }}" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-[1px]">
                            <h3 class="text-xs"> {{ $city->regency->name }}</h3>
                            <p class="text-xs text-ngekos-grey"> {{ $city->project->count() }} Properti</p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="card">
                    <p class="text-center">Data belum Tersedia</p>
                </div>
            @endforelse

        </div>
    </section>

    {{-- Terbaik --}}
    <section id="Best" class="flex flex-col gap-4 px-5 mt-[30px] ">
        <div class="flex justify-between items-center">
            <h2 class="text-sm font-bold">Kavling Terbaik</h2>
            @if ($popularKelompok = $kelompoks->where('slug', 'terbaik')->first())
                <a
                    href="{{ route('lihatsemua', ['propertiType' => $popularKelompok->slug, 'propertiKategori' => 'tanah-kavling', 'filter' => 'none']) }}">
                    <div class="flex gap-1 items-center">
                        <span class="text-sm">Lihat Semua</span>
                        <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                    </div>
                </a>
            @endif
        </div>
        <div class="flex flex-col gap-4">
            @forelse ($projects->filter(function($project) { return $project->kelompok->slug === 'terbaik'; }) as $kavlingterbaik)
                <a href="{{ route('detailproject', [$kavlingterbaik->jenis->slug, $kavlingterbaik->kategori->slug, $kavlingterbaik->slug]) }}"
                    class="card">
                    <div
                        class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                        <div class="flex w-[150px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                            <div class="relative">
                                <button
                                    class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                                    Turun Harga
                                </button>
                                <img src="{{ asset('storage/' . $kavlingterbaik->thumbnail) }}"
                                    class="object-cover w-full h-full"
                                    alt="{{ $kavlingterbaik->jenis->jenis }} {{ $kavlingterbaik->kategori->kategori }} {{ $kavlingterbaik->nama_project }} di {{ $kavlingterbaik->alamat_project }} - {{ $kavlingterbaik->lokasi->regency->name }}">
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <h3 class="text-sm font-semibold">{{ $kavlingterbaik->nama_project }}</h3>
                            <p class="text-sm text-ngekos-grey">{{ $kavlingterbaik->alamat_project }}</p>
                            <hr class="border-[#F1F2F6]">
                            <div class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0"
                                    alt="icon">
                                <p class="text-xs text-ngekos-grey">{{ $kavlingterbaik->lokasi->regency->name }}</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex w-5 h-5 shrink-0"
                                    alt="icon">
                                <p class="text-xs text-ngekos-grey">{{ $kavlingterbaik->kategori->kategori }}</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/profile-2user.svg') }}"
                                    class="flex w-5 h-5 shrink-0" alt="icon">
                                <p class="text-xs text-ngekos-grey">Tersisa
                                    {{ $kavlingterbaik->project_product->where('status', 'Tersedia')->count() }}</p>
                            </div>
                            <hr class="border-[#F1F2F6]">
                            @php
                                $harga = $kavlingterbaik->project_product->min('harga');
                                $diskon = $kavlingterbaik->project_product->min('discount'); // Asumsi diskon dalam persen
                                $harga_setelah_diskon = $harga - $diskon;

                                $hargaX = $kavlingterbaik->project_product->max('harga');
                                $diskonX = $kavlingterbaik->project_product->max('discount'); // Asumsi diskon dalam persen
                                $harga_setelah_diskonX = $hargaX - $diskonX;
                            @endphp
                            @if ($kavlingterbaik->kategori->slug == 'tanah-kavling')
                                <div class="flex">
                                    <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                        {{ number_format($harga_setelah_diskon) }} </p>
                                    <p class="px-1"> - </p>

                                    <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                        {{ number_format($harga_setelah_diskonX) }}</p>
                                </div>
                            @else
                                <div class="flex">
                                    <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                        {{ number_format($harga_setelah_diskon) }}</p>
                                    <p class="ml-2 text-xs font-semibold text-gray-500 line-through">
                                        {{ number_format($harga) }}</p>
                                </div>
                            @endif

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
    {{-- End: Terbaik --}}

    <section id="Promo" class="relative z-10 flex flex-col gap-3 px-4 mt-6 bg-[#F5F6F8]">
        <h1 class="mt-3 text-sm font-semibold">Special Offers</h1>
        <a href="#">
            <div class="w-full aspect-[360/120] flex shrink-0 rounded-[20px] overflow-hidden mb-5">
                <img src="{{ asset('assets/images/thumbnails/banner.png') }}" class="object-cover w-full h-full"
                    alt="promo banner">
            </div>
        </a>
    </section>

    {{-- Rekomendasi --}}
    <section id="Rekomendasi" class="flex flex-col gap-4 mt-[30px] ">
        <div class="flex justify-between items-center px-5">
            <h2 class="text-sm font-bold">Hunian Rekomendasi</h2>
            @if ($popularKelompok = $kelompoks->where('slug', 'rekomendasi')->first())
                <a
                    href="{{ route('lihatsemua', ['propertiType' => $popularKelompok->slug, 'propertiKategori' => 'rumah', 'filter' => 'none']) }}">
                    <div class="flex gap-1 items-center">
                        <span class="text-sm">Lihat Semua</span>
                        <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                    </div>
                </a>
            @endif
        </div>
        <div class="overflow-x-hidden w-full swiper">
            <div class="swiper-wrapper">
                @forelse ($projects->filter(function($project) { return $project->kategori->slug === 'rumah'; })->filter(function($project) { return $project->kelompok->slug === 'rekomendasi'; }) as $rumahterbaik)
                    <div class="swiper-slide !w-fit">
                        <a href="{{ route('detailproject', [$rumahterbaik->jenis->slug, $rumahterbaik->kategori->slug, $rumahterbaik->slug]) }}"
                            class="card">
                            <div
                                class="flex flex-col w-[250px] shrink-0 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 gap-[10px] hover:border-[#d40065] text-black transition-all duration-300">
                                <div class="relative">
                                    <button
                                        class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                                        Turun Harga
                                    </button>
                                    <div
                                        class="flex w-full h-[150px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                                        <img src="{{ asset('storage/' . $rumahterbaik->thumbnail) }}"
                                            class="object-cover w-full h-full"
                                            alt="{{ $rumahterbaik->jenis->jenis }} {{ $rumahterbaik->kategori->kategori }} {{ $rumahterbaik->nama_project }} di {{ $rumahterbaik->alamat_project }} - {{ $rumahterbaik->lokasi->regency->name }}">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h3 class="text-sm font-semibold">
                                        {{ $rumahterbaik->nama_project }}
                                    </h3>
                                    <p class="text-sm text-ngekos-grey">{{ $rumahterbaik->alamat_project }}</p>
                                    <hr class="border-[#F1F2F6]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/location.svg') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-sm text-ngekos-grey">{{ $rumahterbaik->lokasi->regency->name }}</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/3dcube.svg') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-sm text-ngekos-grey">{{ $rumahterbaik->kategori->kategori }}</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/profile-2user.svg') }}"
                                            class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-sm text-ngekos-grey">Tersisa
                                            {{ $rumahterbaik->project_product->where('status', 'Tersedia')->count() }} Unit
                                        </p>
                                    </div>
                                    @php
                                        $harga = $rumahterbaik->project_product->min('harga');
                                        $diskon = $rumahterbaik->project_product->min('discount'); // Asumsi diskon dalam persen
                                        $harga_setelah_diskon = $harga - $diskon;
                                    @endphp
                                    <hr class="border-[#F1F2F6]">
                                    @php
                                        $harga = $rumahterbaik->project_product->min('harga');
                                        $diskon = $rumahterbaik->project_product->min('discount'); // Asumsi diskon dalam persen
                                        $harga_setelah_diskon = $harga - $diskon;

                                        $hargaX = $rumahterbaik->project_product->max('harga');
                                        $diskonX = $rumahterbaik->project_product->max('discount'); // Asumsi diskon dalam persen
                                        $harga_setelah_diskonX = $hargaX - $diskonX;
                                    @endphp
                                    @if ($rumahterbaik->kategori->slug == 'tanah-kavling')
                                        <div class="flex">
                                            <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                                {{ number_format($harga_setelah_diskon) }} </p>
                                            <p class="px-1"> - </p>

                                            <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                                {{ number_format($harga_setelah_diskonX) }}</p>
                                        </div>
                                    @else
                                        <div class="flex">
                                            <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                                {{ number_format($harga_setelah_diskon) }}</p>
                                            <p class="ml-2 text-xs font-semibold text-gray-500 line-through">
                                                {{ number_format($harga) }}</p>
                                        </div>
                                    @endif
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
    {{-- End: Rekomendasi --}}

    {{-- Counter --}}
    <section id="Counter" class="flex flex-cols p-5 gap-4 bg-[#F5F6F8] mt-[30px] justify-between">
        <!-- Block #1 -->
        <article class="flex flex-col items-center">
            <div class="flex justify-center items-center mb-6 w-14 h-14">
                <img src="{{ asset('assets/images/icons/estate-agent.svg') }}" class="object-cover" alt="icon">
            </div>
            <h2 class="text-center">
                <span
                    class="flex tabular-nums text-slate-900 text-2xl font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                    x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $properties }}]'">
                    <span class="supports-[counter-set]:sr-only">{{ $properties }}</span>+
                </span>
                <span
                    class="inline-flex mb-2 font-semibold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-indigo-300">Projects</span>
            </h2>
        </article>
        <!-- Block #2 -->
        <article class="flex flex-col items-center">
            <div class="flex justify-center items-center mb-6 w-14 h-14">
                <img src="{{ asset('assets/images/icons/property.svg') }}" class="object-cover" alt="icon">
            </div>
            <h2 class="text-center">
                <span
                    class="flex tabular-nums text-slate-900 text-2xl font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                    x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $products }}]'">
                    <span class="supports-[counter-set]:sr-only">{{ $products }}</span>+
                </span>
                <span
                    class="inline-flex mb-2 font-semibold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-indigo-300">Properties</span>
            </h2>
        </article>
        <!-- Block #3 -->
        <article>
            <div class="flex justify-center items-center mb-6 w-14 h-14">
                <img src="{{ asset('assets/images/icons/leader.png') }}" class="object-cover" alt="icon">
            </div>
            <h2>
                <span
                    class="flex tabular-nums text-slate-900 text-2xl font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                    x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $agency }}]'">
                    <span class="supports-[counter-set]:sr-only">{{ $agency }}</span>+
                </span>
                <span
                    class="inline-flex mb-2 font-semibold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-indigo-300">Agent</span>
            </h2>

        </article>
        <!-- Block #4 -->
        <article>
            <div class="flex justify-center items-center mb-6 w-14 h-14">
                <img src="{{ asset('assets/images/icons/group.svg') }}" class="object-cover" alt="icon">
            </div>
            <h2>
                <span
                    class="flex tabular-nums text-slate-900 text-2xl font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                    x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $members }}]'">
                    <span class="supports-[counter-set]:sr-only">{{ $members }}</span>+
                </span>
                <span
                    class="inline-flex mb-2 font-semibold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-indigo-300">Users</span>
            </h2>

        </article>
        <!-- End: Animated Number Counter -->
    </section>
    {{-- End: Counter --}}

    {{-- Terbaru --}}
    {{-- <section id="Listing" class="flex flex-col gap-4 px-5 mt-[30px]">
    <div class="flex justify-between items-center">
        <h2 class="text-sm font-bold">Listing Terbaru</h2>
        @if ($terbaruKelompok = $kelompoks->where('slug', 'terbaru')->first())
        <a href="{{ route('lihatsemua', ['propertiType' => $terbaruKelompok->slug, 'propertiKategori' => 'all']) }}">
            <div class="flex gap-1 items-center">
                <span class="text-sm">Lihat Semua</span>
                <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-6 h-6 shrink-0"
                    alt="icon">
            </div>
        </a>
        @endif
    </div>
    <div class="flex flex-col gap-4">
        @forelse ($projects->filter(function($project) { return $project->kelompok->slug === 'terbaru'; }) as $kavlingterbaru)
        <a href="{{ route('detailproject', [$kavlingterbaru->jenis->slug, $kavlingterbaru->kategori->slug, $kavlingterbaru->slug]) }}" class="card">
            <div class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                <div class="flex w-[150px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    <div class="relative">
                        <button class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                            Turun Harga
                        </button>
                        <img src="{{ asset('storage/' . $kavlingterbaru->thumbnail) }}" class="object-cover w-full h-full" alt="{{ $kavlingterbaru->jenis->jenis }} {{ $kavlingterbaru->kategori->kategori }} {{ $kavlingterbaru->nama_project }} di {{ $kavlingterbaru->alamat_project }} - {{ $kavlingterbaru->lokasi->regency->name }}">
                    </div>
                </div>
                <div class="flex flex-col gap-3 w-full">
                    <h3 class="text-sm font-semibold">{{ $kavlingterbaru->nama_project }}</h3>
                    <p class="text-sm text-ngekos-grey">{{ $kavlingterbaru->alamat_project }}</p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-xs text-ngekos-grey">{{ $kavlingterbaru->lokasi->regency->name }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <p class="text-xs text-ngekos-grey">Tersisa {{ $kavlingterbaru->project_product->where('status', 'Tersedia')->count() }}</p>
                    </div>
                    <hr class="border-[#F1F2F6]">
                    @php
                        $harga = $kavlingterbaru->project_product->min('harga');
                        $diskon = $kavlingterbaru->project_product->min('discount'); // Asumsi diskon dalam persen
                        $harga_setelah_diskon = $harga - $diskon;
                    @endphp
                    <div class="flex">
                        <p class="text-sm lg:text-lg font-semibold text-[#d40065]">{{ number_format($harga_setelah_diskon) }}</p>
                        <p class="ml-2 text-xs font-semibold text-gray-500 line-through">{{ number_format($harga) }}</p>
                    </div>
                </div>
            </div>
        </a>
        @empty
        @endforelse

    </div>
</section> --}}

<section id="Terbaru" class="flex flex-col gap-4 mt-[30px] ">
    <div class="flex justify-between items-center px-5">
        <h2 class="text-sm font-bold">Listing Terbaru</h2>
        @if($terbaruKelompok = $kelompoks->where('slug', 'terbaru')->first())
        <a href="{{ route('lihatsemua', ['propertiType' => $terbaruKelompok->slug, 'propertiKategori' => 'rumah', 'filter' => 'none']) }}">
            <div class="flex gap-1 items-center">
                <span class="text-sm">Lihat Semua</span>
                <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="flex w-6 h-6 shrink-0"
                    alt="icon">
            </div>
        </a>
        @endif
    </div>
    <div class="overflow-x-hidden w-full swiper">
        <div class="swiper-wrapper">
            @forelse ($projects->filter(function($project) { return $project->kelompok->slug === 'terbaru'; }) as $listingterbaru)
            <div class="swiper-slide !w-fit pb-[30px]">
                <a href="{{ route('detailproject', [$listingterbaru->jenis->slug, $listingterbaru->kategori->slug, $listingterbaru->slug]) }}" class="card">
                    <div
                        class="flex flex-col items-center w-[180px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center border border-[#F1F2F6] hover:border-[#d40065]">
                        <div class="flex shrink-0 overflow-hidden rounded-[30px]">
                            <img src="{{ asset('storage/' . $listingterbaru->thumbnail) }}" class="object-cover w-full h-full"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold text-sm">{{ $listingterbaru->nama_project }}</h3>
                            <p class="text-xs text-ngekos-grey">{{ $listingterbaru->lokasi->regency->name }}</p>
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

    @include('includes.footer')
@endsection

@push('addon-script')
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // Initialize Testimonial Swiper
        var testimonialSwiper = new Swiper('.testimonial-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 12,
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.testimonial-next',
                prevEl: '.testimonial-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 16,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            }
        });

        // Initialize Landscape Testimonial Swiper
        var landscapeSwiper = new Swiper('.testimonial-landscape-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 12,
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 4000, // Different timing from portrait for visual interest
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.landscape-next',
                prevEl: '.landscape-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
            }
        });
    </script>
@endpush
