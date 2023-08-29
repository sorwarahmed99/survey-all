@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add new stats</h3>
            <div class="col-sm-4">
                <a href="{{ route('admin.stats.index') }}" class="btn btn-info add-new text-white"><i class="fa fa-arrow-left"></i> &nbsp; Back</a>
            </div>
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
            <form action="{{ route('admin.stats.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Stat Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter stat name">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Stat Number</label>
                    <input type="text" class="form-control" id="number" name="number" placeholder="Enter stat number">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection