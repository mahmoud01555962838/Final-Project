<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'index'])->name('home1');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');

Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');


 //Route::get("/suggest", [SuggestionController::class, "create"]);
//Route::post("/store/suggest", [SuggestionController::class, "store"]);
Route::resource('/suggest' , SuggestionController::class);

/*  Route::get("/create/category", [CategoryController::class, "create"]);
Route::post("/store/category", [CategoryController::class, "store"]);  */
Route::resource('/categorys' , CategoryController::class);
Route::resource('/products',ProductController::class)->except('index');
Route::get('/aboutus',function(){
    return view('aboutus');
});
// Route::get('/make-admin',function(){
//     return \App\Models\User::factory()->admin()->create();
// });
