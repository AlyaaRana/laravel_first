@extends('layouts.main')

@section('container')
<h1>Ini adalah halaman produk</h1>
<table class="table">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Jenis</td>
      <td>Harga</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($wardah as $key => $wardah)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $wardah->nama}}</td>
      <td>{{ $wardah->jenis }}</td>
      <td>{{ $wardah->harga }}</td>
      <td>
        <a type="button" class="btn btn-primary" href="/produk/wardah/detailwardah/{{$wardah->id}}">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
