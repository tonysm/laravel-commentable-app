<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use App\Http\Controllers;
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

    Route::post('posts/{post}/comments', [Controllers\PostCommentsController::class, 'store'])->name('posts.comments.store');
    Route::post('videos/{video}/comments', [Controllers\VideoCommentsController::class, 'store'])->name('videos.comments.store');

    Route::get('comments/{comment}/edit', [Controllers\CommentsController::class, 'edit'])->name('comments.edit');
    Route::put('comments/{comment}', [Controllers\CommentsController::class, 'update'])->name('comments.update');
});
