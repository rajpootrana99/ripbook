<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/feed.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body>
    @include('layouts.user.header')

    <div class="section section_1">
        <img src="{{ asset('asset/images/tributes_hero_image.jpg') }}" alt="" class="hero_image">
        <div class="hero_gradient"></div>
        <div class="main_section">

            <div class="hero_container">

                <div class="hero_content">
                    <div class="hero_heading">
                        Memorials
                    </div>
                    <div class="hero_paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere a ligula in egestas. Quisque et sem ex. Nam in sapien et lorem mollis accumsan scelerisque at lacus. Aliquam tincidunt vehicula facilisis. In hac habitasse platea dictumst. Nullam venenatis ante nulla, vitae lacinia lorem dictum mollis. Maecenas pharetra dictum nunc, non efficitur magna varius vitae.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section section_2">
        <div class="main_section">
            <div class="cards_container">
                <div class="row">
                    @foreach($feeds as $feed)
                    <div class="col-sm-4">
                        <div class="item_container card_item">
                            <a href="{{ route('memorial.show',['memorial' => $feed]) }}">
                                <img loading="lazy" src="{{ asset('storage/'.$feed->feature_image)}}" class="item_picture card_image" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">{{ $feed->pob }}</div>
                                    <div class="item_name">{{ $feed->title }}</div>
                                    <div class="time_of_death">
                                        <div class="lifetime">Date of Birth: {{ $feed->dob }}</div>
                                        <div class="time_passed">Date of Death: {{ $feed->dod }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    @include('layouts.user.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('asset/js/header.js') }}"></script>
    <script src="{{ asset('asset/js/feed.js') }}"></script>

</body>

</html>