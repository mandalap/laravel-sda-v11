<div id="BottomNav" class="relative flex w-full h-[110px] shrink-0">
    <nav class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
        <div
            class="grid grid-cols-4 h-fit rounded-[40px] justify-between py-4 px-5 bg-gradient-to-t from-secondary to-primary">
            <!-- Dashboard -->
            <a href="{{ route('affiliate.dashboard') }}" class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class="{{ request()->routeIs('affiliate.dashboard') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M3.125 9L12.125 2L21.125 9V20C21.125 20.5304 20.9143 21.0391 20.5392 21.4142C20.1641 21.7893 19.6554 22 19.125 22H5.125C4.59457 22 4.08586 21.7893 3.71079 21.4142C3.33571 21.0391 3.125 20.5304 3.125 20V9Z"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.125 22V12H15.125V22" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span
                    class="text-xs {{ request()->routeIs('affiliate.dashboard') ? 'font-bold text-white' : 'text-custom-gray-10 opacity-50 font-medium group-hover:text-black' }}">Dashboard</span>
            </a>

            <!-- Affiliasi -->
            <a href="{{ route('affiliate.affiliasi.index') }}"
                class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class="{{ request()->routeIs('affiliate.affiliasi.index') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M19.875 5.25H4.875C4.04657 5.25 3.375 5.92157 3.375 6.75V17.25C3.375 18.0784 4.04657 18.75 4.875 18.75H19.875C20.7034 18.75 21.375 18.0784 21.375 17.25V6.75C21.375 5.92157 20.7034 5.25 19.875 5.25Z"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M3.375 11.25H8.7C8.87273 11.2491 9.04035 11.3085 9.17389 11.4181C9.30742 11.5276 9.39846 11.6804 9.43125 11.85C9.57448 12.5246 9.94502 13.1295 10.4809 13.5635C11.0167 13.9975 11.6854 14.2343 12.375 14.2343C13.0646 14.2343 13.7333 13.9975 14.2691 13.5635C14.805 13.1295 15.1755 12.5246 15.3188 11.85C15.3515 11.6804 15.4426 11.5276 15.5761 11.4181C15.7096 11.3085 15.8773 11.2491 16.05 11.25H21.375"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.375 8.25H21.375" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span
                    class="text-xs {{ request()->routeIs('affiliate.affiliasi.index') ? 'font-bold text-white' : 'font-medium text-custom-gray-10 opacity-50 group-hover:text-black' }}">Affiliasi</span>
            </a>

            <!-- Booking -->
            <a href="{{ route('affiliate.booking.index') }}" class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class="{{ request()->routeIs('affiliate.booking.index') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path
                        d="M20.8358 13.9952V2.98705C20.8358 2.98705 20.8215 2.33551 20.4111 1.92487C20.0007 1.51423 19.3496 1.5 19.3496 1.5H6.61115C6.61115 1.5 5.96 1.51423 5.54961 1.92487C5.13923 2.33551 5.125 2.98705 5.125 2.98705V21.0441L7.46038 18.2824L9.79576 21.0441L12.3435 18.2824L14.4665 21.0441L15.826 19.4375M23.4896 22L21.4918 20.001M21.4918 20.001C21.8335 19.6591 22.1046 19.2532 22.2895 18.8064C22.4745 18.3596 22.5697 17.8808 22.5697 17.3972C22.5697 16.9137 22.4745 16.4348 22.2896 15.9881C22.1046 15.5413 21.8335 15.1354 21.4918 14.7935C21.1501 14.4515 20.7444 14.1803 20.2979 13.9952C19.8514 13.8102 19.3729 13.7149 18.8896 13.7149C18.4063 13.7149 17.9278 13.8102 17.4813 13.9952C17.0348 14.1803 16.6291 14.4515 16.2874 14.7935C15.5972 15.484 15.2095 16.4206 15.2095 17.3972C15.2095 18.1286 15.4269 18.8375 15.826 19.4375M21.4918 20.001C20.8017 20.6916 19.8656 21.0795 18.8896 21.0795C17.9136 21.0795 16.9775 20.6916 16.2874 20.001C16.1141 19.8276 15.9598 19.6387 15.826 19.4375M8.67972 7.23133H16.8698M8.67972 11.272H12.9259"
                        stroke="currentColor" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span
                    class="text-xs {{ request()->routeIs('affiliate.booking.index') ? 'font-bold text-white' : 'font-medium text-custom-gray-10 opacity-50 group-hover:text-black' }}">Booking</span>
            </a>

            <!-- Transaksi -->
            <a href="{{ route('affiliate.transaction.index') }}"
                class="flex flex-col gap-2 items-center text-center group">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    class=" {{ request()->routeIs('affiliate.transaction.index') ? 'text-white' : 'text-custom-gray-10 opacity-50 group-hover:text-black' }}">
                    <path d="M8 9.75H17.75" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M8 12.75H17.75" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M3.875 19.5V5.25C3.875 5.05109 3.95402 4.86032 4.09467 4.71967C4.23532 4.57902 4.42609 4.5 4.625 4.5H21.125C21.3239 4.5 21.5147 4.57902 21.6553 4.71967C21.796 4.86032 21.875 5.05109 21.875 5.25V19.5L18.875 18L15.875 19.5L12.875 18L9.875 19.5L6.875 18L3.875 19.5Z"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span
                    class="text-xs {{ request()->routeIs('affiliate.transaction.index') ? 'font-bold text-white' : 'font-medium text-custom-gray-10 opacity-50 group-hover:text-black' }}">Transaksi</span>
            </a>
        </div>
    </nav>
</div>
