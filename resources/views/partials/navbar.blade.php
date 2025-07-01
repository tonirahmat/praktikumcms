@if(Auth::check())
<nav class="navbar navbar-expand-lg shadow-sm" style="background: linear-gradient(90deg, #2ecc71, rgb(30, 114, 75));">
    <div class="container">
        <!-- Logo / Brand -->
        <a class="navbar-brand d-flex align-items-center text-white" href="{{ route('index') }}">
            <i class="bi bi-shield-plus me-2"></i>
            <span class="fw-bold">BPJS System</span>
        </a>

        <!-- Toggle Button (Mobile) -->
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side User Info -->
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item me-3 text-white text-end">
                <div class="fw-semibold">{{ Auth::user()->name }}</div>
                <div class="small d-none d-md-block">Hello, {{ Auth::user()->email }}</div>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-light btn-sm" type="submit">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
@endif
