@if (!$isAvailable())
    @if ($style === 'ribbon')
        <div
            class="absolute top-0 right-0 z-10 overflow-hidden w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 pointer-events-none">
            <div
                class="absolute top-2 right-[-18px] w-20 h-5 
                sm:top-3 sm:right-[-24px] sm:w-24 sm:h-6
                md:top-4 md:right-[-28px] md:w-28 md:h-7
                transform rotate-45 
                bg-danger-main shadow-lg flex items-center justify-center
                border-y border-red-900">
                <span
                    class="text-custom-gray-10 text-[9px] sm:text-[10px] md:text-xs font-bold tracking-wider uppercase">
                    Habis
                </span>
            </div>
        </div>
    @else
        <div class="{{ $badgeClasses() }}">
            Habis
        </div>
    @endif
@endif
