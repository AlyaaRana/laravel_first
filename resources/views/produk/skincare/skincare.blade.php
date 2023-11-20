@extends('layouts.main')

@section('container')
<h1>Ini adalah halaman produk skincare terbaik untuk wajah kamu</h1>
{{-- <a href="/produk/wardah/addwardah" class="btn btn-success">Add Product</a> --}}
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
    @foreach ($skincaree as $key => $skincare)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $skincare->nama}}</td>
      <td>{{ $skincare->harga }} </td>
      <td>{{ $skincare->tanggalproduksi }} </td>
      {{-- <td>
        <a type="button" class="btn btn-primary" href="/produk/wardah/detailwardah/{{$wardah->id}}">Detail</a>
        <a type="button" class="btn btn-warning" href="/produk/wardah/editwardah/{{$wardah->id}}" >Edit</a>
        <a type="button" class="btn btn-danger" href="javascript:void(0);" onclick="konfirmasiHapus({{ $wardah->id }})">Delete</a>
        <script>
          function konfirmasiHapus(wardahId) {
              if (confirm('Anda yakin ingin menghapus data produk ini?')) {
                  window.location.href = '/produk/wardah/deletewardah/' + wardahId;
              }
          }
        </script>
      </td> --}}
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
