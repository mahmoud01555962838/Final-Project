<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware'=>['auth']],function (){
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('add-to-cart/{id}', [CartController::class, 'store'])->name('add_to_cart');
    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
    Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');
    Route::get('/order/cancel', [\App\Http\Controllers\OrderController::class, 'cancel'])->name('orders.cancel');
    Route::get('/orders/{order}', [\App\Http\Controllers\OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [\App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');

    // Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    // Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('success-transaction', [\App\Http\Controllers\PayPalController::class, 'successTransaction'])->name('orders.success');
    // Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelOrder');
    //Route::post('ipn/notify','PayPalController@postNotify'); // Change it accordingly in your application

});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');

Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('add-to-cart/{id}', [CartController::class, 'store'])->name('add_to_cart');
Route::get('/order', [\App\Http\Controllers\HomeController::class, 'order'])->name('order');



 //Route::get("/suggest", [SuggestionController::class, "create"]);
//Route::post("/store/suggest", [SuggestionController::class, "store"]);
Route::resource('/suggest' , SuggestionController::class);

/*  Route::get("/create/category", [CategoryController::class, "create"]);
Route::post("/store/category", [CategoryController::class, "store"]);  */
Route::resource('/categorys' , CategoryController::class);
Route::resource('/users' , UserController::class);
Route::resource('/products',ProductController::class)->except('index');

Route::get('/aboutus',function(){
    return view('aboutus');
})->name('aboutus');
// Route::get('/make-admin',function(){
//     return \App\Models\User::factory()->admin()->create();
// });

Route::get("search",[ProductController::class,'search'])->name('search');

Route::get("filter1",[ProductController::class,'filter1'])->name('filter1');
Route::get("filter2",[ProductController::class,'filter2'])->name('filter2');
Route::get("filter3",[ProductController::class,'filter3'])->name('filter3');

Route::get('/categoryAdmin',function(){
    return view('admin.categoryAdmin');
})->name('categoryAdmin');

Route::get('/productAdmin',function(){
    return view('admin.productAdmin');
})->name('productAdmin');

Route::get('/userAdmin',function(){
    return view('admin.userAdmin');
})->name('userAdmin');
