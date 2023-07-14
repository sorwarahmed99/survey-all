<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Survey-All</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user-assets/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('user-assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('user-assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('user-assets/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user-assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user-assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user-assets/assets/vendor/aos/aos.css" rel="stylesheet') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user-assets/assets/css/main.css') }}" rel="stylesheet">

</head>

<body>
  <header id="header" class="header d-flex align-items-center sticked">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/logo/logo-white.svg') }}" alt="" >
        {{-- <h1>Survey All</h1> --}}
      </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li class="dropdown"><a href="/services"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">RICS Home Surveys Level 2</a></li>
                        <li><a href="#">RICS Home Surveys Level 2 + valuation</a></li>
                        <li><a href="#">RICS Home Surveys Level 3</a></li>
                        <li><a href="#">Building Defect Surveys</a></li>
                        <li><a href="#">Damp and Mould Surveys</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>RICS Surveyors</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                      <li><a href="{{ route('booking') }}">Book a Surveyor</a></li>
                      <li><a href="{{ route('areas') }}">Survey Coverage Area</a></li>
                  </ul>
              </li>
                {{-- <li><a href="/pricing">Pricing</a></li> --}}
                <li><a href="/blogs">Blogs</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about-us">About</a></li>
                <li><a class="get-a-quote" href="tel:07999474078"> <span class="call-icon"><i class="fa-solid fa-phone"></i></span> 0799 947 4078</a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- End Header -->
    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
            <span>Survey All</span>
          </a>
          <p>
            SurveyAll Ltd is a reputable and highly regarded residential surveying firm operating in the South East and East
            London postcode areas. 
          </p>
          <div>
            <h4>Contact Us</h4>
            <p>
              <strong>162 Swingate Lane, London<br>
              SE18 2HN </strong><br>
              <strong>Phone:</strong> 0799 947 4078<br>
              <strong>Email:</strong> info@surveyall.com<br>
            </p>

            <h4>Business Hours</h4>
            <p>Mon - Sat <br> 08.00 - 17.00</p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">RICS Home Surveys Level 2</a></li>
            <li><a href="#">RICS Home Surveys Level 2 + valuation</a></li>
            <li><a href="#">RICS Home Surveys Level 3</a></li>
            <li><a href="#">Building Defect Surveys</a></li>
            <li><a href="#">Damp and Mould Surveys</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-links">
          <h4>Customers</h4>
          <ul>
            <li><a href="#">Book a Surveyor</a></li>
          </ul>

        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Company</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about-us">About us</a></li>
            <li><a href="/contact">Contact us</a></li>
            <li><a href="/blogs">Blogs</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        

        

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Survey All Limited</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('user-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user-assets/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('user-assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('user-assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('user-assets/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('user-assets/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user-assets/assets/js/main.js') }}"></script>

</body>

</html>