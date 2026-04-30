@props(['status', 'label'])

@php
    $classes = match ($status) {
        'active', 'pending' => 'bg-warning-secondary text-warning-pressed',
        'paid' => 'bg-success-focus text-success-pressed',
        'cancelled', 'rejected' => 'bg-danger-secondary text-danger-pressed',
        'unpaid' => 'bg-custom-gray-20 text-custom-gray-70',
        default => 'bg-custom-gray-20 text-custom-gray-70',
    };
@endphp

<div {{ $attributes->merge(['class' => "inline-flex py-1 px-2 rounded text-sm font-medium $classes"]) }}>
    {{ $label }}
</div>
