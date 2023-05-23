@extends('layouts.master')
@section('title',"City")
@section('plugin-css')
<link href="{{ asset('assets/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection
@section('content')
<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-10">
                  <h6 class="page-title">Citys</h6>
                </div>
                <div class="col-md-2">
                  <a  class="btn btn-primary add_city" style="float: right" id="add_city">Add City</a>
            </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <div class="table-responsive mt-2">
                    <table id="city_tbl" class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>

<!-- city Modal -->
<div class="modal fade select  bd-example-modal-md addmodal" id="city_modal" tabindex="-1" aria-labelledby="title_city_modal" aria-hidden="true">
 
  <div class="modal-dialog modal-md modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_city_modal">Add City </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" id="city_form">
          @csrf
          <input type="hidden" name="id" class="id" id="id" value="">
     
          <div class="row">
            <div class="form-group state mb-3">
              <label for="exampleInputPublicPrivateHospital">State</label> 
              <select class="select_dropdown form-select state form-control" data-width="100%" name="state" id="mySelect2">
                <option selected disabled value="0">Select State</option>

                @if($state->isEmpty())
                <option selected disabled value="0">First Enter State</option>
              @else
                @foreach($state as $states)
                <option  value="{{$states->id}}">{{$states->name}}</option>
                @endforeach
              @endif
             </select>
            </div>
              <label class="form-label">Name</label>
              <div class="form-group mb-3">
                <input type="text" name="city" id="city" class="form-control" placeholder="Please Enter city Name">
              </div>
          </div>
        
          <button class="btn btn-primary submit_city" type="button"></button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('plugin-script')
    <script src="{{ asset('assets/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 

@endsection
@section('costome-script')
  <script src="{{ asset('assets/js/select2.js') }}"></script>
   <script src="{{ asset('assets/js/city.js')}}"></script>
@endsection
