<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class, 'index']);


Route::get('/products/{slug}', [ProductController::class, 'show']);

// routes/web.php


Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::patch('/update/{product}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/remove/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');
});


