<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberProvider extends Model
{
    protected $table = 'member_providers';
    
    protected $fillable = [
        'member_id',
        'provider',
        'provider_id',
        'provider_token',
        'provider_avatar',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
