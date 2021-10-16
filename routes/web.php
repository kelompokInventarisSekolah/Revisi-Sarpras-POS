<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RestockController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\ListpinjamanController;
use App\Http\Livewire\Cart;
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
    return view('auth.login');
});


Auth::routes();
Route::get('/landing', [LandingController::class,'index'])->name('nampil');
Route::post('/landing', [LandingController::class,'tambah_peminjam'])->name('tambah_peminjam');
// print route
Route::get('/print', [RestockController::class,'print'])->name('print');
// QR
Route::get('qrcode/{id}', [LandingController::class, 'generate'])->name('generate');
Route::get('qrcodePeminjam/{id}', [ListpinjamanController::class, 'generate'])->name('generate1');

Route::get('/ruangan', [InventarisController::class,'index'])->name('ruangan');
Route::get('/inventaris-barangs/print/{id}',[CetakController::class,'cetak'])->name('cetak');

Route::get('/listpinjaman/{id}', [ListpinjamanController::class,'tampil'])->name('keranjang');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    
});


Auth::routes();
Route::group(['middelware'=>['auth']] , function(){
    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('main');
    Route::get('/home', [App\Http\Livewire\Cart::class, 'render'])->name('main');
    // Route::get('/cart',Cart::class);
    
    
});
