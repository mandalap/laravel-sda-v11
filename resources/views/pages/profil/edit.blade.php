@extends('layouts.app')

@section('title')
    Detail Profil
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush


@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[60px]">
        <a href="{{ route('profil') }}"
            class="flex overflow-hidden justify-center items-center w-12 h-12 bg-white rounded-full shrink-0">
            <img src="assets/images/icons/arrow-left.svg" class="w-[28px] h-[28px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Edit Profil</p>
        <div class="w-12 dummy-btn"></div>
    </div>

    <div id="Header" class="relative flex gap-2 px-5 mt-[18px]">
        <div class="flex flex-col">
            @if (Auth::user()->thumbnail)
                <img src="{{ asset('storage/' . Auth::user()->thumbnail) }}"
                    class="w-20 h-20 rounded-full border border-dark" alt="icon">
            @else
                <img src="{{ asset('/new/assets/images/icons/Default-User.png') }}"
                    class="w-20 h-20 rounded-full border border-dark" alt="Default thumbnail">
            @endif
        </div>
        <button class="flex flex-col ml-4 shrink-0">
            <h1 class="font-bold text-[32px] leading-[48px] text-white">{{ Auth::user()->nama }}</h1>
            <p class="text-white">{{ Auth::user()->telepon }}</p>
        </button>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
        class="relative flex flex-col px-5 mt-[18px]">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4 bg-white p-4 rounded-[30px] border border-[#F1F2F6]">
            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Nama</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/profile-2user.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="nama" value="{{ Auth::user()->nama }}"
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Nama">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Nomor WhatsApp</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/call.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="number" name="telepon" value="{{ Auth::user()->telepon }}"
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Nomor WhatsApp">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Jenis Kelamin</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/profile-2user.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <select name="gender" class="pl-8 w-full bg-white appearance-none outline-none">
                        <option value="" hidden>Pilih Jenis Kelamin</option>
                        <option value="L" {{ Auth::user()->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ Auth::user()->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <img src="{{ asset('/new/assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Email</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/sms.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="email" value="{{ Auth::user()->email }}"
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Email">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Tempat Lahir</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}"
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Tempat Lahir">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Tanggal Lahir</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/calendar.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="date" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}"
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Tanggal Lahir">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold">Alamat</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/new/assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="alamat" value="{{ Auth::user()->alamat }}"
                        class="w-full font-semibold appearance-none outline-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Alamat">
                </label>
            </div>

            <label class="text-lg font-semibold">Foto Profil</label>
            <input type="file" name="profile_picture" class="p-2 rounded-lg border">

            <button type="submit" class="bg-[#d40065] text-white p-3 rounded-lg mt-4">Simpan Perubahan</button>
        </div>
    </form>
    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
