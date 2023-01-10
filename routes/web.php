<?php

use App\Http\Controllers\CartController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
// Route::post('/auth/register', [App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/pages/cart', [App\Http\Controllers\CartController::class, 'index'])->name('pages.cart');
// Route::get('/pages/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('pages.checkout');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/products/{title}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.detail');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'search'])->name('products.search');
Route::post('/products/all_attribute', [App\Http\Controllers\ProductController::class, 'searchByAllAttribute'])->name('products.search.all-attribute');
Route::post('/products/filter', [App\Http\Controllers\ProductController::class, 'filter'])->name('products.filter');
Route::get('/products/sort/{sort}', [App\Http\Controllers\ProductController::class, 'sort'])->name('products.sort');
Route::post('/pass_demands', [App\Http\Controllers\CartController::class, 'passDemands'])->name('pass.demands');
Route::resources(["cart"=>CartController::class]);
