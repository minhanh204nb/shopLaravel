<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  [HomeController::class, 'display']);
Route::get('/trang-chu', [HomeController::class, 'display']);
Route::get('/admin', [AdminController::class, 'loginAdmin']);
Route::get('/dashboard', [AdminController::class, 'displayDashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashBoard']);
