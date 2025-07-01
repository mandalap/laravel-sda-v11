@extends('layouts.app')

@section('title')
    {{ $project->nama_project }}
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
    <style>
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

        /* Gallery responsive styles */
        .gallery-container {
            /* Mobile first: aspect ratio yang sesuai dengan foto 500x390 */
            aspect-ratio: 500/390;
            min-height: 200px;
            max-height: 350px;
        }

        @media (min-width: 768px) {
            .gallery-container {
                /* Tablet: tinggi yang lebih besar */
                min-height: 300px;
                max-height: 400px;
            }
        }

        @media (min-width: 1024px) {
            .gallery-container {
                /* Desktop: tinggi maksimal untuk laptop */
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
            /* Menunjukkan bahwa gambar bisa diklik */
        }

        /* Pastikan pagination terlihat di atas gambar */
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

        /* Gradient overlay untuk readability - dikurangi opacity */
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

        /* Custom lightbox overlay untuk menunjukkan foto bisa diklik */
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

        /* Fancybox customization */
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

        <!-- Fixed Gallery dengan ukuran responsif -->
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

                            <!-- Overlay untuk menunjukkan foto bisa diklik -->
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
                    <!-- Placeholder jika tidak ada foto -->
                    <div class="swiper-slide">
                        <div class="relative w-full h-full bg-gray-200 flex items-center justify-center">
                            <p class="text-gray-500">Tidak ada foto</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination dengan styling yang diperkuat -->
            <div class="swiper-pagination"
                style="position: absolute !important; bottom: 50px !important; z-index: 60 !important;"></div>

        </div>

        <!-- Main content dengan margin top yang sesuai -->
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
                    <p class="text-xs text-grey">Terverikasi</p>
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
                    <div class="swiper-slide !w-fit">
                        <button
                            class="tab-link rounded-full p-[8px_14px] border border-[#F1F2F6] text-sm font-semibold hover:bg-ngekos-black hover:text-white transition-all duration-300"
                            data-target-tab="#Testimonials-Tab">Siteplan</button>
                    </div>
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
                                    <p class="text-sm text-ngekos-grey">Fasilitas</p>
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
                                    <p class="text-sm text-ngekos-grey">Fasilitas</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div id="Testimonials-Tab" class="hidden flex-col gap-5 tab-content">
                    <div class="flex flex-col gap-4">
                        <div
                            class="testi-card flex flex-col rounded-[22px] border border-[#F1F2F6] p-4 gap-3 bg-white hover:border-[#d40065] transition-all duration-300">
                            @include('pages.detailkavling.' . $project->slug)
                        </div>
                    </div>
                </div>

                <div id="Rules-Tab" class="hidden flex-col gap-5 tab-content">
                    Brosur
                </div>
                <div id="Contact-Tab" class="hidden flex-col gap-5 tab-content">
                    <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/MAUanyqHEqc?si=ZG3VkLYVPMNVdYPW" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div id="Rewards-Tab" class="hidden flex-col gap-5 tab-content">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d37861.70197033057!2d109.31364600000003!3d-0.04458950000000253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sid!4v1740366145418!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </main>

        <div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
            <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
                <div
                    class="flex items-center justify-between rounded-[40px] py-4 px-6 bg-gradient-to-r from-[#a7006d] to-[#d40065]">
                    <div class="flex flex-col gap-[2px]">
                        <p id="price" class="font-bold text-sm leading-[30px] text-white">
                            <!-- price dari js -->
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
            });

            Fancybox.bind('[data-fancybox="gallery"]', {
                l10n: {
                    NEXT: "Foto Selanjutnya",
                    PREV: "Foto Sebelumnya",
                },
            });


            // Tab functionality (jika belum ada)
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
