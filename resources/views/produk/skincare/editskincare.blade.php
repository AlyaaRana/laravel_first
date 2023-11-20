@extends('layouts.main')

@section('container')
<h1>Edit Data Produk</h1>
<a href="/produk/skincare/skincare">Kembali</a>

<form action="/produk/skincare/update/{{ $skincaree->id }}" method="POST" id="edit-form">
    @csrf
    @method('PUT')
    <!-- Tambahkan input fields untuk mengedit data siswa, contoh: -->
    {{-- <div class="form-group">
        <label for="nis">NO:</label>
        <input type="text" name="no" id="no" value="{{ $wardah->no }}" class="form-control">
    </div> --}}

    <div class="form-group">
        <label for="kelas">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $skincaree->nama }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Harga:</label>
        <input type="text" name="harga" id="harga" value="{{ $skincaree->harga }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Tanggal Produksi:</label>
        <input type="text" name="tanggalproduksi" id="tanggalproduksi" value="{{ $skincaree->tanggalproduksi }}" class="form-control">
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
