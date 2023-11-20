@extends('layouts.main')

@section('container')
<h1>Skincare dengan merkuri</h1>
<a href="/produk/produkmerkuri/create" class="btn btn-success">Add Product</a>
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
        <a type="button" class="btn btn-primary" href="/produk/produkmerkuri/detail/{{$produk->id}}">Detail</a>
        <a type="button" class="btn btn-warning" href="/produk/produkmerkuri/edit/{{$produk->id}}">Edit</a>
        <a type="button" class="btn btn-danger" href="javascript:void(0);" onclick="konfirmasiHapus({{ $produk->id }})">Delete</a>
        <script>
          function konfirmasiHapus(wardahId) {
              if (confirm('Anda yakin ingin menghapus data produk ini?')) {
                  window.location.href = '/produk/produkmerkuri/delet/' + wardahId;
              }
          }
        </script>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
