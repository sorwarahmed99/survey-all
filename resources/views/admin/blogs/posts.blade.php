@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-body">
        <table class="table">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                    <div class="float-start"><h2>Posts</h2></div>
                        <div class="row">
                            <div class=" float-end">
                                <a href="{{ route('admin.posts.create') }}" class="btn btn-info add-new text-white  float-end"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                  </div>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th>
                        
                      </th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Metadata</th>
                      <th scope="col">Created</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($posts as $post)
                    <tr>
                      <th scope="row">{{ $count }}</th>
                      <td class="text-center">
                        <div class="avatar avatar-md">
                          <img class="avatar-img" src="{{ asset($post->image) }}" alt="user-image">
                        </div>
                      </td>
                      
                      <td>
                        <a href="{{ route('post', $post->slug)}}">
                          {{ $post->title }}
                        </a>
                      </td>
                        <td>{!! Str::limit($post->description, 50,  '...') !!}</td>
                        <td>
                          <a href={{ route('admin.post.metadata', $post) }}>Views {{$post->views}}</a>
                        </td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>

                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.edit', $post) }}">{{ __('Edit') }}</a>
                            <form style="display: inline-block"
                                  action="{{ route('admin.posts.destroy', $post->slug) }}"
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