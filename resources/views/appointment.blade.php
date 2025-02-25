<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title', 'DentCare - Dental Clinic')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <!-- Favicon -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon" />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" />
  <link
    href="{{ asset('https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap') }}"
    rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
    rel="stylesheet" />
  <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
    rel="stylesheet" />
  <!-- Libraries Stylesheet -->
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('lib/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary m-1" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-dark m-1" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary m-1" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
  <div class="container-fluid bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
      <div class="col-md-6 text-center text-lg-start">
        <small class="py-2 d-inline-flex align-items-center">
          <i class="far fa-clock text-primary me-2"></i>
          <strong>Opening Hours: </strong> Sat - Thu: 6:00 AM - 11:00 PM | <span class="text-danger">Friday
            Closed</span>
        </small>
      </div>
      <div class="col-md-6 text-center text-lg-end">
        <div class="d-inline-flex align-items-center bg-primary text-white rounded px-4 py-2">
          <div class="me-3 pe-3 border-end">
            <i class="fa fa-envelope-open me-2"></i>
            <a href="mailto:dentcare@gmail.com" class="text-white">dentcare@gmail.com</a>
          </div>
          <div>
            <i class="fa fa-phone-alt me-2"></i>
            <a href="tel:+0123456789" class="text-white">+012 345 6789</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3">
    <a href="#" class="navbar-brand d-flex align-items-center">
      <h1 class="m-0 text-primary">
        <i class="fa fa-tooth me-2"></i> SmileCare
      </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto">
        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
        <a href="#contact" class="nav-item nav-link">Contact Us</a>
      </div>
      <a href="{{ route('appointment') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3">Book Appointment</a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Appointment Start -->
  <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
    style="margin-top: 90px;">
    <div class="row py-3">
      <div class="col-12 text-center">
        <h1 class="display-3 text-white animated zoomIn">Book An Appointment</h1>
      </div>
    </div>
    <div class="container">
      <div class="row gx-5 justify-content-lg-center">
        <div class="col-lg-8 m-lg-5">
          <div
            class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn shadow-lg rounded bg-light"
            data-wow-delay="0.6s">
            <h1 class="text-primary mb-4">Please Fill This Form</h1>

            <!-- Validation Errors -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <!-- Success Message -->
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif

            <form action="{{ route('appointment.store') }}" method="POST"
              onsubmit="return validateAppointmentTime();">
              @csrf
              <div class="row g-3">
                <div class="col-12 col-sm-6">
                  <input type="text" name="name" class="form-control border-0 px-4 py-3" placeholder="Your Name"
                    required style="height: 55px;" pattern="^[A-Za-z\s]+$" title="Only letters allowed">
                </div>
                <div class="col-12 col-sm-6">
                  <input type="tel" name="phone" class="form-control border-0 px-4 py-3"
                    placeholder="Your Phone Number" required style="height: 55px;"
                    pattern="^(010|011|012|015)[0-9]{8}$"
                    title="Enter a valid Egyptian phone number (e.g., 01012345678)">
                </div>
                <div class="col-12 col-sm-6">
                  <input type="number" name="age" class="form-control border-0 px-4 py-3"
                    placeholder="Your Age" min="1" max="80" required style="height: 55px;">
                </div>
                <div class="col-6">
                  <input type="datetime-local" name="appointment_date" class="form-control border-0 px-4 py-3"
                    required style="height: 55px;">
                </div>
                <div class="col-12">
                  <textarea name="health_condition" class="form-control border-0 px-4 py-3" placeholder="Your Health Condition"
                    required style="height: 100px;"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3 rounded-pill shadow" type="submit">Make
                    Appointment</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Appointment End -->

  <!-- Contact Start -->
  <div id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5">
        <!-- Contact Information -->
        <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
          <div class="bg-light rounded shadow h-100 p-5">
            <div class="section-title">
              <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
              <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
            </div>
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
              <div class="text-start">
                <h5 class="mb-0">Our Office</h5>
                <span>123 Street, Cairo, Egypt</span>
              </div>
            </div>
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
              <div class="text-start">
                <h5 class="mb-0">Email Us</h5>
                <a href="mailto:dentcare@gmail.com" class="text-dark">dentcare@gmail.com</a>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
              <div class="text-start">
                <h5 class="mb-0">Call Us</h5>
                <a href="tel:+0123456789" class="text-dark">+012 345 6789</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
          <form>
            <div class="row g-3">
              <div class="col-12">
                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" required
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" required
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" required
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3 rounded-pill shadow" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s">
    <div class="container pt-5">
      <div class="row g-5 pt-4">
        <!-- Quick Links -->
        <div class="col-lg-4 col-md-6">
          <h3 class="text-white mb-4">Quick Links</h3>
          <div class="d-flex flex-column">
            <a class="text-light mb-2" href="#header-carousel"><i
                class="bi bi-arrow-right text-primary me-2"></i>Home</a>
            <a class="text-light mb-2" href="#aboutus"><i class="bi bi-arrow-right text-primary me-2"></i>About
              Us</a>
            <a class="text-light mb-2" href="#services"><i class="bi bi-arrow-right text-primary me-2"></i>Our
              Services</a>
            <a class="text-light mb-2" href="#pricing"><i class="bi bi-arrow-right text-primary me-2"></i>Pricing
              Plan</a>
            <a class="text-light" href="#contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
            <a class="text-light" href="{{ route('appointment') }}"><i
                class="bi bi-arrow-right text-primary me-2"></i>Book Appointment</a>
          </div>
        </div>

        <!-- Get In Touch -->
        <div class="col-lg-4 col-md-6">
          <h3 class="text-white mb-4">Get In Touch</h3>
          <p><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, Cairo, Egypt</p>
          <p><i class="bi bi-envelope-open text-primary me-2"></i><a href="mailto:dentcare@gmail.com"
              class="text-light">dentcare@gmail.com</a></p>
          <p><i class="bi bi-telephone text-primary me-2"></i><a href="tel:+0123456789" class="text-light">+012 345
              6789</a></p>
        </div>

        <!-- Follow Us -->
        <div class="col-lg-4 col-md-6">
          <h3 class="text-white mb-4">Follow Us</h3>
          <div class="d-flex">
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                class="fab fa-twitter"></i></a>
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid text-light py-4" style="background: #051225">
    <div class="container text-center">
      <p class="mb-0">
        &copy; <a class="text-white border-bottom" href="#">Dental Care</a>. All Rights Reserved.
      </p>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
      class="bi bi-arrow-up"></i></a></a>
  <!-- JavaScript Libraries -->
  <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
  <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
  <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <script src="{{ asset('lib/twentytwenty/jquery.event.move.js') }}"></script>
  <script src="{{ asset('lib/twentytwenty/jquery.twentytwenty.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
