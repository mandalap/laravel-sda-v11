<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Lokasi extends Model
{
    //
    use SoftDeletes;
    protected $table = 'lokasi';
    protected $fillable = [
        'province_id',
        'regency_id',
        'thumbnail',
        'slug',
    ];

    /**
     * Scope untuk filter lokasi yang memiliki project approved
     */
    public function scopeWithApprovedProjects($query)
    {
        return $query->whereHas('project', function ($query) {
            $query->approvedAndVisible();
        });
    }

    /**
     * Scope untuk menghitung project yang approved
     */
    public function scopeWithApprovedProjectCount($query)
    {
        return $query->withCount(['project' => function ($query) {
            $query->approvedAndVisible();
        }]);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'regency_id'); // Menyebutkan relasi ke model Regency
    }
}
