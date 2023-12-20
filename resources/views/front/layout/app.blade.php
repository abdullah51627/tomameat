<!DOCTYPE html>
<!--
   Template Name: TomaMeat
   Version: 1.0.0
   Author: Webstrot

   -->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]><!-->
<html lang="zxx" dir="ltr">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Meat Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/tabs.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('front/images/fav-')}}icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
<div id="preloader">
    <div id="status">
        <img src="{{asset('front/images/loader.gif')}}" id="preloader_image" alt="loader">
    </div>
</div>
<!-- top to return -->
<a href="javascript:;" id="return-to-top" class="change-bg2"> <i class="fas fa-angle-double-up"></i></a>
<!-- header start -->
<div class="main-header-wrapper1 float_left">

    <div class="sb-main-header1">
        <div class="menu-items-wrapper menu-item-wrapper3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
            <div class="top-header-wrapper float_left">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-6">
                            <ul class="contact-details">
                                <li class="hidden-xs"><a href="#">Family TomaMeats Est. 1901</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> <b>+92 331 379 9210</b> (Open Right Now)</a>
                                </li>
                                <li class="hidden-xs"><a href="#"><i
                                            class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;info@tomameats.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <ul class="social-list">
                                <li>
                                    @if(auth()->check())
                                    <a href="/admin"><i class="fa fa-user" aria-hidden="true"></i>
                                        {{ucfirst(auth()->user()->name)}} </a>
                                    @else
                                        <a href="/login"><i class="fa fa-user" aria-hidden="true"></i>
                                            Login</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float_left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="index1-logo">
                                <a href="/">
                                    <img src="{{asset('front/images/logo.png')}}" alt="logo">
                                </a>
                            </div>
                            <nav class="navbar navbar-expand-lg">
                                <ul class="navbar-nav">


                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="about-us.html">About</a>
                                    </li>

                                    <li class="nav-item menu-click4 ps-rel">
                                        <a class="nav-link" href="javascript:;">Shortcodes
                                            <span><i class="fas fa-chevron-down"></i></span>
                                        </a>
                                        <ul class="dropdown-items menu-open4">
                                            <li class="megamenu-wrapper">
                                                <div class="megamenu-list">
                                                    <h5>Shortcode (1)</h5>
                                                    <a href="accordion.html">Accordian</a>
                                                    <a href="client.html">Client</a>
                                                    <a href="counter.html">Counter</a>
                                                    <a href="form.html">Form</a>
                                                    <a href="gallery.html">Gallery</a>
                                                </div>
                                                <div class="megamenu-list">
                                                    <h5>Shortcode (2)</h5>
                                                    <a href="alert.html">Alert</a>
                                                    <a href="icon.html">Icon</a>
                                                    <a href="list.html">List</a>
                                                    <a href="pricing.html">Pricing</a>
                                                    <a href="social-icon.html">Social Icon</a>
                                                </div>
                                                <div class="megamenu-list">
                                                    <h5>Shortcode (3)</h5>
                                                    <a href="button.html">Button</a>
                                                    <a href="tab.html">Tabs</a>
                                                    <a href="team.html">Team</a>
                                                    <a href="testimonial.html">Testimonial</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item menu-click3 ps-rel">
                                        <a class="nav-link" href="javascript:;">Shop <span><i
                                                    class="fas fa-chevron-down"></i></span></a>
                                        <ul class="dropdown-items menu-open3">
                                            <li><a href="product.html">Product</a></li>
                                            <li><a href="/shop">Product Left Sidebar</a></li>
                                            <li><a href="product-right-sidebar.html">Product Right Sidebar</a></li>
                                            <li><a href="product-single.html"> Product Single</a></li>
                                            <li><a href="checkout.html"> Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item menu-click ps-rel">
                                        <a class="nav-link" href="javascript:;">Blog
                                            <span><i class="fas fa-chevron-down"></i></span>
                                        </a>
                                        <ul class="dropdown-items menu-open">
                                            <li>
                                                <a href="javascript:;">Blog Category <span><i
                                                            class="fas fa-chevron-right"></i></span></a>
                                                <ul class="sub-dropdown">
                                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Blog Single <span><i
                                                            class="fas fa-chevron-right"></i></span></a>
                                                <ul class="sub-dropdown">
                                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="store.html">Store</a>
                                    </li>
                                    <li class="nav-item menu-click1 ps-rel">
                                        <a class="nav-link" href="/cart">Cart <span class="cartCount">{{ Cart::getTotalQuantity()}}</span> <i class="fa fa-shopping-cart"
                                                                                                                                                   aria-hidden="true"></i></a>
                                    </li>

