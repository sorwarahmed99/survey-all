@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-body">
        <table class="table table-bordered">
            <div class="table-responsive">
              <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row d-flex">
                            <div class="col-sm-8"><h2>Survey coverage area</h2></div>
                            <div class="col-sm-4">
                                <a href="{{ route('admin.coverage-areas.create') }}" class="btn btn-info add-new text-white"><i class="fa fa-plus"></i> &nbsp; Add New</a>
                            </div>
                        </div>
                  </div>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($areas as $area)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $area->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.coverage-areas.edit', $area->id) }}">{{ __('Edit') }}</a>
                            <form style="display: inline-block"
                                  action="{{ route('admin.coverage-areas.destroy', $area->id) }}"
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