<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeTransaction extends Model
{
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
