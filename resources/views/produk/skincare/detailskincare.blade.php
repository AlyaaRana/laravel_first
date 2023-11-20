@extends('layouts.main')

@section('container')
<a href="/produk/skincare/skincare">back</a>

<table class="table">
    <tr>
        <th>NO</th>
        <td>{{ $skincaree->id }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $skincaree->nama }}</td>
    </tr>
    <tr>
        <th>HARGA</th>
        <td>{{ $skincaree->harga }}</td>
    </tr>
    <tr>
        <th>TANGGAL PRODUKSI</th>
        <td>{{ $skincaree->tanggalproduksi }}</td>
    </tr>
</table>


@endsection