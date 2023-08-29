@extends('layouts.master')
@section('content')
<div class="container-fluid d-lg-none d-sm-block">
    <div class="row " style="background: #F9F5EB;">
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
                        <form action="{{ route('bookingstore') }}" class="booking-form" method="POST">
                            @csrf
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <li class="text-danger">{{ $error }}</li>
                                </div>
                            @endforeach
        
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <h4 style="color: #0e1d34;">Book a RICS Surveyor</h4>
                            <div class="row">
                                <div class="mt-3 form-group">
                                    {{-- <label for="area_or_postcode" class="form-label">Area or postcode</label> --}}
                                    <input type="text" value="{{ old('area_or_postcode') }}" class="form-control {{ $errors->has('area_or_postcode') ? 'error' : '' }}" id="area_or_postcode" name="area_or_postcode" placeholder="Area name or postcode">
                                </div>
                                <div class="form-group mt-3">
                                    {{-- <label for="name" class="form-label">Full Name</label> --}}
                                    <input value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Full Name" name="name" type="text" id="task-name" required autofocus>
                                </div>
                                <div class="form-group mt-3">
                                    {{-- <label for="email" class="form-label">Email</label> --}}
                                    <input value="{{ old('email') }}" type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    {{-- <label for="phone" class="form-label">Phone</label> --}}
                                    <input type="number" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Phone">
                                </div>
                            </div>
                          <div class="form-group mt-3">
                            <textarea class="form-control {{ $errors->has('instruction') ? 'error' : '' }}" value="{{ old('instruction') }}" name="instruction" rows="5" placeholder="Special instruction"></textarea>
                          </div>
                          
                          <div class="text-center mt-3"><button class="btn btn-primary" type="submit">Continue</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 order-2 order-lg-1 order-md-1 content">
                    <div class=" p-4 pt-4">
                        <h1>RICS Surveys and Valuations</h1>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                            <i class="fa-solid fa-building-circle-check rounded-circle"></i>
                            <div>
                                <h5>Wide range of surveys.</h5>
                            </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                            <i class="fa-solid fa-chart-column rounded-circle"></i>
                            <div>
                                <h5>Comprehensive reports.</h5>
                            </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                            <i class="fa-solid fa-house-chimney-user rounded-circle"></i>
                            <div>
                                <h5>Personalised solutions.</h5>
                            </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="fa-solid fa-star rounded-circle"></i>
                                <div>
                                    <h5>Rated 5 star in Google.</h5>
                                </div>
                            </li>
                        </ul>
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

@endsection