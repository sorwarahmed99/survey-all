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
                  <th scope="col">Details</th>
                  <th scope="col">Message</th>
                  <th scope="col">Date</th>
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
                        <td>{{ $contact->query_type }}</td>
                        <td>
                          <ul class="list-group">
                            <li class="list-group-item">
                              {{ $contact->name }}
                            </li>
                            <li class="list-group-item">
                              {{ $contact->email }}
                            </li>
                            <li class="list-group-item">
                              {{ $contact->phone }}
                            </li>
                          </ul>
                          
                        </td>
                        <td>{!! Str::limit($contact->message, 50,  '...') !!}</td>

                        <td>{{ $contact->created_at->format('d-m-Y') }}</td>

                        <td>
                          <button class="btn btn-sm btn-primary mr-2" data-coreui-toggle="modal" data-coreui-target="#exampleModal-{{ $contact->id }}">
                            <i class="fa fa-external-link"></i>
                          </button>
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

                    <div class="modal fade" id="exampleModal-{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                  <b>{{ $contact->name }}</b>
                              </h5>
                              <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <ul class="list-group">
                                  <li class="list-group-item">
                                    Query type - <b>{{ $contact->query_type }}</b>
                                  </li>
                                  
                              </ul>
                              <ul class="list-group mt-2">
                                  <li class="list-group-item">
                                      <b>Contact details</b>
                                      <p>
                                          Name - {{ $contact->name }}
                                          <br>
                                          Email - {{ $contact->email }}
                                          <br>
                                          Phone - {{ $contact->phone }}
                                          <br>
                                      </p>
                                  </li>
                              </ul>
                              <ul class="list-group mt-2">
                                <li class="list-group-item">
                                  <b>Message</b>
                                  {{ $contact->message }}
                                </li>

                              </ul>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    @php
                        $count++;
                    @endphp
                @endforeach
                
              </tbody>
            </table>
            {!! $contacts->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection