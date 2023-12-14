<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/home', [PostsController::class, 'index'])->name('home');
    Route::get('/bookmarks', [BookmarksController::class, 'index']);
    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/comments/{id}', [CommentsController::class, 'index']);
    Route::get('/ai', [ChatController::class, 'index']);

    Route::post('/posts', [PostsController::class, 'store'])->name('posts');
    Route::post('/like-post/{id}', [LikesController::class, 'store'])->name('like.post');
    Route::post('/bookmark-post/{id}', [BookmarksController::class, 'store'])->name('bookmark.post');
    Route::post('/comments-post/{id}', [CommentsController::class, 'store'])->name('comment.post');
    Route::post('/chat', [ChatController::class, 'store']);

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Checking
    Route::get('/check-post', [PostsController::class, 'show']);
});


require __DIR__.'/auth.php';
