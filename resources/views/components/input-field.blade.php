<div>
    <label class="block mb-1 text-sm font-medium text-custom-gray">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        class="px-4 py-2 w-full rounded-lg border border-custom-gray-50 transition-all outline-none focus:ring-0.5 focus:ring-primary focus:border-primary placeholder-custom-gray-70 {{ $class }}"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($required) required @endif {{ $attributes }} />
</div>
