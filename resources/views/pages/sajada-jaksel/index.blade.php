@extends('layouts.app')

@section('title')
    SAJADA JAKSEL
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="SAJADA JAKSEL" :backRoute="route('beranda')" textColor="text-primary" />

    <div class="px-5">
        <div
            class="w-full h-[210px] rounded-2xl border-2 border-green-primary relative overflow-hidden flex items-center justify-center p-8">
            <img src="{{ asset('assets/images/photos/sajada-jaksel.png') }}" alt="Sajada Jaksel"
                class="max-w-full max-h-full object-contain">
        </div>

        <div class="mt-5">
            <div class="mb-5">
                <h2 class="text-base font-semibold text-custom-gray-100 mb-2">Deskripsi</h2>
                <p class="text-sm text-custom-gray-90 leading-relaxed">
                    SAJADA JAKSEL (Jasa Kelola dan Service Lahan) adalah sebuah jasa yang akan membantu masyarakat dalam
                    menjaga dan merawat Lokasi Tanah Kavling agar tetap bersih dan rapi.
                </p>
            </div>

            <div class="mb-5">
                <h2 class="text-base font-semibold text-custom-gray-100 mb-2">Layanan</h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-3">
                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Perapian Pekarangan Rumah', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Rumput Hias', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Bunga Tanaman', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Bibit Buah', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Tanaman Pelindung', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check-gray.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Pupuk Kandang', 23, '...') }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="BottomNav" class="relative flex w-full h-[80px] shrink-0">
        <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-50">
            <div
                class="flex items-center justify-between rounded-xl h-[66px] pl-6 pr-2 bg-gradient-to-l from-success-pressed to-green-primary">
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold text-custom-gray-10 leading-none mb-1 block">Butuh Informasi</span>
                    <span class="text-sm font-semibold text-custom-gray-10 leading-none block">Lebih Lanjut?</span>
                </div>

                <a href="https://wa.me/6285179888988" target="_blank"
                    class="flex items-center justify-center shrink-0 rounded-full w-[170px] h-[40px] px-2 bg-custom-gray-10 hover:bg-black hover:text-white transition-all duration-300 whitespace-nowrap overflow-hidden">
                    <img src="{{ asset('assets/images/icons/logo-whatsapp.png') }}" alt="WhatsApp" class="w-[22px] h-[22px] mr-1 flex-shrink-0">
                    <span class="text-sm font-semibold text-success-pressed">Hubungi Kami</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
