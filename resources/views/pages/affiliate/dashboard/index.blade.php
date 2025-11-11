@extends('layouts.app')

@section('title')
    Affiliate - Dashboard
@endsection

@push('prepend-style')
    <style>
        .gradient-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .stats-card {
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-item {
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')
    <x-navigation-route title="Dashboard" :backRoute="route('profil')" textColor="text-custom-gray-10" :showBackground="true"
        :showAgencyProfile="true" :agencyData="auth()->user()" />

    <!-- Welcome Section -->
    <div class="relative z-10">
        <div class="flex flex-col w-fit px-5">
            <h1 class="font-semibold text-xl text-custom-gray-10">Selamat datang, agen!</h1>
            <p class="text-sm leading-[21px] text-custom-gray-10">Kelola bisnis kavling Anda dengan mudah</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="relative z-10 px-5 mt-3">
        <div class="grid grid-cols-2 gap-2 mb-6">
            <div class="stats-card bg-custom-gray-10 p-2 rounded-2xl shadow-lg">
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-green-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none" class="w-6 h-6" alt="icon">
                            <path d="M8 4.5V5.5" stroke="#21725E" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 10.5V11.5" stroke="#21725E" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z"
                                stroke="#21725E" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M6.5 10.5H8.75C9.08152 10.5 9.39946 10.3683 9.63388 10.1339C9.8683 9.89946 10 9.58152 10 9.25C10 8.91848 9.8683 8.60054 9.63388 8.36612C9.39946 8.1317 9.08152 8 8.75 8H7.25C6.91848 8 6.60054 7.8683 6.36612 7.63388C6.1317 7.39946 6 7.08152 6 6.75C6 6.41848 6.1317 6.10054 6.36612 5.86612C6.60054 5.6317 6.91848 5.5 7.25 5.5H9.5"
                                stroke="#21725E" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm text-custom-gray-90 mb-1">Total Komisi</p>
                        <p class="font-semibold text-base sm:text-sm text-custom-gray-90 break-words">
                            Rp{{ number_format($total_komisi, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="stats-card bg-custom-gray-10 p-2 rounded-2xl shadow-lg">
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-info-focus rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <rect width="20" height="20" />
                            <path
                                d="M14.1673 17.5V15.8333C14.1673 14.9493 13.8161 14.1014 13.191 13.4763C12.5659 12.8512 11.718 12.5 10.834 12.5H4.16732C3.28326 12.5 2.43542 12.8512 1.8103 13.4763C1.18517 14.1014 0.833984 14.9493 0.833984 15.8333V17.5"
                                stroke="#0023DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.49935 9.16667C9.3403 9.16667 10.8327 7.67428 10.8327 5.83333C10.8327 3.99238 9.3403 2.5 7.49935 2.5C5.6584 2.5 4.16602 3.99238 4.16602 5.83333C4.16602 7.67428 5.6584 9.16667 7.49935 9.16667Z"
                                stroke="#0023DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M19.166 17.5V15.8333C19.1655 15.0948 18.9196 14.3773 18.4672 13.7936C18.0147 13.2099 17.3811 12.793 16.666 12.6083"
                                stroke="#0023DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.334 2.60834C14.051 2.79192 14.6865 3.20892 15.1404 3.7936C15.5942 4.37827 15.8405 5.09736 15.8405 5.8375C15.8405 6.57765 15.5942 7.29674 15.1404 7.88141C14.6865 8.46609 14.051 8.88309 13.334 9.06667"
                                stroke="#0023DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm text-custom-gray-90 mb-1">Total Member</p>
                        <p class="font-semibold text-base sm:text-sm text-custom-gray-90 break-words">
                            {{ $totalMember }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Features -->
    <section class="px-5 mb-6 flex flex-col gap-3">
        <h3 class="font-semibold text-base text-custom-gray-100">Menu Utama</h3>
        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('affiliate.booking.index') }}" class="feature-item">
                <div class="flex flex-col gap-2 items-center p-2 rounded-xl border border-custom-gray-40">
                    <div class="w-9 h-9 bg-orange-main rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M1.5 20.25H22.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M13.5 20.25V3.75C13.5 3.55109 13.421 3.36032 13.2803 3.21967C13.1397 3.07902 12.9489 3 12.75 3H3.75C3.55109 3 3.36032 3.07902 3.21967 3.21967C3.07902 3.36032 3 3.55109 3 3.75V20.25"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M21 20.25V9.75C21 9.55109 20.921 9.36032 20.7803 9.21967C20.6397 9.07902 20.4489 9 20.25 9H13.5"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6 6.75H9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.5 12.75H10.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 16.5H9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16.5 16.5H18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16.5 12.75H18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="font-medium text-sm text-custom-gray-90 text-center">Booking Properti</p>
                </div>
            </a>

            <a href="{{ route('affiliate.affiliasi.index') }}" class="feature-item">
                <div class="flex flex-col gap-2 items-center p-2 rounded-xl border border-custom-gray-40">
                    <div class="w-9 h-9 bg-success-main rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <rect width="20" height="20" />
                            <path
                                d="M14.1673 17.5V15.8333C14.1673 14.9493 13.8161 14.1014 13.191 13.4763C12.5659 12.8512 11.718 12.5 10.834 12.5H4.16732C3.28326 12.5 2.43542 12.8512 1.8103 13.4763C1.18517 14.1014 0.833984 14.9493 0.833984 15.8333V17.5"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.49935 9.16667C9.3403 9.16667 10.8327 7.67428 10.8327 5.83333C10.8327 3.99238 9.3403 2.5 7.49935 2.5C5.6584 2.5 4.16602 3.99238 4.16602 5.83333C4.16602 7.67428 5.6584 9.16667 7.49935 9.16667Z"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M19.166 17.5V15.8333C19.1655 15.0948 18.9196 14.3773 18.4672 13.7936C18.0147 13.2099 17.3811 12.793 16.666 12.6083"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.334 2.60834C14.051 2.79192 14.6865 3.20892 15.1404 3.7936C15.5942 4.37827 15.8405 5.09736 15.8405 5.8375C15.8405 6.57765 15.5942 7.29674 15.1404 7.88141C14.6865 8.46609 14.051 8.88309 13.334 9.06667"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="font-medium text-sm text-custom-gray-90 text-center">Member Saya</p>
                </div>
            </a>

            <a href="{{ route('affiliate.profile.riwayatBooking') }}" class="feature-item">
                <div class="flex flex-col gap-2 items-center p-2 rounded-xl border border-custom-gray-40">
                    <div class="w-9 h-9 bg-[#4F46E5] rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect width="24" height="24" />
                            <path d="M12 7.5V12" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.9 14.25L12 12" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6.73145 9.34686H2.98145V5.59686" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M6.16895 17.8313C7.32246 18.9857 8.79246 19.7721 10.393 20.091C11.9935 20.4099 13.6527 20.2469 15.1605 19.6227C16.6684 18.9984 17.9573 17.941 18.8641 16.5842C19.7709 15.2273 20.255 13.632 20.255 12C20.255 10.368 19.7709 8.7727 18.8641 7.41585C17.9573 6.059 16.6684 5.00158 15.1605 4.37735C13.6527 3.75313 11.9935 3.59014 10.393 3.90902C8.79246 4.22789 7.32246 5.0143 6.16895 6.16875L2.98145 9.34688"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="font-medium text-sm text-custom-gray-90 text-center">Riwayat Booking</p>
                </div>
            </a>

            <a href="{{ route('affiliate.transaction.index') }}" class="feature-item">
                <div class="flex flex-col gap-2 items-center p-2 rounded-xl border border-custom-gray-40">
                    <div class="w-9 h-9 bg-[#DB2777] rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                            fill="none">
                            <rect width="24" height="24" transform="translate(0.75 -0.000305176)" />
                            <path d="M12.75 6.74969V8.24969" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12.75 15.7497V17.2497" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12.75 20.9997C17.7206 20.9997 21.75 16.9703 21.75 11.9997C21.75 7.02913 17.7206 2.99969 12.75 2.99969C7.77944 2.99969 3.75 7.02913 3.75 11.9997C3.75 16.9703 7.77944 20.9997 12.75 20.9997Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.5 15.7497H13.875C14.3723 15.7497 14.8492 15.5522 15.2008 15.2005C15.5525 14.8489 15.75 14.372 15.75 13.8747C15.75 13.3774 15.5525 12.9005 15.2008 12.5489C14.8492 12.1972 14.3723 11.9997 13.875 11.9997H11.625C11.1277 11.9997 10.6508 11.8022 10.2992 11.4505C9.94754 11.0989 9.75 10.622 9.75 10.1247C9.75 9.62741 9.94754 9.1505 10.2992 8.79887C10.6508 8.44724 11.1277 8.24969 11.625 8.24969H15"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <p class="font-medium text-sm text-custom-gray-90 text-center">Riwayat Fee</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Recent Activity -->
    <section class="px-5 flex flex-col gap-3">
        <h3 class="font-semibold text-base text-custom-gray-100">Aktivitas Terbaru</h3>
        @foreach ($recentActivities as $activity)
            <div class="flex items-start gap-2">
                <div class="w-7 h-7 rounded-full flex items-center justify-center flex-shrink-0 {{ $activity->bg_class }}">
                    @if ($activity->icon_type == 'booking')
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none">
                            <path d="M1.5 20.25H22.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M13.5 20.25V3.75C13.5 3.55109 13.421 3.36032 13.2803 3.21967C13.1397 3.07902 12.9489 3 12.75 3H3.75C3.55109 3 3.36032 3.07902 3.21967 3.21967C3.07902 3.36032 3 3.55109 3 3.75V20.25"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M21 20.25V9.75C21 9.55109 20.921 9.36032 20.7803 9.21967C20.6397 9.07902 20.4489 9 20.25 9H13.5"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6 6.75H9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.5 12.75H10.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 16.5H9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16.5 16.5H18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16.5 12.75H18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    @elseif($activity->icon_type == 'affiliate')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
                            fill="none">
                            <rect width="16" height="16" />
                            <path
                                d="M14.1673 17.5V15.8333C14.1673 14.9493 13.8161 14.1014 13.191 13.4763C12.5659 12.8512 11.718 12.5 10.834 12.5H4.16732C3.28326 12.5 2.43542 12.8512 1.8103 13.4763C1.18517 14.1014 0.833984 14.9493 0.833984 15.8333V17.5"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.49935 9.16667C9.3403 9.16667 10.8327 7.67428 10.8327 5.83333C10.8327 3.99238 9.3403 2.5 7.49935 2.5C5.6584 2.5 4.16602 3.99238 4.16602 5.83333C4.16602 7.67428 5.6584 9.16667 7.49935 9.16667Z"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M19.166 17.5V15.8333C19.1655 15.0948 18.9196 14.3773 18.4672 13.7936C18.0147 13.2099 17.3811 12.793 16.666 12.6083"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.334 2.60834C14.051 2.79192 14.6865 3.20892 15.1404 3.7936C15.5942 4.37827 15.8405 5.09736 15.8405 5.8375C15.8405 6.57765 15.5942 7.29674 15.1404 7.88141C14.6865 8.46609 14.051 8.88309 13.334 9.06667"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    @endif
                </div>
                <div class="flex-1">
                    <p class="text-xs text-custom-gray-90 font-medium">{{ $activity->formatted_description }}</p>
                    <p class="text-xs text-custom-gray-80">{{ $activity->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach
    </section>

    @include('includes.footerAgency')
@endsection

@push('addon-script')
    <script>
        // Add smooth animations and interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('.feature-item');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>

    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }

        /* @keyframes ripple-animation {
                                                                                                                                                                                                            to {
                                                                                                                                                                                                                transform: scale(4);
                                                                                                                                                                                                                opacity: 0;
                                                                                                                                                                                                            }
                                                                                                                                                                                                        } */
    </style>
@endpush
