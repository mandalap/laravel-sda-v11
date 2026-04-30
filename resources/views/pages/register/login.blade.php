@extends('layouts.guest')

@section('title')
    Masuk
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-secondary to-primary">
        <div class="relative p-6 sm:p-8 w-full max-w-sm sm:max-w-md bg-white rounded-2xl shadow-lg">
            <a href="{{ route('beranda') }}"
                class="absolute top-4 right-4 flex items-center gap-1 text-sm sm:text-sm text-primary hover:text-black transition-colors z-10">
                Lewati
                <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" alt="Arrow Right"
                    class="w-3 h-3 sm:w-4 sm:h-4" />
            </a>
            <div class="mt-8">
                <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-24" alt="icon">
                <h2 class="mt-4 mb-6 text-xl font-semibold text-center text-gray-900">Masuk</h2>
                <form class="space-y-4" method="POST" action="{{ route('store.login') }}">
                    @csrf

                    <x-input-fieldv2 label="Nomor WhatsApp" name="telepon" type="tel" value="{{ old('telepon') }}"
                        placeholder="Masukkan Nomor WhatsApp" required />

                    <div class="relative">
                        <label class="block mb-1 text-sm font-medium text-custom-gray">Kata Sandi</label>
                        <input type="password" name="password"
                            class="px-4 py-2 w-full rounded-md border border-custom-gray-50 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary"
                            placeholder="••••••••" id="password-field" required />
                        <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword()">

                            <img id="eye-disabled" src="{{ asset('assets/images/icons/hide.png') }}" alt="Eye Disabled"
                                class="w-6 h-6 text-custom-gray-70 hover:text-black" />

                            <img id="eye-enabled" src="{{ asset('assets/images/icons/enabled.png') }}" alt="Eye Enabled"
                                class="w-6 h-6 text-custom-gray-70 hover:text-black hidden" />
                        </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <label class="flex items-center">
                            <input type="checkbox" class="text-primary rounded border-gray-100 focus:ring-primary" />
                            <span class="ml-2 text-sm text-custom-gray-100">Ingat saya</span>
                        </label>
                        <a href="{{ route('lupapassword') }}" class="text-sm text-primary hover:text-black">Lupa
                            Kata Sandi?</a>
                    </div>
                    <x-button-primary type="submit" :full-width="true">
                        Masuk
                    </x-button-primary>
                </form>

                <div class="flex items-center my-4">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <span class="mx-3 text-xs text-gray-400">atau</span>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>

                {{-- Tombol Login Google --}}
                <a href="{{ route('auth.google') }}"
                    class="flex justify-center items-center gap-3 w-full px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                    {{-- Logo Google SVG --}}
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="#4285F4"
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path fill="#34A853"
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                        <path fill="#FBBC05"
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" />
                        <path fill="#EA4335"
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                    </svg>
                    Masuk dengan Google
                </a>

                <div class="mt-4 text-sm text-center text-custom-gray-100">
                    Belum punya akun?
                    <a href="{{ route('daftar') }}" class="text-primary hover:text-black">Daftar</a>
                </div>
            </div>

        </div>
    </div>

    @include('includes.script')
@endsection

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById('password-field');
            var eyeEnabled = document.getElementById('eye-enabled');
            var eyeDisabled = document.getElementById('eye-disabled');

            // Toggle between showing and hiding password
            if (passwordField.type === "password") {
                passwordField.type = "text"; // Show the password
                eyeEnabled.classList.remove('hidden'); // Show eye icon
                eyeDisabled.classList.add('hidden'); // Hide eye-disabled icon
            } else {
                passwordField.type = "password"; // Hide the password
                eyeEnabled.classList.add('hidden'); // Hide eye icon
                eyeDisabled.classList.remove('hidden'); // Show eye-disabled icon
            }
        }
    </script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Definisikan Toast terlebih dahulu
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 10000,
                    width: '32rem',
                    timerProgressBar: true,
                });

                // Kemudian gunakan Toast
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('success') }}"
                });
            });
        </script>
    @endif
@endpush
