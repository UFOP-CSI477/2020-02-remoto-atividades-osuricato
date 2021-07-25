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

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PurchasesController;

Route::get('/', function () {
  return view('main');
})->name('main');

Route::resource('/products', ProductController::class)->middleware('auth');
Route::resource('/people', PeopleController::class)->middleware('auth');
Route::resource('/purchases', PurchasesController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
