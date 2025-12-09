@if (!$isAvailable())
    <p {{ $attributes->merge(['class' => $badgeClasses()]) }}>
        {{ $statusText() }}
    </p>
@endif
