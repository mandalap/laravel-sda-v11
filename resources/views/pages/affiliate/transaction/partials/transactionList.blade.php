@foreach ($transactions as $transaction)
    <div
        class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 text-left gap-3">

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/images/icons/invoice.png') }}" class="w-5 h-5 flex-shrink-0" alt="invoice">
                <span
                    class="text-sm font-medium text-custom-gray-80">{{ $transaction->bookingTransaction->invoice }}</span>
            </div>

            <div>
                @if ($transaction->status == 'diambil')
                    <div
                        class="inline-flex py-1 px-2 rounded bg-custom-gray-30 text-sm font-medium text-warning-pressed">
                        Diambil
                    </div>
                @elseif ($transaction->status == 'tersedia')
                    <div
                        class="inline-flex py-1 px-2 rounded bg-success-secondary text-sm font-medium text-success-pressed">
                        Tersedia
                    </div>
                @endif
            </div>
        </div>

        <div class="border-t border-custom-gray-40"></div>

        <div class="flex flex-col justify-center gap-3">
            <div class="flex flex-row justify-between gap-2">
                <p class="text-sm text-custom-gray-100 font-semibold">Produk</p>
                <p class="text-sm text-primary font-semibold">
                    {{ $transaction->bookingTransaction->product->project->nama_project }} -
                    {{ $transaction->bookingTransaction->product->nama_product }}
                </p>
            </div>
            <div class="flex flex-row justify-between gap-2">
                <p class="text-sm text-custom-gray-100 font-semibold">Member</p>
                <p class="text-sm text-primary font-semibold">
                    {{ $transaction->bookingTransaction->member->nama }}
                </p>
            </div>
            <div class="flex flex-row justify-between gap-2">
                <p class="text-sm text-custom-gray-100 font-semibold">Fee</p>
                <p class="text-sm text-primary font-semibold">
                    Rp{{ number_format($transaction->jumlah_fee, 0, ',', '.') }}
                </p>
            </div>
            @if ($transaction->tanggal_pengambilan)
                <div class="flex flex-row justify-between gap-2">
                    <p class="text-sm text-custom-gray-100 font-semibold">Tanggal Diambil</p>
                    <p class="text-sm text-primary font-semibold">
                        {{ \Carbon\Carbon::parse($transaction->tanggal_pengambilan)->setTimezone('Asia/Jakarta')->translatedFormat('d F Y') }}
                    </p>
                </div>
            @endif
        </div>
    </div>
@endforeach
