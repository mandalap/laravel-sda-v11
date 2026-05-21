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
                    class="relative w-24 sm:w-24 md:w-40 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                    @if ($agency->photo)
                        <img src="{{ asset('storage/' . $agency->photo) }}" class="w-full h-full object-contain"
                            alt="{{ $agency->nama }}">
                    @else
                        @php
                            $nameParts = preg_split('/\s+/', trim($agency->nama));
                            $initials = '';
                            foreach ($nameParts as $part) {
                                if ($part !== '' && mb_strlen($initials) < 2) {
                                    $initials .= mb_strtoupper(mb_substr($part, 0, 1));
                                }
                            }
                        @endphp
                        <div
                            class="w-24 h-24 sm:w-32 md:w-40 flex items-center justify-center bg-custom-gray-30 text-custom-gray-100 font-semibold text-3xl">
                            {{ $initials ?: strtoupper(substr($agency->nama, 0, 1)) }}
                        </div>
                    @endif
                </div>

                <div class="flex flex-col justify-center gap-1">
                    <h3 class="font-medium text-sm text-custom-gray-100">{{ $agency->nama }}</h3>
                    <p class="text-xs text-custom-gray-80 leading-relaxed">
                        {{ $agency->kota_id }}
                    </p>
                    <div class="flex flex-row gap-1">
                        <div class="flex flex-col items-center justify-center rounded p-2 bg-primary-secondary">
                            <p class=" font-semibold text-sm text-custom-gray-100">{{ $agency->lama_bergabung }}</p>
                            <p class="text-[10px] text-custom-gray-80">Bergabung</p>
                        </div>
                        <div class="flex flex-col items-center justify-center rounded p-2 bg-primary-secondary">
                            <p class=" font-semibold text-sm text-custom-gray-100">{{ $agency->produk_terjual_count }}</p>
                            <p class="text-[10px] text-custom-gray-80">Terjual</p>

                        </div>
                        <div class=" flex flex-col items-center justify-center rounded p-2 bg-primary-secondary">
                            <p class=" font-semibold text-sm text-custom-gray-100">{{ $agency->komisi_formatted }}</p>
                            <p class="text-[10px] text-custom-gray-80">Komisi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="relative px-5 mt-5">
            <div class="rounded-2xl ring-1 ring-custom-gray-40 bg-custom-gray-10 overflow-hidden gap-3 p-4">
                <p class="text-sm text-custom-gray-80">Belum ada agen yang tersedia saat ini.</p>
            </div>
        </div>
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

                <div class="flex items-center justify-between px-5 pt-5 pb-4 border-b border-gray-100">
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
