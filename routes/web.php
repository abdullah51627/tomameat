<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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


Auth::routes();


//
//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
////Language Translation
//
//Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
//
//Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');

Route::group(['prefix' => '/admin'],function(){
    Route::get("/", [\App\Http\Controllers\DashboardController::class,'index']);
    Route::resource("products",\App\Http\Controllers\ProductController::class);
    Route::resource("categories", \App\Http\Controllers\CategoryController::class);
    Route::resource("vendors", \App\Http\Controllers\VendorController::class);
    Route::get("inventory", [\App\Http\Controllers\ProductController::class,'inventory'])->name("inventory");
    Route::get("orders", [\App\Http\Controllers\ProductController::class,'orders'])->name("orders");
    Route::post("update-order", [\App\Http\Controllers\ProductController::class,'updateOrders'])->name("update-order");
//    Route::get("order-find", [\App\Http\Controllers\ProductController::class,'orderFind'])->name("order.find");

});

Route::view('about-us', "front.about-us");
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('cart-remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('cart-clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get("/shop",[\App\Http\Controllers\HomeController::class,'shop']);
Route::any("/checkout",[\App\Http\Controllers\HomeController::class,'checkout'])->name('checkout');
//// Registration Routes...
//Route::get('register', [
//    'as' => 'register',
//    'uses' => 'Auth\RegisterController@showRegistrationForm'
//]);
