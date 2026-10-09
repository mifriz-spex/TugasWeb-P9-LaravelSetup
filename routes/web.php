<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// 3 Route Custom
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Bonus: Route Parameter /hello/{nama}
Route::get('/hello/{nama}', [PageController::class, 'hello'])->name('hello');

Route::get('/welcome-asli', function () {
    return view('welcome');
});