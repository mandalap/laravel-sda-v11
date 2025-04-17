<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestimoniBanner extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'image',
        'title',
        'description',
        'status',
    ];

}
