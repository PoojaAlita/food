<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
           {{--  <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img  src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="22">
                    </span>
                    
                </a>

                <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                      
                        <div class="logo-pop"><a  href="{{ route('dashboard') }}"> <img class="pop-logo" src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="22"></a>

                    </span>
                    <span class="logo-lg">
                         <div class="logo-pop"><a  href="{{ route('dashboard') }}"> <img class="pop-logo" src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="22"></a>
                 
                </div>
                    </span>
                </a>
            </div> --}}

            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('logo/output-onlinepngtools.png')}}" alt="" height="18">
                    </span>
                </a>
            </div>
            

           

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
           
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <!--    <img class="rounded-circle header-profile-user" src="{{asset('admin/assets/images/users/user-4.jpg')}}"
                        alt=""> -->{{Auth::user()->name}}
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>