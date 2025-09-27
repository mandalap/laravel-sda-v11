@extends('layouts.app')

@section('title')
    Dashboard Agency - Sajada Kavling
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
    <div id="Background"
        class="absolute top-0 w-full h-[230px] rounded-b-[75px] bg-gradient-to-r from-[#a7006d] to-[#d40065]">
    </div>

    <!-- Top Nav Agency -->
    <x-top-nav-agency title="Dashboard" back-route="profil" />

    <!-- Welcome Section -->
    <div class="relative z-10 mt-5 mb-7 px-5">
        <div class="flex flex-col text-center w-fit mx-auto gap-2">
            <h1 class="font-bold text-2xl leading-[32px] text-white">Selamat Datang, Agent!</h1>
            <p class="text-sm leading-[21px] text-white/90">Kelola bisnis kavling Anda dengan mudah</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="relative z-10 px-4 -mt-2">
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="stats-card bg-white p-4 rounded-xl shadow-lg">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Total Komisi</p>
                        <p class="font-bold text-lg text-gray-800">Rp {{ number_format($total_komisi) }}</p>
                    </div>
                </div>
            </div>

            <div class="stats-card bg-white p-4 rounded-xl shadow-lg">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Total Member</p>
                        <p class="font-bold text-lg text-gray-800">{{ $totalMember }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Features -->
    <section class="relative z-10 px-4 mb-6">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-5 border-b border-gray-100">
                <h3 class="font-semibold text-base text-gray-800">Menu Utama</h3>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('affiliate.booking.index') }}" class="feature-item">
                        <div
                            class="flex flex-col gap-3 items-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg">
                            <div class="w-14 h-14 bg-orange-600 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <p class="font-medium text-sm text-gray-700 text-center">Booking Properti</p>
                        </div>
                    </a>

                    <a href="{{ route('affiliate.affiliasi.index') }}" class="feature-item">
                        <div
                            class="flex flex-col gap-3 items-center p-4 bg-gradient-to-br from-teal-50 to-teal-100 rounded-lg">
                            <div class="w-14 h-14 bg-teal-600 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <p class="font-medium text-sm text-gray-700 text-center">Member Saya</p>
                        </div>
                    </a>

                    <a href="{{ route('affiliate.profile.riwayatBooking') }}" class="feature-item">
                        <div
                            class="flex flex-col gap-3 items-center p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-lg">
                            <div class="w-14 h-14 bg-indigo-600 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                            <p class="font-medium text-sm text-gray-700 text-center">Riwayat Booking</p>
                        </div>
                    </a>

                    <a href="{{ route('affiliate.transaction.index') }}" class="feature-item">
                        <div
                            class="flex flex-col gap-3 items-center p-4 bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg">
                            <div class="w-14 h-14 bg-pink-600 rounded-full flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <p class="font-medium text-sm text-gray-700 text-center">Riwayat Fee</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Activity -->
    <section class="relative z-10 px-4 mb-6">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-5 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-base text-gray-800">Aktivitas Terbaru</h3>
                    {{-- <a href="" class="text-sm text-blue-600 font-medium">Lihat Semua</a> --}}
                </div>
            </div>
            <div class="p-4">
                @foreach ($recentActivities as $activity)
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-800 font-medium">{{ $activity->formatted_description }}</p>
                            <p class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
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
