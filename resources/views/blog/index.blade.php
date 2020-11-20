@extends('layouts.app')

@section('title' , 'Blog')
@section('pageName' , 'Blog')

@section('content')

<!--======================================
        START CARD AREA
======================================-->
<section class="card-area blog-area-2 section--padding">
    <div class="container">
        <div class="row card-wrap">
            <div class="col-lg-4 col-sm-6">
                <div class="card-item card-item-6">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img3.jpg" class="card-img-top" alt="">
                            <div class="card-info">
                                <span class="card__date"> <i class="la la-calendar"></i> Jan 8, 2019</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('post' , ['slug' => 'post-name'])}}" class="card__link">Five Devices You Need to Work Anytime</a>
                            </h5>
                            <ul class="card-list">
                                <li><span class="la la-user"></span>By <a href="{{route('blog' , ['author' => 'author-name'])}}">TechyDevs </a></li>
                            </ul>
                            <a href="{{route('post' , ['slug' => 'post-name'])}}" class="link-btn">Read More
                                <span class="la la-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div><!-- end card-item card-item-6 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="card-item card-item-6">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img4.jpg" class="card-img-top" alt="">
                            <div class="card-info">
                                <span class="card__date"> <i class="la la-calendar"></i> Jan 8, 2019</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('post' , ['slug' => 'post-name'])}}" class="card__link">Five Devices You Need to Work Anytime</a>
                            </h5>
                            <ul class="card-list">
                                <li><span class="la la-user"></span>By <a href="{{route('blog' , ['author' => 'author-name'])}}">TechyDevs </a></li>
                            </ul>
                            <a href="{{route('post' , ['slug' => 'post-name'])}}" class="link-btn">Read More
                                <span class="la la-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div><!-- end card-item card-item-6 -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="card-item card-item-6">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img5.jpg" class="card-img-top" alt="">
                            <div class="card-info">
                                <span class="card__date"> <i class="la la-calendar"></i> Jan 8, 2019</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('post' , ['slug' => 'post-name'])}}" class="card__link">Five Devices You Need to Work Anytime</a>
                            </h5>
                            <ul class="card-list">
                                <li><span class="la la-user"></span>By <a href="{{route('blog' , ['author' => 'author-name'])}}">TechyDevs </a></li>
                            </ul>
                            <a href="{{route('post' , ['slug' => 'post-name'])}}" class="link-btn">Read More
                                <span class="la la-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div><!-- end card-item card-item-6 -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END CARD AREA
======================================-->

    
@endsection