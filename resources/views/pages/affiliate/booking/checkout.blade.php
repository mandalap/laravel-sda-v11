@extends('layouts.app')

@section('title')
    Affiliate-Checkout {{ $project->nama_project }}
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[230px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>
    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
        <a href="{{ route('affiliate.booking.detail', $project->slug) }}"
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
        </a>
        <p class="font-semibold text-white">Checkout</p>
        <div class="w-12 dummy-btn"></div>
    </div>
    <div id="Header" class="relative flex items-center justify-between gap-2 px-5 mt-[18px]">
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white">
            <div class="flex gap-4">
                <div class="flex w-[120px] h-[132px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full"
                        alt="{{ $project->nama_project }}">
                </div>
                <div class="flex flex-col w-full gap-3">
                    <p class="font-semibold text-base leading-[27px] line-clamp-2 min-h-[54px]">{{ $project->nama_project }}
                    </p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location2.png') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location2.png') }}" class="flex w-5 h-5 shrink-0"
                            alt="icon">
                        <p class="text-sm text-ngekos-grey">{{ $project->lokasi->regency->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
        <label class="relative flex items-center justify-between">
            <p class="text-base font-semibold">Marketing</p>
            <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                alt="icon">
            <input type="checkbox" class="absolute hidden">
        </label>
        <div class="flex flex-col gap-4 pt-[22px]">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/user.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Nama</p>
                </div>
                <p class="text-sm font-semibold">{{ $agency->nama }}</p>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/phone.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Telepon</p>
                </div>
                <p class="text-sm font-semibold">{{ $agency->telepon }}</p>
            </div>
        </div>
    </div>
    <div
        class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
        <label class="relative flex items-center justify-between">
            <p class="text-base font-semibold">Pelanggan</p>
            <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                alt="icon">
            <input type="checkbox" class="absolute hidden">
        </label>
        <div class="flex flex-col gap-4 pt-[22px]">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/user.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Nama</p>
                </div>
                <p class="text-sm font-semibold">{{ $nama }}</p>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/phone.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Telepon</p>
                </div>
                <p class="text-sm font-semibold">{{ $costumer->telepon }}</p>
            </div>
        </div>
    </div>
    <div
        class="accordion group flex flex-col rounded-[30px] p-5 bg-[#F5F6F8] mx-5 mt-5 overflow-hidden has-[:checked]:!h-[68px] transition-all duration-300">
        <label class="relative flex items-center justify-between">
            <p class="text-base font-semibold">Booking</p>
            <img src="{{ asset('assets/images/icons/arrow-up.svg') }}"
                class="w-[28px] h-[28px] flex shrink-0 group-has-[:checked]:rotate-180 transition-all duration-300"
                alt="icon">
            <input type="checkbox" class="absolute hidden">
        </label>
        <div class="flex flex-col gap-4 pt-[22px]">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/block.svg') }}" class="flex w-6 h-6 shrink-0" alt="icon">
                    <p class="text-sm text-ngekos-grey">Nomor Properti</p>
                </div>
                <p class="text-sm font-semibold">{{ $product->nama_product }}</p>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/icons/calendar.svg') }}" class="flex w-6 h-6 shrink-0"
                        alt="icon">
                    <p class="text-sm text-ngekos-grey">Tanggal Booking</p>
                </div>
                <p class="text-sm font-semibold">{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}</p>
            </div>
        </div>
    </div>
    <form
        action="{{ route('affiliate.booking.checkout.store', ['project' => $project->slug]) }}?costumer_id={{ $costumer->id }}&product_code={{ $kodeProduct }}"
        method="POST" onsubmit="this.querySelector('button[type=submit]').disabled = true;"
        class="relative flex flex-col gap-6 pt-5 mt-5">
        @csrf
        <div id="PaymentOptions" class="flex flex-col rounded-[30px] border border-[#F1F2F6] p-5 gap-4 mx-5">
            <div id="TabButton-Container" class="flex items-center justify-between border-b border-[#F1F2F6] gap-[18px]">
                <label class="relative flex flex-col justify-between gap-4 tab-link group"
                    data-target-tab="#DownPayment-Tab">
                    <input type="radio" name="Payment" value="down"
                        class="absolute opacity-0 -z-10 top-1/2 left-1/2" checked>
                    <div class="flex items-center gap-3 mx-auto">
                        <div class="relative w-6 h-6">
                            <img src="{{ asset('assets/images/icons/status-orange.svg') }}"
                                class="absolute w-6 h-6 flex shrink-0 opacity-0 group-has-[:checked]:opacity-100 transition-all duration-300"
                                alt="icon">
                            <img src="assets/images/icons/status.svg"
                                class="absolute w-6 h-6 flex shrink-0 opacity-100 group-has-[:checked]:opacity-0 transition-all duration-300"
                                alt="icon">
                        </div>
                        <p class="text-base font-semibold">Pembayaran</p>
                    </div>
                    <div
                        class="w-0 mx-auto group-has-[:checked]:ring-1 group-has-[:checked]:ring-[#058E2A] group-has-[:checked]:w-[90%] transition-all duration-300">
                    </div>
                </label>
            </div>
            <div id="TabContent-Container">
                <div id="DownPayment-Tab" class="flex flex-col gap-4 tab-content">
                    <p class="text-sm text-ngekos-grey">Anda perlu melunasi pembayaran secara cash atau melalui transfer
                        setelah melakukan
                        survey lokasi</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/credit.svg') }}" class="flex w-6 h-6 shrink-0"
                                alt="icon">
                            <p class="text-sm text-ngekos-grey">Jumlah Pembayaran</p>
                        </div>
                        <p class="text-sm font-semibold">Rp {{ number_format($jumlahBooking) }}</p>
                    </div>
                </div>

            </div>
        </div>
        <div id="BottomNav" class="relative flex w-full h-[132px] shrink-0">
            <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
                <div
                    class="flex items-center justify-between rounded-[40px] py-4 px-6 bg-gradient-to-r from-[#a7006d] to-[#d40065]">
                    <div class="flex flex-col gap-[2px]">
                        <p id="price" class="font-bold text-xl leading-[30px] text-white">
                            <!-- Price mengikuti pilihan yang dipilih dan diambil dari text grand total -->
                        </p>
                        <span class="text-sm text-white">Total Pembayaran</span>
                        <p class="font-bold text-base leading-[30px] text-white">Rp {{ number_format($jumlahBooking) }}
                        </p>
                    </div>
                    <button type="submit"
                        class="text-sm flex shrink-0 rounded-full py-[14px] px-5 bg-white hover:bg-black hover:text-white font-bold text-black">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('addon-script')
@endpush
