<div id="TopNav" class="flex relative items-center px-5 pt-10">
    <!-- Left Section - Back Button -->
    <div class="absolute left-0 px-5">
        <a href="{{ route($backRoute) }}"
            class="flex items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-[20px] h-[20px]" alt="icon">
        </a>
    </div>

    <!-- Center Section - Title -->
    <div class="flex-1 flex items-center justify-center px-5">
        <h3 class="text-lg font-bold text-white text-center max-w-[calc(100%-120px)] break-words">{{ $title }}
        </h3>
    </div>

    <!-- Right Section - Profile -->
    <div class="absolute right-0 px-5">
        @if (isset($agency) && $agency)
            <div class="relative">
                <button onclick="toggleDropdown()"
                    class="flex items-center gap-1 bg-white rounded-full px-2 sm:px-2 py-2 hover:bg-gray-100">
                    <!-- Avatar -->
                    <div class="flex items-center justify-center w-8 h-8 overflow-hidden rounded-full shrink-0">
                        @if (isset($agency->photo) && $agency->photo)
                            <img src="{{ asset('storage/' . $agency->photo) }}" class="w-full h-full object-cover"
                                alt="Profile">
                        @else
                            <div class="w-full h-full bg-blue-500 flex items-center justify-center">
                                <span class="text-white font-bold text-xs">
                                    {{ strtoupper(substr($agency->nama ?? ($agency->name ?? 'A'), 0, 1)) }}
                                </span>
                            </div>
                        @endif
                    </div>

                    <!-- Agency Name - Hidden on mobile, visible on sm and up -->
                    <span class="hidden sm:block text-xs font-medium text-gray-800 max-w-20 truncate">
                        Agency
                    </span>

                    <!-- Dropdown Arrow -->
                    <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="w-4 h-4 transition-transform"
                        id="dropdownArrow" alt="dropdown">
                </button>

                <!-- Dropdown Menu -->
                <div id="profileDropdown"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1 z-50 hidden">

                    <!-- User Info -->
                    <div class="px-4 py-2 border-b border-gray-100">
                        <p class="text-sm font-medium text-gray-900">{{ $agency->nama ?? ($agency->name ?? 'Agency') }}
                        </p>
                        <p class="text-xs text-gray-500">
                            {{ $agency->telepon ?? ($agency->phone ?? ($agency->email ?? '')) }}</p>
                    </div>

                    <!-- Edit Profile -->
                    <a href="{{ route('affiliate.profile.index') }} "
                        class="flex items-center px-4 py-2 gap-2 text-sm text-gray-700 hover:bg-gray-100">
                        <img src="{{ asset('/assets/images/icons/user.svg') }}" class="w-4 h-4"
                            alt="icon">
                        Edit Profil
                    </a>

                    <!-- Booking History -->
                    <a href="{{ route('affiliate.profile.riwayatBooking') }}" class="flex items-center px-4 py-2 gap-2 text-sm text-gray-700 hover:bg-gray-100">
                        <img src="{{ asset('/assets/images/icons/booking-history.svg') }}" class="w-4 h-4"
                            alt="icon">
                        Riwayat Booking
                    </a>

                    <!-- Logout -->
                    <div class="border-t border-gray-100 my-1"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        @else
            <!-- Fallback jika tidak ada data agency - Responsive -->
            <div class="flex items-center gap-2 bg-white rounded-full px-2 sm:px-3 py-2">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-gray-600 text-xs font-bold">?</span>
                </div>
                <span class="hidden sm:block text-sm font-medium text-gray-800">Guest</span>
            </div>
        @endif
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
