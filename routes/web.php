<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProductDetailsController;
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
Route::get('/productdetails',[ProductDetailsController::class, 'productdetails']);
// Route::get('/about',[AboutController::class, 'about']);
Route::get('/admin',[DashboardController::class, 'dashboard']);
