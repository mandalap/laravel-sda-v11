@extends('layouts.app')

@section('title')
    Kerjasama
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Kerjasama Developer" :backRoute="route('beranda')" textColor="text-primary" />

    <div class="px-5">
        <div class="w-full h-[210px] bg-gradient-to-t from-secondary to-primary rounded-2xl"></div>

        <div class="mt-5">
            {{-- Deskripsi Section --}}
            <div class="mb-5">
                <h2 class="text-base font-semibold text-custom-gray-100 mb-2">Deskripsi</h2>
                <p class="text-sm text-custom-gray-90 leading-relaxed">
                    Kami hadir untuk membantu Anda yang ingin memperluas pasar dengan cara yang lebih mudah dan efisien!
                </p>
                <p class="text-sm text-custom-gray-90 leading-relaxed mt-3">
                    Mengapa Ini Waktu yang Tepat untuk Memasang Properti Anda?
                </p>
                <p class="text-sm text-custom-gray-90 leading-relaxed mt-3">
                    Pasar properti kini semakin dinamis, dan peluang untuk menarik pembeli hanya akan semakin terbuka.
                    Dengan kemudahan yang ditawarkan aplikasi kami, Anda dapat memperkenalkan proyek properti Anda ke
                    audiens yang lebih besar, kapan saja, di mana saja.
                </p>
            </div>

            {{-- Benefit Section --}}
            <div class="mb-5">
                <h2 class="text-base font-semibold text-custom-gray-100 mb-2">Benefit</h2>

                <div class="space-y-3">
                    <div class="p-3 bg-custom-gray-10 rounded-xl shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                            </div>
                            <p class="text-sm text-custom-gray-90 leading-relaxed flex-1">
                                Jangkauan Lebih Luas: Platform kami menghubungkan properti Anda dengan ribuan calon pembeli
                                yang sedang mencari hunian atau investasi ideal.
                            </p>
                        </div>
                    </div>

                    <div class="p-3 bg-custom-gray-10 rounded-xl shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                            </div>
                            <p class="text-sm text-custom-gray-90 leading-relaxed flex-1">
                                Proses Listing Cepat: Cukup beberapa klik, properti Anda langsung tersedia di aplikasi kami
                                dan dapat diakses oleh pasar yang lebih luas.
                            </p>
                        </div>
                    </div>

                    <div class="p-3 bg-custom-gray-10 rounded-xl shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                            </div>
                            <p class="text-sm text-custom-gray-90 leading-relaxed flex-1">
                                Fitur Canggih: Dilengkapi dengan filter pencarian cerdas, foto berkualitas, dan informasi
                                lengkap yang memudahkan calon pembeli memilih properti sesuai kebutuhan mereka.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- CTA Section --}}
    <div class="bg-gradient-to-t from-secondary to-primary px-5 pt-5 pb-10 ">
        <h3 class="text-base font-semibold text-custom-gray-10 text-center mb-3">
            Yuk, Bergabung Bersama Kami
        </h3>
        <a href="{{ route('developer.register') }}"
            class="font-medium text-primary bg-custom-gray-10 hover:bg-custom-gray-100 hover:text-custom-gray-10 rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 disabled:opacity-50 disabled:cursor-not-allowed h-[40px] px-4 text-base w-full flex items-center justify-center">
            Bergabung
        </a>
    </div>
@endsection

@push('addon-script')
@endpush
