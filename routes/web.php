<?php

use App\Http\Controllers\ForecastController;
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

Route::get('/', [ForecastController::class,'index'])->name('forecast.index');
Route::get('/forecast/create', [ForecastController::class,'create'])->name('forecast.create');
Route::post('/forecast/create', [ForecastController::class,'create'])->name('forecast.store');
