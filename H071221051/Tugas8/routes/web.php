<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/productlines', [ProductController::class, 'search'])->name('productlines');

Route::get('/show/{productName}', [ProductController::class, 'showProduct'])->name('show');

// Route::get('/customers/country/{country}', [CustomerController::class, 'showByCountry'])->name('customers.country');

// Route::get('/orders/{year?}/{month?}', [OrderController::class, 'showByDate'])->name('orders.date');
