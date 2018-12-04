<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [
        'id', 'project_id', 'created_at'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
