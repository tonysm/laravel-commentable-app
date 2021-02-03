<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\Commentable;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoCommentsController extends Controller
{
    use Commentable;

    protected function findCommentableOrFail()
    {
        return Video::findOrFail(request()->route('video'));
    }
}
