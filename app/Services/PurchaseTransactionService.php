<?php

namespace App\Services;

use App\Models\BookingTransaction;
use App\Models\FeeTransaction;
use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PurchaseTransactionService
{
    // -------------------------------------------------------------------------
    // Entry points
    // -------------------------------------------------------------------------

    /**
     * Dipanggil dari BookingTransactionResource saat action "Tandai Lunas".
     */
    public function createFromBooking(BookingTransaction $booking, array $data): PurchaseTransaction
    {
        return DB::transaction(function () use ($booking, $data) {
            $purchase = $this->createPurchaseTransaction($booking, $data);

            if ($purchase->hasCicilan()) {
                $this->generateInstallments($purchase, $data);
            }

            // Tandai product terjual
            $booking->product->update(['status' => 'Terjual']);

            // Fee marketing
            if ($booking->agency_id && ! empty($data['jumlah_fee']) && $data['jumlah_fee'] > 0) {
                FeeTransaction::create([
                    'booking_transaction_id' => $booking->id,
                    'jumlah_fee'             => $data['jumlah_fee'],
                    'status'                 => 'tersedia',
                ]);
            }

            return $purchase;
        });
    }

    public function update(PurchaseTransaction $purchase, array $data): PurchaseTransaction
    {
        return DB::transaction(function () use ($purchase, $data) {
            $jumlahDp    = (float) ($data['jumlah_dp'] ?? 0);
            $jumlahBulan = (int) ($data['jumlah_bulan_cicilan'] ?? 0);
            $totalHarga  = (float) ($data['total_harga'] ?? $purchase->total_harga);
            $hargaBooking = (float) ($data['harga_booking'] ?? $purchase->harga_booking);

            $purchase->update([
                'harga_tanah'          => $data['harga_tanah'] ?? $purchase->harga_tanah,
                'diskon'               => $data['diskon'] ?? $purchase->diskon,
                'total_harga'          => $totalHarga,
                'harga_booking'        => $hargaBooking,
                'jumlah_dp'            => $jumlahDp,
                'jumlah_bulan_cicilan' => $jumlahBulan ?: null,
                'pjb'                  => $data['pjb'] ?? $purchase->pjb,
                'catatan'              => $data['catatan'] ?? $purchase->catatan,
                'status'               => $data['status'] ?? $purchase->status,
            ]);

            if (! $purchase->hasCicilan()) {
                $this->deleteUnpaidInstallments($purchase);

                if ($purchase->installments()->where('status', PurchaseInstallment::STATUS_PAID)->doesntExist()) {
                    $purchase->update([
                        'status'        => PurchaseTransaction::STATUS_PAID,
                        'tanggal_lunas' => now(),
                    ]);
                }

                return $purchase->fresh();
            }

            $this->regenerateInstallments($purchase->fresh(), $data);

            return $purchase->fresh();
        });
    }

    // -------------------------------------------------------------------------
    // Private helpers
    // -------------------------------------------------------------------------

    private function createPurchaseTransaction(BookingTransaction $booking, array $data): PurchaseTransaction
    {
        $metode       = $data['metode_pembayaran'];
        $jumlahDp     = (float) ($data['jumlah_dp'] ?? 0);
        $jumlahBulan  = (int) ($data['jumlah_bulan_cicilan'] ?? 0);
        $hargaTanah   = (float) $booking->harga_tanah;
        $diskon       = (float) $booking->diskon;
        $totalHarga   = (float) $booking->total_harga;
        $hargaBooking = (float) $booking->jumlah_uang_booking;
        $sisaTagihan  = $totalHarga - $hargaBooking - $jumlahDp;

        $nominalCicilan = ($jumlahBulan > 0)
            ? (int) round($sisaTagihan / $jumlahBulan)
            : null;

        $isCash = ($metode === PurchaseTransaction::METODE_CASH);

        return PurchaseTransaction::create([
            'booking_transaction_id' => $booking->id,
            'member_id'              => $booking->member_id,
            'product_id'             => $booking->product_id,
            'agency_id'              => $booking->agency_id,
            'invoice'                => PurchaseTransaction::generateInvoice(),
            'tanggal_pembelian'      => now(),
            'harga_tanah'            => $hargaTanah,
            'harga_booking'          => $hargaBooking,
            'diskon'                 => $diskon,
            'total_harga'            => $totalHarga,
            'jumlah_dp'              => $jumlahDp,
            'metode_pembayaran'      => $metode,
            'jumlah_bulan_cicilan'   => $isCash ? null : $jumlahBulan,
            'harga_cicilan_perbulan' => $isCash ? null : $nominalCicilan,
            'pjb'                    => $data['pjb'] ?? null,
            'status'                 => $isCash
                ? PurchaseTransaction::STATUS_PAID
                : PurchaseTransaction::STATUS_ACTIVE,
            'tanggal_lunas'          => $isCash ? now() : null,
            'catatan'                => $data['catatan'] ?? null,
        ]);
    }

    /**
     * Generate cicilan fresh — dipakai saat CREATE.
     * Nomor urut selalu mulai dari 1.
     */
    private function generateInstallments(PurchaseTransaction $purchase, array $data): void
    {
        $jumlahBulan  = (int) $data['jumlah_bulan_cicilan'];
        $bulanMulai   = (int) $data['bulan_mulai_cicilan'];
        $tahunMulai   = (int) $data['tahun_mulai_cicilan'];
        $nominal      = (int) $purchase->harga_cicilan_perbulan;

        for ($i = 1; $i <= $jumlahBulan; $i++) {
            $tanggalCicilan = Carbon::create($tahunMulai, $bulanMulai, 1)
                ->addMonths($i - 1)
                ->toDateString();

            PurchaseInstallment::create([
                'purchase_transaction_id' => $purchase->id,
                'no_transaksi'            => PurchaseInstallment::generateNoTransaksi($i, $tanggalCicilan),
                'no_cicilan'              => $i,
                'tanggal_cicilan'         => $tanggalCicilan,
                'harga_cicilan'           => $nominal,
                'status'                  => PurchaseInstallment::STATUS_UNPAID,
            ]);
        }
    }

    private function regenerateInstallments(PurchaseTransaction $purchase, array $data): void
    {
        $jumlahBulanBaru = (int) $data['jumlah_bulan_cicilan'];

        $jumlahLunas = $purchase->installments()
            ->where('status', PurchaseInstallment::STATUS_PAID)
            ->count();

        $totalSudahLunas = $purchase->installments()
            ->where('status', PurchaseInstallment::STATUS_PAID)
            ->sum('harga_cicilan');

        // Cicilan baru yang perlu ada setelah yang lunas
        $jumlahCicilanBaru = $jumlahBulanBaru - $jumlahLunas;

        if ($jumlahCicilanBaru <= 0) {
            // Semua sudah lunas atau jumlah baru lebih kecil dari yang sudah lunas
            // Hapus semua yang belum lunas saja
            $this->deleteUnpaidInstallments($purchase);

            $purchase->update([
                'status'        => PurchaseTransaction::STATUS_PAID,
                'tanggal_lunas' => now(),
            ]);
            return;
        }

        // Ambil cicilan yang masih unpaid/pending/rejected, urutkan dari terkecil
        $cicilanBelumLunas = $purchase->installments()
            ->whereIn('status', [
                PurchaseInstallment::STATUS_UNPAID,
                PurchaseInstallment::STATUS_PENDING,
                PurchaseInstallment::STATUS_REJECTED,
            ])
            ->orderBy('no_cicilan')
            ->get();

        $jumlahExisting = $cicilanBelumLunas->count();

        // Hitung nominal baru
        $sisaBelumBayar = ($purchase->total_harga - $purchase->harga_booking - $purchase->jumlah_dp) - $totalSudahLunas;
        $nominalBaru    = (int) round($sisaBelumBayar / $jumlahCicilanBaru);

        $purchase->update(['harga_cicilan_perbulan' => $nominalBaru]);

        // Tentukan bulan mulai dari cicilan lunas terakhir
        $cicilanLunasTermakhir = $purchase->installments()
            ->where('status', PurchaseInstallment::STATUS_PAID)
            ->orderByDesc('no_cicilan')
            ->first();

        $mulaiDari = $cicilanLunasTermakhir?->tanggal_cicilan
            ? Carbon::parse($cicilanLunasTermakhir->tanggal_cicilan)->addMonth()
            : Carbon::create(
                (int) ($data['tahun_mulai_cicilan'] ?? now()->year),
                (int) ($data['bulan_mulai_cicilan'] ?? now()->addMonth()->month),
                1
            );

        if ($jumlahCicilanBaru <= $jumlahExisting) {
            // Kurangi — update yang diperlukan, hapus kelebihannya
            foreach ($cicilanBelumLunas as $index => $cicilan) {
                if ($index < $jumlahCicilanBaru) {
                    // Update cicilan yang masih diperlukan
                    $tanggalCicilan = $mulaiDari->copy()->addMonths($index)->toDateString();
                    $cicilan->update([
                        'no_cicilan'     => $jumlahLunas + $index + 1,
                        'tanggal_cicilan' => $tanggalCicilan,
                        'harga_cicilan'  => $nominalBaru,
                        'status'         => PurchaseInstallment::STATUS_UNPAID,
                    ]);
                } else {
                    // Hapus kelebihan
                    $cicilan->delete();
                }
            }
        } else {
            // Tambah — update yang ada, buat sisanya
            foreach ($cicilanBelumLunas as $index => $cicilan) {
                $tanggalCicilan = $mulaiDari->copy()->addMonths($index)->toDateString();
                $cicilan->update([
                    'no_cicilan'      => $jumlahLunas + $index + 1,
                    'tanggal_cicilan' => $tanggalCicilan,
                    'harga_cicilan'   => $nominalBaru,
                    'status'          => PurchaseInstallment::STATUS_UNPAID,
                ]);
            }

            // Buat cicilan tambahan
            for ($i = $jumlahExisting; $i < $jumlahCicilanBaru; $i++) {
                $noCicilan      = $jumlahLunas + $i + 1;
                $tanggalCicilan = $mulaiDari->copy()->addMonths($i)->toDateString();

                PurchaseInstallment::create([
                    'purchase_transaction_id' => $purchase->id,
                    'no_transaksi'            => PurchaseInstallment::generateNoTransaksi($noCicilan, $tanggalCicilan),
                    'no_cicilan'              => $noCicilan,
                    'tanggal_cicilan'         => $tanggalCicilan,
                    'harga_cicilan'           => $nominalBaru,
                    'status'                  => PurchaseInstallment::STATUS_UNPAID,
                ]);
            }
        }
    }

    // Tambahkan method helper baru ini juga
    private function deleteUnpaidInstallments(PurchaseTransaction $purchase): void
    {
        $purchase->installments()
            ->whereIn('status', [
                PurchaseInstallment::STATUS_UNPAID,
                PurchaseInstallment::STATUS_PENDING,
                PurchaseInstallment::STATUS_REJECTED,
            ])
            ->get()
            ->each(fn($cicilan) => $cicilan->delete());
    }
}
