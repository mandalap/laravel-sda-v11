<div x-data="propertyList" class="flex flex-col">

    {{-- Search + Filter Bar --}}
    <div class="flex sticky top-0 z-10 gap-4 items-center px-5 w-full">
        <div
            class="flex items-center rounded-full gap-2 px-4 h-11 bg-custom-gray-10 w-full ring-1
                    transition-all duration-300 focus-within:ring-primary ring-transparent">
            <div class="w-5 h-5 flex shrink-0">
                <img src="{{ asset('assets/images/icons/search-primary.png') }}" alt="icon">
            </div>
            <input type="text" wire:model.live.debounce.400ms="cari"
                class="w-full text-xs bg-transparent outline-none placeholder:text-custom-gray-70"
                placeholder="Cari nama project atau alamat...">
            @if ($cari)
                <button wire:click="$set('cari', '')" class="text-custom-gray-70 hover:text-primary">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            @endif
        </div>
        <div class="relative flex-shrink-0 p-1">
            <button wire:click="openModal"
                class="w-11 h-11 rounded-full flex items-center justify-center bg-custom-gray-10">
                <img src="{{ asset('assets/images/icons/filter.png') }}" alt="filter" class="w-5 h-5">
            </button>
            @if ($this->activeFilterCount > 0)
                <span
                    class="absolute top-0 right-0 w-5 h-5 bg-success-main rounded-full
                             flex items-center justify-center pointer-events-none">
                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </span>
            @endif
        </div>
    </div>

    <div id="Header" class="relative flex flex-col px-5 mt-4">
        <p class="text-sm text-custom-gray-10 font-medium">{{ number_format($totalCount) }} properti ditemukan</p>
    </div>

    <div id="projects-container">
        @forelse($projects as $project)
            @include('pages.property.partials.project-card', compact('project'))
        @empty
            @if ($cari || $this->hasActiveFilter)
                <x-not-found />
            @else
                <x-no-data />
            @endif
        @endforelse
    </div>

    @if ($projects->hasPages())
        <div class="px-5 py-4">
            {{ $projects->links() }}
        </div>
    @endif

    {{-- Modal Filter --}}
    @teleport('body')
        <div x-data="{ open: @entangle('isModalOpen') }" x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-end justify-center"
            style="display:none;">
            <div class="absolute inset-0 bg-black/50" @click="$wire.closeModal()"></div>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-y-0"
                x-transition:leave-end="translate-y-full"
                class="relative w-full max-w-lg bg-white rounded-t-3xl px-5 pt-4 pb-8 z-10
                        max-h-[85vh] overflow-y-auto flex flex-col gap-5">
                <div class="w-10 h-1 bg-gray-300 rounded-full mx-auto mb-2"></div>
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-base text-custom-gray-100">Filter Properti</h3>
                    <button wire:click="closeModal" class="text-custom-gray-70 hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col gap-3">
                    <p class="text-xs font-semibold text-custom-gray-70 uppercase tracking-wide">Urutkan</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($uraianOptions as $option)
                            <button wire:click="setUrutan('{{ $option['value'] }}')"
                                class="px-4 py-2 rounded-full text-xs font-medium border transition-all
                                       {{ $urutan === $option['value']
                                           ? 'bg-primary text-white border-primary'
                                           : 'bg-white text-custom-gray-80 border-gray-200 hover:border-primary hover:text-primary' }}">
                                {{ $option['label'] }}
                            </button>
                        @endforeach
                    </div>
                </div>
                <hr class="border-gray-100">
                <div class="flex flex-col gap-3">
                    <p class="text-xs font-semibold text-custom-gray-70 uppercase tracking-wide">
                        Lokasi
                        @if (!empty($selectedLokasiIds))
                            <span class="ml-1 text-primary">({{ count($selectedLokasiIds) }} dipilih)</span>
                        @endif
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @forelse($lokasiOptions as $lokasi)
                            <button wire:click="toggleLokasi({{ $lokasi->id }})"
                                class="px-4 py-2 rounded-full text-xs font-medium border transition-all
                                       {{ in_array($lokasi->id, $selectedLokasiIds)
                                           ? 'bg-primary text-white border-primary'
                                           : 'bg-white text-custom-gray-80 border-gray-200 hover:border-primary hover:text-primary' }}">
                                {{ $lokasi->regency->name }}
                            </button>
                        @empty
                            <p class="text-xs text-custom-gray-70">Tidak ada lokasi tersedia</p>
                        @endforelse
                    </div>
                </div>
                <div class="flex gap-3 mt-2">
                    <button wire:click="resetFilter"
                        class="flex-1 py-3 rounded-full border border-gray-200 text-sm font-medium
                               text-custom-gray-80 hover:border-red-400 hover:text-red-500 transition-colors">
                        Reset
                    </button>
                    <button wire:click="closeModal"
                        class="flex-1 py-3 rounded-full bg-primary text-white text-sm font-semibold
                               hover:bg-primary/90 transition-colors">
                        Terapkan Filter
                    </button>
                </div>
            </div>
        </div>
    @endteleport
</div>
