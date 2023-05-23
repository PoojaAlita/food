<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                 @if (Auth::user()->status == 0)
                <li>
                    <a href="{{route('dashboard.state')}}" class="waves-effect">
                        <i class="fas fa-clipboard-list"></i>
                        <span>State</span>
                    </a>
                </li>
                @endif 
                @if (Auth::user()->status == 0) 
                <li>
                    <a href="{{route('dashboard.city')}}" class="waves-effect">
                        <i class="fa fa-th-list" aria-hidden="true"></i>
                        <span>City</span>
                    </a>
                </li>
                 @endif 
                @if (Auth::user()->status == 0)
                <li>
                    <a href="{{route('dashboard.donor')}}" class="waves-effect">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        <span>Reg Food Donor</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->status == 0)
                <li>
                    <a href="{{route('dashboard.food.listing')}}" class="waves-effect">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <span>Listed Food</span>
                    </a>
                </li>
                @endif
                <!-- @if (Auth::user()->status == 0)
                <li>
                    <a href="#" class="waves-effect">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Food Request</span>
                    </a>
                </li>
                @endif -->
                @if (Auth::user()->status == 1)
                <li>
                    <a href="{{route('dashboard.food')}}" class="waves-effect">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span>List Food Detail</span>
                    </a>
                </li>    
                @endif

              <!--   @if (Auth::user()->status == 1)
                <li>
                    <a href="#" class="waves-effect">
                        <i class="fa fa-list-ol" aria-hidden="true"></i>

                        <span>Request</span>
                    </a>
                </li>
                @endif -->
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>