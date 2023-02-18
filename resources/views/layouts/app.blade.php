<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Rip Book | User Dashboard</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('asset/admin/images/favicon.ico')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('asset/admin/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('asset/admin/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('asset/admin/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('asset/admin/css/responsive.css')}}">

   </head>
   <body>
 
      <!-- Wrapper Start -->
      <div class="wrapper">
        @include('layouts.partials.sidebar')
        @include('layouts.partials.header')
        @yield('content')
      </div>

      @include('layouts.partials.footer')
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('asset/admin/js/jquery.min.js')}}"></script>
      <script src="{{ asset('asset/admin/js/popper.min.js')}}"></script>
      <script src="{{ asset('asset/admin/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset('asset/admin/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset('asset/admin/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('asset/admin/js/waypoints.min.js')}}"></script>
      <script src="{{ asset('asset/admin/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('asset/admin/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('asset/admin/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('asset/admin/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('asset/admin/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('asset/admin/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('asset/admin/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('asset/admin/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('asset/admin/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset('asset/admin/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset('asset/admin/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset('asset/admin/js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ asset('asset/admin/js/kelly.js')}}"></script>
      <!-- am maps JavaScript -->
      <script src="{{ asset('asset/admin/js/maps.js')}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{ asset('asset/admin/js/worldLow.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('asset/admin/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('asset/admin/js/custom.js')}}"></script>

   </body>
</html>
