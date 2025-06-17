@extends('layouts.app')

@section('title')
    Affiliate-Profil
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tab-button {
            position: relative;
            border-bottom: 2px solid transparent;
        }

        .tab-button.active {
            color: #d40065;
            border-bottom-color: #d40065;
            font-weight: 600;
        }

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
            margin-left: 43px !important;
            font-size: 16px;
        }

        /* Styling untuk placeholder */
        .select2-container--custom-class .select2-selection__placeholder {
            color: #5E6F76;
            font-size: 14px;
            /* Ubah ukuran font placeholder di sini */
            margin-left: 40px;
        }

        .select2-container--custom-class .select2-selection__placeholder,
        .select2-container--default .select2-selection__rendered {
            font-size: 14px;
            color: #5E6F76;
        }
/* 
        .select2-container--default .select2-selection__placeholder {
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

    <!-- Top Nav Agency -->
    <x-top-nav-agency title="Profil Agency" back-route="affiliate.dashboard" />

    <form action="{{ route('affiliate.profile.update') }}" method="POST" enctype="multipart/form-data"
        class="relative flex flex-col px-5 mt-[30px]">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-4 bg-white p-4 rounded-[30px] border border-[#F1F2F6]">
            <!-- Tab Navigation -->
            <div class="flex">
                <button type="button"
                    class="tab-button active flex-1 py-4 px-6 text-sm font-medium text-center text-gray-600 transition-all duration-300"
                    onclick="switchTab('profil')">
                    Profil Agency
                </button>
                <button type="button"
                    class="tab-button flex-1 py-4 px-6 text-sm font-medium text-center text-gray-600 transition-all duration-300"
                    onclick="switchTab('rekening')">
                    Informasi Rekening
                </button>
            </div>
            <!-- Tab 1: Profil Pribadi -->
            <div id="profil-tab" class="tab-content active">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Sapaan</p>
                        <label
                            class="relative flex items-center w-full rounded-full p-[14px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/user.svg') }}"
                                class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0"
                                alt="icon">
                            <select name="sapaan" class="w-full pl-8 bg-white text-sm outline-none appearance-none">
                                <option value="" hidden>Pilih Sapaan</option>
                                <option value="Bang" {{ $agency->sapaan == 'Bang' ? 'selected' : '' }}>Bang</option>
                                <option value="Kak" {{ $agency->sapaan == 'Kak' ? 'selected' : '' }}>Kak</option>
                                <option value="Pak" {{ $agency->sapaan == 'Pak' ? 'selected' : '' }}>Pak</option>
                                <option value="Bu" {{ $agency->sapaan == 'Bu' ? 'selected' : '' }}>Bu</option>
                            </select>
                            <img src="{{ asset('/assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Nama</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/user.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="nama" value="{{ $agency->nama }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Nama">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Nomor WhatsApp</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/phone.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="tel" name="telepon" value="{{ $agency->telepon }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Nomor WhatsApp">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Jenis Kelamin</p>
                        <label
                            class="relative flex items-center w-full rounded-full p-[14px_20px] gap-2 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/gender.svg') }}"
                                class="flex absolute left-5 top-1/2 w-5 h-5 transform -translate-y-1/2 shrink-0"
                                alt="icon">
                            <select name="gender" class="w-full pl-8 bg-white text-sm outline-none appearance-none">
                                <option value="" hidden>Pilih Jenis Kelamin</option>
                                <option value="L" {{ $agency->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $agency->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            <img src="{{ asset('/assets/images/icons/arrow-down.svg') }}" class="w-5 h-5" alt="icon">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Email</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/mail.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="email" value="{{ $agency->email }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Email">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Asal Kota</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="kota_id" value="{{ $agency->kota_id }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Tempat Lahir">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Tanggal Lahir</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/calendar.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="date" name="tanggal_lahir" value="{{ $agency->tanggal_lahir }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Tanggal Lahir">
                        </label>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Alamat</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/location2.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="alamat" value="{{ $agency->alamat }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Alamat">
                        </label>
                    </div>

                    <label class="text-sm font-semibold">Foto Profil</label>
                    <div class="flex flex-col w-full gap-5">
                        <div>
                            @if ($agency->photo)
                                <img src="{{ asset('storage/' . $agency->photo) }}"
                                    class="w-20 h-20 rounded-full border border-dark" alt="icon">
                            @else
                                <img src="{{ asset('/assets/images/icons/profil-default.png') }}"
                                    class="w-20 h-20 rounded-full border border-dark" alt="Default photo">
                            @endif
                        </div>
                        <div>
                            <input type="file" name="photo" class="p-2 border rounded-lg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Informasi Rekening -->
            <div id="rekening-tab" class="tab-content">
                <div class="flex flex-col gap-4">
                    {{-- <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Nama Bank</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/bank.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <select id="nama_bank" name="nama_bank" class="select2-ajax select2-pl-40">
                                @if ($agency && $agency->nama_bank)
                                    <option value="{{ $agency->nama_bank }}" selected>{{ $agency->nama_bank }}</option>
                                @endif
                            </select>
                        </label>
                    </div> --}}

                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold text-sm">Nama Bank</p>
                        <div class="relative w-full">
                            <div
                                class="select2-wrapper ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] rounded-full transition-all duration-300">
                                <!-- Ikon kiri (bank) -->
                                <img src="{{ asset('assets/images/icons/bank.svg') }}" class="select2-icon-left"
                                    alt="icon">

                                <!-- Select2 field -->
                                <select id="nama_bank" name="nama_bank" class="select2-ajax select2-pl-40">
                                    @if ($agency && $agency->nama_bank)
                                        <option value="{{ $agency->nama_bank }}" selected>{{ $agency->nama_bank }}
                                        </option>
                                    @endif
                                </select>

                                <!-- Ikon panah kanan -->
                                <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="select2-icon-right"
                                    alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Nama Pemilik Rekening</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/user.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="nama_pemilik" value="{{ $agency->nama_pemilik ?? '' }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Nama Pemilik Rekening">
                        </label>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-sm">Nomor Rekening</p>
                        <label
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <img src="{{ asset('/assets/images/icons/credit-card.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <input type="text" name="nomor_rekening" value="{{ $agency->nomor_rekening ?? '' }}"
                                class="w-full text-sm outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal"
                                placeholder="Masukkan Nomor Rekening" inputmode="numeric">
                        </label>
                    </div>
                    <!-- Info tambahan -->
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                        <div class="flex items-start gap-2">
                            <img src="{{ asset('/assets/images/icons/info.svg') }}" class="w-4 h-4 mt-0.5 shrink-0"
                                alt="info">
                            <div class="text-xs text-blue-700">
                                <p class="font-semibold mb-1">Informasi Penting:</p>
                                <p>Pastikan data rekening yang dimasukkan sudah benar. Informasi ini akan digunakan untuk
                                    pembayaran komisi affiliate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="text-sm flex w-full justify-center rounded-full p-[10px_20px] mt-3 mb-3 bg-[#d40065] hover:bg-black hover:text-white font-bold text-white">
            Simpan Profil
        </button>
        </div>
    </form>
@endsection

@push('addon-script')
    <script src="{{ asset('vendor/jQuery-3.7.0/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#nama_bank').select2({
                placeholder: 'Cari Nama Bank...',
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
                    url: '{{ route('bank.search') }}', // tambahkan route ini nanti
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data.map(item => ({
                                id: item.nama_bank,
                                text: item.nama_bank
                            }))
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2,
            });
        });
    </script>

    <script>
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
            });

            // Show selected tab content
            document.getElementById(tabName + '-tab').classList.add('active');

            // Add active class to clicked button
            event.target.classList.add('active');
        }

        // Check for errors and switch to appropriate tab
        @if ($errors->any())
            document.addEventListener('DOMContentLoaded', function() {
                const errors = @json($errors->keys());
                const rekeningFields = ['nama_bank', 'nomor_rekening', 'nama_pemilik'];

                // Check if any rekening fields have errors
                const hasRekeningError = errors.some(field => rekeningFields.includes(field));

                if (hasRekeningError) {
                    // Switch to rekening tab
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    document.querySelectorAll('.tab-button').forEach(button => {
                        button.classList.remove('active');
                    });

                    document.getElementById('rekening-tab').classList.add('active');
                    document.querySelectorAll('.tab-button')[1].classList.add('active');
                }
            });
        @endif
    </script>
@endpush
