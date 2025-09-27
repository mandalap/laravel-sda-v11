<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeeTransaction extends Model
{

    use SoftDeletes;

    protected $table = 'fee_transactions';
    protected $fillable = [
        'booking_transaction_id',
        'jumlah_fee',
        'status',
        'tanggal_pengambilan',
    ];

    // Relasi balik ke booking_transactions
    public function bookingTransaction()
    {
        return $this->belongsTo(BookingTransaction::class);
    }
}
