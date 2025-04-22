@forelse ($product as $item)
<a href="{{ route('detailproject', [$item->jenis->slug, $item->kategori->slug, $item->slug]) }}" class="card">
    <div class="flex rounded-[30px] border border-[#F1F2F6] p-4 gap-4 bg-white hover:border-[#d40065] transition-all duration-300">
        <div class="flex w-[120px] h-[183px] shrink-0 rounded-[30px] bg-[#D9D9D9] overflow-hidden">
            <div class="relative">
                <button class="absolute top-4 right-4 w-max rounded-full p-1.5 bg-[#d40065] text-white text-[0.625rem]">
                    Turun Harga
                </button>
                <img src="{{ asset('storage/' . $item->thumbnail) }}" class="object-cover w-full h-full" alt="{{ $item->jenis->jenis }} {{ $item->kategori->kategori }} {{ $item->nama_project }} di {{ $item->alamat_project }} - {{ $item->lokasi->regency->name }}">
            </div>
        </div>
        <div class="flex flex-col gap-3 w-full">
            <h3 class="font-semibold text-lg">{{ $item->nama_project }}</h3>
            <p class="text-sm text-ngekos-grey">{{ $item->alamat_project }}</p>
            <hr class="border-[#F1F2F6]">
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/location.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                <p class="text-sm text-ngekos-grey">{{ $item->lokasi->regency->name }}</p>
            </div>
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/3dcube.svg') }}" class="flex w-5 h-5 shrink-0" alt="icon">
                <p class="text-sm text-ngekos-grey">{{ $item->kategori->kategori }}</p>
            </div>
            <hr class="border-[#F1F2F6]">
            @php
                $harga = $item->project_product->min('harga');
                $diskon = $item->project_product->min('discount'); // Asumsi diskon dalam persen
                $harga_setelah_diskon = $harga - $diskon;
            @endphp
            <div class="flex">
                <p class="text-sm lg:text-lg font-semibold text-[#d40065]">Rp {{ number_format($harga_setelah_diskon) }}</p>
                @if($diskon > 0)
                    <p class="ml-2 text-[0.625rem] font-semibold text-gray-500 line-through">Rp {{ number_format($harga) }}</p>
                @endif
            </div>
        </div>
    </div>
</a>
@empty
<div class="flex flex-col items-center justify-center p-8 text-center">
    <h3 class="font-semibold text-lg mb-2">Properti Tidak Ditemukan</h3>
</div>
@endforelse