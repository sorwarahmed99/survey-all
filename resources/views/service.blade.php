@extends('layouts.master')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('/user-assets/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>{{ $service->title }} </h2>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="services-list">
                    <a href="#" class="active">{{$service->title}}</a>
                    <hr>
                    @foreach ($services as $otherService)
                        <a href="{{ route('service', $otherService->slug) }}">{{ $otherService->title }}</a>
                    @endforeach
                </div>
            </div>

          <div class="col-lg-8">
              <img src="{{ asset($service->image) }}" alt=""  class="services-img w-100 object-fit-cover rounded">
              <h3>{{ $service->title }}</h3>
            <p>
              {!! $service->description !!}
            </p>
            <a href="/book-a-surveyor" class="btn btn-primary float-end mt-2 px-5 py-3 fw-semibold" >Request a Survey Quote</a>
            
            {{-- <ul>
              <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul>
            <p>
              Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
            </p>
            <p>
              Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
            </p> --}}
          </div>

        </div>
        

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->
@endsection