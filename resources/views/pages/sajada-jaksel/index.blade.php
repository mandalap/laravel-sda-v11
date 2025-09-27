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
        <div class="w-full h-[210px] bg-gradient-to-t from-green-secondary to-green-primary rounded-2xl"></div>

        <div class="mt-5">
            {{-- Deskripsi Section --}}
            <div class="mb-5">
                <h2 class="text-base font-semibold text-custom-gray-100 mb-2">Deskripsi</h2>
                <p class="text-sm text-custom-gray-90 leading-relaxed">
                    SAJADA JAKSEL (Jasa Kelola dan Service Lahan) adalah sebuah jasa yang akan membantu masyarakat dalam
                    menjaga dan merawat Lokasi Tanah Kavling agar tetap bersih dan rapi.
                </p>
            </div>

            {{-- layanan Section --}}
            <div class="mb-5">
                <h2 class="text-base font-semibold text-custom-gray-100 mb-2">Layanan</h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-3">
                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Perapian Pekarangan Rumah', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Rumput Hias', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Bunga Tanaman', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Bibit Buah', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Tanaman Pelindung', 23, '...') }}
                        </p>
                    </div>

                    <div class="p-2 bg-custom-gray-10 rounded-xl shadow-lg flex items-center gap-2">
                        <div class="w-7 h-7 bg-green-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/check.png') }}" class="w-5 h-5" alt="check">
                        </div>
                        <p class="text-sm text-custom-gray-90">
                            {{ Str::limit('Pupuk Kandang', 23, '...') }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Contact Section --}}
    <div class="bg-gradient-to-t from-green-secondary to-green-primary px-6 sm:px-5 pt-5 pb-10">
        <h3 class="text-sm sm:text-base font-semibold text-custom-gray-10 text-center mb-4 sm:mb-6">
            Partner Notaris Kami
        </h3>
        <div class="block md:hidden space-y-4 sm:space-y-6">
            <div class="flex items-center gap-4 sm:gap-6">
                <div class="relative w-20 h-20 sm:w-24 sm:h-24 flex-shrink-0 flex items-center justify-center">
                    <div
                        class="absolute w-16 h-16 sm:w-[78px] sm:h-[78px] bg-custom-gray-10 rounded-lg transform -rotate-[20deg]">
                    </div>
                    <div class="absolute w-16 h-16 sm:w-[78px] sm:h-[78px] bg-secondary-border rounded-lg"></div>
                </div>
                <div class="text-custom-gray-10 text-xs sm:text-sm ml-3 sm:ml-6 flex-1">
                    <div class="flex mb-1">
                        <span class="w-10 sm:w-12 flex-shrink-0">Nama</span>
                        <span class="mx-1 sm:mx-2">:</span>
                        <span class="font-medium truncate">Winifred Mante</span>
                    </div>
                    <div class="flex">
                        <span class="w-10 sm:w-12 flex-shrink-0">Alamat</span>
                        <span class="mx-1 sm:mx-2">:</span>
                        <span class="font-medium truncate">90942 Pfeffer Meadows</span>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 sm:gap-6 flex-row-reverse">
                <div class="relative w-20 h-20 sm:w-24 sm:h-24 flex-shrink-0 flex items-center justify-center">
                    <div
                        class="absolute w-16 h-16 sm:w-[78px] sm:h-[78px] bg-custom-gray-10 rounded-lg transform rotate-[20deg]">
                    </div>
                    <div class="absolute w-16 h-16 sm:w-[78px] sm:h-[78px] bg-secondary-border rounded-lg"></div>
                </div>
                <div class="text-custom-gray-10 text-xs sm:text-sm ml-3 sm:ml-6 flex-1">
                    <div class="flex mb-1">
                        <span class="w-10 sm:w-12 flex-shrink-0">Nama</span>
                        <span class="mx-1 sm:mx-2">:</span>
                        <span class="font-medium truncate">Winifred Mante</span>
                    </div>
                    <div class="flex">
                        <span class="w-10 sm:w-12 flex-shrink-0">Alamat</span>
                        <span class="mx-1 sm:mx-2">:</span>
                        <span class="font-medium truncate">90942 Pfeffer Meadows</span>
                    </div>
                </div>
            </div>


            <!-- Partner 3 - Gambar di Kiri -->
            <div class="flex items-center gap-4 sm:gap-6">
                <div class="relative w-20 h-20 sm:w-24 sm:h-24 flex-shrink-0 flex items-center justify-center">
                    <div
                        class="absolute w-16 h-16 sm:w-[78px] sm:h-[78px] bg-custom-gray-10 rounded-lg transform -rotate-[20deg]">
                    </div>
                    <div class="absolute w-16 h-16 sm:w-[78px] sm:h-[78px] bg-secondary-border rounded-lg"></div>
                </div>
                <div class="text-custom-gray-10 text-xs sm:text-sm ml-3 sm:ml-6 flex-1">
                    <div class="flex mb-1">
                        <span class="w-10 sm:w-12 flex-shrink-0">Nama</span>
                        <span class="mx-1 sm:mx-2">:</span>
                        <span class="font-medium truncate">Winifred Mante</span>
                    </div>
                    <div class="flex">
                        <span class="w-10 sm:w-12 flex-shrink-0">Alamat</span>
                        <span class="mx-1 sm:mx-2">:</span>
                        <span class="font-medium truncate">90942 Pfeffer Meadows</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop: Grid Layout 3 Columns -->
        <div class="hidden md:grid md:grid-cols-3 gap-6 lg:gap-8">
            <!-- Partner 1 -->
            <div class="flex flex-col items-center text-center">
                <div class="relative w-24 h-24 mb-4 flex items-center justify-center">
                    <div class="absolute w-[78px] h-[78px] bg-custom-gray-10 rounded-lg transform -rotate-[20deg]"></div>
                    <div class="absolute w-[78px] h-[78px] bg-secondary-border rounded-lg"></div>
                </div>
                <div class="text-custom-gray-10 text-sm">
                    <div class="mb-2">
                        <span class="block font-medium">Winifred Mante</span>
                        <span class="text-xs opacity-80">Nama</span>
                    </div>
                    <div>
                        <span class="block font-medium">90942 Pfeffer Meadows</span>
                        <span class="text-xs opacity-80">Alamat</span>
                    </div>
                </div>
            </div>

            <!-- Partner 2 -->
            <div class="flex flex-col items-center text-center">
                <div class="relative w-24 h-24 mb-4 flex items-center justify-center">
                    <div class="absolute w-[78px] h-[78px] bg-custom-gray-10 rounded-lg transform rotate-[20deg]"></div>
                    <div class="absolute w-[78px] h-[78px] bg-secondary-border rounded-lg"></div>
                </div>
                <div class="text-custom-gray-10 text-sm">
                    <div class="mb-2">
                        <span class="block font-medium">Winifred Mante</span>
                        <span class="text-xs opacity-80">Nama</span>
                    </div>
                    <div>
                        <span class="block font-medium">90942 Pfeffer Meadows</span>
                        <span class="text-xs opacity-80">Alamat</span>
                    </div>
                </div>
            </div>

            <!-- Partner 3 -->
            <div class="flex flex-col items-center text-center">
                <div class="relative w-24 h-24 mb-4 flex items-center justify-center">
                    <div class="absolute w-[78px] h-[78px] bg-custom-gray-10 rounded-lg transform -rotate-[20deg]"></div>
                    <div class="absolute w-[78px] h-[78px] bg-secondary-border rounded-lg"></div>
                </div>
                <div class="text-custom-gray-10 text-sm">
                    <div class="mb-2">
                        <span class="block font-medium">Winifred Mante</span>
                        <span class="text-xs opacity-80">Nama</span>
                    </div>
                    <div>
                        <span class="block font-medium">90942 Pfeffer Meadows</span>
                        <span class="text-xs opacity-80">Alamat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
