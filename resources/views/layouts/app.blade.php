<!DOCTYPE html>
<html>
<head>
    <title>BPJS System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.4rem;
        }
        .nav-link {
            font-weight: 500;
        }
        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <i class="bi bi-shield-plus"></i> BPJS System
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bpjs.show', ['mode' => 'daftar']) }}">
                            <i class="bi bi-person-plus"></i> Pendaftaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bpjs.show', ['mode' => 'cek']) }}">
                            <i class="bi bi-search"></i> Cek BPJS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bpjs.upload', ['mode' => 'cek']) }}">
                            <i class="bi bi-upload"></i> Upload Foto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container py-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
