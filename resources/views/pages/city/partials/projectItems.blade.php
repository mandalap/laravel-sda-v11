@foreach ($projects as $project)
    @php
        // Menghitung jumlah produk Tersedia untuk proyek saat ini
        $jumlahProdukTersedia = $project->project_product()->where('status', 'Tersedia')->count();
        $harga = $project->project_product->min('harga');
        $diskon = $project->project_product->min('discount');
        $harga_setelah_diskon = $harga - $diskon;
    @endphp
    <section id="Result" class="relative flex flex-col gap-4 px-5 mt-5 mb-3">
        <a href="{{ route('detailproject', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}"
            class="block">
            <div
                class="flex flex-col md:flex-row rounded-[20px] md:rounded-[30px] border border-[#F1F2F6] p-3 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">

                <!-- Gambar -->
                <div
                    class="relative w-full md:w-[500px] h-auto md:h-auto aspect-auto md:aspect-[250/183] rounded-[20px] md:rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                    @if ($diskon > 0)
                        <button
                            class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                            Turun Harga
                        </button>
                    @endif
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full"
                        alt="{{ $project->jenis->jenis }} {{ $project->kategori->kategori }} {{ $project->nama_project }} di {{ $project->alamat_project }} - {{ $project->lokasi->regency->name }}">
                </div>

                <!-- Konten -->
                <div class="flex flex-col gap-2 md:gap-3 w-full p-2 md:p-0">
                    <!-- Nama & Alamat -->
                    <div class="flex flex-col">
                        <h3 class="text-sm md:text-base font-semibold">{{ $project->nama_project }}</h3>
                        <p class="text-xs md:text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                    </div>

                    <hr class="border-[#F1F2F6]">

                    <!-- Info -->
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-1 md:gap-[6px]">
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location2.png') }}" class="w-4 h-4 md:w-5 md:h-5"
                                alt="icon">
                            <p class="text-xs md:text-xs text-ngekos-grey">
                                {{ $project->lokasi->regency->name }}</p>
                        </div>
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/category.png') }}" class="w-4 h-4 md:w-5 md:h-5"
                                alt="icon">
                            <p class="text-xs md:text-xs text-ngekos-grey">{{ $project->kategori->kategori }}
                            </p>
                        </div>
                        <div class="flex items-center gap-1 md:gap-[6px]">
                            <img src="{{ asset('assets/images/icons/layer.png') }}"
                                class="w-4 h-4 md:w-5 md:h-5" alt="icon">
                            <p class="text-xs md:text-xs text-ngekos-grey">Tersedia {{ $jumlahProdukTersedia }}
                                Properti</p>
                        </div>
                    </div>

                    <hr class="border-[#F1F2F6]">

                    <!-- Harga -->
                    <div class="mt-1">
                        @if (isset($project->kategori->slug) && $project->kategori->slug == 'tanah-kavling')
                            @php
                                $hargaX = $project->project_product->max('harga');
                                $diskonX = $project->project_product->max('discount');
                                $harga_setelah_diskonX = $hargaX - $diskonX;
                            @endphp
                            <div class="flex items-center">
                                <p class="text-sm md:text-lg font-semibold text-[#d40065]">Rp
                                    {{ number_format($harga_setelah_diskon) }}</p>
                                <p class="px-1"> - </p>
                                <p class="text-sm md:text-lg font-semibold text-[#d40065]">Rp
                                    {{ number_format($harga_setelah_diskonX) }}</p>
                            </div>
                        @else
                            <div class="flex items-center">
                                <p class="text-sm md:text-lg font-semibold text-[#d40065]">Rp
                                    {{ number_format($harga_setelah_diskon) }}</p>
                                @if ($diskon > 0)
                                    <p class="ml-3 text-xs md:text-sm text-gray-500 line-through">Rp
                                        {{ number_format($harga) }}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </a>
    </section>
@endforeach
