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
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-[#AE1679] to-[#D81D76]">
        <div class="p-8 w-full max-w-md bg-white rounded-2xl shadow-lg">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-24" alt="icon">
            <h2 class="mt-4 mb-6 text-xl font-semibold text-center text-gray-900">Daftar</h2>
            <form class="space-y-4" method="POST" action="{{ route('store.register') }}">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium text-grey">Sapaan</label>
                    <select name="sapaan" required
                        class="px-3 py-2 w-full rounded-lg border border-gray-50 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary">
                        <option value="" disabled selected>Pilih Sapaan</option>
                        <option value="Bapak" @if (old('sapaan') == 'Pak') selected @endif>Pak</option>
                        <option value="Ibu" @if (old('sapaan') == 'Bu') selected @endif>Bu</option>
                        <option value="Bang" @if (old('sapaan') == 'Bang') selected @endif>Bang</option>
                        <option value="Kak" @if (old('sapaan') == 'Kak') selected @endif>Kak</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-grey">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="px-4 py-2 w-full rounded-lg border border-gray-50 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary"
                        placeholder="Masukkan Nama Lengkap" required />
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-grey">Nomor WhatsApp</label>
                    <input type="tel" name="telepon" value="{{ old('telepon') }}" required
                        class="px-4 py-2 w-full rounded-lg border border-gray-50 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary"
                        placeholder="Masukkan Nomor WhatsApp" />
                    @error('telepon')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kode Referral -->
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-4 rounded-lg border border-green-200">
                    <h4 class="text-sm font-medium text-grey mb-3">
                        Kode Referral {{ $is_referral ? '' : '(Opsional)' }}
                    </h4>

                    <div>
                        <input type="text" name="referral_code" id="referral_code"
                            value="{{ old('referral_code', $referral_code) }}" {{ $is_referral ? 'readonly' : '' }}
                            class="mt-1 block w-full px-3 py-2 border border-gray-40 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 {{ $is_referral ? 'bg-gray-100 cursor-not-allowed' : '' }}"
                            placeholder="{{ $is_referral ? 'Kode referral otomatis terisi' : 'Masukkan kode referral' }}">

                        @error('referral_code')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        @if (!$is_referral)
                            <div class="mt-2">
                                <p class="text-sm text-danger-main">
                                    {{-- <svg class="inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg> --}}
                                    Jika Anda memiliki kode referral dari Agency, masukkan di sini.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>

                <button type="submit"
                    class="py-2.5 w-full font-medium text-white bg-primary hover:bg-black  rounded-lg transition-colors">
                    Daftar Sekarang
                </button>
            </form>

            <div class="mt-4 text-sm text-center text-gray-600">
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
