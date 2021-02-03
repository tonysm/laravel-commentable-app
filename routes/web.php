<?php

use App\Models\Post;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::query()->latest()->get(),
        'videos' => Video::query()->latest()->get(),
    ]);
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('posts/{post}', function (Post $post) {
        return view('posts.show', [
            'post' => $post->load('comments'),
        ]);
    })->name('posts.show');

    Route::get('videos/{video}', function (Video $video) {
        return view('videos.show', [
            'video' => $video->load('comments'),
        ]);
    })->name('videos.show');
});
