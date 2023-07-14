@extends('layouts.master')

@section('content')
<main id="main">
    <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up">
        <div class="row gy-2 mt-2 mb-2">
          <div class="col-lg-6">
            <div class="row mb-4">
                <h1>How can we help you?</h1>
                {{-- <div style="background:rgb(5, 9, 45); height: 2px; width: 35%; margin-bottom: 10px;"></div> --}}
            </div>
            <div class="row">
                <div class="col-lg-6 order-2">
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                          <h4>Call</h4>
                          <p>0799 947 4078</p>
                        </div>
                      </div>
                      <!-- End Info Item -->
                </div>
                <div class="col-lg-6">
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                          <h4>Email</h4>
                          <p>info@surveyall.com</p>
                        </div>
                      </div><!-- End Info Item -->
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                          <h4>Location</h4>
                          <p>
                              162 Swingate Lane, London<br>
                              SE18 2HN <br>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                          <h4>Business hours</h4>
                          <p>Mon - Sat</p>
                          <p>08.00 - 17.00</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>
            </div>
            

            <div class="row mt-4">
                <div class="info-item d-flex">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=162%20Swingate%20Lane%20London%20SE18%202HN%20United%20Kingdom+(Survey%20all)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe>
                </div>
            </div>
          </div>
          <div class="col-lg-1">
            <div class="d-none d-lg-block">
              <div class="m-5" style="background: rgb(5, 9, 45); height:400px; width:3px; align-items:center;"></div></div>
          </div>
          <div class="col-lg-5 order-1">
            
            @foreach ($errors->storetask->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{ route('contactstore') }}" class="email-form" method="POST">
                @csrf

                <h1 class="mb-2">Contact us</h1>
            
              <div class="row">
                <div class="form-group">
                    <input value="{{ old('name') }}" class="form-control" placeholder="Full Name" name="name" type="text" id="task-name" required autofocus>
                </div>
                <div class="form-group mt-3">
                  <input value="{{ old('email') }}" type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
                <div class="row mt-3">
                  <div class="col-md-12 form-group">
                      <select name="query_type" id="" class="form-select">
                          <option selected disabled>Select Query Type</option>
                          <option value="New Booking">New Booking</option>
                          <option value="Existing Booking">Existing Booking</option>
                          <option value="Customer Service">Customer Service</option>
                          <option value="Other">Other</option>
                      </select>
                  </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Phone">
                    </div>
                </div>
              <div class="form-group mt-3">
                <textarea class="form-control" value="{{ old('message') }}" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection