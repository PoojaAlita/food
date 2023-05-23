@extends('layouts.frontend.master')
@section('pageTitle',"Home")
@section('contain')
<div class="container main-container">
    <div class="row text-bg-color">
      <div class="col-md-12 text-center text1">
       <p>Welcome To Food Care Management System</p>
      </div>
      <div class="col-md-12 text-center">
        <p><b>Food Care</b> refers to the decrease in the quantity or quality of food resulting from decisions and anction by retailers, food sevice providers and consumers.Food is wasted in many ways.</p>
      </div>
      <div class="col-md-12">
        <p> Fresh produce that deviates from what is considered optimal, for example in terms of shape, size and color, is often removed from the supply chain during sorting operations.</p>
    </div>
      <div class="col-md-12">
        <p>Large quantities of wholesome edible food are often unused or left over and discarded from household kitchens and eating establishments.</p>
      </div>
      <div class="col-md-12">
        Less food loss and waste would lead to more efficient land use and better water resource management with positive impacts on climate change and livelihoods.
    </div>

    </div>

    <div class="row our-mission">
        <h3>OUR MISSION</h3>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img class="sub-img" src="{{asset('images/images.jpeg')}}" alt="" height="50">
        </div>
        <div class="col-md-2">
            <i class="fa fa-umbrella " aria-hidden="true"></i>

        </div>
    </div>
    <div class="row">

    </div>
</div>
@endsection
