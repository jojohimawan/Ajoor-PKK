<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    if (isset(Auth::user()->role_id)) {
        if (Auth::user()->role_id == 1) {
            return view('admin.dashboard', [
                'title' => 'Dashboard',
            ]);
        }
    }
    return view('pages.home', [
        'title' => '',
    ]);
})->name('home');

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
        Route::get('/admin', [DashboardController::class, 'index'])->name('user.admin');
    });
});

Route::get('/user', [CustomerController::class, 'index'])->name('user');

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);
// End Auth

Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi');

Route::get('/ui-kit', function () {
    return view('pages.category.ui-kit.index', [
        'title' => '| Ui Kit'
    ]);
});

Route::get('/template', function () {
    return view('pages.category.template.index', [
        'title' => '| Template'
    ]);
});

Route::get('/icon-set', function () {
    return view('pages.category.icon-set.index', [
        'title' => '| Icon Set'
    ]);
});

Route::get('/ilustrasi', function () {
    return view('pages.category.ilustrasi.index', [
        'title' => '| Ilustrasi'
    ]);
});

Route::get('/premium', function () {
    return view('pages.category.ui-kit.detail-premium', [
        'title' => '| Premium'
    ]);
});
