<!DOCTYPE html>
<html>
<head>
    <title>Hasil {{ $jenis }}</title>
</head>
<body>
@extends('app')

@section('content')
<h2>Pendaftaran BPJS Berhasil</h2>
<p>ID Customer: {{ $id }}</p>
<p>Nama: {{ $nama }}</p>
@endsection

</body>
</html>
