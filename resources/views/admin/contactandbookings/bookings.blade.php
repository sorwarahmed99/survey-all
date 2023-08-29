@extends('layouts.app')
@section('content')
   
<div class="card mb-4">
    <div class="card-header"><strong>Bookings</strong></div>
    <div class="card-body">
      <div class="example">
        <div class="tab-content rounded-bottom">
          <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Area</th>
                  <th scope="col">Basic Details</th>
                  <th scope="col">Service Details</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($bookings as $booking)
                
                <tr>
                  <th scope="row">{{ $count }}</th>
                  <td>{{ $booking->area_or_postcode }}</td>
                  <td>
                    <ul class="list-group">
                      <li class="list-group-item">
                        {{ $booking->name }}
                      </li>
                      <li class="list-group-item">
                        {{ $booking->email }}
                      </li>
                      <li class="list-group-item">
                        {{ $booking->phone }}
                      </li>
                    </ul>
                  </td>
                  <td>
                      <ul class="list-group">
                        <li class="list-group-item">
                            <b>{{ $booking->job_type }}</b>
                        </li>

                        @if($booking->job_type == 'RICS Home Survey')
                            <li class="list-group-item">
                              Survey Type -  {{ $booking->survey_type }}
                            </li>
                        @endif

                        @if($booking->job_type == 'RICS Home Valuation')
                        <li class="list-group-item">
                          @if($booking->valuation_reason != null)
                            Reason -  {{ $booking->valuation_reason }}
                          @endif
                        </li>
                        @endif 
                        @if($booking->valuation_other_reason != null)
                        @if($booking->valuation_for_lending_purpose != null)
                        <li class="list-group-item">
                            Specific Reason - {{ $booking->valuation_other_reason }}
                        </li>
                        <li class="list-group-item">
                          Landing purposes - {{ $booking->valuation_for_lending_purpose }}
                        </li>
                          @endif
                        @endif
                      </ul>
                    </td>
                    <td>{{ $booking->created_at->format('d-m-Y') }}</td>
                    <td class="d-flex align-items-center justify-content-between p-2">
                        <button class="btn btn-sm btn-primary mr-2" data-coreui-toggle="modal" data-coreui-target="#exampleModal-{{ $booking->id }}">
                          <i class="fa fa-external-link"></i>
                        </button>
                        <form style="display: inline-block"
                              action="{{ route('admin.booking.destroy', $booking) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger text-white" type="submit" onclick="return confirm('{{ __('Are you sure?') }}')"> 
                                X
                            </button>
                        </form>
                    </td>
                  </tr>


                  <div class="modal fade" id="exampleModal-{{ $booking->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <b>{{ $booking->job_type }}</b>
                            </h5>
                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <b>{{ $booking->job_type }}</b>
                                </li>
                                @if($booking->job_type == 'RICS Home Survey')
                                    <li class="list-group-item">
                                    Survey Type -  {{ $booking->survey_type }}
                                    </li>
                                @endif

                                @if($booking->job_type == 'RICS Home Valuation')
                                <li class="list-group-item">
                                @if($booking->valuation_reason != null)
                                    Reason -  {{ $booking->valuation_reason }}
                                @endif
                                </li>
                                @endif 
                                @if($booking->valuation_other_reason != null)
                                @if($booking->valuation_for_lending_purpose != null)
                                <li class="list-group-item">
                                    Specific Reason - {{ $booking->valuation_other_reason }}
                                </li>
                                <li class="list-group-item">
                                Landing purposes - {{ $booking->valuation_for_lending_purpose }}
                                </li>
                                @endif
                                @endif
                                <li class="list-group-item">
                                   <b>Instruction :</b> {{ $booking->instruction }}
                                </li>
                            </ul>
                            <ul class="list-group mt-2">
                                <li class="list-group-item">
                                    <b>Contact details</b>
                                    <p>
                                        Name - {{ $booking->name }}
                                        <br>
                                        Email - {{ $booking->email }}
                                        <br>
                                        Phone - {{ $booking->phone }}
                                        <br>
                                        Area - {{$booking->area_or_postcode }}
                                    </p>
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
            {!! $bookings->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection