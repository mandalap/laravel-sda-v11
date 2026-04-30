@if ($href)
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => 'flex items-center justify-center ' . $getClasses()]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => $getClasses()]) }}>
        {{ $slot }}
    </button>
@endif
