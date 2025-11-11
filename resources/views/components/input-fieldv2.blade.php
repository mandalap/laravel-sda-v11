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
    'onkeyup' => null,
    'onchange' => null,
    'onclick' => null,
    'disabled' => false,
    'inputmode' => null,
])

@php
    $inputId = $id ?? $name;
    $inputValue = $value ?? old($name, request()->query($name));
    $isSelect = $type === 'select';
    $hasError = $errors->has($name);
@endphp

<style>
    @keyframes shake-rotate {

        0%,
        100% {
            transform: rotate(0deg);
        }

        20% {
            transform: rotate(-1deg);
        }

        40% {
            transform: rotate(1deg);
        }

        60% {
            transform: rotate(-1deg);
        }

        80% {
            transform: rotate(1deg);
        }
    }

    .shake-error {
        animation: shake-rotate 0.4s ease-in-out;
    }
</style>

<div class="flex flex-col w-full gap-1 {{ $hasError ? 'shake-error' : '' }}">
    <p class="text-sm font-medium text-custom-gray-90">
        {{ $label }}
    </p>
    <label
        class="flex items-center w-full h-10 rounded p-3 gap-2 bg-custom-gray-10 ring-1 transition-all duration-300 {{ $isSelect ? 'relative' : '' }} {{ $hasError ? 'ring-danger-main focus-within:ring-danger-main' : 'ring-custom-gray-50 focus-within:ring-primary' }}">
        @if ($icon && !$isSelect)
            <img src="{{ asset($icon) }}" class="flex w-5 h-5 shrink-0" alt="icon">
        @endif

        @if ($isSelect)
            @if ($icon)
                <img src="{{ asset($icon) }}"
                    class="flex absolute top-1/2 left-3 w-5 h-5 transform -translate-y-1/2 shrink-0" alt="icon">
            @endif
            <select name="{{ $name }}" id="{{ $inputId }}"
                {{ $attributes->merge(['class' => 'w-full bg-white text-sm outline-none appearance-none ' . ($icon ? 'pl-7' : 'pl-0')]) }}
                @if ($onchange) onchange="{{ $onchange }}" @endif
                @if ($disabled) disabled @endif>
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
                @if ($onkeyup) onkeyup="{{ $onkeyup }}" @endif
                @if ($onchange) onchange="{{ $onchange }}" @endif
                @if ($onclick) onclick="{{ $onclick }}" @endif
                @if ($disabled) disabled @endif
                @if ($inputmode) inputmode="{{ $inputmode }}" @endif
                {{ $attributes->merge(['class' => 'w-full text-sm appearance-none outline-none placeholder:text-custom-gray-70']) }} />
        @endif
    </label>

    @error($name)
        <p class="text-danger-main text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
