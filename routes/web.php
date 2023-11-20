<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Http\Controllers\WardahController;
use App\Models\Wardah;
use App\Http\Controllers\SkincareController;
use App\Models\Skincare;

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


//produk merkuri
Route::get('/produk/produkmerkuri/merkuri', [ProdukController::class, 'index']);
Route::get('/produk/produkmerkuri/detail/{produk}',[ProdukController::class, 'show']);
Route::get('/produk/produkmerkuri/delete/{produk}', [ProdukController::class, 'destroy']);
Route::get('/produk/produkmerkuri/edit/{produk}', [ProdukController::class, 'edit']);
Route::put('/produk/produkmerkuri/update/{produk}', [ProdukController::class, 'update']);
Route::get('/produk/produkmerkuri/create', [ProdukController::class, 'create']);
Route::post('/produk/produkmerkuri/store', [ProdukController::class, 'store']);


//wardah
Route::get('/produk/wardah/wardah', [WardahController::class, 'index']);
Route::get('/produk/wardah/detailwardah/{wardah}',[WardahController::class, 'show']);
Route::get('/produk/wardah/deletewardah/{wardah}', [WardahController::class, 'destroy']);
Route::get('/produk/wardah/editwardah/{wardah}', [WardahController::class, 'edit']);
Route::put('/produk/wardah/update/{wardah}', [WardahController::class, 'update']);
Route::get('/produk/wardah/addwardah', [WardahController::class, 'create']);
Route::post('/produk/wardah/store', [WardahController::class, 'store']);

//produk skincares
Route::get('/produk/skincare/skincare', [SkincareController::class, 'index']);
Route::get('/produk/skincare/detailskincare/{skincare}',[SkincareController::class, 'show']);
Route::get('/produk/skincare/deleteskincare/{skincare}', [SkincareController::class, 'destroy']);
Route::get('/produk/skincare/editskincare/{skincare}', [SkincareController::class, 'edit']);
Route::put('/produk/skincare/update/{skincare}', [SkincareController::class, 'update']);
Route::get('/produk/skincare/addskincare', [SkincareController::class, 'create']);
Route::post('/produk/skincare/store', [SkincareController::class, 'store']);