@extends('layouts.master')
@section('title',"Dashboard")
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Dashboard</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome to Food Waste Management System Dashboard</li>
                    </ol>
                </div>
              
            </div>
        </div>
        <!-- end page title -->
        @if(Auth::user()->status == 1)
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('admin/assets/images/services-icon/01.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Food </h5>
                            <h4 class="fw-medium font-size-24">{{$food}} <i
                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @endif
      
        @if(Auth::user()->status == 0)
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('admin/assets/images/services-icon/01.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">State</h5>
                            <h4 class="fw-medium font-size-24">{{$data['state']}} <i
                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('admin/assets/images/services-icon/01.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">City</h5>
                            <h4 class="fw-medium font-size-24">{{$data['city']}} <i
                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{asset('admin/assets/images/services-icon/01.png')}}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">User</h5>
                            <h4 class="fw-medium font-size-24">{{$data['user']}} <i
                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>

            
        @endif
       
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection