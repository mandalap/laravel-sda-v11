@php
if (! isset($scrollTo)) {
    $scrollTo = false; // Disable scroll to top
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        {{-- Info Text --}}
        <div>
            <p class="text-xs text-custom-gray-90">
                Menampilkan
                <span class="font-semibold text-primary">{{ $paginator->count() }}</span>
                dari
                <span class="font-semibold text-primary">{{ $paginator->total() }}</span>
                data
            </p>
        </div>

        {{-- Navigation Buttons --}}
        <div class="flex items-center gap-3">
            {{-- Previous Button --}}
            @if ($paginator->onFirstPage())
                <button disabled
                    class="w-9 h-9 rounded-full border border-custom-gray-40 flex items-center justify-center cursor-not-allowed opacity-50">
                    <svg class="w-5 h-5 text-custom-gray-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            @else
                <button 
                    wire:click="previousPage('{{ $paginator->getPageName() }}')" 
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                    rel="prev"
                    class="w-9 h-9 rounded-full border border-primary flex items-center justify-center hover:bg-primary group transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            @endif

            {{-- Current Page Number --}}
            <span class="text-sm font-medium text-primary min-w-[10px] text-center">
                {{ $paginator->currentPage() }}
            </span>

            {{-- Next Button --}}
            @if ($paginator->hasMorePages())
                <button 
                    wire:click="nextPage('{{ $paginator->getPageName() }}')" 
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                    rel="next"
                    class="w-9 h-9 rounded-full border border-primary flex items-center justify-center hover:bg-primary group transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            @else
                <button disabled
                    class="w-9 h-9 rounded-full border border-custom-gray-40 flex items-center justify-center cursor-not-allowed opacity-50">
                    <svg class="w-5 h-5 text-custom-gray-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            @endif
        </div>
    </nav>
@endif