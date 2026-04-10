@forelse ($product as $item)
    <a href="{{ route('detailproject', [$item->jenis->slug, $item->kategori->slug, $item->slug]) }}" class="card">
        <div
            class="flex flex-row gap-[10px] rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 items-center">
            <div
                class="relative w-32 sm:w-40 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                <img src="{{ asset('storage/' . $item->thumbnail) }}" class="w-full h-full object-contain"
                    alt="{{ $item->nama_project }}">
                <x-project-availability-badge :project="$item" style="ribbon" />
            </div>

            <div class="flex flex-col gap-1 flex-1 min-h-0">
                <div class="flex flex-col gap-1">
                    <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                        {{ $item->nama_project }}
                    </h3>
                    <p class="text-xs text-custom-gray-70 line-clamp-1">{{ $item->alamat_project }}
                    </p>
                </div>

                <hr class="border-custom-gray-30 my-1">

                <div class="flex flex-col gap-[6px]">
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/location2.png') }}"
                            class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                        <p class="text-xs text-custom-gray-70 line-clamp-1">
                            {{ $item->lokasi->regency->name }}
                        </p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/category.png') }}"
                            class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                        <p class="text-xs text-custom-gray-70 truncate">
                            {{ $item->kategori->kategori }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/layer.png') }}"
                            class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                        <p class="text-xs text-custom-gray-70 truncate">
                            Tersisa
                            {{ $item->project_product->where('status', 'Tersedia')->count() }} Unit
                        </p>
                    </div>
                </div>

                <hr class="border-custom-gray-30 my-1">

                <div class="flex items-center">
                    <p class="text-sm font-semibold text-primary">
                        {!! $item->getPriceDisplay() !!}
                    </p>
                </div>

                <div class="flex items-center gap-[6px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M0.666748 7.99984C0.666748 7.99984 3.33341 2.6665 8.00008 2.6665C12.6667 2.6665 15.3334 7.99984 15.3334 7.99984C15.3334 7.99984 12.6667 13.3332 8.00008 13.3332C3.33341 13.3332 0.666748 7.99984 0.666748 7.99984Z"
                            stroke="#757575" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"
                            stroke="#757575" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-xs text-custom-gray-70">
                        {{ views($item)->count() }}x Dilihat</p>
                </div>
            </div>
        </div>
    </a>
@empty
    <div class="flex flex-col items-center justify-center h-[300px] text-center px-4">
        <p class="text-custom-gray-80 text-sm sm:text-base">Tidak ada properti Tersedia</p>
    </div>
@endforelse
