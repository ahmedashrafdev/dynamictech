@extends('layouts.app')

@section('title' , 'services')
@section('pageName' , 'services')
@section('content')

<!--======================================
        START INFO AREA 4
======================================-->
<section class="info-box-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">#services</h5>
                    <h2 class="section__title">What We do?</h2>
                    <div class="section-divider mx-auto"></div>
                </div><!-- end section-heading -->
                <div class="section-description m-0 text-center">
                    <p class="section__desc">
                        Which cattle fruitful he fly visi won't let above lesser stars. Fly form wonder every <br>
                        let third form two air seas after us said day won light also.
                    </p>
                </div><!-- end section-description -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row info-box-wrap">
            <div class="col-lg-4 col-sm-6">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <i class="las la-network-wired info__svg service-icon"></i>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">ERP System</a> </h3>
                        <p class="info__text">
                            Sed porttitor lectus nibh. Praesent sapien massa, convallis ndisse suscipit sagittis leo.
                        </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                       <i class="las la-car-side info__svg service-icon"></i>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">Car Rental Management System</a> </h3>
                        <p class="info__text">
                            Sed porttitor lectus nibh. Praesent sapien massa, convallis ndisse suscipit sagittis leo.
                        </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <i class="las la-city info__svg service-icon"></i>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title"><a href="{{route('service' , ['slug' , 'service-name'])}}"> Real Estate Marketing System</a> </h3>
                        <p class="info__text">
                            Sed porttitor lectus nibh. Praesent sapien massa, convallis ndisse suscipit sagittis leo.
                        </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <i class="las la-cash-register info__svg service-icon"></i>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">POS (Point of sale) system</a> </h3>
                        <p class="info__text">
                            Sed porttitor lectus nibh. Praesent sapien massa, convallis ndisse suscipit sagittis leo.
                        </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                       <i class="las la-utensils info__svg service-icon"></i>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">Restaurant System</a> </h3>
                        <p class="info__text">
                            Sed porttitor lectus nibh. Praesent sapien massa, convallis ndisse suscipit sagittis leo.
                        </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <i class="las la-users-cog info__svg service-icon"></i>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title"><a href="{{route('service' , ['slug' , 'service-name'])}}">HR SystemMarketing</a></h3>
                        <p class="info__text">
                            Sed porttitor lectus nibh. Praesent sapien massa, convallis ndisse suscipit sagittis leo.
                        </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!--======================================
        END INFO AREA
======================================-->
@endsection
