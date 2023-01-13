<?php

use App\Http\Controllers\WebControllers\{CartController, CommandController, ContactController,HomeController,ProductController};
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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
// Route::post('/auth/register', [App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/pages/cart', [CartController::class, 'index'])->name('pages.cart');
// Route::get('/pages/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('pages.checkout');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{title}', [ProductController::class, 'show'])->name('products.detail');
Route::post('/products', [ProductController::class, 'search'])->name('products.search');
// Route::get('/products/all_attribute/{title}', [App\Http\Controllers\ProductController::class, 'searchByAllAttribute'])->name('products.search.all-attribute');
Route::post('/products/all-attributes', [ProductController::class, 'searchByAllAttribute'])->name('products.search.all-attribute');
Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');
Route::get('/products/sort/{sort}', [ProductController::class, 'sort'])->name('products.sort');
Route::resources(["cart"=>CartController::class]);

Route::middleware("auth")->group(function(){
    Route::post('/pass-demands', [CartController::class, 'passDemands'])->name('pass.demands');
    Route::get('my-orders',[CommandController::class,'myOrders'])->name("myOrders");
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::put('/profile', [HomeController::class, 'update'])->name('profile.update');
    Route::put('/update/password', [HomeController::class, 'updatePassword'])->name('password.update');
    // Route::delete("delete_orders_completed",[CommandController::class,"allDeleteCompleted"])->name("delete.all.orders.completed");
    // Route::delete("delete_orders_processing",[CommandController::class,"allDeleteProcessing"])->name("delete.all.orders.processing");
    // Route::delete("detail/{id}",[CommandController::class,"delete"])->name("order.delete");
});
