@props([
    'title' => 'Page Title',
    'backRoute' => null,
    'textColor' => 'text-primary',
    'showBackground' => false,
    'showAgencyProfile' => false,
    'agencyData' => null,
])

@if ($showBackground)
    <div id="Background" class="absolute top-0 w-full h-[190px] bg-gradient-to-t from-secondary to-primary"></div>
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

    @if ($showAgencyProfile && $agencyData)
        <a href="{{ route('affiliate.profile.index') }}" class="flex items-center justify-center flex-shrink-0 ml-3">
            <div class="w-9 h-9 bg-custom-gray-10 rounded-full flex items-center justify-center">
                <img src="{{ asset('assets/images/icons/user-primary.png') }}" class="w-6 h-6" alt="icon">
            </div>
        </a>
    @endif
</div>
