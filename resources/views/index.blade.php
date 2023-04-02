@extends('layouts.guest')

@section('content')
<div class="section section_1">
    <div class="main_section">
        <input type="hidden" id="stripe_key" value="{{ env('STRIPE_KEY') }}" />
        <div class="left_section_1">
            <div class="moto">
                The most <span style="color:#ffffffa6;">beautiful tribute</span> for your departed loved one.
            </div>
            <div class="description">
                Memories are fragile. Conversations fade. Photos are scattered. That’s why we created a single, simple place to collect and preserve memories. The result is a rich tapestry of stories and photos, preserved for family and friends for years to come. Completely Free!
            </div>
            <form class="form_wrapper" method="POST" action="{{ route('searchFeed') }}">
                @csrf
                <div class="form_name">
                    Search By
                </div>
                <div class="form_grid">
                    <div class="radio_1">
                        <input type="radio" name="search" value="dob" id="d_o_b" checked>
                        <label for="d_o_b"><span style="opacity: 0.6;">Date of birth</span></label>
                    </div>
                    <div class="radio_2">
                        <input type="radio" name="search" value="dod" id="d_o_d">
                        <label for="d_o_d"><span style="opacity: 0.6;">Date of death</span></label>
                    </div>
                    <div class="radio_3">
                        <input type="radio" name="search" value="name" id="name">
                        <label for="name"><span style="opacity: 0.6;">Name</span></label>
                    </div>
                </div>
                <div class="form_grid" style="column-gap: 0%;">
                    <div style="display:flex;" id="search_input_date">
                        <input type="text" readonly onclick="this.nextElementSibling.showPicker()" placeholder="Enter Date" class="input_box" id="sarch_val">
                        <input type="date" name="search_val" id="" onchange="this.previousElementSibling.value=this.value" class="input_box date_box">
                        <img loading="lazy" src="{{ asset('asset/images/calendar.svg')}}" class="calendar_icon" alt="" srcset="">
                    </div>
                    <div style="display:none;" id="search_input_text">
                        <input type="text" name="sarch_val" placeholder="Enter Name" class="input_box" id="sarch_val">
                        <img loading="lazy" src="{{ asset('asset/images/user.svg')}}" class="user_icon" alt="" srcset="">
                    </div>
                    <input type="submit" class="search_btn" role="button" value="Search">
                </div>
            </form>
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
                    <a href="{{ route('feed') }}" class="see_feed_button">See Feed</a>
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
                        @if($left_memorials->count() > 0)
                        @foreach($left_memorials as $left_memorial)
                        <a href="{{ route('memorial.show',['memorial' => $left_memorial]) }}">
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('storage/'.$left_memorial->feature_image)}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">{{ $left_memorial->pob }}</div>

                                    <div class="item_name">{{ $left_memorial->title }}</div>

                                    <div class="time_of_death">
                                        <div class="lifetime">Date of Birth: {{ $left_memorial->dob }}</div>
                                        <div class="time_passed">Date of Death: {{ $left_memorial->dod }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @else
                        <h5 class="text-center">Nothing yet</h5>
                        @endif
                    </div>
                    <div class="vertical_slide_2">
                        @if($right_memorials->count() > 0)
                        @foreach($right_memorials as $right_memorial)
                        <a href="{{ route('memorial.show',['memorial' => $right_memorial]) }}">
                            <div class="item_container">
                                <img loading="lazy" src="{{ asset('storage/'.$right_memorial->feature_image)}}" class="item_picture" alt="" srcset="">
                                <div class="item_information">
                                    <div class="item_country">{{ $right_memorial->pob }}</div>

                                    <div class="item_name">{{ $right_memorial->title }}</div>

                                    <div class="time_of_death">
                                        <div class="lifetime">Date of Birth: {{ $right_memorial->dob }}</div><br>
                                        <div class="time_passed">Date of Death: {{ $right_memorial->dod }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @endif
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
                @if($memorials->count() > 0)
                @foreach($memorials as $memorial)
                <div class="item_container">
                    <img src="{{ asset('storage/'.$memorial->feature_image)}}" alt="" class="latest_item_picture">
                    <div class="item_information">
                        <div class="item_country">{{ $memorial->pob }}</div>
                        <a href="{{ route('memorial.show',['memorial' => $memorial]) }}">
                            <div class="item_name">{{ $memorial->title }}</div>
                        </a>
                        <div class="lifetime"> <strong>Date of Birth: </strong>{{ $memorial->dob }} <strong>Date of Death: </strong>{{ $memorial->dod }}</div>
                        <div class="time_passed">1 hour ago</div>
                    </div>
                </div>
                @endforeach
                @else
                <h5 class="text-center">Nothing yet</h5>
                @endif
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
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
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
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">Core integrations</div>
                <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/plus.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">*Lifetime Record</div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">*Tamilwin.com</div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">*Social Media</div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">Photo SlideShow</div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">*Priority Publish</div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>
            <div class="table_row">
                <div class="mode_option">*Extra Boost</div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> &mdash; </div>
                <div class="td"> <img src="{{ asset('asset/images/check-circle.svg')}}" alt="" srcset=""> </div>
            </div>

            <div class="table_row">
                <div class="mode_option"></div>
                <a href="{{ route('plan',['plan' => 1]) }}" class="order_button">Order</a>
                <a href="{{ route('plan',['plan' => 2]) }}" class="order_button">Order</a>
                <a href="{{ route('plan',['plan' => 3]) }}" class="order_button order_recomended">Order</a>
                <a href="{{ route('plan',['plan' => 4]) }}" class="order_button">Order</a>
                <a href="{{ route('plan',['plan' => 5]) }}" class="order_button">Order</a>
                <a href="{{ route('plan',['plan' => 6]) }}" class="order_button">Order</a>
                <a href="{{ route('plan',['plan' => 7]) }}" class="order_button order_best">Order</a>

            </div>
        </div>
    </div>
</div>


<div class="section section_7">
    <div class="main_section">
        <div class="heading">Memorial Reviews</div>
        <div class="review_container">
            @if(count($tributes) > 0)
            @foreach($tributes as $tribute)
            <div class="review">
                <div class="review_comment">
                    “{{ $tribute->message }}”
                </div>
                <div class="person_container">
                    @if($tribute->user->image)
                    <img src="{{ asset('storage/'.$tribute->user->image) }}" alt="" class="person_picture">
                    @else
                    <img src="{{ asset('asset/images/section_7_img_1.png')}}" alt="" class="person_picture">
                    @endif
                    <div class="person_information">
                        <div class="person_name">{{ $tribute->user->name }}</div>
                        <div class="person_moto">We Remember User</div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No Review yet</p>
            @endif
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
                                <div class="form-group">
                                    <span>Card Details :</span>
                                    <div id="card-element" class="form-control" style='height: 2.4em; padding-top: .7em;'></div>
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
        $("#name").click(function() {
            searchForm();
        });

        function searchForm() {
            if ($("#d_o_b").prop("checked")) {
                $('#search_input_text').css('display', 'none');
                $('#search_input_date').css('display', 'flex');
            }
            if ($("#d_o_d").prop("checked")) {
                $('#search_input_text').css('display', 'none');
                $('#search_input_date').css('display', 'flex');
            }
            if ($("#name").prop("checked")) {
                $('#search_input_text').css('display', 'flex');
                $('#search_input_date').css('display', 'none');
            }
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // const stripe = Stripe('{{ env('
        //     STRIPE_KEY ') }}')
        const stripe = Stripe(document.getElementById('stripe_key').value);
        const elements = stripe.elements();
        const cardElement = elements.create('card')

        $(document).on('click', '#buySubscriptionButton', function(e) {
            e.preventDefault();
            var plan_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "plan/" + plan_id,
                dataType: "json",
                success: function(response) {
                    if (response.status == 0) {
                        alert(response.message);
                    } else {
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
            const purchaseBtn = document.getElementById('purchase_button');
            // console.log(purchaseBtn);
            const form = document.getElementById('payment-form');
            const cardHolderName = $('#card-holder-name');
            purchaseBtn.disabled = true;
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                purchaseBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );

            if (error) {
                purchaseBtn.disable = false
            } else {
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
@endsection