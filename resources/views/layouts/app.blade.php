<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
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

      <!-- Jquery Scripts -->
      <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <style>
         #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #1478ae;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
         }

         #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
         }

         @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;} 
            to {bottom: 30px; opacity: 1;}
         }

         @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
         }

         @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;} 
            to {bottom: 0; opacity: 0;}
         }

         @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
         }
      </style>

   </head>
   <body>
 
      <!-- Wrapper Start -->
      <div class="wrapper">
        @include('layouts.partials.sidebar')
        @include('layouts.partials.header')
        @yield('content')
      </div>
      <div id="snackbar"></div>

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
