<?php

use App\Http\Controllers\GetNews;
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

Route::get('/twitterhome', function () {
    return view('twitterhome');
})->middleware(['auth', 'verified'])->name('twitterhome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
    Route::get('/news', GetNews::class);
    Route::get('/lihat-sesi', function () {
        dd(session()->all());
    });
    Route::get('/users', [PostsController::class, 'index']);
});

Route::get('/profileedit',function() {
    return view('profileedit');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
