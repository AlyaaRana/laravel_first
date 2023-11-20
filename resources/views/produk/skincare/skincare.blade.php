@extends('layouts.main')

@section('container')
<h1>Ini adalah halaman produk skincare terbaik untuk wajah kamu</h1>
<a href="/produk/skincare/addskincare" class="btn btn-success">Add Product</a>
<table class="table">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Harga</td>
      <td>Tanggal Produksi</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($skincaree as $key => $skincaree)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $skincaree->nama}}</td>
      <td>{{ $skincaree->harga }} </td>
      <td>{{ $skincaree->tanggalproduksi }} </td>
      <td>
        <a type="button" class="btn btn-primary" href="/produk/skincare/detailskincare/{{$skincaree->id}}">Detail</a>
        <a type="button" class="btn btn-warning" href="/produk/skincare/editskincare/{{$skincaree->id}}" >Edit</a>
        <a type="button" class="btn btn-danger" href="javascript:void(0);" onclick="konfirmasiHapus({{ $skincaree->id }})">Delete</a>
        <script>
          function konfirmasiHapus(wardahId) {
              if (confirm('Anda yakin ingin menghapus data produk ini?')) {
                  window.location.href = '/produk/wardah/deleteskincare/' + skincareeId;
              }
          }
        </script>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
