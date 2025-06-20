<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Affiliate extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;
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

    // Konfigurasi activity log
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['member_id', 'agency_id', 'joined_at'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(fn(string $eventName) => "Member {$this->member->nama} {$eventName} sebagai affiliate")
            ->useLogName('affiliates');
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
