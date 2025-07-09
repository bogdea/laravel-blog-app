<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/post/{id}', [PostController::class, 'show']) ->name(('post.show'));
Route::post('/post/{post}/', [CommentController::class, 'store'])
    ->name('comments.store')
    ->middleware('auth');