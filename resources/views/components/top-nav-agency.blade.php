<div id="TopNav" class="flex flex-col px-5 pt-10">
    <!-- Top Row - Icons Section -->
    <div class="flex relative items-center justify-between mb-4">
        <!-- Left Section - Back Button -->
        <div>
            <a href="{{ route($backRoute) }}"
                class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
                <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
            </a>
        </div>

        <!-- Right Section - Profile Icons -->
        <div>
            @if (isset($agency) && $agency)
                <div class="flex flex-row gap-2">
                    <!-- Edit Profile Icon -->
                    <a href="{{ route('affiliate.profile.index') }}"
                        class="flex items-center justify-center w-10 h-10 bg-white rounded-full shrink-0 hover:bg-gray-100 transition-colors">
                        <img src="{{ asset('/assets/images/icons/user.svg') }}" class="w-5 h-5" alt="Edit Profile">
                    </a>

                    <!-- Booking History Icon -->
                    <a href="{{ route('affiliate.profile.riwayatBooking') }}"
                        class="flex items-center justify-center w-10 h-10 bg-white rounded-full shrink-0 hover:bg-gray-100 transition-colors">
                        <img src="{{ asset('/assets/images/icons/booking-history.svg') }}" class="w-5 h-5"
                            alt="Booking History">
                    </a>

                    <!-- Logout Icon -->
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="flex items-center justify-center w-10 h-10 bg-white rounded-full shrink-0 hover:bg-red-100 transition-colors group">
                            <svg class="w-5 h-5 text-red-600 group-hover:text-red-700" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                </div>
            @else
                <!-- Fallback jika tidak ada data agency -->
                <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full">
                    <span class="text-gray-600 text-xs font-bold">?</span>
                </div>
            @endif
        </div>
    </div>

    <!-- Bottom Row - Title Section -->
    <div class="flex items-center justify-center z-20">
        <h3 class="text-lg font-bold text-white text-center break-words">{{ $title }}</h3>
    </div>
</div>


<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        const arrow = document.getElementById('dropdownArrow');

        if (dropdown && arrow) {
            dropdown.classList.toggle('hidden');

            // Rotate arrow animation
            if (dropdown.classList.contains('hidden')) {
                arrow.style.transform = 'rotate(0deg)';
            } else {
                arrow.style.transform = 'rotate(180deg)';
            }
        }
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('profileDropdown');
        const button = event.target.closest('button[onclick="toggleDropdown()"]');
        const arrow = document.getElementById('dropdownArrow');

        if (dropdown && arrow && !button && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
            arrow.style.transform = 'rotate(0deg)';
        }
    });
</script>
