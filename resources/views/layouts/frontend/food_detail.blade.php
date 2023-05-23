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
            <button type="submit" class="food-detail-btn" data-id="{{$food->id}}">Request Food</button>
        </div>
    </div>

@endforeach
</div>
@endsection
@section('costome-script')
<script src="{{ asset('assets/js/food.js')}}"></script>
@endsection



