{{--
    Komponen Confirm Dialog
    =======================
    Cara pakai:
    <x-confirm-dialog
        id="confirm-disconnect"
        title="Putuskan Akun Google?"
        message="Anda tidak akan bisa login menggunakan Google setelah ini."
        confirm-text="Ya, Putuskan"
        cancel-text="Batal"
        type="danger"
        form-id="form-disconnect-google" />

    type: "danger" (merah) | "warning" (kuning) | "info" (biru)

    Panggil dari tombol:
    <button onclick="showConfirm('confirm-disconnect')">Putuskan</button>
--}}

@props([
    'id' => 'confirm-dialog',
    'title' => 'Apakah Anda yakin?',
    'message' => 'Tindakan ini tidak dapat dibatalkan.',
    'confirmText' => 'Ya, Lanjutkan',
    'cancelText' => 'Batal',
    'type' => 'danger', // danger | warning | info
    'formId' => null,
])

@php
    $colors = match ($type) {
        'warning' => [
            'icon_bg' => 'bg-warning-secondary',
            'icon' => 'text-warning-pressed',
            'btn' => 'bg-warning-main hover:bg-warning-pressed text-gray-800',
        ],
        'info' => [
            'icon_bg' => 'bg-info-focus',
            'icon' => 'text-blue-600',
            'btn' => 'bg-blue-600 hover:bg-blue-700 text-white',
        ],
        default => [
            // danger
            'icon_bg' => 'bg-danger-focus',
            'icon' => 'text-danger-main',
            'btn' => 'bg-danger-main hover:bg-danger-pressed text-white',
        ],
    };
@endphp

{{-- Overlay --}}
<div id="{{ $id }}" class="fixed inset-0 z-50 flex items-end justify-center hidden" role="dialog"
    aria-modal="true">

    {{-- Backdrop --}}
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="hideConfirm('{{ $id }}')"></div>

    {{-- Dialog Panel --}}
    <div class="relative w-full max-w-[640px] bg-white rounded-t-2xl px-5 pt-5 pb-8
                translate-y-full transition-transform duration-300 ease-out"
        id="{{ $id }}-panel">

        {{-- Handle bar --}}
        <div class="w-10 h-1 bg-custom-gray-40 rounded-full mx-auto mb-5"></div>

        {{-- Icon --}}
        <div class="flex justify-center mb-4">
            <div class="w-14 h-14 rounded-full {{ $colors['icon_bg'] }} flex items-center justify-center">
                @if ($type === 'warning')
                    <svg class="w-7 h-7 {{ $colors['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                @elseif ($type === 'info')
                    <svg class="w-7 h-7 {{ $colors['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                @else
                    <svg class="w-7 h-7 {{ $colors['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                @endif
            </div>
        </div>

        {{-- Text --}}
        <div class="text-center mb-6">
            <h3 class="text-base font-semibold text-custom-gray-100 mb-1">{{ $title }}</h3>
            <p class="text-sm text-custom-gray-70">{{ $message }}</p>
        </div>

        {{-- Buttons --}}
        <div class="flex flex-col gap-2">
            {{-- Confirm Button --}}
            <button type="button" onclick="handleConfirm('{{ $id }}', '{{ $formId }}')"
                class="w-full py-3 rounded-xl text-sm font-semibold transition-colors {{ $colors['btn'] }}">
                {{ $confirmText }}
            </button>

            {{-- Cancel Button --}}
            <button type="button" onclick="hideConfirm('{{ $id }}')"
                class="w-full py-3 rounded-xl text-sm font-medium text-custom-gray-70
                       bg-custom-gray-30 hover:bg-custom-gray-40 transition-colors">
                {{ $cancelText }}
            </button>
        </div>
    </div>
</div>
