<!DOCTYPE html>
<html>
<head>
    <title>Hasil {{ $jenis }}</title>
</head>
<body>
    <h1>Hasil {{ ucfirst($jenis) }}</h1>

    @if($jenis === 'pendaftaran')
        <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
        <p><strong>Alamat:</strong> {{ $data['alamat'] }}</p>
        <p><strong>Nomor Telepon:</strong> {{ $data['telepon'] }}</p>
        <p style="color: green;"><strong>Status:</strong> Pendaftaran BPJS berhasil!</p>

    @elseif($jenis === 'antrian')
        <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
        <p><strong>Nomor Antrian:</strong> {{ $data['nomor_antrian'] }}</p>
        <p style="color: green;"><strong>Status:</strong> Anda berhasil mengambil antrian.</p>
    @endif

    <br>
    <a href="{{ url('/BPJSs') }}">← Kembali ke daftar</a>
</body>
</html>
