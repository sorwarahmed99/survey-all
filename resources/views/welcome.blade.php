@extends('layouts.master')

@section('content')
<div class="container-fluid d-lg-none d-sm-block">
  <div class="row " style="background: #fff;">
    <div class="col-md-12 align-items-center d-flex justify-content-center p-1">
        <a class="font-bold top-contact" href="tel:07999474078"> <span class="call-icon mr-2"><i class="fa-solid fa-phone"></i></span> 0799 947 4078</a>
    </div>
  </div>
</div>
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between" >
            <div class="col-lg-6 order-2 ml-3 order-lg-1 d-flex flex-column justify-content-center" style="padding: 10px;">
                <h2 data-aos="fade-up" class=" text-left">RICS Home Surveys and Valuations</h2>
                <h4>
                    Our team delivers high quality, professional property inspections and reports. Usually within a quick turnaround of just two days.
                </h4>
                <div class="row mt-3">
                    <div class="col-lg-8 d-flex flex-lg-column justify-content-center">
                        <a href="/book-a-surveyor" class="btn btn-primary" >Book A RICS Surveyor</a>
                    </div>
                </div>
                <div class="row gy-3 mt-1" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-7 d-flex justify-content-center align-items-center">
                        <a href="https://www.ricsfirms.com/office/220019/SurveyAll-Ltd" target="_blank">
                          <img class="img-responsive g-review ms-3" src="{{ asset('img/logo/rics-landing-page.png')}}" height="40" alt="">
                        </a>
                        <a href="https://www.google.com/search?q=surveyall+ltd+google+reviews+&sxsrf=AB5stBidw4M7Ungm-pAXefhRYM_eeTpfMg%3A1689949204319&ei=FJS6ZPOLE5-chbIPzf2Z-AI&ved=0ahUKEwjz5Yuw_5-AAxUfTkEAHc1-Bi8Q4dUDCA8&uact=5&oq=surveyall+ltd+google+reviews+&gs_lp=Egxnd3Mtd2l6LXNlcnAiHXN1cnZleWFsbCBsdGQgZ29vZ2xlIHJldmlld3MgMgUQIRigATIFECEYoAEyBRAhGKABMgUQIRigAUiYRVAAWMwdcAF4AZABAJgB8QegAe4XqgEPMC40LjEuMC4xLjAuMS4xuAEDyAEA-AEB-AECwgIHECMYigUYJ8ICCxAuGK8BGMcBGIAEwgIKEAAYgAQYsQMYCsICBxAAGIAEGArCAgQQABgDwgILEC4YgAQYxwEYrwHCAhoQLhiABBjHARivARiXBRjcBBjeBBjgBNgBAcICBhAAGBYYHuIDBBgAIEGIBgG6BgYIARABGBQ&sclient=gws-wiz-serp#lrd=0x47d8a947b844d953:0x365be7222122ced3,1,,,,">
                          <img  src="{{ asset('img/logo/googlereview.svg')}}" class="img-responsive g-review ms-3" height="50" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-1 hero-img d-flex flex-column">
              <img src="{{ asset('user-assets/assets/img/new-3.png') }}" class="d-lg-none d-block img-fluid w-full right-img"  alt="">
                <div class="wrapper d-none d-lg-block">
                    <div class="content">
                    <img src="{{ asset('user-assets/assets/img/new-3.png') }}" class="img-fluid w-full right-img"  alt="">
                    </div>
                    <div class="background-shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    Whether you need a building survey, homebuyer's report, valuation survey, or any other type of property assessment, SurveyAll offers a diverse range of survey options to cater to your specific requirements.
                </p>
              <a href="/services" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-chart-column"></i></div>
            <div>
              <h4 class="title">Comprehensive Reports</h4>
              <p class="description">Our property survey reports go beyond the basics, offering you a holistic view of the property's condition. From structural integrity to potential hazards and everything in between, we cover all aspects to give you a comprehensive understanding.</p>
              <a href="/services" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-house-chimney-user"></i></div>
            <div>
              <h4 class="title">Personalised Solutions</h4>
              <p class="description">We understand that each property is unique, and so are the requirements of its owners. At SurveyAll, we offer personalized survey solutions tailored to your specific needs. Whether you're a homeowner, investor, or real estate professional, we've got you covered.</p>
              <a href="/services" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Services</h2>
        </div>

        <div class="row gy-4">
          @foreach ($services as $service)
          <div class="col-md-4">
              <div class="card-group">
                <div class="card rounded p-4 shadow h-100">
                    {{-- <div class="card-img-top img-responsive" data-lightbox="photos" style="background-image: url({{ asset('../../public/'.$service->image) }}); opacity: 0.8;"></div> --}}
                      <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="card-img img-fluid rounded" >
                      <div class="card-body">
                          <h3 class="text-left"><a href="{{ route('service', $service)}}">{{ $service->title }}</a></h3>
                          <div class="card-text text-left">
                              {!! Str::limit(strip_tags($service->description), 200) !!}
                              <a href="{{ route('service', $service)}}">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
          @if($services->isEmpty())
          <div class="col-lg-12 col-md-12">
              <img class="img-fluid rounded w-100" src="{{ asset('user-assets/assets/img/empty.svg') }}" style="width: 100%; height: 350px;" alt="">
              <p class="text-center fs-3 fw-bold">No services found.</p>
          </div>
          @endif
        </div>
      </div>
    </section>

    {{-- <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> </p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End Call To Action Section -->

    <section id="stats-counter" class="stats-counter pt-3">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 p-4 text-center pt-4">
            <div class="col-lg">
                <h1>OUR SUCCESS</h1>
                <p>Trusted by thousands of delighted clients</p>
            </div>
        </div>
        <div class="row gy-4 pt-2">
        
        @foreach ($stats as $stat)
            <div class="col-lg-3 col-md-6 projectFactsWrap d-felx flex-column align-items-center justify-content-center">
                <div class="item text-center">
                    <p id="number1" class="number">{{ $stat->number }}</p>
                    {{-- <span></span> --}}
                    <p>{{ $stat->name }}</p>
                </div>
            </div>
        @endforeach
        

        @if($stats->isEmpty())
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img class="img-fluid rounded w-100" src="{{ asset('user-assets/assets/img/empty.svg') }}" style="width: 100%; height: 300px;" alt="">
              <p class="text-center fs-3 fw-bold text-light">No stats found.</p>
            </div>
          </div>
        @endif
        </div>
      </div>
    </section>
   

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
            @if($testimonials->isEmpty())
              <div class="swiper-slide">
                <div class="testimonial-item">
                  {{-- <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt=""> --}}
                  <img class="img-fluid rounded w-100" src="{{ asset('user-assets/assets/img/empty.svg') }}" style="width: 100%; height: 350px;" alt="">
                  <p class="text-center fs-3 fw-bold text-light">No testimonial found.</p>
                </div>
              </div>
            @endif

          </div>
          <div class="swiper-pagination"></div>
        </div>
        

      </div>
    </section>
    <!-- End Testimonials Section -->
  </main><!-- End #main -->

@endsection