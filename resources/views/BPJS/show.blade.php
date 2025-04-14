<!DOCTYPE html>
<html>
<head>
    <title>Detail BPJS</title>
</head>
<body>
    <h1>{{ $data['title'] }}</h1>

    @if($data['title'] === 'pendaftaran BPJS')
        <form method="POST" action="{{ url('/BPJSs/register') }}">
            @csrf
            <label>Nama:</label><br>
            <input type="text" name="nama" required><br><br>

            <label>Alamat:</label><br>
            <input type="text" name="alamat" required><br><br>

            <label>Nomor Telepon:</label><br>
            <input type="text" name="telepon" required><br><br>

            <button type="submit">Daftar</button>
        </form>
    @elseif($data['title'] === 'ambil antrian')
        <form method="POST" action="{{ url('/BPJSs/antrian') }}">
            @csrf
            <label>Nama:</label><br>
            <input type="text" name="nama" required><br><br>

            <button type="submit">Ambil Antrian</button>
        </form>
    @endif

    <br>
    <a href="{{ url('/BPJSs') }}">← Kembali ke daftar</a>
</body>
</html>
