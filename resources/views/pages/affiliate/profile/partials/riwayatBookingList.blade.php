@forelse ($bookings as $booking)
    <section id="Result" class="relative px-4 sm:px-5 mt-5 mb-3">
        <div
            class="flex flex-col md:flex-row rounded-[20px] md:rounded-[30px] border border-[#F1F2F6] p-3 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">

            <!-- Gambar -->
            <div
                class="relative w-full md:w-[500px] h-auto md:h-[183px] aspect-auto md:aspect-square rounded-[20px] md:rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                <img src="{{ asset('storage/' . $booking->product->project->thumbnail) }}"
                    class="object-cover w-full h-full" alt="{{ $booking->product->name }}">
            </div>

            <!-- Konten -->
            <div class="flex flex-col gap-2 md:gap-3 w-full p-2 md:p-0 text-left">
                <!-- Nama & Info Product -->
                <div class="flex flex-col">
                    <h3 class="text-sm md:text-lg font-semibold">{{ $booking->product->project->nama_project }}
                    </h3>
                    <p class="text-xs md:text-sm text-ngekos-grey">{{ $booking->product->nama_product }}</p>
                    <p class="text-xs md:text-sm text-ngekos-grey">
                        {{ $booking->product->project->alamat_project }}</p>
                </div>

                <hr class="border-[#F1F2F6]">

                <!-- Info Detail -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-1 md:gap-[6px]">
                    <!-- Kolom 1: Lokasi, Invoice, Harga -->
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location2.svg') }}"
                                class="w-4 h-4 md:w-5 md:h-5 shrink-0" alt="icon">
                            <p class="text-[10px] md:text-xs text-ngekos-grey">
                                {{ $booking->product->project->lokasi->regency->name }}</p>
                        </div>
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/invoice.svg') }}"
                                class="w-4 h-4 md:w-5 md:h-5 shrink-0" alt="icon">
                            <p class="text-[10px] md:text-xs text-ngekos-grey">{{ $booking->invoice }}</p>
                        </div>
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/price.svg') }}"
                                class="w-4 h-4 md:w-5 md:h-5 shrink-0" alt="icon">
                            <p class="text-[10px] md:text-xs text-ngekos-grey">Rp
                                {{ number_format($booking->total_harga) }}</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/user.svg') }}"
                                class="w-4 h-4 md:w-5 md:h-5 shrink-0" alt="icon">
                            <p class="text-[10px] md:text-xs text-ngekos-grey">
                                {{ $booking->member->nama ?? 'Nama tidak tersedia' }}</p>
                        </div>
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/phone.svg') }}"
                                class="w-4 h-4 md:w-5 md:h-5 shrink-0" alt="icon">
                            <p class="text-[10px] md:text-xs text-ngekos-grey">
                                {{ $booking->member->telepon ?? 'Telepon tidak tersedia' }}</p>
                        </div>
                    </div>
                </div>

                <hr class="border-[#F1F2F6]">

                <!-- Harga & Status -->
                <div class="mt-1">
                    <p class="text-sm md:text-lg font-semibold text-[#d40065]">Rp
                        {{ number_format($booking->jumlah_uang_booking) }}</p>
                </div>

                <!-- Status Section -->
                <div class="flex mt-2">
                    @if ($booking->status == 'pending')
                        <p
                            class="rounded-full p-[6px_12px] bg-ngekos-orange font-bold text-xs leading-[18px] text-white">
                            Pending</p>
                    @elseif ($booking->status == 'booking')
                        <p class="rounded-full p-[6px_12px] bg-[#058E2A] font-bold text-xs leading-[18px] text-white">
                            BOOKING</p>
                    @elseif ($booking->status == 'cancel')
                        <p class="rounded-full p-[6px_12px] bg-[#FF0000] font-bold text-xs leading-[18px] text-white">
                            CANCEL</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@empty
    <div class="flex flex-col items-center justify-center h-[300px] text-center px-4">
        <p class="text-gray-500 text-sm sm:text-base">Data belum tersedia</p>
    </div>
@endforelse
