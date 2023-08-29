@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-body">
        <table class="table">
            <div class="table-responsive">
              <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row d-flex">
                            <div class="col-sm-8"><h2>Statistics</h2></div>
                            <div class="col-sm-4">
                                <a href="{{ route('admin.stats.create') }}" class="btn btn-primary add-new text-white"><i class="fa fa-plus"></i> &nbsp; Add New</a>
                            </div>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <p class="text-danger">{{ $errors->first()}}</p>
                            </div>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                  </div>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Stat. Name</th>
                      <th scope="col">Stat. Number</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($stats as $stat)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $stat->name }}</td>
                        <td>{{ $stat->number }}</td>
                        <td>
                            <a class="btn btn-sm btn-info text-white" href="{{ route('admin.stats.edit', $stat->id) }}">{{ __('Edit') }}</a>
                            <form style="display: inline-block"
                                  action="{{ route('admin.stats.destroy', $stat->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger text-white" type="submit" onclick="return confirm('{{ __('Are you sure?') }}')"> 
                                    X
                                </button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $count++;
                    @endphp
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection