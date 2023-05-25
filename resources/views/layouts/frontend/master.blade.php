<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      {{-- <title>Famms - Fashion HTML Template</title> --}}
      <title>@yield('pageTitle')</title>

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- font awesome style -->
      <link href="{{asset('/frontend/css/font-awesome.min.css')}}" rel="stylesheet" /> 
      <!-- Custom styles for this template -->
      <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
      <!-- responsive style -->
      <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />

   </head>
   <body>

      <div class="{{Route::current()->getName() !='dashboard.food.detail' ? 'hero_area' : 'hero_area2'}}">
         <!-- header section strats -->

         @include('layouts.frontend.header')
         <!-- end header section -->
         <!-- slider section -->
         @if (Route::current()->getName() !='dashboard.food.detail')
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="images/istockphoto.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    HELP TURN TEARS TO SURES
                                    </span>
                                 </h1>
                                 <p>
                                 In a world filled with challenges, we have the power to create positive change. Imagine a community where no one goes to bed hungry, where every person has access to nourishing meals and the opportunity for a brighter future. You have the power to make that vision a reality.
                                 </p>
                                 <div class="btn-box">
                                    <a href="{{route('dashboard.food.detail')}}" class="btn1">
                                    Read More
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    HELP TURN TEARS TO SURES
                                    </span>
                                 </h1>
                                 <p>
                                 Every act of giving matters, no matter how big or small. Whether you're donating surplus food, volunteering your time, or raising awareness about food insecurity, your contribution can touch hearts and change lives. Your kindness has the power to nourish bodies, uplift spirits, and create lasting impact within our communities.
                                 </p>
                                 <div class="btn-box">
                                    <a href="{{route('dashboard.food.detail')}}" class="btn1">
                                    Read More
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    HELP TURN TEARS TO SURES
                                    </span>
                                 </h1>
                                 <p>
                                 Join us as we stand together, united in our commitment to eradicate hunger and build a more equitable world. Your support can inspire others to take action, to embrace the spirit of giving, and to make a difference in their own unique ways.
                                 </p>
                                 <div class="btn-box">
                                    <a href="{{route('dashboard.food.detail')}}" class="btn1">
                                    Read More
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>

         @endif

         <!-- end slider section -->
      </div>
      @yield('contain')

      <!-- footer start -->

      @include('layouts.frontend.footer')
      <!-- footer end -->

      <!-- jQery -->
      <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      {{-- <script src="{{asset('frontend/js/custom.js')}}"></script> --}}
      <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>

        <!-- url -->
        <script type="text/javascript">
         var aurl = {!! json_encode(url('/')) !!}
         /* Ajax Set Up */
         $.ajaxSetup({
              headers: {
                  "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
              },
          });
       </script>
          @yield('plugin-script')
          @yield('costome-script')
          <script src="{{ asset('assets/js/sweet_alert.js') }}"></script>

   </body>
</html>
