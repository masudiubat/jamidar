<div class="header-v1">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <ul class="top-contacts">
                        <li><i class="fa fa-map-marker"></i> 456 Lake Road, Virginia, USA</li>
                        <li><i class="fa fa-envelope"></i> info@gmail.com</li>
                        <li><i class="fa fa-phone"></i> (00) 123-456-789</li>
                    </ul>
                </div>
                <div class="col-md-6  col-sm-12 col-xs-12 social-list">
                    <ul class="top-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="header-logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('assets/frontend/images/logo/logo.jpg')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="phone-menu"><i class="fa fa-bars show-menu"></i></div>
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                                <li class="{{ request()->routeIs('about*') ? 'active' : '' }}"><a href="{{route('about.index')}}">About</a></li>
                                <li class="{{ request()->routeIs('property*') ? 'active' : '' }}"><a href="{{route('property.index')}}">Property</a></li>
                                <li class="{{ request()->routeIs('sold*') ? 'active' : '' }}"><a href="{{route('sold.list')}}">Slod Listing</a></li>
                                <li class="{{ request()->routeIs('agent*') ? 'active' : '' }}"><a href="{{route('agent.index')}}">Agent</a></li>
                                <li class="{{ request()->routeIs('contact*') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    @if (Auth::check())
                    <div class="submit-property text-right">
                        <a class="btn-b submit-btn">My Account</a>
                        <div class="submit-form text-left">
                            <ul>
                                <li>
                                    <ul>
                                        <li class="floatleft">
                                            <p>Settings </p>
                                        </li>
                                        <li class="floatright"><i class="fa fa-times close-form"></i></li>
                                    </ul>
                                </li>
                                <li> &nbsp; </li>
                                <li><a href="{{route('user.favourite.list')}}" class="sbform-btn btn-facebook"> <i class="fa fa-list" aria-hidden="true"></i> Selecteed Properties</a></li>
                                <li><br /></li>
                                <li><a href="{{route('user.dashboard')}}" class="sbform-btn btn-yahoo"> <i class="fa fa-tachometer" aria-hidden="true"></i> My Dashboard</a></li>
                                <li><br /></li>
                                <li>
                                    <a href="#" class="sbform-btn btn-google" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                <!--
                                <li><a href="#" class="sbform-btn btn-facebook">Login with facebook</a></li>
                                <li><a href="#" class="sbform-btn btn-google">Login with google</a></li>
                                <li><a href="#" class="sbform-btn btn-yahoo">Login with yahoo</a></li>
-->
                            </ul>
                        </div>
                    </div>
                    @else
                    <div class="submit-property text-right">
                        <a class="btn-b submit-btn">Login</a>
                        <div class="submit-form text-left">
                            <ul>
                                <li>
                                    <ul>
                                        <li class="floatleft">
                                            <p>Login </p>
                                        </li>
                                        <li class="floatright"><i class="fa fa-times close-form"></i></li>
                                    </ul>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <input type="text" name="email" placeholder="Username" />
                                        <input type="password" name="password" placeholder="Password" />
                                        <button type="submit" name="submit" class="login-submit-btn btn-a text-center">Login</button>
                                    </form>
                                </li>
                                <li>
                                    <p>Need an account? Register here!</p>
                                </li>
                                <li><a href="{{ route('register') }}" class="sbform-btn login text-center">Register</a></li>
                                <li>
                                    <p>Forgot Password?</p>
                                </li>
                                <li><a href="{{ route('password.request') }}" class="sbform-btn btn-facebook">Forgot Password</a></li>
                                <!--
                                <li><a href="#" class="sbform-btn btn-facebook">Login with facebook</a></li>
                                <li><a href="#" class="sbform-btn btn-google">Login with google</a></li>
                                <li><a href="#" class="sbform-btn btn-yahoo">Login with yahoo</a></li>
-->
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                            <li class="{{ request()->routeIs('about*') ? 'active' : '' }}"><a href="{{route('about.index')}}">About</a></li>
                            <li class="{{ request()->routeIs('property*') ? 'active' : '' }}"><a href="{{route('property.index')}}">Property</a></li>
                            <li class="{{ request()->routeIs('sold*') ? 'active' : '' }}"><a href="{{route('sold.list')}}">Slod Listing</a></li>
                            <li class="{{ request()->routeIs('agent*') ? 'active' : '' }}"><a href="{{route('agent.index')}}">Agent</a></li>
                            <li class="{{ request()->routeIs('contact*') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->