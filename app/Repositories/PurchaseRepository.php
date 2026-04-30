<?php

namespace App\Repositories;

use App\Models\Member;
use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class PurchaseRepository
{
    /**
     * Ambil semua pembelian milik member, diurutkan terbaru.
     */
    public function getByMember(Member $member, int $perPage = 10): LengthAwarePaginator
    {
        return PurchaseTransaction::with([
            'product.project',
            'installments',
        ])
            ->where('member_id', $member->id)
            ->latest('tanggal_pembelian')
            ->paginate($perPage);
    }

    /**
     * Ambil detail pembelian berdasarkan invoice — hanya milik member ini.
     */
    public function findByInvoice(string $invoice, Member $member): ?PurchaseTransaction
    {
        return PurchaseTransaction::with([
            'product.project',
            'bookingTransaction',
            'installments' => fn($q) => $q->orderBy('no_cicilan'),
        ])
            ->where('invoice', $invoice)
            ->where('member_id', $member->id)
            ->first();
    }

    /**
     * Ambil cicilan yang bisa dibayar oleh member.
     * Hanya cicilan pertama yang belum lunas (urut dari no_cicilan terkecil).
     */
    public function getNextUnpaidInstallment(PurchaseTransaction $purchase): ?PurchaseInstallment
    {
        return $purchase->installments()
            ->whereIn('status', [
                PurchaseInstallment::STATUS_UNPAID,
                PurchaseInstallment::STATUS_REJECTED,
            ])
            ->orderBy('no_cicilan')
            ->first();
    }

    /**
     * Ambil cicilan by ID — pastikan milik purchase yang benar.
     */
    public function findInstallment(int $installmentId, PurchaseTransaction $purchase): ?PurchaseInstallment
    {
        return $purchase->installments()
            ->where('id', $installmentId)
            ->first();
    }
}
