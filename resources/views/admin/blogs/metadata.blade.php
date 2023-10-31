@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title float-start">{{ $post->title }}</h3>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary float-end">Back</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="table-responsive">
              <div class="table-wrapper">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">IP</th>
                      <th scope="col">Device</th>
                      <th scope="col">View time</th>
                    </tr>
                  </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($metas as $meta)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $meta->ip }}</td>
                        <td>{{ $meta->current_logged_in_device }}</td>
                        <td>{{ $meta->view_time }}</td>
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