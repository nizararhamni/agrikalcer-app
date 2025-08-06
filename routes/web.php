<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecommenderController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PhotovoltaicController;

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

Route::get('/recommender', [RecommenderController::class, 'index'])->name('recommender');

Route::post('/predict', [RecommenderController::class, 'predict'])->name('predict');

Route::post('/pv/daily', [PhotovoltaicController::class, 'daily'])->name('pv-daily');

Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics');

Route::get('/photovoltaic', [PhotovoltaicController::class, 'index'])->name('photovoltaic');

Route::get('/history', [HistoryController::class, 'index'])->name('history');

Route::get('/notifications', function() {
    return view('notifications');
})->name('notifications');
