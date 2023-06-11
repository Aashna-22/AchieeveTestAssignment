<?php

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

Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('events');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/genre', [App\Http\Controllers\GenreController::class, 'create'])->name('genre');
Route::post('/genre/store', [App\Http\Controllers\GenreController::class, 'store'])->name('genre.store');

Route::get('/venue', [App\Http\Controllers\VenueController::class, 'create'])->name('venue');
Route::post('/venue/store', [App\Http\Controllers\VenueController::class, 'store'])->name('venue.store');

Route::get('/artist', [App\Http\Controllers\ArtistController::class, 'create'])->name('artist');
Route::post('/artist/store', [App\Http\Controllers\ArtistController::class, 'store'])->name('artist.store');

