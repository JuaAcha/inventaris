<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    AuthController,
    DashboardController,
    BarangController,
    TempatController
};

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
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// route barang
Route::resource('/barang', BarangController::class);

// Route Tempat
Route::get('/tempat', [TempatController::class, 'index'])->name('tempat.index');