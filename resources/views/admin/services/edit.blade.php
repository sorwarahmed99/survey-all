@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Edit {{ $service->name }}</h3>
            <a href="{{ route('admin.services.index') }}" class="btn btn-info add-new text-white float-end"><i class="fa fa-arrow-left"></i> &nbsp; Back</a>
          
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
            <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" value="{{ $service->title }}" class="form-control" id="" name="title" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputFile">File:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
                </div>
                <img src="{{ asset($service->image) }}" height="70" alt="">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="service-textarea">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" rows="5" id="service-textarea">{{ $service->description }}</textarea>
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


@section('scripts')

<script>
    ClassicEditor
        .create( document.querySelector( '#service-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection