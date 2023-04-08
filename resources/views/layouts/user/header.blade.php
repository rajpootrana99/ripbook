<div class="header">
    <div class="main_section">
        <div class="hamburger_container">
            <div onclick="showDropdown(this)">
                @guest
                <button class="hamburger picture_dropdown_button"> <i class="fa-solid fa-gear"></i> </button>
                @endguest
                @auth
                @if(Auth::user()->image)
                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="" class="user_picture img-fluid picture_dropdown_button">
                @else
                <img src="{{ asset('asset/images/section_7_img_1.png')}}" alt="" class="user_picture img-fluid picture_dropdown_button">
                @endif
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
                <a href="/" class="head_anchor @if(Request::is('/')) head_anchor_active  @endif">Home</a>
                <a href="/#pricicing_section" class="head_anchor">Pricing</a>
                <a href="{{ route('help') }}" class="head_anchor @if(Request::is('help')) head_anchor_active  @endif">Help</a>
                <a href="{{ route('contact') }}" class="head_anchor @if(Request::is('contact')) head_anchor_active  @endif">Contact us</a>
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
                        @if(Auth::user()->image)
                        <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="" class="user_picture img-fluid picture_dropdown_button">
                        @else
                        <img src="{{ asset('asset/images/section_7_img_1.png')}}" alt="" class="user_picture img-fluid picture_dropdown_button">
                        @endif
                        @endauth
                    </div>
                    <div class="dropdown_1 hide_dropdown" style="right:unset;width: 200px;top: 0;" id="picture_dropdown_target">
                        @guest
                        <a href="{{route('login')}}" class="head_button dropdown_anchors">Login</a>
                        @endguest
                        @auth
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
                <a href="/#" class="head_anchor dropdown_anchors">Pricing</a>
                <a href="{{ route('help') }}" class="head_anchor @if(Request::is('help')) head_anchor_active  @endif dropdown_anchors">Help</a>
                <a href="{{ route('contact') }}" class="head_anchor @if(Request::is('contact')) head_anchor_active  @endif dropdown_anchors">Contact us</a>
            </div>
        </div>

    </div>
</div>