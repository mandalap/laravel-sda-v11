<?php

namespace App\Livewire;

use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use App\Services\MemberPurchaseService;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;

#[Layout('layouts.app')]
#[Title('Pembayaran Cicilan')]
class PayInstallment extends Component
{
    use WithFileUploads;

    public string $slug;
    public PurchaseTransaction $purchase;
    public PurchaseInstallment $installment;

    public string $metode       = '';
    public $buktiTransfer       = null;

    protected function rules(): array
    {
        $rules = [
            'metode' => 'required|in:cash,transfer',
        ];

        if ($this->metode === PurchaseInstallment::METODE_TRANSFER) {
            $rules['buktiTransfer'] = 'required|image|mimes:jpg,jpeg,png|max:2048';
        }

        return $rules;
    }

    public function updatedBuktiTransfer(): void
    {
        try {
            $this->validateOnly('buktiTransfer', [
                'buktiTransfer' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);
        } catch (ValidationException $e) {
            $this->buktiTransfer = null;
            throw $e;
        }
    }

    public function mount(string $slug, string $installmentId, MemberPurchaseService $service): void
    {
        $member         = auth()->guard('member')->user();
        $this->slug     = $slug;
        $this->purchase = $service->getPurchaseDetail($slug, $member);

        try {
            $decryptedId = decrypt($installmentId);
        } catch (DecryptException $e) {
            abort(404);
        }

        $installment = $this->purchase->installments()
            ->where('id', $decryptedId)
            ->first();

        abort_if(! $installment, 404);
        abort_unless($installment->canBePaid(), 403, 'Cicilan tidak dapat dibayar.');

        $this->installment = $installment;
    }

    public function submit(MemberPurchaseService $service): void
    {
        $this->validate();

        $bukti = $this->metode === PurchaseInstallment::METODE_TRANSFER
            ? $this->buktiTransfer
            : null;

        $service->submitPayment($this->installment, $this->metode, $bukti);

        Alert::toast('Pembayaran berhasil diajukan. Menunggu konfirmasi admin.', 'success')
            ->autoClose(3000)
            ->timerProgressBar();

        $this->redirect(route('purchase.detail', ['slug' => $this->slug]));
    }

    public function render()
    {
        return view('livewire.pay-installment', [
            'purchase'    => $this->purchase,
            'installment' => $this->installment,
        ]);
    }
}
