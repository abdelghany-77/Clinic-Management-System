<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Clinic Management')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    /* Navbar Styling */
    .navbar {
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 22px;
      font-weight: bold;
      color: #ffffff !important;
    }

    /* Logout Button */
    .btn-danger {
      font-size: 14px;
      padding: 6px 12px;
      transition: all 0.3s ease-in-out;
    }

    .btn-danger:hover {
      background-color: #bb2d3b;
    }

    /* Page Container */
    .main-content {
      padding: 40px 0;
    }

    /* Smooth Hover Effects */
    a.nav-link {
      transition: all 0.3s ease-in-out;
    }

    a.nav-link:hover {
      color: #f8d210 !important;
    }
  </style>
</head>

<body>
  <!-- Show Navbar Only If Admin Is Logged In AND It's an Admin Page -->
  @if (Auth::check() && auth()->user()->role === 'doctor' && Str::startsWith(request()->route()->getName(), 'admin.'))
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-hospital"></i> Clinic System
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.messages') }}">Feedbacks</a></li>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>
