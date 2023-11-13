<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    { 
        return view('produk.dior.dior', [
            "title" => "produk",
            "produk" => Produk::all()
        ]);
    }

    public function show($produk)
    {
        return view('produk.dior.detaildior',[
            "title" => "detail-dior",
            "produk" => Produk::find($produk)
        ]);
    }
}
