@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Add new team member</h3>
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

            
            <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="mb-3">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="" name="name" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" name="position" id="position" placeholder="Project manager">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputFile">File:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputFile"
                        class="form-control @error('image') is-invalid @enderror">
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