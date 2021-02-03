<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\Commentable;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    use Commentable;

    protected function findCommentableOrFail()
    {
        return Post::findOrFail(request()->route('post'));
    }
}
