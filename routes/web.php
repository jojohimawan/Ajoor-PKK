<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::prefix('/user')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('user.login');
        Route::post('/login', [LoginController::class, 'authenticate'])->name('user.login');
        Route::get('/register', [RegisterController::class, 'index'])->name('user.register');
        Route::post('/register', [RegisterController::class, 'store'])->name('user.register');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');

        Route::get('/download/{id}', [DataController::class, 'success'])->name('user.success');
        Route::post('/download/{id}', [DataController::class, 'success'])->name('user.success');

        Route::get('/product', [ProductController::class, 'index'])->name('user.product');
        Route::post('/product', [ProductController::class, 'store'])->name('user.product');
        Route::delete('/product', [ProductController::class, 'delete'])->name('user.productDelete');
        Route::put('/product', [ProductController::class, 'update'])->name('user.productUpdate');

        Route::get('/category', [CategoryController::class, 'index'])->name('user.category');
        Route::post('/category', [CategoryController::class, 'store'])->name('user.category');
        Route::delete('/category', [CategoryController::class, 'delete'])->name('user.categoryDelete');
        Route::put('/category', [CategoryController::class, 'update'])->name('user.categoryUpdate');

        Route::get('/customer', [CustomerController::class, 'index'])->name('user.customer');
        Route::get('/role', [RoleController::class, 'index'])->name('user.role');
        // Route::get('/admin', [DashboardController::class, 'index'])->name('user.admin');
    });
});

// Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
// Route::get('/role', [RoleController::class, 'index'])->name('role');

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);
// End Auth

Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi');

Route::get('/ui-kit', [DataController::class, 'uikit'])->name('uikit');

Route::get('/template', [DataController::class, 'template'])->name('template');

Route::get('/icon-set', [DataController::class, 'iconset'])->name('iconset');

Route::get('/ilustrasi', [DataController::class, 'ilustrasi'])->name('ilustrasi');

Route::get('/detail/{id}', [DataController::class, 'detail'])->name('detail');
