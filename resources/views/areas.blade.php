@extends('layouts.master')
@section('content')
<div class="container-fluid d-lg-none d-sm-block">
    <div class="row " style="background: #fff;">
      <div class="col-md-12 align-items-center d-flex justify-content-center p-1">
          <a class="font-bold top-contact" href="tel:07999474078"> <span class="call-icon mr-2"><i class="fa-solid fa-phone"></i></span> 0799 947 4078</a>
      </div>
    </div>
  </div>
    <div class="area-hero-section align-item-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 p-4">
                    <h2 class="text-center mt-4 pt-4">We have surveyors covering the greater part of the UK</h2>
                    <h2 class="text-center mt-4">Enter your postcode below to check coverage in your location</h2>
                    <div class="mt-4 rounded">
                        <form action="#" id="searchForm" class="form-search  shadow d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                            <input type="text" class="form-control" placeholder="Search postcode or area" id="postcode" name="postcode" required>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <div id="searchResults" class="searchResults rounded shadow p-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="my-lg-14 mb-8">
        <!-- container -->
        <div class="container bg-primary rounded-3">
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
                <a href="/contact" class="btn btn-primary border bg-white text-dark mt-4 text-center px-4 py-2">Contact us today</a>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchForm').submit(function(event) {
                event.preventDefault();

                var postcode = $('#postcode').val();

                $.ajax({
                    url: '/search-coverage',
                    type: 'GET',
                    data: { postcode: postcode },
                    success: function(response) {
                        var searchResultsDiv = $('#searchResults');
                        searchResultsDiv.empty();

                        if (response.length === 0) {
                            $(".searchResults").show(1000);
                            searchResultsDiv.html('<p class="text-default">No coverage found for ' +postcode+'  <br> Didn’t find your region? Call us  <a class="text-default" href="tel:07999474078">0799 947 4078</a> </p>'); 


                        } else {
                            $(".searchResults").slideDown("fast");
                            searchResultsDiv.append('<p class="message">Surveyor coverage for ' +postcode+' is available. <br> Please proceed to <a href="/book-a-surveyor">check earliest availability.</a>');   
                        }
                    },
                    error: function() {
                        alert('Error occurred during search.');
                    }
                });
            });
        });
    </script>
@endsection