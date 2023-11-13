<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Http\Controllers\WardahController;
use App\Models\Wardah;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title"  => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"  => "about"
    ]);
});

Route::get('/produk/dior/dior', [ProdukController::class, 'index']);
Route::get('/produk/dior/detaildior/{produk}',[ProdukController::class, 'show']);
Route::get('/produk/wardah/wardah', [WardahController::class, 'index']);
Route::get('/produk/wardah/detailwardah/{wardah}',[WardahController::class, 'show']);
