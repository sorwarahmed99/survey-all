@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Add new post</h3>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary float-end">Back</a>
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

            <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="mb-3">
                    <label for="title" class="form-label">Title*</label>
                    <input type="text" value="{{ old('title') }}" class="form-control" id="" name="title" placeholder="Enter post title">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputFile">Image*</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="service-textarea">{{ __('Description*') }}</label>
                        <textarea class="form-control" name="description" rows="5" id="service-textarea">{{ old('description') }}</textarea>
                    </div>
                </div>
                {{-- <div class="form-group mb-3">
                    <h6>Publish or draft</h6>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="is_published" value="1" id="flexCheckDefault" type="checkbox">
                    <label class="form-check-label" for="flexCheckDefault">Publish</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="is_published" value="0" id="flexCheckChecked" type="checkbox" checked="">
                    <label class="form-check-label" for="flexCheckChecked">Draft</label>
                </div> --}}

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