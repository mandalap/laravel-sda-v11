<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTransaction extends Model
{
    //
    use SoftDeletes;
    protected $table = "booking_transactions";

    protected $fillable = [
        'member_id',
        'product_id',
        'agency_id',
        'invoice',
        'jumlah_uang_booking',
        'harga_tanah',
        'diskon',
        'total_harga',
        'is_paid',
        'tanggal_bayar',
        'status',
        'payment_method',
        'snap_token_created_at',
        'snap_token_expiry',
    ];

    protected $casts = [
        'agency_id' => 'integer',
        'member_id' => 'integer',
        'product_id' => 'integer', 
    ];

    public static function generateUniqueTrxId()
    {
        $prefix = 'SDA';
        do {
            $randomSting = $prefix . mt_rand(100000000, 999999999);
        } while (self::where('invoice', $randomSting)->exists());

        return $randomSting;
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }
}
