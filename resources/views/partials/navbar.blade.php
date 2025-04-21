<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        {{-- Grup kiri: BPJS dan Home --}}
        <div class="d-flex align-items-center">
            <a class="navbar-brand me-3" href="#">BPJS</a>
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
            </ul>
        </div>

        {{-- Toggle tombol jika ada menu tambahan nanti --}}
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
