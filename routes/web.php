<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowAndAddController;
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


Route::get('/', [HomeController::class, 'home']);

Route::get('/about', [HomeController::class, 'aboutpage']);

Route::get('/contactus', [HomeController::class, 'contactuspage']);

Route::get('/category', [HomeController::class, 'category']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/saleorder', [HomeController::class, 'saleorder']);


Route::get('/select', [ShowAndAddController::class, 'select'])->name('select');
Route::get('/add', [ShowAndAddController::class, 'add'])->name('add');
Route::post('/save', [ShowAndAddController::class, 'save'])->name('save');


Route::get('/home/{product}', function ($product) {
    return ("my name is $product");
});

Route::get('/home/{name}/{age}', function ($name , $age) {
    return ("my name is $name and $age years old");
});

Route::get('/home', function () {
    return ('welcome to home page');
});


// - Product
// - Category
// - saleOrder
