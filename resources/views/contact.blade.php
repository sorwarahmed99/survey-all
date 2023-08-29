@extends('layouts.master')

@section('content')
<div class="container-fluid d-lg-none d-sm-block">
  <div class="row" style="background: #F9F5EB;">
    <div class="col-md-12 align-items-center d-flex justify-content-center p-1">
        <a class="font-bold top-contact" href="tel:07999474078"> <span class="call-icon mr-2"><i class="fa-solid fa-phone"></i></span> 0799 947 4078</a>
    </div>
  </div>
</div>
<section class="booking">
  <div class="hero-section">
      <div class="container">
          <div class="row">
              <div class="col-md-6 order-1 order-lg-2 order-md-2 p-0">
                  <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1 col-md-8 offset-md-2 shadow mb-5 bg-body rounded">
                    
        
                    <form action="{{ route('contactstore') }}" class="booking-form" method="POST">
                        @csrf
                          <h1 style="color: rgb(12, 19, 50);">Contact us</h1>
                          
                          <div class="row mt-2 mb-2">
                            @if(session()->has('success'))
                                <div class="alert alert-success mb-2 fw-bold fs-7">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                          </div>
                          
                          <div class="row">
                              <div class="form-group">
                                <input value="{{ old('name') }}" class="form-control" placeholder="Full Name" name="name" type="text" id="task-name" autofocus>

                                @if ($errors->has('name'))
                                  <div class="error">
                                      {{ $errors->first('name') }}
                                  </div>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                              <input value="{{ old('email') }}" type="email" class="form-control" name="email" id="email" placeholder="Email">
                              @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                              @endif
                            </div>
                              
                          </div>
                          <div class="row mt-3">
                            <div class="col-md-12 form-group">
                                <select name="query_type" id="" class="form-select form-control">
                                    <option selected disabled>Select Query Type</option>
                                    <option value="New Booking" @if(old('query_type') == 'New Booking') selected @endif>New Booking</option>
                                    <option value="Existing Booking" @if(old('query_type') == 'Existing Booking') selected @endif>Existing Booking</option>
                                    <option value="Customer Service" @if(old('query_type') == 'Customer Service') selected @endif>Customer Service</option>
                                    <option value="Other" @if(old('query_type') == 'Other') selected @endif>Other</option>
                                </select>
                                @if ($errors->has('query_type'))
                                  <div class="error">
                                      {{ $errors->first('query_type') }}
                                  </div>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <input type="number" class="form-control" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Phone">
                                @if ($errors->has('phone'))
                                  <div class="error">
                                      {{ $errors->first('phone') }}
                                  </div>
                                @endif
                            </div>
                          </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                              <div class="error">
                                  {{ $errors->first('message') }}
                              </div>
                            @endif
                          </div>
                        
                          
                        <div class="text-center mt-3"><button class="btn btn-primary" type="submit">Submit</button></div>
                      </form>
                  </div>
              </div>
              <div class="col-md-6 order-2 order-lg-1 order-md-1 d-none d-lg-block content">
                  <div class=" p-4 pt-4">
                      <h1>How can we help you?</h1>
                      <div class="row gy-3 mt-1" data-aos="fade-up" data-aos-delay="400">
                          <div class="col-lg-7 d-flex justify-content-center align-items-center">
                              <a href="https://www.ricsfirms.com/office/220019/SurveyAll-Ltd" target="_blank">
                                <img src="{{ asset('user-assets/assets/img/rics-logo-dark.png')}}" height="40" alt="">
                              </a>
                              <a target="_blank" href="https://www.google.com/search?q=surveyall+ltd+google+reviews+&sxsrf=AB5stBidw4M7Ungm-pAXefhRYM_eeTpfMg%3A1689949204319&ei=FJS6ZPOLE5-chbIPzf2Z-AI&ved=0ahUKEwjz5Yuw_5-AAxUfTkEAHc1-Bi8Q4dUDCA8&uact=5&oq=surveyall+ltd+google+reviews+&gs_lp=Egxnd3Mtd2l6LXNlcnAiHXN1cnZleWFsbCBsdGQgZ29vZ2xlIHJldmlld3MgMgUQIRigATIFECEYoAEyBRAhGKABMgUQIRigAUiYRVAAWMwdcAF4AZABAJgB8QegAe4XqgEPMC40LjEuMC4xLjAuMS4xuAEDyAEA-AEB-AECwgIHECMYigUYJ8ICCxAuGK8BGMcBGIAEwgIKEAAYgAQYsQMYCsICBxAAGIAEGArCAgQQABgDwgILEC4YgAQYxwEYrwHCAhoQLhiABBjHARivARiXBRjcBBjeBBjgBNgBAcICBhAAGBYYHuIDBBgAIEGIBgG6BgYIARABGBQ&sclient=gws-wiz-serp#lrd=0x47d8a947b844d953:0x365be7222122ced3,1,,,,">
                                <img src="{{ asset('img/logo/googlereview.svg')}}" class="img-responsive g-review ms-3" height="50" alt="">
                              </a>
                          </div><!-- End Stats Item -->
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
    <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up">
        <div class="row gy-2 mt-2 mb-2">
          <div class="col-lg-10 offset-lg-1">
            <div class="d-block d-lg-none p-4 text-center">
                <h1>How can we help you?</h1>
            </div>
            <div class="row">
              <div class="col-lg-4 order-2 p-4">
                <div class="info-item d-flex">
                    <i class="bi bi-phone flex-shrink-0"></i>
                    <div>
                      <h4>Call</h4>
                      <p>0799 947 4078</p>
                    </div>
                  </div>
              </div>
                <div class="col-lg-4 p-4">
                    <div class="info-item d-flex">
                      <i class="bi bi-envelope flex-shrink-0"></i>
                      <div>
                        <h4>Email</h4>
                        <p> info@surveyall.co.uk</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 p-4">
                  <div class="info-item d-flex">
                      <i class="bi bi-clock flex-shrink-0"></i>
                      <div>
                        <h4>Business hours</h4>
                        <p>Mon - Sat (09.00 - 17.00)</p>
                      </div>
                  </div>
                </div>
            </div>

            {{-- <div class="row mt-4 p-4">
                <div class="col-lg-6 p-4">
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
                <div class="col-lg-6 p-4">
                  <div class="info-item d-flex">
                      <i class="bi bi-clock flex-shrink-0"></i>
                      <div>
                        <h4>Business hours</h4>
                        <p>Mon - Sat</p>
                        <p>09.00 - 17.00</p>
                      </div>
                  </div>
                </div>
            </div> --}}

            <div class="row mt-4 rounded w-100 p-4 d-lg-none d-block">
                {{-- <div class="info-item d-flex ">
                    <iframe class="rounded" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=162%20Swingate%20Lane%20London%20SE18%202HN%20United%20Kingdom+(Survey%20all)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe>
                </div> --}}
                <div class="row" data-aos="fade-up" data-aos-delay="400">
                  <div class="col-lg-12 d-flex justify-content-center align-items-center">
                      <a href="https://www.ricsfirms.com/office/220019/SurveyAll-Ltd" target="_blank">
                        <img src="{{ asset('user-assets/assets/img/rics-logo-dark.png')}}" height="40" alt="">
                      </a>
                      <a target="_blank" href="https://www.google.com/search?q=surveyall+ltd+google+reviews+&sxsrf=AB5stBidw4M7Ungm-pAXefhRYM_eeTpfMg%3A1689949204319&ei=FJS6ZPOLE5-chbIPzf2Z-AI&ved=0ahUKEwjz5Yuw_5-AAxUfTkEAHc1-Bi8Q4dUDCA8&uact=5&oq=surveyall+ltd+google+reviews+&gs_lp=Egxnd3Mtd2l6LXNlcnAiHXN1cnZleWFsbCBsdGQgZ29vZ2xlIHJldmlld3MgMgUQIRigATIFECEYoAEyBRAhGKABMgUQIRigAUiYRVAAWMwdcAF4AZABAJgB8QegAe4XqgEPMC40LjEuMC4xLjAuMS4xuAEDyAEA-AEB-AECwgIHECMYigUYJ8ICCxAuGK8BGMcBGIAEwgIKEAAYgAQYsQMYCsICBxAAGIAEGArCAgQQABgDwgILEC4YgAQYxwEYrwHCAhoQLhiABBjHARivARiXBRjcBBjeBBjgBNgBAcICBhAAGBYYHuIDBBgAIEGIBgG6BgYIARABGBQ&sclient=gws-wiz-serp#lrd=0x47d8a947b844d953:0x365be7222122ced3,1,,,,">
                        <img src="{{ asset('img/logo/googlereview.svg')}}" class="img-responsive g-review ms-3" height="50" alt="">
                      </a>
                  </div>
                </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


@endsection