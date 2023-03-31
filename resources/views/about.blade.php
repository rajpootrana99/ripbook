<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rip Book | About Us</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">
    <style>
        .footer {
            bottom: 0;
            left: 0;
            position: absolute;
            width: 100%;
        }
    </style>


</head>

<body>
    @include('layouts.user.header')
    <div class="container my-5">
        <h1>About Us</h1>
        <p>RIPBook.com is the place where the world pauses to embrace the power of a life well-lived. We believe that a single life story can provide extraordinary inspiration, even after that person has died. So we champion every life, knowing it can connect us in unexpected, powerful ways.
        <br><br>
        Today, RIPBook.com is the global leader in online obituaries and a destination for over half a million unique visitors & more than 2 million pages viewed each month around the world. Founded in 2018, RIPBook.com is honored to serve users across the global. We do have partnerships with world’s largest vendors to provide easy ways for consumers to express condolences, share direct support for families, and celebrate the people who have touched their lives.
        <br><br>
        RIPBook.com's partners benefit from our unparalleled scale, which enables continuous innovation of our industry-leading obituary products and accompanying cross-platform e-commerce engine. RIPBook.com is a privately held company, headquartered in UK Flag Unit 1 10 Stonefield Way, Ruislip, Middlesex, HA4 0JS, UK
        <br><br>
        with additional offices in Canada,France,Switzerland,India and Sri lanka with dedicated associates who help the customers across global.
        <br><br>
        Regards,
        <br>
        Website Administration</p>
    </div>
    
    @include('layouts.user.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('asset/js/header.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>

</html>