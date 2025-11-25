<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // 👈 PostController を use します

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// 🔽 この行を追加します
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Simple Blade view routes for layout demo
Route::view('/profile', 'profile');
Route::view('/courses', 'courses');