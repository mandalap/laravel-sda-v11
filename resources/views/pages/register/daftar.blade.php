@extends('layouts.guest')

@section('title')
    Daftar
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <!-- component -->
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-secondary to-primary">
        <div class="p-8 w-full max-w-md bg-white rounded-2xl shadow-lg">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-24" alt="icon">
            <h2 class="mt-4 mb-6 text-xl font-semibold text-center text-gray-900">Daftar</h2>
            <form class="space-y-4" method="POST" action="{{ route('store.register') }}">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium text-custom-gray">Sapaan</label>
                    <div class="relative">
                        <select name="sapaan" required
                            class="appearance-none px-3 py-2 w-full rounded-lg border border-custom-gray-50 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary">
                            <option value="" disabled selected class="text-custom-gray-70">Pilih Sapaan</option>
                            <option value="Pak" @if (old('sapaan') == 'Pak') selected @endif>Pak</option>
                            <option value="Bu" @if (old('sapaan') == 'Bu') selected @endif>Bu</option>
                            <option value="Bang" @if (old('sapaan') == 'Bang') selected @endif>Bang</option>
                            <option value="Kak" @if (old('sapaan') == 'Kak') selected @endif>Kak</option>
                        </select>

                        <!-- Custom Icon -->
                        <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                            <!-- Ganti SVG-nya sesuai kebutuhan -->
                            <svg class="w-4 h-4 text-custom-gray-90" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <x-input-field label="Nama Lengkap" type="text" name="nama" placeholder="Masukkan Nama Lengkap"
                        value="{{ old('nama') }}" required />
                </div>

                <div>
                    <x-input-field label="Nomor WhatsApp" type="tel" name="telepon"
                        placeholder="Masukkan Nomor WhatsApp" value="{{ old('telepon') }}" required />
                </div>

                <!-- Kode Referral -->
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-4 rounded-lg border border-green-200">
                    <h4 class="text-sm font-medium text-gray-90 mb-3">
                        Kode Referral {{ $is_referral ? '' : '(Opsional)' }}
                    </h4>

                    <div>
                        <input type="text" name="referral_code" id="referral_code"
                            value="{{ old('referral_code', $referral_code) }}" {{ $is_referral ? 'readonly' : '' }}
                            class="mt-1 block w-full px-3 py-2 border border-gray-40 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 {{ $is_referral ? 'bg-gray-100 cursor-not-allowed' : '' }} placeholder-custom-gray-70"
                            placeholder="{{ $is_referral ? 'Kode referral otomatis terisi' : 'Masukkan kode referral' }}">

                        @error('referral_code')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        @if (!$is_referral)
                            <div class="mt-2">
                                <p class="text-xs text-danger-main">
                                    Jika Anda memiliki kode referral dari Agency kami, silahkan ketikkan kodenya di sini.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- <button type="submit"
                    class="py-2.5 w-full font-medium text-white bg-primary hover:bg-black  rounded-lg transition-colors">
                    Daftar Sekarang
                </button> --}}
                <x-button-primary type="submit" :full-width="true">
                    Daftar
                </x-button-primary>
            </form>

            <div class="mt-4 text-sm text-center text-custom-gray-100">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-primary hover:text-black">Masuk</a>
            </div>
        </div>
    </div>

    </div>

    @include('includes.script')
@endsection

@push('addon-script')
@endpush
