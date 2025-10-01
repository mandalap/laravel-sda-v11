@extends('layouts.app')

@section('title')
    Periksa Booking
@endsection

@push('prepend-style')
    <style>
        .no-outline {
            outline: none;
        }
    </style>
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Cek Booking" :showBackground="true" textColor="text-custom-gray-10" />

    <div class="relative flex flex-col px-5">
        <form action="{{ route('cari-booking') }}" method="POST"
            class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-custom-gray-10">
            @csrf
            <div id="InputContainer" class="flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <p class="font-medium text-sm text-custom-gray-100">Kode Invoice</p>
                    <p class="text-xs text-custom-gray-80">Masukkan kode invoice secara lengkap</p>
                    <div class="flex flex-col gap-2 w-full">
                        <label
                            class="flex items-center w-full h-10 rounded p-3 gap-2 bg-custom-gray-10 ring-1 ring-custom-gray-40 focus-within:ring-primary transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/invoice-primary.png') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="code_booking" id="code_booking" value="{{ old('code_booking') }}"
                                class="w-full text-sm appearance-none outline-none placeholder:text-custom-gray-70"
                                placeholder="Ketikkan kode invoice di sini" required
                                oninvalid="this.setCustomValidity('Invoice wajib diisi.')"
                                oninput="this.setCustomValidity('')">
                        </label>
                    </div>
                </div>
                <x-button-primary type="submit" :full-width="true">
                    Cari
                </x-button-primary>
            </div>

        </form>

        @if (session('notFound'))
            <x-not-found />
        @endif
    </div>
    @include('includes.footer')
    </div>
@endsection
