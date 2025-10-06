@props([
    'title' => 'Page Title',
    'backRoute' => null,
    'textColor' => 'text-primary',
    'showBackground' => false,
])

@if ($showBackground)
    <div id="Background" class="absolute top-0 w-full h-[190px] bg-gradient-to-t from-secondary to-primary"></div>
@endif

<div class="flex items-center px-5 pt-5 pb-5 relative z-10">
    @if ($backRoute)
        <a href="{{ $backRoute }}"
            class="w-9 h-9 bg-custom-gray-10 rounded-full flex items-center justify-center flex-shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left-primary.png') }}" class="w-5 h-5" alt="icon">
        </a>
        <span class="ml-2 text-base font-bold {{ $textColor }}">{{ $title }}</span>
    @else
        <span class="text-base font-bold {{ $textColor }}">{{ $title }}</span>
    @endif
</div>
