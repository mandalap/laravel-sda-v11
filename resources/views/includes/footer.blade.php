<div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
    <nav class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
        <div
            class="grid grid-cols-4 h-fit rounded-[40px] justify-between py-4 px-5 bg-gradient-to-t from-secondary to-primary">
            <!-- Beranda -->
            <a href="{{ route('beranda') }}" class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class="{{ request()->routeIs('beranda') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M3.125 9L12.125 2L21.125 9V20C21.125 20.5304 20.9143 21.0391 20.5392 21.4142C20.1641 21.7893 19.6554 22 19.125 22H5.125C4.59457 22 4.08586 21.7893 3.71079 21.4142C3.33571 21.0391 3.125 20.5304 3.125 20V9Z"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.125 22V12H15.125V22" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span
                    class="text-xs {{ request()->routeIs('beranda') ? 'font-bold text-white' : 'text-custom-gray-10 opacity-50 font-medium group-hover:text-black' }}">Beranda</span>
            </a>

            <!-- Booking -->
            <a href="{{ route('check-booking') }}" class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class="{{ request()->routeIs('check-booking') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M20.5858 13.9952V2.98705C20.5858 2.98705 20.5715 2.33551 20.1611 1.92487C19.7507 1.51423 19.0996 1.5 19.0996 1.5H6.36115C6.36115 1.5 5.71 1.51423 5.29961 1.92487C4.88923 2.33551 4.875 2.98705 4.875 2.98705V21.0441L7.21038 18.2824L9.54576 21.0441L12.0935 18.2824L14.2165 21.0441L15.576 19.4375M23.2396 22L21.2418 20.001M21.2418 20.001C21.5835 19.6591 21.8546 19.2532 22.0395 18.8064C22.2245 18.3596 22.3197 17.8808 22.3197 17.3972C22.3197 16.9137 22.2245 16.4348 22.0396 15.9881C21.8546 15.5413 21.5835 15.1354 21.2418 14.7935C20.9001 14.4515 20.4944 14.1803 20.0479 13.9952C19.6014 13.8102 19.1229 13.7149 18.6396 13.7149C18.1563 13.7149 17.6778 13.8102 17.2313 13.9952C16.7848 14.1803 16.3791 14.4515 16.0374 14.7935C15.3472 15.484 14.9595 16.4206 14.9595 17.3972C14.9595 18.1286 15.1769 18.8375 15.576 19.4375M21.2418 20.001C20.5517 20.6916 19.6156 21.0795 18.6396 21.0795C17.6636 21.0795 16.7275 20.6916 16.0374 20.001C15.8641 19.8276 15.7098 19.6387 15.576 19.4375M8.42972 7.23133H16.6198M8.42972 11.272H12.6759"
                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span
                    class="text-xs {{ request()->routeIs('check-booking') ? 'font-bold text-white' : 'font-medium text-custom-gray-10 opacity-50 group-hover:text-black' }}">Booking</span>
            </a>

            <!-- Cari Properti -->
            <a href="{{ route('cari-properti') }}" class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class="{{ request()->routeIs('cari-properti') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M11.625 19C16.0433 19 19.625 15.4183 19.625 11C19.625 6.58172 16.0433 3 11.625 3C7.20672 3 3.625 6.58172 3.625 11C3.625 15.4183 7.20672 19 11.625 19Z"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21.6249 21L17.2749 16.65" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span
                    class="text-xs {{ request()->routeIs('cari-properti') ? 'font-bold text-white' : 'font-medium text-custom-gray-10 opacity-50 group-hover:text-black' }}">Cari</span>
            </a>
            <a href="{{ route('profil') }}" class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class=" {{ request()->routeIs('profil') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M20.875 21V19C20.875 17.9391 20.4536 16.9217 19.7034 16.1716C18.9533 15.4214 17.9359 15 16.875 15H8.875C7.81413 15 6.79672 15.4214 6.04657 16.1716C5.29643 16.9217 4.875 17.9391 4.875 19V21"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M12.875 11C15.0841 11 16.875 9.20914 16.875 7C16.875 4.79086 15.0841 3 12.875 3C10.6659 3 8.875 4.79086 8.875 7C8.875 9.20914 10.6659 11 12.875 11Z"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span
                    class="text-xs {{ request()->routeIs('profil') ? 'font-bold text-white' : 'font-medium text-custom-gray-10 opacity-50 group-hover:text-black' }}">Akun</span>
            </a>
        </div>
    </nav>
</div>
