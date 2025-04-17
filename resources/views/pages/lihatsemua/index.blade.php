@extends('layouts.app')

@section('title')
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
<style>
    #filter_dropdown {
    left: unset; /* Hapus posisi left yang sebelumnya */
    right: 0; /* Tempatkan dropdown di sisi kanan */
    transform: translateX(-10%); /* Geser dropdown ke kiri agar tidak keluar dari layar */
}
</style>
@endpush

@section('content')

<div id="Content-Container"
class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
    <div id="Background" class="absolute top-0 w-full h-[570px] rounded-bl-[30px] rounded-br-[30px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>
    <div id="TopNav" class="flex relative justify-between items-center px-5 pt-5">
        <a href="{{ route('beranda') }}"
            class="flex overflow-hidden justify-center items-center w-10 h-10 bg-white rounded-full shrink-0">
            <img src="{{asset('assets/images/icons/arrow-left.svg')}}" class="w-[28px] h-[28px]" alt="icon">
        </a>
        <h3 class="text-lg font-bold text-white">Semua Properti</h3>
        <div class="w-10 dummy-btn"></div>
    </div>
    <div id="Header" class="relative flex flex-col items-center gap-2 px-5 mt-[18px] text-center">
        <h1 class="font-bold text-[20px] leading-[30px] text-white">Properti {{ $kelompok->kelompok }}</h1>
        <p class="text-white">{{ $projectCount }} Project Ditemukan</p>
    </div>
    <div class="flex sticky top-0 z-50 gap-4 items-center px-5 py-2 mt-6 w-full bg-white shadow-md">

        <form action="" class="flex relative z-10 flex-row flex-grow items-center w-full">
            <div class="flex items-center rounded-full p-[6px_10px] bg-white w-full transition-all duration-300 focus-within:ring-1 focus-within:ring-[#d40065] ring-gray-300 ring-1">
                <div class="w-4 h-4 flex shrink-0 mr-[4px]">
                    <img src="{{ asset('assets/images/icons/search.svg') }}" alt="icon">
                </div>
                <input type="text" name="cari_kavling" id="cari_kavling" class="w-full text-xs bg-white outline-none" placeholder="Tuliskan nama lokasi" required>
                <button type="submit" class="ml-2 flex justify-center rounded-full p-[6px_12px] bg-[#d40065] font-bold text-white hover:bg-black hover:text-white text-xs">Cari</button>
            </div>
        </form>
        <div class="relative">
            <button type="button" id="filter_button"
                class="p-2 bg-white border border-gray-300 rounded-md hover:border-[#d40065]">
                <img src="{{ asset('assets/images/icons/filter.svg') }}" alt="filter icon" class="w-5 h-5">
            </button>
            <div id="filter_dropdown"
                class="hidden absolute left-0 p-2 mt-2 w-40 text-sm text-black bg-white rounded-md border border-gray-300 shadow-lg">
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'terbaru']) }}" class="block p-2 w-full text-left hover:bg-gray-200">
                    Listing Terbaru
                </a>
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'terlama']) }}" class="block p-2 w-full text-left hover:bg-gray-200">Listing
                    Terlama</a>
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'termurah']) }}" class="block p-2 w-full text-left hover:bg-gray-200">Harga
                    Termurah</a>
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'tertinggi']) }}" class="block p-2 w-full text-left hover:bg-gray-200">Harga
                    Termahal</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('filter_button').addEventListener('click', function() {
            const filter = document.getElementById('filter_dropdown');
            filter.classList.toggle('hidden');
        });

        function selectFilter(value) {
            console.log("Filter dipilih:", value); // Bisa diganti dengan logika lain
            document.getElementById('filter_dropdown').classList.add('hidden');
        }
    </script>

    @forelse ( $projects as $project )
    @php
        // Menghitung jumlah produk Tersedia untuk proyek saat ini
        $jumlahProdukTersedia = $project->project_product()->where('status', 'Tersedia')->count();
    @endphp

    <section id="Result" class="flex relative flex-col gap-4 px-5 mt-5 mb-3">
        <a href="" class="card">
            <div class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full" alt="">
                </div>
                <div class="flex flex-col gap-3 w-full">
                    <h3 class="text-sm font-semibold">{{ $project->nama_project }}</h3>
                    <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-xs text-ngekos-grey">{{ $project->lokasi->regency->name }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <p class="text-xs text-ngekos-grey">{{ $project->kategori->kategori }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/profile-2user.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                        <p class="text-sm text-ngekos-grey">Tersedia - {{ $jumlahProdukTersedia }} Properti </p>
                    </div>
                    <hr class="border-[#F1F2F6]">
                    @php
                        $harga = $project->project_product->min('harga');
                        $diskon = $project->project_product->min('discount'); // Asumsi diskon dalam persen
                        $harga_setelah_diskon = $harga - $diskon;

                        $hargaX = $project->project_product->max('harga');
                        $diskonX = $project->project_product->max('discount'); // Asumsi diskon dalam persen
                        $harga_setelah_diskonX = $hargaX - $diskonX;
                    @endphp
                    @if ($project->kategori->slug == 'tanah-kavling')
                    <div class="flex">
                        <p class="text-sm lg:text-lg font-semibold text-[#d40065]">{{ number_format($harga_setelah_diskon) }} </p>
                        <p class="px-1"> - </p>

                        <p class="text-sm lg:text-lg font-semibold text-[#d40065]"> {{ number_format($harga_setelah_diskonX) }}</p>
                    </div>
                    @else
                    <div class="flex">
                        <p class="text-sm lg:text-lg font-semibold text-[#d40065]">{{ number_format($harga_setelah_diskon) }}</p>
                        <p class="ml-2 text-xs font-semibold text-gray-500 line-through">{{ number_format($harga) }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </a>
    </section>
    @empty
        <p class="text-center">Tidak ada properti Tersedia</p>
    @endforelse
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
