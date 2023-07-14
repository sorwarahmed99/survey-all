@extends('layouts.master')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('user-assets/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Our Services</h2>
              {{-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

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
  </main><!-- End #main -->

@endsection