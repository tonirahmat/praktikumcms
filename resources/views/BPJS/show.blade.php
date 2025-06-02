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


    @elseif($mode == 'cek')
        <h2>Cek Nomor BPJS</h2>
        <form action="{{ route('bpjs.check') }}" method="GET">
            <div class="mb-2">
                <label>Masukkan ID Pendaftar</label>
                <input type="number" name="id_pendaftar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-info mt-2">Cek BPJS</button>
        </form>
    @endif
@endsection
