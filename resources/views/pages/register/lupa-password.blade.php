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
    <div class="flex justify-center items-center p-4 min-h-screen bg-gradient-to-t from-[#AE1679] to-[#D81D76]">
        <div class="p-8 w-full max-w-md bg-white rounded-xl shadow-lg">
            <img src="{{ asset('assets/images/icons/logo.svg') }}" class="mx-auto w-auto h-24" alt="icon">
            <h2 class="mt-3 text-2xl font-semibold text-center text-gray-100">Reset Kata Sandi</h2>

            <p class="mt-3 text-sm text-center text-gray-80">Masukkan nomor whatsapp <br>Kami akan mengirim password terbaru</p>

            <form class="space-y-4" action="{{ route('resetpassword') }}" method="POST" >
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium text-grey">Nomor WhatsApp</label>
                    <input type="number"
                        class="px-4 py-2 w-full rounded-lg border border-gray-300 transition-all outline-none focus:ring-2 focus:ring-[#d40065] focus:border-[#d40065]"
                        placeholder="Masukkan Nomor WhatsApp" name="telepon" />
                </div>

                <button type="submit"
                    class="w-full h-[40px] font-medium text-white bg-primary hover:bg-black  rounded-lg transition-colors">
                    Kirim Password
                </button>
            </form>

            <div class="mt-4 text-sm text-center text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-primary hover:text-black">Masuk</a>
            </div>
        </div>
    </div>

    @include('includes.script')
@endsection

@push('addon-script')
@endpush
