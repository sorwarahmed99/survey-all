@extends('layouts.app')
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary mb-4">
            <div class="card-body">
            <div class="fs-4 fw-semibold">{{ \App\Models\Contact::where('created_at', '>=', \Carbon\Carbon::today())->count() }}</div>
            <div>Contacts</div>
            <div class="progress progress-white progress-thin my-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-medium-emphasis-inverse">Contacted today</small>
            </div>
        </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-warning mb-4">
            <div class="card-body">
            <div class="fs-4 fw-semibold">{{ App\Models\Contact::count() }}</div>
            <div>All Contacts</div>
            <div class="progress progress-white progress-thin my-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-medium-emphasis-inverse">All time contacts</small>
            </div>
        </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-danger mb-4">
            <div class="card-body">
            <div class="fs-4 fw-semibold">{{ \App\Models\Booking::where('created_at', '>=', \Carbon\Carbon::today())->count() }}</div>
            <div>Bookings</div>
            <div class="progress progress-white progress-thin my-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-medium-emphasis-inverse">Booking created today</small>
            </div>
        </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-info mb-4">
            <div class="card-body">
            <div class="fs-4 fw-semibold">{{ App\Models\Booking::count() }}</div>
            <div>All Bookings</div>
            <div class="progress progress-white progress-thin my-2">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-medium-emphasis-inverse">All bookings</small>
            </div>
        </div>
        </div>
        <!-- /.col-->
    </div>
        
</div>

@endsection