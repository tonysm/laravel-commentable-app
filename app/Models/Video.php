<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function routeCommentsForm()
    {
        return route('videos.comments.store', $this);
    }

    public function routeShow()
    {
        return route('videos.show', $this);
    }
}
