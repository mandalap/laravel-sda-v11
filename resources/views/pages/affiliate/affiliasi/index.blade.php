@extends('layouts.app')

@section('title')
    Affiliate-Affiliasi
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[230px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>

    <!-- Top Nav Agency -->
    <x-top-nav-agency title="Affiliasi" back-route="affiliate.dashboard" />

    <div id="Header" class="relative items-center justify-between gap-2 px-5 mt-[18px]">
        <!-- Code Refferal -->
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white mt-4">
            <div class="flex gap-4">
                <div class="flex flex-col w-full gap-3">
                    <p class="text-sm md:text-base leading-[27px] justify-between  min-h-[54px]">
                        Ajak temanmu untuk bergabung dengan Sajada Digital Agency dan dapatkan komisi dari setiap penjualan
                        yang mereka lakukan.
                        Semakin banyak teman yang kamu ajak, semakin besar komisi yang kamu dapatkan. Ayo, bagikan link
                        referral ini kepada
                        teman-temanmu dan bantu mereka untuk mendapatkan layanan digital terbaik dari Sajada Digital Agency.
                        Bersama-sama kita
                        bisa mencapai kesuksesan yang lebih besar!
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white mt-4">
            <p class="text-sm font-semibold leading-[27px] ">
                Code Referral
            </p>
            <hr class="border-[#F1F2F6]">
            <div
                class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                <input type="text" id="affiliate-code"
                    class="w-full outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal text-sm bg-transparent"
                    value="{{ $agency->agency_code }}" readonly>
                <button type="button" onclick="copyAffiliateCode()"
                    class="w-10 h-10 shrink-0 flex items-center justify-center bg-[#d40065] rounded-full hover:bg-[#a7006d] transition"
                    title="Copy code">
                    <!-- Icon copy SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
            </div>

        </div>

        <!-- Link Referral -->
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white mt-4">
            <div class="flex gap-4">
                <div class="flex flex-col w-full gap-3">
                    <p class="text-sm font-semibold leading-[27px] ">
                        Link Referral
                    </p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex flex-col w-full gap-2">
                        <div
                            class="flex items-center w-full rounded-full p-[10px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <input type="text" id="affiliate-link"
                                class="w-full outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal text-sm bg-transparent"
                                value="{{ route('daftar.with.reff', $agency->slug) ?? 'kode tidak ditemukan' }}" readonly>
                            <button type="button" onclick="copyAffiliateLink()"
                                class="w-10 h-10 shrink-0 flex items-center justify-center bg-[#d40065] rounded-full hover:bg-[#a7006d] transition"
                                title="Copy link">
                                <!-- Icon copy SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Member List -->
        <div class="max-w-full mt-6">
            <div class="bg-white rounded-[30px] border border-gray-400 p-4 sm:p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Member Kamu</h2>

                @if ($affiliatedMembers->count())
                    <!-- Responsive Table -->
                    <div class="overflow-hidden">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="px-2 py-3 text-left text-sm font-medium text-gray-500">Nama</th>
                                    <th class="px-2 py-3 text-left text-sm font-medium text-gray-500 hidden sm:table-cell">
                                        Telepon</th>
                                    <th class="px-2 py-3 text-left text-sm font-medium text-gray-500">Bergabung</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 ">
                                @foreach ($affiliatedMembers as $affiliate)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-2">
                                            <div class="flex items-center gap-3">
                                                @if ($affiliate->member->thumbnail)
                                                    <img src="{{ asset('storage/' . $affiliate->member->thumbnail) }}"
                                                        class="w-8 h-8 rounded-full border border-gray-300" alt="Foto">
                                                @else
                                                    <img src="{{ asset('/assets/images/icons/profil-default.png') }}"
                                                        class="w-8 h-8 rounded-full border border-gray-300" alt="Default">
                                                @endif
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">
                                                        {{ $affiliate->member->nama }}</p>
                                                    <p class="text-xs text-gray-500 sm:hidden">
                                                        {{ $affiliate->member->telepon }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 text-sm text-gray-900 hidden sm:table-cell">
                                            {{ $affiliate->member->telepon }}</td>
                                        <td class="px-2 py-3">
                                            <span class="text-xs font-medium  py-1 ">
                                                {{ $affiliate->joined_at->locale('id')->isoFormat('D MMMM YYYY') }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $affiliatedMembers->links() }}
                    </div>
                @else
                    <p class="text-gray-500">Belum ada member yang menggunakan kode referral kamu.</p>
                @endif
            </div>
        </div>


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
