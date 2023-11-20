@extends('layouts.main')

@section('container')
<h1>Edit Data Produk Kecantikan</h1>
<a href="/produk/wardah/wardah">Kembali</a>

<form action="/produk/wardah/update/{{ $wardah->id }}" method="POST" id="edit-form">
    @csrf
    @method('PUT')
    <!-- Tambahkan input fields untuk mengedit data siswa, contoh: -->
    {{-- <div class="form-group">
        <label for="nis">NO:</label>
        <input type="text" name="no" id="no" value="{{ $wardah->no }}" class="form-control">
    </div> --}}

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $wardah->nama }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Harga:</label>
        <input type="text" name="harga" id="harga" value="{{ $wardah->harga }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kelas">Expired:</label>
        <input type="text" name="expired" id="expired" value="{{ $wardah->expired }}" class="form-control">
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
