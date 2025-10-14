<div class="mt-5 flex flex-col gap-4 animate-pulse">
    @for ($i = 0; $i < 2; $i++)
        <div class="flex flex-col rounded-2xl border border-custom-gray-40 p-3 bg-white gap-3">
            
            {{-- Header Skeleton --}}
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 bg-custom-gray-30 rounded"></div>
                    <div class="h-4 w-32 bg-custom-gray-30 rounded"></div>
                </div>
                <div class="h-6 w-20 bg-custom-gray-30 rounded"></div>
            </div>

            <div class="border-t border-custom-gray-40"></div>

            {{-- Content Skeleton --}}
            <div class="flex flex-col justify-center gap-3">
                <div class="flex flex-row justify-between gap-2">
                    <div class="h-4 w-16 bg-custom-gray-30 rounded"></div>
                    <div class="h-4 w-40 bg-custom-gray-30 rounded"></div>
                </div>
                <div class="flex flex-row justify-between gap-2">
                    <div class="h-4 w-16 bg-custom-gray-30 rounded"></div>
                    <div class="h-4 w-32 bg-custom-gray-30 rounded"></div>
                </div>
                <div class="flex flex-row justify-between gap-2">
                    <div class="h-4 w-16 bg-custom-gray-30 rounded"></div>
                    <div class="h-4 w-24 bg-custom-gray-30 rounded"></div>
                </div>
            </div>
        </div>
    @endfor
</div>

<style>
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>