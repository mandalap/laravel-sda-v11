@extends('layouts.app')

@section('title')
    Checkout {{ $project->nama_project }}
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush

@section('content')
    <x-navigation-route title="Pembayaran" :backRoute="route('custinfo', [$project->jenis->slug, $project->kategori->slug, $project->slug])" :showBackground="false" textColor="text-primary" />
    <div class="flex flex-col gap-5">

        <!-- Bagian 1: Produk yang dipesan -->
        <div class="flex flex-col gap-5 px-5">
            <p class="font-semibold text-sm text-custom-gray-100">Produk yang dipesan</p>
            <div
                class="flex flex-row gap-2.5 rounded-2xl border border-custom-gray-40 p-3 bg-white hover:border-primary transition-all duration-300 items-center">
                <!-- Gambar -->
                <div
                    class="w-32 sm:w-40 md:w-60 flex-shrink-0 flex items-center justify-center rounded overflow-hidden bg-custom-gray-10">
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="w-full h-full object-contain"
                        alt="{{ $project->nama_project }}">
                </div>
                <!-- Deskripsi -->
                <div class="flex flex-col gap-1 flex-1 min-h-0">
                    <!-- Nama & Alamat -->
                    <div class="flex flex-col gap-1">
                        <h3 class="text-sm font-medium text-custom-gray-100 line-clamp-2">
                            {{ $project->nama_project }}
                        </h3>
                        <p class="text-xs text-custom-gray-70 line-clamp-1">{{ $project->alamat_project }}</p>
                    </div>
                    <hr class="border-custom-gray-30 my-1">
                    <!-- Detail Lokasi -->
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/location2.png') }}"
                                class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                            <p class="text-xs text-custom-gray-70 truncate">
                                {{ $project->lokasi->regency->name }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/category.png') }}"
                                class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                            <p class="text-xs text-custom-gray-70 truncate">
                                {{ $project->kategori->kategori }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/layer.png') }}"
                                class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" alt="icon">
                            <p class="text-xs text-custom-gray-70 truncate">
                                Tersisa {{ $project->project_product->where('status', 'Tersedia')->count() }} Unit
                            </p>
                        </div>
                    </div>
                    <hr class="border-custom-gray-30 my-1">
                    <div class="flex items-center">
                        <p class="text-sm font-semibold text-primary">
                            {!! $project->getPriceDisplay([
                                'price_class' => 'text-sm font-bold text-primary',
                                'strike_class' => 'text-xs text-custom-gray-80 font-medium',
                                'strike_top' => '2px',
                            ]) !!}</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-custom-gray-40">

        <div class="flex flex-col justify-center px-5 gap-3">
            <p class="font-semibold text-sm text-custom-gray-100">Informasi Pemesanan</p>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Nama</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">{{ $nama }}</p>
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Nomor Whatsapp</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">{{ $telepon }}</p>
            </div>
            @if (isset($referralCode) && !empty($referralCode))
                <div class="flex flex-col justify-center">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Kode Referall</p>
                    <p class="font-medium text-base text-custom-gray-100 leading-none"> <span>{{ $referralCode }}</span>
                        @if (isset($agency))
                            - Agency <span>{{ $agency->nama }}</span>
                        @endif
                    </p>
                </div>
            @endif
            <div class="flex flex-col justify-center">
                <p class="text-sm text-custom-gray-80 leading-none mb-1">Nomor Properti</p>
                <p class="font-medium text-base text-custom-gray-100 leading-none">{{ $product->nama_product }}</p>
            </div>
        </div>

        <hr class="border-custom-gray-40">

        <div class="flex flex-col justify-center px-5 gap-3">
            <div class="flex flex-col justify-center">
                <p class="font-semibold text-sm text-custom-gray-100">Rincian Pembayaran</p>
            </div>
            <div class="flex flex-col justify-center px-2 gap-2">
                <div class="flex flex-row justify-between">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Harga produk</p>
                    <p class="font-medium text-sm text-custom-gray-80 leading-none">
                        Rp{{ number_format($product->harga, 0, '.', '.') }}</p>
                </div>
                <div class="flex flex-row justify-between">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Potongan harga</p>
                    <p class="font-medium text-sm text-primary leading-none">-Rp{{ number_format($discount, 0, ',', '.') }}
                    </p>
                </div>
                <hr class="border-custom-gray-40">
                <div class="flex flex-row justify-between">
                    <p class="text-sm text-custom-gray-80 leading-none mb-1">Total pembayaran produk</p>
                    <p class="font-semibold text-sm text-custom-gray-100 leading-none">
                        Rp{{ number_format($totalHarga, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>

        <div class="mx-5 p-4 rounded rounded-lg bg-danger-focus">
            <p class="text-sm text-danger-main">
                Sebelum melakukan pembookingan, kami sarankan anda untuk terlebih dahulu melakukan survei lokasi. Jika sudah
                maka lanjutkan pembookingan.
            </p>

        </div>

        <div id="payment-form" class="flex relative flex-col gap-6 pt-5 mt-5">
            <div id="BottomNav" class="relative flex w-full h-[30px] shrink-0">
                <div class="fixed bottom-5 w-full max-w-[640px] px-5 z-50">
                    <div
                        class="flex items-center justify-between rounded-full h-[61px] gap-2 px-3 py-2 bg-gradient-to-t from-secondary to-primary">
                        <!-- Tombol Bayar -->
                        <button type="submit" id="pay-button"
                            class="flex items-center justify-center shrink-0 rounded-full w-[110px] h-[45px] p-3 text-sm bg-primary-secondary font-bold text-primary hover:bg-black hover:text-white transition-all duration-300 whitespace-nowrap order-2">
                            Bayar
                        </button>
                        <!-- Info Section -->
                        <div class="flex flex-col justify-center text-right order-1 ml-auto h-[45px]">
                            <p class="font-medium text-xs text-custom-gray-10 leading-tight">
                                Biaya Booking
                                <span class="font-semibold text-base text-custom-gray-10">
                                    Rp{{ number_format($jumlahBooking, 0, '.', '.') }}
                                </span>
                            </p>
                            <p class="font-medium text-xs text-custom-gray-10 leading-tight">
                                Harga Produk
                                <span class="font-medium text-sm text-custom-gray-10">
                                    Rp{{ number_format($totalHarga, 0, ',', '.') }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('addon-script')
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
            });

            const payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', async function(e) {
                e.preventDefault();
                payButton.disabled = true;

                try {
                    const referralInput = document.getElementById('referral_code');
                    const referralCode = referralInput ? referralInput.value : null;

                    const response = await fetch('{{ route('getSnapToken') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            product: '{{ $kodeProduct }}',
                            refferal: referralCode
                        })
                    });

                    const data = await response.json();

                    // Jika terjadi konflik data (misal: produk sudah dibooking orang lain)
                    if (response.status === 409 && data.error) {
                        Toast.fire({
                            icon: 'error',
                            toast: true, // Menggunakan tampilan toast
                            position: 'top', // Menempatkan toast di atas halaman
                            width: '32rem',
                            title: data.error
                        });
                        setTimeout(() => {
                            window.location.href =
                                "{{ route('custinfo', [$project->jenis->slug, $project->kategori->slug, $project->slug]) }}";
                        }, 2000);
                        return;
                    }

                    if (!response.ok) {
                        throw new Error(data.error || 'Gagal memproses permintaan.');
                    }

                    if (data && data.snapToken) {
                        window.snap.pay(data.snapToken, {
                            onSuccess: function(result) {
                                window.location.href = "{{ route('riwayat.booking') }}";
                            },
                            onPending: function(result) {
                                window.location.href = "{{ route('riwayat.booking') }}";
                                Toast.fire({
                                    icon: 'info',
                                    position: 'top', // Menempatkan toast di atas halaman
                                    toast: true, // Menggunakan tampilan toast
                                    width: '32rem',
                                    title: 'Pembayaran pending, silahkan selesaikan pembayaran.'
                                });
                            },
                            onError: function(result) {
                                Toast.fire({
                                    icon: 'error',
                                    position: 'top', // Menempatkan toast di atas halaman
                                    toast: true, // Menggunakan tampilan toast
                                    width: '32rem',
                                    title: 'Pembayaran gagal, silakan coba lagi.'
                                });
                                window.location.reload();
                            },
                            onClose: function() {
                                payButton.disabled = false;
                                Toast.fire({
                                    icon: 'info',
                                    position: 'top', // Menempatkan toast di atas halaman
                                    toast: true, // Menggunakan tampilan toast
                                    width: '32rem',
                                    title: 'Pembayaran pending, silahkan selesaikan pembayaran.'
                                });
                            }
                        });
                    } else {
                        throw new Error('Token pembayaran tidak tersedia.');
                    }

                } catch (error) {
                    console.error('Error:', error);
                    Toast.fire({
                        icon: 'error',
                        position: 'top', // Menempatkan toast di atas halaman
                        toast: true, // Menggunakan tampilan toast
                        width: '32rem',
                        title: error.message || 'Terjadi kesalahan tidak terduga.'
                    });
                    payButton.disabled = false;
                }
            });
        </script>
    @endpush
