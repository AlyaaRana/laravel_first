@extends('layouts.main')

@section('container')
    <h1>Add Produk</h1>
    <form action="/produk/wardah/store" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ isset($wardah) ? $wardah->nama : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="jenis">Harga:</label>
            <input type="text" name="harga" id="harga" value="{{ isset($wardah) ? $wardah->harga : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="stok">Expired:</label>
            <input type="text" name="expired" id="expired" value="{{ isset($wardah) ? $wardah->expired : '' }}" class="form-control">
        </div>
    

        <button type="submit" class="btn btn-primary">Add Produk</button>
    </form>
@endsection
