@extends('layouts.app')

@section('title')
    Daftar Affiliate
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single {
            border: none;
            background-color: transparent;
            height: 40px;
            display: flex;
            align-items: center;
            border-radius: 4px;
            outline: none;
        }
        .select2-container--custom-class {
            width: 100% !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            padding-left: 10px;
        }
        .select2-container--custom-class .select2-dropdown {
            border-radius: 4px;
            margin-top: 5px;
            border: 1px solid #F1F2F6;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        .select2-container--custom-class .select2-results__option {
            padding: 10px 15px;
            font-size: 0.875rem;
        }

        li.select2-results__option.select2-results__message {
            padding: 10px;
            font-size: 0.875rem;
        }

        .select2-container--custom-class .select2-results__option--highlighted {
            background-color: #f8f9fa;
            color: #D81D76;
        }
        .select2-container--custom-class .select2-results__option--selected {
            background-color: #ffeef7;
            color: #D81D76;
        }
        .select2-container--custom-class .select2-selection__arrow {
            display: none !important;
        }
        .select2-container--default .select2-selection__rendered {
            margin-left: 30px !important;
            font-size: 14px;
        }
        .select2-container--custom-class .select2-selection__placeholder {
            color: #5E6F76;
            font-size: 14px;
            margin-left: 40px;
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #757575;
        }

        .select2-container--custom-class .select2-selection__placeholder,
        .select2-container--default .select2-selection__rendered {
            font-size: 14px;
            color: #5E6F76;
        }
        .select2-wrapper {
            position: relative;
            width: 100%;
            background-color: white;
            padding: 0;
            border-radius: 4px;
            height: 40px;
        }
        .select2-icon-left {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 20px;
            height: 20px;
        }

        .select2-icon-right {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 20px;
            height: 20px;
            pointer-events: none;
        }

        /* Styling untuk search field di dropdown Select2 */
        .select2-search--dropdown {
            padding: 10px;
        }

        .select2-search--dropdown .select2-search__field {
            border: 1px solid #F1F2F6;
            border-radius: 4px;
            padding: 8px 15px;
            outline: none;
        }

        .select2-search--dropdown .select2-search__field:focus {
            border-color: #D81D76;
        }
    </style>
@endpush

@section('content')
    <x-navigation-route title="Pendaftaran Sajada Affiliate" :backRoute="route('affiliate.index')" textColor="text-primary" />


    <div class="px-5 w-full">
        <form action="{{ route('affiliate.daftar.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('POST')
            <x-input-fieldv2 label="Nama" name="nama" type="text" placeholder="Masukkan nama"
                icon="assets/images/icons/user-primary.png" value="{{ old('nama') }}" required />

            <x-input-fieldv2 label="Sapaan" name="sapaan" type="select" placeholder="Pilih Sapaan"
                icon="assets/images/icons/sapaan-primary.png" :options="[
                    'Bang' => 'Bang',
                    'Kak' => 'Kak',
                    'Pak' => 'Pak',
                    'Bu' => 'Bu',
                ]" />

            <x-input-fieldv2 label="Nomor WhatsApp" name="telepon" type="text" value="{{ old('telepon') }}"
                placeholder="Masukkan No. WhatsApp" icon="assets/images/icons/phone-primary.png" required />

            <x-input-fieldv2 label="Email" name="email" type="email" value="{{ old('email') }}"
                placeholder="Masukkan Email" icon="assets/images/icons/email-primary.png" />


            <x-input-fieldv2 label="Jenis Kelamin" name="gender" type="select" placeholder="Pilih Jenis Kelamin"
                icon="assets/images/icons/gender-primary.png" :options="[
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ]" />

            <x-input-fieldv2 label="Tanggal Lahir" name="tanggal_lahir" type="date" value="{{ old('tanggal_lahir') }}"
                placeholder="Masukkan Tanggal Lahir" icon="assets/images/icons/calendar-primary.png" />

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold text-sm">Asal Kota</p>
                <div class="relative w-full">
                    <div
                        class="select2-wrapper flex items-center w-full h-10 rounded p-3 bg-custom-gray-10 ring-1 ring-custom-gray-50 focus-within:ring-primary transition-all duration-300 relative">
                        <!-- Ikon kiri (bank) -->
                        <img src="{{ asset('assets/images/icons/house-primary.png') }}" class="select2-icon-left"
                            alt="icon">

                        <select id="kota-select" name="kota_id" class="select2-ajax">
                            @if (old('kota_id'))
                                <option value="{{ old('kota_id') }}" selected>
                                    {{ $lokasi->find(old('kota_id'))?->name }}
                                </option>
                            @endif
                        </select>

                        <!-- Ikon panah kanan -->
                        <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="select2-icon-right"
                            alt="icon">
                    </div>
                    @error('kota_id')
                        <p class="mt-1 text-xs text-danger-main">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <x-input-fieldv2 label="Alamat" name="alamat" type="text" value="{{ old('alamat') }}"
                placeholder="Masukkan Alamat" icon="assets/images/icons/map-primary.png" />

            <x-button-primary type="submit" :full-width="true">
                Daftar
            </x-button-primary>
        </form>
    </div>
@endsection

@push('addon-script')
    <script src="{{ asset('vendor/jQuery-3.7.0/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#kota-select').select2({
                placeholder: 'Pilih Kota',
                allowClear: true,
                language: {
                    // Mengatur bahasa Indonesia untuk Select2
                    errorLoading: function() {
                        return "Hasil tidak ditemukan.";
                    },
                    inputTooShort: function(args) {
                        var remainingChars = args.minimum - args.input.length;
                        return "Masukkan " + remainingChars + " karakter lagi.";
                    },
                    loadingMore: function() {
                        return "Memuat lebih banyak hasil...";
                    },
                    maximumSelected: function(args) {
                        return "Anda hanya bisa memilih " + args.maximum + " pilihan.";
                    },
                    noResults: function() {
                        return "Tidak ada hasil ditemukan";
                    },
                    searching: function() {
                        return "Mencari...";
                    },
                    removeAllItems: function() {
                        return "Hapus semua item";
                    }
                },
                ajax: {
                    url: '{{ route('get-kota') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term || ''
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2 // Mulai pencarian setelah 2 karakter
            });
        });
    </script>
@endpush
