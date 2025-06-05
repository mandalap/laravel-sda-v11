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
    <div class="flex justify-center items-center p-4 min-h-screen bg-gray-100">
        <div class="p-8 w-full max-w-md bg-white rounded-xl shadow-lg">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-20" alt="icon">
            <h2 class="mt-4 mb-6 text-2xl font-semibold text-center text-gray-900">Daftar</h2>
            {{-- @if ($is_referral && $agency_name)
                <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">
                                Anda diundang oleh: <strong>{{ $agency_name }}</strong>
                            </p>
                            <p class="text-xs text-green-600 mt-1">
                                Dengan bergabung melalui referral ini, Anda akan mendapatkan benefit khusus!
                            </p>
                        </div>
                    </div>
                </div>
            @endif --}}
            <form class="space-y-4" method="POST" action="{{ route('store.register') }}">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Sapaan</label>
                    <select name="sapaan" required
                        class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-2 focus:ring-[#d40065] focus:border-[#d40065]">
                        <option value="" disabled selected>Pilih Sapaan</option>
                        <option value="Bapak" @if (old('sapaan') == 'Pak') selected @endif>Pak</option>
                        <option value="Ibu" @if (old('sapaan') == 'Bu') selected @endif>Bu</option>
                        <option value="Bang" @if (old('sapaan') == 'Bang') selected @endif>Bang</option>
                        <option value="Kak" @if (old('sapaan') == 'Kak') selected @endif>Kak</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-2 focus:ring-[#d40065] focus:border-[#d40065]"
                        placeholder="Masukkan Nama Lengkap" required />
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                    <input type="tel" name="telepon" value="{{ old('telepon') }}" required
                        class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-2 focus:ring-[#d40065] focus:border-[#d40065]"
                        placeholder="Masukkan Nomor WhatsApp" />
                    @error('telepon')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kode Referral -->
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-4 rounded-lg border border-green-200">
                    <h4 class="text-lg font-semibold text-green-800 mb-3">
                        Kode Referral {{ $is_referral ? '' : '(Opsional)' }}
                    </h4>

                    <div>
                        <label for="referral_code" class="block text-sm font-medium text-gray-700">
                            {{ $is_referral ? 'Kode Referral dari Agency' : 'Masukkan Kode Referral' }}
                        </label>

                        <input type="text" name="referral_code" id="referral_code"
                            value="{{ old('referral_code', $referral_code) }}" {{ $is_referral ? 'readonly' : '' }}
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 {{ $is_referral ? 'bg-gray-100 cursor-not-allowed' : '' }}"
                            placeholder="{{ $is_referral ? 'Kode referral otomatis terisi' : 'Masukkan kode referral dari agency' }}">

                        @error('referral_code')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        @if (!$is_referral)
                            <div class="mt-2 p-3 bg-blue-50 border-l-4 border-blue-400 rounded">
                                <p class="text-sm text-blue-700">
                                    <svg class="inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Jika Anda memiliki kode referral dari Agency, masukkan di sini.
                                </p>
                            </div>
                        {{-- @else
                            <div class="mt-2 p-3 bg-green-50 border-l-4 border-green-400 rounded">
                                <p class="text-sm text-green-700">
                                    <svg class="inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Kode referral sudah otomatis terisi. Anda akan mendapatkan benefit khusus dari
                                    <strong>{{ $agency_name }}</strong>
                                </p>
                            </div> --}}
                        @endif
                    </div>
                </div>

                <button type="submit"
                    class="py-2.5 w-full font-medium text-white bg-[#d40065] hover:bg-black  rounded-lg transition-colors">
                    Daftar Sekarang
                </button>
            </form>

            <div class="mt-6 text-sm text-center text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="font-medium text-[#d40065] hover:text-black">Login</a>
            </div>
        </div>
    </div>

    </div>

    @include('includes.script')
@endsection

@push('addon-script')
@endpush
