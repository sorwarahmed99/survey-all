@extends('layouts.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('user-assets/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About us</h2>
              {{-- <p>
                    A little bit of us
              </p> --}}
            </div>
          </div>
        </div>
      </div>
      {{-- <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About us</li>
          </ol>
        </div>
      </nav> --}}
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row pt-4 mt-4 content">
            <div class="col-lg-6 pt-4">
                <h3>Our Story</h3>
                <p>
                    SurveyAll Ltd is a reputable and highly regarded residential surveying firm operating in the South East and East
                    London postcode areas. As a trusted and regulated company by RICS (Royal Institution of Chartered Surveyors),
                    we offer a comprehensive range of residential property surveys and conveyancing searches. With our extensive
                    experience and expertise, we deliver high-quality services that are recognized and valued within the local
                    community.
                </p> 
            </div>
            <div class="col-lg-6 h-40">
                <img class="rounded img-responsive img-fluid w-100" src="{{ asset('user-assets/assets/img/service-house-1.png') }}" style="object-fit:cover;" alt="">
            </div>
        </div>
        <div class="row pt-4 mt-4">
            <div class="col-lg-6  h-40">
                <img class="rounded img-responsive img-fluid w-100" src="{{ asset('user-assets/assets/img/service-house-2.png') }}" style="object-fit:cover;" alt="">
            </div>
            <div class="col-lg-6 mt-4 pt-4">
                <p>
                    At SurveyAll Ltd, we understand the importance of providing accurate and reliable surveying solutions to our
                    clients. Our dedicated team of qualified surveyors ensures that every survey is conducted with meticulous
                    attention to detail and adherence to industry standards. We utilize advanced technology and proven
                    methodologies to assess the condition and potential risks of residential properties, enabling our clients to make
                    informed decisions.
                </p> 
            </div>
        </div>
        
      </div>
    </section><!-- End About Us Section -->

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

    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Meet Our Team</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            @foreach ($teams as $team)    
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                    <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>{{ $team->name }}</h4>
                        <span>{{ $team->position }}</span>
                    </div>
                    </div>
                </div>
            @endforeach
            @if($teams->isEmpty())
            <div class="col-lg-12 col-md-12">
                <img class="img-fluid rounded w-100" src="{{ asset('user-assets/assets/img/empty.svg') }}" style="width: 100%; height: 350px;" alt="">
                <p class="text-center fs-3 fw-bold">No teams found.</p>
            </div>
            @endif
        </div>

      </div>
    </section><!-- End Our Team Section -->


  </main><!-- End #main -->

@endsection