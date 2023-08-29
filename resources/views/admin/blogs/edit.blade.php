@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Edit {{ $post->name }}</h3>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-info add-new text-white float-end"><i class="fa fa-arrow-left"></i> &nbsp; Back</a>
          
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
            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" value="{{ $post->title }}" class="form-control" id="" name="title" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputFile">Post thumbnail</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
                </div>
                
                <img class="mb-3" src="{{ asset($post->image) }}" height="70" alt="">

                <div class="mb-3">
                    <div class="form-group">
                        <label for="post-textarea">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" rows="5" id="post-textarea">{{ $post->description }}</textarea>
                    </div>
                </div>

                <div class="mb-3 ml-3">
                    {{-- <div class="form-group mb-3">
                        <h6>Publish or draft</h6>
                    </div> --}}
                    
                   
                    {{-- <div class="form-check">
                        <input class="form-check-input" name="is_published" value="1" id="flexCheckDefault" type="checkbox" {{ $post->is_published == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexCheckDefault">Publish</label>
                    </div> --}}
                    {{-- <div class="form-check mb-3">
                        <input class="form-check-input" name="is_published" value="0" id="flexCheckChecked" type="checkbox" {{ $post->is_published == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexCheckChecked">Draft</label>
                    </div> --}}
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
        .create( document.querySelector( '#post-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection