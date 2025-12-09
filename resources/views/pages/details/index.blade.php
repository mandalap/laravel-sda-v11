@extends('layouts.app')

@section('title')
    {{ $project->nama_project }}
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
        .swiper-gallery .swiper-wrapper {
            margin: 0 !important;
            padding: 0 !important;
        }

        .swiper-gallery .swiper-slide {
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            outline: none !important;
        }

        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5) !important;
            opacity: 1 !important;
            width: 12px !important;
            height: 12px !important;
        }

        .swiper-pagination-bullet-active {
            background: white !important;
            transform: scale(1.2);
        }

        .gallery-container {
            aspect-ratio: 500/390;
            min-height: 200px;
            max-height: 350px;
            overflow: hidden;
        }

        @media (min-width: 768px) {
            .gallery-container {
                min-height: 300px;
                max-height: 400px;
            }
        }

        @media (min-width: 1024px) {
            .gallery-container {
                min-height: 350px;
                max-height: 450px;
            }
        }

        .gallery-slide-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            cursor: pointer;
            display: block;
            margin: 0 !important;
            padding: 0 !important;
        }

        .swiper-pagination {
            bottom: 30px !important;
            z-index: 50 !important;
            position: absolute !important;
        }

        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.7) !important;
            opacity: 1 !important;
            width: 12px !important;
            height: 12px !important;
            margin: 0 4px !important;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.2), transparent);
            z-index: 25;
            pointer-events: none;
        }

        .photo-clickable-overlay {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 6px 10px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 500;
            z-index: 30;
            display: flex;
            align-items: center;
            gap: 4px;
            backdrop-filter: blur(10px);
        }

        .expand-icon {
            width: 12px;
            height: 12px;
            fill: currentColor;
        }

        .fancybox-button {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        .fancybox-toolbar {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        /* Tab styling */
        .tab-link {
            background-color: #fce7f3;
            /* bg-primary-secondary */
            color: #d40065;
            /* text-primary */
        }

        .tab-link.active {
            background-color: #d40065 !important;
            /* bg-primary */
            color: #f9fafb !important;
            /* text-custom-gray-10 */
        }

        .tab-link:hover:not(.active) {
            opacity: 0.8;
        }
    </style>
@endpush

@section('content')
    <div id="TopNavAbsolute" class="absolute top-[30px] flex items-center w-full px-5 z-50">
        <a href="{{ route('beranda') }}"
            class="flex overflow-hidden justify-center items-center w-9 h-9 bg-white rounded-full shrink-0">
            <img src="{{ asset('assets/images/icons/arrow-left-primary.png') }}" class="w-5 h-5" alt="icon">
        </a>
    </div>

    <!-- Gallery -->
    <div id="Gallery" class="swiper-gallery w-full relative gallery-container">
        <div class="swiper-wrapper">
            @forelse ($photos as $index => $photo)
                <div class="swiper-slide">
                    <div class="relative w-full h-full">
                        <a href="{{ asset('storage/' . $photo->photo) }}" data-fancybox="gallery"
                            data-caption="Foto {{ $index + 1 }} - {{ $project->nama_project }}">
                            <img src="{{ asset('storage/' . $photo->photo) }}" class="gallery-slide-image"
                                alt="gallery thumbnails">
                        </a>
                    </div>
                </div>
            @empty
                <!-- Placeholder -->
                <div class="swiper-slide">
                    <div class="relative w-full h-full bg-gray-200 flex items-center justify-center">
                        <p class="text-gray-500">Tidak ada foto</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

    </div>

    <!-- Main content -->
    <main id="Details" class="relative flex flex-col p-5 gap-5 bg-custom-gray-10 z-30 ">
        <div id="Title" class="flex flex-col gap-0.5">
            <p class="text-xs font-bold text-primary">
                {!! $project->getPriceDisplay([
                    'price_class' => 'text-xl font-bold text-primary',
                    'strike_class' => 'text-sm text-custom-gray-80 font-medium',
                    'strike_top' => '6px',
                ]) !!}</p>
            <h2 class="text-lg text-custom-gray-100 font-medium">{{ $project->nama_project }}</h2>
            <p class="text-sm text-custom-gray-90 font medium">{{ $project->alamat_project }}</p>
        </div>

        <hr class="border-custom-gray-40 -mx-5">

        <div id="Features" class="grid grid-cols-2 gap-3">
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/location2.png') }}" class="w-4 h-4 flex shrink-0" alt="icon">
                <p class="text-sm text-custom-gray-80 font-medium">{{ $project->lokasi->regency->name }}</p>
            </div>
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/layer.png') }}" class="w-4 h-4 flex shrink-0" alt="icon">
                @php
                    $stok = $project->project_product->where('status', 'Tersedia')->count();
                @endphp
                <p class="text-sm font-medium {{ $stok <= 5 ? 'text-danger-main' : 'text-custom-gray-80' }}">
                    Tersisa {{ $stok }} Unit
                </p>
            </div>
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/category.png') }}" class="w-4 h-4 flex shrink-0" alt="icon">
                <p class="text-sm text-custom-gray-80 font-medium">{{ $project->kategori->kategori }}</p>
            </div>
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/size.png') }}" class="w-4 h-4 flex shrink-0" alt="icon">
                <p class="text-sm text-custom-gray-80 font-medium">
                    {{ $project->ukuran_kavling ?: '-' }}
                </p>
            </div>
            <div class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/file.png') }}" class="w-4 h-4 flex shrink-0" alt="icon">
                <p class="text-sm text-custom-gray-80 font-medium">Sertifikat {{ $project->sertifikat }}</p>
            </div>
        </div>

        <hr class="border-custom-gray-40 -mx-5">

        <div id="Contact" class="flex flex-col">
            <div class="flex flex-row gap-3 justify-between items-center">
                <div class="flex flex-col">
                    <h2 class="text-sm text-custom-gray-100 font-bold">Hubungi Admin</h2>
                    <div class="text-xs text-custom-gray-90">
                        Tanyakan apapun terkait dengan produk ini secara langsung ke Admin kami.
                    </div>
                </div>

                @if ($whatsappConfig && $whatsappConfig->sender)
                    <a href="{{ route('detailproject.contact', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}"
                        class="p-2 rounded-xl flex items-center gap-2 hover:opacity-80 transition-opacity">
                        <div class="w-9 h-9 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/chat.svg') }}" class="w-5 h-5" alt="chat">
                        </div>
                    </a>
                @else
                    {{-- Fallback jika WhatsApp config tidak ada --}}
                    <div class="p-2 rounded-xl flex items-center gap-2 opacity-50 cursor-not-allowed">
                        <div class="w-9 h-9 bg-gray-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/icons/chat.svg') }}" class="w-5 h-5" alt="chat">
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <hr class="border-custom-gray-40 -mx-5">

        <div id="About" class="flex flex-col gap-2">
            <h2 class="text-sm text-custom-gray-100 font-bold">Deskripsi</h2>
            <div class="text-custom-gray-90" style="font-size: 14px; line-height: 30px;">
                {!! str($project->deskripsi)->sanitizeHtml() !!}
            </div>
        </div>

        <div id="Tabs" class="overflow-x-hidden w-full swiper-tab">
            <div class="swiper-wrapper gap-2">
                <div class="swiper-slide !w-fit">
                    <button class="tab-link rounded-[50px] py-2 px-4 text-sm font-semibold transition-all duration-300"
                        data-target-tab="#Fasilitas-Tab">
                        Fasilitas
                    </button>
                </div>

                @if (View::exists('pages.detailkavling.' . $project->slug))
                    <div class="swiper-slide !w-fit">
                        <button class="tab-link rounded-[50px] py-2 px-4 text-sm font-semibold transition-all duration-300"
                            data-target-tab="#Siteplan-Tab">
                            Siteplan
                        </button>
                    </div>
                @endif

                <div class="swiper-slide !w-fit">
                    <button class="tab-link rounded-[50px] py-2 px-4 text-sm font-semibold transition-all duration-300"
                        data-target-tab="#Brosur-Tab">
                        Brosur
                    </button>
                </div>

                <div class="swiper-slide !w-fit">
                    <button class="tab-link rounded-[50px] py-2 px-4 text-sm font-semibold transition-all duration-300"
                        data-target-tab="#Video-Tab">
                        Video
                    </button>
                </div>

                <div class="swiper-slide !w-fit">
                    <button class="tab-link rounded-[50px] py-2 px-4 text-sm font-semibold transition-all duration-300"
                        data-target-tab="#Map-Tab">
                        Maps
                    </button>
                </div>
            </div>
        </div>

        <!-- Fasilitas Tab -->
        <div id="TabsContent" class="">
            <div id="Fasilitas-Tab" class="flex flex-col gap-5 tab-content">
                <div class="flex flex-col gap-4">
                    @forelse ($facilities as $facility)
                        <div
                            class="bonus-card flex items-center rounded-[22px] border border-custom-gray-40 p-[10px] gap-3 hover:border-[#d40065] transition-all duration-300">
                            <div class="flex w-[26px] h-[26px] shrink-0">
                                <img src="{{ asset('assets/images/icons/check-mark.svg') }}"
                                    class="object-cover w-full h-full" alt="icon">
                            </div>
                            <div>
                                <p class="font-semibold">{{ $facility->fasilitas }}</p>
                            </div>
                        </div>
                    @empty
                        <div
                            class="bonus-card flex items-center rounded-[22px] border border-custom-gray-40 p-[10px] gap-3 hover:border-[#d40065] transition-all duration-300">
                            <div class="flex w-[26px] h-[26px] shrink-0">
                                <img src="{{ asset('assets/images/icons/check-mark.svg') }}"
                                    class="object-cover w-full h-full" alt="icon">
                            </div>
                            <div>
                                <p class="font-semibold">Belum Ada Fasilitas</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            @if (View::exists('pages.detailkavling.' . $project->slug))
                <div id="Siteplan-Tab" class="hidden flex-col gap-5 tab-content">
                    <div class="flex flex-col gap-4">
                        <div
                            class="testi-card flex flex-col rounded-[22px] border border-custom-gray-40 p-4 gap-3 bg-white hover:border-[#d40065] transition-all duration-300">
                            @include('pages.detailkavling.' . $project->slug)
                        </div>
                    </div>
                </div>
            @endif

            <!-- Brosur Tab -->
            <div id="Brosur-Tab" class="hidden flex-col gap-5 tab-content">
                <div class="flex flex-col gap-4">
                    <div
                        class="testi-card flex flex-col rounded-[22px] border border-custom-gray-40 p-4 gap-3 bg-white hover:border-[#d40065] transition-all duration-300">
                        @if ($brosurs->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach ($brosurs as $index => $brosur)
                                    <div
                                        class="group relative overflow-hidden rounded-[22px] border border-custom-gray-40 bg-white hover:border-[#d40065] transition-all duration-300 shadow-sm hover:shadow-lg">
                                        <!-- Container gambar -->
                                        <div class="relative aspect-[3/4] overflow-hidden">
                                            <img src="{{ asset('storage' . $brosur->photo) }}"
                                                alt="Brosur {{ $index + 1 }}"
                                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                                loading="lazy">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="w-full h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <p class="text-gray-600 text-sm font-medium">Brosur tidak tersedia</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Video Tab -->
            <div id="Video-Tab" class="hidden flex-col gap-5 tab-content">
                <div class="flex flex-col gap-4">
                    <div
                        class=" video-card flex flex-col rounded-[22px] border border-custom-gray-40 p-4 gap-3 bg-white hover:border-[#d40065] transition-all duration-300">
                        @if ($project->url_video)
                            @php
                                $url = $project->url_video;
                            @endphp

                            <div class="video-wrapper w-full">
                                <!-- Cek URL YouTube -->
                                @if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false)
                                    @php
                                        // Extract YouTube video ID properly
                                        if (strpos($url, 'youtu.be') !== false) {
                                            $video_id = basename(parse_url($url, PHP_URL_PATH));
                                        } elseif (
                                            preg_match(
                                                '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/',
                                                $url,
                                                $matches,
                                            )
                                        ) {
                                            $video_id = $matches[1];
                                        } else {
                                            $video_id = null;
                                        }
                                    @endphp

                                    @if ($video_id)
                                        <div class="relative w-full"
                                            style="padding-bottom: 56.25%; /* 16:9 aspect ratio */">
                                            <iframe class="absolute top-0 left-0 w-full h-full rounded-lg"
                                                src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    @else
                                        <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <p class="text-gray-600">Video YouTube tidak dapat dimuat</p>
                                        </div>
                                    @endif

                                    <!-- Cek URL Instagram -->
                                @elseif (strpos($url, 'instagram.com') !== false)
                                    @php
                                        // take video Instagram ID form URL - improved regex
                                        if (preg_match('/(?:reel|p)\/([A-Za-z0-9_-]+)/', $url, $matches)) {
                                            $instagram_id = $matches[1];
                                        } else {
                                            $instagram_id = null;
                                        }
                                    @endphp

                                    @if ($instagram_id)
                                        <div class="relative w-full" style="padding-bottom: 125%; /* Instagram ratio */">
                                            <iframe class="absolute top-0 left-0 w-full h-full rounded-lg"
                                                src="https://www.instagram.com/p/{{ $instagram_id }}/embed"
                                                frameborder="0" scrolling="no" allowtransparency="true"
                                                allow="encrypted-media">
                                            </iframe>
                                        </div>
                                    @else
                                        <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <p class="text-gray-600">Video Instagram tidak dapat ditemukan</p>
                                        </div>
                                    @endif

                                    <!-- Cek URL TikTok -->
                                @elseif (strpos($url, 'tiktok.com') !== false)
                                    @php
                                        // Ambil ID video TikTok dari URL
                                        if (preg_match('/video\/(\d+)/', $url, $matches)) {
                                            $tiktok_id = $matches[1];
                                        } else {
                                            $tiktok_id = null;
                                        }
                                    @endphp

                                    @if ($tiktok_id)
                                        <div class="flex justify-center">
                                            <div class="w-full max-w-md">
                                                <blockquote class="tiktok-embed" cite="{{ $url }}"
                                                    data-video-id="{{ $tiktok_id }}"
                                                    style="max-width: 605px; min-width: 325px;">
                                                    <section>
                                                        <a target="_blank" title="Video TikTok"
                                                            href="{{ $url }}">
                                                            Lihat Video di TikTok
                                                        </a>
                                                    </section>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <script async src="https://www.tiktok.com/embed.js"></script>
                                    @else
                                        <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <p class="text-gray-600">Video TikTok tidak dapat ditemukan</p>
                                        </div>
                                    @endif
                                @else
                                    <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <p class="text-gray-600 mb-2">Video tidak tersedia atau tidak didukung</p>
                                            <a href="{{ $url }}" target="_blank"
                                                class="text-blue-600 hover:text-blue-800 underline">
                                                Lihat Video Asli
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="w-full h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-gray-600 text-sm font-medium">Video tidak tersedia</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Maps Tab -->
            <div id="Map-Tab" class="hidden flex-col gap-5 tab-content">
                <div class="flex flex-col gap-4">
                    <div
                        class="bonus-card flex flex-col rounded-[22px] border border-custom-gray-40 p-4 gap-3 bg-white hover:border-primary transition-all duration-300">
                        @if ($project->latlang)
                            @php
                                // Parse latitude and longitude
                                $coordinates = explode(',', $project->latlang);
                                $lat = trim($coordinates[0] ?? '');
                                $lng = trim($coordinates[1] ?? '');
                            @endphp

                            @if ($lat && $lng)
                                <div class="maps-wrapper w-full">
                                    <!-- Google Maps Embed -->
                                    <div class="relative w-full h-96 rounded-lg overflow-hidden">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1000!2d{{ $lng }}!3d{{ $lat }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f15.1!5e0!3m2!1sen!2sid!4v{{ time() }}!5m2!1sen!2sid"
                                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>

                                    <!-- Map Actions -->
                                    <div
                                        class="mt-4 flex flex-col sm:flex-row gap-3 justify-between items-start sm:items-center">
                                        <div>
                                            <p class="font-semibold text-gray-800">{{ $project->nama_project }}</p>
                                            <p class="text-sm text-gray-600">{{ $project->alamat_project }}</p>
                                        </div>

                                        <div class="flex gap-2">
                                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($project->latlang) }}"
                                                target="_blank"
                                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                                    </path>
                                                </svg>
                                                Buka Google Maps
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <p class="text-gray-600">Koordinat tidak valid</p>
                                </div>
                            @endif
                        @else
                            <div class="w-full h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <p class="text-gray-600 text-sm font-medium">Lokasi tidak tersedia</p>
                                    @if ($project->alamat_project)
                                        <p class="text-sm text-gray-500 mt-2">Alamat: {{ $project->alamat_project }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </main>

    <div id="BottomNav" class="relative flex w-full h-[90px] shrink-0">
        <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-50">
            <div
                class="flex items-center justify-between rounded-full h-[61px] pl-6 pr-2 bg-gradient-to-t from-secondary to-primary">
                <!-- Info Section -->
                <div class="flex flex-col justify-center">
                    <span class="text-xs text-custom-gray-10 leading-none mb-1">Biaya Booking</span>
                    <p class="font-bold text-lg text-custom-gray-10 leading-none">
                        Rp 100.000
                    </p>
                </div>

                <!-- Button Section (Same height as container) -->
                @if ($project->project_product->where('status', 'Tersedia')->count() == '0')
                    <a href="#"
                        class="flex items-center justify-center shrink-0 rounded-full w-[110px] h-[45px] p-3 text-sm bg-primary-secondary font-bold text-primary hover:bg-black hover:text-white transition-all duration-300 whitespace-nowrap">
                        Tidak Tersedia
                    </a>
                @else
                    <a href="{{ route('custinfo', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}"
                        class="flex items-center justify-center shrink-0 rounded-full w-[110px] h-[45px] p-3 text-sm bg-primary-secondary font-bold text-primary hover:bg-black hover:text-white transition-all duration-300 whitespace-nowrap">
                        Booking
                    </a>
                @endif
            </div>
        </div>
    </div>

@endsection

@push('addon-script')
    <script src="{{ asset('vendor/fancybox/fancybox.umd.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper Gallery
            var swiperProjectGallery = new Swiper('.swiper-gallery', {
                direction: 'horizontal',
                spaceBetween: 0,
                slidesPerView: 1,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    type: 'bullets',
                    dynamicBullets: true,
                },
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                }
            });

            Fancybox.bind('[data-fancybox="gallery"]', {
                l10n: {
                    NEXT: "Foto Selanjutnya",
                    PREV: "Foto Sebelumnya",
                },
            });


            // Tab functionality
            const swiperCategories = new Swiper('.swiper-choose', {
                direction: 'horizontal',
                spaceBetween: 14,
                slidesOffsetBefore: 16,
                slidesOffsetAfter: 16,
                slidesPerView: 'auto',
            });

            const swiperPopular = new Swiper('.swiper-popular', {
                direction: 'horizontal',
                spaceBetween: 16,
                slidesOffsetBefore: 16,
                slidesOffsetAfter: 16,
                slidesPerView: 'auto',
            });
        });

        // JavaScript untuk menangani tab switching
        document.addEventListener('DOMContentLoaded', function() {
            // Get all tab buttons
            const tabLinks = document.querySelectorAll('.tab-link');
            const tabContents = document.querySelectorAll('.tab-content');

            // Add click event listener to each button
            tabLinks.forEach(button => {
                button.addEventListener('click', () => {
                    // Get the target tab id from the data attribute
                    const targetTab = button.getAttribute('data-target-tab');

                    // Remove active state from all buttons
                    tabLinks.forEach(btn => {
                        btn.classList.remove('active', '!bg-primary',
                            '!text-custom-gray-10', 'bg-primary', 'text-custom-gray-10',
                            '!bg-ngekos-black', '!text-white');
                        btn.classList.add('bg-primary-secondary', 'text-primary');
                    });

                    // Add active state to the clicked button
                    button.classList.add('active', 'bg-primary', 'text-custom-gray-10');
                    button.classList.remove('bg-primary-secondary', 'text-primary');

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                        content.classList.remove('flex', 'flex-col');
                    });

                    // Show the target tab content
                    const targetContent = document.querySelector(targetTab);
                    if (targetContent) {
                        targetContent.classList.remove('hidden');
                        targetContent.classList.add('flex', 'flex-col');
                    }
                });
            });

            // Set default active tab (tab pertama)
            if (tabLinks.length > 0) {
                tabLinks[0].click();
            }
        });
    </script>
@endpush
