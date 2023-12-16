





@extends('front.layout.app')

@section("content")

    <!-- banner section start start-->
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Products Shop</h4>
                <img src="{{asset('front/images/title.png')}}" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="">Home</a></li>
                <li class="active">Products Shop</li>
            </ol>
            <img class="meat" src="{{asset('front/images/title-bottom.png')}}" alt="img">
        </div>
    </div>
    <!-- banner section start end-->

    <div class="inner-page-main-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="side-bar-strip">
                        <h4>Search</h4>
                        <img src="{{asset('front/images/side-title.png')}}" alt="img">
                        <div class="input-search">
                            <input type="text" placeholder="Search Here">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!--  -->
                    <div class="side-bar-strip">
                        <h4>Categories</h4>
                        <img src="{{asset('front/images/side-title.png')}}" alt="img">
                        <div class="side-accordian">
                            <ul>
                                @forelse($categories as $category)
                                <li><a href="{{ request()->fullUrlWithQuery(['category' => $category->id]) }} ">{{$category->name}} <span> </span></a></li>
                                @empty
                                    <p>No category found which has product</p>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                    <div class="side-bar-strip">
                        <h4>Top Seller</h4>
                        <img src="{{asset('front/images/side-title.png')}}" alt="img">
                        <div class="side-main-box">
                            <div class="side-img-box">
                                <img src="{{asset('front/images/post1.jpg')}}" alt="img">
                            </div>
                            <div class="side-img-content">
                                <h5> <a href="product-single.html">Leg Boneless</a> </h5>
                                <ul class="star-review">
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                </ul>
                                <h5> <a href="product-single.html">$10.00</a> </h5>
                            </div>
                        </div>
                        <!--  -->
                        <div class="side-main-box">
                            <div class="side-img-box">
                                <img src="{{asset('front/images/post2.jpg')}}" alt="img">
                            </div>
                            <div class="side-img-content">
                                <h5> <a href="product-single.html">Chicken</a> </h5>
                                <ul class="star-review">
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                </ul>
                                <h5> <a href="product-single.html">$20.00</a> </h5>
                            </div>
                        </div>
                        <!--  -->
                        <div class="side-main-box">
                            <div class="side-img-box">
                                <img src="{{asset('front/images/post3.jpg')}}" alt="img">
                            </div>
                            <div class="side-img-content">
                                <h5> <a href="product-single.html">Kalahari Beef</a> </h5>
                                <ul class="star-review">
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                </ul>
                                <h5> <a href="product-single.html">$30.00</a> </h5>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="blog-slider-wrapper float_left">
                        <div class="blog-cat">
                            <div class="blog-post-slider">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{asset('front/images/blog-post1.jpg')}}" alt="img">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('front/images/blog-post2.jpg')}}" alt="img">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('front/images/blog-post3.jpg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <del>{{number_format($featuredProduct->price * 2,2)}} PKR</del>
                                <h4><a href="product-single.html">NOW ONLY {{number_format($featuredProduct->price,2)}} PKR</a></h4>
                                <div class="post-tag">
                                    <a href="#">{{$featuredProduct->name}} </a>
                                </div>
                                <ul class="star-review">
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                </ul>
                                <a class="custom-btn" href="product/{{$featuredProduct->url}}">View Product</a>
                                <a class="custom-btn mt-0 addToCart" href="javascript:void(0);" data-product-id="{{$featuredProduct->id}} ">Add to Cart</a>
                            </div>
                        </div>
                        <!--  -->

                        <div class="product-single-wrapper">
                            @forelse($products as $product)
                                <div class="custom-tabs-prdt">
                                    <div class="product-thumbnail">
                                        <a href="javascript:;">
                                            <img src="{{asset('front/images/product/pc1.png')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-body">
                                        <h5 class="product-title">
                                            <a href="product-single.html" title="Beef">{{\Illuminate\Support\Str::limit($product->name,10,$end = '...')}}</a>
                                        </h5>
                                        <ul class="star-review">
                                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                        <span class="product-price">{{$product->price}} PKR <span>{{$product->price * 2}} PKR</span> </span>
                                        <p class="product-text">{{\Illuminate\Support\Str::limit($product->description,50,$end = '...')}}</p>
                                        <a class="custom-btn" href="product-single.html">Add Cart</a>
                                    </div>
                                </div>
                            @empty
                                <p>No Product Found</p>
                            @endforelse
                        </div>

                        <!--  -->
                        <div class="custom-pegination">
                            {{$products->links()}}
                            <ul>
                                <li class="preious"> <a href="javascript:;"> <span>
                                 Previous</span> </a> </li>
                                <li class="active"> <a href="javascript:;"> <span>1</span> </a> </li>
                                <li> <a href="javascript:;"> <span>2</span> </a> </li>
                                <li> <a href="javascript:;"> <span>3</span> </a> </li>
                                <li> <a href="javascript:;"> <span>4</span> </a> </li>
                                <li> <a href="javascript:;"> <span>5</span> </a> </li>
                                <li class="preious active"> <a href="javascript:;"> <span>Next </span> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-now-wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6"></div>
                <div class="col-lg-6 col-md-12 align-self-end">
                    <div class="call-sec-wrapper float_left">
                        <h4>Call Now</h4>
                        <img class="img-fluid" src="{{asset('front/images/line-yal-red.png')}}" alt="img">
                        <h2 class="call">+61 3 8376 6284</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentumlaoreet velit ut rhoncus.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                        <a class="custom-btn" href="shop.blade.php">COntact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section("script")



@endsection

