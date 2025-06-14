<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affiliate extends Model
{
    use SoftDeletes;
    //
    protected $table = "affiliates";

    protected $fillable = [
        'member_id',
        'agency_id',
        'joined_at',
    ];

    protected $casts = [
        'member_id' => 'integer',
        'agency_id' => 'integer',
        'joined_at' => 'datetime',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }


}
