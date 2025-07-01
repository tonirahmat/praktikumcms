@extends('layouts.app')

@section('content')
<style>
    .card-upgrade {
        border: none;
        border-radius: 20px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(to bottom right, #ffffff, #f1fdf6);
    }

    .card-upgrade:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 32px rgba(0, 0, 0, 0.12);
    }

    .icon-circle {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        border-radius: 50%;
        margin-bottom: 1rem;
    }

    .btn-upgrade {
        font-weight: 600;
        border-radius: 12px;
        padding: 10px 16px;
        font-size: 16px;
        transition: 0.2s ease-in-out;
    }

    .btn-upgrade:hover {
        transform: scale(1.02);
    }

    .section-title {
        color: #198754;
    }

    .text-muted {
        color: #6c757d !important;
    }
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold section-title display-5">🛡️ Sistem Registrasi BPJS</h1>
        <p class="text-muted fs-5">Kelola data peserta BPJS Anda secara aman dan efisien.</p>
    </div>

    <div class="row justify-content-center g-4">
        <!-- Pendaftaran -->
        <div class="col-md-4">
            <div class="card card-upgrade h-100 text-center p-4">
                <div class="icon-circle" style="background-color: rgba(25, 135, 84, 0.1);">
                    <i class="bi bi-person-plus text-success fs-1"></i>
                </div>
                <h4 class="fw-bold mb-2">Pendaftaran Peserta</h4>
                <p class="text-muted">Daftarkan peserta baru dengan cepat dan praktis.</p>
                <a href="{{ route('bpjs.show', ['mode' => 'daftar']) }}" class="btn btn-success btn-upgrade w-100">
                    Daftar Sekarang
                </a>
            </div>
        </div>

        <!-- Cek Nomor -->
        <div class="col-md-4">
            <div class="card card-upgrade h-100 text-center p-4">
                <div class="icon-circle" style="background-color: rgba(13, 202, 240, 0.1);">
                    <i class="bi bi-search text-primary fs-1"></i>
                </div>
                <h4 class="fw-bold mb-2">Cek Nomor BPJS</h4>
                <p class="text-muted">Periksa status dan informasi peserta Anda.</p>
                <a href="{{ route('bpjs.show', ['mode' => 'cek']) }}" class="btn btn-primary btn-upgrade w-100">
                    Cek Sekarang
                </a>
            </div>
        </div>

        <!-- Upload Foto -->
        <div class="col-md-4">
            <div class="card card-upgrade h-100 text-center p-4">
                <div class="icon-circle" style="background-color: rgba(108, 117, 125, 0.1);">
                    <i class="bi bi-upload text-secondary fs-1"></i>
                </div>
                <h4 class="fw-bold mb-2">Upload Foto</h4>
                <p class="text-muted">Unggah dokumen atau foto yang dibutuhkan untuk validasi data.</p>
                <a href="{{ route('bpjs.upload', ['mode' => 'cek']) }}" class="btn btn-secondary btn-upgrade w-100">
                    Upload Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
