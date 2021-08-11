<?php

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

use App\Http\Controllers\EquipamentController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
  return view('main');
})->name('main');

Route::get('/suport', function () {
  return view('suport');
})->name('suport');

Route::resource('/equipaments', EquipamentController::class);
Route::resource('/registers', RegisterController::class);