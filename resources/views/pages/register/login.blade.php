@extends('layouts.guest')

@section('title')
    Login
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-[#AE1679] to-[#D81D76]"> 
        <div class="relative p-6 sm:p-8 w-full max-w-sm sm:max-w-md bg-white rounded-xl shadow-lg">
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
                    <!-- Nomor WhatsApp -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                        <input type="text" name="telepon" value="{{ old('telepon') }}"
                            class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary"
                            placeholder="Masukkan Nomor WhatsApp" required />
                        @error('telepon')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative">
                        <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password"
                            class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary"
                            placeholder="••••••••" id="password-field" required />
                        <!-- Show/Hide Password Icon (SVG) -->
                        <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword()">
                            <!-- Icon untuk Password Tersembunyi (Disable Eye) -->
                            <img id="eye-disabled" src="{{ asset('assets/images/icons/hide.svg') }}" alt="Eye Disabled"
                                class="w-6 h-6 text-gray-600 hover:text-black" />
                            <!-- Icon untuk Password Terlihat (Enable Eye) -->
                            <img id="eye-enabled" src="{{ asset('assets/images/icons/enabled.svg') }}" alt="Eye Enabled"
                                class="w-6 h-6 text-gray-600 hover:text-black hidden" />
                        </span>
                        @error('password')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-between items-center">
                        <label class="flex items-center">
                            <input type="checkbox" class="text-primary rounded border-gray-100 focus:ring-primary" />
                            <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                        </label>
                        <a href="{{ route('lupapassword') }}" class="text-sm text-primary hover:text-black">Lupa
                            Password?</a>
                    </div>

                    <button
                        class="py-2.5 w-full font-medium text-white  bg-primary hover:bg-black  rounded-lg transition-colors">
                        Masuk
                    </button>
                </form>

                <div class="mt-6 text-sm text-center text-gray-600">
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
