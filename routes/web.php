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