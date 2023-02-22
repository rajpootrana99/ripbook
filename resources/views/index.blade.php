<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/card_style.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
                <a class="logo_text" href="">Vaalvu</a>
            </div>
            <div class="right_header">
                <div class="right">
                    <a href="/" class="head_anchor head_anchor_active">Home</a>
                    <a href="#pricicing_section" class="head_anchor">Pricing</a>
                    <a href="" class="head_anchor">Contact us</a>
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
                    <a href="/" class="head_anchor head_anchor_active dropdown_anchors">Home</a>
                    <a href="#pricicing_section" class="head_anchor dropdown_anchors">Pricing</a>
                    <a href="http://" class="head_anchor dropdown_anchors">Contact us</a>
                </div>
            </div>

        </div>
    </div>
    <div class="section section_1">
        <div class="main_section">
            <div class="left_section_1">
                <div class="moto">
                    The most <span style="color:#ffffffa6;">beautiful tribute</span> for your departed loved one.
                </div>
                <div class="description">
                    Memories are fragile. Conversations fade. Photos are scattered. That’s why we created a single, simple place to collect and preserve memories. The result is a rich tapestry of stories and photos, preserved for family and friends for years to come. Completely Free!
                </div>
                <div class="form_wrapper">
                    <div class="form_name">
                        Search By
                    </div>
                    <div class="form_grid">
                        <div class="radio_1">
                            <input type="radio" name="date" id="d_o_b">
                            <label for="d_o_b"><span style="opacity: 0.6;">Date of birth</span></label>
                        </div>
                        <div class="radio_2">
                            <input type="radio" name="date" id="d_o_d">
                            <label for="d_o_d"><span style="opacity: 0.6;">Date of death</span></label>
                        </div>
                    </div>
                    <div class="form_grid" style="column-gap: 0%;">
                        <div style="display:flex;">
                            <input type="text" name="" readonly onclick="this.nextElementSibling.showPicker()" placeholder="Enter Date" class="input_box" id="">
                            <input type="date" name="" id="" onchange="this.previousElementSibling.value=this.value" class="input_box date_box">
                            <img loading="lazy" src="{{ asset('asset/images/calendar.svg')}}" class="calendar_icon" alt="" srcset="">
                        </div>

                        <input type="submit" class="search_btn" role="button" value="Search">
                    </div>
                </div>
            </div>
            <div class="right_section_1">
                <div class="absolute_item">
                    <a href="{{ route('memorial.index' )}}" class="create-memorial">
                        <i class="fa-solid fa-pen-to-square" style="color: #60C689;"></i> Create Memorial
                    </a>
                </div>
                <div class="picture_container">
                    <img loading="lazy" src="{{ asset('asset/images/rectangle_382x.png')}}" class="pic4 img-fluid" alt="" srcset="">
                    <img loading="lazy" src="{{ asset('asset/images/rectangle_392x.png')}}" class="pic1 img-fluid" alt="">
                    <img loading="lazy" src="{{ asset('asset/images/rectangle_372x.png')}}" class="pic2 img-fluid" alt="">
                    <img loading="lazy" src="{{ asset('asset/images/rectangle_362x.png')}}" class="pic3 img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section section_2">
        <div class="main_section">
            <div class="left_section_2">
                <div class="left">
                    <div class="left_top_section">
                        <div class="left_top_top_section">
                            <div class="news">LATEST</div>
                            <div class="heading">Featured Memorials and Obituaries</div>
                        </div>
                        <div class="description">What were they like as children? In college? At work? Participating in a hobby? We Remember encourages you to get memories from everyone who knew them, so you can see sides of them you never knew existed.</div>
                    </div>
                    <div class="form_grid left_bottom_section">
                        <a href="" class="see_feed_button">See Feed</a>
                        <a href="{{ route('memorial.index' )}}" class="create-memorial">
                            <i class="fa-solid fa-pen-to-square" style="color: #60C689;"></i> Create Memorial
                        </a>
                    </div>
                </div>
            </div>
            <div class="right_section_2" onload="setTimeout(()=>{this.style.height=screen.availHeight+'px';},500)">
                <div class="vertical_slider_container">
                    <div class="top_cover"></div>
                    <div class="d-flex vertical_slide">
                        <div class="vertical_slide_1">
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_1.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">India</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Mrs Manonmani Sokkalingam</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_1.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">India</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Mrs Manonmani Sokkalingam</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_2.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">Germany</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Late Srikanthan Naguleswary</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_3.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">Italy</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Late Srikanthan Naguleswary</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="vertical_slide_2">
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_3.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">India</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Mrs Manonmani Sokkalingam</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_3.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">India</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Mrs Manonmani Sokkalingam</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_4.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">Germany</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Late Srikanthan Naguleswary</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('asset/images/vertical_slideer_img_4.png')}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">Italy</div>
                                    <a href="{{ route('single-memorial') }}">
                                        <div class="item_name">Late Srikanthan Naguleswary</div>
                                    </a>
                                    <div class="time_of_death">
                                        <div class="lifetime">1945&mdash;2021</div>
                                        <div class="time_passed">1 hour ago</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bottom_cover"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_3">
        <div class="main_section">
            <div class="heading">
                Latest death Announcements
            </div>
            <div class="horizontal_slider_container">
                <div class="horizontal_slide">
                    <div class="item_container">
                        <img src="{{ asset('asset/images/horizontal_slider_1.png')}}" alt="" class="item_picture">
                        <div class="item_information">
                            <div class="item_country">India</div>
                            <a href="{{ route('single-memorial') }}">
                                <div class="item_name">Mrs Manonmani Sokkalingam</div>
                            </a>
                            <div class="lifetime">1945&mdash;2022</div>
                            <div class="time_passed">1 hour ago</div>
                        </div>
                    </div>
                    <div class="item_container">
                        <img src="{{ asset('asset/images/horizontal_slider_2.png')}}" alt="" class="item_picture">
                        <div class="item_information">
                            <div class="item_country">India</div>
                            <a href="{{ route('single-memorial') }}">
                                <div class="item_name">Mrs Manonmani Sokkalingam</div>
                            </a>
                            <div class="lifetime">1945&mdash;2022</div>
                            <div class="time_passed">1 hour ago</div>
                        </div>
                    </div>
                    <div class="item_container">
                        <img src="{{ asset('asset/images/horizontal_slider_3.png')}}" alt="" class="item_picture">
                        <div class="item_information">
                            <div class="item_country">India</div>
                            <a href="{{ route('single-memorial') }}">
                                <div class="item_name">Mrs Manonmani Sokkalingam</div>
                            </a>
                            <div class="lifetime">1945&mdash;2022</div>
                            <div class="time_passed">1 hour ago</div>
                        </div>
                    </div>
                    <div class="item_container">
                        <img src="{{ asset('asset/images/horizontal_slider_4.png')}}" alt="" class="item_picture">
                        <div class="item_information">
                            <div class="item_country">India</div>
                            <a href="{{ route('single-memorial') }}">
                                <div class="item_name">Mrs Manonmani Sokkalingam</div>
                            </a>
                            <div class="lifetime">1945&mdash;2022</div>
                            <div class="time_passed">1 hour ago</div>
                        </div>
                    </div>
                    <div class="item_container">
                        <img src="{{ asset('asset/images/horizontal_slider_5.png')}}" alt="" class="item_picture">
                        <div class="item_information">
                            <div class="item_country">India</div>
                            <a href="{{ route('single-memorial') }}">
                                <div class="item_name">Mrs Manonmani Sokkalingam</div>
                            </a>
                            <div class="lifetime">1945&mdash;2022</div>
                            <div class="time_passed">1 hour ago</div>
                        </div>
                    </div>
                    <div class="item_container">
                        <img src="{{ asset('asset/images/horizontal_slider_6.png')}}" alt="" class="item_picture">
                        <div class="item_information">
                            <div class="item_country">India</div>
                            <a href="{{ route('single-memorial') }}">
                                <div class="item_name">Mrs Manonmani Sokkalingam</div>
                            </a>
                            <div class="lifetime">1945&mdash;2022</div>
                            <div class="time_passed">1 hour ago</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider_controls"></div>
        </div>
    </div>

    <div class="section section_4">
        <div class="main_section">
            <div class="heading">What is a virtual memorial?</div>
            <div class="picture_section">
                <div class="picture_container">
                    <img src="{{ asset('asset/images/section_4_img_1.png')}}" alt="" class="img-fluid">
                    <div class="picture_comment">Collect stories from living people before they fade.</div>
                </div>
                <div class="picture_container">
                    <img src="{{ asset('asset/images/section_4_img_2.png')}}" alt="" class="img-fluid">
                    <div class="picture_comment">Preserve memories of those who have passed.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_5">
        <div class="main_section">
            <div class="left_section">
                <div class="heading">
                    Looking to create an online memorial?
                </div>
                <div class="description">
                    Celebrate the life of a colleague, family member, or friend who has passed away with a custom Vaalvu setup.
                </div>
                <a href="http://" class="see_feed_button learn_more_button" target="_blank" rel="noopener noreferrer">Learn More</a>
            </div>
            <div class="right_section">
                <div class="image_container">
                    <img src="{{ asset('asset/images/section_5_img_1.svg')}}" alt="" class="abstract_image img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="section section_6" id="pricicing_section">
        <div class="main_section">
            <div class="heading">Choose a plan that’s right for you</div>
            <div class="plan_table">
                <div class="table_head">
                    <div class="mode">
                        <button class="mode_1 mode_selected"> Orbituary </button>
                        <button class="mode_2"> Remembrance </button>
                    </div>
                    <button class="th">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 10</div>
                        <div class="plan_days">/2 days</div>
                    </button>
                    <button class="th">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 30</div>
                        <div class="plan_days">/3 days</div>
                    </button>
                    <button class="th order_recomended">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 60</div>
                        <div class="plan_days">/4 days</div>
                    </button>
                    <button class="th">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 90</div>
                        <div class="plan_days">/5 days</div>
                    </button>
                    <button class="th">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 120</div>
                        <div class="plan_days">/6 days</div>
                    </button>
                    <button class="th">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 150</div>
                        <div class="plan_days">/7 days</div>
                    </button>
                    <button class="th order_best">
                        <div class="price"> <i class="fas fa-dollar-sign"></i> 200</div>
                        <div class="plan_days">/8 days</div>
                    </button>
                </div>
                <div class="table_row" id="first_row">
                    <div class="mode_option ">Lankasri Home</div>
                    <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> &mdash; </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">Word Limit</div>
                    <div class="td dim_bg">50 words</div>
                    <div class="td dim_bg">50 words</div>
                    <div class="td dim_bg">50 words</div>
                    <div class="td dim_bg">50 words</div>
                    <div class="td dim_bg">50 words</div>
                    <div class="td dim_bg">50 words</div>
                    <div class="td dim_bg">50 words</div>
                </div>
                <div class="table_row">
                    <div class="mode_option">Correction</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">Core integrations</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">*Lifetime Record</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">*Tamilwin.com</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">*Social Media</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">Photo SlideShow</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">*Priority Publish</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>
                <div class="table_row">
                    <div class="mode_option">*Extra Boost</div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                    <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                </div>

                <div class="table_row">
                    <div class="mode_option"></div>
                    <button type="button" value="1" class="order_button" id="buySubscriptionButton">Order</button>
                    <button type="button" value="2" class="order_button" id="buySubscriptionButton">Order</button>
                    <button type="button" value="3" class="order_button order_recomended" id="buySubscriptionButton">Order</button>
                    <button type="button" value="4" class="order_button" id="buySubscriptionButton">Order</button>
                    <button type="button" value="5" value="1" class="order_button" id="buySubscriptionButton">Order</button>
                    <button type="button" value="6" class="order_button" id="buySubscriptionButton">Order</button>
                    <button type="button" value="7" class="order_button order_best" id="buySubscriptionButton">Order</button>

                </div>
            </div>
        </div>
    </div>


    <div class="section section_7">
        <div class="main_section">
            <div class="heading">Memorial Reviews</div>
            <div class="review_container">
                <div class="review">
                    <div class="review_comment">
                        “Thank you for offering this service and site. It's really appreciated by my family and me.”
                    </div>
                    <div class="person_container">
                        <img src="{{ asset('asset/images/section_7_img_1.png')}}" alt="" class="person_picture">
                        <div class="person_information">
                            <div class="person_name">David</div>
                            <div class="person_moto">We Remember User</div>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <div class="review_comment">
                        “Loved seeing other people’s loving and funny memories. It made me realize just how many lives my mom touched in 68 years.”
                    </div>
                    <div class="person_container">
                        <img src="{{ asset('asset/images/section_7_img_2.png')}}" alt="" class="person_picture">
                        <div class="person_information">
                            <div class="person_name">Emily</div>
                            <div class="person_moto">We Remember User</div>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <div class="review_comment">
                        “Thank you so very much! THANK YOU... Simply for existing, so that we may share our loved ones with the world.”
                    </div>
                    <div class="person_container">
                        <img src="{{ asset('asset/images/section_7_img_3.png')}}" alt="" class="person_picture">
                        <div class="person_information">
                            <div class="person_name">Caroline</div>
                            <div class="person_moto">We Remember User</div>
                        </div>
                    </div>
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

    <div class="modal" id="cardModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PAYMENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form id="payment-form" method="POST">
                            @csrf
                            <input type="hidden" name="plan_id" id="plan_id">
                            <div class="row">
                                <div class="col">
                                    <div class="inputBox">
                                        <span>cards accepted :</span>
                                        <img src="{{ asset('asset/img/card.png')}}" alt="" />
                                    </div>
                                    <div class="inputBox">
                                        <span>name on card :</span>
                                        <input type="text" name="name" id="card-holder-name" placeholder="mr. john deo" />
                                        <span class="text-danger name_error"></span>
                                    </div>
                                    <div class="inputBox">
                                        <span>Card Details :</span>
                                        <div id="card-element"></div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="purchase" id="purchase_button" class="submit-btn" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <script src="{{ asset('asset/js/header.js')}}"></script>
    <script src="{{ asset('asset/js/index.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const stripe = Stripe('{{ env('STRIPE_KEY') }}')
        const elements = stripe.elements();
        const cardElement = elements.create('card')

        $(document).on('click', '#buySubscriptionButton', function(e) {
            e.preventDefault();
            var plan_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "plan/"+plan_id,
                dataType: "json",
                success: function(response) {
                    if(response.status==0){
                        alert(response.message);
                    }
                    else{
                        $('#cardModal').modal('show');
                        $('#plan_id').val(plan_id)
                        cardElement.mount('#card-element')
                        $('#purchase_button').attr('data-secret', response.intent.client_secret);
                    }
                }
            });
        });

        $(document).on('submit', '#payment-form', async function(e) {
            e.preventDefault();
            const purchaseBtn =  document.getElementById('purchase_button');
            // console.log(purchaseBtn);
            const form = document.getElementById('payment-form');
            const cardHolderName = $('#card-holder-name');
            purchaseBtn.disabled = true;
            const { setupIntent, error } = await stripe.confirmCardSetup(
                purchaseBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );

            if(error){
                purchaseBtn.disable = false
            }
            else{
                let token = document.createElement('input');
                token.setAttribute('type', 'hidden');
                token.setAttribute('name', 'token');
                token.setAttribute('value', setupIntent.payment_method);
                form.appendChild(token);
                let formDate = new FormData($('#payment-form')[0]);
                $.ajax({
                    type: "post",
                    url: "subscription",
                    data: formDate,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(response) {
                        if (response.status == 0) {
                            $('#cardModal').modal('show')
                            $.each(response.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#payment-form')[0].reset();
                            $('#cardModal').modal('hide');
                            alert(response.message);
                        }
                    },
                    error: function(error) {
                        $('#cardModal').modal('show')
                    }
                });
            }
        });

    });
</script>
</body>

</html>