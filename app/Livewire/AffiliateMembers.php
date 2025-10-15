<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Affiliate;

class AffiliateMembers extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $member = Auth::guard('member')->user();
        $agency = $member->agency;

        $affiliatedMembers = Affiliate::with('member')
            ->whereHas('agency', function ($query) use ($agency) {
                $query->where('id', $agency->id);
            })
            ->orderBy('joined_at', 'desc')
            ->paginate(10);

        return view('livewire.affiliate-members', [
            'affiliatedMembers' => $affiliatedMembers,
        ]);
    }
}
