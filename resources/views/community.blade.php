<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rip Book | Community Rules</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">


</head>

<body>
    @include('layouts.user.header')
    <div class="container my-5">
        <h1>Community Rules</h1>
        <p>At our community, we are committed to providing a safe and welcoming environment for all members. To ensure this, we have established the following community policies:</p>
        <ul>
            <li><strong>Respectful Communication:</strong> Members must communicate with one another in a respectful manner. This includes refraining from personal attacks, hate speech, or any form of discrimination.</li>
            <li><strong>No Spamming:</strong> Members are not allowed to spam the community with promotional material, links, or any other form of unsolicited content.</li>
            <li><strong>No Illegal Activity:</strong> Any form of illegal activity is strictly prohibited within the community. This includes the sharing of pirated content, hacking, or any other form of criminal activity.</li>
            <li><strong>No Trolling:</strong> Members are not allowed to engage in trolling behavior or intentionally provoke other members.</li>
            <li><strong>No Harassment:</strong> Harassment of any kind is not tolerated within the community. This includes sexual harassment, cyberbullying, or any other form of harassment.</li>
        </ul>
        <p>Any member who violates these policies may face disciplinary action, up to and including expulsion from the community.</p>
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