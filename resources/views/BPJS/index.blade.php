@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary display-5">Sistem Registrasi BPJS</h1>
        <p class="text-muted fs-5">Daftar, cek status, dan kelola informasi peserta BPJS dengan cepat dan mudah.</p>
    </div>

    <div class="row justify-content-center g-4">
        <!-- Kartu Pendaftaran -->
        <div class="col-md-4">
            <div class="card border-0 shadow-lg rounded-4 h-100 hover-shadow transition-all">
                <div class="card-body text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                        <i class="bi bi-person-plus fs-1 text-success"></i>
                    </div>
                    <h4 class="fw-semibold mb-2">Pendaftaran Peserta</h4>
                    <p class="text-muted">Daftarkan diri Anda dan dapatkan nomor BPJS secara instan.</p>
                    <a href="{{ route('bpjs.show', ['mode' => 'daftar']) }}" class="btn btn-success w-100 fw-semibold">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Kartu Cek Nomor -->
        <div class="col-md-4">
            <div class="card border-0 shadow-lg rounded-4 h-100 hover-shadow transition-all">
                <div class="card-body text-center p-4">
                    <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                        <i class="bi bi-search fs-1 text-info"></i>
                    </div>
                    <h4 class="fw-semibold mb-2">Cek Nomor BPJS</h4>
                    <p class="text-muted">Masukkan ID untuk melihat status dan detail kepesertaan Anda.</p>
                    <a href="{{ route('bpjs.show', ['mode' => 'cek']) }}" class="btn btn-info w-100 fw-semibold">
                        Cek Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Kartu Upload Foto -->
        <div class="col-md-4">
            <div class="card border-0 shadow-lg rounded-4 h-100 hover-shadow transition-all">
                <div class="card-body text-center p-4">
                    <div class="bg-secondary bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">
                        <i class="bi bi-upload fs-1 text-secondary"></i>
                    </div>
                    <h4 class="fw-semibold mb-2">Upload Foto</h4>
                    <p class="text-muted">Unggah dokumen atau foto yang diperlukan untuk verifikasi.</p>
                    <a href="{{ route('bpjs.upload', ['mode' => 'cek']) }}" class="btn btn-secondary w-100 fw-semibold">
                        Upload Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
