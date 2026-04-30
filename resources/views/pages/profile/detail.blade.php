@extends('layouts.app')

@section('title')
    Profil
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Profil" :backRoute="route('profil')" :showBackground="true" textColor="text-custom-gray-10" />

    <form action="{{ route('update.profil') }}" method="POST" enctype="multipart/form-data"
        class="relative flex flex-col px-5">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4 bg-custom-gray-10 p-3 rounded-2xl border border-cutom-gray-40">
            <x-input-fieldv2 label="Sapaan" name="sapaan" type="select" :value="$member->sapaan" placeholder="Pilih Sapaan"
                icon="assets/images/icons/sapaan-primary.png" :options="[
                    'Bang' => 'Bang',
                    'Kak' => 'Kak',
                    'Pak' => 'Pak',
                    'Bu' => 'Bu',
                ]" />

            <x-input-fieldv2 label="Nama Lengkap" name="nama" type="text" :value="$member->nama"
                placeholder="Masukkan Nama Lengkap" icon="assets/images/icons/user-primary.png" />

            <x-input-fieldv2 label="Nomor WhatsApp" name="telepon" type="tel" :value="$member->telepon"
                placeholder="Masukkan Nomor WhatsApp. Cth: 08xxx" icon="assets/images/icons/phone-primary.png" />

            <x-input-fieldv2 label="Jenis Kelamin" name="gender" type="select" :value="$member->gender"
                placeholder="Pilih Jenis Kelamin" icon="assets/images/icons/gender-primary.png" :options="[
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ]" />

            <x-input-fieldv2 label="Email" name="email" type="email" :value="$member->email" placeholder="Masukkan Email"
                icon="assets/images/icons/email-primary.png" :readonly="(bool) $member->email_verified_at" />

            <x-input-fieldv2 label="Tempat Lahir" name="tempat_lahir" type="text" :value="$member->tempat_lahir"
                placeholder="Masukkan Tempat Lahir" icon="assets/images/icons/house-primary.png" />

            <x-input-fieldv2 label="Tanggal Lahir" name="tanggal_lahir" type="date" :value="$member->tanggal_lahir"
                placeholder="Masukkan Tanggal Lahir" icon="assets/images/icons/calendar-primary.png" />

            <x-input-fieldv2 label="Alamat" name="alamat" type="text" :value="$member->alamat" placeholder="Masukkan Alamat"
                icon="assets/images/icons/map-primary.png" />

            <div class="flex flex-col gap-1 w-full">
                <p class="font-medium text-sm text-custom-gray-90">Foto Profil</p>

                <input type="file" id="developer-photo" name="profile_picture" accept="image/jpeg,image/jpg,image/png"
                    class="hidden" />

                <div class="w-full border border-primary rounded p-3">
                    <div class="flex flex-col items-center justify-center text-center space-y-2" id="upload-area">
                        @if ($member->thumbnail)
                            @php
                                $isUrl = str_starts_with($member->thumbnail, 'http');
                            @endphp
                            <div class="relative">
                                <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-200">
                                    <img src="{{ $isUrl ? $member->thumbnail : asset('storage/' . $member->thumbnail) }}"
                                        class="w-full h-full object-cover" alt="Current Profile"
                                        referrerpolicy="no-referrer">
                                </div>
                                <button type="button" id="remove-photo-btn"
                                    class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors duration-200 text-sm font-bold">
                                    ×
                                </button>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-custom-gray-100">Foto saat ini</p>
                                <p class="text-[10px] text-custom-gray-80">Klik tombol di bawah untuk mengubah</p>
                            </div>
                            <button type="button" id="upload-button"
                                class="inline-flex items-center gap-2 px-6 py-3 h-10 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                                Ganti foto
                                <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5"
                                    alt="icon">
                            </button>
                        @else
                            <div class="w-[50px] h-[50px] bg-primary-border rounded-full flex items-center justify-center">
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
            <x-button-primary type="submit" :full-width="true">
                Simpan
            </x-button-primary>
        </div>
    </form>

    <div class="flex flex-col gap-2 p-5">
        <p class="font-medium text-sm text-custom-gray-90">Akun Terhubung</p>

        <div class="flex items-center justify-between p-3 border border-gray-200 rounded-xl bg-white">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                    <path fill="#4285F4"
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                    <path fill="#34A853"
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                    <path fill="#FBBC05"
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" />
                    <path fill="#EA4335"
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                </svg>

                <div>
                    <p class="text-sm font-medium text-gray-800">Google</p>
                    @if ($googleProvider)
                        <p class="text-xs text-green-600">Terhubung</p>
                    @else
                        <p class="text-xs text-gray-400">Belum terhubung</p>
                    @endif
                </div>
            </div>

            @if ($googleProvider)
                <form action="{{ route('google.disconnect') }}" method="POST" id="form-disconnect-google">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="showConfirm('confirm-disconnect-google')"
                        class="px-3 py-1.5 text-xs font-medium text-red-600 border border-red-300 rounded-lg hover:bg-red-50 transition-colors">
                        Putuskan
                    </button>
                </form>
            @else
                <a href="{{ route('google.connect') }}"
                    class="px-3 py-1.5 text-xs font-medium text-primary border border-primary rounded-lg hover:bg-primary/5 transition-colors">
                    Sambungkan
                </a>
            @endif
        </div>
    </div>

    <x-confirm-dialog id="confirm-disconnect-google" title="Putuskan Akun Google?"
        message="Anda tidak akan bisa login menggunakan Google setelah ini." confirm-text="Ya, Putuskan"
        cancel-text="Batal" type="danger" form-id="form-disconnect-google" />

    @include('includes.footer')
@endsection

@push('addon-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.getElementById('upload-button');
            const fileInput = document.getElementById('developer-photo');
            const uploadArea = document.getElementById('upload-area');
            const removePhotoBtn = document.getElementById('remove-photo-btn');

            // Simpan HTML awal
            const initialHTML = uploadArea.innerHTML;

            // Event listener untuk button click
            function attachUploadButtonListener() {
                const currentUploadButton = document.getElementById('upload-button');
                if (currentUploadButton) {
                    currentUploadButton.addEventListener('click', function() {
                        fileInput.click();
                    });
                }
            }

            if (removePhotoBtn) {
                removePhotoBtn.addEventListener('click', function() {
                    if (confirm('Apakah Anda yakin ingin menghapus foto profil?')) {
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
                            <button type="button" id="remove-photo-btn" 
                                class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors duration-200 text-sm font-bold">
                                ×
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
