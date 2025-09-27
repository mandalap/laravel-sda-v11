@extends('layouts.app')

@section('title')
    Hasil Pencarian Booking
@endsection

@push('prepend-style')
    <style>
        .no-outline {
            outline: none;
        }
    </style>
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Content-Container"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
        <div id="Background"
            class="absolute top-0 w-full h-[180px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]"></div>
        <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[60px]">
            <a href="{{ route('check-booking') }}"
                class="flex overflow-hidden justify-center items-center w-10 h-10 bg-white rounded-full shrink-0">
                <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
            </a>
            <p class="font-semibold text-white">Detail Booking</p>
            <div class="w-12 dummy-btn"></div>
        </div>
        <div id="Header" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
            <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white">
                <div class="flex gap-4">
                    <div class="flex w-[120px] h-[132px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                        <img src="{{ asset('storage/' . $booking->product->project->thumbnail) }}"
                            class="object-cover w-full h-full" alt="icon">
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <p class="font-semibold text-base leading-[27px] line-clamp-2">
                            {{ $booking->product->project->nama_project }}</p>
                        <p class="font-semibold text-base leading-[27px] line-clamp-2">
                            {{ $booking->product->nama_product }}</p>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location2.png') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $booking->product->project->lokasi->regency->name }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/category.png') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $booking->product->project->kategori->kategori }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
            <label class="flex relative justify-between items-center">
                <p class="text-base font-semibold">Data Pelanggan</p>
                <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                    class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                    alt="icon">
                <input type="checkbox" class="hidden absolute">
            </label>
            <div class="flex flex-col gap-4 pt-[22px]">
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/user.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Nama</p>
                    </div>
                    <p class="text-sm font-semibold">{{ $booking->member->nama }}</p>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/mail.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                        <p class="text-sm text-ngekos-grey">Email</p>
                    </div>
                    <p class="text-sm font-semibold">{{ $booking->member->email }}</p>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/phone.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Telepon</p>
                    </div>
                    <p class="text-sm font-semibold">{{ $booking->member->telepon }}</p>
                </div>
            </div>
        </div>
        <div
            class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
            <label class="flex relative justify-between items-center">
                <p class="text-base font-semibold">Booking</p>
                <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                    class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                    alt="icon">
                <input type="checkbox" class="hidden absolute">
            </label>
            <div class="flex flex-col gap-4 pt-[22px]">
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/invoice.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Invoice</p>
                    </div>
                    <p class="text-sm font-semibold">{{ $booking->invoice }}</p>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/timer.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Durasi</p>
                    </div>
                    <p class="text-sm font-semibold">3 - 7 Hari</p>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/calendar.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Tanggal Booking</p>
                    </div>
                    <p class="text-sm font-semibold">
                        {{ $booking->created_at->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}</p>
                </div>
            </div>
        </div>
        <div
            class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
            <label class="flex relative justify-between items-center">
                <p class="text-base font-semibold">Pembayaran</p>
                <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                    class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                    alt="icon">
                <input type="checkbox" class="hidden absolute">
            </label>
            <div class="flex flex-col gap-4 pt-[22px]">
                {{-- <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/arrow-up.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Pembayaran</p>
                    </div>
                    <p class="font-semibold">Booking</p>
                </div> --}}
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/status_booking.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Status Booking</p>
                    </div>
                    @if ($booking->status == 'booking')
                        <p class="rounded-full p-[6px_12px] bg-[#058E2A] font-bold text-xs leading-[18px] text-white">
                            BOOKING</p>
                    @elseif ($booking->status == 'pending')
                        <p class="rounded-full p-[6px_12px] bg-ngekos-orange font-bold text-xs leading-[18px] text-white">
                            PENDING</p>
                    @elseif ($booking->status == 'cancel')
                        <p class="rounded-full p-[6px_12px] bg-[#FF0000] font-bold text-xs leading-[18px] text-white">
                            CANCEL</p>
                    @endif
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-3 items-center">
                        <img src="{{ asset('assets/images/icons/payment_info.svg') }}" class="flex w-6 h-6 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">Status Pembayaran</p>
                    </div>
                    @if ($booking->is_paid == '1')
                        <p class="rounded-full p-[6px_12px] bg-[#058E2A] font-bold text-xs leading-[18px] text-white">
                            BERHASIL</p>
                    @elseif ($booking->is_paid == '0')
                        <p class="rounded-full p-[6px_12px] bg-ngekos-orange font-bold text-xs leading-[18px] text-white">
                            BELUM DIBAYAR</p>
                    @endif
                </div>
                @if ($booking->payment_method)
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            <img src="{{ asset('assets/images/icons/payment_method.svg') }}" class="flex w-6 h-6 shrink-0"
                                alt="icon">
                            <p class="text-sm text-ngekos-grey">Metode Pembayaran</p>
                        </div>
                        @if ($booking->payment_method == 'qris')
                            <p class="font-semibold">QRIS</p>
                        @elseif ($booking->payment_method == 'bank_transfer')
                            <p class="font-semibold">TRANSFER BANK</p>
                        @else
                            <p class="font-semibold">TIDAK DIKETAHUI</p>
                        @endif
                    </div>
                @endif
                @if ($booking->tanggal_bayar)
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            <img src="{{ asset('assets/images/icons/calendar_success.svg') }}" class="flex w-6 h-6 shrink-0"
                                alt="icon">
                            <p class="text-sm text-ngekos-grey">Tanggal Bayar</p>
                        </div>
                        <p class="font-semibold">
                            {{ \Carbon\Carbon::parse($booking->tanggal_bayar)->setTimezone('Asia/Jakarta')->translatedFormat('d F Y H:i') }}
                        </p>
                    </div>
                @endif
            </div>
        </div>
        <div id="BottomButton" class="relative flex w-full h-[98px] shrink-0">
            <div class="fixed bottom-[30px] w-full max-w-[640px] px-5 z-10">
                <a href="#"
                    class="flex w-full justify-center rounded-full p-[14px_20px] bg-gradient-to-r from-[#a7006d] to-[#d40065] hover:bg-black text-sm font-bold text-white">
                    Hubungi Customer Service
                </a>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script src="{{ asset('js/accodion.js') }}"></script>
    <script>
        // Get all tab buttons
        const tabLinks = document.querySelectorAll('.tab-link');

        // Add click event listener to each button
        tabLinks.forEach(button => {
            button.addEventListener('click', () => {
                // Get the target tab id from the data attribute
                const targetTab = button.getAttribute('data-target-tab');
                console.log(targetTab)
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Show the target tab content
                document.querySelector(targetTab).classList.toggle('hidden');
            });
        });
    </script>
@endpush
