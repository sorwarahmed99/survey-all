@extends('layouts.master')

@section('content')
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4  d-flex justify-content-between">
        {{-- <div class="col-lg-1 order-3 pl-4 ml-3 order-lg-1 d-flex flex-column justify-content-center">
        </div> --}}
        <div class="col-lg-7 order-1 ml-3 order-lg-1 d-flex flex-column justify-content-center" style="padding: 70px;">
            <h2 data-aos="fade-up">RICS Level 2 and 3 Home Surveys.</h2>
            <h4>
                {{-- Your One-Stop Destination for Comprehensive Property Surveys. --}}
                Whether you're a homeowner or a real estate professional, Survey All empowers you to <br> make the best choices for your property.
            </h4>
            {{-- <p data-aos="fade-up" data-aos-delay="100">
                At Survey All, we believe that every property deserves a thorough assessment to ensure transparency, security, and peace of mind. We are your trusted platform for accessing comprehensive property surveys, providing you with valuable information to make informed decisions.        
            </p> --}}

          <br>
          <br>
          <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center">
                <a href="/book-a-surveyor" class="btn btn-primary" >Book A Surveyor</a>
            </div>
          </div>
          {{-- <a class="get-a-quote" href="get-a-quote.html">Get a Quote</a> --}}
          <div class="row gy-4 mt-2" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-6 col-6 d-flex clex-column justify-content-between">
                <img class="ml-4" src="{{ asset('img/logo/rics-landing-page.png')}}" height="40" alt="">
                <img src="{{ asset('img/logo/googlereview.svg')}}" class="img-responsive" height="50" alt="">
            </div><!-- End Stats Item -->
          </div>
        </div>
        <div class="col-lg-5 order-2 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ asset('user-assets/assets/img/undraw.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>
      </div>
    </div>
</section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-building-circle-check"></i></div>
            <div>
                <h4 class="title text-left">Wide Range of Surveys</h4>
                <p class="description  text-left">
                    Whether you need a building survey, homebuyer's report, valuation survey, or any other type of property assessment, Survey All offers a diverse range of survey options to cater to your specific requirements.
                </p>
              <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-chart-column"></i></div>
            <div>
              <h4 class="title">Comprehensive Reports</h4>
              <p class="description">Our property survey reports go beyond the basics, offering you a holistic view of the property's condition. From structural integrity to potential hazards and everything in between, we cover all aspects to give you a comprehensive understanding.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-house-chimney-user"></i></div>
            <div>
              <h4 class="title">Personalized Solutions</h4>
              <p class="description">We understand that each property is unique, and so are the requirements of its owners. At Survey All, we offer personalized survey solutions tailored to your specific needs. Whether you're a homeowner, investor, or real estate professional, we've got you covered.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    {{-- <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('user-assets/assets/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
              Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
  
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Services</h2>
        </div>

        <div class="row gy-4">
          @foreach ($services as $service)
          <div class="col-md-4">
              <div class="card h-100">
                  <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="card-img-top">
                  <div class="card-body">
                      <h3 class="text-left"><a href="{{ route('service', $service)}}">{{ $service->title }}</a></h3>
                      <div class="card-text text-left">
                          {!! Str::limit(strip_tags($service->description), 100) !!}
                          <a href="{{ route('service', $service)}}">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->



    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    {{-- <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="{{ asset('user-assets/assets/img/features-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('user-assets/assets/img/features-2.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{ asset('user-assets/assets/img/features-3.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('user-assets/assets/img/features-4.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

      </div>
    </section> --}}
    <!-- End Features Section -->

    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>
          <!-- End Pricing Item -->
        </div>
      </div>
    </section>
    <!-- End Pricing Section -->

    <section id="stats-counter" class="stats-counter pt-0 pb-0">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
                <h3>{{ $testimonial->name }}</h3>
                <h4>{{ $testimonial->position }}</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  {{ $testimonial->description }}
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            @endforeach
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->
  </main><!-- End #main -->

@endsection