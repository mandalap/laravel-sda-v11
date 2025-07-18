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

        // Mengurutkan di level aplikasi
        $products = $products->sortBy(function ($product) {
            preg_match('/([A-Za-z]+)([0-9]+)/', $product->nama_product, $matches);
            return isset($matches[1]) ? [$matches[1], (int)($matches[2] ?? 0)] : [$product->nama_product, 0]; // Urutkan berdasarkan huruf dan angka
        })->values(); // Mengembalikan koleksi yang terurut

        return view('pages.affiliate.booking.detail', [
            'member' => $member,
            'project' => $project,
            'products' => $products,
        ]);
    }

    public function checkout(Request $request, $project)
    {
        DB::beginTransaction(); // Memulai transaksi
        try {
            $member = Auth::guard('member')->user(); // Agency yang sedang login
            $agency = $member->agency;

            // Ambil project berdasarkan slug
            $project = Project::where("slug", $project)->firstOrFail();

            // Validasi input
            $request->validate([
                'nama' => 'required|string|max:255',
                'telepon' => 'required|string|max:14',
                'product_id' => 'required|string', // code_product
            ]);

            // Ambil data konsumen
            $nama = $request->input('nama');
            $telepon = $request->input('telepon');
            $code_product = $request->input('product_id');

            // Cari produk berdasarkan code_product
            $product = Product::where('code_product', $code_product)->firstOrFail();

            // Periksa apakah member dengan nomor telepon tersebut sudah terdaftar
            $costumer = Member::where('telepon', $telepon)->first();

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

            if ($existingBooking && $existingBooking->member_id !== $member->id) {
                Alert::toast('Produk ini sedang dalam proses booking oleh pengguna lain.', 'info')->autoClose(10000)->timerProgressBar();
                return redirect()->back();
            }

            // Jika belum terdaftar, buat member baru
            if (!$costumer) {
                $costumer = new Member();
                $costumer->sapaan = 'Kak';
                $costumer->nama = $nama;
                $costumer->telepon = $telepon;
                $costumer->password = bcrypt('123456');
                $costumer->status = 'active';
                $costumer->save();

                if (!$costumer->hasRole('member')) {
                    $costumer->addRole('member');
                }
            }

            // Cek apakah member sudah terdaftar sebagai affiliate dari agency manapun
            $existingAffiliate = Affiliate::where('member_id', $costumer->id)->first();

            if (!$existingAffiliate) {
                // Jika member belum terdaftar sebagai affiliate, tambahkan ke tabel affiliate
                Affiliate::create([
                    'member_id' => $costumer->id,
                    'agency_id' => $agency->id,
                    'joined_at' => now(),
                ]);
            }

            // Siapkan data untuk dikirim ke view
            $kodeProduct = $product->code_product;
            $jumlahBooking = 100000; // Default jumlah booking

            // Commit transaksi jika semua berjalan lancar
            DB::commit();

            // Return view checkout dengan data yang diperlukan
            return view('pages.affiliate.booking.checkout', [
                'agency' => $agency, // 
                'costumer' => $costumer, // Konsumen
                'nama' => $nama,
                'project' => $project,
                'product' => $product,
                'kodeProduct' => $kodeProduct,
                'jumlahBooking' => $jumlahBooking,
            ]);
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi error
            Alert::toast($e->getMessage(), 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->route('affiliate.booking.detail', ['project' => $project->slug]);
        }
    }

    // Method checkoutStore - menggunakan parameter URL
    public function checkoutStore(Request $request, $project, $costumer_id = null, $product_code = null)
    {
        try {
            $member = Auth::guard('member')->user(); // Agency yang sedang login
            $project = Project::where("slug", $project)->firstOrFail();

            // Jika menggunakan route parameter
            if ($costumer_id && $product_code) {
                $costumer = Member::findOrFail($costumer_id);
                $product = Product::where('code_product', $product_code)->firstOrFail();
            } else {
                // Jika menggunakan query parameter
                $costumer_id = $request->query('costumer_id');
                $product_code = $request->query('product_code');

                if (!$costumer_id || !$product_code) {
                    throw new \Exception('Data tidak lengkap. Silakan ulangi proses booking.');
                }

                $costumer = Member::findOrFail($costumer_id);
                $product = Product::where('code_product', $product_code)->firstOrFail();
            }

            $jumlahBooking = 100000; // Default atau ambil dari konfigurasi

            // Validasi hanya untuk data yang benar-benar dari form
            $request->validate([
                'payment_method' => 'nullable|string',
            ]);

            // Cek apakah sudah ada transaksi aktif untuk konsumen dan produk ini
            $existingBooking = BookingTransaction::where('member_id', $costumer->id)
                ->where('product_id', $product->id)
                ->whereIn('status', ['pending', 'booking'])
                ->first();

            if ($existingBooking) {
                Alert::toast('Konsumen sudah memiliki transaksi booking aktif untuk produk ini', 'error')->autoClose(10000)->timerProgressBar();
                return redirect()->route('affiliate.booking.detail', ['project' => $project->slug]);
            }

            // Gunakan transaction dan lock untuk keamanan transaksi
            $bookingTransaction = DB::transaction(function () use ($member, $costumer, $product, $jumlahBooking) {
                // Lock produk untuk pembaruan untuk mencegah race condition
                $productLocked = Product::lockForUpdate()->findOrFail($product->id);

                // Periksa apakah produk masih tersedia
                if ($productLocked->status !== 'Tersedia') {
                    throw new \Exception('Produk ini sudah dibooking oleh konsumen lain');
                }

                // Buat nomor invoice menggunakan method generateUniqueTrxId
                $invoice = BookingTransaction::generateUniqueTrxId();

                // Hitung total harga
                $diskon = 0; // Bisa dihitung dari logika bisnis
                $total_harga = $productLocked->harga - $diskon;

                // Ambil data agency berdasarkan member yang sedang login
                $agency = Agency::where('member_id', $member->id)->firstOrFail();

                // Simpan transaksi booking
                $transaction = new BookingTransaction();
                $transaction->member_id = $costumer->id; // ID konsumen
                $transaction->product_id = $productLocked->id;
                $transaction->agency_id = $agency->id;
                $transaction->invoice = $invoice;
                $transaction->jumlah_uang_booking = $jumlahBooking;
                $transaction->harga_tanah = $productLocked->harga;
                $transaction->diskon = $diskon;
                $transaction->total_harga = $total_harga;
                $transaction->is_paid = false;
                $transaction->status = 'pending';

                $transaction->save();

                return $transaction;
            }, 3); // 3 kali percobaan jika terjadi deadlock

            WhatsAppPendingAgencyTransaction::dispatch($bookingTransaction);
            WhatsAppPendingMemberTransaction::dispatch($bookingTransaction);

            // Redirect ke halaman sukses dengan pesan alert
            Alert::toast('Booking berhasil dilakukan. Menunggu admin untuk memverifikasi transaksi anda', 'success')->autoClose(10000)->timerProgressBar();
            return redirect()->route('affiliate.booking.checkout.success', [
                'invoice' => $bookingTransaction->invoice
            ]);
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->back();
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

        Log::info('User logged in: ', ['agency_id' => $agency->id]);
        Log::info('Booking details: ', ['booking_id' => $booking->id, 'agency_id' => $booking->agency_id]);

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
