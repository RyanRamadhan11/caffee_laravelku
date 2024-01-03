<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\PesananController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('master');
});


Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('dashboard',DashboardController::class)->middleware('auth');

Route::resource('kategori',KategoriController::class)->middleware('auth');
// Route::get('kategori-edit/{id}', [KategoriController::class,'edit']);
Route::get('kategori-pdf', [KategoriController::class,'kategoriPDF'])->middleware('auth');
Route::get('kategori-excel', [KategoriController::class,'kategoriExcel'])->middleware('auth');

Route::resource('menu',MenuController::class)->middleware('auth');
// Route::get('menu-edit/{id}', [MenuController::class,'edit']);
Route::get('menu-pdf', [MenuController::class,'menuPDF'])->middleware('auth');
Route::get('menu-excel', [MenuController::class,'menuExcel'])->middleware('auth');

Route::resource('meja',MejaController::class)->middleware('auth');
// Route::get('meja-edit/{id}', [MejaController::class,'edit']);
Route::get('meja-pdf', [MejaController::class,'mejaPDF'])->middleware('auth');
Route::get('meja-excel', [MejaController::class,'mejaExcel'])->middleware('auth');



Route::resource('pesanan',PesananController::class);
// Route::get('pesanan-edit/{id}', [PesananController::class,'edit']);
Route::get('pesanan-pdf', [PesananController::class,'pesananPDF']);
Route::get('pesanan-excel', [PesananController::class,'pesananExcel']);


