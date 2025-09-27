@extends('layouts.app')

@section('title')
    Cari Properti
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Cari Properti" :showBackground="true" textColor="text-custom-gray-10" />

    <div class="relative flex flex-col px-5">
        <form action="{{ route('findproperti') }}" method="GET"
            class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-custom-gray-10">
            <div id="InputContainer" class="flex flex-col gap-4">
                <x-input-fieldv2 label="Nama Properti" name="nama" type="text" :value="old('nama', request()->query('nama'))"
                    icon="assets/images/icons/search-primary.png" />

                <x-input-fieldv2 label="Pilih Lokasi" name="lokasi" type="select" :value="old('lokasi', request()->query('lokasi'))"
                    placeholder="Pilih Lokasi" icon="assets/images/icons/map-primary.png" :options="collect($lokasi)->pluck('regency.name', 'regency_id')->toArray()" />

                <x-button-primary type="submit" :full-width="true">
                    Cari
                </x-button-primary>
            </div>
        </form>
    </div>

    @include('includes.footer')
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
