@extends('layouts.master')
@section('title',"List Food Detail")
@section('plugin-css')
<link href="{{ asset('assets/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



@endsection
@section('content')
<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-10">
                  <h6 class="page-title">List Food Details</h6>
                </div>
                <div class="col-md-2">
                  <a  class="btn btn-primary add_food" style="float: right" id="add_food">Add Food</a>
            </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive mt-2">
                    <table id="food_tbl" class="table">
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

<!-- Food Modal -->
<div class="modal fade select  bd-example-modal-md addmodal" id="food_modal" tabindex="-1" aria-labelledby="title_food_modal" aria-hidden="true">

  <div class="modal-dialog modal-md modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_food_modal">Add Food </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" id="food_form">
          @csrf
          <input type="hidden" name="id" class="id" id="id" value="">

          <div class="row">
            <label class="form-label">Food Item</label>
              <div class="form-group mb-3">
                    <input type="text" name="food" id="food" placeholder="Enter Food" class="form-control"/>
                    <div id="new_chq"></div>
                    <input type="hidden" value="1" id="total_chq" class="form-control">
                    <button class="btn btn-success add">Add</button>
                    <button class="btn btn-danger remove">remove</button>
              </div>
              <label class="form-label">Description</label>
              <div class="form-group mb-3">
                <textarea class="form-control" name="description" id="description" cols="5" rows="3"></textarea>
              </div>

              <label class="form-label">Pickup Date</label>
              <div class='form-group mb-3' id='datetimepicker'>
                <input type="datetime-local" class="form-control" name="pickup_date">
              </div>
              <label class="form-label">Address</label>
              <div class='form-group mb-3'>
                <input type="text" class="form-control" name="pickup_address" id="pickup_address">
              </div>

            <div class="form-group state mb-3">
              <label for="exampleInputPublicPrivateHospital">State</label>
              <select class="select_dropdown form-select state-dropdown mySelect2" data-width="100%" name="state">
                <option selected disabled value="0">Select State</option>
                @if($data['state']->isEmpty())
                    <option selected disabled value="0">First Enter State Name</option>
                @else
                @foreach($data['state'] as $states)
                <option  value="{{$states->id}}">{{$states->name}}</option>
                @endforeach
                @endif
             </select>

          <div class="form-group city mb-3">
            <label for="exampleInputPublicPrivateHospital">City</label>
            <select class="select_dropdown form-select city-dropdown  mySelect2" data-width="100%" name="city">
           </select>
        </div>
        <label class="form-label">Contact Person Name</label>
              <div class='form-group mb-3'>
                <input type="text" class="form-control" name="contact_person_name" id="contact_person_name">
              </div>

        <label class="form-label">Contact Person Mobile Number</label>
        <div class='form-group mb-3'>
          <input type="text" class="form-control" name="contact_person_mobile_number" id="contact_person_mobile_number">
        </div>

          </div>

          <button class="btn btn-primary submit_food" type="button"></button>
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
  <script src="{{ asset('assets/js/food.js')}}"></script>
  {{-- DateTimePicker Script--}}
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script type="text/javascript">
    $('.add').on('click', add);
    $('.remove').on('click', remove);

function add() {
  var new_chq_no = parseInt($('#total_chq').val()) + 1;
  var new_input = "<input type='text' id='new_" + new_chq_no + "' name='add_food[]'>";

  $('#new_chq').append(new_input);

  $('#total_chq').val(new_chq_no);
}

function remove() {
  var last_chq_no = $('#total_chq').val();

  if (last_chq_no > 1) {
    $('#new_' + last_chq_no).remove();
    $('#total_chq').val(last_chq_no - 1);
  }
}

// DateTimePicker
flatpickr("input[type=datetime-local]");

</script>
@endsection
