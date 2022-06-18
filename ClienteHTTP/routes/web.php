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
Auth::routes(['register' => false, 'reset' => false]);

Route::get('/',[App\Http\Controllers\WelcomeController::class,'showWelcomePage'])->name('welcome');


Route::get('products/{title}-{id}',[App\Http\Controllers\ProductController::class,'showProduct'])->name('products.show');
Route::get('products/{title}-{id}/purchase', [App\Http\Controllers\ProductController::class,'purchaseProduct'])->name('products.purchase');
Route::get('products/publish', [App\Http\Controllers\ProductController::class,'showPublishProductForm'])->name('products.publish');
Route::post('products/publish', [App\Http\Controllers\ProductController::class,'publishProduct']);


Route::get('categories/{title}-{id}/products',[App\Http\Controllers\CategoryProductController::class,'showProducts'])->name('categories.products.show');


Route::get('authorization',[App\Http\Controllers\Auth\LoginController::class,'authorization'])->name('authorization');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/purchases', [App\Http\Controllers\HomeController::class, 'showPurchases'])->name('purchases');
Route::get('/home/products', [App\Http\Controllers\HomeController::class, 'showProducts'])->name('products');