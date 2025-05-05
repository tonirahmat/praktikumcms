@extends('layouts.app')

@section('content')
    <a href="{{ route('index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    @if ($mode == 'daftar')
        <h2>Pendaftaran Pelanggan BPJS</h2>
        <form action="{{ route('bpjs.store') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label>No. Telepon</label>
                <input type="text" name="telepon" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Berat Badan (kg)</label>
                <input type="number" name="bb" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Tinggi Badan (cm)</label>
                <input type="number" name="tb" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Daftar</button>
        </form>

        @if(isset($pendaftar))
            <div class="alert alert-success mt-4">
                <h5>Pendaftaran Berhasil!</h5>
                <p>ID Pendaftar Anda: <strong>{{ $pendaftar->id }}</strong></p>
                <p>ID BPJS Anda: <strong>{{ $pendaftar->bpjs_id }}</strong></p>
            </div>
        @endif

    @elseif($mode == 'cek')
        <h2>Cek Nomor BPJS</h2>
        <form action="{{ route('bpjs.check') }}" method="GET">
            <div class="mb-2">
                <label>Masukkan ID Pendaftar</label>
                <input type="number" name="id_pendaftar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-info mt-2">Cek BPJS</button>
        </form>

        @if(isset($data))
            @if($data)
                <div class="mt-4">
                    <h5>Data Pendaftar</h5>
                    <ul class="list-group">
                        <li class="list-group-item">ID Pendaftar: {{ $data->id }}</li>
                        <li class="list-group-item">ID BPJS: {{ $data->bpjs_id }}</li>
                        <li class="list-group-item">Nama: {{ $data->nama }}</li>
                        <li class="list-group-item">Tanggal Lahir: {{ $data->tanggal_lahir }}</li>
                        <li class="list-group-item">Jenis Kelamin: {{ $data->jenis_kelamin }}</li>
                        <li class="list-group-item">No. Telepon: {{ $data->telepon }}</li>
                        <li class="list-group-item">Berat Badan: {{ $data->bb }} kg</li>
                        <li class="list-group-item">Tinggi Badan: {{ $data->tb }} cm</li>
                    </ul>
                </div>
            @else
                <div class="alert alert-danger mt-4">
                    Data tidak ditemukan.
                </div>
            @endif
        @endif
    @endif
@endsection
