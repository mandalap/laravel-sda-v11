<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\FeeTransaction;
use App\Models\Affiliate;
use App\Models\Agency;
use App\Models\Member;
use App\Models\Product;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $member = Auth::guard('member')->user();
        $agency = $member->agency;

        $total_komisi = FeeTransaction::whereHas('bookingTransaction', function ($query) use ($agency) {
            $query->where('agency_id', $agency->id);
        })
            ->where('status', '!=', 'tersedia')
            ->sum('jumlah_fee');

        $totalMember = Affiliate::with('member')
            ->whereHas('agency', function ($query) use ($agency) {
                $query->where('id', $agency->id);
            })
            ->count();

        // Ambil activity log untuk agency ini
        $recentActivities = Activity::whereIn('log_name', ['affiliates', 'booking_transactions'])
            ->where(function ($query) use ($agency) {
                // Untuk affiliates: cek agency_id di properties->attributes
                $query->where('log_name', 'affiliates')
                    ->whereJsonContains('properties->attributes->agency_id', $agency->id);

                // Untuk booking_transactions: cek agency_id di properties->attributes
                $query->orWhere('log_name', 'booking_transactions')
                    ->whereJsonContains('properties->attributes->agency_id', $agency->id);
            })
            ->with(['subject', 'causer'])
            ->latest()
            ->take(5) // Ambil 10 aktivitas terbaru
            ->get();

        // Transform activity untuk mendapatkan nama member
        $activities = $recentActivities->map(function ($activity) {
            $properties = json_decode($activity->properties, true);
            $memberId = $properties['attributes']['member_id'] ?? null;

            // Ambil nama member
            $memberName = 'Unknown';
            if ($memberId) {
                $member = Member::find($memberId);
                $memberName = $member ? $member->nama : 'Unknown';
            }

            // Update description dengan nama member yang benar
            if ($activity->log_name == 'affiliates') {
                $activity->bg_class = 'bg-success-main';
                $activity->icon_type = 'affiliate';
                $activity->formatted_description = "Member {$memberName} bergabung menggunakan referral anda";
            } elseif ($activity->log_name == 'booking_transactions') {
                $activity->bg_class = 'bg-orange-main';
                $activity->icon_type = 'booking';
                $productName = 'produk';
                $projectName = 'project';
                if (isset($properties['attributes']['product_id'])) {
                    $product = Product::find($properties['attributes']['product_id']);
                    $productName = $product ? $product->nama_product : 'produk';

                    // Ambil nama_project dari relasi Product -> Project
                    if ($product && $product->project) {
                        $projectName = $product->project->nama_project;
                    }
                }

                switch ($activity->event) {
                    case 'created':
                        $activity->formatted_description = "Member {$memberName} melakukan booking {$projectName} - {$productName} menggunakan referral anda";
                        break;
                    case 'updated':
                        if (isset($properties['attributes']['is_paid']) && $properties['attributes']['is_paid']) {
                            $activity->formatted_description = "Pembayaran booking oleh {$memberName} telah dikonfirmasi";
                        } else {
                            $activity->formatted_description = "Booking {$memberName} telah diperbarui";
                        }
                        break;
                    default:
                        $activity->formatted_description = "Aktivitas booking {$memberName}";
                }
            }

            return $activity;
        });

        return view('pages.affiliate.dashboard.index', [
            'agency' => $agency,
            'total_komisi' => $total_komisi,
            'totalMember' => $totalMember,
            'recentActivities' => $activities,
        ]);
    }
}
