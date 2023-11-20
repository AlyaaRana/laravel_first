@extends('layouts.main')

@section('container')
    <h1>Add Produk</h1>
    <form action="/produk/skincare/store" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ isset($skincaree) ? $skincaree->nama : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="jenis">Harga:</label>
            <input type="text" name="harga" id="harga" value="{{ isset($skincaree) ? $skincaree->harga : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="stok">Tanggal Produksi:</label>
            <input type="text" name="tanggalproduksi" id="tanggalproduksi" value="{{ isset($skincaree) ? $skincaree->tanggalproduksi : '' }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Produk</button>
    </form>
@endsection
