@extends('layouts.main')

@section('container')
<a href="/produk/dior/dior">back</a>

<table class="table">
    <tr>
        <th>NO</th>
        <td>{{ $wardah->id }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $wardah->nama }}</td>
    </tr>
    <tr>
        <th>HARGA</th>
        <td>{{ $wardah->harga }}</td>
    </tr>
    <tr>
        <th>EXPIRED</th>
        <td>{{ $wardah->expired }}</td>
    </tr>
</table>


@endsection