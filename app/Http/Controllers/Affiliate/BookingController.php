<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\BookingTransaction;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Member;
use App\Models\Product;
use App\Models\Project;
use App\Models\Affiliate;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Jobs\WhatsAppPendingAgencyTransaction;
use App\Jobs\WhatsAppPendingMemberTransaction;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    /**
     * PERUBAHAN 1: Method untuk update status product (sama seperti di member)
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
     * PERUBAHAN 2: Method untuk validasi ketersediaan product (sama seperti di member)
     */
    private function validateProductAvailability(Product $product, $currentUserId = null, $isAgencyBooking = false)
    {
        // Bersihkan booking yang sudah expired
        $this->cleanupExpiredBookings($product->id);

        // Cek apakah product sedang dalam booking aktif
        $activeBooking = BookingTransaction::where('product_id', $product->id)
            ->where(function ($query) {
                $query->where(function ($q) {
                    // Booking yang sudah dibayar (lunas)
                    $q->where('status', 'booking')
                        ->where('is_paid', true);
                })
                    ->orWhere(function ($q) {
                        // Booking pending dengan snap token yang belum expired (untuk member)
                        $q->where('status', 'pending')
                            ->whereNotNull('snap_token')
                            ->where('snap_token_expiry', '>', now());
                    })
                    ->orWhere(function ($q) {
                        // Booking pending tanpa snap token (untuk agency) yang masih baru (< 24 jam)
                        $q->where('status', 'pending')
                            ->whereNull('snap_token')
                            ->where('created_at', '>', now()->subHours(24));
                    });
            })
            ->first();

        // Jika ada booking aktif
        if ($activeBooking) {
            // Jika booking milik user/costumer yang sama
            if ($activeBooking->member_id == $currentUserId) {
                // Jika sudah dibayar
                if ($activeBooking->status == 'booking' && $activeBooking->is_paid) {
                    return [
                        'available' => false,
                        'message' => $isAgencyBooking
                            ? 'Konsumen ini sudah membooking produk ini.'
                            : 'Anda sudah membooking produk ini.',
                        'booking' => $activeBooking,
                        'already_owned' => true
                    ];
                }

                // Jika masih pending dan belum expired
                return [
                    'available' => false,
                    'message' => $isAgencyBooking
                        ? 'Konsumen ini memiliki transaksi booking aktif untuk produk ini'
                        : 'Anda memiliki transaksi booking aktif untuk produk ini',
                    'booking' => $activeBooking,
                    'has_pending' => true
                ];
            }

            // Booking milik user/costumer lain
            return [
                'available' => false,
                'message' => 'Produk ini sedang dalam proses booking oleh pengguna lain.',
                'booking' => $activeBooking
            ];
        }

        return [
            'available' => true,
            'message' => 'Product tersedia untuk dibooking',
            'booking' => null
        ];
    }

    private function cleanupExpiredBookings($productId)
    {
        // Cek apakah masih ada booking aktif
        $hasActiveBooking = $this->hasActiveBooking($productId);

        if (!$hasActiveBooking) {
            $product = Product::find($productId);
            if ($product && $product->status !== 'Tersedia' && $product->status !== 'Terjual') {
                $this->updateProductStatus($product, 'Tersedia');
            }
        } else {
            Log::info("Product still has active booking - status maintained", [
                'product_id' => $productId
            ]);
        }
    }

    /**
     * PERUBAHAN 4: Helper method untuk cek apakah product punya booking aktif
     */
    private function hasActiveBooking($productId)
    {
        return BookingTransaction::where('product_id', $productId)
            ->where(function ($query) {
                $query->where(function ($q) {
                    // Booking yang sudah lunas
                    $q->where('status', 'booking')
                        ->where('is_paid', true);
                })
                    ->orWhere(function ($q) {
                        // Booking member yang pending dan belum expired
                        $q->where('status', 'pending')
                            ->whereNotNull('snap_token')
                            ->where('snap_token_expiry', '>', now());
                    })
                    ->orWhere(function ($q) {
                        // Booking agency yang pending dan masih baru (< 24 jam)
                        $q->where('status', 'pending')
                            ->whereNull('snap_token')
                            ->where('created_at', '>', now()->subHours(24));
                    });
            })
            ->exists();
    }

    public function index(Request $request)
    {
        $member = Auth::guard('member')->user();

        // Ambil parameter filter dan cari dari URL
        $filter = $request->query('filter');
        $cari = $request->query('cari');
        $kat = $request->query('propertiKategori', 'all'); // Gunakan 'all' jika tidak ada kategori
        $page = $request->query('page', 1); // Default ke halaman 1

        // Jika kategori yang dipilih adalah 'all', ambil semua kategori
        if ($kat == 'all') {
            $kategori = Kategori::all();
        } else {
            // Ambil kategori berdasarkan slug
            $kategori = Kategori::where('slug', $kat)->firstOrFail();
        }

        // Buat query dasar untuk mengambil proyek berdasarkan kategori dan status proyek
        $query = Project::where('projects.is_approved', 'Diterima')
            ->where('projects.status', 'tampil');

        // Jika ada pencarian, terapkan filter pencarian
        if ($cari) {
            $query->where(function ($q) use ($cari) {
                $q->where('nama_project', 'like', '%' . $cari . '%')
                    ->orWhere('alamat_project', 'like', '%' . $cari . '%');
            });
        }

        // Terapkan filter lain seperti 'terbaru', 'terlama'
        if ($filter == 'terbaru') {
            $query->orderBy('id', 'desc');
        } elseif ($filter == 'terlama') {
            $query->orderBy('id', 'asc');
        } else {
            $query->withCount(['products' => function ($query) {
                $query->where('products.status', 'Tersedia');
            }])
                ->orderByDesc('products_count');
        }

        // Hitung total proyek untuk filter saat ini
        $projectCount = $query->count();

        // Untuk permintaan AJAX, kirimkan proyek dalam format JSON
        if ($request->ajax()) {
            $projects = $query->skip(($page - 1) * 5)->take(5)->get();

            $html = '';
            if ($projects->count() > 0) {
                $html = view('pages.affiliate.booking.itemProperti', compact('projects'))->render();
            }

            return response()->json([
                'html' => $html,
                'hasMorePages' => $projects->count() == 5 && $page * 5 < $projectCount
            ]);
        }

        // Untuk pemuatan halaman awal, ambil 5 proyek pertama
        $projects = $query->skip(($page - 1) * 5)->take(5)->get();

        return view("pages.affiliate.booking.index", [
            'member' => $member,
            'projects' => $projects,
            'kategori' => $kategori,
            'filter' => $filter,
            'cari' => $cari,
            'kat' => $kat,
            'projectCount' => $projectCount,
        ]);
    }

    public function detail($project)
    {
        $member = Auth::guard('member')->user();
        $project = Project::where("slug", $project)->firstOrFail();
        $products = Product::where('project_id', $project->id)
            ->where('status', 'Tersedia')
            ->get();

        $selectedProduct = null;
        if ($products->count() === 1) {
            $selectedProduct = $products->first();  // Pilih produk pertama jika kategori rumah atau hanya ada satu produk
        }

        // Mengurutkan di level aplikasi
        $products = $products->sortBy(function ($product) {
            preg_match('/([A-Za-z]+)([0-9]+)/', $product->nama_product, $matches);
            return isset($matches[1]) ? [$matches[1], (int)($matches[2] ?? 0)] : [$product->nama_product, 0]; // Urutkan berdasarkan huruf dan angka
        })->values(); // Mengembalikan koleksi yang terurut

        return view('pages.affiliate.booking.detail', [
            'member' => $member,
            'project' => $project,
            'products' => $products,
            'selectedProduct' => $selectedProduct
        ]);
    }

    /**
     * PERUBAHAN 5: Refactoring method checkout dengan DB transaction dan locking
     */
    public function checkout(Request $request, $project)
    {
        try {
            $member = Auth::guard('member')->user();
            $agency = $member->agency;

            if (!$agency) {
                Alert::toast('Anda tidak memiliki akses sebagai agency', 'error')
                    ->autoClose(10000)->timerProgressBar();
                return redirect()->back();
            }

            $project = Project::where("slug", $project)->firstOrFail();

            // Validasi input
            $request->validate([
                'nama' => 'required|string|max:255',
                'telepon' => 'required|string|max:14',
                'product_id' => 'required|string',
            ]);

            $nama = $request->input('nama');
            $telepon = $request->input('telepon');
            $code_product = $request->input('product_id');

            // PERUBAHAN 6: Gunakan DB transaction untuk proses checkout
            return DB::transaction(function () use ($nama, $telepon, $code_product, $project, $agency, $member) {
                // Lock product untuk update
                $product = Product::where('code_product', $code_product)
                    ->lockForUpdate()
                    ->firstOrFail();

                // Validasi ketersediaan product
                $availability = $this->validateProductAvailability($product, null, true);

                if (!$availability['available']) {
                    Alert::toast($availability['message'], 'info')
                        ->autoClose(10000)->timerProgressBar();
                    return redirect()->back();
                }

                // Cari atau buat member/costumer
                $costumer = Member::where('telepon', $telepon)->first();

                if (!$costumer) {
                    $costumer = $this->createNewMember($nama, $telepon);
                }

                // PERUBAHAN 7: Validasi apakah costumer sudah punya booking untuk product ini
                $existingCostumerBooking = BookingTransaction::where('product_id', $product->id)
                    ->where('member_id', $costumer->id)
                    ->whereIn('status', ['pending', 'booking'])
                    ->lockForUpdate()
                    ->first();

                if ($existingCostumerBooking) {
                    Alert::toast('Konsumen sudah memiliki transaksi booking aktif untuk produk ini', 'error')
                        ->autoClose(10000)->timerProgressBar();
                    return redirect()->route('affiliate.booking.detail', ['project' => $project->slug]);
                }

                // Cek atau buat affiliate relationship
                $this->ensureAffiliateRelationship($costumer->id, $agency->id);

                // Setup data untuk checkout
                $kodeProduct = $product->code_product;
                $jumlahBooking = 100000;
                $discount = $product->discount ?? 0;
                $totalHarga = $product->harga - $discount;

                return view('pages.affiliate.booking.checkout', [
                    'agency' => $agency,
                    'costumer' => $costumer,
                    'nama' => $nama,
                    'project' => $project,
                    'product' => $product,
                    'kodeProduct' => $kodeProduct,
                    'jumlahBooking' => $jumlahBooking,
                    'discount' => $discount,
                    'totalHarga' => $totalHarga,
                ]);
            }, 3); // 3 attempts untuk handle deadlock

        } catch (\Exception $e) {
            Log::error('Error di agency checkout: ' . $e->getMessage());
            Alert::toast($e->getMessage(), 'error')
                ->autoClose(10000)->timerProgressBar();
            return redirect()->route('affiliate.booking.detail', ['project' => $project->slug]);
        }
    }

    /**
     * PERUBAHAN 8: Helper method untuk membuat member baru
     */
    private function createNewMember($nama, $telepon)
    {
        $randomNumber = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $costumer = new Member();
        $costumer->sapaan = 'Kak';
        $costumer->nama = $nama;
        $costumer->telepon = $telepon;
        $costumer->password = bcrypt($randomNumber);
        $costumer->status = 'active';
        $costumer->save();

        if (!$costumer->hasRole('member')) {
            $costumer->addRole('member');
        }

        return $costumer;
    }

    /**
     * PERUBAHAN 9: Helper method untuk ensure affiliate relationship
     */
    private function ensureAffiliateRelationship($costumerId, $agencyId)
    {
        $existingAffiliate = Affiliate::where('member_id', $costumerId)->first();

        if (!$existingAffiliate) {
            Affiliate::create([
                'member_id' => $costumerId,
                'agency_id' => $agencyId,
                'joined_at' => now(),
            ]);
        }
    }

    /**
     * PERUBAHAN 10: Refactoring checkoutStore dengan locking yang lebih ketat
     */
    public function checkoutStore(Request $request, $project, $costumer_id = null, $product_code = null)
    {
        try {
            $member = Auth::guard('member')->user();
            $agency = $member->agency;

            if (!$agency) {
                throw new \Exception('Anda tidak memiliki akses sebagai agency');
            }

            $project = Project::where("slug", $project)->firstOrFail();

            // Ambil parameter dari route atau query
            if ($costumer_id && $product_code) {
                $costumerId = $costumer_id;
                $productCode = $product_code;
            } else {
                $costumerId = $request->query('costumer_id');
                $productCode = $request->query('product_code');
            }

            if (!$costumerId || !$productCode) {
                throw new \Exception('Data tidak lengkap. Silakan ulangi proses booking.');
            }

            // Validasi input payment_method jika ada
            $request->validate([
                'payment_method' => 'nullable|string',
            ]);

            // PERUBAHAN 11: Gunakan DB transaction dengan 3 attempts
            $bookingTransaction = DB::transaction(function () use ($costumerId, $productCode, $agency, $member) {
                // Lock costumer
                $costumer = Member::where('id', $costumerId)
                    ->lockForUpdate()
                    ->firstOrFail();

                // Lock product
                $product = Product::where('code_product', $productCode)
                    ->lockForUpdate()
                    ->firstOrFail();

                // Lock semua booking terkait product ini
                BookingTransaction::where('product_id', $product->id)
                    ->lockForUpdate()
                    ->get();

                // PERUBAHAN 12: Validasi ketersediaan product setelah lock
                $availability = $this->validateProductAvailability($product, $costumer->id, true);

                if (!$availability['available']) {
                    throw new \Exception($availability['message']);
                }

                // Cek apakah costumer sudah punya transaksi aktif untuk product ini
                $existingBooking = BookingTransaction::where('member_id', $costumer->id)
                    ->where('product_id', $product->id)
                    ->whereIn('status', ['pending', 'booking'])
                    ->first();

                if ($existingBooking) {
                    throw new \Exception('Konsumen sudah memiliki transaksi booking aktif untuk produk ini');
                }

                // Generate invoice unik
                $invoice = BookingTransaction::generateUniqueTrxId();

                // Hitung harga
                $discount = $product->discount ?? 0;
                $totalHarga = $product->harga - $discount;
                $jumlahBooking = 100000;

                // PERUBAHAN 13: Buat transaksi booking baru
                $transaction = new BookingTransaction();
                $transaction->member_id = $costumer->id;
                $transaction->product_id = $product->id;
                $transaction->agency_id = $agency->id;
                $transaction->invoice = $invoice;
                $transaction->jumlah_uang_booking = $jumlahBooking;
                $transaction->harga_tanah = $product->harga;
                $transaction->diskon = $discount;
                $transaction->total_harga = $totalHarga;
                $transaction->is_paid = false;
                $transaction->status = 'pending';
                // Tidak ada snap_token untuk agency booking
                $transaction->snap_token = null;
                $transaction->snap_token_created_at = null;
                $transaction->snap_token_expiry = null;
                $transaction->save();

                // PERUBAHAN 14: Update status product ke Pending
                $this->updateProductStatus($product, 'Pending');

                Log::info('Agency booking created successfully', [
                    'booking_id' => $transaction->id,
                    'invoice' => $transaction->invoice,
                    'product_code' => $product->code_product,
                    'agency_id' => $agency->id,
                    'costumer_id' => $costumer->id
                ]);

                return $transaction;
            }, 3); // 3 attempts untuk handle deadlock

            // Dispatch WhatsApp notifications
            WhatsAppPendingAgencyTransaction::dispatch($bookingTransaction);
            WhatsAppPendingMemberTransaction::dispatch($bookingTransaction);

            Alert::toast('Booking berhasil dilakukan. Menunggu admin untuk memverifikasi transaksi anda', 'success')
                ->autoClose(10000)->timerProgressBar();

            return redirect()->route('affiliate.profile.riwayatBooking');
        } catch (\Exception $e) {
            Log::error('Error di agency checkoutStore: ' . $e->getMessage(), [
                'project' => $project ?? 'unknown',
                'costumer_id' => $costumer_id ?? $request->query('costumer_id'),
                'product_code' => $product_code ?? $request->query('product_code'),
            ]);

            Alert::toast($e->getMessage(), 'error')
                ->autoClose(10000)->timerProgressBar();
            return redirect()->route('affiliate.booking.detail', [
                'project' => $project->slug
            ]);
        }
    }

    public function success($invoice)
    {
        $booking = BookingTransaction::where('invoice', $invoice)
            ->with(['product.project', 'member'])
            ->firstOrFail();


        $currentUser = Auth::guard('member')->user();

        // Ambil agency berdasarkan member yang login
        $agency = $currentUser->agency;

        // Cek apakah user yang login adalah agency yang sesuai
        if (!$agency || $booking->agency_id !== $agency->id) {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $project = $booking->product->project;

        return view('pages.affiliate.booking.successBooking', [
            'booking' => $booking,
            'product' => $booking->product,
            'costumer' => $booking->member,
            'project' => $project,
        ]);
    }
}
