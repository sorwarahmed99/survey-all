@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Edit {{ $testimonial->name }}</h3>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-info add-new text-white float-end"><i class="fa fa-arrow-left"></i> &nbsp; Back</a>
          
        </div>
        <div class="card-body">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" value="{{ $testimonial->name }}" class="form-control" id="" name="name" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" value="{{ $testimonial->position }}" class="form-control" name="position" id="position" placeholder="Project manager">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputFile">File:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
                </div>
                <img src="{{ asset($testimonial->image) }}" height="70" alt="">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="task-textarea">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" rows="5" id="task-textarea">{{ $testimonial->description }}</textarea>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection