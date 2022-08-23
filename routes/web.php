<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


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

// Route::get('booking', [BookingController::class, 'index']);
// Route::post('booking', [BookingController::class, 'store'])->name('booking.store');
// Route::get('booking_show', [BookingController::class, 'show'])->name('booking.show');
Route::resource('bookings', BookingController::class);

// Route::get('booking', 'App\Http\Controllers\BookingController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
