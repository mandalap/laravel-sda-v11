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
            color: #D81D76;
            border-bottom-color: #D81D76;
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
            border-radius: 4px;
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

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            padding-left: 10px;
        }

        /* Styling untuk dropdown ketika terbuka */
        .select2-container--custom-class .select2-dropdown {
            border-radius: 4px;
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

        li.select2-results__option.select2-results__message {
            padding: 10px;
            font-size: 0.875rem;
        }

        /* Styling untuk hasil yang dihover/difokuskan */
        .select2-container--custom-class .select2-results__option--highlighted {
            background-color: #f8f9fa;
            color: #D81D76;
        }

        /* Styling untuk hasil yang dipilih */
        .select2-container--custom-class .select2-results__option--selected {
            background-color: #ffeef7;
            color: #D81D76;
        }

        /* Menyembunyikan panah dropdown bawaan Select2 */
        .select2-container--custom-class .select2-selection__arrow {
            display: none !important;
        }

        /* Styling untuk rendered text (teks yang terpilih) */
        .select2-container--default .select2-selection__rendered {
            margin-left: 30px !important;
            font-size: 14px;
        }

        /* Styling untuk placeholder */
        .select2-container--custom-class .select2-selection__placeholder {
            color: #5E6F76;
            font-size: 14px;
            /* Ubah ukuran font placeholder di sini */
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

        /* Wrapper kustom untuk Select2 */
        .select2-wrapper {
            position: relative;
            width: 100%;
            background-color: white;
            padding: 0;
            border-radius: 4px;
            height: 44px;
        }

        /* Styling untuk icon di dalam wrapper */
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
    <x-navigation-route title="Profil" :backRoute="route('affiliate.dashboard')" textColor="text-custom-gray-10" :showBackground="true" :showAgencyProfile="true"
        :showLogout="true" />

    <form action="{{ route('affiliate.profile.update') }}" method="POST" enctype="multipart/form-data"
        class="relative flex flex-col px-5">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-4 bg-white p-3 rounded-2xl border border-custom-gray-40 mb-2">
            <!-- Tab Navigation -->
            <div class="flex">
                <button type="button"
                    class="tab-button active flex-1 p-2.5 text-sm font-medium text-center text-custom-gray-70 transition-all duration-300"
                    onclick="switchTab('profil')">
                    Profil Agency
                </button>
                <button type="button"
                    class="tab-button flex-1 p-2.5 text-sm font-medium text-center text-custom-gray-70 transition-all duration-300"
                    onclick="switchTab('rekening')">
                    Informasi Rekening
                </button>
            </div>

            <!-- Tab 1: Profil Pribadi -->
            <div id="profil-tab" class="tab-content active">
                <div class="flex flex-col gap-4">
                    <x-input-fieldv2 label="Sapaan" name="sapaan" type="select" icon="assets/images/icons/user.svg"
                        placeholder="Pilih Sapaan" :value="$agency->sapaan" :options="[
                            'Bang' => 'Bang',
                            'Kak' => 'Kak',
                            'Pak' => 'Pak',
                            'Bu' => 'Bu',
                        ]" />

                    <x-input-fieldv2 label="Nama" name="nama" icon="assets/images/icons/user.svg"
                        placeholder="Masukkan Nama" :value="$agency->nama" />

                    <x-input-fieldv2 label="Nomor WhatsApp" name="telepon" type="tel"
                        icon="assets/images/icons/phone.svg" placeholder="Masukkan Nomor WhatsApp" :value="$agency->telepon" />

                    <x-input-fieldv2 label="Jenis Kelamin" name="gender" type="select"
                        icon="assets/images/icons/gender.svg" placeholder="Pilih Jenis Kelamin" :value="$agency->gender"
                        :options="[
                            'L' => 'Laki-laki',
                            'P' => 'Perempuan',
                        ]" />

                    <x-input-fieldv2 label="Email" name="email" type="email" icon="assets/images/icons/mail.svg"
                        placeholder="Masukkan Email" :value="$agency->email" />

                    <x-input-fieldv2 label="Asal Kota" name="kota_id" icon="assets/images/icons/location2.png"
                        placeholder="Masukkan Tempat Lahir" :value="$agency->kota_id" />

                    <x-input-fieldv2 label="Tanggal Lahir" name="tanggal_lahir" type="date"
                        icon="assets/images/icons/calendar.svg" placeholder="Masukkan Tanggal Lahir" :value="$agency->tanggal_lahir" />

                    <x-input-fieldv2 label="Alamat" name="alamat" icon="assets/images/icons/location2.png"
                        placeholder="Masukkan Alamat" :value="$agency->alamat" />

                    <div class="flex flex-col w-full gap-2">
                        <x-input-fieldv2 label="Kode Referral" name="agency_code" icon="assets/images/icons/user.svg"
                            placeholder="Masukkan Kode Referral" :value="$agency->agency_code" :disabled="$agency->referral_code_edited" />

                        <!-- Info tambahan -->
                        <div class="text-xs text-primary">
                            <p>Kode referral hanya bisa diganti sebanyak 1 kali.</p>
                        </div>

                    </div>

                    <div class="flex flex-col gap-1 w-full">
                        <p class="font-medium text-sm text-custom-gray-90">Foto Profil</p>

                        <input type="file" id="developer-photo" name="photo" accept="image/jpeg,image/jpg,image/png"
                            class="hidden" />

                        <div class="w-full border border-primary rounded p-3">
                            <div class="flex flex-col items-center justify-center text-center space-y-2" id="upload-area">
                                @if ($agency->photo)
                                    {{-- Jika sudah ada foto, tampilkan preview --}}
                                    <div class="relative">
                                        <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-200">
                                            <img src="{{ asset('storage/' . $agency->photo) }}"
                                                class="w-full h-full object-cover" alt="Current Profile">
                                        </div>
                                        <button type="button" id="remove-photo-btn"
                                            class="absolute -top-1.5 -right-1.5 w-4 h-4 bg-custom-gray-20 rounded-full flex items-center justify-center hover:bg-primary transition-colors duration-200 p-0">
                                            <img src="{{ asset('assets/images/icons/x.png') }}" alt="Remove"
                                                class="w-2.5 h-2.5 object-contain" />
                                        </button>

                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-custom-gray-100">Foto saat ini</p>
                                        <p class="text-[10px] text-custom-gray-80">Klik tombol di bawah untuk mengubah</p>
                                    </div>
                                    <button type="button" id="upload-button"
                                        class="inline-flex items-center gap-2 px-6 py-3 h-10 bg-primary text-custom-gray-10 font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                                        Ganti foto
                                        <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5"
                                            alt="icon">
                                    </button>
                                @else
                                    {{-- Jika belum ada foto, tampilkan upload area --}}
                                    <div
                                        class="w-[50px] h-[50px] bg-primary-border rounded-full flex items-center justify-center">
                                        <img src="{{ asset('assets/images/icons/file-primary.png') }}" class="w-8 h-8"
                                            alt="icon">
                                    </div>
                                    <div>
                                        <p class="text-base font-medium text-custom-gray-100">Upload foto di sini</p>
                                        <p class="text-[10px] text-custom-gray-80 max-w-xs">
                                            Upload foto profil Anda
                                        </p>
                                        <p class="text-[10px] text-custom-gray-80 max-w-xs">
                                            dalam format file JPG, JPEG, dan PNG
                                        </p>
                                    </div>
                                    <button type="button" id="upload-button"
                                        class="inline-flex items-center gap-2 px-6 py-3 h-10 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                                        Pilih file
                                        <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5"
                                            alt="icon">
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Informasi Rekening -->
            <div id="rekening-tab" class="tab-content">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2 w-full">
                        <p class="font-semibold text-sm">Nama Bank</p>
                        <div class="relative w-full">
                            <div
                                class="select2-wrapper flex items-center w-full h-10 rounded p-3 bg-custom-gray-10 ring-1 ring-custom-gray-50 focus-within:ring-primary transition-all duration-300 relative">
                                <!-- Ikon kiri (bank) -->
                                <img src="{{ asset('assets/images/icons/bank.svg') }}" class="select2-icon-left"
                                    alt="icon">

                                <!-- Select2 field -->
                                <select id="nama_bank" name="nama_bank" class="select2-ajax">
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

                    <x-input-fieldv2 label="Nama Pemilik Rekening" name="nama_pemilik"
                        icon="assets/images/icons/user.svg" placeholder="Masukkan Nama Pemilik Rekening"
                        :value="$agency->nama_pemilik ?? ''" />

                    <x-input-fieldv2 label="Nomor Rekening" name="nomor_rekening" type="text"
                        icon="assets/images/icons/credit-card.svg" placeholder="Masukkan Nomor Rekening"
                        :value="$agency->nomor_rekening ?? ''" inputmode="numeric" />

                    <!-- Info tambahan -->
                    <div class="bg-custom-gray-10 border border-custom-gray-40 rounded-lg p-3">
                        <div class="flex items-start">
                            <div class="text-xs text-primary">
                                <p class="font-semibold mb-1">Informasi Penting:</p>
                                <p>Pastikan data rekening yang dimasukkan sudah benar. Informasi ini akan digunakan untuk
                                    pencairan komisi affiliate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-button-primary type="submit" :full-width="true">
                Simpan
            </x-button-primary>
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

        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('nama_bank');
            const maxLength = 25;

            for (let i = 0; i < select.options.length; i++) {
                const option = select.options[i];
                const fullText = option.text;

                if (fullText.length > maxLength) {
                    option.text = fullText.slice(0, maxLength) + '...';
                    option.setAttribute('title', fullText); // Tooltip untuk lihat nama lengkap
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.getElementById('upload-button');
            const fileInput = document.getElementById('developer-photo');
            const uploadArea = document.getElementById('upload-area');
            const removePhotoBtn = document.getElementById('remove-photo-btn');

            // Simpan HTML awal
            const initialHTML = uploadArea.innerHTML;

            console.log('Upload elements found:', {
                uploadButton: !!uploadButton,
                fileInput: !!fileInput,
                uploadArea: !!uploadArea
            });

            // Event listener untuk button click
            function attachUploadButtonListener() {
                const currentUploadButton = document.getElementById('upload-button');
                if (currentUploadButton) {
                    currentUploadButton.addEventListener('click', function() {
                        console.log('Upload button clicked');
                        fileInput.click();
                    });
                }
            }

            // Event listener untuk remove button (jika ada foto existing)
            if (removePhotoBtn) {
                removePhotoBtn.addEventListener('click', function() {
                    if (confirm('Apakah Anda yakin ingin menghapus foto profil?')) {
                        // Reset ke state upload
                        uploadArea.innerHTML = `
                        <div class="w-[50px] h-[50px] bg-primary-border rounded-full flex items-center justify-center">
                            <img src="{{ asset('assets/images/icons/file-primary.png') }}" class="w-8 h-8" alt="icon">
                        </div>
                        <div>
                            <p class="text-base font-medium text-custom-gray-100">Upload foto di sini</p>
                            <p class="text-[10px] text-custom-gray-80 max-w-xs">
                                Upload foto profil Anda
                            </p>
                            <p class="text-[10px] text-custom-gray-80 max-w-xs">
                                dalam format file JPG, JPEG, dan PNG
                            </p>
                        </div>
                        <button type="button" id="upload-button"
                            class="inline-flex items-center gap-2 px-6 py-3 h-10 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                            Pilih file
                            <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5" alt="icon">
                        </button>
                    `;
                        attachUploadButtonListener();

                        // Add hidden input untuk mark deletion (jika diperlukan)
                        const deleteInput = document.createElement('input');
                        deleteInput.type = 'hidden';
                        deleteInput.name = 'delete_current_photo';
                        deleteInput.value = '1';
                        fileInput.parentNode.appendChild(deleteInput);
                    }
                });
            }

            // Attach initial listener
            attachUploadButtonListener();

            // Event listener untuk file selection
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                console.log('File selected:', file);

                removeErrorMessage();

                if (file) {
                    // Validasi file type
                    const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                    if (!allowedTypes.includes(file.type)) {
                        showErrorMessage('Format file tidak didukung. Gunakan JPG, JPEG, atau PNG.');
                        fileInput.value = '';
                        return;
                    }

                    // Validasi ukuran file 
                    const maxSize = 2 * 1024 * 1024;
                    if (file.size > maxSize) {
                        showErrorMessage('Ukuran file terlalu besar. Maksimal 2MB.');
                        fileInput.value = '';
                        return;
                    }

                    displaySelectedFile(file);
                } else {
                    resetToInitialState();
                }
            });

            function displaySelectedFile(file) {
                removeErrorMessage();

                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadArea.innerHTML = `
                    <div class="flex flex-col items-center justify-center text-center space-y-3">
                        <div class="relative">
                            <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-200">
                                <img src="${e.target.result}" class="w-full h-full object-cover" alt="Preview">
                            </div>
                           <button type="button" id="remove-photo-btn" class="absolute -top-1.5 -right-1.5 w-4 h-4 bg-custom-gray-20 rounded-full flex items-center justify-center hover:bg-primary transition-colors duration-200 p-0">
                                <img src="{{ asset('assets/images/icons/x.png') }}" alt="Remove" class="w-2.5 h-2.5 object-contain" />
                            </button>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-custom-gray-100">${file.name}</p>
                            <p class="text-[10px] text-custom-gray-80">${formatFileSize(file.size)}</p>
                        </div>
                        <button type="button" id="change-file-btn"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                            Ganti file
                            <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5" alt="icon">
                        </button>
                    </div>
                `;

                    // Event listeners untuk tombol baru
                    document.getElementById('change-file-btn').addEventListener('click', function() {
                        fileInput.click();
                    });

                    document.getElementById('remove-photo-btn').addEventListener('click', function() {
                        fileInput.value = '';
                        resetToInitialState();
                    });
                };
                reader.readAsDataURL(file);
            }

            function resetToInitialState() {
                uploadArea.innerHTML = initialHTML;
                attachUploadButtonListener();
            }

            function showErrorMessage(message) {
                removeErrorMessage();
                const errorDiv = document.createElement('div');
                errorDiv.id = 'upload-error-message';
                errorDiv.className =
                    'mt-3 p-2 text-xs text-red-500 text-center bg-red-50 rounded border border-red-200';
                errorDiv.textContent = message;
                uploadArea.appendChild(errorDiv);

                setTimeout(() => removeErrorMessage(), 5000);
            }

            function removeErrorMessage() {
                const existingError = document.getElementById('upload-error-message');
                if (existingError) {
                    existingError.remove();
                }
            }

            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }

            // Drag and drop
            const uploadContainer = document.querySelector('.border.border-primary');
            uploadContainer.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('bg-gray-50');
            });

            uploadContainer.addEventListener('dragleave', function(e) {
                e.preventDefault();
                this.classList.remove('bg-gray-50');
            });

            uploadContainer.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('bg-gray-50');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    const dt = new DataTransfer();
                    dt.items.add(files[0]);
                    fileInput.files = dt.files;

                    fileInput.dispatchEvent(new Event('change', {
                        bubbles: true
                    }));
                }
            });
        });
    </script>
@endpush
