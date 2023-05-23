@extends('layouts.master')
@section('title',"State")
@section('plugin-css')
  <link href="{{ asset('assets/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-10">
                  <h6 class="page-title">States</h6>
                </div>
                <div class="col-md-2">
                  <a  class="btn btn-primary add_state" style="float: right" id="add_state">Add State</a>
            </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <div class="table-responsive mt-2">
                    <table id="state_tbl" class="table">
                      <thead>
                        <tr>
                          <th>No</th>
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

<!-- state Modal -->
<div class="modal fade select  bd-example-modal-md addmodal" id="state_modal" tabindex="-1" aria-labelledby="title_state_modal" aria-hidden="true">
  <div class="loader-background" id="loader_bg" style="display:none">
    <div class="spinner-border"  id="loader"   role="status"></div>
 </div> 
  <div class="modal-dialog modal-md modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_state_modal">Add state </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" id="state_form">
          @csrf
          <input type="hidden" name="id" class="id" id="id" value="">
     
          <div class="row">
              <label class="form-label">Name</label>
              <div class="form-group mb-3">
                <input type="text" name="state" id="state" class="form-control" placeholder="Please Enter State Name">
              </div>
          </div>
        
          <button class="btn btn-primary submit_state" type="button"></button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('plugin-script')
    <script src="{{ asset('assets/datatables-net/jquery.dataTables.js') }}"></script>
    {{-- <script src="{{ asset('assets/datatables-net/dataTables.bootstrap4.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
@endsection
@section('costome-script')
   <script src="{{ asset('assets/js/state.js')}}"></script>
@endsection
