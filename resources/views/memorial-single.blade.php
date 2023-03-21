<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rip Book | Memorial</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/memorial.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/card_style.css') }}">



</head>

<body>
    <div class="header">
        <div class="main_section">
            <div class="hamburger_container">
                <div onclick="showDropdown(this)">
                    @guest
                    <button class="hamburger picture_dropdown_button"> <i class="fa-solid fa-gear"></i> </button>
                    @endguest
                    @auth
                    <img src="{{ asset('asset/images/section_7_img_1.png')}}" alt="" class="user_picture img-fluid picture_dropdown_button">
                    @endauth
                </div>
                <div class="dropdown_1 hide_dropdown" style="text-align: end;margin-top: 60px;" id="picture_dropdown_target">
                    @guest
                    <a href="{{ route('login' )}}" class="head_button dropdown_anchors">Login</a>
                    @endguest
                    @auth
                    <div class="user_name dropdown_anchors">{{ Auth::user()->name }}</div>
                    <a href="{{ route('dashboard') }}" class="head_anchor dropdown_anchors">Profile</a>
                    <form action="{{ route('logout') }}" style="display: none;" method="post" id="lgut">
                        @csrf
                        <input type="submit" id="logoutbtn">
                    </form>
                    <a type="button" onclick="$('#lgut').submit()" class="head_anchor dropdown_anchors">Logout</a>
                    @endauth
                </div>
            </div>
            <div class="left_header">
                <a class="logo_text" href="/">Vaalvu</a>
            </div>
            <div class="right_header">
                <div class="right">
                    <a href="/" class="head_anchor head_anchor_active">Home</a>
                    <a href="/" class="head_anchor">Pricing</a>
                    <a href="http://" class="head_anchor">Contact us</a>
                </div>
                <div class="left">
                    @guest
                    <a href="{{route('login')}}" class="head_button">Login</a>
                    @endguest
                    <div class="user_information">
                        <div onclick="showDropdown(this)">
                            @guest
                            <button class="hamburger picture_dropdown_button settings-icon"> <i class="fa-solid fa-gear"></i> </button>
                            @endguest
                            @auth
                            <img src="{{ asset('asset/images/section_7_img_1.png')}}" alt="" class="user_picture img-fluid picture_dropdown_button">
                            @endauth
                        </div>
                        <div class="dropdown_1 hide_dropdown" style="right:unset;width: 200px;top: 0;" id="picture_dropdown_target">
                            @guest
                            <a href="{{route('login')}}" class="head_button dropdown_anchors">Login</a>
                            @endguest
                            @auth
                            <div class="user_name dropdown_anchors">{{ Auth::user()->name }}</div>
                            <a href="{{ route('dashboard') }}" class="head_anchor dropdown_anchors">Profile</a>
                            <form action="{{ route('logout') }}" style="display: none;" method="post" id="lgut">
                                @csrf
                                <input type="submit" id="logoutbtn">
                            </form>
                            <a type="button" onclick="$('#lgut').submit()" class="head_anchor dropdown_anchors">Logout</a>
                            @endauth
                        </div>
                        @auth
                        <div class="user_name">{{ Auth::user()->name }}</div>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="hamburger_container">
                <button class="hamburger" id="hamburger_dropdown_button" onclick="showDropdown(this)"> <i class="fa-solid fa-bars"></i> </button>
                <div class="dropdown_1 hide_dropdown" id="hamburger_dropdown_target">
                    <a href="home/" class="head_anchor head_anchor_active dropdown_anchors" rel="noopener noreferrer">Home</a>
                    <a href="http://" class="head_anchor dropdown_anchors" rel="noopener noreferrer">Pricing</a>
                    <a href="http://" class="head_anchor dropdown_anchors" rel="noopener noreferrer">Contact us</a>
                </div>
            </div>

        </div>
    </div>

    <div class="section section_1">
        <div class="main_section">
        <input type="hidden" id="memorial" value="{{ $memorial->id }}">
            <div class="memorial_container">
                <div class="person_container">
                    <img src="{{ asset('storage/'.$memorial->feature_image)}}" alt="" class="person_image">
                    <div class="info_container">
                        <div class="info_title">
                            Age
                        </div>
                        <div class="info_data">
                            {{ $memorial->age}}
                        </div>
                    </div>
                    <div class="info_container">
                        <div class="info_title">
                            Date of birth
                        </div>
                        <div class="info_data">
                            {{ $memorial->dob}}
                        </div>
                    </div>
                    <div class="info_container">
                        <div class="info_title">
                            Date of death
                        </div>
                        <div class="info_data">
                            {{ $memorial->dod}}
                        </div>
                    </div>
                    <a class="tribute_now_button info_buttons" id="tributeBtn"> <img src="{{ asset('asset/images/tribute_now.svg')}}" alt=""> Tribute Now</a>
                    <div class="likeShareBtnmt-3">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="mQPuNecT"></script>
                        <a target="_blank" 
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" 
                            class="share_button info_buttons fb-xfbml-parse-ignore"><img src="{{ asset('asset/images/reply.svg')}}" alt=""> Share</a>
                    
                        <div class="fb-share-button" 
                            data-href="https://ripbook.arumsolutions.co/memorial/{{$memorial->id}}" 
                            data-layout="" data-size="large">
                            <a target="_blank" 
                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" 
                                class="fb-xfbml-parse-ignore">Share</a>
                            </div>
                    </div>
                    
                </div>
                <div class="person_about_container">
                    <div class="small_title">Obituary</div>
                    <div class="person_info">
                        <div class="person_name">{{ $memorial->title}} </div>
                        <div class="place_info">{{ $memorial->address}}</div>
                    </div>
                    <div class="about_memorial">About this memorial</div>
                    <div class="about_person_container">
                        <div class="para">
                            {{ $memorial->description}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_2">
        <div class="main_section">
            <div class="tribute_wrapper">
                <div class="heading">Memories</div>
                <div class="tribute_container">
                    <div class="write_tribute">Write tribute</div>
                    <form action="" method="post" class="post_tribute_wrapper">
                        <input type="text" class="tribute_box" placeholder="Write your own tribute here...">
                        <button type="submit" class="post_tribute_button">Post your tribute</button>
                    </form>
                </div>
            </div>
            <div class="horizontal_slider_wrapper">
                <button onclick="showSlider(this,'section_3')" class="h_slide_buttons h_slide_active">Tearful Tributes<sup>(06)</sup></button>
                <button onclick="showSlider(this,'section_4')" class="h_slide_buttons">Gallery<sup>({{ count($memorial->gelleries) }})</sup></button>
                <button onclick="showSlider(this,'section_5')" class="h_slide_buttons">Summary</button>
                <button onclick="showSlider(this,'section_6')" class="h_slide_buttons">NOTICES<sup>(01)</sup></button>
            </div>
        </div>
    </div>


    <div class="section section_3">
        <div class="main_section">
            <div class="all_tributes_container" id="tributes">
                
            </div>
        </div>
    </div>
    <div class="section section_4 d-none">
        <div class="main_section">
            <div class="container text-center">
                <div class="row">
                    @if(count($memorial->gelleries) > 0 )
                    @foreach($memorial->gelleries as $gellery)
                    <div class="col-sm-4 p-2">
                        <img src="{{ asset($gellery->image)}}" alt="" class="memory_image">
                    </div>
                    @endforeach
                    @else
                    <div class="col-sm-12">No Gallery found</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="section section_5 d-none">
        <div class="main_section">
            <div class="summary_container">
                <div class="summaries">
                    <img src="{{ asset('asset/images/summary/flipflopssvgrepocom-2.svg')}}" alt="" class="event_picture">
                    <div class="summary_text_container">
                        <div class="summary_name">{{ $memorial->pob }}</div>
                        <div class="summary_relation">birth place</div>
                    </div>
                </div>
                <div class="summaries">
                    <img src="{{ asset('asset/images/summary/placeuipinsvgrepocom-1.svg')}}" alt="" class="event_picture">
                    <div class="summary_text_container">
                        <div class="summary_name">{{ $memorial->residence }}</div>
                        <div class="summary_relation">Place of residence</div>
                    </div>
                </div>
                <div class="summaries">
                    <img src="{{ asset('asset/images/summary/religioncrosssvgrepocom-1.svg')}}" alt="" class="event_picture">
                    <div class="summary_text_container">
                        <div class="summary_name">{{ $memorial->religion }}</div>
                        <div class="summary_relation">Religion</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_6 d-none">
        <div class="main_section">
            <div class="notice_container">
                <div class="notices d-none"></div>
                <div class="notice_not_available">
                    <img src="{{ asset('asset/images/!notice.png')}}" alt="" class="notice_inavailable_picture">
                    No notice available yet.
                </div>
            </div>
        </div>
    </div>

    <div class="section footer">
        <div class="main_section">
            <div class="footer_section">
                <div class="left_footer_section foot_section">
                    <a href="" class="logo_text company_logo">Vaalvu</a>
                    <div class="copyright_statement">©2022-vaalvu All rights reserved.</div>
                </div>
                <div class="middle_footer_section foot_section">
                    <a href="" class="head_anchor foot_anchor">Home</a>
                    <a href="" class="head_anchor foot_anchor">Pricing</a>
                    <a href="" class="head_anchor foot_anchor">Contact</a>
                    <a href="" class="head_anchor foot_anchor">Help Center</a>
                </div>
                <div class="right_footer_section foot_section">
                    <div class="light_anchor_container">
                        <a href="" class="light_foot_anchor">About Us</a>
                        <a href="" class="light_foot_anchor">Terms</a>
                        <a href="" class="light_foot_anchor">Report Us</a>
                        <a href="" class="light_foot_anchor">Privacy Policy</a>
                        <a href="" class="light_foot_anchor">Cookie Policy</a>
                        <a href="" class="light_foot_anchor">Community Rules</a>
                    </div>
                    <div class="social_link_container">
                        <a href="" class="social_links">
                            <img src="{{ asset('asset/images/instagram.svg')}}" alt="" class="link_image">
                        </a>
                        <a href="" class="social_links">
                            <img src="{{ asset('asset/images/facebook.svg')}}" alt="" class="link_image">
                        </a>
                        <a href="" class="social_links">
                            <img src="{{ asset('asset/images/twitter.svg')}}" alt="" class="link_image">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="tributeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tribute</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form id="tearfulTributeFrom" method="POST">
                            @csrf
                            <input type="hidden" name="memorial_id" id="memorial_id" >
                            <div class="row">
                                <div class="col">
                                    <div class="inputBox">
                                        <span>Title</span>
                                        <input type="text" name="title" id="title" placeholder="Wreath Laid">
                                        <span class="text-danger title_error error_text"></span>
                                    </div>
                                    <div class="inputBox">
                                        <span>Sub Title</span>
                                        <input type="text" name="sub_title" id="sub_title" placeholder="RIP">
                                        <span class="text-danger sub_title_error error_text"></span>
                                    </div>
                                    <div class="inputBox">
                                        <span>Description</span>
                                        <textarea name="description" id="description" cols="30" rows="3" placeholder="Write your tribute..."></textarea>
                                        <span class="text-danger description_error error_text"></span>
                                    </div>

                                    <div class="flex">
                                        <div class="inputBox">
                                            <span>Country</span>
                                            <input type="text" name="country" id="country" placeholder="Sri Lanka">
                                            <span class="text-danger country_error error_text"></span>
                                        </div>
                                        <div class="inputBox">
                                            <span>Date</span>
                                            <input type="date" name="date" id="date">
                                            <span class="text-danger date_error error_text"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Tribute" class="submit-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('asset/js/header.js')}}"></script>
    <script src="{{ asset('asset/js/memorial.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <script>
        $(document).ready(function() {
            const memorial_id = document.getElementById('memorial').value;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            fetchTearfulTributes();

            function fetchTearfulTributes() {
            $.ajax({
                type: "GET",
                url: "../fetchTearfulTributes/"+memorial_id,
                dataType: "json",
                success: function(response) {
                    $('#tributes').html("");
                    var theme;
                    $.each(response.tearfulTributes, function(key, tearfulTribute) {
                        if(key%2 == 0){
                            theme = '';
                        }
                        else {
                            theme = 'black_theme';
                        }
                        $('#tributes').append('<div class="tribute_item '+theme+'">\
                            <div class="l_item">\
                                <div class="tributee">\
                                    <div class="tributer_name">'+tearfulTribute.title+'</div>\
                                    <div class="tributer_comment">\
                                        <img src="../asset/images/comma.svg" alt="" class="comma">\
                                        '+tearfulTribute.sub_title+'\
                                    </div>\
                                </div>\
                                <div class="tributee_description">\
                                    '+tearfulTribute.description+'\
                                </div>\
                                <div class="tributee_location">\
                                    '+tearfulTribute.country+' &#x2022; 5 years ago\
                                </div>\
                            </div>\
                            <div class="r_item">\
                                <img src="../asset/images/flower3png@2x.png" alt="" class="farewell_picture">\
                            </div>\
                        </div>');
                    });
                }
            });
        }

            $(document).on('click', '#tributeBtn', function(e) {
                e.preventDefault();
                $('#tributeModal').modal('show');
                $('#memorial_id').val(memorial_id);
                $('span.error_text').text('');
                $('#tearfulTributeFrom')[0].reset();
            });

            $(document).on('submit', '#tearfulTributeFrom', async function(e) {
                e.preventDefault();        
                let formData = new FormData($('#tearfulTributeFrom')[0]);
                console.log(formData)
                $.ajax({
                    type: "post",
                    url: "../tearfulTribute",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(document).find('span.error_text').text('');
                    },
                    success: function(response) {
                        if (response.status == 0) {
                            $('#tributeModal').modal('show')
                            $.each(response.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#tearfulTributeFrom')[0].reset();
                            $('#tributeModal').modal('hide');
                            fetchTearfulTributes();
                        }
                    },
                    error: function(error) {
                        $('#tributeModal').modal('show')
                    }
                });
            });
        });
    </script>
</body>

</html>