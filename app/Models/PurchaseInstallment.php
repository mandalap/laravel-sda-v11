<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseInstallment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'purchase_transaction_id',
        'no_transaksi',
        'no_cicilan',
        'tanggal_cicilan',
        'harga_cicilan',
        'metode_pembayaran',
        'bukti_pembayaran',
        'tanggal_bayar',
        'kwitansi',
        'verified_by',
        'verified_at',
        'catatan_admin',
        'status',
    ];

    protected $casts = [
        'tanggal_cicilan' => 'date',
        'tanggal_bayar'   => 'datetime',
        'verified_at'     => 'datetime',
        'harga_cicilan'   => 'decimal:2',
    ];

    // -------------------------------------------------------------------------
    // Constants
    // -------------------------------------------------------------------------

    const STATUS_UNPAID        = 'unpaid';
    const STATUS_PENDING       = 'pending';
    const STATUS_PAID          = 'paid';
    const STATUS_REJECTED      = 'rejected';
    const STATUS_CANCELLED     = 'cancelled';

    const METODE_CASH     = 'cash';
    const METODE_TRANSFER = 'transfer';

    // -------------------------------------------------------------------------
    // Relationships
    // -------------------------------------------------------------------------

    public function purchaseTransaction(): BelongsTo
    {
        return $this->belongsTo(PurchaseTransaction::class);
    }

    public function verifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    // -------------------------------------------------------------------------
    // Static: No Transaksi Generator
    // -------------------------------------------------------------------------

    /**
     * Generate unique no_transaksi untuk cicilan.
     */
    public static function generateNoTransaksi(int $noCicilan, string $tanggalCicilan): string
    {
        $prefix = 'SDA';
        $bulanTahun = Carbon::parse($tanggalCicilan)->format('mY'); // 012025

        do {
            $unique = strtoupper(substr(uniqid(), -5));
            $no = "{$prefix}C{$noCicilan}{$bulanTahun}{$unique}";
        } while (self::where('no_transaksi', $no)->exists());

        return $no;
    }

    // -------------------------------------------------------------------------
    // Accessors
    // -------------------------------------------------------------------------

    /**
     * Format tanggal cicilan ke nama bulan dan tahun.
     * Contoh: "Februari 2025"
     */
    public function getTanggalCicilanLabelAttribute(): string
    {
        return $this->tanggal_cicilan->translatedFormat('F Y');
    }

    /**
     * Label status untuk tampilan.
     */
    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_UNPAID        => 'Belum Dibayar',
            self::STATUS_PENDING       => 'Menunggu Verifikasi',
            self::STATUS_PAID          => 'Lunas',
            self::STATUS_REJECTED      => 'Ditolak',
            self::STATUS_CANCELLED     => 'Batal',
            default                    => '-',
        };
    }

    /**
     * Warna badge status untuk UI (Tailwind class).
     */
    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_UNPAID        => 'gray',
            self::STATUS_PENDING       => 'yellow',
            self::STATUS_PAID          => 'green',
            self::STATUS_REJECTED      => 'red',
            self::STATUS_CANCELLED     => 'red',
            default                    => 'gray',
        };
    }

    // -------------------------------------------------------------------------
    // Helpers / Checkers
    // -------------------------------------------------------------------------

    public function isBelumDibayar(): bool
    {
        return $this->status === self::STATUS_UNPAID;
    }

    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isLunas(): bool
    {
        return $this->status === self::STATUS_PAID;
    }

    public function isDitolak(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }

    public function isTransfer(): bool
    {
        return $this->metode_pembayaran === self::METODE_TRANSFER;
    }

    public function isCash(): bool
    {
        return $this->metode_pembayaran === self::METODE_CASH;
    }

    /**
     * Apakah cicilan ini bisa dibayar oleh user.
     * Bisa bayar jika statusnya belum_dibayar atau ditolak.
     */
    public function canBePaid(): bool
    {
        return in_array($this->status, [
            self::STATUS_UNPAID,
            self::STATUS_REJECTED,
        ]);
    }

    /**
     * Apakah cicilan ini bisa diverifikasi oleh admin.
     */
    public function canBeVerified(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    /**
     * Apakah perlu bukti pembayaran (khusus transfer).
     */
    public function requiresBukti(): bool
    {
        return $this->isTransfer();
    }
}
