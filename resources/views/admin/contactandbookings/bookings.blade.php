@extends('layouts.app')
@section('content')
   
<div class="card mb-4">
    <div class="card-header"><strong>Tables</strong><span class="small ms-1">Basic example</span></div>
    <div class="card-body">
      <p class="text-medium-emphasis small">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap.</p>
      <div class="example">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000" role="tab">
              <svg class="icon me-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
              </svg>Preview</a></li>
          <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/content/tables/#overview" target="_blank">
              <svg class="icon me-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
              </svg>Code</a></li>
        </ul>
        <div class="tab-content rounded-bottom">
          <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection