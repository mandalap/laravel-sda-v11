<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoBanner extends Model
{
    //
    use SoftDeletes;
    protected $table = "promo_banner";
    protected $fillable = [
        'image',
        'title',
        'description',
        'status',
        'start_date',
        'end_date',
        'slug',
    ];
}
