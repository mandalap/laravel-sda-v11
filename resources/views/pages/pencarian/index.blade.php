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
        <div id="Background"
            class="absolute top-0 w-full h-[300px] rounded-b-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
        </div>
        <div class="relative flex flex-col gap-[30px] my-[30px] px-5">
            <h1 class="font-bold text-[30px] leading-[45px] text-center text-white">Ayo Temukan<br>Properti Terbaik Kamu</h1>
            <form action="{{ route('findproperti') }}" method="POST" class="flex flex-col rounded-[30px] border border-[#F1F2F6] p-5 gap-6 bg-white">
                @csrf
                <div id="InputContainer" class="flex flex-col gap-[18px]">
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Nama Properti</p>
                        <label
                            class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#058E2A] transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/note-favorite-grey.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan nama properti">
                        </label>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold">Pilih Lokasi</p>
                        <label
                            class="relative flex items-center w-full rounded-full p-[10px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#058E2A] transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/location.svg') }}"
                                class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0"
                                alt="icon">
                            <select name="lokasi" id="lokasi" class="pl-8 w-full bg-white appearance-none outline-none">
                                <option value="" hidden>Pilih Lokasi</option>
                                @forelse ($lokasi as $data)
                                <option value="{{ $data->regency_id }}" {{ old('lokasi') == $data->regency_id ? 'selected' : '' }}>{{ $data->regency->name }}</option>
                                @empty
                                <option>Tidak ada data</option>
                                @endforelse
                            </select>
                            <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                        </label>
                    </div>

                    <button type="submit"
                        class="flex w-full justify-center rounded-full p-[10px_20px] bg-[#d40065] hover:bg-black hover:text-white font-bold text-white">Cari Sekarang</button>
                </div>
            </form>
        </div>

        @include('includes.footer')

    </div>
@endsection


@push('addon-script')
<script src="{{ asset('js/find-kos.js') }}"></script>
@endpush
