<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $member = Auth::guard('member')->user();
        $agency = $member->agency;

        return view('pages.affiliate.dashboard.index', [
            'agency' => $agency,
        ]);
    }
}
