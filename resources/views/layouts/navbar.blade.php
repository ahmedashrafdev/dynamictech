
<!--======================================
        START HEADER AREA
    ======================================-->
    <section class="header-menu-area header-menu-area-4 bg-white">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-top-info header-left-info">
                            <ul class="info-list">
                                <li><i class="la la-clock-o"></i>mon-fri: 08.00 - 17.00</li>
                                <li><i class="la la-map-marker"></i>2nd Avenue, Boston</li>
                            </ul>
                        </div><!-- end header-top-info -->
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="header-top-info header-right-info">
                            <ul class="info-list">
                                <li><a href="https://www.facebook.com/dynamiceg/" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/dynamic-technology/" target="_blank"><i class="lab la-linkedin"></i></a></li>
                                <li>
                                    <a href="{{route('demo')}}" class="theme-btn">
                                        Request Demo <span class="la la-caret-right"></span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end header-top-info -->
                    </div><!-- end col-lg-5 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end header-top -->
        <div class="header-menu-fluid">
            <div class="container">
                <div class="row align-items-center menu-content menu-content-3">
                    <div class="col-lg-3">
                        <div class="logo-box">
                            <a href="{{route('home')}}" class="logo" title="Prizon"><img src="{{asset('storage/images/logo.png')}}" alt="Prizon"></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-9">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">about</a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">services</a>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">blog</a>
                                    </li>
                                    <li>
                                        <a href="{{route('clients')}}">our clients</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">contact</a>
                                    </li>
                                    <li>
                                        <div class="search-wrap">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="las la-search"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="contact-form-action">
                                                    <form action="{{route('services')}}">
                                                            <div class="form-group">
                                                                <input class="form-control" type="search" name="search" placeholder="Search by keywords">
                                                                <button type="submit" class="theme-btn send__btn">
                                                                    <i class="las la-search"></i>
                                                                </button>
                                                            </div><!-- end form-group -->
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button">
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div><!-- end logo-right-button -->
                            <div class="side-nav-container">
                                <div class="humburger-menu">
                                    <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
                                </div><!-- end humburger-menu -->
                                <div class="side-menu-wrap">
                                    <ul class="side-menu-ul">
                                        <li class="sidenav__item">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a href="{{route('about')}}">about</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a href="{{route('services')}}">services</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a href="{{route('blog')}}">blog</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a href="{{route('clients')}}">our clients</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a href="{{route('contact')}}">contact</a>
                                    </li>
                                    </ul>
                                    <div class="side-btn-box">
                                        <a href="{{route('demo')}}" class="theme-btn">Request demo <span class="la la-caret-right"></span></a>
                                    </div>
                                </div><!-- end side-menu-wrap -->
                            </div><!-- end side-nav-container -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-9 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-fluid -->
    </section><!-- end header-menu-area -->
    <!--======================================
            END HEADER AREA
    ======================================-->
    