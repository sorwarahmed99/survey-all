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
      
    </div>

    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Services</h2>
        </div>

        <div class="row gy-4">
          @foreach ($services as $service)
          <div class="col-md-4">
              <div class="card rounded p-4 shadow">
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
  </main><!-- End #main -->

@endsection