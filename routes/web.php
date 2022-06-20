<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PortalController;
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
    return view('home.index');
});

Route::get('/disasters', [PortalController::class, 'portal_disaster']);

Route::post('/laporan/store', [LaporanController::class, 'store']);

Route::get('/contact', function()  {
    return view('home.contact');
});

Route::get('/admin/laporan', [AdminController::class, 'goLaporan']);

Route::get('/admin/laporan/{laporan}/destroy', [AdminController::class, 'destroyLaporan']);

Route::get('/admin/user', [AdminController::class, 'goUser']);

Route::post('/admin/user/store', [AdminController::class, 'storeUser']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
