<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('search', [HotelController::class, 'index'])
    ->middleware(['auth'])->name('hotel.search');

Route::post('search/show', [HotelController::class, 'show'])
    ->middleware(['auth'])->name('hotel.show');

require __DIR__.'/auth.php';
