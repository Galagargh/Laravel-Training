<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

//if not signed in
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [SessionsController::class, 'create']);
    Route::post('login', [SessionsController::class, 'store']);
});

//if signed in as user
Route::middleware('auth')->group(function () {
    Route::post('logout', [SessionsController::class, 'destroy']);
});

//custom middleware, display only if user is admin
Route::middleware('can:admin')->group(function () {
        Route::resource('admin/posts', AdminPostController::class)->except('show');
//    Route::get('admin/posts', [AdminPostController::class, 'index']);
//    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
//    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
//    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
//    Route::post('admin/posts', [AdminPostController::class, 'store']);
//    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
});
