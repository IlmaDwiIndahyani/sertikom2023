<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/dashboard/product/store', [
    ProductController::class,
    'store',
])->name('products.store');
Route::get('/dashboard/product/create', [
    ProductController::class,
    'create',
])->name('products.create');
Route::get('/dashboard/product/edit/{id}', [
    ProductController::class,
    'edit',
])->name('products.edit');
Route::put('/dashboard/product/update/{id}', [
    ProductController::class,
    'update',
])->name('products.update');
Route::get('/dashboard/product', [ProductController::class, 'index'])->name(
    'products.index'
);
Route::get('/dashboard/product/{id}', [
    ProductController::class,
    'destroy',
])->name('products.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
