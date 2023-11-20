<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skincare;

class SkincareController extends Controller
{
    public function index()
    { 
        return view('produk.skincare.skincare', [
            "title" => "skincaree",
            "skincaree" => Skincare::all()
        ]);
    }
}
