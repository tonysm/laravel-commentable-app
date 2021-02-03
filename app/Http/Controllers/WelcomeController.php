<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome', [
            'posts' => Post::query()->latest()->get(),
            'videos' => Video::query()->latest()->get(),
        ]);
    }
}
