@extends('layouts.app')

@section('title')
    Daftar Agen
@endsection

@section('content')
    <x-navigation-route title="Daftar Agen" :backRoute="route('beranda')" :showBackground="true" textColor="text-custom-gray-10" />

    <div id="Top-nav" class="relative flex items-center px-5">
        <div class="gap-1">
            <p class="font-semibold text-xl text-custom-gray-10">Mulai Jualan Sekarang!</p>
            <p class="text-sm text-custom-gray-10">Nikmati Keuntungan Program Sukses Agen Baru</p>
        </div>
    </div>

    @forelse ($topAgencies as $agency)
        <div id="TopAgents" class="relative px-5 mt-5">
            <div class="flex flex-row rounded-2xl ring-1 ring-custom-gray-40 bg-custom-gray-10 overflow-hidden gap-3 p-4">
                <div
                    class="relative w-24 h-24 sm:w-28 sm:h-28 md:w-36 md:h-36 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-30">
                    @if ($agency->photo)
                        <img src="{{ asset('storage/' . $agency->photo) }}" class="w-full h-full object-cover"
                            alt="{{ $agency->nama }}">
                    @else
                        <div
                            class="w-full h-full flex items-center justify-center bg-custom-gray-30">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-10 h-10 sm:w-12 sm:h-12 md:w-16 md:h-16 text-primary/50" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M12 2a5 5 0 100 10A5 5 0 0012 2zM4 20a8 8 0 1116 0H4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </div>

                <div class="flex flex-col justify-center gap-1 flex-1 min-w-0">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg text-custom-gray-100 truncate">
                        {{ $agency->nama }}
                    </h3>
                    <p class="text-xs sm:text-sm text-custom-gray-60 truncate">
                        {{ $agency->kota_id }}
                    </p>

                    {{-- Stats --}}
                    <div class="flex flex-row gap-2 mt-1">
                        <div
                            class="flex flex-col items-center justify-center rounded px-2 py-1.5 sm:px-3 sm:py-2 bg-primary-secondary flex-1">
                            <p class="font-bold text-xs sm:text-sm md:text-base text-custom-gray-100 whitespace-nowrap">
                                {{ $agency->lama_bergabung }}
                            </p>
                            <p class="text-[9px] sm:text-[10px] md:text-xs text-custom-gray-60 mt-0.5">Bergabung</p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center rounded px-2 py-1.5 sm:px-3 sm:py-2 bg-primary-secondary flex-1">
                            <p class="font-bold text-xs sm:text-sm md:text-base text-custom-gray-100">
                                {{ $agency->produk_terjual_count }}
                            </p>
                            <p class="text-[9px] sm:text-[10px] md:text-xs text-custom-gray-60 mt-0.5">Terjual</p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center rounded px-2 py-1.5 sm:px-3 sm:py-2 bg-primary-secondary flex-1">
                            <p class="font-bold text-xs sm:text-sm md:text-base text-custom-gray-100 whitespace-nowrap">
                                {{ $agency->komisi_formatted }}
                            </p>
                            <p class="text-[9px] sm:text-[10px] md:text-xs text-custom-gray-60 mt-0.5">Komisi</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @empty
        <x-no-data />
    @endforelse

    <div class="relative px-5 mt-5 pb-6">
        <x-button-primary id="open-affiliate-modal" type="button" :full-width="true">
            Daftar sebagai Agen Penjualan
        </x-button-primary>
    </div>
@endsection

@push('modals')
    <div id="affiliate-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-[9999] overflow-y-auto">

        <div id="affiliate-backdrop" class="fixed inset-0 bg-black/50"></div>

        <div class="relative flex justify-center min-h-full p-4">
            <div class="relative w-full max-w-lg bg-white rounded-2xl flex flex-col h-fit mt-auto mb-auto">

                <div class="flex items-center justify-end px-5 pt-5 pb-4 border-b border-gray-100">
                    <button id="close-affiliate-modal" type="button"
                        class="text-custom-gray-70 hover:text-primary p-1 rounded-lg hover:bg-gray-100 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="px-5 py-4 flex flex-col gap-4">

                    <div
                        class="flex flex-col rounded-2xl ring-1 ring-custom-gray-40 overflow-hidden transition-all duration-300 hover:ring-primary">
                        <div class="w-full h-[180px] flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/images/photos/affiliate-thumb-2.jpg') }}"
                                class="w-full h-full object-cover" alt="Affiliate Member">
                        </div>
                        <div class="flex flex-col p-4 gap-2 bg-white">
                            <h3 class="font-semibold text-sm text-custom-gray-100">Sajada Affiliate Member</h3>
                            <p class="text-xs text-custom-gray-80 leading-relaxed">
                                Mendapatkan komisi tambahan sebesar
                                <span class="text-custom-gray-90 font-bold">50Rb s/d 100Rb</span>
                                per transaksi penjualan yang terselesaikan dari member yang ditambahkan
                                dari link promosi atau kode referral.
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex flex-col rounded-2xl ring-1 ring-custom-gray-40 overflow-hidden transition-all duration-300 hover:ring-primary">
                        <div class="w-full h-[180px] flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/images/photos/affiliate-thumb-1.png') }}"
                                class="w-full h-full object-cover" alt="Affiliate Penjualan">
                        </div>
                        <div class="flex flex-col p-4 gap-2 bg-white">
                            <h3 class="font-semibold text-sm text-custom-gray-100">Sajada Affiliate Penjualan</h3>
                            <p class="text-xs text-custom-gray-80 leading-relaxed">
                                Mendapatkan komisi tambahan sebesar
                                <span class="text-custom-gray-90 font-bold">500 ribu s/d 2 juta</span>
                                per transaksi penjualan yang terselesaikan dari link promosi atau kode referral.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="px-5 pb-5">
                    <x-button-primary :href="route('affiliate.daftar')" :full-width="true">
                        Daftar Sekarang
                    </x-button-primary>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('addon-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('affiliate-modal');
            const backdrop = document.getElementById('affiliate-backdrop');
            const openBtn = document.getElementById('open-affiliate-modal');
            const closeBtn = document.getElementById('close-affiliate-modal');

            function openModal() {
                modal.classList.remove('hidden');
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.scrollTop = 0;
            }

            if (openBtn) openBtn.addEventListener('click', openModal);
            if (closeBtn) closeBtn.addEventListener('click', closeModal);
            if (backdrop) backdrop.addEventListener('click', closeModal);

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeModal();
            });
        });
    </script>
@endpush
