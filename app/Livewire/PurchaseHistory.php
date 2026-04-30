<?php

namespace App\Livewire;

use App\Services\MemberPurchaseService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Layout('layouts.app')]
#[Title('Riwayat Pembelian')]
class PurchaseHistory extends Component
{
    use WithPagination;

    public function render(MemberPurchaseService $purchaseService)
    {
        $member = auth()->guard('member')->user();
        $purchase = $purchaseService->getPurchaseList($member);

        return view('livewire.purchase-history', compact('purchase'));
    }
}
