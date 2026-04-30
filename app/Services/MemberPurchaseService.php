<?php

namespace App\Services;

use App\Models\Member;
use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use App\Repositories\PurchaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MemberPurchaseService
{
    public function __construct(
        protected PurchaseRepository $repository
    ) {}

    /**
     * Encode invoice menjadi slug yang aman untuk URL.
     * Menggunakan base64 url-safe encoding.
     */
    public function encodeInvoice(string $invoice): string
    {
        return rtrim(strtr(base64_encode($invoice), '+/', '-_'), '=');
    }

    /**
     * Decode slug URL kembali ke invoice asli.
     */
    public function decodeInvoice(string $slug): string
    {
        $padding = strlen($slug) % 4;
        if ($padding) {
            $slug .= str_repeat('=', 4 - $padding);
        }

        return base64_decode(strtr($slug, '-_', '+/'));
    }

    /**
     * Ambil daftar pembelian member.
     */
    public function getPurchaseList(Member $member, int $perPage = 10)
    {
        return $this->repository->getByMember($member, $perPage);
    }

    /**
     * Ambil detail pembelian dari slug URL.
     * Throw 404 jika tidak ditemukan atau bukan milik member.
     */
    public function getPurchaseDetail(string $slug, Member $member): PurchaseTransaction
    {
        $invoice  = $this->decodeInvoice($slug);
        $purchase = $this->repository->findByInvoice($invoice, $member);

        abort_if(! $purchase, 404);

        return $purchase;
    }

    /**
     * Ambil cicilan berikutnya yang bisa dibayar.
     */
    public function getNextUnpaidInstallment(PurchaseTransaction $purchase): ?PurchaseInstallment
    {
        return $this->repository->getNextUnpaidInstallment($purchase);
    }

    /**
     * Proses pengajuan pembayaran cicilan oleh member.
     *
     * @param  PurchaseInstallment  $installment
     * @param  string               $metode        'cash' | 'transfer'
     * @param  UploadedFile|null    $bukti         wajib jika transfer
     * @return PurchaseInstallment
     */
    public function submitPayment(
        PurchaseInstallment $installment,
        string $metode,
        ?UploadedFile $bukti = null
    ): PurchaseInstallment {
        // Pastikan cicilan memang bisa dibayar
        abort_unless($installment->canBePaid(), 403, 'Cicilan tidak dapat dibayar.');

        // Jika transfer wajib ada bukti
        abort_if(
            $metode === PurchaseInstallment::METODE_TRANSFER && ! $bukti,
            422,
            'Bukti pembayaran wajib diupload untuk metode transfer.'
        );

        return DB::transaction(function () use ($installment, $metode, $bukti) {
            $buktiPath = null;

            if ($metode === PurchaseInstallment::METODE_TRANSFER && $bukti) {
                if ($installment->bukti_pembayaran) {
                    Storage::disk('public')->delete($installment->bukti_pembayaran);
                }
                $buktiPath = $bukti->store('bukti-pembayaran', 'public');
            }

            $installment->update([
                'status'            => PurchaseInstallment::STATUS_PENDING,
                'metode_pembayaran' => $metode,
                'bukti_pembayaran'  => $buktiPath,
                'tanggal_bayar'     => now(),
                // Reset catatan admin jika sebelumnya ditolak
                'catatan_admin'     => null,
            ]);

            return $installment->fresh();
        });
    }
}
