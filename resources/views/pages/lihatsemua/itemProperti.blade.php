@if (count($projects) > 0)
    @foreach ($projects as $project)
        @php
            // Menghitung jumlah produk Tersedia untuk proyek saat ini
            $jumlahProdukTersedia = $project->project_product()->where('status', 'Tersedia')->count();
        @endphp

        <section id="Result" class="flex relative flex-col gap-4 px-5 mt-5 mb-3 project-item">
            <a href="{{ route('detailproject', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}"
                class="card">
                <div
                    class="flex rounded-[30px] border border-[#F1F2F6] p-2 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
                    <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" class="object-cover w-full h-full"
                            alt="">
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <h3 class="text-sm font-semibold">{{ $project->nama_project }}</h3>
                        <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
                        <hr class="border-[#F1F2F6]">
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $project->lokasi->regency->name }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex w-5 h-5 shrink-0"
                                alt="icon">
                            <p class="text-xs text-ngekos-grey">{{ $project->kategori->kategori }}</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/profile-2user.svg') }}"
                                class="flex w-5 h-5 shrink-0" alt="icon">
                            <p class="text-sm text-ngekos-grey">Tersedia - {{ $jumlahProdukTersedia }} Properti </p>
                        </div>
                        <hr class="border-[#F1F2F6]">
                        @php
                            $harga = $project->project_product->min('harga');
                            $diskon = $project->project_product->min('discount'); // Asumsi diskon dalam persen
                            $harga_setelah_diskon = $harga - $diskon;

                            $hargaX = $project->project_product->max('harga');
                            $diskonX = $project->project_product->max('discount'); // Asumsi diskon dalam persen
                            $harga_setelah_diskonX = $hargaX - $diskonX;
                        @endphp
                        @if ($project->kategori->slug == 'tanah-kavling')
                            <div class="flex">
                                <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                    {{ number_format($harga_setelah_diskon) }} </p>
                                <p class="px-1"> - </p>

                                <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                    {{ number_format($harga_setelah_diskonX) }}</p>
                            </div>
                        @else
                            <div class="flex">
                                <p class="text-sm lg:text-lg font-semibold text-[#d40065]">
                                    {{ number_format($harga_setelah_diskon) }}</p>
                                <p class="ml-2 text-xs font-semibold text-gray-500 line-through">
                                    {{ number_format($harga) }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </a>
        </section>
    @endforeach
@else
    <!-- Check if this is the initial page load -->
    @if (!request()->ajax())
        <div class="flex flex-col items-center justify-center h-[300px] text-center">
            <p class="text-gray-500">Tidak ada properti Tersedia</p>
        </div>
    @endif
@endif
