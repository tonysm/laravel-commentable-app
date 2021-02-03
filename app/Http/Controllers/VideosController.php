<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function show(Video $video)
    {
        return view('videos.show', [
            'video' => $video->load('comments'),
        ]);
    }
}
