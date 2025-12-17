<?php

namespace App\Http\Controllers;

use App\Jobs\SendWhatsAppBookingFirst;
use App\Jobs\SendWhatsAppPaymentCancel;
use App\Jobs\SendWhatsAppPaymentMethod;
use App\Jobs\SendWhatsAppPaymentSuccess;
use App\Jobs\WhatsAppBookingDeveloperTransaction;
use App\Models\BookingTransaction;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectFasilitas;
use App\Models\ProjectPhoto;
use App\Models\Affiliate;
use App\Models\Agency;
use App\Models\Member;
use App\Models\WhatsappApiToken;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DetailsController extends Controller
{

    /**
     * Menambahkan method untuk update status product
     * Method ini memastikan status product selalu sinkron dengan booking transaction
     */
    private function updateProductStatus(Product $product, string $status)
    {
        $validStatuses = ['Tersedia', 'Pending', 'Booking', 'Terjual'];

        if (!in_array($status, $validStatuses)) {
            throw new \InvalidArgumentException("Invalid product status: {$status}");
        }

        $product->status = $status;
        $product->save();
    }

    /**
     * Method untuk validasi ketersediaan product
     * Digunakan di semua flow booking untuk konsistensi
     */
    private function validateProductAvailability(Product $product, $currentUserId = null)
    {
        // // Bersihkan booking yang sudah expired terlebih dahulu
        $this->cleanupExpiredBookings($product->id);

        // Cek apakah product sedang dalam booking aktif
        $activeBooking = BookingTransaction::where('product_id', $product->id)
            ->where(function ($query) {
                $query->where(function ($q) {
                    $q->where('status', 'booking')
                        ->where('is_paid', true);
                })
                    ->orWhere(function ($q) {
                        $q->where('status', 'pending')
                            ->where('is_paid', false);
                    });
            })
            ->first();

        // Jika ada booking aktif dan bukan milik user saat ini
        if ($activeBooking && $activeBooking->member_id != $currentUserId) {
            return [
                'available' => false,
                'message' => 'Produk ini sedang dalam proses booking oleh pengguna lain.',
                'booking' => $activeBooking
            ];
        }

        // Jika ada booking aktif dan adalah milik user saat ini
        if ($activeBooking && $activeBooking->member_id == $currentUserId) {
            // Cek apakah sudah dibayar
            if ($activeBooking->status == 'booking' && $activeBooking->is_paid) {
                return [
                    'available' => false,
                    'message' => 'Anda sudah membooking produk ini.',
                    'booking' => $activeBooking,
                    'already_owned' => true
                ];
            }
        }

        return [
            'available' => true,
            'message' => 'Product tersedia untuk dibooking',
            'booking' => $activeBooking
        ];
    }

    private function cleanupExpiredBookings($productId)
    {
        // Jika tidak ada booking aktif lagi, kembalikan status product ke Tersedia
        $hasActiveBooking = $this->hasActiveBooking($productId);

        if (!$hasActiveBooking) {
            $product = Product::find($productId);
            if ($product && $product->status !== 'Tersedia' && $product->status !== 'Terjual') {
                $this->updateProductStatus($product, 'Tersedia');
            }
        }
    }

    /**
     * Helper method untuk cek apakah product punya booking aktif
     */
    private function hasActiveBooking($productId)
    {
        return BookingTransaction::where('product_id', $productId)
            ->where(function ($query) {
                $query->where(function ($q) {
                    $q->where('status', 'booking')
                        ->where('is_paid', true);
                })
                    ->orWhere(function ($q) {
                        $q->where('status', 'pending')
                            ->where('is_paid', false);
                    });
            })
            ->exists();
    }

    //
    public function index($jenis, $kategori, $project)
    {
        try {
            $jenis = Jenis::where('slug', $jenis)->firstOrFail();
            $kategori = Kategori::where('slug', $kategori)->firstOrFail();

            $whatsappConfig = WhatsappApiToken::where('status', 'active')->first();

            $project = Project::with([
                'projectFasilitas',
                'projectPhotos',
                'projectsBrosur',
                'products'
            ])->where("slug", $project)->firstOrFail();

            // Ambil relasi yang sudah di-load
            $facilities = $project->projectFasilitas;
            $photos = $project->projectPhotos;
            $siteplan = $project->products;
            $brosurs = $project->projectsBrosur;

            return view("pages.details.index", compact('project', 'photos', 'facilities', 'brosurs', 'kategori', 'siteplan', 'whatsappConfig'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Halaman tidak ditemukan');
        }
    }
    public function contactAdmin($jenis, $kategori, $project)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            Alert::toast('Anda harus login terlebih dahulu untuk menghubungi admin', 'info')
                ->autoClose(5000)
                ->timerProgressBar();

            return redirect()
                ->route('login')
                ->with('redirect_after_login', url()->previous());
        }
        try {
            $project = Project::where('slug', $project)->firstOrFail();
            $whatsappConfig = WhatsappApiToken::where('status', 'active')->first();

            if (!$whatsappConfig || !$whatsappConfig->sender) {
                Alert::toast('Nomor WhatsApp admin tidak tersedia saat ini', 'error')
                    ->autoClose(5000)
                    ->timerProgressBar();

                return back();
            }

            // Redirect ke WhatsApp
            $message = urlencode('Halo, Saya ingin bertanya mengenai Project ' . $project->nama_project);
            return redirect()->away("https://wa.me/{$whatsappConfig->sender}?text={$message}");
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Alert::toast('Project tidak ditemukan', 'error')
                ->autoClose(5000)
                ->timerProgressBar();

            return back();
        }
    }

    public function custinfo($jenis, $kategori, $project)
    {
        $member = Auth::guard('member')->user();

        $jenis = Jenis::where('slug', $jenis)->firstOrFail();
        $kategori = Kategori::where('slug', $kategori)->firstOrFail();

        $project = Project::with(['kategori', 'jenis', 'project_product'])
            ->where("slug", $project)
            ->firstOrFail();

        $products = $project->project_product()->where('status', 'Tersedia')->get();

        $selectedProduct = null;
        if ($kategori->slug === 'rumah' && $products->count() === 1) {
            $selectedProduct = $products->first();
        }

        $products = $products->sortBy(function ($product) {
            preg_match('/([A-Za-z]+)([0-9]+)/', $product->nama_product, $matches);
            return isset($matches[1]) ? [$matches[1], (int)($matches[2] ?? 0)] : [$product->nama_product, 0];
        })->values();

        return view("pages.details.custInfo", compact('project', 'products', 'kategori', 'member', 'selectedProduct'));
    }


    /**
     * Refactoring method checkout dengan validasi yang lebih ketat
     */
    public function checkout(Request $request, $project)
    {
        try {
            $user = Auth::guard('member')->user();
            $project = Project::where("slug", $project)->firstOrFail();

            // Handle booking dari riwayat
            $bookingId = $request->input('booking_id');
            if ($bookingId) {
                return $this->handleExistingBooking($bookingId, $user, $project);
            }

            // Validasi wajib memilih produk
            if (!$request->has('product') || empty($request->input('product'))) {
                Alert::toast('Silahkan memilih properti terlebih dahulu', 'info')
                    ->autoClose(10000)->timerProgressBar();
                return redirect()->back();
            }

            // Handle referral code validation
            $agency = null;
            $referralCode = $request->input('refferal');

            if (!empty($referralCode)) {
                $referralValidation = $this->validateAndProcessReferral($referralCode, $user, $request->input('product'));

                if (!$referralValidation['valid']) {
                    Alert::toast($referralValidation['message'], 'error')
                        ->autoClose(10000)->timerProgressBar();
                    return redirect()->back()->withInput();
                }

                $agency = $referralValidation['agency'];

                // Simpan referral code ke session agar bisa diakses di createNewSnapToken
                session(['checkout_referral_code' => $referralCode]);
            } else {
                // Jika tidak ada referral code, hapus dari session
                session()->forget('checkout_referral_code');
            }

            // Ambil product
            $product = Product::where("code_product", $request->input('product'))->firstOrFail();

            // Gunakan method validateProductAvailability yang centralized
            $availability = $this->validateProductAvailability($product, $user->id);

            if (!$availability['available']) {
                Alert::toast($availability['message'], 'info')
                    ->autoClose(10000)->timerProgressBar();

                // Jika user sudah punya booking untuk product ini, redirect ke custinfo
                if (isset($availability['already_owned']) && $availability['already_owned']) {
                    return redirect()->route('custinfo', [
                        'jenis' => $project->jenis->slug,
                        'kategori' => $project->kategori->slug,
                        'project' => $project->slug
                    ]);
                }

                return redirect()->back();
            }

            // Jika ada booking sebelumnya milik user ini yang belum expired, gunakan data tersebut
            if ($availability['booking'] && $availability['booking']->member_id == $user->id) {
                $booking = $availability['booking'];

                return view("pages.details.checkout", [
                    'project' => $project,
                    'product' => $product,
                    'nama' => $user->nama,
                    'email' => $user->email,
                    'telepon' => $user->telepon,
                    'kodeProduct' => $product->code_product,
                    'jumlahBooking' => $booking->jumlah_uang_booking,
                    'discount' => $booking->diskon,
                    'totalHarga' => $booking->total_harga,
                    'snapToken' => $booking->snap_token,
                    'booking' => $booking,
                ]);
            }

            // Setup data untuk checkout baru
            $nama = $request->input('nama');
            $email = $request->input('email');
            $telepon = $request->input('telepon');
            $kodeProduct = $request->input('product');
            $jumlahBooking = $request->input('jumlah_uang_booking', 100000);

            $discount = $product->discount ?? 0;
            $totalHarga = $product->harga - $discount;

            return view("pages.details.checkout", compact(
                'project',
                'product',
                'nama',
                'email',
                'telepon',
                'kodeProduct',
                'jumlahBooking',
                'discount',
                'totalHarga',
                'agency',
                'referralCode'
            ));
        } catch (\Exception $e) {
            Log::error('Error di halaman checkout: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan: ' . $e->getMessage(), 'error')
                ->autoClose(10000)->timerProgressBar();
            return redirect()->back();
        }
    }
    /**
     * Memisahkan logika handle existing booking
     */
    private function handleExistingBooking($bookingId, $user, $project)
    {
        $bookingTransaction = BookingTransaction::with('product.project')->findOrFail($bookingId);

        if ($bookingTransaction->member_id !== $user->id) {
            abort(403, 'Unauthorized');
        }

        if ($bookingTransaction->status == 'booking' && $bookingTransaction->is_paid) {
            $this->cleanupDuplicateBookings($bookingTransaction, $user->id);

            Alert::toast('Produk ini sudah dibooking.', 'info')
                ->autoClose(10000)->timerProgressBar();
            return redirect()->route('custinfo', [
                'jenis' => $project->jenis->slug,
                'kategori' => $project->kategori->slug,
                'project' => $project->slug
            ]);
        }

        if ($bookingTransaction->status == 'cancel') {
            Alert::toast('Pembayaran telah dibatalkan, silakan lakukan pembelian lagi.', 'info')
                ->autoClose(10000)->timerProgressBar();
            return redirect()->back();
        }

        $product = $bookingTransaction->product;

        return view("pages.details.checkout", [
            'project' => $project,
            'product' => $product,
            'nama' => $user->nama,
            'email' => $user->email,
            'telepon' => $user->telepon,
            'kodeProduct' => $product->code_product,
            'jumlahBooking' => $bookingTransaction->jumlah_uang_booking,
            'discount' => $bookingTransaction->diskon,
            'totalHarga' => $bookingTransaction->total_harga,
            'snapToken' => $bookingTransaction->snap_token,
            'booking' => $bookingTransaction,
        ]);
    }

    /**
     * Memisahkan logika validasi referral
     */
    private function validateAndProcessReferral($referralCode, $user, $productCode)
    {
        $agency = Agency::whereRaw('BINARY agency_code = ?', [$referralCode])->first();

        if (!$agency) {
            return [
                'valid' => false,
                'message' => 'Kode referral tidak valid.'
            ];
        }

        $product = Product::where("code_product", $productCode)->firstOrFail();

        $existingBookingForProduct = BookingTransaction::where('product_id', $product->id)
            ->where('member_id', $user->id)
            ->whereIn('status', ['pending', 'booking'])
            ->first();

        if ($existingBookingForProduct && $referralCode) {
            $previousAgency = Agency::find($existingBookingForProduct->agency_id);

            if ($previousAgency && $previousAgency->agency_code !== $referralCode) {
                return [
                    'valid' => false,
                    'message' => 'Kode referral tidak dapat diubah saat melakukan proses booking produk ini.'
                ];
            }
        }

        $existingAffiliate = Affiliate::where('member_id', $user->id)->first();

        if (!$existingAffiliate) {
            Affiliate::create([
                'member_id' => $user->id,
                'agency_id' => $agency->id,
                'joined_at' => now(),
            ]);
        }

        return [
            'valid' => true,
            'agency' => $agency
        ];
    }

    /**
     * Helper untuk cleanup duplicate bookings
     */
    private function cleanupDuplicateBookings($mainBooking, $userId)
    {
        BookingTransaction::where('product_id', $mainBooking->product_id)
            ->where('member_id', $userId)
            ->where(function ($query) {
                $query->where('status', 'pending')
                    ->orWhere('status', 'cancel');
            })
            ->where('id', '!=', $mainBooking->id)
            ->delete();
    }

    /**
     * Refactoring getSnapToken dengan validasi yang lebih ketat
     */
    public function getSnapToken(Request $request)
    {
        try {
            $user = Auth::guard('member')->user();
            $product = Product::where("code_product", $request->input('product'))->firstOrFail();

            // Validasi ketersediaan product
            $availability = $this->validateProductAvailability($product, $user->id);

            if (!$availability['available']) {
                return response()->json([
                    'error' => $availability['message'],
                ], 409);
            }

            // Jika ada booking yang masih aktif, gunakan token yang ada
            if ($availability['booking']) {
                return response()->json([
                    'snapToken' => $availability['booking']->snap_token,
                    'booking' => $availability['booking'],
                    'product' => $product,
                ]);
            }

            // Buat snap token baru
            return $this->createNewSnapToken($user, $product);
        } catch (\Exception $e) {
            Log::error('Error di getSnapToken: ' . $e->getMessage());
            return response()->json([
                'error' => 'Terjadi kesalahan saat memproses pembayaran'
            ], 500);
        }
    }

    /**
     * createNewSnapToken dengan locking yang lebih ketat
     */
    private function createNewSnapToken($user, $product, $existingBooking = null)
    {
        return DB::transaction(function () use ($user, $product, $existingBooking) {
            try {
                // CRITICAL: Lock product untuk update
                $product = Product::where('id', $product->id)
                    ->lockForUpdate()
                    ->firstOrFail();

                // Double check ketersediaan setelah lock
                $availability = $this->validateProductAvailability($product, $user->id);

                if (!$availability['available']) {
                    throw new \Exception($availability['message']);
                }

                // Lock juga semua booking terkait product ini
                BookingTransaction::where('product_id', $product->id)
                    ->lockForUpdate()
                    ->get();

                // Tentukan agency_id
                $agencyId = $this->determineAgencyIdForBooking($user);

                // Generate invoice
                $invoice = $existingBooking ? $existingBooking->invoice : BookingTransaction::generateUniqueTrxId();

                // Hitung harga
                $discount = $product->discount ?? 0;
                $hargaTanah = $product->harga;
                $totalHarga = $hargaTanah - $discount;
                $jumlahBooking = request()->input('jumlah_uang_booking', 100000);

                // Buat atau update booking
                $booking = $existingBooking ?? new BookingTransaction();
                $booking->member_id = $user->id;
                $booking->product_id = $product->id;
                $booking->agency_id = $agencyId;
                $booking->invoice = $invoice;
                $booking->jumlah_uang_booking = $jumlahBooking;
                $booking->harga_tanah = $hargaTanah;
                $booking->diskon = $discount;
                $booking->total_harga = $totalHarga;
                $booking->is_paid = false;
                $booking->status = 'pending';

                // Set expiry time
                $expiryTime = request()->input('payment_method')
                    ? $this->getExpiryTime(request()->input('payment_method'))
                    : 1440; // 24 jam default

                // Configure Midtrans
                \Midtrans\Config::$serverKey = config('midtrans.serverKey');
                \Midtrans\Config::$isProduction = config('midtrans.isProduction');
                \Midtrans\Config::$isSanitized = true;
                \Midtrans\Config::$is3ds = true;

                // Prepare Midtrans params
                $params = [
                    'transaction_details' => [
                        'order_id' => $booking->invoice,
                        'gross_amount' => $booking->jumlah_uang_booking,
                    ],
                    'customer_details' => [
                        'first_name' => $user->nama,
                        'phone' => $user->telepon,
                        'email' => $user->email,
                    ],
                    'item_details' => [
                        [
                            'id' => $product->code_product,
                            'price' => $booking->jumlah_uang_booking,
                            'quantity' => 1,
                            'name' => $product->nama_product,
                        ]
                    ],
                ];

                // Generate snap token
                $snapToken = \Midtrans\Snap::getSnapToken($params);

                $booking->snap_token = $snapToken;
                $booking->snap_token_created_at = now();
                $booking->snap_token_expiry = now()->addMinutes($expiryTime);
                $booking->save();

                // Update status product ke Pending
                $this->updateProductStatus($product, 'Pending');

                // Dispatch notification job
                SendWhatsAppBookingFirst::dispatch($booking);
                WhatsAppBookingDeveloperTransaction::dispatch($booking);

                return response()->json([
                    'snapToken' => $snapToken,
                    'booking' => $booking,
                    'product' => $product,
                ]);
            } catch (\Exception $e) {
                Log::error('Gagal membuat snapToken: ' . $e->getMessage());
                throw $e;
            }
        }, 3); // 3 attempts untuk handle deadlock
    }

    /**
     * Helper method untuk menentukan agency_id
     */
    private function determineAgencyIdForBooking($user)
    {
        // Ambil referral code dari session yang sudah disimpan saat checkout
        $referralCode = session('checkout_referral_code');

        // Jika ada referral code saat checkout
        if (!empty($referralCode)) {
            $agency = Agency::where('agency_code', $referralCode)->first();
            if ($agency) {
                // PERBAIKAN: Hapus session setelah digunakan agar tidak mengganggu transaksi berikutnya
                session()->forget('checkout_referral_code');
                return $agency->id;
            }
        }

        // Jika tidak ada referral code saat checkout, return null
        return null;
    }

    /**
     * Helper method untuk mendapatkan expiry time berdasarkan payment method
     */
    private function getExpiryTime($paymentMethod)
    {
        // Implementasi sesuai dengan metode pembayaran
        // Contoh: bank transfer 1440 menit (24 jam), e-wallet 15 menit, dll
        $expiryTimes = [
            'bank_transfer' => 1440, // 24 jam
            'gopay' => 15,
            'qris' => 30,
            'credit_card' => 60,
        ];

        return $expiryTimes[$paymentMethod] ?? 1440;
    }

    // Fungsi callback yang menerima notifikasi dari Midtrans
    public function callback(Request $request)
    {
        try {
            Log::info('Midtrans Callback Received', $request->all());

            // Verifikasi signature untuk keamanan
            $serverKey = config('midtrans.serverKey');
            $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

            if ($hashed == $request->signature_key) {
                // Cari booking transaksi berdasarkan order_id (invoice)
                $booking = BookingTransaction::where('invoice', $request->order_id)->first();

                if (!$booking) {
                    Log::error('Booking tidak ditemukan untuk order_id: ' . $request->order_id);
                    return response()->json(['message' => 'Booking Tidak Ditemukan'], 404);
                }

                // Konversi expiry_time dari Midtrans (GMT+7) ke UTC
                $expiryTime = null;
                if ($request->has('expiry_time') && !empty($request->expiry_time)) {
                    try {
                        // Asumsikan expiry_time dari Midtrans dalam format GMT+7
                        $expiryTimeLocal = \Carbon\Carbon::parse($request->expiry_time, 'Asia/Jakarta');

                        // Konversi ke UTC untuk disimpan di database
                        $expiryTime = $expiryTimeLocal->setTimezone('UTC');
                    } catch (\Exception $e) {
                        Log::error('Error parsing expiry_time: ' . $e->getMessage());
                    }
                }

                // Simpan payment_method sebelumnya untuk mendeteksi perubahan
                $previousPaymentMethod = $booking->payment_method;

                // Update waktu kadaluarsa snap_token sesuai dengan expiry_time dari Midtrans
                $updateData = [
                    'status' => 'pending',
                    'payment_method' => $request->payment_type,
                ];

                // Hanya tambahkan snap_token_expiry jika expiry_time valid
                if ($expiryTime) {
                    $updateData['snap_token_expiry'] = $expiryTime;
                }

                $booking->update($updateData);

                // Tentukan status transaksi
                $transactionStatus = $request->transaction_status;

                // Kirim notifikasi WhatsApp ketika metode pembayaran pertama kali dipilih
                // Kondisi: status pending, memiliki payment_type, dan sebelumnya tidak ada payment_method
                if (
                    $request->payment_type &&
                    $transactionStatus === 'pending' &&
                    (empty($previousPaymentMethod) || $previousPaymentMethod != $request->payment_type)
                ) {

                    SendWhatsAppPaymentMethod::dispatch($booking);
                }

                // Update status transaksi berdasarkan status pembayaran
                switch ($transactionStatus) {
                    case 'settlement':
                    case 'capture':
                        // Pembayaran berhasil dan diterima
                        $booking->update([
                            'status' => 'booking',
                            'is_paid' => true,
                            'tanggal_bayar' => now(),
                        ]);
                        // Update status produk menjadi "Booking"
                        if ($booking->product) {
                            $booking->product->update(['status' => 'Booking']);
                        }
                        SendWhatsAppPaymentSuccess::dispatch($booking);
                        break;
                    case 'pending':
                        // Pembayaran masih pending
                        Log::info('Status tetap Pending', ['booking_id' => $booking->id]);
                        break;
                    case 'deny':
                    case 'expire':
                    case 'failure':
                    case 'cancel':
                        // Pembayaran gagal atau dibatalkan
                        $booking->update(['status' => 'cancel']);
                        $booking->product->update(['status' => 'Tersedia']);
                        SendWhatsAppPaymentCancel::dispatch($booking);
                        break;
                }

                return response()->json(['status' => 'success']);
            }

            // Jika signature tidak valid
            return response()->json(['status' => 'error', 'message' => 'Invalid signature']);
        } catch (\Exception $e) {
            Log::error('Error Midtrans Callback: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
