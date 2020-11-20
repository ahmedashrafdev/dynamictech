@extends('layouts.app')

@section('title' , 'blog post name')
@section('pageName' , 'blog post name')

@section('breadcrumb')
<li class="breadcrumb__list-active"><a href="{{route('blog')}}">blog</a></li>
@endsection

@section('content')

<!--======================================
        START CARD AREA
======================================-->
<section class="card-area single-service-area single-blog-area section-padding-top">
    <div class="container">
        <div class="row card-wrap">
            <div class="col-lg-12">
                <div class="card-item">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img9.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <div class="post-meta">
                                <span class="author mr-2">
                                    <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/team.jpg" alt="Techydevs"> Techydevs
                                </span>•
                                <span class="mr-2">May 15, 2018 </span> •
                                
                            </div>
                            <h3 class="card-title card--title">We Provide Best Solutions to Grow Your Business</h3>
                            <div class="section-divider"></div>
                            <p class="card-text">
                                Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                                ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id, lorem.
                            </p>
                            <p class="card-text">
                                Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id, lorem.
                            </p>
                            <div class="card-image-box d-flex">
                                <div class="col-lg-6">
                                    <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img4.jpg" alt="blog-image">
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img5.jpg" alt="blog-image">
                                </div><!-- end col-lg-6 -->
                            </div><!-- end card-image-box -->
                            <p class="card-text">
                                Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id, lorem.
                            </p>
                            <div class="blockquote-item">
                                <blockquote>
                                    <i class="la la-quote-left blockquote__icon"></i>
                                    <p class="blockquote__text">
                                        Creativity is just connecting things. When you ask creative people how
                                        they did something, they feel a little guilty because they didn't really do it,
                                        they just saw something. It seemed obvious to them after a while.
                                        That's because they were able to connect experiences they've had
                                        and synthesize new things.
                                    </p>
                                    <h4 class="blockquote__meta">- Steve Jobs <span>Founder of Apple Inc.</span></h4>
                                </blockquote>
                            </div>
                            <p class="card-text">
                                Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id, lorem.
                            </p>
                            <div class="card-image-box d-flex">
                                <div class="col-lg-6">
                                    <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img3.jpg" alt="blog-image">
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <ul class="list-items">
                                        <li><span class="la la-check-circle-o"></span> Sed do eiusmod tempor incididunt ut</li>
                                        <li><span class="la la-check-circle-o"></span> Exercitation ullamco laboris nis.</li>
                                        <li><span class="la la-check-circle-o"></span> Quis nostrud exer citation.</li>
                                        <li><span class="la la-check-circle-o"></span> Andomised words which don’t look</li>
                                        <li><span class="la la-check-circle-o"></span> Commodo consequat duis autex.</li>
                                        <li><span class="la la-check-circle-o"></span> Andomised words which don’t look</li>
                                        <li><span class="la la-check-circle-o"></span> Pharetra dui, nec tincidunt ante</li>
                                    </ul>
                                </div><!-- end col-lg-6 -->
                            </div><!-- end card-image-box -->
                       
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END CARD AREA
======================================-->
@endsection
