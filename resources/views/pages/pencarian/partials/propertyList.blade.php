@forelse ($product as $item)
    <a href="{{ route('detailproject', [$item->jenis->slug, $item->kategori->slug, $item->slug]) }}" class="card">
        <div
            class="flex flex-row gap-[10px] rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 items-center">
            <div
                class="relative w-32 sm:w-40 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                <img src="{{ asset('storage/' . $item->thumbnail) }}" class="w-full h-full object-contain"
                    alt="{{ $item->nama_project }}">
                <x-project-availability-badge :project="$item" />
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
            </div>
        </div>
    </a>
@empty
    <div class="flex flex-col items-center justify-center h-[300px] text-center px-4">
        <p class="text-custom-gray-80 text-sm sm:text-base">Tidak ada properti Tersedia</p>
    </div>
@endforelse
