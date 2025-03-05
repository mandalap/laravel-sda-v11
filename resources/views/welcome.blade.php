<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('output.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite('resources/css/app.css')

</head>

<body>
    <div id="Content-Container" class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">

        <div id="Background" class="absolute top-0 w-full h-[180px] rounded-bl-[30px] rounded-br-[30px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
        </div>

        <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[30px]">
            <div class="flex flex-col gap-1 text-white">
                <p>Halo Sahabat Investa,</p>
                <h1 class="font-bold text-lg leading-[30px] ">Temukan Property Impian Kamu</h1>
            </div>
            <a href="#"
                class="flex items-center justify-center w-20 h-20 overflow-hiddenrounded-full shrink-0">
                <img src="assets/images/icons/logo.svg" class="w-[60px] h-[60px]" alt="icon">
            </a>
        </div>

        <section id="Promo" class="relative z-10 flex flex-col gap-3 px-4 mt-6 ">
            <a href="#">
                <div class="w-full aspect-[360/120] flex shrink-0 rounded-[20px] overflow-hidden mb-5">
                    <img src="assets/images/thumbnails/banner.png" class="object-cover w-full h-full" alt="promo banner">
                </div>
            </a>
        </section>

        <div id="Feature" class="px-[18px] relative z-10">
            <div class="bg-white p-[18px_16px] rounded-xl overflow-hidden grid grid-cols-4 gap-[27px] ">
                <a href="list-city.html" >
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/location-pin.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Tanah Kavling</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/land.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Tanah Ruko</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/house.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Rumah</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/apartments.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Ruko</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/folder.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Berkas</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/farmer.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Kelola Lahan</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/rent.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Kontrakkan</p>
                    </div>
                </a>
                <a href="list-city.html">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-[40px] h-[40px] flex shrink-0">
                            <img src="assets/images/icons/design.svg" class="object-cover" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#757C98] leading-[21px]">Jasa Interior</p>
                    </div>
                </a>
            </div>
        </div>

        <section id="Popular" class="flex flex-col gap-4">
            <div class="flex items-center justify-between px-5">
                <h2 class="font-bold">Properti Popular</h2>
                <a href="#">
                    <div class="flex items-center gap-2">
                        <span>Lihat Semua</span>
                        <img src="assets/images/icons/arrow-right.svg" class="flex w-6 h-6 shrink-0" alt="icon">
                    </div>
                </a>
            </div>
            <div class="w-full overflow-x-hidden swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !w-fit">
                        <a href="details.html" class="card">
                            <div class="flex flex-col w-[250px] shrink-0 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 gap-[10px] hover:border-[#d40065] text-black transition-all duration-300">
                                <div class="relative">
                                    <button class="absolute top-4 right-4 w-max rounded-full p-2 bg-[#d40065] text-white text-xs">
                                        Popular
                                    </button>
                                    <div class="flex w-full h-[150px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                                        <img src="assets/images/thumbnails/kos-1.png" class="object-cover w-full h-full" alt="thumbnail">
                                    </div>
                                </div>

                                <div class="flex flex-col gap-3">
                                    <h3 class="font-semibold text-lg leading-[27px] line-clamp-2 min-h-[54px]">Rumah Jalan Nirbaya Dalam 1 </h3>
                                    <hr class="border-[#F1F2F6]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/location.svg" class="flex w-5 h-5 shrink-0"
                                            alt="icon">
                                        <p class="text-sm text-ngekos-grey">Sungai Raya Dalam</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/3dcube.svg" class="flex w-5 h-5 shrink-0"
                                            alt="icon">
                                            <div class="flex items-center">
                                                <p class="text-sm text-ngekos-grey">Rumah Second - </p>
                                                <span class="inline-flex items-center px-2 py-1 ml-1 text-xs font-medium text-red-700 rounded-md bg-red-50 ring-1 ring-red-600/10 ring-inset">Jual</span>
                                                <span class="inline-flex items-center px-2 py-1 ml-1 text-xs font-medium text-green-700 rounded-md bg-green-50 ring-1 ring-green-600/20 ring-inset">Jual/Sewa</span>
                                                <span class="inline-flex items-center px-2 py-1 ml-1 text-xs font-medium text-blue-700 rounded-md bg-blue-50 ring-1 ring-blue-700/10 ring-inset">Sewa</span>

                                            </div>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/profile-2user.svg" class="flex w-5 h-5 shrink-0"
                                            alt="icon">
                                        <p class="text-sm text-ngekos-grey">Tersisa 1 Unit</p>
                                    </div>
                                    <hr class="border-[#F1F2F6]">
                                    <p class="text-lg font-semibold text-black">Rp 500.000.000
                                        <!-- <span class="text-sm font-normal text-ngekos-grey">/bulan</span> -->
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <section id="Cities" class="flex flex-col p-5 gap-4 bg-[#F5F6F8] mt-[30px]">
            <div class="flex items-center justify-between">
                <h2 class="font-bold">Cari Kota</h2>
                <a href="#">
                    <div class="flex items-center gap-2">
                        <span>Lihat Semua</span>
                        <img src="assets/images/icons/arrow-right.svg" class="flex w-6 h-6 shrink-0" alt="icon">
                    </div>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <a href="cities.html" class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-[#d40065] transition-all duration-300">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="assets/images/thumbnails/city-1.png" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="text-sm">Pontianak</p>
                            <p class="text-sm text-ngekos-grey">1,304 Property</p>
                        </div>
                    </div>
                </a>
                <a href="cities.html" class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-[#d40065] transition-all duration-300">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="assets/images/thumbnails/city-2.png" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Kubu Raya</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Property</p>
                        </div>
                    </div>
                </a>
                <a href="cities.html" class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-[#d40065] transition-all duration-300">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="assets/images/thumbnails/kos-2.png" class="object-cover w-full h-full" alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Bogor</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Property</p>
                        </div>
                    </div>
                </a>
                <a href="cities.html" class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-emerald-text-emerald-600 transition-all duration-300">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="assets/images/thumbnails/city-1.png" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Jakarta</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Property</p>
                        </div>
                    </div>
                </a>
                <a href="cities.html" class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-emerald-text-emerald-600 transition-all duration-300">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="assets/images/thumbnails/city-3.png" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Bandung</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Property</p>
                        </div>
                    </div>
                </a>
                <a href="cities.html" class="card">
                    <div
                        class="flex items-center rounded-[22px] p-[10px] gap-3 bg-white border border-white overflow-hidden hover:border-emerald-text-emerald-600 transition-all duration-300">
                        <div
                            class="w-[55px] h-[55px] flex shrink-0 rounded-full border-4 border-white ring-1 ring-[#F1F2F6] overflow-hidden">
                            <img src="assets/images/thumbnails/city-4.png" class="object-cover w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Paris</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Property</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section id="Best" class="flex flex-col gap-4 px-5 mt-[30px] ">
            <div class="flex items-center justify-between">
                <h2 class="font-bold">Kavling Terbaik</h2>
                <a href="#">
                    <div class="flex items-center gap-2">
                        <span>Lihat Semua</span>
                        <img src="assets/images/icons/arrow-right.svg" class="flex w-6 h-6 shrink-0" alt="icon">
                    </div>
                </a>
            </div>
            <div class="flex flex-col gap-4">
                <a href="details.html" class="card">
                    <div
                        class="flex rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white hover:border-[#d40065] transition-all duration-300 ">
                        <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                            <img src="assets/images/thumbnails/kos-4.png" class="object-cover w-full h-full" alt="icon">
                        </div>
                        <div class="flex flex-col w-full gap-3">
                            <h3 class="font-semibold text-lg leading-[27px] line-clamp-2 min-h-[54px]">Tumbuh Tentram
                                Berada Rumah Nenek</h3>
                            <hr class="border-[#F1F2F6]">
                            <div class="flex items-center gap-[6px]">
                                <img src="assets/images/icons/location.svg" class="flex w-5 h-5 shrink-0" alt="icon">
                                <p class="text-sm text-ngekos-grey">Singkawang</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <img src="assets/images/icons/profile-2user.svg" class="flex w-5 h-5 shrink-0"
                                    alt="icon">
                                <p class="text-sm text-ngekos-grey">Tersisa 15</p>
                            </div>
                            <hr class="border-[#F1F2F6]">
                            <p class="text-lg font-semibold text-black">Rp 4.593.444</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section id="Promo" class="relative z-10 flex flex-col gap-3 px-4 mt-6 bg-[#F5F6F8]">
            <h1 class="mt-3 font-semibold">Special Offers</h1>
            <a href="#">
                <div class="w-full aspect-[360/120] flex shrink-0 rounded-[20px] overflow-hidden mb-5">
                    <img src="assets/images/thumbnails/banner.png" class="object-cover w-full h-full" alt="promo banner">
                </div>
            </a>
        </section>

        <section id="Rekomendasi" class="flex flex-col gap-4 mt-[30px] ">
            <div class="flex items-center justify-between px-5">
                <h2 class="font-bold">Hunian Rekomendasi</h2>
                <a href="#">
                    <div class="flex items-center gap-2">
                        <span>Lihat Semua</span>
                        <img src="assets/images/icons/arrow-right.svg" class="flex w-6 h-6 shrink-0" alt="icon">
                    </div>
                </a>
            </div>
            <div class="w-full overflow-x-hidden swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !w-fit">
                        <a href="details.html" class="card">
                            <div
                                class="flex flex-col w-[250px] shrink-0 rounded-[30px] border border-[#F1F2F6] p-4 pb-5 gap-[10px] hover:border-[#d40065] text-black transition-all duration-300">
                                <div class="flex w-full h-[150px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                                    <img src="assets/images/thumbnails/kos-1.png" class="object-cover w-full h-full"
                                        alt="thumbnail">
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h3 class="font-semibold text-lg leading-[27px] line-clamp-2 min-h-[54px]">Rumah Jalan
                                        Nirbaya Dalam 1 </h3>
                                    <hr class="border-[#F1F2F6]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/location.svg" class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-sm text-ngekos-grey">Sungai Raya Dalam</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/3dcube.svg" class="flex w-5 h-5 shrink-0" alt="icon">
                                        <p class="text-sm text-ngekos-grey">Rumah Second</p>
                                    </div>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/profile-2user.svg" class="flex w-5 h-5 shrink-0"
                                            alt="icon">
                                        <p class="text-sm text-ngekos-grey">Tersisa 1 Unit</p>
                                    </div>
                                    <hr class="border-[#F1F2F6]">
                                    <p class="text-lg font-semibold text-black">Rp 500.000.000
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <section id="Listing" class="flex flex-col p-5 gap-4 bg-[#F5F6F8] mt-[30px]">
            <div class="flex items-center justify-between">
                <h2 class="font-bold">Listing Terbaru</h2>
                <a href="#">
                    <div class="flex items-center gap-2">
                        <span>Lihat Semua</span>
                        <img src="assets/images/icons/arrow-right.svg" class="flex w-6 h-6 shrink-0" alt="icon">
                    </div>
                </a>
            </div>
            <div class="gap-4 swiper grider-cols-2">
                <div class="swiper-wrapper">

                    <div class="swiper-slide !w-fit pb-[30px] ">
                        <a href="list-city.html" class="card">
                            <div
                                class="flex flex-col items-center w-[120px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center ">
                                <div class="w-[70px] h-[70px] rounded-full flex shrink-0 overflow-hidden ">
                                    <img src="assets/images/thumbnails/flats.png" class="object-cover w-full h-full" alt="thumbnail">
                                </div>
                                <div class="flex flex-col gap-[2px] ">
                                    <h3 class="font-semibold">Rumah Baru</h3>
                                    <p class="text-sm text-ngekos-grey">1,304</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
            <nav class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
                <div class="grid grid-cols-4 h-fit rounded-[40px] justify-between py-4 px-5 bg-gradient-to-r from-[#a7006d] to-[#d40065]">
                    <a href="index.html" class="flex flex-col items-center gap-2 text-center group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-white group-hover:stroke-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>
                        <span class="text-sm font-semibold text-white group-hover:text-black">Beranda</span>
                    </a>
                    <a href="check-booking.html" class="flex flex-col items-center gap-2 text-center group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-white group-hover:stroke-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                          </svg>
                        <span class="text-sm font-semibold text-white group-hover:text-black">Booking</span>
                    </a>
                    <a href="find-kos.html" class="flex flex-col items-center gap-2 text-center group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-white group-hover:stroke-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                          </svg>

                        <span class="text-sm font-semibold text-white group-hover:text-black">Cari</span>
                    </a>
                    <a href="profile.html" class="flex flex-col items-center gap-2 text-center group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-white group-hover:stroke-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                        <span class="text-sm font-semibold text-white group-hover:text-black">Saya</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
