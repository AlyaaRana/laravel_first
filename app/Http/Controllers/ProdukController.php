<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    { 
        return view('produk.produkmerkuri.merkuri', [
            "title" => "produk",
            "produk" => Produk::all()
        ]);
    }

    public function show($produk)
    {
        return view('produk.produkmerkuri.edit',[
            "title" => "detail-dior",
            "produk" => Produk::find($produk)
        ]);
    }

    public function destroy($produk)
    {
        $produk = Produk::find($produk);
        if ($produk) {
        $produk->delete();
        return redirect('/produk/produkmerkuri/merkuri')->with('success', 'Data produk berhasil dihapus.');
        } else {
        return redirect('/produk/produkmerkuri/merkuri')->with('error', 'Data produk tidak ditemukan.');
        }
    }

    public function edit($produk)
    {
        return view('produk.produkmerkuri.edit',[
            "title" => "edit-produk",
            "produk" => Produk::find($produk)
        ]);
    }

    public function update(Request $request, $produk)
    {
        $produk = Produk::find($produk);

        if ($produk) {
        $produk->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'tanggalrilis' => $request->tanggalrilis,
            // Add other fields as needed
        ]);

        return redirect('/produk/produkmerkuri/merkuri')->with('success', 'Data produk berhasil diperbarui.');
    } else {
        return redirect('/produk/produkmerkuri/merkuri')->with('error', 'Produk tidak ditemukan.');
    }
    }

    public function create()
    {
        return view('produk.produkmerkuri.create', [
            'title' => 'Add Produk',
            'produk' => new Produk(), 
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'tanggalrilis' => 'required',
        ]);
    
        $produk = new Produk(); 
        $produk->nama = $validatedData['nama'];
        $produk->jenis = $validatedData['jenis'];
        $produk->stok = $validatedData['stok'];
        $produk->tanggalrilis = $validatedData['tanggalrilis'];
    
        $produk->save();
    
        return redirect('/produk/produkmerkuri/merkuri')->with('success', 'Produk added successfully');
    }
}
