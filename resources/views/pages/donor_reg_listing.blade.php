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
                          <th>Name</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($userData as $key=> $user)
                            <tr>
                              <th>{{++$key}}</th>
                              <th>{{$user->name}}</th>
                              <th>{{$user->email}}</th>
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

