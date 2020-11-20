@extends('layouts.app')

@section('title' , 'contact')
@section('pageName' , 'Contact us')

@section('content')

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="section__meta">#get in touch</p>
                    <h2 class="section__title">Need Any Help? Contact us</h2>
                </div><!-- end section-heading -->
                <div class="contact-form-action contact-form-item">
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
                                    <i class="la la-pencil-square form-icon"></i>
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
            </div><!-- end col-lg-7 -->
            <div class="col-lg-4 ml-auto">
                <div class="contact-img contact-tilt">
                    <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/contact-img.png" alt="">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
        <div class="row contact-address">
            <div class="col-lg-12">
                <div class="contact-heading">
                    <h3 class="contact__heading">Contacts</h3>
                </div>
            </div><!-- end col-lg-12 -->
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <h5 class="contact__subheding">E-mail</h5>
                    <p class="contact__text">
                        <span><i class="la la-envelope-o"></i> <a href="mailto:info123@prizon.com">info@dynamiceg.com</a></span>
                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <h5 class="contact__subheding">Phone</h5>
                    <p class="contact__text">
                        <span><i class="la la-phone"></i> <a href="tel:+20026706524">+20026706524</a></span>
                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <h5 class="contact__subheding">Address</h5>
                    <p class="contact__text" style="font-size:14px">
                        <span><i class="la la-map-marker"></i> Abd El-Hameed Awad, Nasr City</span>
                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->

<!-- ================================
       START GOOGLE MAP
================================= -->
<div class="google-map google-map2">
    <div class="map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.361177913617!2d31.34507631511543!3d30.055179981878403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMzDCsDAzJzE4LjciTiAzMcKwMjAnNTAuMiJF!5e0!3m2!1sen!2seg!4v1605778163274!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div><!-- end google-map -->
<!-- ================================
       END GOOGLE MAP
================================= -->
@endsection
