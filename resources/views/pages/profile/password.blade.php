@extends('layouts.app')

@section('title')
    Ubah Password
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
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="assets/images/icons/arrow-left.svg" class="w-[20px] h-[20px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Ubah Password</p>
        <div class="w-12 dummy-btn"></div>
    </div>

    <form action="{{ route('update.password') }}" method="POST" class="relative flex flex-col px-5 mt-[18px]">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4 bg-white p-4 rounded-[30px] border border-[#F1F2F6]">
            {{-- Password Lama --}}
            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold">Password Lama</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/password.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="password" name="current_password"
                        class="w-full font-semibold outline-none appearance-none placeholder:text-gray-400 placeholder:font-normal"
                        placeholder="Masukkan Password Lama" required>
                </label>
                @error('current_password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password Baru --}}
            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold">Password Baru</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/password.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="password" name="password"
                        class="w-full font-semibold outline-none appearance-none placeholder:text-gray-400 placeholder:font-normal"
                        placeholder="Masukkan Password Baru" required>
                </label>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Konfirmasi Password Baru --}}
            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold">Konfirmasi Password Baru</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/password.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="password" name="password_confirmation"
                        class="w-full font-semibold outline-none appearance-none placeholder:text-gray-400 placeholder:font-normal"
                        placeholder="Masukkan Konfirmasi Password Baru" required>
                </label>
            </div>

            <button type="submit"
                class="flex w-full justify-center rounded-full p-[10px_20px] bg-[#d40065] hover:bg-black hover:text-white font-bold text-white">Simpan
                Perubahan</button>
        </div>
    </form>
    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
