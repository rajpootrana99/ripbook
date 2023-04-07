<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rip Book | Home</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/index.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/card_style.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        .error-message {
            width: 100%;
            position: sticky;
            top: 0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            background-color: #ff0000;
            color: #ffffff;
            z-index: 1000;
        }

        .error-message i {
            cursor: pointer;
        }

        .hide-message {
            display: none;
        }
    </style>
</head>

<body>

        @if(\Session::has('message'))
            <div class="error-message">{!! \Session::get('message') !!}<div class="btn-close"><i class="fas fa-close" ></i></div></div>
        @endif
    @include('layouts.user.header')
    @yield('content')

    @include('layouts.user.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('asset/js/header.js')}}"></script>
    <script src="{{ asset('asset/js/index.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <script src="{{ asset('asset/js/memorial.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {

        function validateForm() {
            let x = document.forms["searchForm"]["search_val"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }

        $("#d_o_b").click(function() {
            searchForm();
        });
        $("#d_o_d").click(function() {
            searchForm();
        });
        $(".btn-close").click(function() {
            $('.error-message').addClass('hide-message');
        });

        

    });
</script>

</body>

</html>