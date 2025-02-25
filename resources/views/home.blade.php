<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title', 'SmileCare - Dental Clinic')</title>
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

  {{--
  The  @yield  directive is used to define a section that can be overridden by child views.
  The  @section  directive is used to define the content of the section.
  The  @include  directive is used to include a view in another view.
  The  @extends  directive is used to extend a layout.
  The  @section  directive is used to define the content of a section.
  The  @yield  directive is used to display the content of a section.
  The  @stack  directive is used to push content to a stack.
  The  @push  directive is used to push content to a stack.
  The  @stack  directive is used to display the content of a stack.
  --}}

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
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-5 py-3">
    <div class="container">
      <!-- Brand Logo -->
      <a href="#" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0 text-primary">
          <i class="fa fa-tooth me-2"></i> SmileCare
        </h1>
      </a>

      <!-- Mobile Menu Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#hero-carousel" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#aboutus" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#services" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#pricing" class="nav-link">Pricing</a>
          </li>
          <li class="nav-item">
            <a href="#team" class="nav-link">Our Team</a>
          </li>
          <li class="nav-item">
            <a href="#advice" class="nav-link">Dental Tips</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Appointment Button -->
        <a href="{{ route('appointment') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3">
          Book Appointment
        </a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->


  <!-- Carousel Start -->
  <div class="container-fluid p-0">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
          <div class="carousel-overlay"></div> <!-- Overlay for better readability -->
          <img class="w-100" src="img/carousel-1.jpg" alt="Comprehensive Dental Care">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="text-center p-3" style="max-width: 850px;">
              <h5 class="text-uppercase mb-3 animated fadeInDown text-white">Your Smile, Our Commitment</h5>
              <h1 class="display-2 fw-bold text-white mb-4 animated fadeInUp">
                Premium Dental Services for a Healthy Smile
              </h1>
              <a href="{{ route('appointment') }}" class="btn btn-primary py-3 px-5 me-3 animated fadeInLeft">
                Book Appointment
              </a>
              <a href="#contact" class="btn btn-outline-light py-3 px-5 animated fadeInRight">
                Contact Us
              </a>
            </div>
          </div>
        </div>

        <!-- Second Slide -->
        <div class="carousel-item">
          <div class="carousel-overlay"></div>
          <img class="w-100" src="img/carousel-2.jpg" alt="Modern Dental Solutions">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="text-center p-3" style="max-width: 850px;">
              <h5 class="text-uppercase mb-3 animated fadeInDown">Confidence Starts with a Bright Smile</h5>
              <h1 class="display-2 fw-bold text-white mb-4 animated fadeInUp">
                Advanced & Gentle Dental Care Solutions
              </h1>
              <a href="{{ route('appointment') }}" class="btn btn-primary py-3 px-5 me-3 animated fadeInLeft">
                Book Appointment
              </a>
              <a href="#contact" class="btn btn-outline-light py-3 px-5 animated fadeInRight">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->


  <!-- Banner Start -->
  <div class="container-fluid banner mb-5">
    <div class="container">
      <div class="row gx-4">
        <!-- Opening Hours Section -->
        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
          <div class="bg-primary d-flex flex-column p-5 rounded shadow" style="height: 100%;">
            <h3 class="text-white mb-4"><i class="far fa-clock me-2"></i> Opening Hours</h3>
            <div class="d-flex justify-content-between text-white mb-3">
              <h6 class="text-white mb-0">Saturday - Thursday</h6>
              <p class="mb-0">6:00 AM - 11:00 PM</p>
            </div>
            <div class="d-flex justify-content-between text-white mb-3">
              <h6 class="text-white mb-0">Saturday</h6>
              <p class="mb-0">8:00 AM - 9:00 PM</p>
            </div>
            <div class="d-flex justify-content-between text-white">
              <h6 class="text-white mb-0">Sunday</h6>
              <p class="mb-0">8:00 AM - 9:00 PM</p>
            </div>
          </div>
        </div>

        <!-- Appointment Section -->
        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
          <div class="bg-secondary d-flex flex-column p-5 rounded shadow" style="height: 100%;">
            <h3 class="text-white mb-4"><i class="fa fa-calendar-check me-2"></i> Make an Appointment</h3>
            <p class="text-white">
              Get expert dental care with our highly trained professionals. Book your appointment today!
            </p>
            <h2 class="text-white mb-0">
              <a href="tel:+0123456789" class="text-white text-decoration-none fw-bold hover-effect">
                +012 345 6789
              </a>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <!-- About Start -->
  <div id="aboutus" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title mb-4">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">
              About Us
            </h5>
            <h1 class="display-5 mb-0">
              The Best Dental Clinic That You Can Trust
            </h1>
          </div>
          <h4 class="text-body fst-italic mb-4">
            we are dedicated to providing exceptional dental care with a commitment to excellence, compassion, and
            innovation. Our team of highly skilled professionals ensures that every patient receives personalized
            treatment in a comfortable and welcoming environment.
          </h4>
          <p class="mb-4">
            With state-of-the-art technology and years of expertise, we offer a comprehensive range of dental services,
            from routine check-ups to advanced procedures.
          </p>
          <div class="row g-3">
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
              <h5 class="mb-3">
                <i class="fa fa-check-circle text-primary me-3"></i>Award
                Winning
              </h5>
              <h5 class="mb-3">
                <i class="fa fa-check-circle text-primary me-3"></i>Professional Staff
              </h5>
            </div>
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
              <h5 class="mb-3">
                <i class="fa fa-check-circle text-primary me-3"></i>24/7
                Opened
              </h5>
              <h5 class="mb-3">
                <i class="fa fa-check-circle text-primary me-3"></i>Fair
                Prices
              </h5>
            </div>
          </div>
          <a href="{{ route('appointment') }}" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
            data-wow-delay="0.6s">Make
            Appointment</a>
        </div>
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded wow" data-wow-delay="0.9s" src="img/carousel-2.jpg"
              style="object-fit: cover" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Service Start -->
  <div id="service" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5 mb-5">
        <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px">
          <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
            <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover" />
            <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="section-title mb-5">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">
              Our Services
            </h5>
            <h1 class="display-5 mb-0">
              We Offer The Best Quality Dental Services
            </h1>
          </div>
          <div class="row g-5">
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/service-1.jpg" alt />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Cosmetic Dentistry</h5>
              </div>
            </div>
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/service-2.jpg" alt />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Dental Implants</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-7">
          <div class="row g-5">
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/service-3.jpg" alt />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Dental Bridges</h5>
              </div>
            </div>
            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
              <div class="rounded-top overflow-hidden">
                <img class="img-fluid" src="img/service-4.jpg" alt />
              </div>
              <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Teeth Whitening</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
          <div
            class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
            <h3 class="text-white mb-3">Make Appointment</h3>
            <p class="text-white mb-3">
              Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est
              magna stet eirmod
            </p>
            <h2 class="text-white mb-0">+012 345 6789</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Offer Start -->
  <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
          <div class="offer-text text-center rounded p-5 shadow-lg"
            style="background: rgba(0, 0, 0, 0.7); border-radius: 15px;">
            <h1 class="display-5 text-white fw-bold">
              🦷 Save 30% On Your First Dental Checkup!
            </h1>
            <p class="text-white mt-4 mb-4 fs-5">
              Comprehensive Oral Examination <br>
              Professional Cleaning & Scaling <br>
              Personalized Dental Health Advice <br>
              Early Detection of Dental Issues <br>
            </p>
            <a href="{{ route('appointment') }}"
              class="btn btn-light text-dark fw-bold py-3 px-5 rounded-pill shadow">
              Book Appointment
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Offer End -->

  <!-- Pricing Start -->
  <div id="pricing" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5">
          <div class="section-title mb-4">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">
              Pricing Plan
            </h5>
            <h1 class="display-5 mb-0">
              Fair & Affordable Prices for Dental Treatments
            </h1>
          </div>
          <p class="mb-4">
            Get high-quality dental care at transparent pricing. No hidden fees, just professional treatments with a
            gentle touch.
          </p>
          <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">
            Call for Appointment
          </h5>
          <h1 class="wow fadeInUp" data-wow-delay="0.6s">+012 345 6789</h1>
        </div>
        <div class="col-lg-7">
          <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/price-1.jpg" alt />
                <div
                  class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                  style="z-index: 2">
                  <h2 class="text-primary m-0">$35</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Teeth Whitening</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <a href="{{ route('appointment') }}"
                  class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
              </div>
            </div>
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/price-2.jpg" alt />
                <div
                  class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                  style="z-index: 2">
                  <h2 class="text-primary m-0">$49</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Dental Implant</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <a href="{{ route('appointment') }}"
                  class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
              </div>
            </div>
            <div class="price-item pb-4">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="img/price-3.jpg" alt />
                <div
                  class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                  style="z-index: 2">
                  <h2 class="text-primary m-0">$99</h2>
                </div>
              </div>
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Root Canal</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <a href="{{ route('appointment') }}"
                  class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pricing End -->

  <!-- Testimonial Start -->
  <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
            <!-- Testimonial Item -->
            <div class="testimonial-item text-center text-white">
              <p class="fs-5 fst-italic">
                "Excellent service! The doctors are highly professional and caring. I had a great experience."
              </p>
              <hr class="mx-auto w-25">
              <h4 class="text-white mb-0 fw-bold">John Doe</h4>
            </div>

            <!-- Testimonial Item -->
            <div class="testimonial-item text-center text-white">
              <p class="fs-5 fst-italic">
                "Very clean and well-organized clinic. The staff was friendly, and the treatment was painless."
              </p>
              <hr class="mx-auto w-25">
              <h4 class="text-white mb-0 fw-bold">Sarah Williams</h4>
            </div>

            <!-- Testimonial Item -->
            <div class="testimonial-item text-center text-white">
              <p class="fs-5 fst-italic">
                "Affordable and high-quality dental care! I highly recommend this clinic."
              </p>
              <hr class="mx-auto w-25">
              <h4 class="text-white mb-0 fw-bold">Michael Smith</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->


  <!-- Team Start -->
  <div id="team" class="container-fluid py-5">
    <div class="container">
      <div class="row g-5 align-items-center">
        <!-- Title Section -->
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
          <div class="section-title bg-light rounded h-100 p-5 shadow">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentists</h5>
            <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentists</h1>
            <a href="{{ route('appointment') }}" class="btn btn-primary py-3 px-5 rounded-pill">Book Appointment</a>
          </div>
        </div>

        <!-- Dentist Profiles -->
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="team-item text-center shadow rounded overflow-hidden">
            <img class="img-fluid w-100" src="img/team-1.jpg" alt="Dr. Sarah Johnson">
            <div class="team-text bg-light p-4">
              <h4 class="mb-2">Dr. Sarah Johnson</h4>
              <p class="text-primary mb-0">Implant Specialist</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="team-item text-center shadow rounded overflow-hidden">
            <img class="img-fluid w-100" src="img/team-2.jpg" alt="Dr. Michael Smith">
            <div class="team-text bg-light p-4">
              <h4 class="mb-2">Dr. Michael Smith</h4>
              <p class="text-primary mb-0">Orthodontist</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
          <div class="team-item text-center shadow rounded overflow-hidden">
            <img class="img-fluid w-100" src="img/team-3.jpg" alt="Dr. Emily Brown">
            <div class="team-text bg-light p-4">
              <h4 class="mb-2">Dr. Emily Brown</h4>
              <p class="text-primary mb-0">Pediatric Dentist</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="team-item text-center shadow rounded overflow-hidden">
            <img class="img-fluid w-100" src="img/team-4.jpg" alt="Dr. David Lee">
            <div class="team-text bg-light p-4">
              <h4 class="mb-2">Dr. David Lee</h4>
              <p class="text-primary mb-0">Cosmetic Dentist</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="team-item text-center shadow rounded overflow-hidden">
            <img class="img-fluid w-100" src="img/team-5.jpg" alt="Dr. Jessica White">
            <div class="team-text bg-light p-4">
              <h4 class="mb-2">Dr. Jessica White</h4>
              <p class="text-primary mb-0">Root Canal Specialist</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->


  <!-- Advice -->
  <div id="advice" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5">
          <div class="section-title mb-4">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">
              Keep Your Teeth Healthy
            </h5>
            <h1 class="display-5 mb-0">
              Healthy Habits for a Perfect Smile
            </h1>
          </div>
          <p class="mb-4">
            Follow these simple dental care tips to keep your teeth strong, cavity-free, and your smile bright.
          </p>
        </div>
        <div class="col-lg-7">
          <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">

            <!-- Advice 1: Daily Oral Hygiene -->
            <div class="price-item pb-4">
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Daily Oral Hygiene</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Brush twice a day</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Floss daily</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Use fluoride toothpaste</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
              </div>
            </div>

            <!-- Advice 2: Healthy Diet -->
            <div class="price-item pb-4">
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Healthy Diet</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Limit sugary foods & drinks</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Eat calcium-rich foods</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Drink plenty of water</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
              </div>
            </div>

            <!-- Advice 3: Regular Dental Visits -->
            <div class="price-item pb-4">
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Regular Dental Check-ups</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Visit dentist every 6 months</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Professional cleaning</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Early detection of dental issues</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
              </div>
            </div>

            <!-- Advice 4: Avoid Harmful Habits -->
            <div class="price-item pb-4">
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Avoid Harmful Habits</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Don't smoke or use tobacco</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Avoid nail-biting & teeth grinding</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Don't use teeth as tools</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
              </div>
            </div>

            <!-- Advice 5: Use the Right Dental Products -->
            <div class="price-item pb-4">
              <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                <h4>Use the Right Products</h4>
                <hr class="text-primary w-50 mx-auto mt-0" />
                <div class="d-flex justify-content-between mb-3">
                  <span>Use a soft-bristle toothbrush</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <span>Replace your brush every 3 months</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Choose alcohol-free mouthwash</span><i class="fa fa-check text-primary pt-1"></i>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Advice -->

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
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="name" class="form-control border-0 bg-light px-4"
                  placeholder="Your Name" required style="height: 55px;">
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control border-0 bg-light px-4"
                  placeholder="Your Email" required style="height: 55px;">
              </div>
              <div class="col-12">
                <input type="text" name="subject" class="form-control border-0 bg-light px-4"
                  placeholder="Subject" required style="height: 55px;">
              </div>
              <div class="col-12">
                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Message"
                  required></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3 rounded-pill shadow" type="submit">Send Message</button>
              </div>
            </div>
          </form>

          @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
          @endif
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
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
      class="bi bi-arrow-up"></i></a>
  </a>
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
