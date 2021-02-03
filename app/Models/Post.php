<?php

namespace App\Models;

use App\Models\Concerns\Commentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Commentable;

    protected $guarded = [];

    public function routeCommentsForm()
    {
        return route('posts.comments.store', $this);
    }

    public function routeShow()
    {
        return route('posts.show', $this);
    }
}
