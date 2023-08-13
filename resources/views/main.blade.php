<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-commerce</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset ('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span>E-commerce</span>

      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          @if (Auth::check() && Auth::user()->id)
          <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{ route ('login') }}">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    @yield('hero')

  <main id="main">
    @yield('content')
  </main>

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset ('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset ('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset ('vendor/php-email-form/validate.js') }}"></script>
  

  <!-- Template Main JS File -->
  <script src="{{ asset ('js/main.js') }}"></script>

</body>

</html>