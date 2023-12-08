<?php

use App\Http\Controllers\LikesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
    Route::post('/posts', [PostsController::class, 'store'])->name('posts');
    Route::get('/home', [PostsController::class, 'index']);
    Route::post('/like-post/{id}', [LikesController::class, 'store'])->name('like.post');


    // Checking
    Route::get('/check-session', [PostsController::class, 'index']);
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/news', function () {
    return view('news');
});

require __DIR__.'/auth.php';
