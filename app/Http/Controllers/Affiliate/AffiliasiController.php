<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AffiliasiController extends Controller
{
    public function index()
    {
        $member = Auth::guard('member')->user();
        $agency = $member->agency;

        $affiliatedMembers = Affiliate::with('member')
            ->whereHas('agency', function ($query) use ($agency) {
                $query->where('id', $agency->id);
            })
            ->paginate(4);


        // dd($affiliatedMembers);

        return view('pages.affiliate.affiliasi.index', [
            // 'member' => $member,
            'agency' => $agency,
            'affiliatedMembers' => $affiliatedMembers, // kirim ke view
        ]);
    }
}
