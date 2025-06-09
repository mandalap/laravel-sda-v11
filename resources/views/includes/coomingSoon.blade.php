<div class="relative h-screen overflow-hidden">
    <!-- Background -->
    <div id="Background"
        class="absolute top-0 w-full h-[200px] rounded-bl-[75px] rounded-br-[75px] bg-gradient-to-t from-[#a7006d] to-[#d40065] z-0">
    </div>

    <!-- Konten Full Screen -->
    <div class="relative z-10 flex flex-col h-full">
        <!-- Top Nav -->
        <x-top-nav-agency title="Transaksi" back-route="affiliate.dashboard" />

        <!-- Coming Soon Section -->
        <div class="flex-1 flex flex-col items-center justify-center text-center px-5">
            <img src="{{ asset('assets/images/icons/coming-soon.svg') }}" alt="Coming Soon" class="w-32 h-32">
            <p class="text-3xl font-bold text-gray mb-4">Fitur Ini Sedang Dalam Pengembangan!</p>
            <p class="text-lg text-gray mb-6">Kami sedang bekerja keras untuk menghadirkan fitur terbaru yang akan
                membuat
                pengalaman Anda lebih baik.</p>
            <p class="text-md text-gray mb-8">Tunggu sebentar, kami akan segera meluncurkannya!</p>
        </div>

        <!-- Bottom Navigation -->
        @include('includes.footerAgency')
    </div>
</div>
