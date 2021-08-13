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
use App\Http\Controllers\UserController;

use \App\Models\Equipament;
use App\Models\Register;

Route::get('/', function () {
  return view('main');
})->name('main');

Route::get('/suport', function () {
  return view('suport');
})->name('suport');

Route::get('/admin', function () {
  return view('admin');
})->name('admin')->middleware('auth');

Route::resource('/equipaments', EquipamentController::class);
Route::resource('/registers', RegisterController::class);
Route::resource('/users', UserController::class);

Route::get('/report/{equipament}', function (Equipament $equipament) {
  $registers = Register::orderBy('name')->get();
  return view('report', ['equipament' => $equipament, 'registers' => $registers]);
})->name('report')->middleware('auth');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
