<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});


Route::get('/category',[CategoryController::class,'showcategory'])->name('category');
Route::POST('/addcatg',[CategoryController::class,'addcatg']);

Route::POST('/addprod',[ProductController::class,'addprod']);
Route::get('/product',[ProductController::class,'showproduct'])->name('product');

Route::get('/getprod',[ProductController::class,'getprod'])->name('disprod');
Route::get('/delprod/{pro_ID}',[ProductController::class,'delprod']);
