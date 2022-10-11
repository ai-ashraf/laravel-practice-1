<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductlistController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\backend\CategoryController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[HomeController::class, 'index']);

Route::get('/about',[AboutController::class, 'about']);

Route::get('/contact',[ContactController::class, 'contact']);

Route::get('/productdetails/{id}',[ProductDetailsController::class, 'productdetails'])->name('products.show');

// Route::get('/about',[AboutController::class, 'about']);

Route::get('/admin',[DashboardController::class, 'dashboard']);

Route::get('/admin/productlist',[ProductlistController::class, 'productlist'])->name('productlist');

Route::get('/admin/productcreate',[ProductlistController::class, 'create'])->name('productlist.create');

Route::post('/admin/productcreate',[ProductlistController::class, 'store'])->name('productlist.store');

Route::get('/admin/productcreate/{id}',[ProductlistController::class, 'edit'])->name('productlist.edit');

Route::patch('/admin/productupdate/{id}',[ProductlistController::class, 'update'])->name('productlist.update');

Route::get('/admin/productlist/{id}',[ProductlistController::class, 'productshow'])->name('productlist.show');
Route::delete('/admin/productlist/{id}',[ProductlistController::class, 'destroy'])->name('productlist.delete');

Route::get('/admin/trashlist',[ProductlistController::class, 'trash'])->name('trashlist');

Route::patch('/admin/productrestore/{id}',[ProductlistController::class, 'restore'])->name('productlist.restore');
Route::delete('/admin/productdelete/{id}',[ProductlistController::class, 'delete'])->name('productlist.forcedelete');
// Category

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
