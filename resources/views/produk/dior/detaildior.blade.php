@extends('layouts.main')

@section('container')
<a href="/produk/dior/dior">back</a>

<table class="table">
    <tr>
        <th>NO</th>
        <td>{{ $produk->id }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $produk->nama }}</td>
    </tr>
    <tr>
        <th>JENIS</th>
        <td>{{ $produk->jenis }}</td>
    </tr>
    <tr>
        <th>HARGA</th>
        <td>{{ $produk->harga }}</td>
    </tr>
</table>


@endsection