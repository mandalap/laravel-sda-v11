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

        $project = Project::where("slug", $project)->firstOrFail();
        $facilities = ProjectFasilitas::where('project_id', $project->id)->get();
        $photos = ProjectPhoto::where('project_id', $project->id)->get();
        $siteplan = Product::get();

        return view("pages.details.index", compact('project', 'photos', 'facilities', 'kategori', 'siteplan'));
    }

    public function custinfo($jenis, $kategori, $project)
    {
        $member = Auth::guard('member')->user();
        $jenis = Jenis::where('slug', $jenis)->firstOrFail();
        $kategori = Kategori::where('slug', $kategori)->firstOrFail();
        $project = Project::where("slug", $project)->firstOrFail();
        $products = Product::where('project_id', $project->id)
            ->where('status', 'Tersedia')
            ->get();

        // Mengurutkan di level aplikasi
        $products = $products->sortBy(function ($product) {
            preg_match('/([A-Za-z]+)([0-9]+)/', $product->nama_product, $matches);
            return isset($matches[1]) ? [$matches[1], (int)($matches[2] ?? 0)] : [$product->nama_product, 0]; // Urutkan berdasarkan huruf dan angka
        })->values(); // Mengembalikan koleksi yang terurut


        return view("pages.details.custInfo", compact('project', 'products', 'kategori', 'member'));
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
                // Cek status booking sebelum checkout
                if ($bookingTransaction->status == 'cancel') {
                    Alert::toast('Pembayaran telah dibatalkan, silakan lakukan pembelian lagi.', 'error')->autoClose(10000)->timerProgressBar();
                    return redirect()->back();
                } elseif ($bookingTransaction->status == 'booking') {
                    Alert::toast('Pembayaran telah diselesaikan.', 'success')->autoClose(10000)->timerProgressBar();
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
                    'booking' => $bookingTransaction
                ]);
            }

            // Validasi wajib memilih produk
            if (!$request->has('product') || empty($request->input('product'))) {
                Alert::toast('Silahkan memilih properti terlebih dahulu!', 'error')->autoClose(10000)->timerProgressBar();
                return redirect()->back();
            }

            // Jika bukan dari riwayat booking, lanjutkan dengan logika checkout baru
            $product = Product::where("code_product", $request->input('product'))->firstOrFail();

            // Cek apakah produk sedang dalam booking aktif oleh user lain
            $existingBooking = BookingTransaction::where('product_id', $product->id)
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
                ->first();


            if ($existingBooking && $existingBooking->member_id !== $user->id) {
                Alert::toast('Produk ini sedang dalam proses booking oleh pengguna lain.', 'error')->autoClose(10000)->timerProgressBar();
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
                'jumlahBooking'
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

            // Cek apakah ada booking aktif untuk produk ini
            $existingBooking = BookingTransaction::where('product_id', $product->id)
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
            // Jika sudah ada transaksi yang belum dibayar, gunakan invoice lama
            $invoice = $existingBooking ? $existingBooking->invoice : BookingTransaction::generateUniqueTrxId();

            // Jika transaksi belum ada, buat transaksi baru
            $booking = $existingBooking ?? new BookingTransaction();
            $booking->member_id = $user->id;
            $booking->product_id = $product->id;
            $booking->agency_id = $product->agency_id;
            $booking->invoice = $invoice;
            $booking->jumlah_uang_booking = request()->input('jumlah_uang_booking', 100000);
            $booking->harga_tanah = $product->harga;
            $booking->total_harga = $product->harga;
            $booking->is_paid = false;
            $booking->status = 'pending';

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
        }
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
                SendWhatsAppPaymentMethod::dispatch($booking);

                // Log untuk memastikan update berjalan
                Log::info('Booking updated with expiry time', [
                    'booking_id' => $booking->id,
                    'snap_token_expiry' => $expiryTime ? $expiryTime->format('Y-m-d H:i:s') : null
                ]);

                // Update status transaksi berdasarkan status pembayaran
                switch ($request->transaction_status) {
                    case 'settlement':
                        // Pembayaran berhasil dan diterima
                        $booking->update([
                            'status' => 'booking',
                            'is_paid' => true,
                            'tanggal_bayar' => now(),
                        ]);
                        // Update status produk menjadi "Terjual"
                        if ($booking->product) {
                            $booking->product->update(['status' => 'Terjual']);
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
