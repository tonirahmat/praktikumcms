@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2>Cek Nomor BPJS</h2>

    {{-- Notifikasi Sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Notifikasi Error --}}
    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    {{-- Form Cek --}}
    <form action="{{ route('bpjs.cek') }}" method="GET">
        <div class="mb-3">
            <label>Masukkan ID Pendaftar</label>
            <input type="number" name="id_pendaftar" class="form-control" required value="{{ old('id_pendaftar') }}">
        </div>
        <button type="submit" class="btn btn-info">Cek BPJS</button>
    </form>

    {{-- Jika data ditemukan --}}
    @isset($data)
    <div class="card shadow mt-4">
        <div class="card-header bg-success text-white">
            <h4>Detail Anggota BPJS</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th class="text-primary">ID BPJS</th>
                    <td class="text-primary fw-bold">{{ $data->bpjs_id }}</td>
                </tr>
                <tr><th>Nama</th><td>{{ $data->nama }}</td></tr>
                <tr><th>Tanggal Lahir</th><td>{{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d-m-Y') }}</td></tr>
                <tr><th>Jenis Kelamin</th><td>{{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td></tr>
                <tr><th>Telepon</th><td>{{ $data->telepon }}</td></tr>
                <tr><th>Berat Badan</th><td>{{ $data->bb }} kg</td></tr>
                <tr><th>Tinggi Badan</th><td>{{ $data->tb }} cm</td></tr>
            </table>

            {{-- Tombol Hapus --}}
            <div class="text-end mt-3">
               <form action="{{ route('bpjs.destroy', $data->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash"></i> Hapus Data
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endisset

    <a href="{{ route('index') }}" class="btn btn-secondary mt-4">Kembali ke Menu Utama</a>

</div>
@endsection
