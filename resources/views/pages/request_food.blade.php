@extends('layouts.master')
@section('title',"Food Request")
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
                  <h6 class="page-title">Food Request</h6>
                </div>

            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive mt-2">
                    <table id="food_request_tbl" class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($food_details as $key=> $food_detail)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{$food_detail->name}}</th>
                          <th>{{$food_detail->email}}</th>
                          <th><a href="#" data-id="{{$food_detail->status}}" class="accept_food_request">{{$food_detail->status == 0 ? 'Pending' : ($food_detail->status == 2 ? 'Accept' : 'Request')}}</a></th>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
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
  <script src="{{ asset('assets/js/request_food.js')}}"></script>
@endsection
