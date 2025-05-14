@extends('layouts.app')

@section('title')
    Cari Properti
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Content-Container"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
        <div id="Background"
            class="absolute top-0 w-full h-[300px] rounded-b-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
        </div>
        <div class="relative flex flex-col gap-[30px] my-[30px] px-5">
            <h1 class="font-bold text-[30px] leading-[45px] text-center text-white">Ayo Temukan<br>Properti Terbaik Kamu</h1>
            <form action="{{ route('findproperti') }}" method="GET"
                class="flex flex-col rounded-[30px] border border-[#F1F2F6] p-5 gap-6 bg-white">
                <div id="InputContainer" class="flex flex-col gap-[18px]">
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold text-sm">Nama Properti</p>
                        <label
                            class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/layer.svg') }}"
                                class="flex w-5 h-5 shrink-0" alt="icon">
                            <input type="text" name="nama" id="nama"
                                value="{{ old('nama', request()->query('nama')) }}"
                                class="w-full text-sm font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan nama properti">
                        </label>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold text-sm">Pilih Lokasi</p>
                        <label
                            class="relative flex items-center w-full rounded-full p-[10px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/location2.svg') }}"
                                class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0"
                                alt="icon">
                            <select name="lokasi" id="lokasi"
                                class="text-sm pl-8 w-full bg-white appearance-none outline-none">
                                <option value="" hidden>Pilih Lokasi</option>
                                @foreach ($lokasi as $data)
                                    <option value="{{ $data->regency_id }}"
                                        {{ old('lokasi', request()->query('lokasi')) == $data->regency_id ? 'selected' : '' }}>
                                        {{ $data->regency->name }}</option>
                                @endforeach
                            </select>
                            <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                        </label>
                    </div>

                    <button type="submit"
                        class="text-sm flex w-full justify-center rounded-full p-[10px_20px] bg-[#d40065] hover:bg-black hover:text-white font-bold text-white">Cari
                        Sekarang</button>
                </div>
            </form>

        </div>

        @include('includes.footer')

    </div>
@endsection


@push('addon-script')
    <script src="{{ asset('js/find-kos.js') }}"></script>

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

        return_value = typeWriter("#nama", text_list, true);
    </script>
@endpush
