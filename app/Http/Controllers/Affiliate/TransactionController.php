<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\BookingTransaction;
use App\Models\FeeTransaction;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


class TransactionController extends Controller
{
    public function index(Request $request)
    {

        $member = auth()->guard('member')->user();
        $agency = $member->agency;
        $transactions = FeeTransaction::whereHas('bookingTransaction', function ($query) use ($agency) {
            $query->where('agency_id', $agency->id);
        })
            ->with(['bookingTransaction', 'bookingTransaction.product.project', 'bookingTransaction.agency', 'bookingTransaction.member'])
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('pages.affiliate.transaction.partials.transactionList', compact('transactions'))->render(),
                'hasMorePages' => $transactions->hasMorePages(),
                'currentPage' => $transactions->currentPage(),
                'lastPage' => $transactions->lastPage()
            ]);
        }
        return view('pages.affiliate.transaction.index', [
            'transactions' => $transactions,
            'agency' => $agency,
        ]);
    }
}
