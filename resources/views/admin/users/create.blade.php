@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Add new user</h3>
            <a href="" class="btn btn-primary float-end">Back</a>
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

            
            <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="mb-3">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="" name="name" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Jhon@doe.com">
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label" for="inputFile">Profile Image</label>
                    <input 
                        type="file" 
                        name="profile_image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
                </div> --}}

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-warning text-white">Back</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection