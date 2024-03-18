<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
// frontend 
Route::get('/',  [HomeController::class, 'display']);
Route::get('/trang-chu', [HomeController::class, 'display']);
// backend 
Route::get('/admin', [AdminController::class, 'loginAdmin']);
Route::get('/dashboard', [AdminController::class, 'displayDashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashBoard']);
Route::get('/logout', [AdminController::class, 'logout']);
// category
Route::get('/list-category', [CategoryController::class, 'displayListCategory']);
Route::get('/create-category', [CategoryController::class, 'displayCreateCategory']);
Route::post('/save-categoty', [CategoryController::class, 'createCategory']);
Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory']);
Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory']);
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);
// action category
Route::get('/action-category/{id}', [CategoryController::class, 'actionCategory']);
Route::get('/un-action-category/{id}', [CategoryController::class, 'unActionCategory']);
// product
Route::get('/list-product', [ProductController::class, 'displayListProduct']);
Route::get('/create-product', [ProductController::class, 'displayCreateProduct']);
// end backennd

// // Frontend Routes
// Route::get('/',  [HomeController::class, 'display'])->name('home');
// Route::get('/trang-chu', [HomeController::class, 'display']);

// // Backend Routes
// Route::prefix('admin')->group(function () {
//     Route::get('/', [AdminController::class, 'loginAdmin']);
//     Route::get('/dashboard', [AdminController::class, 'displayDashboard']);
//     Route::post('/admin-dashboard', [AdminController::class, 'dashBoard']);
//     Route::get('/logout', [AdminController::class, 'logout']);

//     // Category Routes
//     Route::get('/list-category', [CategoryController::class, 'displayListCategory']);
//     Route::get('/create-category', [CategoryController::class, 'displayCreateCategory']);
//     Route::post('/save-category', [CategoryController::class, 'createCategory']);
//     Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory']);
//     Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory']);
//     Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);
//     Route::get('/action-category/{id}', [CategoryController::class, 'actionCategory']);
//     Route::get('/un-action-category/{id}', [CategoryController::class, 'unActionCategory']);

//     // Product Routes
//     Route::get('/list-product', [ProductController::class, 'displayListProduct']);
//     Route::get('/create-product', [ProductController::class, 'displayCreateProduct']);
// });
