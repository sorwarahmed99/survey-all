@extends('layouts.master')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('user-assets/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Blogs</h2>
              <p>Keep up with our latest news and posts</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="service" class="services pt-4">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          @foreach ($posts as $post)
            <div class="col-md-4 ">
              <div class="card rounded p-4 shadow">
                  <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="card-img-top object-fit-cover border rounded h-70">
                  <div class="card-body">
                      <h3 class="text-left"><a href="{{ route('post', $post->slug)}}">{{ $post->title }}</a></h3>
                      <div class="card-text text-left">
                          {!! Str::limit(strip_tags($post->description), 200) !!}
                          <a href="{{ route('post', $post->slug)}}">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach

        </div>
        @if($posts->isEmpty())
            <div class="col-lg-12 col-md-12">
                <img class="img-fluid rounded w-100" src="{{ asset('user-assets/assets/img/no-data.svg') }}" style="width: 100%; height: 350px;" alt="">
                <p class="text-center fs-3 fw-bold">No Post Found!</p>
            </div>
        @endif
      </div>
    </section><!-- End Services Section -->

    <section class="my-lg-14 mb-8">
      <!-- container -->
      <div class="container bg-blue rounded-3">
        <!-- row -->
        <div class="row align-items-center">
          <!-- col -->
          <div class="col-lg-6 col-12 d-none d-lg-block">
            <div class="d-flex justify-content-center ">
              <!-- img -->
              <div class="position-relative">
                {{-- <img src="../assets/images/png/cta-instructor-1.png" alt="" class="img-fluid mt-n13"> --}}
                <img src="{{ asset('user-assets/assets/img/l-2.png') }}" height="250"  alt="" style="margin-top: -2rem!important">
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12 mb-2">
            <div class="text-white p-5 p-xl-0 pb-4 d-flex flex-column justify-content-center align-items-center">
              <h3 class="h4 text-white text-center fw-bold">Discover Your Perfect Property Survey</h3>
              <p class="mb-0">Stay updated and empowered with exclusive insights</p>
              <a href="/contact" class="btn btn-primary mt-4 text-center px-4 py-2 h4 fw-bold">Contact us Today</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

@endsection