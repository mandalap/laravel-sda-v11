<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar transaksi
        return view('pages.affiliate.transaction.index');
    }
}
