<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DokumentasiController;
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
    return view('pages.home', [
        'title' => '',
    ]);
})->name('home');

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
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
