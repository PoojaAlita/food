@extends('layouts.master2')
@section('title',"Login")
@section('content')
<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4">
                            <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                            <a href="{{route('dashboard')}}" class="logo logo-admin">
                                <img src="{{asset('logo/food.png')}}" height="62" alt="logo">
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <div class="p-3">
                            <div class="alert alert-success mt-5" role="alert">
                                Enter your Email and instructions will be sent to you!
                            </div>
                            <form class="mt-4 forgot_password_form" method="POST" action="{{ route('password.email') }}">
                                @csrf 

                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Email</label>
                                    <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter Email">
                                </div>

                                <div class="row  mb-0">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">Reset</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

                <div class="mt-5 text-center">
                    <p>Remember It ? <a href="{{route('login')}}" class="fw-medium text-primary"> Sign In here </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('custome-script')
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/login_validation.js')}}"></script>
@endsection

