@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Konfirmasi Penghapusan</h1>
    <p>Anda yakin ingin menghapus data produk ini?</p>
    <button onclick="hapus()">Ya</button>
    <button onclick="batal()">Tidak</button>

    <script>
        function hapus() {
            window.location.href = '/produk/skincare/deleteskincare{{$skincare->id}}';
        }

        function batal() {
            window.location.href = '/produk/skincare/skincare';
        }
    </script>
</body>
</html>
@endsection