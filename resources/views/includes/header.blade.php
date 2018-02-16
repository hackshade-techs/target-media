<header>
    <div class="header2-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890">+256-782-123-165 </a></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:papatyaozturkg@gmail.com">papatyaozturkg@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                <li><a href="wwww.facebook.com/vitamincafe"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="www.facebook.com/vitamincafe"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="logo-area">
                            <a href="{{ url('/')  }}"><img class="img-responsive hidden-sm" src="{{ asset('img/edited.PNG') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                                    <li><a href="{{ url('our-menu') }}">Menu</a></li>
                                    <li><a href="{{ url('our-gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('reservation') }}">Reservation</a></li>
                                    <li><a href="{{ url('contact-us') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <ul class="header-cart-area">
                            <li class="header-search">
                                <form>
                                    <input type="text" class="search-form" placeholder="Search...." required="">
                                    <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </form>
                            </li>

                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                    <li><a href="{{ url('home')  }}">Home</a></li>
                                    <li><a href="{{ url('about us') }}">About Us</a></li>
                                    <li><a href="{{ url('our-menu') }}">Menu</a></li>
                                    <li><a href="{{ url('our-gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('reservation') }}">Reservation</a></li>
                                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>
