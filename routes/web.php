<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return redirect()->route('produk.index');
});

Route::resource('produk', ProdukController::class);
Route::resource('kategori', KategoriController::class);
