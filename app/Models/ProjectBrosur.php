<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectBrosur extends Model
{
    use SoftDeletes;
    protected $table = "projects_brosur";

    protected $fillable = [
        'project_id',
        'photo',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
