<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'created' => \App\Events\CommentCreated::class,
    ];
    protected $fillable = [
        'project_id',
        'name',
        'email',
        'message'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
