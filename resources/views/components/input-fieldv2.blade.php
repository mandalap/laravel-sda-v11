{{-- resources/views/components/input-fieldv2.blade.php --}}
@props([
    'label',
    'name',
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'icon' => null,
    'id' => null,
    'options' => [],
    'showArrow' => false,
])

@php
    $inputId = $id ?? $name;
    $inputValue = $value ?? old($name, request()->query($name));
    $isSelect = $type === 'select';
@endphp

<div class="flex flex-col w-full gap-1">
    <p class="text-sm font-medium text-custom-gray-90">
        {{ $label }}
    </p>
    <label
        class="flex items-center w-full h-10 rounded p-3 gap-2 bg-custom-gray-10 ring-1 ring-custom-gray-50 focus-within:ring-primary transition-all duration-300 {{ $isSelect ? 'relative' : '' }}">
        @if ($icon && !$isSelect)
            <img src="{{ asset($icon) }}" class="flex w-5 h-5 shrink-0" alt="icon">
        @endif

        @if ($isSelect)
            @if ($icon)
                <img src="{{ asset($icon) }}"
                    class="flex absolute top-1/2 left-3 w-5 h-5 transform -translate-y-1/2 shrink-0" alt="icon">
            @endif
            <select name="{{ $name }}" id="{{ $inputId }}"
                {{ $attributes->merge(['class' => 'w-full bg-white text-sm outline-none appearance-none ' . ($icon ? 'pl-7' : 'pl-0')]) }}>
                @if ($placeholder)
                    <option value="" hidden>{{ $placeholder }}</option>
                @endif
                @foreach ($options as $optionValue => $optionLabel)
                    <option value="{{ $optionValue }}" {{ $inputValue == $optionValue ? 'selected' : '' }}>
                        {{ $optionLabel }}
                    </option>
                @endforeach
            </select>
            <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" class="w-5 h-5 pointer-events-none"
                alt="icon">
        @else
            <input type="{{ $type }}" name="{{ $name }}" id="{{ $inputId }}"
                value="{{ $inputValue }}" @if ($placeholder) placeholder="{{ $placeholder }}" @endif
                {{ $attributes->merge(['class' => 'w-full text-sm appearance-none outline-none placeholder:text-custom-gray-70']) }} />
        @endif
    </label>

    @error($name)
        <p class="text-primary text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
