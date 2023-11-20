@extends('layouts.main')

@section('container')
    <h1>Add Produk</h1>
    <form action="/produk/produkmerkuri/store" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ isset($produk) ? $produk->nama : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="jenis">Jenis:</label>
            <input type="text" name="jenis" id="jenis" value="{{ isset($produk) ? $produk->jenis : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="text" name="stok" id="stok" value="{{ isset($produk) ? $produk->stok : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="tanggalrilis">Tanggal Rilis:</label>
            <input type="text" name="tanggalrilis" id="tanggalrilis" value="{{ isset($produk) ? $produk->tanggalrilis : '' }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Produk</button>
    </form>
@endsection
