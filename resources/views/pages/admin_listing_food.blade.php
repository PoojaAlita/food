@extends('layouts.master')
@section('title',"Register Food Donor List")
@section('plugin-css')
<link href="{{ asset('assets/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-10">
                  <h6 class="page-title">Register Food Donors</h6>
                </div>
               
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <div class="table-responsive mt-2">
                    <table id="donor_tbl" class="table">
                      <thead>
                        <tr>
                        <th>No</th>
                          <th>Food Name</th>
                          <th>Description</th>
                          <th>Pickup Date</th>
                          <th>Pickup Address</th>
                          <th>State</th>
                          <th>City</th>
                          <th>Contact Person Name</th>
                          <th>Contact Person Mobile Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($food as $key=> $food)
                            <tr>
                              <th>{{++$key}}</th>
                              <th>{{$food->food_item}}</th>
                              <th>{{$food->description}}</th>
                              <th>{{$food->pickup_date}}</th>
                              <th>{{$food->pickup_address}}</th>
                              <th>{{$food->state->name}}</th>
                              <th>{{$food->city->name}}</th>
                              <th>{{$food->contact_person}}</th>
                              <th>{{$food->contact_person_mobile_number}}</th>
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
@endsection

