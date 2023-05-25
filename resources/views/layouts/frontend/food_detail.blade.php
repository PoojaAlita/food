@extends('layouts.frontend.master')
@section('pageTitle',"Home")
@section('contain')
<div class="container food-detail-container">
    <div class="row">
        <div class="col-md-12 food-details-heading">
            Food details
        </div>

    </div>
@foreach ($foods as $food)
    <div class="row">
        <div class="col-md-3 border">
            <b>Contact Person Name</b>
        </div>
        <div class="col-md-3 border">
            {{$food->contact_person}}
            </div>
        <div class="col-md-3 border">
            <b> Person Mobile Number </b>
        </div>
        <div class="col-md-3 border">
            {{$food->contact_person_mobile_number}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 border">
           <b> State Name </b>
        </div>
        <div class="col-md-3 border">
            {{$food->state->name}}
            </div>
        <div class="col-md-3 border">
           <b> City Name </b>
        </div>
        <div class="col-md-3 border">
            {{$food->city->name}}
        </div>
    </div>
    <div class="row">
            <div class="col-md-3 border">
                <b>Description</b>
            </div>
            <div class="col-md-3 border">
                {{$food->description}}
            </div>
            <div class="col-md-3 border">
                <b>Pickup Address</b>
            </div>
            <div class="col-md-3 border">
                {{$food->pickup_address}}
                </div>
    </div>
    <div class="row">
        <div class="col-md-3 border">
           <b> Pickup Date</b>
        </div>
        <div class="col-md-3 border">
            {{ date('m-d-Y', strtotime($food->pickup_date)) }}
        </div>
        <div class="col-md-3 border">
           <b> Status</b>
        </div>
        <div class="col-md-3 border">
            {{$food->status == 1 ? 'Not Confirmed Yet' : 'Confirmed'}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 border">
            <button type="submit" class="food-detail-btn add_food_request" data-id="{{$food->id}}">Request Food</button>
        </div>
    </div>
@endforeach
</div>

<!-- Food Request Modal -->

  <div class="modal fade" id="food_request_modal" tabindex="-1" role="dialog" aria-labelledby="title_food_request_modal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" id="title_food_request_modal">Add Food Request</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" id="food_request_form">
          @csrf
        <div class="md-form mb-2">
          <input type="text" id="name" name="name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Your name</label>
        </div>

        <div class="md-form mb-3">
          <input type="email" id="email" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Your email</label>
        </div>
        </form>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo submit_food_request">Send</button>
      </div>
    </div>
  </div>
</div>


@endsection
@section('costome-script')
<script src="{{ asset('assets/js/request_food.js')}}"></script>
@endsection



