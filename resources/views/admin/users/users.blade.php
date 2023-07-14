@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-body">
        <table class="table">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                    <div class="float-start"><h2>Users</h2></div>
                        <div class="row">
                            <div class=" float-end">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-info add-new text-white  float-end"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                  </div>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <td class="text-center">
                        
                      </td>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Created at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td class="text-center">
                          <div class="avatar avatar-md">
                            <img class="avatar-img" src="{{ asset($user->profile_image != null ? $user->profile_image : 'resources/assets/img/avatars/avatar.png' ) }}" alt="user-image">
                          </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->id) }}">{{ __('Edit') }}</a>
                            <form style="display: inline-block"
                                  action="{{ route('admin.users.destroy', $user->id) }}"
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