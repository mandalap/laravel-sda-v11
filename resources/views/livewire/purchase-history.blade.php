<div>
    <x-navigation-route title="Riwayat Pembelian" backRoute="{{ route('profil') }}" textColor="text-primary"
        :showBackground="false" />

    @if (session('success'))
        <div class="mx-5 mb-3 px-4 py-3 rounded-xl bg-success-secondary text-success-pressed text-sm font-medium">
            {{ session('success') }}
        </div>
    @endif

    @if ($purchase->isEmpty())
        @include('components.no-data')
    @else
        <div class="container">
            @foreach ($purchase as $item)
                <section class="relative px-5 mb-3">
                    <a href="{{ route('purchase.detail', ['slug' => $item->slug]) }}" class="card block">
                        <div
                            class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 text-left gap-3">

                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/invoice.png') }}"
                                        class="w-5 h-5 flex-shrink-0" alt="invoice">
                                    <span class="text-sm font-medium text-custom-gray-80">{{ $item->invoice }}</span>
                                </div>

                                @if ($item->status === 'active')
                                    <div
                                        class="inline-flex py-1 px-2 rounded bg-warning-secondary text-sm font-medium text-warning-pressed">
                                        Aktif
                                    </div>
                                @elseif ($item->status === 'paid')
                                    <div
                                        class="inline-flex py-1 px-2 rounded bg-success-secondary text-sm font-medium text-success-pressed">
                                        Lunas
                                    </div>
                                @elseif ($item->status === 'cancelled')
                                    <div
                                        class="inline-flex py-1 px-2 rounded bg-danger-secondary text-sm font-medium text-danger-pressed">
                                        Batal
                                    </div>
                                @endif
                            </div>

                            <div class="border-t border-custom-gray-40"></div>

                            {{-- Info produk --}}
                            <div class="flex flex-row gap-2 items-center">
                                <div
                                    class="w-32 sm:w-56 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                                    <img src="{{ asset('storage/' . $item->product->project->thumbnail) }}"
                                        class="w-full h-full object-contain" alt="{{ $item->product->nama_product }}">
                                </div>

                                <div class="flex flex-col flex-1 min-w-0 gap-1">
                                    <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                                        {{ $item->product->project->nama_project }}
                                    </h3>
                                    <p class="text-xs text-custom-gray-70 line-clamp-1">
                                        {{ $item->product->project->alamat_project }}
                                    </p>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/images/icons/location2.png') }}"
                                            class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70 truncate">
                                            {{ $item->product->project->lokasi->regency->name }}
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/images/icons/category.png') }}"
                                            class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70 truncate">
                                            {{ $item->product->nama_product }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-custom-gray-40"></div>

                            <div class="flex justify-end items-center gap-2">
                                <div class="text-base font-medium text-custom-gray-80">
                                    Harga Produk:
                                </div>
                                <div class="text-base font-semibold text-primary">
                                    {{ 'Rp' . number_format($item->total_harga, 0, ',', '.') }}
                                </div>
                            </div>

                        </div>
                    </a>
                </section>
            @endforeach

            @if ($purchase->hasPages())
                <div class="px-5 py-4">
                    {{ $purchase->links() }}
                </div>
            @endif
        </div>
    @endif
</div>
