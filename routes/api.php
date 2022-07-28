<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CartController;






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post("/register",[AuthenticationController::class,"createUser"]);
Route::post("/signin",[AuthenticationController::class,"signin"]); 
Route::post('/logout', [AuthenticationController::class, 'logout']);
//Route::apiresource('/products',ProductController::class);
//Route::apiresource('/categories',CategoryController::class);  


Route::apiresource("/products", ProductController::class);
Route::apiresource("/categorys", CategoryController::class);
Route::apiresource("/cart", CartController::class);


Route::get("search",[ProductController::class,'search'])->name('search');


Route::get("filter1",[ProductController::class,'filter1'])->name('filter1');
Route::get("filter2",[ProductController::class,'filter2'])->name('filter2');
Route::get("filter3",[ProductController::class,'filter3'])->name('filter3');










