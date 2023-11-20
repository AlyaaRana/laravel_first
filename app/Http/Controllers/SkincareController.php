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

    public function show($skincaree)
    {
        return view('produk.skincare.editskincare',[
            "title" => "detail-skincare",
            "skincaree" => Skincare::find($skincaree)
        ]);
    }

    public function destroy($skincaree)
    {
        $skincaree = Skincare::find($skincaree);
        if ($skincaree) {
        $skincaree->delete();
        return redirect('/produk/skincare/skincare')->with('success', 'Data produk berhasil dihapus.');
        } else {
        return redirect('/produk/skincare/skincare')->with('error', 'Data produk tidak ditemukan.');
        }
    }

    public function edit($skincaree)
    {
        return view('produk.skincare.editskincare',[
            "title" => "edit-skincare",
            "skincaree" => Skincare::find($skincaree)
        ]);
    }

    public function update(Request $request, $skincaree)
    {
        $skincaree = Skincare::find($skincaree);

        if ($skincaree) {
        $skincaree->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'tanggalrilis' => $request->tanggalrilis,
            // Add other fields as needed
        ]);

        return redirect('/produk/skincare/skincare')->with('success', 'Data produk berhasil diperbarui.');
    } else {
        return redirect('/produk/skincare/skincare')->with('error', 'Produk tidak ditemukan.');
    }
    }

    public function create()
    {
        return view('produk.skincare.addskincare', [
            'title' => 'Add Skincare',
            'skincaree' => new Skincare(), 
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggalproduksi' => 'required',
        ]);
    
        $skincaree = new Skincare(); 
        $skincaree->nama = $validatedData['nama'];
        $skincaree->harga = $validatedData['harga'];
        $skincaree->tanggalproduksi = $validatedData['tanggalproduksi'];
    
        $skincaree->save();
    
        return redirect('/produk/produkmerkuri/merkuri')->with('success', 'Produk added successfully');
    }
}
