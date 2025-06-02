@extends('layouts.app')

@section('title')
    Affiliate-Profil
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <!-- Top Nav Agency -->
    <x-top-nav-agency title="Profil Agency" back-route="affiliate.dashboard" />

    <form action="{{ route('affiliate.profile.update') }}" method="POST" enctype="multipart/form-data" class="relative flex flex-col px-5 mt-[30px]">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4 bg-white p-4 rounded-[30px] border border-[#F1F2F6]">
            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Sapaan</p>
                <label
                    class="relative flex items-center w-full rounded-full p-[14px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/user.svg') }}"
                        class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0" alt="icon">
                    <select name="sapaan" class="w-full pl-8 bg-white text-sm outline-none appearance-none">
                        <option value="" hidden>Pilih Sapaan</option>
                        <option value="Bang" {{ $agency->sapaan == 'Bang' ? 'selected' : '' }}>Bang</option>
                        <option value="Kak" {{ $agency->sapaan == 'Kak' ? 'selected' : '' }}>Kak</option>
                        <option value="Pak" {{ $agency->sapaan == 'Pak' ? 'selected' : '' }}>Pak</option>
                        <option value="Bu" {{ $agency->sapaan == 'Bu' ? 'selected' : '' }}>Bu</option>
                    </select>
                    <img src="{{ asset('/assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Nama</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/user.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="text" name="nama" value="{{ $agency->nama }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Nama">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Nomor WhatsApp</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/phone.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="tel" name="telepon" value="{{ $agency->telepon }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Nomor WhatsApp">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Jenis Kelamin</p>
                <label
                    class="relative flex items-center w-full rounded-full p-[14px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/gender.svg') }}"
                        class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0" alt="icon">
                    <select name="gender" class="w-full pl-8 bg-white text-sm outline-none appearance-none">
                        <option value="" hidden>Pilih Jenis Kelamin</option>
                        <option value="L" {{ $agency->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $agency->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <img src="{{ asset('/assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Email</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/mail.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="text" name="email" value="{{ $agency->email }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Email">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Asal Kota</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="kota_id" value="{{ $agency->kota_id }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Tempat Lahir">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Tanggal Lahir</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/calendar.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="date" name="tanggal_lahir" value="{{ $agency->tanggal_lahir }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Tanggal Lahir">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Alamat</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="alamat" value="{{ $agency->alamat }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Alamat">
                </label>
            </div>

            <label class="text-sm font-semibold">Foto Profil</label>
            <div class="flex flex-col w-full gap-5">
                <div>
                    @if ($agency->photo)
                        <img src="{{ asset('storage/' . $agency->photo) }}"
                            class="w-20 h-20 rounded-full border border-dark" alt="icon">
                    @else
                        <img src="{{ asset('/assets/images/icons/profil-default.png') }}"
                            class="w-20 h-20 rounded-full border border-dark" alt="Default photo">
                    @endif
                </div>
                <div>
                    <input type="file" name="photo" class="p-2 border rounded-lg">
                </div>
            </div>
            <button type="submit"
                class="text-sm flex w-full justify-center rounded-full p-[10px_20px] bg-[#d40065] hover:bg-black hover:text-white font-bold text-white">Simpan</button>
        </div>
    </form>
@endsection

@push('addon-script')
@endpush