{{--                                    <li class="nav-item menu-click1 ps-rel">--}}
{{--                                        <a class="nav-link" href="javascript:;">Cart &nbsp;<span class="cartCount">{{ Cart::getTotalQuantity()}}</span>--}}
{{--                                            <i class="fa fa-shopping-cart"--}}
{{--                                                                                              aria-hidden="true"></i></a>--}}

{{--                                        <ul class="dropdown-items menu-open1">--}}
{{--                                            <li>--}}
{{--                                                <span>1 Item</span>--}}
{{--                                                <a href="javascript:;"> View Cart</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="cart_list">--}}
{{--                                                <div class="select_cart">--}}
{{--                                                    <a href="#">Bee Meat</a>--}}
{{--                                                    <span>1 x $258.00</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="select_img">--}}
{{--                                                    <img alt="img" src="{{asset('front/images/pm3.gif')}}">--}}
{{--                                                    <div class="close_btn">--}}
{{--                                                        <i class="fa fa-times"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li class="sub_total">--}}
{{--                                                <p>Sub Total:<span>$ 289.00</span></p>--}}
{{--                                            </li>--}}
{{--                                            <li class="cart_btn">--}}
{{--                                                <a href="/cart"><i class="fas fa-shopping-cart"></i>&nbsp; View Cart</a>--}}
{{--                                                <a href="checkout.html"><i class="fas fa-share"></i>&nbsp; Checkout</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive menu bar start -->
        <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4 col-sm-4 col-6">
                        <div class="mobile-logo">
                            <a href="/">
                                <img src="{{asset('front/images/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-6">
                        <div class="d-flex  justify-content-end">
                            <div class="social-media-icons">
                                <ul>
                                    <li class="login-btn">
                                        <a href="javascript:;">
                                            Cart<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                        </a>
                                        <div class="user-text">
                                            <p>Item <span>View Cart</span> </p>
                                            <div class="cart-list">
                                                <h5>Bee Meat <span>1 x $258.00</span></h5>
                                            </div>
                                            <div class="cart-right">
                                                <img alt="img" src="{{asset('front/images/pm3.gif')}}">
                                                <div class="close_btn">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </div>
                                            <div class="total">
                                                <p>Sub Total: <span>$ 289.00</span> </p>
                                            </div>
                                            <div class="btn-cart">
                                                <a href="/cart"><i class="fas fa-shopping-cart"></i>&nbsp; View Cart</a>
                                                <a href="checkout.html"><i class="fas fa-share"></i>&nbsp; Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div class="sidebar_logo">
                <a href="/"><img src="{{asset('front/images/logo.png')}}" alt="img"></a>
            </div>
            <div id="toggle_close">&times;</div>
            <div id='cssmenu'>
                <ul class="float_left">
                    <li class="has-sub">
                        <a href="">Home</a>
                        <ul>
                            <li><a href="/">Home 01</a></li>
                            <li><a href="index2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">about</a></li>

                    <li class="has-sub">
                        <a href="">Shop</a>
                        <ul>
                            <li><a href="product.html">Product</a></li>
                            <li><a href="/shop">Product Left Sidebar</a></li>
                            <li><a href="jproduct-right-sidebar.html">Product Right Sidebar</a></li>
                            <li><a href="product-single.html">Product Single</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="">Blog</a>
                        <ul>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="border-none"><a href="store.html">Store</a></li>
                </ul>
            </div>
        </div>
        <!-- responsive menu End -->
    </div>
</div>
<!-- header end -->
@yield('content')

<!-- footer section start -->
<div class="footer-main-wrapper float_left ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="link">
                    <span>Call Now</span>
                    <h4>+92 331 379 9210</h4>
                    <span>Get Special Email Offers</span>
                    <div class="line">
                        <img src="{{asset('front/images/4.png')}}" alt="line">
                    </div>
                    <div class="input-filed">
                        <input type="email" placeholder="Your Email">
                        <button>Join Us</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="widgettitle">
                    <h4>Our Service</h4>
                    <div class="line">
                        <img src="{{asset('front/images/4.png')}}" alt="line">
                    </div>
                    <div class="link-page">
                        <ul>
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <a href="product.html">Product</a>
                            </li>
                            <li>
                                <a href="/shop">Product left Sidebar</a>
                            </li>
                            <li>
                                <a href="product-right-sidebar.html">Product Right Sidebar</a>
                            </li>
                            <li>
                                <a href="product-single.html">Product Single</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="widgettitle">
                    <h4>Our Story</h4>
                    <div class="line">
                        <img src="{{asset('front/images/4.png')}}" alt="line">
                    </div>
                    <div class="link-page">
                        <ul>
                            <li>
                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                            </li>
                            <li>
                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                            </li>
                            <li>
                                <a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a>
                            </li>
                            <li>
                                <a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a>
                            </li>
                            <li>
                                <a href="privacy.html">Privacy</a>
                            </li>
                            <li>
                                <a href="terms.html">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="widgettitle">
                    <h4>Our Story</h4>
                    <div class="line">
                        <img src="{{asset('front/images/4.png')}}" alt="line">
                    </div>
                    <div class="link-page">
                        <div class="img-ftr">
                            <div class="small-img"> <img src="{{asset('front/images/s1.jpg')}}" alt="img"> </div>
                            <div class="small-img"> <img src="{{asset('front/images/s2.jpg')}}" alt="img"> </div>
                            <div class="small-img"> <img src="{{asset('front/images/s3.jpg')}}" alt="img"> </div>
                            <div class="small-img"> <img src="{{asset('front/images/s4.jpg')}}" alt="img"> </div>
                            <div class="small-img"> <img src="{{asset('front/images/s5.jpg')}}" alt="img"> </div>
                            <div class="small-img"> <img src="{{asset('front/images/s6.jpg')}}" alt="img"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-right-wrapper float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="copy-social">
                    <ul>
                        <li>
                            <a href="javascript:;"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fab fa-google" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="copy-right">
                    <p>Copyright 2022 © </p>
                    <a href="javascript:;">TomaMeat | Meat Shop HTML Template</a>
                    <p>Design By</p>
                    <a href="javascript:;">Webstrot</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- Side Panel -->
<script src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/wow.js')}}"></script>
<script src="{{asset('front/js/counter.js')}}"></script>
<script src="{{asset('front/js/tesi.js')}}"></script>
<script src="{{asset('front/js/testi.js')}}"></script>
<script src="{{asset('front/js/tabs.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>
<script src="{{asset('assets/js/toaster.js')}}"></script>

<!-- custom js-->
<script>
    new WOW().init();
</script>
<!-- tabs -->
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    if($("#defaultOpen").length > 0){
        document.getElementById("defaultOpen").click();
    }
    $('.addToCart').click(function(e){
        e.preventDefault();
        const id = $(this).attr("data-product-id");
        $.post("{{route('cart.store')}}",{_token:"{{csrf_token()}}",product_id: id},function(data){
            console.log(data,'successfull data');
            if(data.code == 200){
                const cartCount = data.data.cartCount;

                updateCartCount(cartCount);
                toastr.success(data.message, 'Success');
            }
        })
    })

    function updateCartCount(count){
        $(".cartCount").text(count)
    }
</script>

@yield('script')
</body>

</html>
