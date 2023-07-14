@extends('layouts.app')
@section('content')
   
<div class="card mb-4">
    <div class="card-header"><strong>Contacts</strong><span class="small ms-1"></span></div>
    <div class="card-body">
      <div class="example">
        
        <div class="tab-content rounded-bottom">
          <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Query Type</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Message</th>
                  <th scope="col">Date time</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($contacts as $contact)    
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->query_type }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            {{-- <a class="btn btn-sm btn-primary" href="{{ route('admin.contacts.edit', $contact->id) }}">{{ __('Edit') }}</a> --}}
                            <form style="display: inline-block"
                                  action="{{ route('admin.contact.destroy', $contact->id) }}"
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
  </div>
@endsection