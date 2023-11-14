@extends('layouts.main')

@section('container')
<h1>Skincare dengan merkuri</h1>
<table class="table">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Jenis</td>
      <td>Tanggal Rilis</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($produk as $key => $produk)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $produk->nama}}</td>
      <td>{{ $produk->jenis }}</td>
      <td>{{ $produk->tanggalrilis }}</td>
      <td>
        <a type="button" class="btn btn-primary" href="/produk/dior/detaildior/{{$produk->id}}">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
