<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class BookingTransaction extends Model
{
    //
    use HasFactory, LogsActivity, SoftDeletes;
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
        'snap_token',
        'snap_token_created_at',
        'snap_token_expiry',
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
        'deleted_at',
        'tanggal_bayar',
        'member_id',
        'agency_id',
        'payment_method',
        'snap_token',
        'snap_token_created_at',
        'snap_token_expiry',
    ];

    protected $casts = [
        'agency_id' => 'integer',
        'member_id' => 'integer',
        'product_id' => 'integer',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'member_id',
                'product_id',
                'agency_id',
                'invoice',
                'total_harga',
                'is_paid',
                'status',
                'payment_method'
            ])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $eventName) {
                $memberName = $this->member->nama ?? 'Unknown';
                $productName = $this->product->nama_product ?? 'Unknown Product';

                $productStatus = $this->product->status ?? 'Unknown';

                switch ($eventName) {
                    case 'created':
                        return "Member {$memberName} melakukan booking {$productName} dengan invoice {$this->invoice}";
                    case 'updated':
                        if ($this->isDirty('is_paid') && $this->is_paid) {
                            return "Pembayaran booking {$this->invoice} oleh {$memberName} telah dikonfirmasi";
                        }
                        if ($this->isDirty('status')) {
                            return "Status booking {$this->invoice} oleh {$memberName} diubah menjadi {$this->status}";
                        }
                        if ($this->product->isDirty('status') && $this->product->status == 'Terjual') {
                            return "Pembayaran DP {$this->invoice} oleh {$memberName} telah dikonfirmasi. Status produk: Terjual.";
                        }
                        return "Booking {$this->invoice} oleh {$memberName} telah diperbarui";
                    default:
                        return "Booking {$this->invoice} oleh {$memberName} {$eventName}";
                }
            })
            ->useLogName('booking_transactions');
    }

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

    public function feeTransaction()
    {
        return $this->hasOne(FeeTransaction::class);
    }
}
