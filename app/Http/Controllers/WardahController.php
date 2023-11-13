<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wardah;

class WardahController extends Controller
{
    public function index()
    { 
        return view('produk.wardah.wardah', [
            "title" => "wardah",
            "wardah" => Wardah::all()
        ]);
    }

    public function show($wardah)
    {
        return view('produk.wardah.detailwardah',[
            "title" => "detail-wardah",
            "wardah" => Wardah::find($wardah)
        ]);
    }
}
