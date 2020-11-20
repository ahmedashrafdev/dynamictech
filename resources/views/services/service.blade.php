@extends('layouts.app')

@section('title' , 'project name')

@section('pageName' , 'Project name')
@section('breadcrumb')
<li class="breadcrumb__list-active"><a href="{{route('services')}}">services</a></li>
@endsection
@section('content')

<!--======================================
        START SERVICES AREA
======================================-->
<section class="card-area single-service-area section-padding-top">
    <div class="container">
        <div class="row card-wrap">
            <div class="col-lg-12">
                <div class="card-item">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/img5.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title card--title">We Provide Best Solutions to Grow Your Business Successfully</h3>
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
                            <ul class="card-list">
                                <li><span class="la la-check"></span>  Modern Design</li>
                                <li><span class="la la-check"></span>  Clean Code</li>
                                <li><span class="la la-check"></span>  Great Support</li>
                                <li><span class="la la-check"></span>  High Resolution</li>
                            </ul>
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
                            <div class="card-chart-box d-flex">
                                <div class="col-lg-6">
                                    <div class="card-inner-item">
                                        <h3 class="card-title">Project Results</h3>
                                        <p class="card-text">
                                            There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered altera
                                            tion in some form, by injected, Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum
                                        </p>
                                        <p class="card-text">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore. eu fugiat nulla pariatur.
                                        </p>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="card-inner-item chart-box">
                                        <canvas id="bar-chart" height="210"></canvas>
                                        <div class="chart-legend">
                                            <ul>
                                                <li><span class="legend__item legend__one"></span>One</li>
                                                <li><span class="legend__item legend__two"></span>Two</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                            </div><!-- end row -->
                            <div class="card-form">
                                <div class="card-form-content">
                                    <h3 class="card-title">Let's Work Together</h3>
                                    <p class="card-text">
                                        Sem quam semper libero, sit amet adipiscing
                                        sem neque sed ipsum. Nam quam nunc, blanditvel,
                                        luctus pulvinar, hendrerit id, lorem.
                                    </p>
                                </div>
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <i class="la la-user form-icon"></i>
                                                    <input class="form-control" type="text" name="text" placeholder="Name">
                                                </div><!-- end form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <i class="la la-envelope-o form-icon"></i>
                                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                                </div><!-- end form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <i class="la la-phone form-icon"></i>
                                                    <input class="form-control" type="text" name="text" placeholder="Number">
                                                </div><!-- end form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <i class="la la-pencil-square-o form-icon"></i>
                                                    <input class="form-control" type="text" name="text" placeholder="Subject">
                                                </div><!-- end form-group -->
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group message-group">
                                                    <i class="la la-pencil form-icon"></i>
                                                    <textarea class="form-control message-control" placeholder="Message"></textarea>
                                                </div><!-- end form-group -->
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-0">
                                                    <button class="theme-btn" type="button">send message <span class="la la-caret-right"></span></button>
                                                </div><!-- end form-group -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end card-form -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        START SERVICES AREA
======================================-->

@endsection
