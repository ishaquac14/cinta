<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhysicalController;
use App\Http\Controllers\SanswitchController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/physical', PhysicalController::class);
Route::get('/physical/search', 'PhysicalController@index');

Route::resource('/sanswitch', SanswitchController::class);
Route::get('/sanswitch/search', 'SanswitchController@index');

Route::post('/physical/store', [PhysicalController::class, 'store'])->name('physical.store');