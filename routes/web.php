<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/recommender', function() {
    return view('recommender');
})->name('recommender');

Route::get('/statistics', function () {
    return view('statistics');
})->name('statistics');

Route::get('/photovoltaic', function () {
    return view('photovoltaic');
})->name('photovoltaic');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/notifications', function() {
    return view('notifications');
})->name('notifications');
