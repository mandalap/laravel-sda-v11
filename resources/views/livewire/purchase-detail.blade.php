<div>
    <x-navigation-route title="Detail Pembelian" backRoute="{{ route('purchase.history') }}" textColor="text-primary"
        :showBackground="false" />

    @if (session('success'))
        <div class="mx-5 mb-3 px-4 py-3 rounded-xl bg-success-secondary text-success-pressed text-sm font-medium">
            {{ session('success') }}
        </div>
    @endif

    <div class="container px-5 space-y-5 pb-8">

        <div class="rounded-2xl border border-custom-gray-40 bg-custom-gray-10 p-3 space-y-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/icons/invoice.png') }}" class="w-5 h-5 flex-shrink-0"
                        alt="invoice">
                    <span class="text-sm font-medium text-custom-gray-80">{{ $purchase->invoice }}</span>
                </div>
                @if ($purchase->status === 'active')
                    <div
                        class="inline-flex py-1 px-2 rounded bg-warning-secondary text-sm font-medium text-warning-pressed">
                        Aktif</div>
                @elseif ($purchase->status === 'paid')
                    <div
                        class="inline-flex py-1 px-2 rounded bg-success-secondary text-sm font-medium text-success-pressed">
                        Lunas</div>
                @elseif ($purchase->status === 'cancelled')
                    <div
                        class="inline-flex py-1 px-2 rounded bg-danger-secondary text-sm font-medium text-danger-pressed">
                        Batal</div>
                @endif
            </div>

            <div class="border-t border-custom-gray-40"></div>

            <div class="flex flex-row gap-3 items-center">
                <div
                    class="w-32 sm:w-56 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                    <img src="{{ asset('storage/' . $purchase->product->project->thumbnail) }}"
                        class="w-full h-full object-contain" alt="{{ $purchase->product->nama_product }}">
                </div>
                <div class="flex flex-col flex-1 min-w-0 gap-1">
                    <h3 class="text-sm font-semibold text-custom-gray-100">
                        {{ $purchase->product->project->nama_project }}
                    </h3>
                    <p class="text-xs text-custom-gray-70 line-clamp-1">
                        {{ $purchase->product->project->alamat_project }}
                    </p>
                    <div class="flex items-center gap-1">
                        <img src="{{ asset('assets/images/icons/location2.png') }}"
                            class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                        <p class="text-xs text-custom-gray-70 truncate">
                            {{ $purchase->product->project->lokasi->regency->name }}
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <img src="{{ asset('assets/images/icons/category.png') }}"
                            class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                        <p class="text-xs text-custom-gray-70 truncate">
                            {{ $purchase->product->nama_product }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-custom-gray-40"></div>

        <div class="bg-custom-gray-10 space-y-3">
            <h4 class="text-sm font-semibold text-custom-gray-100">Detail Harga</h4>

            <div class="space-y-2 px-2">
                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Harga Produk</span>
                    <span
                        class="font-medium text-custom-gray-100">Rp{{ number_format($purchase->harga_tanah, 0, ',', '.') }}</span>
                </div>

                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Uang Booking</span>
                    <span
                        class="font-medium text-custom-gray-100">Rp{{ number_format($purchase->harga_booking, 0, ',', '.') }}</span>
                </div>

                @if ($purchase->diskon > 0)
                    <div class="flex justify-between text-sm">
                        <span class="text-custom-gray-70">Potongan Harga</span>
                        <span class="font-medium text-primary">-
                            Rp{{ number_format($purchase->diskon, 0, ',', '.') }}</span>
                    </div>
                @endif
                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Total Harga</span>
                    <span
                        class="font-semibold text-custom-gray-100">Rp{{ number_format($purchase->total_harga, 0, ',', '.') }}</span>
                </div>

                @if ($purchase->tanggal_pembelian)
                    <div class="flex justify-between text-sm">
                        <span class="text-custom-gray-70">Tanggal Pembelian</span>
                        <span class="font-medium text-custom-gray-100">
                            {{ $purchase->tanggal_pembelian->timezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') }}
                            WIB
                        </span>
                    </div>
                @endif

                <div class="flex justify-between text-sm">
                    <span class="text-custom-gray-70">Metode Pembayaran</span>
                    <span class="font-medium text-custom-gray-100">{{ $purchase->metode_pembayaran_label }}</span>
                </div>
            </div>
        </div>

        @if ($purchase->hasCicilan())
            <div class="border-t border-custom-gray-40"></div>

            <div class="bg-custom-gray-10 space-y-3">
                <h4 class="text-sm font-semibold text-custom-gray-100">Detail Cicilan</h4>

                <div class="space-y-2 px-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-custom-gray-70">Uang Muka (DP)</span>
                        <span
                            class="font-medium text-custom-gray-100">Rp{{ number_format($purchase->jumlah_dp, 0, ',', '.') }}</span>
                    </div>

                    <div class="flex justify-between text-sm">
                        <span class="text-custom-gray-70">Cicilan per bulan</span>
                        <span
                            class="font-medium text-custom-gray-100">Rp{{ number_format($purchase->harga_cicilan_perbulan, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-custom-gray-70">Jangka cicilan</span>
                        <span class="font-medium text-custom-gray-100">{{ $purchase->jumlah_bulan_cicilan }}
                            bulan</span>
                    </div>
                </div>
            </div>
        @endif

        @if ($purchase->hasCicilan())
            <div class="space-y-3">
                <h4 class="text-sm font-semibold text-custom-gray-100">Daftar Cicilan</h4>

                <div class="grid grid-cols-5 gap-2">
                    @foreach ($purchase->installments as $cicilan)
                        <button wire:click="selectCicilan({{ $cicilan->id }})"
                            class="w-full h-12 flex items-center justify-center rounded-md border-2 text-sm font-semibold transition-all duration-200
                    {{ $cicilan->status === 'paid' ? 'bg-success-secondary text-success-pressed' : '' }}
                    {{ $cicilan->status === 'pending' ? 'bg-warning-border text-warning-pressed' : '' }}
                    {{ in_array($cicilan->status, ['rejected', 'cancelled']) ? 'bg-danger-secondary text-danger-pressed' : '' }}
                    {{ $cicilan->status === 'unpaid' ? 'border-custom-gray-40 bg-custom-gray-10 text-custom-gray-70' : '' }}
                    {{ $selectedCicilan?->id === $cicilan->id ? '!border-custom-gray-90' : 'hover:border-custom-gray-60' }}">
                            {{ $cicilan->no_cicilan }}
                        </button>
                    @endforeach
                </div>

                <div class="flex flex-wrap gap-x-4 gap-y-1 text-xs text-custom-gray-70">
                    <span class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-sm bg-success-secondary border border-success-pressed"></span>
                        Lunas
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-sm bg-warning-border border border-warning-pressed"></span>
                        Pending
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-sm bg-custom-gray-10 border border-custom-gray-40"></span>
                        Belum Dibayar
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-sm bg-danger-secondary border border-danger-pressed"></span>
                        Ditolak/Batal
                    </span>
                </div>

                @if ($selectedCicilan)
                    <div class="border border-custom-gray-40 rounded-xl p-3 space-y-3">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-bold text-custom-gray-100">
                                Cicilan Ke-{{ $selectedCicilan->no_cicilan }}
                            </p>
                            <span
                                class="inline-flex py-1 px-2 rounded text-xs font-semibold
                    {{ $selectedCicilan->status === 'unpaid' ? 'bg-custom-gray-20 text-custom-gray-70' : '' }}
                    {{ $selectedCicilan->status === 'pending' ? 'bg-warning-border text-warning-pressed' : '' }}
                    {{ $selectedCicilan->status === 'paid' ? 'bg-success-secondary text-success-pressed' : '' }}
                    {{ in_array($selectedCicilan->status, ['rejected', 'cancelled']) ? 'bg-danger-secondary text-danger-pressed' : '' }}">
                                {{ $selectedCicilan->status_label }}
                            </span>
                        </div>

                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between">
                                <span class="text-custom-gray-70">No. Transaksi</span>
                                <span
                                    class="font-semibold text-custom-gray-100">{{ $selectedCicilan->no_transaksi }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-custom-gray-70">Bulan</span>
                                <span
                                    class="font-semibold text-custom-gray-100">{{ $selectedCicilan->tanggal_cicilan_label }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-custom-gray-70">Harga Cicilan</span>
                                <span class="font-semibold text-custom-gray-100">
                                    Rp {{ number_format($selectedCicilan->harga_cicilan, 0, ',', '.') }}
                                </span>
                            </div>
                            @if ($selectedCicilan->tanggal_bayar)
                                <div class="flex justify-between">
                                    <span class="text-custom-gray-70">Tanggal Bayar</span>
                                    <span class="font-semibold text-custom-gray-100">
                                        {{ $selectedCicilan->tanggal_bayar->timezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') }}
                                        WIB
                                    </span>
                                </div>
                            @endif

                            @if ($selectedCicilan->metode_pembayaran)
                                <div class="flex justify-between">
                                    <span class="text-custom-gray-70">Metode Bayar</span>
                                    <span class="font-semibold text-custom-gray-100">
                                        {{ $selectedCicilan->metode_pembayaran === 'cash' ? 'Cash' : 'Transfer' }}
                                    </span>
                                </div>
                            @endif

                            @if ($selectedCicilan->bukti_pembayaran)
                                <div class="flex justify-between items-center">
                                    <span class="text-custom-gray-70">Bukti Pembayaran</span>
                                    <a href="{{ asset('storage/' . $selectedCicilan->bukti_pembayaran) }}"
                                        target="_blank" class="font-semibold text-primary underline text-sm">
                                        Lihat Bukti Pembayaran
                                    </a>
                                </div>
                            @endif

                            @if ($selectedCicilan->kwitansi)
                                <div class="flex justify-between items-center">
                                    <span class="text-custom-gray-70">Kwitansi</span>
                                    <a href="{{ asset('storage/' . $selectedCicilan->kwitansi) }}" target="_blank"
                                        class="font-semibold text-primary underline text-sm">
                                        Lihat Kwitansi
                                    </a>
                                </div>
                            @endif

                            @if ($selectedCicilan->catatan_admin)
                                <div class="flex justify-between items-center">
                                    <span class="text-custom-gray-70">Catatan Admin</span>
                                    <span class="font-semibold text-custom-gray-100">
                                        {{ $selectedCicilan->catatan_admin }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        @if (in_array($selectedCicilan->status, ['unpaid', 'rejected']))
                            <x-button-primary :full-width="true" size="lg" :href="route('pay-installment', [
                                'slug' => $purchase->slug,
                                'installmentId' => encrypt($selectedCicilan->id),
                            ])">
                                Bayar Cicilan
                            </x-button-primary>
                        @endif
                    </div>
                @endif
            </div>
        @endif

    </div>
</div>
