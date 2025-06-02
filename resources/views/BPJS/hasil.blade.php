@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 540px;">
    @if(request()->has('id_pendaftar'))
        {{-- Tampilkan hasil cek BPJS --}}
        <div class="card shadow-sm border-0 rounded">
            <div class="card-header bg-info text-white text-center">
                <h3>Hasil Cek Nomor BPJS</h3>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('images/bpjs-logo.png') }}" alt="Logo BPJS" style="width: 120px; margin-bottom: 20px;">
                
                <h5 class="mb-3 fw-bold">Nomor BPJS Anda:</h5>
                <p class="fs-4 text-primary">{{ request('id_pendaftar') }}</p>
                
                <p class="mt-4">
                    <small class="text-muted">
                        *Nomor BPJS di atas adalah hasil input dari ID pendaftar yang Anda masukkan. Pastikan nomor ini sesuai dengan data Anda.
                    </small>
                </p>
                
                <a href="{{ route('bpjs.hasil') }}" class="btn btn-outline-info mt-3">Cek Nomor Lain</a>
            </div>
        </div>

    @else
        {{-- Tampilkan form cek nomor BPJS --}}
        <h2 class="mb-4 text-center text-primary">Cek Nomor BPJS</h2>
        <form action="{{ route('bpjs.hasil') }}" method="GET" class="border p-4 rounded shadow-sm bg-light">
            <div class="mb-3">
                <label for="id_pendaftar" class="form-label fw-semibold">Masukkan ID Pendaftar</label>
                <input 
                    type="number" 
                    name="id_pendaftar" 
                    id="id_pendaftar" 
                    class="form-control" 
                    placeholder="Contoh: 1234567890" 
                    required
                >
            </div>
            <button type="submit" class="btn btn-info w-100">Cek BPJS</button>
        </form>
    @endif
</div>
@endsection
