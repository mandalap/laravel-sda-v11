@forelse ($bookings as $booking)
    <section id="Result" class="flex relative flex-col gap-4 px-5 mt-5 mb-3">
        <form action="{{ route('checkout', $booking->product->project->slug) }}" method="POST" class="card">
            @csrf
            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
            <button type="submit" class="card w-full" @if (in_array($booking->status, ['cancel', 'booking'])) disabled @endif>
                <div
                    class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                    <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $booking->product->project->thumbnail) }}"
                                class="object-cover w-full h-full" alt="{{ $booking->product->name }}">
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 text-left">
                        <div class="flex items-center gap-[6px]">
                            <h3 class="font-semibold text-lg">{{ $booking->product->project->nama_project }}</h3>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <p class="text-sm text-ngekos-grey">{{ $booking->product->nama_product }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <p class="text-sm text-ngekos-grey">{{ $booking->product->project->alamat_project }}</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">
                                {{ $booking->product->project->lokasi->regency->name }}
                            </p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/bill.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $booking->invoice }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/price.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">Rp {{ number_format($booking->total_harga) }}</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex">
                            <p class="text-sm lg:text-lg font-semibold text-[#d40065]">Rp
                                {{ number_format($booking->jumlah_uang_booking) }}</p>
                        </div>
                        @if ($booking->status == 'pending')
                            @php
                                \Carbon\Carbon::setLocale('id');
                                $expiryUTC = \Carbon\Carbon::parse($booking->snap_token_expiry);
                                $expiryGMT7 = $expiryUTC->copy()->addHours(7);
                            @endphp

                            <div class="flex flex-col items-start gap-2">
                                <p
                                    class="rounded-full p-[6px_12px] bg-ngekos-orange font-bold text-xs leading-[18px] text-white">
                                    PENDING
                                </p>

                                <div class="text-xs text-gray-700 text-left">
                                    Silakan lanjutkan pembayaran Anda, batas waktu pembayaran adalah tanggal
                                    <strong>{{ $expiryGMT7->translatedFormat('d F Y') }}</strong> pukul
                                    <strong>{{ $expiryGMT7->format('H:i') }} WIB</strong>
                                </div>
                                <div class="text-xs text-[#d40065] font-medium">
                                    Sisa waktu: <span id="countdown-{{ $booking->id }}"
                                        data-expiry="{{ $booking->snap_token_expiry }}"></span>
                                </div>
                            </div>
                        @elseif ($booking->status == 'booking')
                            <div class="flex">
                                <p
                                    class="rounded-full p-[6px_12px] bg-[#058E2A] font-bold text-xs leading-[18px] text-white">
                                    BOOKING
                                </p>
                            </div>
                        @elseif ($booking->status == 'cancel')
                            <div class="flex">
                                <p
                                    class="rounded-full p-[6px_12px] bg-[#FF0000] font-bold text-xs leading-[18px] text-white">
                                    CANCEL
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </button>
        </form>
    </section>
@empty
    <div class="flex flex-col items-center justify-center h-[300px] text-center">
        <p class="text-center">Data belum tersedia</p>
    </div>
@endforelse
