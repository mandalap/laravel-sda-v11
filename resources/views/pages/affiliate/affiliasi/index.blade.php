@extends('layouts.app')

@section('title')
    Affiliate-Affiliasi
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
        <a href="cust-info.html" class="">
        </a>
        <p class="font-semibold text-white">Affiliasi</p>
        <div class="w-12 dummy-btn"></div>
    </div>
    <div id="Header" class="relative items-center justify-between gap-2 px-5 mt-[18px]">
        <!-- Code Refferal -->
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white mt-4">
            <div class="flex gap-4">
                <div class="flex flex-col w-full gap-3">
                    <p class="text-lg leading-[27px] justify-between  min-h-[54px]">
                        Ajak temanmu untuk bergabung dengan Sajada Digital Agency dan dapatkan komisi dari setiap penjualan
                        yang mereka lakukan.
                        Semakin banyak teman yang kamu ajak, semakin besar komisi yang kamu dapatkan. Ayo, bagikan link
                        referral ini kepada
                        teman-temanmu dan bantu mereka untuk mendapatkan layanan digital terbaik dari Sajada Digital Agency.
                        Bersama-sama kita
                        bisa mencapai kesuksesan yang lebih besar!
                    </p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex flex-col w-full gap-2">
                        <p class="font-semibold text-lg leading-[27px] ">
                            Code Referral
                        </p>
                        <div
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <input type="text" id="affiliate-code"
                                class="w-full outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal bg-transparent"
                                value="1234567890" readonly>
                            <button type="button" onclick="copyAffiliateCode()"
                                class="w-10 h-10 shrink-0 flex items-center justify-center bg-[#d40065] rounded-full hover:bg-[#a7006d] transition"
                                title="Copy link">
                                <!-- Icon link SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.828 10.172a4 4 0 010 5.656l-3.535 3.535a4 4 0 01-5.657-5.657l1.414-1.414m6.364-6.364a4 4 0 015.657 5.657l-1.414 1.414" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <script>
                        function copyAffiliateCode() {
                            const input = document.getElementById('affiliate-code');
                            if (input) {
                                input.select();
                                input.setSelectionRange(0, 99999); // For mobile devices
                                navigator.clipboard.writeText(input.value);
                            }
                        }
                    </script>
                </div>


            </div>
        </div>

        <!-- Link Referral -->
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white mt-4">
            <div class="flex gap-4">
                <div class="flex flex-col w-full gap-3">
                    <p class="font-semibold text-lg leading-[27px] ">
                        Link Referral
                    </p>
                    <hr class="border-[#F1F2F6]">
                    <div class="flex flex-col w-full gap-2">
                        <div
                            class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#d40065] transition-all duration-300">
                            <input type="text" id="affiliate-link"
                                class="w-full outline-none appearance-none placeholder:text-ngekos-grey placeholder:font-normal bg-transparent"
                                value="https://ngekos.com/affiliate/1234567890" readonly>
                            <button type="button" onclick="copyAffiliateLink()"
                                class="w-10 h-10 shrink-0 flex items-center justify-center bg-[#d40065] rounded-full hover:bg-[#a7006d] transition"
                                title="Copy link">
                                <!-- Icon link SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.828 10.172a4 4 0 010 5.656l-3.535 3.535a4 4 0 01-5.657-5.657l1.414-1.414m6.364-6.364a4 4 0 015.657 5.657l-1.414 1.414" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <script>
                        function copyAffiliateLink() {
                            const input = document.getElementById('affiliate-link');
                            if (input) {
                                input.select();
                                input.setSelectionRange(0, 99999); // For mobile devices
                                navigator.clipboard.writeText(input.value);
                            }
                        }
                    </script>
                </div>


            </div>
        </div>

        <!-- Member -->
        <div class="flex flex-col w-full rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white mt-4">
            <div class="flex gap-4">
                <div class="flex flex-col w-full gap-3">
                    <div class="bg-white py-24 sm:py-32">
                        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                            <div class="max-w-xl">
                                <p class="font-semibold text-lg leading-[27px] ">
                                    Member Kamu
                                </p>
                            </div>
                            <ul role="list" class="mt-4 grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                                <li class="mb-5">
                                    <div class="flex items-center gap-x-6">
                                        <img class="rounded-full h-12 w-12 flex-none mr-4"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                        <div class="ml-4">
                                            <h3 class="text-base/7  tracking-tight text-gray-900">Leslie Alexander</h3>
                                            <p class="text-sm/6  text-indigo-600">Co-Founder / CEO</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-5">
                                    <div class="flex items-center gap-x-6">
                                        <img class="rounded-full h-12 w-12 flex-none mr-4"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                        <div class="ml-4">
                                            <h3 class="text-base/7  tracking-tight text-gray-900">Leslie Alexander</h3>
                                            <p class="text-sm/6  text-indigo-600">Co-Founder / CEO</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('addon-script')
@endpush
