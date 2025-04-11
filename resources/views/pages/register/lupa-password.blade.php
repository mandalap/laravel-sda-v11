@extends('layouts.guest')

@section('title')
    Lupa Password
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
            <h2 class="mt-4 mb-6 text-2xl font-semibold text-center text-gray-900">Lupa Password</h2>

            <p class="text-sm text-center text-gray-600">Masukkan nomor whatsapp <br>Kami akan mengirim password terbaru</p>

            <form class="mt-8 space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                    <input type="number"
                        class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-2 focus:ring-[#d40065] focus:border-[#d40065]"
                        placeholder="Masukkan Nomor WhatsApp" />
                </div>

                <button
                    class="py-2.5 w-full font-medium text-white bg-[#d40065] hover:bg-black  rounded-lg transition-colors">
                    Kirim Password
                </button>
            </form>

            <div class="mt-8 text-sm text-center text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="font-medium text-[#d40065] hover:text-black">Login</a>
            </div>
        </div>
    </div>

    @include('includes.script')
@endsection

@push('addon-script')
@endpush
