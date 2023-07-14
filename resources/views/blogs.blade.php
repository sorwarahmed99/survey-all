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
              {{-- <p>Read all about us</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blogs</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          {{-- <span>Our Services</span> --}}
          {{-- <h2>Blogs</h2> --}}

        </div>

        <div class="row gy-4">
            @foreach ($posts as $post)    
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                <div class="card-img">
                    <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
                <h3><a href="{{ route('post', $post) }}" class="stretched-link">{{ $post->title }}</a></h3>
                <p>{!! Str::limit($post->description, 100,  '...') !!}</p>
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

@endsection