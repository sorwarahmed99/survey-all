@extends('layouts.master')
@section('content')

<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('user-assets/assets/img/Customer-survey.svg') }}" alt="Surveyor Image" class="img-fluid">
            </div>
            <div class="col-md-6 p-0" style="background: #0e1d34;">
                <form action="{{ route('bookingstore') }}" class="booking-form" method="POST">
                    @csrf
                    <h2>Book a Surveyor</h2>
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
            </div>
        </div>
    </div>
</div>
@endsection