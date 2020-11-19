<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
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

Route::get('/', [ProductsController::class,'index'])->name('product.index');
Route::get('/add-to-cart/{product}', [CartController::class,'add'])->name('cart.add');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::get('/cart/destroy/{itemId}', [CartController::class,'destroy'])->name('cart.destroy');
Route::put('/cart/update/{itemId}', [CartController::class,'update'])->name('cart.update');
Route::post('/cart', [ProductsController::class,'storeDetails'])->name('product.storeDetails');
