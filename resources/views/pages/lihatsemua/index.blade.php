@extends('layouts.app')

@section('title')
    Hasil Pencarian
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        #filter_dropdown {
            left: unset;
            right: 0;
            transform: translateX(-10%);
        }
        @keyframes pulse {
            0% {
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }

        .animate-pulse {
            animation: pulse 1.5s ease-in-out infinite;
        }

        #skeleton-loader {
            display: none;
        }

        #no-more-data {
            display: none;
            text-align: center;
            padding: 20px 0;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
    <x-navigation-route title="Properti {{ $kelompok->kelompok }}" :backRoute="route('beranda')" :showBackground="true"
        textColor="text-custom-gray-10" />
    <div class="flex sticky top-0 z-50 gap-4 items-center px-5 w-full">

        <form action="" class="flex relative z-10 flex-row flex-grow items-center w-full">
            <input type="hidden" name="propertiType" value="{{ request()->query('propertiType', 'popular') }}">
            <input type="hidden" name="propertiKategori" value="{{ request()->query('propertiKategori', 'all') }}">
            <input type="hidden" name="filter" value="{{ request()->query('filter', 'none') }}">
            <div
                class="flex items-center rounded-full gap-2 px-4 h-11 bg-custom-gray-10 w-full transition-all duration-300 focus-within:ring-1 focus-within:ring-primary ring-1">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="{{ asset('assets/images/icons/search-primary.png') }}" alt="icon">
                </div>
                <input type="text" name="cari" id="cari_kavling"
                    class="w-full text-xs bg-transparent outline-none placeholder:text-custom-gray-70"
                    placeholder="Tuliskan nama lokasi" value="{{ request()->query('cari') }}">
                <button type="submit"
                    class="ml-2 flex justify-center rounded-full px-3 py-1.5 bg-primary font-bold text-custom-gray-10 hover:text-custom-gray-100 text-xs whitespace-nowrap">Cari</button>
            </div>
        </form>
        <div class="relative">
            <button type="button" id="filter_button"
                class="w-11 h-11 bg-custom-gray-10 rounded-full flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/images/icons/filter.png') }}" alt="filter icon" class="w-6 h-6">
            </button>
            <div id="filter_dropdown"
                class="hidden absolute left-0 p-2 mt-2 w-40 text-sm text-black bg-white rounded-md border border-gray-300 shadow-lg">
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'terbaru']) }}"
                    class="block p-2 w-full text-left hover:bg-gray-200">
                    Listing Terbaru
                </a>
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'terlama']) }}"
                    class="block p-2 w-full text-left hover:bg-gray-200">Listing
                    Terlama</a>
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'termurah']) }}"
                    class="block p-2 w-full text-left hover:bg-gray-200">Harga
                    Termurah</a>
                <a href="{{ route('lihatsemua', ['propertiType' => $type, 'propertiKategori' => $kat, 'filter' => 'tertinggi']) }}"
                    class="block p-2 w-full text-left hover:bg-gray-200">Harga
                    Termahal</a>
            </div>
        </div>
    </div>

    @if (request()->has('cari') && request()->query('cari') !== '')
        <div id="Header" class="relative flex flex-col px-5 mt-4">
            @if ($projectCount > 0)
                <p class="text-sm text-custom-gray-10 font-medium">
                    {{ $projectCount }} hasil pencarian ditemukan
                </p>
            @else
                <p class="text-sm text-custom-gray-10 font-medium">
                    Hasil tidak ditemukan
                </p>
            @endif
        </div>
    @endif

    <div id="projects-container">
        @include('pages.lihatsemua.itemProperti')
    </div>

    <div id="skeleton-loader">
        @include('pages.lihatsemua.skeletonLoader')
    </div>

    <div id="no-more-data">
        Semua properti telah ditampilkan
    </div>

    @include('includes.footer')
@endsection

@push('addon-script')
    <script>
        timeout_var = null;

        function typeWriter(selector_target, text_list, placeholder = false, i = 0, text_list_i = 0, delay_ms = 200) {
            if (!i) {
                if (placeholder) {
                    document.querySelector(selector_target).placeholder = "";
                } else {
                    document.querySelector(selector_target).innerHTML = "";
                }
            }
            txt = text_list[text_list_i];
            if (i < txt.length) {
                if (placeholder) {
                    document.querySelector(selector_target).placeholder += txt.charAt(i);
                } else {
                    document.querySelector(selector_target).innerHTML += txt.charAt(i);
                }
                i++;
                setTimeout(typeWriter, delay_ms, selector_target, text_list, placeholder, i, text_list_i);
            } else {
                text_list_i++;
                if (typeof text_list[text_list_i] === "undefined") {
                    setTimeout(typeWriter, (delay_ms * 5), selector_target, text_list, placeholder);
                } else {
                    i = 0;
                    setTimeout(typeWriter, (delay_ms * 3), selector_target, text_list, placeholder, i, text_list_i);
                }
            }
        }

        text_list = [
            "Cari properti dengan nama lokasi. \"PAL\"",
            "Sungai Raya",
            "Serdam",
            "Punggur",
            "Rasau Jaya",
            "Pontianak",
            "Kubu Raya",
            "Singkawang",
            "Mempawah",
            "Sambas",
            "Cari properti dengan nama project. \"Parit Berkat\"",
            "Parit Rintis",
            "Parit Buluh",
        ];

        return_value = typeWriter("#cari_kavling", text_list, true);

        document.getElementById('filter_button').addEventListener('click', function() {
            const filter = document.getElementById('filter_dropdown');
            filter.classList.toggle('hidden');
        });

        let currentPage = 1;
        let isLoading = false;
        let hasMorePages = true;

        function loadMoreProjects() {
            if (isLoading || !hasMorePages) return;

            isLoading = true;
            document.getElementById('skeleton-loader').style.display = 'block';

            const urlParams = new URLSearchParams(window.location.search);
            const propertiType = urlParams.get('propertiType') || '';
            const propertiKategori = urlParams.get('propertiKategori') || '';
            const filter = urlParams.get('filter') || '';
            const cari = urlParams.get('cari') || '';

            currentPage++;

            fetch(`{{ route('lihatsemua') }}?propertiType=${propertiType}&propertiKategori=${propertiKategori}&filter=${filter}&cari=${cari}&page=${currentPage}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('skeleton-loader').style.display = 'none';

                    document.getElementById('projects-container').insertAdjacentHTML('beforeend', data.html);

                    hasMorePages = data.hasMorePages;

                    if (!hasMorePages) {
                        document.getElementById('no-more-data').style.display = 'block';
                    }

                    isLoading = false;
                })
                .catch(error => {
                    console.error('Error loading more projects:', error);
                    isLoading = false;
                    document.getElementById('skeleton-loader').style.display = 'none';
                });
        }

        window.addEventListener('scroll', function() {
            const scrollHeight = Math.max(
                document.body.scrollHeight, document.documentElement.scrollHeight,
                document.body.offsetHeight, document.documentElement.offsetHeight,
                document.body.clientHeight, document.documentElement.clientHeight
            );

            if (window.innerHeight + window.pageYOffset >= scrollHeight - 200) {
                loadMoreProjects();
            }
        });
    </script>
@endpush
