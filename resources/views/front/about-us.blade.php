@extends('front.layout.app')

@section("content")
    <!-- banner section start start-->
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>About Us</h4>
                <img src="{{asset('front/images/title.png')}} alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="">Home</a></li>
                <li><a href="">Page</a></li>
                <li class="active">About us</li>
            </ol>
            <img class="meat" src="{{asset('front/images/title-bottom.png')}}" alt="img">
        </div>
    </div>
    <!-- banner section start end-->
    <div class="about-sec-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-img-sec float_left">
                        <figure class="abt-img1">
                            <img src="{{asset('front/images/product/about1.jpg')}}" alt="img">
                        </figure>
                        <figure class="abt-img2">
                            <img src="{{asset('front/images/product/about2.jpg')}}" alt="img">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mar-left">
                    <div class="about-text float_left">
                        <h4>About Our Firm’s</h4>
                        <p>we are committed to total transparency about our products.</p>
                    </div>
                    <div class="div_line-yal2">
                        <img class="img-fluid" src="{{asset('front/images/line-yal.png')}}" alt="img">
                    </div>
                    <div class="div_p">
                        <p>Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                            antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                            nulla
                            hole enim, nec eleifend lacus vulputate ut.
                        </p>
                        <br>
                        <p>Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                            antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                            nulla
                            hole enim, nec eleifend lacus vulputate ut.
                        </p>
                    </div>
                    <div class="about-list-wrapper">
                        <div class="a-let">
                            <img src="{{asset('front/images/icon-fish.gif')}}" alt="icon">
                        </div>
                        <div class="a-rit">
                            <h5>Hygienic and Healthy</h5>
                            <p>Nunc faucibus vehicula Holawely accumsan.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="about-list-wrapper">
                        <div class="a-let">
                            <img src="{{asset('front/images/icon-02.gif')}}" alt="icon">
                        </div>
                        <div class="a-rit">
                            <h5>Esay to cook</h5>
                            <p>Nunc faucibus vehicula Holawely accumsan.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="about-list-wrapper">
                        <div class="a-let">
                            <img src="{{asset('front/images/icon-004.gif')}}" alt="icon">
                        </div>
                        <div class="a-rit">
                            <h5>Farm fresh meats</h5>
                            <p>Nunc faucibus vehicula Holawely accumsan.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="about-list-wrapper">
                        <div class="a-let">
                            <img src="{{asset('front/images/icon-003.gif')}}" alt="icon">
                        </div>
                        <div class="a-rit">
                            <h5>Halal Certified</h5>
                            <p>Nunc faucibus vehicula Holawely accumsan.</p>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
    @include("includes.team")

    <div class="our-info-main-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{asset('front/images/pm3.gif')}}" alt="img">
                        </div>
                        <div class="blog-text">
                            <h4>OUR MISSION </h4>
                            <p class="p-text"> Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio du</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{asset('front/images/pm-1.png')}}" alt="img">
                        </div>
                        <div class="blog-text">
                            <h4> OUR HISTORY </h4>
                            <p class="p-text">Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio du</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{asset('front/images/pm-2.gif')}}" alt="img">
                        </div>
                        <div class="blog-text">
                            <h4> WAT WE DO </h4>
                            <p class="p-text">Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio du</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-delivery-sec-wrapper certificate-award float_left">
        <div class="container">
            <div class="heading-title">
                <h4>Certificates & Awards</h4>
                <p>What we achive and what we deliver</p>
                <img class="img-fluid" src="{{asset('front/images/line-yal.png')}}" alt="img">
            </div>
            <div class="delivery-main-wrapper">
                <div class="delivery-box">
                    <img src="{{asset('front/images/a1.png')}}" alt="img">

                </div>
                <div class="delivery-box">
                    <img src="{{asset('front/images/a2.png')}}" alt="img">

                </div>
                <div class="delivery-box">
                    <img src="{{asset('front/images/a3.png')}}" alt="img">

                </div>
                <div class="delivery-box">
                    <img src="{{asset('front/images/a4.png')}}" alt="img">

                </div>
            </div>
        </div>
    </div>

@endsection


