@extends('layouts.app')

@section('title')
    Daftar Affiliate
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        /* Reset dasar untuk membuat Select2 seragam dengan field lainnya */
        .select2-container {
            width: 100% !important;
        }

        /* Menghapus border default Select2 */
        .select2-container--default .select2-selection--single {
            border: none;
            background-color: transparent;
            height: 48px;
            display: flex;
            align-items: center;
            border-radius: 30px;
            outline: none;
        }

        /* Styling untuk container Select2 utama */
        .select2-container--custom-class {
            width: 100% !important;
        }

        /* Menyembunyikan panah default Select2 */
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
            /* Menyembunyikan panah default */
        }

        /* Styling untuk dropdown ketika terbuka */
        .select2-container--custom-class .select2-dropdown {
            border-radius: 15px;
            margin-top: 5px;
            border: 1px solid #F1F2F6;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        /* Styling untuk hasil-hasil di dropdown */
        .select2-container--custom-class .select2-results__option {
            padding: 10px 15px;
            font-size: 0.875rem;
        }

        /* Styling untuk hasil yang dihover/difokuskan */
        .select2-container--custom-class .select2-results__option--highlighted {
            background-color: #f8f9fa;
            color: #d40065;
        }

        /* Styling untuk hasil yang dipilih */
        .select2-container--custom-class .select2-results__option--selected {
            background-color: #ffeef7;
            color: #d40065;
        }

        /* Menyembunyikan panah dropdown bawaan Select2 */
        .select2-container--custom-class .select2-selection__arrow {
            display: none !important;
        }

        /* Styling untuk rendered text (teks yang terpilih) */
        .select2-container--default .select2-selection__rendered {
            margin-left: 40px !important;
            font-size: 16px;
            /* Memberikan ruang di kiri untuk teks tanpa mengubah ikon */
        }

        /* Styling untuk placeholder */
        .select2-container--custom-class .select2-selection__placeholder {
            color: #a0a0a0;
        }

        /* .select2-container--default .select2-selection__placeholder {
            margin-left: 40px;
        } */

        /* Wrapper kustom untuk Select2 */
        .select2-wrapper {
            position: relative;
            width: 100%;
            background-color: white;
            padding: 0;
            border-radius: 30px;
            height: 44px;
        }

        /* Styling untuk icon di dalam wrapper */
        .select2-icon-left {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 20px;
            height: 20px;
        }

        .select2-icon-right {
            position: absolute;
            right: 20px;
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
            border-radius: 20px;
            padding: 8px 15px;
            outline: none;
        }

        .select2-search--dropdown .select2-search__field:focus {
            border-color: #d40065;
        }
    </style>
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065]">
    </div>

    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[60px]">
        <a href="{{ route('affiliate.index') }}"
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Pendaftaran Sajada Affiliate</p>
        <div class="w-10 dummy-btn"></div>
    </div>

    <form action="{{ route('affiliate.daftar.store') }}" method="POST" class="relative flex flex-col px-4 mt-[18px]">
        @csrf
        @method('POST')
        <div class="flex flex-col gap-4 bg-white p-4 rounded-[30px] border border-[#F1F2F6]">
            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Nama</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/user.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="text" name="nama"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Nama">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold text-sm">Sapaan</p>
                <label
                    class="relative flex items-center w-full rounded-full p-[14px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/user.svg') }}"
                        class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0" alt="icon">
                    <select name="sapaan" value="{{ old('sapaan') }}"
                        class="text-sm pl-8 w-full bg-white appearance-none outline-none">
                        <option value="" hidden>Pilih Sapaan</option>
                        <option value="Bapak" @if (old('sapaan') == 'Bapak') selected @endif>Bapak</option>
                        <option value="Ibu" @if (old('sapaan') == 'Ibu') selected @endif>Ibu</option>
                        <option value="Bang" @if (old('sapaan') == 'Bang') selected @endif>Bang</option>
                        <option value="Kak" @if (old('sapaan') == 'Kak') selected @endif>Kak</option>
                    </select>
                    <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Nomor WhatsApp</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/phone.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="number" name="telepon"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Nomor WhatsApp">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Email</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/mail.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                    <input type="text" name="email"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Email">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold text-sm">Jenis Kelamin</p>
                <label
                    class="relative flex items-center w-full rounded-full p-[14px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/gender.svg') }}"
                        class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0" alt="icon">
                    <select name="gender" value="{{ old('gender') }}"
                        class="text-sm pl-8 w-full bg-white appearance-none outline-none">
                        <option value="" hidden>Pilih Jenis Kelamin</option>
                        <option value="L" {{ $member->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $member->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                </label>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Tanggal Lahir</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/calendar.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="date" name="tanggal_lahir" value="{{ $member->tanggal_lahir }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Tanggal Lahir">
                </label>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <p class="font-semibold text-sm">Asal Kota</p>
                <div class="relative w-full">
                    <!-- Wrapper untuk Select2 dengan konsistensi styling -->
                    <div
                        class="select2-wrapper ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] rounded-full transition-all duration-300">
                        <!-- Ikon kiri (lokasi) -->
                        <img src="{{ asset('assets/images/icons/location2.svg') }}" class="select2-icon-left"
                            alt="icon">

                        <!-- Select2 field -->
                        <select id="kota-select" name="kota_id" class="select2-ajax select2-pl-40">
                            @if (old('kota_id'))
                                <option value="{{ old('kota_id') }}" selected>
                                    {{ $lokasi::find(old('kota_id'))?->name }}</option>
                            @endif
                        </select>

                        <!-- Ikon panah kanan -->
                        <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="select2-icon-right"
                            alt="icon">
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full gap-2">
                <p class="font-semibold text-sm">Alamat</p>
                <label
                    class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                    <img src="{{ asset('/assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                        alt="icon">
                    <input type="text" name="alamat" value="{{ $member->alamat }}"
                        class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                        placeholder="Masukkan Alamat">
                </label>
            </div>

            <button type="submit"
                class="text-sm flex w-full justify-center rounded-full p-[10px_20px] bg-[#d40065] hover:bg-black hover:text-white font-bold text-white">Daftar</button>
        </div>
    </form>
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
