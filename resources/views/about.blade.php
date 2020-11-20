@extends('layouts.app')
@section('title' , 'about')
@section('pageName' , 'About us')
@section('content')

<!--======================================
        START ABOUT AREA
 ======================================-->
 <section class="about-area about-area2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-item about-item-left">
                    <ul class="list-items">
                        <li>
                            <span class="la la-certificate"></span>
                            <h3>Certified Company</h3>
                            <p>
                                Sed hendrerit vehicula felis, dolor sit amet, adipiscin quis
                                volutpat estnisl nuncase laoreetAenean interdum.
                                Nullam sollicitudin nisl at nunc tempor pulvindolor sit amet, adipiscinar.
                            </p>
                        </li>
                        <li>
                            <span class="la la-users"></span>
                            <h3>Experience Employee</h3>
                            <p>
                                Sed hendrerit vehicula felis, dolor sit amet, adipiscin quis
                                volutpat estnisl nuncase laoreetAenean interdum.
                                Nullam sollicitudin nisl at nunc tempor pulvindolor sit amet, adipiscinar.
                            </p>
                        </li>
                        <li>
                            <span class="la la-bullseye"></span>
                            <h3>15 Years of Experience</h3>
                            <p>
                                Sed hendrerit vehicula felis, dolor sit amet, adipiscin quis
                                volutpat estnisl nuncase laoreetAenean interdum.
                                Nullam sollicitudin nisl at nunc tempor pulvindolor sit amet, adipiscinar.
                            </p>
                        </li>
                        <li>
                            <span class="la la-lightbulb-o"></span>
                            <h3>Knowledgeable</h3>
                            <p>
                                Sed hendrerit vehicula felis, dolor sit amet, adipiscin quis
                                volutpat estnisl nuncase laoreetAenean interdum.
                                Nullam sollicitudin nisl at nunc tempor pulvindolor sit amet, adipiscinar.
                            </p>
                        </li>
                    </ul>
                </div><!-- end about-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-item about-item-right">
                    <div class="section-heading about-right">
                        <h5 class="section__meta">#about company</h5>
                        <h2 class="section__title">Set Your Goals High, and Don't Stop Till You Get There</h2>
                        <div class="section-divider"></div>
                    </div><!-- end section-heading -->
                    <div class="section-description">
                        <p class="section__desc">
                            Dynamic Business Solutions
                            the leading systems  integrator was established in 2006 with a vision to lead the information technology market depending on its dynamic portfolio and Vertical Solutions.
                        </p>
                    </div><!-- end section-description -->
                    <div class="video-image-gallery">
                        <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/video-img.jpg" alt="video-img">
                        <div class="preview-video">
                            <a class="video-play-btn" href="https://www.youtube.com/watch?v=NWxMqiFq0Yo" data-fancybox>
                                <span class="la la-play"></span>
                            </a>
                            <p>Watch Preview</p>
                        </div>
                    </div>
                </div><!-- end about-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

<!--======================================
        START FEATURE AREA
 ======================================-->
 <section class="feature-area feature-area2 text-center section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p class="section__meta section__meta2">#services</p>
                    <h2 class="section__title text-white">What We Do</h2>
                    <div class="section-divider section-divider2 mx-auto"></div><!-- end section-divider -->
                </div><!-- end section-heading -->
                <div class="section-description">
                    <p class="section__desc text-white">
                        Which cattle fruitful he fly visi won't let above lesser stars. Fly form wonder every <br>
                        let third form two air seas after us said day won light also
                    </p>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row feature-content-wrap">
            <div class="col-lg-4 col-sm-6">
                <div class="feature-item feature-item-2 feature-box-color">
                    <div class="hover-overlay"></div>
                    <div class="feature__icon">
                        <i class="las la-network-wired"></i>
                    </div>
                    <h3 class="feature__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">ERP System</a></h3>
                    <p class="feature__text">Set have great you male grasses yielding yielding first their to called deep abundantly</p>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="feature-item feature-item-2 feature-box-color-2">
                    <div class="hover-overlay"></div>
                    <div class="feature__icon">
                        <i class="las la-car-side"></i>
                    </div>
                    <h3 class="feature__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">Car Rental Management System</a></h3>
                    <p class="feature__text">Set have great you male grasses yielding yielding first their to called deep abundantly</p>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="feature-item feature-item-2 feature-box-color-3">
                    <div class="hover-overlay"></div>
                    <div class="feature__icon">
                        <i class="las la-city"></i>
                    </div>
                    <h3 class="feature__title"><a href="{{route('service' , ['slug' , 'service-name'])}}"> Real Estate Marketing System</a></h3>
                    <p class="feature__text">Set have great you male grasses yielding yielding first their to called deep abundantly</p>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="feature-item feature-item-2 feature-box-color-4">
                    <div class="hover-overlay"></div>
                    <div class="feature__icon">
                        <i class="las la-cash-register"></i>
                    </div>
                    <h3 class="feature__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">POS (Point of sale) system</a></h3>
                    <p class="feature__text">Set have great you male grasses yielding yielding first their to called deep abundantly</p>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="feature-item feature-item-2 feature-box-color-5">
                    <div class="hover-overlay"></div>
                    <div class="feature__icon">
                        <i class="las la-utensils"></i>
                    </div>
                    <h3 class="feature__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">Restaurant System</a></h3>
                    <p class="feature__text">Set have great you male grasses yielding yielding first their to called deep abundantly</p>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="feature-item feature-item-2 feature-box-color-6">
                    <div class="hover-overlay"></div>
                    <div class="feature__icon">
                        <i class="las la-users-cog"></i>
                    </div>
                    <h3 class="feature__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">HR System</a></h3>
                    <p class="feature__text">Set have great you male grasses yielding yielding first their to called deep abundantly</p>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
        END FEATURE AREA
======================================-->


<div class="section-block"></div>

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo">
                    <div class="client-logo-item">
                        <div class="client-logo-item-div">

                            <img src="http://www.anasia.com/Content/assets/img/logo.png" alt="brand image">
                        </div>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <div class="client-logo-item-div">

                            <img src="http://www.omhassan.com/img/logo.png" alt="brand image">
                        </div>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <div class="client-logo-item-div">

                            <img src="https://cdn.emiratesnbd.com/en/assets/images/emiratesnbd_new_logo.gif" alt="brand image">
                        </div>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <div class="client-logo-item-div">

                            <img src="https://www.logodalil.com.eg/images/Restaurants_Logos/badaweya.jpg" alt="brand image">
                        </div>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <div class="client-logo-item-div">

                            <img src="https://sarmady.net/assets/images/sarmady.png" alt="brand image">
                        </div>
                    </div><!-- end client-logo-item -->
                </div><!-- end client-logo -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!--======================================
        START GET STARTED AREA
======================================-->
<section class="get-start-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="get-start-box">
                    <div class="col-lg-8">
                        <div class="section-heading">
                            <h5 class="section__meta">#get in touch</h5>
                            <h2 class="section__title">Do you have any inquiries?</h2>
                            <p class="section__desc">Contact us without any hesitate.</p>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="button-shared text-right">
                            <a href="#" class="theme-btn">
                                contact us <span class="la la-caret-right"></span>
                            </a>
                        </div><!-- end button-shared -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end get-start-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end get-start-area2 -->
<!--======================================
        END GET STARTED AREA
======================================-->

@endsection