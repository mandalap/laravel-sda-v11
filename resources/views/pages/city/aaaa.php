@extends('layouts.app')

@section('title')
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')

<div id="Content-Container"
class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
    <div id="Background" class="absolute top-0 w-full h-[570px] rounded-bl-[30px] rounded-br-[30px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>
    <div id="TopNav" class="relative flex items-center justify-between px-5 pt-5">
        <a href="{{ route('kategori', $kategori->slug) }}"
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{asset('assets/images/icons/arrow-left.svg')}}" class="w-[28px] h-[28px]" alt="icon">
        </a>
        <h3 class="text-lg font-bold text-white">List Properti</h3>
        <div class="w-10 dummy-btn"></div>
    </div>
    <div id="Header" class="relative flex flex-col items-center gap-2 px-5 mt-[18px] text-center">
        <h2 class="font-bold text-[20px] leading-[30px] text-white">{{ $city->regency->name }}</h2>
        <p class="text-white">{{ $city->project->count() }} Project Ditemukan</p>
    </div>
    <form action="" class="relative z-10 flex flex-col gap-6 mt-6">
        <div class="flex flex-col gap-2 px-4">
            <label for="Location" class="font-semibold text-white">Pencarian</label>
            <div class="rounded-full flex items-center p-[12px_16px] bg-white w-full transition-all duration-300 focus-within:ring-2 focus-within:ring-black">
                <div class="w-6 h-6 flex shrink-0 mr-[6px]">
                    <img src="{{ asset('assets/images/icons/search.svg') }}" alt="icon">
                </div>
                <input type="text" name="cari_kavling" id="cari_kavling" class="w-full text-sm bg-white outline-none" placeholder="Tuliskan nama lokasi Cth. Punggur, Sungai Raya Dalam Rasau" required>
                <button type="submit"
                        class="flex justify-center rounded-full p-[10px_20px] bg-[#d40065] font-bold text-white hover:bg-black hover:text-white text-sm">Cari</button>
            </div>
        </div>
    </form>

    @forelse ( $projects as $project )

        @php
            // Menghitung jumlah produk Tersedia untuk proyek saat ini
            $jumlahProdukTersedia = $project->project_product()->where('status', 'Tersedia')->count();
        @endphp

    <section id="Result" class="relative flex flex-col gap-4 px-5 mt-5 mb-3">
        <a href="{{ route('detailproject', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}" class="card">
            <div class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    <div class="relative">
                        <button class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                            Turun Harga
                        </button>
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full" alt="{{ $project->jenis->jenis }} {{ $project->kategori->kategori }} {{ $project->nama_project }} di {{ $project->alamat_project }} - {{ $project->lokasi->regency->name }}">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-3">
                    <h3 class="text-lg font-semibold ">{{ $project->nama_project }}</h3>
                    <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-xs text-ngekos-grey">{{ $city->regency->name }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-xs text-ngekos-grey">Tersedia - {{ $jumlahProdukTersedia }} Properti </p>
                    </div>
                    <hr class="border-[#F1F2F6]">
                    @php
                        $harga = $project->project_product->min('harga');
                        $diskon = $project->project_product->min('discount'); // Asumsi diskon dalam persen
                        $harga_setelah_diskon = $harga - $diskon;
                    @endphp
                    <div class="flex">
                        <p class="text-sm lg:text-lg font-semibold text-[#d40065]">Rp {{ number_format($harga_setelah_diskon) }}</p>
                        <p class="ml-2 text-[0.625rem] font-semibold text-gray-500 line-through">{{ number_format($harga) }}</p>
                    </div>
                </div>
            </div>
        </a>
    </section>
    @empty
        <p class="text-center">Tidak ada properti Tersedia</p>
    @endforelse

    @include('includes.footer')
</div>

@endsection

@push('addon-script')
<script>
    timeout_var = null;

    function typeWriter(selector_target, text_list, placeholder = false, i = 0, text_list_i = 0, delay_ms = 200) {
        if (!i) {
            if (placeholder) {
                document.querySelector(selector_target).placeholder = "";
            } else {
                document.querySelector(selector_target).innerHTML = "";
            }
        }
        txt = text_list[text_list_i];
        if (i < txt.length) {
            if (placeholder) {
                document.querySelector(selector_target).placeholder += txt.charAt(i);
            } else {
                document.querySelector(selector_target).innerHTML += txt.charAt(i);
            }
            i++;
            setTimeout(typeWriter, delay_ms, selector_target, text_list, placeholder, i, text_list_i);
        } else {
            text_list_i++;
            if (typeof text_list[text_list_i] === "undefined") {
                setTimeout(typeWriter, (delay_ms * 5), selector_target, text_list, placeholder);
            } else {
                i = 0;
                setTimeout(typeWriter, (delay_ms * 3), selector_target, text_list, placeholder, i, text_list_i);
            }
        }
    }

    text_list = [
        "Cari properti dengan nama lokasi. \"PAL\"",
        "Sungai Raya",
        "Serdam",
        "Punggur",
        "Rasau Jaya",
        "Pontianak",
        "Kubu Raya",
        "Singkawang",
        "Mempawah",
        "Sambas",
        "Cari properti dengan nama project. \"Parit Berkat\"",
        "Parit Rintis",
        "Parit Buluh",
    ];

    return_value = typeWriter("#cari_kavling", text_list, true);
</script>
@endpush


