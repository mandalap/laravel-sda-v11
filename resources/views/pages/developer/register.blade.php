@extends('layouts.app')

@section('title')
    Daftar Kerjasama
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Formulir Daftar Kerjasama" :backRoute="route('developer.index')" textColor="text-primary" />

    <div class="px-5 w-full">
        <form class="flex flex-col gap-4" method="POST" enctype="multipart/form-data"
            action="{{ route('developer.register.store') }}">
            @csrf
            <x-input-fieldv2 label="Nama Developer" name="nama" type="text" placeholder="Masukkan nama developer"
                icon="assets/images/icons/building-primary.png" required />
            <x-input-fieldv2 label="Alamat" name="alamat" type="text" placeholder="Masukkan alamat developer"
                icon="assets/images/icons/map-primary.png" required />
            <x-input-fieldv2 label="Nomor Whatsapp" name="telepon" type="tel" placeholder="Masukkan nomor WhatsApp"
                icon="assets/images/icons/phone-primary.png" required />
            <x-input-fieldv2 label="Email" name="email" type="text" placeholder="Masukkan email developer"
                icon="assets/images/icons/email-primary.png" required />

            <div class="flex flex-col gap-1 w-full">
                <p class="font-medium text-sm text-custom-gray-90">Foto/logo developer</p>

                <input type="file" id="developer-photo" name="thumbnail" accept="image/jpeg,image/jpg,image/png"
                    class="hidden" />

                <div class="w-full border border-primary rounded p-3">
                    <div class="flex flex-col items-center justify-center text-center space-y-2" id="upload-area">
                        <div class="w-[50px] h-[50px] bg-primary-border rounded-full flex items-center justify-center">
                            <img src="{{ asset('assets/images/icons/file-primary.png') }}" class="w-8 h-8" alt="icon">
                        </div>
                        <div>
                            <p class="text-base font-medium text-custom-gray-100">Upload foto di sini</p>
                            <p class="text-[10px] text-custom-gray-80 max-w-xs">
                                Upload foto atau logo developer Anda
                            </p>
                            <p class="text-[10px] text-custom-gray-80 max-w-xs">
                                dalam format file JPG, JPEG, dan PNG
                            </p>
                        </div>
                        <button type="button" id="upload-button"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                            Pilih file
                            <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5" alt="icon">
                        </button>
                    </div>
                </div>
            </div>

            <x-button-primary type="submit" :full-width="true">
                Daftar
            </x-button-primary>
        </form>
    </div>
@endsection

@push('addon-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.getElementById('upload-button');
            const fileInput = document.getElementById('developer-photo');
            const uploadArea = document.getElementById('upload-area');

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

            // Debug form submission
            document.querySelector('form').addEventListener('submit', function(e) {
                console.log('=== FORM SUBMIT DEBUG ===');
                console.log('File input files:', fileInput.files);
                console.log('Files count:', fileInput.files.length);

                const formData = new FormData(this);
                console.log('FormData thumbnail:', formData.get('thumbnail'));
                console.log('=== END DEBUG ===');
            });

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
