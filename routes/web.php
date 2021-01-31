<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\MerchantProductController;
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

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('merchant', MerchantController::class);
Route::resource('merchant_product', MerchantProductController::class);

//Route::post('product/create', [ProductController::class, 'store']);
//Route::post('category/create', [CategoryController::class, 'store']);


//Route::get('product', [ProductController::class, 'index']);
//Route::get('create', [ProductController::class, 'create']);

//Route::get('product/{product}', [ProductController::class, 'show']);
//Route::get('product/{product}/edit', [ProductController::class, 'edit']);
//Route::post('product/{product}', [ProductController::class, 'update']);