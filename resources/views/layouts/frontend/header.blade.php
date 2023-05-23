<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{route('frontendDashboard')}}">
            <img class="header-logo" src="{{asset('logo/fk-removebg-preview.png')}}" alt="" height="50">
</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{route('frontendDashboard')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">About </a>
                 </li>

                <li class="nav-item">
                   <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Doner</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Admin</a>
                 </li>


             </ul>
          </div>
       </nav>
    </div>
 </header>
