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
                    <div class="flex flex-col gap-3  ">
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
                            <img src="{{ asset('assets/images/icons/profile-2user.svg') }}"
                                class="flex w-5 h-5 shrink-0" alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $booking->invoice }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/profile-2user.svg') }}"
                                class="flex w-5 h-5 shrink-0" alt="icon">
                            <p class="text-xs text-ngekos-grey">Rp {{ number_format($booking->total_harga) }}</p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex">
                            <p class="text-sm lg:text-lg font-semibold text-[#d40065]">Rp
                                {{ number_format($booking->jumlah_uang_booking) }}</p>
                        </div>
                        <div class="flex">
                            @if ($booking->status == 'pending')
                                @php
                                    \Carbon\Carbon::setLocale('id');
                                    $expiryUTC = \Carbon\Carbon::parse($booking->snap_token_expiry);
                                    $expiryGMT7 = $expiryUTC->copy()->addHours(7);
                                @endphp

                                <div class="inline-block">
                                    <span
                                        class="inline-flex items-center bg-[#d40065] text-white rounded-lg px-4 py-2 text-sm font-semibold">
                                        Pending
                                    </span>
                                </div>

                                <div class="text-xs text-gray-700 text-left">
                                    Silakan lanjutkan pembayaran Anda, batas waktu pembayaran adalah tanggal
                                    <strong>{{ $expiryGMT7->translatedFormat('d F Y') }}</strong> pukul
                                    <strong>{{ $expiryGMT7->format('H:i') }} WIB</strong>
                                    (<span class="text-[#d40065] font-medium" id="countdown-{{ $booking->id }}"
                                        data-expiry="{{ $booking->snap_token_expiry }}"></span>)
                                </div>
                            @elseif ($booking->status == 'booking')
                                <div class="inline-block">
                                    <span
                                        class="inline-flex items-center bg-[#d40065] text-white rounded-lg px-4 py-2 text-sm font-semibold">
                                        Booking
                                    </span>
                                </div>
                            @elseif ($booking->status == 'cancel')
                                <div class="inline-block">
                                    <span
                                        class="inline-flex items-center bg-[#d40065] text-white rounded-lg px-4 py-2 text-sm font-semibold">
                                        Cancel
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </button>
        </form>
    </section>
@empty
    <p class="text-center">Anda belum memiliki riwayat booking.</p>
@endforelse
