<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Clinic Management')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        /* Navbar Styling */
        .navbar {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0.75rem 1rem;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff !important;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #f8d210 !important;
        }
        .nav-link {
            font-size: 1rem;
            color: #ffffff !important;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease, background-color 0.3s ease;
        }
        .nav-link:hover {
            color: #f8d210 !important;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
        .nav-link.active {
            color: #f8d210 !important;
            font-weight: 600;
        }

        /* Logout Button */
        .btn-danger {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        /* Main Content */
        .main-content {
            padding: 4rem 0;
            min-height: calc(100vh - 56px); /* Adjust based on navbar height */
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .navbar-nav {
                padding-top: 1rem;
                text-align: center;
            }
            .nav-item {
                margin-bottom: 0.5rem;
            }
        }
        /* Container */
    .min-vh-100 {
        min-height: 100vh;
    }

    /* Card Styling */
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .card-body {
        padding: 2rem;
    }

    /* Typography */
    h3.text-primary {
        font-size: 1.75rem;
        letter-spacing: 0.5px;
    }
    .form-label {
        font-size: 0.95rem;
        margin-bottom: 0.4rem;
        color: #333;
    }

    /* Form Inputs */
    .form-control {
        border-radius: 8px;
        padding: 0.75rem 1rem;
        border: 1px solid #ced4da;
        box-shadow: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
    .form-control:invalid:focus {
        border-color: #dc3545;
    }

    /* Button */
    .btn-primary {
        border-radius: 8px;
        background-color: #007bff;
        border: none;
        padding: 0.75rem;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.03);
    }
    .hover-scale {
        transition: transform 0.2s ease;
    }
    .hover-scale:hover {
        transform: scale(1.03);
    }

    /* Alerts */
    .alert {
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 576px) {
        .card-body {
            padding: 1.5rem;
        }
        h3.text-primary {
            font-size: 1.5rem;
        }
    }
    /* Improved Form Styling */
    .form-control, .form-control:focus {
        border-radius: 8px;
        border: 1px solid #ced4da;
        box-shadow: none;
        transition: border-color 0.3s ease;
    }
    .form-control:focus {
        border-color: #007bff;
    }
    .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
    }
    .bg-light[readonly] {
        background-color: #f8f9fa !important;
        opacity: 0.9;
    }
    textarea.form-control {
        resize: vertical;
    }

    /* Card Styling */
    .card {
        border-radius: 12px;
        transition: transform 0.2s ease;
    }
    .card:hover {
        transform: translateY(-2px);
    }

    /* Button Styling */
    .btn-primary {
        border-radius: 8px;
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.02);
    }
    .hover-scale {
        transition: transform 0.2s ease;
    }
    .hover-scale:hover {
        transform: scale(1.02);
    }

    /* Alerts */
    .alert {
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Spacing and Typography */
    h2.text-primary {
        font-size: 1.75rem;
        letter-spacing: 0.5px;
    }
    h5.text-muted {
        font-size: 1.1rem;
        font-weight: 500;
    }
    .text-dark {
        color: #333 !important;
    }
    <style>
    /* General Styling */
    .container {
        max-width: 1200px;
    }

    /* Header */
    h1.text-primary {
        font-size: 2rem;
        letter-spacing: 0.5px;
    }
    .badge {
        font-size: 1rem;
        padding: 0.5em 1em;
    }

    /* Search Form */
    .input-group {
        border-radius: 10px;
        overflow: hidden;
    }
    .input-group .form-control {
        border-right: none;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        box-shadow: none;
        transition: border-color 0.3s ease;
    }
    .input-group .form-control:focus {
        border-color: #007bff;
    }
    .input-group .btn-primary {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        padding: 0.75rem 1.5rem;
    }

    /* Card Styling */
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }
    .card-title {
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }
    .card-text {
        font-size: 0.95rem;
        color: #555;
    }
    .card-text strong {
        color: #333;
    }
    .card-footer {
        padding: 0 1.25rem 1.25rem;
    }

    /* Buttons */
    .btn {
        border-radius: 8px;
        padding: 0.5rem 1rem;
        transition: transform 0.2s ease, background-color 0.3s ease;
    }
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .hover-scale:hover {
        transform: scale(1.03);
    }

    /* Alerts */
    .alert {
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Empty State */
    .text-muted.fs-5 {
        font-size: 1.25rem;
    }
    /* Container */
    .min-vh-100 {
        min-height: 100vh;
    }

    /* Alert Styling */
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }
    .alert-success:hover {
        transform: translateY(-5px);
    }

    /* Typography */
    h1.text-success {
        font-size: 2.5rem;
        letter-spacing: 0.5px;
        line-height: 1.2;
    }
    .fs-5 {
        font-size: 1.25rem;
        color: #555;
    }
    .fw-semibold {
        font-weight: 600;
    }

    /* Button */
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 0.75rem 2rem;
        font-size: 1.1rem;
        font-weight: 500;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }
    .btn-lg.rounded-pill {
        border-radius: 50rem;
    }
    .hover-scale {
        transition: transform 0.2s ease;
    }
    .hover-scale:hover {
        transform: scale(1.05);
    }

    /* Animation */
    .animate-pop {
        animation: pop 0.5s ease-out;
    }
    @keyframes pop {
        0% { transform: scale(0.9); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    /* Responsive Adjustments */
    @media (max-width: 576px) {
        .alert-success {
            padding: 2rem;
        }
        h1.text-success {
            font-size: 2rem;
        }
        .fs-5 {
            font-size: 1.1rem;
        }
        .btn-lg {
            padding: 0.6rem 1.5rem;
            font-size: 1rem;
        }
    }
  </style>
</head>

<body>
    <!-- Navbar: Show only if authenticated as doctor and on admin route -->
    @if (Auth::check() && auth()->user()->role === 'doctor' && Str::startsWith(request()->route()->getName(), 'admin.'))
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-hospital me-2"></i>Clinic System
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                               href="{{ route('admin.dashboard') }}">Patients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.calendar') ? 'active' : '' }}"
                               href="{{ route('admin.calendar') }}">Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.messages') ? 'active' : '' }}"
                               href="{{ route('admin.messages') }}">Feedbacks</a>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif

    <!-- Main Content -->
    <div class="container main-content mt-5">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @if (Str::startsWith(request()->route()->getName(), 'admin.'))
        <script>
            window.addEventListener('pageshow', function(event) {
                if (event.persisted) {
                    window.location.reload();
                }
            });
        </script>
    @endif
    {{-- <script>
    setTimeout(() => window.location.href = "{{ route('home') }}", 8000);
    </script> --}}
</body>

</html>
