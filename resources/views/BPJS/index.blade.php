@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Sistem Registrasi BPJS</h1>
        <p class="text-muted">Layanan pendaftaran dan pengecekan nomor BPJS dengan mudah dan cepat.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <div class="card shadow rounded-4 border-0 h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-person-plus display-4 text-success mb-3"></i>
                    <h4 class="card-title mb-3">Pendaftaran Pelanggan BPJS</h4>
                    <p class="card-text text-muted">Daftarkan diri Anda untuk mendapatkan nomor peserta BPJS.</p>
                    <a href="{{ route('bpjs.show', ['mode' => 'daftar']) }}" class="btn btn-success btn-lg w-100">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 mb-4">
            <div class="card shadow rounded-4 border-0 h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-search display-4 text-info mb-3"></i>
                    <h4 class="card-title mb-3">Cek Nomor BPJS</h4>
                    <p class="card-text text-muted">Cari dan lihat informasi berdasarkan ID Pendaftar Anda.</p>
                    <a href="{{ route('bpjs.show', ['mode' => 'cek']) }}" class="btn btn-info btn-lg w-100">Cek Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 mb-4">
            <div class="card shadow rounded-4 border-0 h-100">
                <div class="card-body text-center p-4">
                    <h4 class="card-title mb-3">Upload Foto</h4>
                    <a href="{{ route('bpjs.upload', ['mode' => 'cek']) }}" class="btn btn-info btn-lg w-100">Cek Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
