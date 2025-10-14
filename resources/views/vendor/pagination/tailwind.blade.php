@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        {{-- Info Text --}}
        <div>
            <p class="text-xs text-custom-gray-90">
                {!! __('Showing') !!}
                <span class="font-semibold text-primary">{{ $paginator->count() }}</span>
                {!! __('of') !!}
                <span class="font-semibold text-primary">{{ $paginator->total() }}</span>
                {!! __('data') !!}
            </p>
        </div>

        {{-- Navigation Buttons --}}
        <div class="flex items-center gap-3">
            {{-- Previous Button --}}
            @if ($paginator->onFirstPage())
                <button disabled
                    class="w-8 h-8 rounded-full border-2 border-custom-gray-40 bg-custom-gray-40 flex items-center justify-center cursor-not-allowed opacity-50">
                    <svg class="w-5 h-5 text-custom-gray-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="w-8 h-8 rounded-full border border-primary flex items-center justify-center hover:bg-primary hover:text-custom-gray-10 transition-all duration-300">
                    <svg class="w-5 h-5 text-primary hover:text-custom-gray-10" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            @endif

            {{-- Current Page Number --}}
            <span class="text-base font-medium text-primary min-w-[10px] text-center">
                {{ $paginator->currentPage() }}
            </span>

            {{-- Next Button --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="w-8 h-8 rounded-full border border-primary flex items-center justify-center hover:bg-primary hover:text-custom-gray-10 transition-all duration-300">
                    <svg class="w-5 h-5 text-primary hover:text-custom-gray-10" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            @else
                <button disabled
                    class="w-8 h-8 rounded-full border-2 border-custom-gray-40 bg-custom-gray-40 flex items-center justify-center cursor-not-allowed opacity-50">
                    <svg class="w-5 h-5 text-custom-gray-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    </a>
            @endif
        </div>
    </nav>
@endif
