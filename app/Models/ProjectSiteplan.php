<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProjectSiteplan extends Model
{
    protected $table = 'project_siteplans';

    protected $fillable = [
        'project_id',
        'svg_path',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the full public URL of the SVG file.
     */
    public function getSvgUrlAttribute(): string
    {
        return Storage::url($this->svg_path);
    }

    /**
     * Get the raw SVG content as a string.
     * Returns null if the file does not exist.
     */
    public function getSvgContentAttribute(): ?string
    {
        if (! Storage::disk('public')->exists($this->svg_path)) {
            return null;
        }

        return Storage::disk('public')->get($this->svg_path);
    }
}
