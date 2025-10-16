@props([
    'title' => 'Page Title',
    'backRoute' => null,
    'textColor' => 'text-primary',
    'showBackground' => false,
    'showAgencyProfile' => false,
    'agencyData' => null,
    'showLogout' => false,
])

@if ($showBackground)
    <div id="Background" class="absolute top-0 w-full h-[210px] bg-gradient-to-t from-secondary to-primary"></div>
@endif

<div class="flex items-center justify-between px-5 pt-5 pb-5 relative z-10">
    <div class="flex items-center flex-1">
        @if ($backRoute)
            <a href="{{ $backRoute }}"
                class="w-9 h-9 bg-custom-gray-10 rounded-full flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/images/icons/arrow-left-primary.png') }}" class="w-6 h-6" alt="icon">
            </a>
            <span class="ml-2 text-base font-bold {{ $textColor }}">{{ $title }}</span>
        @else
            <span class="text-base font-bold {{ $textColor }}">{{ $title }}</span>
        @endif
    </div>

    {{-- Right Side Actions --}}
    <div class="flex items-center gap-3">
        {{-- Agency Profile Button --}}
        @if ($showAgencyProfile && $agencyData)
            <a href="{{ route('affiliate.profile.index') }}" class="flex items-center justify-center flex-shrink-0">
                <div class="w-9 h-9 bg-custom-gray-10 rounded-full flex items-center justify-center">
                    <img src="{{ asset('assets/images/icons/user-primary.png') }}" class="w-6 h-6" alt="icon">
                </div>
            </a>
        @endif

        {{-- Logout Button --}}
        @if ($showLogout)
            <form action="{{ route('logout') }}" method="POST" class="flex items-center justify-center">
                @csrf
                <button type="submit">
                    <svg class="w-6 h-6 text-custom-gray-10 group-hover:text-red-600 transition-colors" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </button>
            </form>
        @endif
    </div>
</div>
