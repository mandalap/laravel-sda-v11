@extends('layouts.app')

@section('title')
    Affiliate - Affiliasi
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Affiliasi" textColor="text-custom-gray-10" :showBackground="true" :showAgencyProfile="true"
        :agencyData="auth()->user()" />

    <div id="Header" class="flex flex-col relative items-center gap-5 px-5">
        <div class="w-full">
            <p class="text-sm leading-[20px] font-semibold text-custom-gray-10 justify-between min-h-[54px]">
                Ajak temanmu dan dapatkan komisi dari setiap penjualan yang mereka lakukan dengan cara salin dan bagian kode
                atau link referralmu di bawah ini.
            </p>
        </div>

        <div class="flex flex-col w-full rounded-2xl border border-custom-gray-40 p-3 gap-4 bg-custom-gray-10">
            <p class="text-base font-semibold text-custom-gray-100">
                Referral
            </p>

            <div class="flex flex-col w-full gap-1">
                <label for="affiliate-code" class="text-sm font-medium text-custom-gray-90">
                    Kode Referral
                </label>
                <div
                    class="flex items-center w-full h-10 rounded p-3 gap-2 bg-custom-gray-10 ring-1 ring-custom-gray-40 focus-within:ring-primary transition-all duration-300">
                    <input type="text" id="affiliate-code"
                        class="w-full outline-none appearance-none placeholder:text-sm text-custom-gray-70 bg-transparent"
                        value="{{ $agency->agency_code }}" readonly>
                    <button type="button" onclick="copyAffiliateCode()"
                        class="w-10 h-10 shrink-0 flex items-center justify-center transition" title="Copy code">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col w-full gap-1">
                <label for="affiliate-link" class="text-sm font-medium text-custom-gray-90">
                    Link Referral
                </label>
                <div
                    class="flex items-center w-full h-10 p-3 rounded gap-2 bg-custom-gray-10 ring-1 ring-custom-gray-40 focus-within:ring-primary transition-all duration-300">
                    <input type="text" id="affiliate-link"
                        class="w-full outline-none appearance-none placeholder:text-sm text-custom-gray-70 bg-transparent"
                        value="{{ route('daftar.with.reff', $agency->slug) ?? 'kode tidak ditemukan' }}" readonly>
                    <button type="button" onclick="copyAffiliateLink()"
                        class="w-10 h-10 shrink-0 flex items-center justify-center" title="Copy link">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        @livewire('affiliate-members')
    </div>
    @include('includes.footerAgency')
@endsection

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Konfigurasi SweetAlert Toast
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });

        // Fungsi copy yang lebih robust dengan fallback
        async function copyToClipboard(text, successMessage) {
            try {
                // Coba menggunakan modern clipboard API
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(text);
                    Toast.fire({
                        icon: 'success',
                        toast: true,
                        position: 'top',
                        width: '32rem',
                        title: successMessage
                    });
                } else {
                    // Fallback untuk browser lama atau context yang tidak secure
                    const textArea = document.createElement('textarea');
                    textArea.value = text;
                    textArea.style.position = 'fixed';
                    textArea.style.left = '-999999px';
                    textArea.style.top = '-999999px';
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();

                    try {
                        const successful = document.execCommand('copy');
                        if (successful) {
                            Toast.fire({
                                icon: 'success',
                                toast: true,
                                position: 'top',
                                width: '32rem',
                                title: successMessage
                            });
                        } else {
                            throw new Error('Copy command failed');
                        }
                    } catch (err) {
                        console.error('Fallback copy failed:', err);
                        Toast.fire({
                            icon: 'error',
                            toast: true,
                            position: 'top',
                            width: '32rem',
                            title: 'Tidak dapat menyalin secara otomatis. Silakan salin secara manual.'
                        });
                    } finally {
                        document.body.removeChild(textArea);
                    }
                }
            } catch (err) {
                console.error('Copy failed:', err);
                Toast.fire({
                    icon: 'error',
                    toast: true,
                    position: 'top',
                    width: '32rem',
                    title: 'Gagal menyalin. Silakan coba lagi atau salin secara manual.'
                });
            }
        }

        function copyAffiliateCode() {
            const input = document.getElementById('affiliate-code');
            if (input && input.value.trim() !== '') {
                copyToClipboard(input.value, 'Kode referral berhasil disalin');
            } else {
                Toast.fire({
                    icon: 'warning',
                    toast: true,
                    position: 'top',
                    width: '32rem',
                    title: 'Kode referral tidak tersedia'
                });
            }
        }

        function copyAffiliateLink() {
            const input = document.getElementById('affiliate-link');
            if (input && input.value.trim() !== '') {
                copyToClipboard(input.value, 'Link referral berhasil disalin');
            } else {
                Toast.fire({
                    icon: 'warning',
                    toast: true,
                    position: 'top',
                    width: '32rem',
                    title: 'Link referral tidak tersedia'
                });
            }
        }
    </script>
@endpush
