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
            bottom: 40px !important;
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
    </style>
@endpush

@section('content')
    <div id="Content-Container"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">

        <div id="ForegroundFade"
            class="absolute top-0 w-full h-[143px] bg-[linear-gradient(180deg,#070707_0%,rgba(7,7,7,0)_100%)] z-40">
        </div>

        <div id="TopNavAbsolute" class="absolute top-[30px] flex items-center w-full px-5 z-50">
            <a href="{{ route('lihatkota') }}"
                class="flex overflow-hidden justify-center items-center w-10 h-10 bg-white rounded-full shrink-0">
                <img src="{{ asset('assets/images/icons/back.svg') }}" alt="icon">
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

                            <!-- Overlay -->
                            <div class="photo-clickable-overlay">
                                <svg class="expand-icon" viewBox="0 0 24 24">
                                    <path
                                        d="M9,9H15V15H9V9M11,11V13H13V11H11M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" />
                                </svg>
                                Lihat Foto
                            </div>
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
        <main id="Details" class="relative flex flex-col rounded-t-[40px] py-5 pb-[10px] gap-4 bg-white z-30 -mt-8">
            <div id="Title" class="flex flex-col gap-2 px-5">
                <h2 class="text-sm font-bold">{{ $project->nama_project }}</h2>
                <p class="text-sm text-ngekos-grey">{{ $project->alamat_project }}</p>
            </div>
            <hr class="border-[#F1F2F6] mx-5">
            <div id="Features" class="grid grid-cols-2 gap-x-[10px] gap-y-4 px-5">
                <div class="flex items-center gap-[6px]">
                    <img src="{{ asset('assets/images/icons/location2.svg') }}" class="w-[26px] h-[26px] flex shrink-0"
                        alt="icon">
                    <p class="text-xs text-grey">{{ $project->lokasi->regency->name }}</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="{{ asset('assets/images/icons/category.svg') }}" class="w-[26px] h-[26px] flex shrink-0"
                        alt="icon">
                    <p class="text-xs text-grey">{{ $project->kategori->kategori }}</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="{{ asset('assets/images/icons/layer.svg') }}" class="w-[26px] h-[26px] flex shrink-0"
                        alt="icon">
                    <p class="text-xs text-grey">Terisa
                        {{ $project->project_product->where('status', 'Tersedia')->count() }} Unit</p>
                </div>
                <div class="flex items-center gap-[6px]">
                    <img src="{{ asset('assets/images/icons/verified.svg') }}" class="w-[26px] h-[26px] flex shrink-0"
                        alt="icon">
                    <p class="text-xs text-grey">Terverifikasi</p>
                </div>
            </div>
            <hr class="border-[#F1F2F6] mx-5">
            <div id="About" class="flex flex-col gap-[6px] px-5">
                <h2 class="font-bold">Deskripsi</h2>
                <p class="leading-[30px]">
                    {!! str($project->deskripsi)->sanitizeHtml() !!}
                </p>
            </div>
            <div id="Tabs" class="overflow-x-hidden w-full swiper-tab">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !w-fit">
                        <button
                            class="tab-link rounded-full p-[8px_14px] border border-[#F1F2F6] text-sm font-semibold hover:bg-ngekos-black hover:text-white transition-all duration-300 !bg-ngekos-black !text-white"
                            data-target-tab="#Bonus-Tab">Fasilitas</button>
                    </div>

                    @if (View::exists('pages.detailkavling.' . $project->slug))
                        <div class="swiper-slide !w-fit">
                            <button
                                class="tab-link rounded-full p-[8px_14px] border border-[#F1F2F6] text-sm font-semibold hover:bg-ngekos-black hover:text-white transition-all duration-300"
                                data-target-tab="#Testimonials-Tab">Siteplan</button>
                        </div>
                    @endif

                    <div class="swiper-slide !w-fit">
                        <button
                            class="tab-link rounded-full p-[8px_14px] border border-[#F1F2F6] text-sm font-semibold hover:bg-ngekos-black hover:text-white transition-all duration-300"
                            data-target-tab="#Rules-Tab">Brosur</button>
                    </div>
                    <div class="swiper-slide !w-fit">
                        <button
                            class="tab-link rounded-full p-[8px_14px] border border-[#F1F2F6] text-sm font-semibold hover:bg-ngekos-black hover:text-white transition-all duration-300"
                            data-target-tab="#Contact-Tab">Video</button>
                    </div>
                    <div class="swiper-slide !w-fit">
                        <button
                            class="tab-link rounded-full p-[8px_14px] border border-[#F1F2F6] text-sm font-semibold hover:bg-ngekos-black hover:text-white transition-all duration-300"
                            data-target-tab="#Rewards-Tab">Maps</button>
                    </div>
                </div>
            </div>

            <div id="TabsContent" class="px-5">
                <div id="Bonus-Tab" class="flex flex-col gap-5 tab-content">
                    <div class="flex flex-col gap-4">
                        @forelse ($facilities as $facility)
                            <div
                                class="bonus-card flex items-center rounded-[22px] border border-[#F1F2F6] p-[10px] gap-3 hover:border-[#d40065] transition-all duration-300">
                                <div class="flex w-[26px] h-[26px] shrink-0">
                                    <img src="{{ asset('assets/images/icons/check-mark.svg') }}"
                                        class="object-cover w-full h-full" alt="icon">
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $facility->fasilitas }}</p>
                                    {{-- <p class="text-sm text-ngekos-grey">Fasilitas</p> --}}
                                </div>
                            </div>
                        @empty
                            <div
                                class="bonus-card flex items-center rounded-[22px] border border-[#F1F2F6] p-[10px] gap-3 hover:border-[#d40065] transition-all duration-300">
                                <div class="flex w-[26px] h-[26px] shrink-0">
                                    <img src="{{ asset('assets/images/icons/check-mark.svg') }}"
                                        class="object-cover w-full h-full" alt="icon">
                                </div>
                                <div>
                                    <p class="font-semibold">Belum Ada Fasilitas</p>
                                    {{-- <p class="text-sm text-ngekos-grey">Fasilitas</p> --}}
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                @if (View::exists('pages.detailkavling.' . $project->slug))
                    <div id="Testimonials-Tab" class="hidden flex-col gap-5 tab-content">
                        <div class="flex flex-col gap-4">
                            <div
                                class="testi-card flex flex-col rounded-[22px] border border-[#F1F2F6] p-4 gap-3 bg-white hover:border-[#d40065] transition-all duration-300">
                                @include('pages.detailkavling.' . $project->slug)
                            </div>
                        </div>
                    </div>
                @endif

                <div id="Rules-Tab" class="hidden flex-col gap-5 tab-content">
                    Brosur
                </div>
                <div id="Contact-Tab" class="hidden flex-col gap-5 tab-content">
                    <div class="flex flex-col gap-4">
                        <div
                            class=" video-card flex flex-col rounded-[22px] border border-[#F1F2F6] p-4 gap-3 bg-white hover:border-[#d40065] transition-all duration-300">
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
                                                    src="https://www.youtube.com/embed/{{ $video_id }}"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                                </iframe>
                                            </div>
                                        @else
                                            <div
                                                class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
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
                                            <div class="relative w-full"
                                                style="padding-bottom: 125%; /* Instagram ratio */">
                                                <iframe class="absolute top-0 left-0 w-full h-full rounded-lg"
                                                    src="https://www.instagram.com/p/{{ $instagram_id }}/embed"
                                                    frameborder="0" scrolling="no" allowtransparency="true"
                                                    allow="encrypted-media">
                                                </iframe>
                                            </div>
                                        @else
                                            <div
                                                class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
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
                                            <div
                                                class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center">
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
                                        <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <p class="text-gray-600 text-lg font-medium">Video tidak tersedia</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

                <!-- Maps Tab - Simple and Clean -->
                <div id="Rewards-Tab" class="hidden flex-col gap-5 tab-content">
                    <div class="flex flex-col gap-4">
                        <div
                            class="bonus-card flex flex-col rounded-[22px] border border-[#F1F2F6] p-4 gap-3 bg-white hover:border-primary transition-all duration-300">
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
                                                <p class="text-xs text-gray-500 font-mono">{{ $project->latlang }}</p>
                                            </div>

                                            <div class="flex gap-2">
                                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($project->latlang) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
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
                                        <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-gray-600 text-lg font-medium">Lokasi tidak tersedia</p>
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

        <div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
            <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-50">
                <div
                    class="flex items-center justify-between rounded-[40px] py-4 px-6 bg-gradient-to-r from-[#a7006d] to-[#d40065]">
                    <div class="flex flex-col gap-[2px]">
                        <p id="price" class="font-bold text-sm leading-[30px] text-white">
                        </p>
                        <span class="text-sm text-white">Biaya Booking</span>
                        <p class="font-bold text-lg leading-[30px] text-white">
                            Rp 100.000
                        </p>
                    </div>
                    @if ($project->project_product->where('status', 'Tersedia')->count() == '0')
                        <a href="#"
                            class="flex shrink-0 rounded-full py-[14px] px-5 text-sm bg-white font-bold text-[#d40065] hover:bg-black hover:text-white">Tidak
                            Tersedia</a>
                    @else
                        <a href="{{ route('custinfo', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}"
                            class="flex shrink-0 rounded-full py-[14px] px-5 text-sm bg-white font-bold text-[#d40065] hover:bg-black hover:text-white">Booking
                            Sekarang</a>
                    @endif
                </div>
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
    </script>
@endpush
