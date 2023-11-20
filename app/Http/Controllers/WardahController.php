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

    public function destroy($wardah)
    {
        $wardah = Wardah::find($wardah);
        if ($wardah) {
        $wardah->delete();
        return redirect('/produk/wardah/wardah')->with('success', 'Data siswa berhasil dihapus.');
        } else {
        return redirect('/produk/wardah/wardah')->with('error', 'Siswa tidak ditemukan.');
        }
    }

    public function edit($wardah)
    {
        return view('produk.wardah.editwardah',[
            "title" => "edit-wardah",
            "wardah" => Wardah::find($wardah)
        ]);
    }

    public function update(Request $request, $wardah)
    {
        $wardah = Wardah::find($wardah);

        if ($wardah) {
        $wardah->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'expired' => $request->expired,
        ]);

        return redirect('/produk/wardah/wardah')->with('success', 'Data produk berhasil diperbarui.');
    } else {
        return redirect('/produk/wardah/wardah')->with('error', 'Produk tidak ditemukan.');
    }
    }

    public function create()
    {
        return view('produk.wardah.addwardah', [
            'title' => 'Add Produk',
            'wardah' => new Wardah(), 
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'expired' => 'required',
        ]);
    
        $wardah = new Wardah(); 
        $wardah->nama = $validatedData['nama'];
        $wardah->harga = $validatedData['harga'];
        $wardah->expired = $validatedData['expired'];
    
    
        $wardah->save();
    
        return redirect('/produk/wardah/wardah')->with('success', 'Produk added successfully');
    }

}
