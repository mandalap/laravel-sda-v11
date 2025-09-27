<?php

namespace App\Http\Controllers;

use App\Jobs\SendWhatsAppBookingFirst;
use App\Jobs\SendWhatsAppPaymentCancel;
use App\Jobs\SendWhatsAppPaymentMethod;
use App\Jobs\SendWhatsAppPaymentSuccess;
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
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DetailsController extends Controller
{
    //
    public function index($jenis, $kategori, $project)
    {
        $jenis = Jenis::where('slug', $jenis)->firstOrFail();
        $kategori = Kategori::where('slug', $kategori)->firstOrFail();

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

        return view("pages.details.index", compact('project', 'photos', 'facilities', 'brosurs', 'kategori', 'siteplan'));
    }

    public function custinfo($jenis, $kategori, $project)
    {
        $member = Auth::guard('member')->user();

        // Menggunakan eager loading untuk memuat relasi
        $jenis = Jenis::where('slug', $jenis)->firstOrFail();
        $kategori = Kategori::where('slug', $kategori)->firstOrFail();

        // Ambil project dengan eager loading untuk memuat relasi kategori dan jenis
        $project = Project::with(['kategori', 'jenis', 'project_product']) // Menggunakan eager loading untuk kategori, jenis dan produk terkait
            ->where("slug", $project)
            ->firstOrFail();

        // Ambil produk terkait untuk project yang dipilih dengan status 'Tersedia'
        $products = $project->project_product()->where('status', 'Tersedia')->get();

        // Validasi jika kategori adalah 'rumah' atau hanya ada satu produk
        $selectedProduct = null;
        if ($kategori->slug === 'rumah' && $products->count() === 1) {
            $selectedProduct = $products->first();  // Pilih produk pertama jika kategori rumah atau hanya ada satu produk
        }

        // Mengurutkan produk berdasarkan nama (huruf dan angka)
        $products = $products->sortBy(function ($product) {
            preg_match('/([A-Za-z]+)([0-9]+)/', $product->nama_product, $matches);
            return isset($matches[1]) ? [$matches[1], (int)($matches[2] ?? 0)] : [$product->nama_product, 0];
        })->values();

        // Mengirimkan data ke view
        return view("pages.details.custInfo", compact('project', 'products', 'kategori', 'member', 'selectedProduct'));
    }


    public function checkout(Request $request, $project)
    {
        try {
            $user = Auth::guard('member')->user();
            $project = Project::where("slug", $project)->firstOrFail();

            // Cek apakah request berasal dari riwayat booking
            $bookingId = $request->input('booking_id');
            if ($bookingId) {
                // Ambil data booking berdasarkan ID
                $bookingTransaction = BookingTransaction::with('product.project')->findOrFail($bookingId);

                // Pastikan booking milik user yang sedang login
                if ($bookingTransaction->member_id !== $user->id) {
                    abort(403, 'Unauthorized');
                }

                // Validasi untuk transaksi yang sudah dibayar
                if ($bookingTransaction->status == 'booking' && $bookingTransaction->is_paid) {
                    // Cari transaksi lain untuk produk yang sama dengan status pending atau cancel
                    $duplicateBookings = BookingTransaction::where('product_id', $bookingTransaction->product_id)
                        ->where('member_id', $user->id)
                        ->where(function ($query) {
                            $query->where('status', 'pending')
                                ->orWhere('status', 'cancel');
                        })
                        ->where('id', '!=', $bookingTransaction->id)
                        ->get();

                    // Hapus transaksi duplikat
                    if ($duplicateBookings->isNotEmpty()) {
                        foreach ($duplicateBookings as $duplicateBooking) {
                            $duplicateBooking->delete();
                        }
                    }

                    Alert::toast('Produk ini sudah dibooking.', 'info')->autoClose(10000)->timerProgressBar();
                    return redirect()->route('custinfo', [
                        'jenis' => $project->jenis->slug,
                        'kategori' => $project->kategori->slug,
                        'project' => $project->slug
                    ]);
                }

                if ($bookingTransaction->status == 'cancel') {
                    Alert::toast('Pembayaran telah dibatalkan, silakan lakukan pembelian lagi.', 'info')->autoClose(10000)->timerProgressBar();
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
                    'snapToken' => $bookingTransaction->snap_token,
                    'booking' => $bookingTransaction,
                    // 'refferalCode' => $referralCode
                ]);
            }

            // Validasi wajib memilih produk
            if (!$request->has('product') || empty($request->input('product'))) {
                Alert::toast('Silahkan memilih properti terlebih dahulu', 'info')->autoClose(10000)->timerProgressBar();
                return redirect()->back();
            }

            // Validasi kode referral jika diisi
            $agency = null;
            $referralCode = $request->input('refferal');

            if (!empty($referralCode)) {
                $agency = Agency::whereRaw('BINARY agency_code = ?', [$referralCode])->first();
                // dd($agency, $referralCode);

                if (!$agency) {
                    Alert::toast('Kode referral tidak valid.', 'error')->autoClose(10000)->timerProgressBar();
                    return redirect()->back()->withInput();
                }

                $product = Product::where("code_product", $request->input('product'))->firstOrFail();

                // Validasi kode referral tidak boleh berubah setelah booking
                $referralCode = $request->input('refferal');

                $existingBookingForProduct = BookingTransaction::where('product_id', $product->id)
                    ->where('member_id', $user->id)
                    ->whereIn('status', ['pending', 'booking'])
                    ->first();

                // dd($existingBookingForProduct, $referralCode);

                if ($existingBookingForProduct && $referralCode) {
                    // Cek apakah referral sebelumnya di booking sama
                    $previousAgency = Agency::find($existingBookingForProduct->agency_id);

                    if ($previousAgency && $previousAgency->agency_code !== $referralCode) {
                        Alert::toast('Kode referral tidak dapat diubah saat melakukan proses booking produk ini.', 'error')
                            ->autoClose(10000)
                            ->timerProgressBar();
                        return redirect()->back()->withInput();
                    }
                }


                // Cek apakah member sudah terdaftar sebagai affiliate dari agency lain
                $existingAffiliate = Affiliate::where('member_id', $user->id)->first();

                if (!$existingAffiliate) {
                    // Jika belum terdaftar sebagai affiliate, tambahkan ke tabel affiliate
                    Affiliate::create([
                        'member_id' => $user->id,
                        'agency_id' => $agency->id,
                        'joined_at' => now(),
                    ]);
                }
                // Jika sudah terdaftar sebagai affiliate dari agency lain, tetap lanjutkan proses
            }

            // Jika bukan dari riwayat booking, lanjutkan dengan logika checkout baru
            $product = Product::where("code_product", $request->input('product'))->firstOrFail();

            // Cek apakah sudah ada transaksi lunas untuk produk ini
            $existingPaidBooking = BookingTransaction::where('product_id', $product->id)
                ->where('member_id', $user->id)
                ->where('status', 'booking')
                ->where('is_paid', true)
                ->first();

            if ($existingPaidBooking) {
                // Hapus transaksi pending atau cancel untuk produk yang sama
                BookingTransaction::where('product_id', $product->id)
                    ->where('member_id', $user->id)
                    ->where(function ($query) {
                        $query->where('status', 'pending')
                            ->orWhere('status', 'cancel');
                    })
                    ->where('id', '!=', $existingPaidBooking->id)
                    ->delete(); // Atau soft delete

                Alert::toast('Produk ini sudah dibooking.', 'info')->autoClose(10000)->timerProgressBar();
                return redirect()->route('custinfo', [
                    'jenis' => $project->jenis->slug,
                    'kategori' => $project->kategori->slug,
                    'project' => $project->slug
                ]);
            }

            // Cek apakah produk sedang dalam booking aktif oleh user lain
            $existingBooking = BookingTransaction::where('product_id', $product->id)
                ->where(function ($query) {
                    $query->where(function ($q) {
                        $q->where('status', 'pending');
                    })->orWhere(function ($q) {
                        $q->where('status', 'booking')
                            ->where('is_paid', true);
                    })->orWhere(function ($q) {
                        $q->where('status', 'pending')
                            ->where('is_paid', false)
                            ->where('snap_token_expiry', '>', now());
                    });
                })
                ->first();

            if ($existingBooking && $existingBooking->member_id !== $user->id) {
                Alert::toast('Produk ini sedang dalam proses booking oleh pengguna lain.', 'info')->autoClose(10000)->timerProgressBar();
                return redirect()->back();
            }

            $nama = $request->input('nama');
            $email = $request->input('email');
            $telepon = $request->input('telepon');
            $kodeProduct = $request->input('product');
            $jumlahBooking = $request->input('jumlah_uang_booking', 100000);

            return view("pages.details.checkout", compact(
                'project',
                'product',
                'nama',
                'email',
                'telepon',
                'kodeProduct',
                'jumlahBooking',
                'agency',
                'referralCode'
            ));
        } catch (\Exception $e) {
            Log::error('Error di halaman checkout: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan: ' . $e->getMessage(), 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->back();
        }
    }

    public function getSnapToken(Request $request)
    {
        try {
            $user = Auth::guard('member')->user();
            $product = Product::where("code_product", $request->input('product'))->firstOrFail();

            // Cek apakah user ini sudah menyelesaikan pembayaran
            $alreadyBooked = BookingTransaction::where('product_id', $product->id)
                ->where('member_id', $user->id)
                ->where('status', 'booking')
                ->where('is_paid', true)
                ->first();

            if ($alreadyBooked) {
                return response()->json([
                    'error' => 'Produk ini sudah dibooking.',
                ], 409);
            }

            // Cek apakah ada booking aktif untuk produk ini
            $existingBooking = BookingTransaction::where('product_id', $product->id)
                ->where('member_id', $user->id)
                ->where('is_paid', false)
                ->where('snap_token_expiry', '>', now()) // Booking masih berlaku
                ->whereIn('status', ['pending', 'booking'])
                ->orderBy('snap_token_expiry', 'desc')
                ->first();

            // Jika masih ada transaksi dengan status pending atau booking, gunakan token lama
            if ($existingBooking) {
                return response()->json([
                    'snapToken' => $existingBooking->snap_token,
                    'booking' => $existingBooking,
                    'product' => $product,
                ]);
            }

            // Jika transaksi sebelumnya sudah expired atau cancel, buat transaksi baru TANPA menghapus yang lama
            return $this->createNewSnapToken($user, $product);
        } catch (\Exception $e) {
            Log::error('Error di halaman bayar: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan saat memproses pembayaran'], 500);
        }
    }


    private function createNewSnapToken($user, $product, $existingBooking = null)
    {
        DB::beginTransaction();
        try {
            // Cek apakah user ini sudah pernah beli (booking & paid)
            $alreadyBookedBySelf = BookingTransaction::where('product_id', $product->id)
                ->where('member_id', $user->id)
                ->where('status', 'booking')
                ->where('is_paid', true)
                ->first();

            if ($alreadyBookedBySelf) {
                Alert::toast('Anda sudah menyelesaikan pembayaran untuk produk ini.', 'info')->autoClose(10000)->timerProgressBar();
                return redirect()->route('custinfo', [
                    'jenis' => $product->project->jenis->slug,
                    'kategori' => $product->project->kategori->slug,
                    'project' => $product->project->slug,
                ]);
            }

            // LOCKING: Kunci record produk saat proses berlangsung
            $product = Product::where('id', $product->id)->lockForUpdate()->first();

            // Cek apakah produk sedang di-booking user lain
            $conflictingBooking = BookingTransaction::where('product_id', $product->id)
                ->where('member_id', '!=', $user->id)
                ->where(function ($query) {
                    $query->where(function ($q) {
                        $q->where('status', 'pending')
                            ->where('is_paid', false)
                            ->where('snap_token_expiry', '>', now());
                    })->orWhere(function ($q) {
                        $q->where('status', 'booking')
                            ->where('is_paid', true);
                    });
                })
                ->lockForUpdate() // Kunci juga booking terkait
                ->first();

            if ($conflictingBooking) {
                DB::rollBack();
                return response()->json([
                    'error' => 'Produk ini sedang dalam proses booking oleh pengguna lain.'
                ], 409);
            }

            // Tentukan agency_id berdasarkan logika referral
            $agencyId = $this->determineAgencyIdForBooking($user);

            // Jika sudah ada transaksi yang belum dibayar, gunakan invoice lama
            $invoice = $existingBooking ? $existingBooking->invoice : BookingTransaction::generateUniqueTrxId();

            // Jika transaksi belum ada, buat transaksi baru
            $booking = $existingBooking ?? new BookingTransaction();
            $booking->member_id = $user->id;
            $booking->product_id = $product->id;
            $booking->agency_id = $agencyId;
            $booking->invoice = $invoice;
            $booking->jumlah_uang_booking = request()->input('jumlah_uang_booking', 100000);
            $booking->harga_tanah = $product->harga;
            $booking->total_harga = $product->harga;
            $booking->is_paid = false;
            $booking->status = 'pending';

            log::info('Creating new booking transaction', [
                'member_id' => $user->id,
                'product_id' => $product->id,
                'invoice' => $booking->invoice,
                'jumlah_uang_booking' => $booking->jumlah_uang_booking,
                'agency_id' => $booking->agency_id,
            ]);

            // Set Kadaluarsa 24 jam jika belum memilih metode pembayaran
            $expiryTime = request()->input('payment_method') ? $this->getExpiryTime(request()->input('payment_method')) : 1440; // 24 jam default

            // Set Midtrans Config
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            \Midtrans\Config::$isProduction = config('midtrans.isProduction');
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;

            // Persiapkan data untuk Midtrans
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

            // Simpan snap_token, waktu pembuatan dan kadaluarsa di database
            $booking->snap_token = $snapToken;
            $booking->snap_token_created_at = now(); // Simpan waktu pembuatan snap_token
            $booking->snap_token_expiry = now()->addMinutes($expiryTime); // Waktu kadaluarsa berdasarkan metode
            $booking->save(); // Pastikan perubahan disimpan

            DB::commit();
            SendWhatsAppBookingFirst::dispatch($booking);

            return response()->json([
                'snapToken' => $snapToken,
                'booking' => $booking,
                'product' => $product,
            ]);
        } catch (\Exception $e) {
            DB::rollBack(); // Jika error, rollback
            Log::error('Gagal membuat snapToken: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal membuat transaksi pembayaran'], 500);
            Alert::toast('Terjadi kesalahan saat memproses pembayaran.', 'info')->autoClose(10000)->timerProgressBar();
            return redirect()->route('custinfo', [
                'jenis' => $product->project->jenis->slug,
                'kategori' => $product->project->kategori->slug,
                'project' => $product->project->slug,
            ]);
        }
    }

    // Fungsi untuk menentukan agency_id berdasarkan referral code
    private function determineAgencyIdForBooking($user)
    {
        // Ambil referral code dari request
        $referralCode = request()->input('refferal');
        log::info('Determining agency_id for booking', [
            'refferal' => $referralCode
        ]);

        // Jika ada referral code saat checkout
        if (!empty($referralCode)) {
            $agency = Agency::where('agency_code', $referralCode)->first();
            if ($agency) {
                return $agency->id;
            }
        }
        // Jika tidak ada referral code saat checkout, return null
        return null;
    }

    // Fungsi untuk mendapatkan waktu kadaluarsa berdasarkan metode pembayaran
    private function getExpiryTime($paymentMethod)
    {
        switch ($paymentMethod) {
            case 'qris':
                return 15; // QRIS kadaluarsa dalam 15 menit
            case 'bank_transfer':
                return 1440; // Bank Transfer kadaluarsa dalam 30 menit
            default:
                return 60; // Default: 1 jam
        }
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

                        Log::info('Converted Expiry Time', [
                            'original_midtrans' => $request->expiry_time,
                            'parsed_as_jakarta' => $expiryTimeLocal->format('Y-m-d H:i:s'),
                            'converted_to_utc' => $expiryTime->format('Y-m-d H:i:s')
                        ]);
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

                // Log untuk memastikan update berjalan
                Log::info('Booking updated with expiry time', [
                    'booking_id' => $booking->id,
                    'snap_token_expiry' => $expiryTime ? $expiryTime->format('Y-m-d H:i:s') : null
                ]);

                // Tentukan status transaksi
                $transactionStatus = $request->transaction_status;

                // Kirim notifikasi WhatsApp ketika metode pembayaran pertama kali dipilih
                // Kondisi: status pending, memiliki payment_type, dan sebelumnya tidak ada payment_method
                if (
                    $request->payment_type &&
                    $transactionStatus === 'pending' &&
                    (empty($previousPaymentMethod) || $previousPaymentMethod != $request->payment_type)
                ) {

                    Log::info('Sending payment method notification', [
                        'payment_method' => $request->payment_type
                    ]);

                    SendWhatsAppPaymentMethod::dispatch($booking);
                }

                // Update status transaksi berdasarkan status pembayaran
                switch ($transactionStatus) {
                    case 'settlement':
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
                        Log::info(
                            'Status updated to Booking',
                            [
                                'booking_id' => $booking->id,
                                'product_id' => $booking->product->id ?? null
                            ]
                        );
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
                        Log::info('Status updated to Failed', ['booking_id' => $booking->id]);
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
