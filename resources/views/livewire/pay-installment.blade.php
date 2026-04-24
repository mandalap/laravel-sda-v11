<div>
    <x-navigation-route title="Bayar Cicilan" backRoute="{{ route('purchase.detail', ['slug' => $slug]) }}"
        textColor="text-primary" :showBackground="false" />

    <div class="container px-5 space-y-4 pb-8">

        <div class="rounded-2xl border border-custom-gray-40 bg-white p-3 space-y-3">
            <h4 class="text-sm font-semibold text-custom-gray-100">Info Cicilan</h4>
            <div class="border-t border-custom-gray-40"></div>
            <div class="space-y-2">
                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Produk</span>
                    <span class="font-medium text-custom-gray-100 text-right">
                        {{ $purchase->product->project->nama_project }} - {{ $purchase->product->nama_product }}
                    </span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Cicilan ke</span>
                    <span class="font-medium text-custom-gray-100">{{ $installment->no_cicilan }}</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Bulan</span>
                    <span class="font-medium text-custom-gray-100">{{ $installment->tanggal_cicilan_label }}</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Jumlah</span>
                    <span class="text-base font-bold text-primary">
                        Rp {{ number_format($installment->harga_cicilan, 0, ',', '.') }}
                    </span>
                </div>
            </div>
        </div>

        @if ($installment->status === 'rejected' && $installment->catatan_admin)
            <div
                class="rounded-2xl border border-danger-main bg-danger-secondary px-4 py-3 text-sm text-danger-pressed">
                <p class="font-semibold mb-1">Pembayaran sebelumnya ditolak</p>
                <p>{{ $installment->catatan_admin }}</p>
            </div>
        @endif

        <div class="flex flex-col gap-4 bg-custom-gray-10 p-3 rounded-2xl border border-cutom-gray-40">
            @php
                $iconMetode =
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M18.125 5H1.875C1.52982 5 1.25 5.27982 1.25 5.625V14.375C1.25 14.7202 1.52982 15 1.875 15H18.125C18.4702 15 18.75 14.7202 18.75 14.375V5.625C18.75 5.27982 18.4702 5 18.125 5Z" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.75 5L18.75 9.375" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.75 15L18.75 10.625" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.25 5L1.25 9.375" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.25 15L1.25 10.625" stroke="#D81D76" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
            @endphp
            <x-input-fieldv2 label="Metode Pembayaran" name="metode" type="select"
                placeholder="Pilih metode pembayaran" wire:model.live="metode" :iconSvg="$iconMetode" :options="['transfer' => 'Transfer', 'cash' => 'Cash']" />

            @error('metode')
                <p class="text-xs text-danger-main">{{ $message }}</p>
            @enderror

            @if ($metode === 'transfer')
                <div class="flex flex-col gap-1 w-full">
                    <p class="text-sm font-medium text-custom-gray-90">
                        Bukti Pembayaran <span class="text-danger-main">*</span>
                    </p>

                    <div class="w-full border border-primary rounded p-3">
                        <label for="bukti-upload"
                            class="flex flex-col items-center justify-center text-center space-y-2 cursor-pointer">

                            @if ($buktiTransfer)
                                <div class="relative">
                                    <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-200">
                                        <img src="{{ $buktiTransfer->temporaryUrl() }}"
                                            class="w-full h-full object-cover" alt="Preview">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-custom-gray-100">
                                        {{ $buktiTransfer->getClientOriginalName() }}</p>
                                    <p class="text-[10px] text-custom-gray-80">
                                        {{ number_format($buktiTransfer->getSize() / 1024, 0) }} KB</p>
                                </div>
                                <span
                                    class="inline-flex items-center gap-2 px-6 py-3 h-10 bg-primary text-white text-sm font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                                    Ganti file
                                    <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5"
                                        alt="icon">
                                </span>
                            @else
                                <div
                                    class="w-[50px] h-[50px] bg-primary-border rounded-full flex items-center justify-center">
                                    <img src="{{ asset('assets/images/icons/file-primary.png') }}" class="w-8 h-8"
                                        alt="icon">
                                </div>
                                <div>
                                    <p class="text-base font-medium text-custom-gray-100">Upload bukti di sini</p>
                                    <p class="text-[10px] text-custom-gray-80">dalam format file JPG, JPEG, PNG</p>
                                    <p class="text-[10px] text-custom-gray-80">maksimal 2MB</p>
                                </div>
                                <span
                                    class="inline-flex items-center gap-2 px-6 py-3 h-10 bg-primary text-white text-sm font-medium rounded-full hover:bg-primary/90 transition-colors duration-200">
                                    Pilih file
                                    <img src="{{ asset('assets/images/icons/upload-primary.png') }}" class="w-5 h-5"
                                        alt="icon">
                                </span>
                            @endif

                            <input id="bukti-upload" type="file" wire:model="buktiTransfer"
                                accept="image/jpeg,image/jpg,image/png" class="hidden">

                            <div wire:loading wire:target="buktiTransfer"
                                class="text-xs text-custom-gray-70 text-center items-center">
                                Mengupload...
                            </div>

                            @error('buktiTransfer')
                                <p class="text-xs text-danger-main">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>

                    <div class="flex items-start">
                        <div class="text-xs text-primary">
                            <p class="font-semibold mb-1">Informasi Penting:</p>
                            <p>Pastikan anda sudah melakukan transfer ke rekening yang sudah diberikan. Setelah
                                melakukan transfer, kirim bukti pembayaran melalui form di atas</p>
                            <p>Admin akan memverifikasi pembayaran anda dalam 1x24 jam (jam kerja) setelah
                                pengajuan diterima</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <x-button-primary :full-width="true" wire:click="submit" wire:loading.attr="disabled">
            Bayar Cicilan
        </x-button-primary>
    </div>
</div>
