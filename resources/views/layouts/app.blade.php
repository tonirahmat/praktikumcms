<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPJS System</title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(to right, #f0f4f8, #e2eafc);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(90deg, #1e3c72, #2a5298);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.4rem;
            color: #fff !important;
        }

        .nav-link {
            font-weight: 500;
            color: #f0f0f0 !important;
        }

        .nav-item:hover .nav-link {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            transition: all 0.2s ease-in-out;
        }

        .content-wrapper {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .card-custom {
            border-radius: 16px;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
            border: none;
            background: #ffffff;
        }

        footer {
            background:rgb(30, 114, 75);
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        .footer-text {
            font-size: 0.9rem;
            opacity: 0.7;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <div class="container content-wrapper">
        <div class="card card-custom p-4">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer>
        <div class="container">
            <div class="footer-text">
                &copy; {{ date('Y') }} BPJS System. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
