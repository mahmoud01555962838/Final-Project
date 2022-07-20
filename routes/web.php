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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/create/suggest", [SuggestionController::class, "create"]);
Route::post("/store/suggest", [SuggestionController::class, "store"]);


/*  Route::get("/create/category", [CategoryController::class, "create"]);
Route::post("/store/category", [CategoryController::class, "store"]);  */
Route::resource('/categorys' , CategoryController::class);
Route::resource('/products',ProductController::class);
