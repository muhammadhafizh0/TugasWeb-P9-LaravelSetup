<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Tugas Rutin 9 - Setup Laravel
|--------------------------------------------------------------------------
| 3 route custom (/, /about, /contact) yang masing-masing mengembalikan
| Blade view dengan data dinamis dari array di dalam route/controller.
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Bonus: route parameter /hello/{nama}
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, {$nama}! Selamat datang di aplikasi Laravel saya.";
})->name('hello');
