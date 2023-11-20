@extends('layouts.main')

@section('container')
<h1>Edit Data Produk</h1>
<a href="/produk/produkmerkuri/merkuri">Kembali</a>

<form action="/produk/produkmerkuri/update/{{ $produk->id }}" method="POST" id="edit-form">
    @csrf
    @method('PUT')
    <!-- Tambahkan input fields untuk mengedit data siswa, contoh: -->
    {{-- <div class="form-group">
        <label for="nis">NO:</label>
        <input type="text" name="no" id="no" value="{{ $wardah->no }}" class="form-control">
    </div> --}}

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $produk->nama }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Jenis:</label>
        <input type="text" name="jenis" id="jenis" value="{{ $produk->jenis }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Stok:</label>
        <input type="text" name="stok" id="stok" value="{{ $produk->stok }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Tanggal Rilis:</label>
        <input type="text" name="tanggalrilis" id="tanggalrilis" value="{{ $produk->tanggalrilis }}" class="form-control">
    </div>

    <!-- Tambahkan input fields untuk mengedit data lainnya -->

    <button type="button" class="btn btn-primary" onclick="confirmEdit()">Simpan Perubahan</button>
</form>

<script>
    function confirmEdit() {
        if (confirm('Anda yakin ingin menyimpan perubahan?')) {
            document.getElementById('edit-form').submit();
        }
    }
</script>
@endsection
