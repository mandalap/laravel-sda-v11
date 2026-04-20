<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseTransaction extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_transaction_id',
        'member_id',
        'product_id',
        'agency_id',
        'invoice',
        'tanggal_pembelian',
        'harga_tanah',
        'diskon',
        'total_harga',
        'harga_booking',
        'jumlah_dp',
        'metode_pembayaran',
        'jumlah_bulan_cicilan',
        'harga_cicilan_perbulan',
        'pjb',
        'tanggal_lunas',
        'status',
        'catatan',
    ];

    protected $casts = [
        'tanggal_pembelian'     => 'date',
        'tanggal_lunas'         => 'date',
        'harga_tanah'           => 'decimal:2',
        'diskon'                => 'decimal:2',
        'total_harga'           => 'decimal:2',
        'harga_booking'         => 'decimal:2',
        'jumlah_dp'             => 'decimal:2',
        'harga_cicilan_perbulan' => 'decimal:2',
    ];

    // -------------------------------------------------------------------------
    // Constants
    // -------------------------------------------------------------------------

    const STATUS_ACTIVE    = 'active';
    const STATUS_PAID      = 'paid';
    const STATUS_CANCELLED = 'cancelled';

    const METODE_CASH       = 'cash';
    const METODE_KREDIT     = 'kredit';
    const METODE_CASH_TEMPO = 'cash_tempo';

    // -------------------------------------------------------------------------
    // Relationships
    // -------------------------------------------------------------------------

    public function bookingTransaction(): BelongsTo
    {
        return $this->belongsTo(BookingTransaction::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }

    public function installments(): HasMany
    {
        return $this->hasMany(PurchaseInstallment::class);
    }

    public static function generateInvoice(): string
    {
        $prefix = 'SDA';
        do {
            $invoice = $prefix . now()->format('Ymd') . strtoupper(substr(uniqid(), -5));
        } while (self::where('invoice', $invoice)->exists());

        return $invoice;
    }

    // -------------------------------------------------------------------------
    // Accessors
    // -------------------------------------------------------------------------

    /**
     * Sisa yang harus dibayar setelah booking dan DP.
     */
    public function getSisaPembayaranAttribute(): float
    {
        return (float) $this->total_harga - (float) $this->harga_booking - (float) $this->jumlah_dp;
    }

    /**
     * Label metode pembayaran untuk tampilan.
     */
    public function getMetodePembayaranLabelAttribute(): string
    {
        return match ($this->metode_pembayaran) {
            self::METODE_CASH       => 'Cash',
            self::METODE_KREDIT     => 'Kredit',
            self::METODE_CASH_TEMPO => 'Cash Tempo',
            default                 => '-',
        };
    }

    /**
     * Label status untuk tampilan.
     */
    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_ACTIVE    => 'Aktif',
            self::STATUS_PAID      => 'Lunas',
            self::STATUS_CANCELLED => 'Batal',
            default                => '-',
        };
    }

    // -------------------------------------------------------------------------
    // Helpers / Checkers
    // -------------------------------------------------------------------------

    public function isCash(): bool
    {
        return $this->metode_pembayaran === self::METODE_CASH;
    }

    public function isKredit(): bool
    {
        return $this->metode_pembayaran === self::METODE_KREDIT;
    }

    public function isCashTempo(): bool
    {
        return $this->metode_pembayaran === self::METODE_CASH_TEMPO;
    }

    public function hasCicilan(): bool
    {
        return $this->isKredit() || $this->isCashTempo();
    }

    public function isLunas(): bool
    {
        return $this->status === self::STATUS_PAID;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }
}
