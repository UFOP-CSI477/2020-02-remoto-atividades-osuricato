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

use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PurchasesController;

Route::get('/', function () {
  return view('main');
})->name('main');

Route::resource('/products', ProductController::class);
Route::resource('/people', PeopleController::class);
Route::resource('/purchases', PurchasesController::class);

// Route::get('/products', function () {
//   $products = Product::all();

//   return view('products', [ 'data' => $products ]);
// });

// Route::get('/products/{id}', function ($id) {
//   $product = Product::findOrFail($id);

//   if ($product == null) {
//     return 'ID inválido!';
//   }

//   return view('products', [ 'data' => $product ]);
// });