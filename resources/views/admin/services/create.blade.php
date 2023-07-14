@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Add new service</h3>
            <a href="{{ route('admin.services.index') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            
            <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" value="{{ old('title') }}" class="form-control" id="" name="title" placeholder="Enter service title">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputFile">Image (Optional)</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="service-textarea">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" rows="5" id="service-textarea">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-warning text-white">Back</a>
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