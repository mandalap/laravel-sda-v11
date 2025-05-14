<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


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
        'redirect_url',
        'start_date',
        'end_date',
        'slug',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    protected static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });

        static::updating(function ($project) {
            if ($project->isDirty('title')) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
