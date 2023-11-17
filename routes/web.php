<?php

use App\Http\Controllers\ProfileController;
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

use App\Http\Controllers\BandsController;
use App\Http\Controllers\AlbumsController;

Route::resources([
    'bands' => BandsController::class,
    'albums' => AlbumsController::class,

]);
Route::delete('/bands/{id}', [BandsController::class, 'destroy'])->name('bands.destroy');
Route::post('/bands', [BandsController::class, 'store'])->name('bands.store');
Route::post('/albums', [AlbumsController::class, 'store'])->name('albums.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
