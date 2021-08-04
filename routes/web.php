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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopping/list', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/shopping/create', [\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/shopping/create', [\App\Http\Controllers\ProductController::class, 'store']);

Route::get('/shopping/add', [\App\Http\Controllers\ShoppingCardController::class, 'add'])->name('nhat');
Route::get('/shopping/cart', [\App\Http\Controllers\ShoppingCardController::class, 'show']);
Route::get('/shopping/remove', [\App\Http\Controllers\ShoppingCardController::class, 'remove']);
Route::post('/shopping/save', [\App\Http\Controllers\ShoppingCardController::class, 'save']);
