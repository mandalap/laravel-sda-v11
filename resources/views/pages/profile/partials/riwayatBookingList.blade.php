@forelse ($bookings as $booking)
    <section id="Result" class="relative px-5 mb-3">
        @if (in_array($booking->status, ['booking', 'cancel']))
            {{-- Untuk status booking dan cancel, gunakan anchor tag --}}
            <a href="{{ route('riwayat.booking.detail', ['invoice' => $booking->invoice]) }}" class="card block">
                <div
                    class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 text-left gap-3">

                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/invoice.png') }}" class="w-5 h-5 flex-shrink-0"
                                alt="invoice">
                            <span class="text-sm font-medium text-custom-gray-80">{{ $booking->invoice }}</span>
                        </div>

                        <div>
                            @if ($booking->status == 'booking')
                                <div
                                    class="inline-flex py-1 px-2 rounded bg-success-secondary text-sm font-medium text-success-pressed">
                                    Booking
                                </div>
                            @elseif ($booking->status == 'cancel')
                                <div
                                    class="inline-flex py-1 px-2 rounded bg-danger-secondary text-sm font-medium text-danger-pressed">
                                    Batal
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="border-t border-custom-gray-40"></div>

                    <div class="flex flex-row gap-2 items-center">
                        <div
                            class="w-32 sm:w-56 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                            <img src="{{ asset('storage/' . $booking->product->project->thumbnail) }}"
                                class="w-full h-full object-contain" alt="{{ $booking->product->name }}">
                        </div>

                        <div class="flex flex-col flex-1 min-w-0">
                            <div class="flex flex-col gap-1">
                                <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                                    {{ $booking->product->project->nama_project }}
                                </h3>
                                <p class="text-xs text-custom-gray-70 line-clamp-1">
                                    {{ $booking->product->project->alamat_project }}</p>
                                <div class="flex items-center gap-[4px] sm:gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/location2.png') }}"
                                        class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">
                                        {{ $booking->product->project->lokasi->regency->name }}
                                    </p>
                                </div>
                                <div class="flex items-center gap-[4px] sm:gap-[6px]">
                                    <img src="{{ asset('assets/images/icons/tag.png') }}"
                                        class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                    <p class="text-xs text-custom-gray-70 truncate">Rp
                                        {{ number_format($booking->total_harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-custom-gray-40"></div>

                    <div class="flex justify-between items-center">
                        <div class="text-sm font-semibold text-primary">
                            {{ $booking->product->nama_product }}
                        </div>

                        <div class="text-right">
                            <div class="flex flex-col gap-1">
                                <p class="text-sm font-medium text-custom-gray-80">Jumlah pembayaran: <span
                                        class="text-sm font-semibold text-primary">Rp
                                        {{ number_format($booking->jumlah_uang_booking, 0, ',', '.') }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @else
            {{-- Untuk status pending, gunakan form --}}
            <form action="{{ route('checkout', $booking->product->project->slug) }}" method="POST" class="card">
                @csrf
                <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                <button type="submit" class="w-full" @if (empty($booking->snap_token)) disabled @endif>
                    <div
                        class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 text-left gap-3">

                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/invoice.png') }}" class="w-5 h-5 flex-shrink-0"
                                    alt="invoice">
                                <span class="text-sm font-medium text-custom-gray-80">{{ $booking->invoice }}</span>
                            </div>

                            <div>
                                @php
                                    \Carbon\Carbon::setLocale('id');
                                    $expiryUTC = \Carbon\Carbon::parse($booking->snap_token_expiry);
                                    $expiryGMT7 = $expiryUTC->copy()->addHours(7);
                                @endphp
                                <div
                                    class="inline-flex py-1 px-2 rounded bg-warning-secondary text-sm font-medium text-warning-pressed">
                                    Pending
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-custom-gray-40"></div>

                        <div class="flex flex-row gap-2 items-center">
                            <div
                                class="w-32 sm:w-56 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                                <img src="{{ asset('storage/' . $booking->product->project->thumbnail) }}"
                                    class="w-full h-full object-contain" alt="{{ $booking->product->name }}">
                            </div>

                            <div class="flex flex-col flex-1 min-w-0">
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                                        {{ $booking->product->project->nama_project }}
                                    </h3>
                                    <p class="text-xs text-custom-gray-70 line-clamp-1">
                                        {{ $booking->product->project->alamat_project }}</p>
                                    <div class="flex items-center gap-[4px] sm:gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/location2.png') }}"
                                            class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70 truncate">
                                            {{ $booking->product->project->lokasi->regency->name }}
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-[4px] sm:gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/tag.png') }}"
                                            class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" alt="icon">
                                        <p class="text-xs text-custom-gray-70 truncate">Rp
                                            {{ number_format($booking->total_harga, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-custom-gray-40"></div>

                        <div class="flex justify-between items-center">
                            <div class="text-sm font-semibold text-primary">
                                {{ $booking->product->nama_product }}
                            </div>

                            <div class="text-right">
                                <div class="flex flex-col gap-1">
                                    <p class="text-sm font-medium text-custom-gray-80">Jumlah pembayaran: <span
                                            class="text-sm font-semibold text-primary">Rp
                                            {{ number_format($booking->jumlah_uang_booking, 0, ',', '.') }}</span></p>
                                </div>
                            </div>
                        </div>

                        @if ($booking->snap_token)
                            <div class="flex justify-between items-center">
                                <div class="space-y-3 text-left">
                                    <div class="text-xs text-custom-gray-80 font-medium">
                                        Silahkan lanjutkan pembayaran Anda, batas waktu pembayaran adalah tanggal
                                        <span
                                            class="text-custom-gray-100 font-semibold">{{ $expiryGMT7->translatedFormat('d F Y') }}</span>
                                        pukul
                                        <span
                                            class="text-custom-gray-100 font-semibold">{{ $expiryGMT7->format('H:i') }}
                                            WIB</span>
                                    </div>
                                    <div class="text-xs text-custom-gray-80 font-medium">
                                        Sisa waktu: <span id="countdown-{{ $booking->id }}"
                                            data-expiry="{{ $booking->snap_token_expiry }}"></span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex justify-end items-center w-full">
                                <div class="flex items-center gap-1 text-xs font-medium text-danger-main">
                                    <span>Menunggu konfirmasi Admin</span>
                                    <img src="{{ asset('assets/images/icons/alert-danger.png') }}"
                                        class="w-5 h-5 flex-shrink-0" alt="alert">
                                </div>
                            </div>
                        @endif
                    </div>
                </button>
            </form>
        @endif
    </section>
@empty
    <div class="flex flex-col items-center justify-center h-[300px] text-center px-4">
        <p class="text-gray-500 text-sm sm:text-base">Data belum tersedia</p>
    </div>
@endforelse
