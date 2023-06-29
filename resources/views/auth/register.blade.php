@extends('layouts.master2')
@section('title',"Registration")

<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4">
                            <h5 class="text-white font-size-20">Register Now</h5>
                            <a href="{{route('dashboard')}}" class="logo logo-admin">
                                <img src="{{asset('logo/food.png')}}" height="62" alt="logo">
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <div class="p-3">
                            <form class=" mt-4"method="POST" action="{{route('sign_up')}}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control" name="name" id="username" placeholder="Enter User Name">
                                    <div class="text-danger">
                                        @error('name')
                                          {{$message}}
                                        @enderror
                                      </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Email</label>
                                    <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email">
                                    <div class="text-danger">
                                        @error('email')
                                          {{$message}}
                                        @enderror
                                      </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter Password">
                                    <div class="text-danger">
                                        @error('password')
                                          {{$message}}
                                        @enderror
                                      </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                        {{-- <input type="submit" class="btn btn-primary w-md waves-effect waves-light" name="Register"> --}}
                                    </div>

                                </div>
                                <p>Already have an account ? <a href="{{route('login')}}" class="fw-medium text-primary"> Login </a> </p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')

@endsection
@section('custome-script')
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/login_validation.js')}}"></script>
@endsection


