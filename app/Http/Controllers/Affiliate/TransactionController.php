<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\BookingTransaction;
use App\Models\FeeTransaction;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


class TransactionController extends Controller
{
    public function index()
    {

        $member = auth()->guard('member')->user();
        $agency = $member->agency;
        $transactions = FeeTransaction::whereHas('bookingTransaction', function ($query) use ($agency) {
            $query->where('agency_id', $agency->id);
        })
            ->with(['bookingTransaction', 'bookingTransaction.product.project', 'bookingTransaction.agency', 'bookingTransaction.member'])
            ->paginate(5);

        // Log::info($transactions->toArray());

        return view('pages.affiliate.transaction.index', [
            'transactions' => $transactions,
            'agency' => $agency,
        ]);
    }
}
