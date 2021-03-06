<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function routeForm()
    {
        if ($this->exists) {
            return route('comments.update', $this);
        }

        return $this->commentable->routeCommentsForm();
    }

    public function routeContentable()
    {
        return $this->commentable->routeShow();
    }
}
