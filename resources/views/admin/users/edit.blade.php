@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-start">Edit {{ $user->name }}</h3>
            <a href="{{ route('admin.users.index') }}" class="btn btn-info add-new text-white float-end"><i class="fa fa-arrow-left"></i> &nbsp; Back</a>
          
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
            <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" value="{{ $user->name }}" class="form-control" id="" name="name" placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Position</label>
                    <input type="email" value="{{ $user->email }}" class="form-control" name="email" id="email" placeholder="jhon@doe.com">
                </div>

                <div class="mb-3 mt-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection