<?php

namespace App\Livewire;

use App\Models\PurchaseTransaction;
use App\Services\MemberPurchaseService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Detail Pembelian')]
class PurchaseDetail extends Component
{
    public string $slug;
    public PurchaseTransaction $purchase;
    public ?int $selectedCicilanId = null;

    public function mount(string $slug, MemberPurchaseService $service): void
    {
        $member         = auth()->guard('member')->user();
        $this->slug     = $slug;
        $this->purchase = $service->getPurchaseDetail($slug, $member);
    }

    public function selectCicilan(int $id): void
    {
        if ($this->selectedCicilanId === $id) {
            $this->selectedCicilanId = null;
            return;
        }

        $this->selectedCicilanId = $id;
    }

    public function render(MemberPurchaseService $service)
    {
        $nextInstallment  = null;
        $selectedCicilan  = null;

        if ($this->purchase->hasCicilan()) {
            $nextInstallment = $service->getNextUnpaidInstallment($this->purchase);

            if ($this->selectedCicilanId) {
                $selectedCicilan = $this->purchase->installments->find($this->selectedCicilanId);
            }
        }

        return view('livewire.purchase-detail', [
            'purchase'        => $this->purchase,
            'nextInstallment' => $nextInstallment,
            'selectedCicilan' => $selectedCicilan,
        ]);
    }
}
