<?php

use Illuminate\Support\Facades\Auth;
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
   Route::resource("categories", CategoryController::class);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

