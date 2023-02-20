<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="/">
        <span>Rip Book</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                
                <li @if(Request::is('dashboard')) class="active" @endif>
                <a href="{{ route('dashboard') }}" class="iq-waves-effect"><i class="ri-user-line"></i><span>Profile</span></a>
                </li>
                
                <li @if(Request::is('memorial')) class="active" @endif>
                <a href="{{ route('memorial.index') }}" class="iq-waves-effect"><i class="ri-home-3-line"></i><span>Memorial</span></a>
                </li>
                
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>