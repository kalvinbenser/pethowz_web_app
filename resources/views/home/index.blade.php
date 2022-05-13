<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pethows</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{URL::asset('front-end/assets/images/favicon.ico')}}">

    <!-- Vendor CSS (Icon Font) -->

    <!-- 
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/vendor/fontawesome.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/vendor/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/vendor/simple-line-icons.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/vendor/themify-icons-min.css')}}" /> 
 -->

    <!-- Plugins CSS (All Plugins Files) -->

    <!-- 
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/plugins/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/plugins/animate.min.css')}}')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/plugins/lightgallery.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/plugins/aos.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/plugins/nice-select.min.css')}}" /> 
-->

    <!-- Main Style CSS -->

    <!-- <link rel="stylesheet" href="{{URL::asset('front-end/assets/css/style.css')}}')}}" />  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <link rel="stylesheet" href="{{URL::asset('front-end/assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/assets/css/style.min.css')}}">



</head>

<body>

    <!-- Header Section Start -->
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-name-primary">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Top Message Start -->
                    <div class="col-12 col-lg-6">
                        <div class="header-top-msg-wrapper">
                            <p class="header-top-message">Welcome To Pet Hows</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="header-top-settings">
                            <ul class="nav">
                                <li class="curreny-wrap">
                                    <a href="#">USD</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#">€ EUR</a></li>
                                        <li><a href="#">£ GBP</a></li>
                                        <li><a href="#">₹ INR</a></li>
                                        <li><a href="#">¥ JPY</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Message End -->

                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- Header Logo Start -->
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{URL::asset('front-end/assets/images/logo/Pethowz logo with text.svg')}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{URL::asset('/home/index')}}">Home</a>                                        
                                   </li>  
                                   <li><a href="{{URL::asset('/about/about')}}">About</a></li>                                  
                                   <li>
                                        <a href="{{URL::asset('/pethost/pethost')}}">Pet host</a>
                                    </li>
                                    
                                    <li class="has-children">
                                        <a href="#">services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{URL::asset('/service/service')}}">Sitting</a></li>
                                            <li><a href="{{URL::asset('/service/service')}}">Grooming</a></li>
                                            <li><a href="{{URL::asset('/service/service')}}">Walking</a></li>
                                            <li><a href="{{URL::asset('/service/service')}}">Bredding</a></li>
                                            <li><a href="{{URL::asset('/service/service')}}">Training</a></li>
                                            <li><a href="{{URL::asset('/service/service')}}">Photography</a></li>
                                        </ul>
                                      </li>
                                    <li>
                                        <a href="{{URL::asset('/login/login')}}">Login</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-lg-3 col-md-8 col-6">
                            <div class="header-actions">

                                <!-- Header Action Search Button Start -->
                                <div class="header-action-btn header-action-btn-search d-none d-md-flex">
                                    <div class="action-execute">
                                        <a class="action-search-open" href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                        <a class="action-search-close" href="javascript:void(0)"><i class="ti-close"></i></a>
                                    </div>
                                    <!-- Search Form and Button Start -->
                                    <form class="header-search-form" action="#">
                                        <input type="text" class="header-search-input" placeholder="Search Our Store">
                                        <button class="header-search-button"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                    <!-- Search Form and Button End -->
                                </div>
                                <!-- Header Action Search Button End -->

                                <!-- Header My Account Button Start -->
                                <a href="my-account.html" class="header-action-btn header-action-btn-wishlist">
                                    <i class="icon-user icons"></i>
                                </a>
                                <!-- Header My Account Button End -->

                                <!-- Header Action Button Start -->
                                <div class="header-action-btn header-action-btn-cart d-none d-sm-flex">
                                    <a class="cart-visible" href="javascript:void(0)">
                                        <i class="icon-bell icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>

                                    <!-- Header Cart Content Start -->
                                    <div class="header-cart-content">

                                        <!-- Cart Procut Wrapper Start  -->
                                        <div class="cart-product-wrapper">

                                            <!-- Cart Product/Price Start -->
                                            <div class="cart-product-inner p-b-20 m-b-20 border-bottom">

                                                <!-- Single Cart Product Start -->
                                                <div class="single-cart-product">
                                                    <div class="cart-product-thumb">
                                                        <a href="single-product.html"><img src="{{URL::asset('front-end/assets/images/header/header-cart/1.png')}}" alt="Cart Product"></a>
                                                    </div>
                                                    <div class="cart-product-content">
                                                        <h3 class="title"><a href="single-product.html">Basic Dog Trainning</a></h3>
                                                        <div class="product-quty-price">
                                                            <span class="cart-quantity">Qty: <strong> 1 </strong></span>
                                                            <span class="price">
															<span class="new">$70.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Product End -->

                                                <!-- Product Remove Start -->
                                                <div class="cart-product-remove">
                                                    <a href="#/"><i class="icon-close"></i></a>
                                                </div>
                                                <!-- Product Remove End -->

                                            </div>
                                            <!-- Cart Product/Price End -->

                                            <!-- Cart Product/Price Start -->
                                            <div class="cart-product-inner p-b-20 m-b-20 border-bottom">

                                                <!-- Single Cart Product Start -->
                                                <div class="single-cart-product">
                                                    <div class="cart-product-thumb">
                                                        <a href="single-product.html"><img src="{{URL::asset('front-end/assets/images/header/header-cart/2.png')}}" alt="Cart Product"></a>
                                                    </div>
                                                    <div class="cart-product-content">
                                                        <h3 class="title"><a href="single-product.html">Wait, You Need This</a></h3>
                                                        <div class="product-quty-price">
                                                            <span class="cart-quantity">Qty: <strong> 1 </strong></span>
                                                            <span class="price">
															<span class="new">$80.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Product End -->

                                                <!-- Product Remove Start -->
                                                <div class="cart-product-remove">
                                                    <a href="#/"><i class="icon-close"></i></a>
                                                </div>
                                                <!-- Product Remove End -->

                                            </div>
                                            <!-- Cart Product/Price End -->

                                        </div>
                                        <!-- Cart Procut Wrapper -->

                                        <!-- Cart Product Total Start -->
                                        <div class="cart-product-total p-b-20 m-b-20 border-bottom">
                                            <span class="value">Total</span>
                                            <span class="price">200$</span>
                                        </div>
                                        <!-- Cart Product Total End -->

                                        <!-- Cart Product Button Start -->
                                        <div class="cart-product-btn m-t-20">
                                            <a href="cart.html" class="btn btn-outline-light btn-hover-primary w-100">View cart</a>
                                            <a href="checkout.html" class="btn btn-outline-light btn-hover-primary w-100 m-t-20">Checkout</a>
                                        </div>
                                        <!-- Cart Product Button End -->

                                    </div>
                                    <!-- Header Cart Content End -->

                                </div>
                                <div class="header-action-btn header-action-btn-cart d-flex d-sm-none">
                                    <a href="cart.html">
                                        <i class="icon-handbag icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>
                                </div>
                                <!-- Header Action Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
                                    <i class="icon-menu"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

    </div>
    <!-- Header Section End -->

    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/Slider Image.png')}}" alt="Slider Image" />
                    </div>
                </div>

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/Webscreen 12 image 3.png')}}" alt="Slider Image" />
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-lg-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i class="icon-arrow-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i class="icon-arrow-right"></i></div>
            <!-- Swiper Navigation End -->
        </div>
    </div>
  
    <!-- pet Section Start -->
    <div class="section position-relative">
        <div class="container">

            <!-- Section Title & Tab Start -->
            <div class="row " data-aos="fade-up" data-aos-duration="1000" >
                <!-- Tab Start -->
                <div class="col-12 my-3">
                    <h1>Exclusive Pet Spaces</h1>
                    <div class="viewall">
                        <a href="{{URL::asset('/exclusive_petspaces/exclusive-petspaces')}}" class="btn btn-warning btn-sm mx-auto">view all</a>
                    </div>
                </div>
                
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-12">
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="row m-b-n40">

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 1.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$80.50</span>
                                            <span class="old">$85.80</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                           
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Wait, You Need This</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$90.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                            </a>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$105.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                           

                                            <div class="countdown-area">
                                                <div class="countdown-wrapper" data-countdown="2028/12/28"></div>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$47.50</span>
                                            <span class="old">$50.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 2 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$58.50</span>
                                            <span class="old">$62.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 3 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">This is the testing</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$78.50</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 1 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$55.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                           
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$75.50</span>
                                            <span class="old">$82.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-product-featured">
                            <div class="row m-b-n40">

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$47.50</span>
                                            <span class="old">$50.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/6.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$58.50</span>
                                            <span class="old">$62.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Wait, You Need This</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$90.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/7.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">This is the testing</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$78.50</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/8.png')}}" alt="Product" />
                                            </a>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$55.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/1.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                         
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$80.50</span>
                                            <span class="old">$85.80</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$75.50</span>
                                            <span class="old">$82.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                            </a>
                                         
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$105.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <div class="section section-margin">
        <div class="container">
        <h1>Pet Service Providers</h1>
            <!-- Banners Start -->
            <div class="row m-b-n30">

                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="sitting align_service">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Group 18007.svg')}}" alt="Banner Image" />
                        </a>
                    </div>  
                </div>
              <!-- Banner End -->
               <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                   <div class="grooming align_service">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Grooming white.svg')}}" alt="Banner Image" />
                        </a>
                   </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                    <div class="walking align_service">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Walking White.svg')}}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="breading align_service">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Breeding White.svg')}}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="training align_service">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Path 27524.svg')}}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <!-- Banner End -->
                  <!-- Banner Start -->
                  <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="photo align_service">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Photography White.svg')}}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->
    <!-- Exclusive Pet Spaces in service cender -->
      <!-- pet Section Start -->
      <div class="section position-relative">
                  <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <!-- Tab Start -->
             <div class="col-12">
                    <h1>Independent House | Apartment</h1>
                    <div class="viewall">
                      <a  href="{{URL::asset('/house&apartment/house_apartment')}}" class="btn btn-warning btn-sm mx-auto">view all</a>
                    </div>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->
            <!-- Products Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="row m-b-n40">
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 1.png')}}" alt="Product" />
                                           </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                          
                                       </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$80.50</span>
                                            <span class="old">$85.80</span>                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                                                                   </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Wait, You Need This</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                           <span class="price">
                                            <span class="new">$90.00</span>                                          
                                         </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                           </a>
                                            
                                       </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$105.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                           
                                            <div class="countdown-area">                                                <div class="countdown-wrapper" data-countdown="2028/12/28"></div>
                                            </div>                                       </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$47.50</span>
                                            <span class="old">$50.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 2 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$58.50</span>
                                            <span class="old">$62.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 3 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">This is the testing</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$78.50</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 1 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$55.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                           
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$75.50</span>
                                            <span class="old">$82.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-product-featured">
                            <div class="row m-b-n40">

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$47.50</span>
                                            <span class="old">$50.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/6.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$58.50</span>
                                            <span class="old">$62.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Wait, You Need This</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$90.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/7.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">This is the testing</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$78.50</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/8.png')}}" alt="Product" />
                                            </a>
                                          
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$55.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/1.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                         
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$80.50</span>
                                            <span class="old">$85.80</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$75.50</span>
                                            <span class="old">$82.85</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                            </a>
                                         
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">$105.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>  
    <!-- Product Deal Section End -->
    <!-- Testimonial Section Start -->
    <div class="section bg-name-bright section-padding section-margin">
        <div class="container">
          <!-- ending Slider Start -->
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/Footer Image.png')}}" alt="Slider Image" />
                   </div>
                    <div class="container">
                        <div class="hero-slide-content text-start">
                            <h2 class="title m-0">List your space for pets<br>and start earning</h2>
                            <a href="shop.html" class="btn btn-dark btn-hover-primary">become a Pethost</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-name-bright section-padding">
            <div class="container">
                <div class="row m-b-n40">
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">Head Office</h1>
                            <p class="desc-content">91 springboard, Gopala krishna complex,<br>45/3 Residency Road,Mahatma Gandhi Rd,<br>ShanthalamNagar,Ashok Nagar,<br>Bengaluru,Karnadaka -560025</p>
                            <div class="copyright-content">
                            <div class="copyright-content">
                            <p class="mb-0"><i class="fa fa-phone text-danger"></i> <strong>098840 42119</strong> </p>
                        </div>
                            <p class="mb-0"><i class="fa fa-envelope-o text-danger"></i> <strong>Support@pethows.com</strong></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1200">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Site Links</h2>
                           
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1400">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Follow Us</h2>
                           <!-- Soclial Link Start -->
                           <div class="widget-social justify-content-start mb-n2">
                           <a style="color: #ac2bac;" href="#!" role="button"><i class="fa fa-instagram fa-lg"></i></a>
                           <a style="color: #dd4b39;" href="#!" role="button"><i class="fa fa-youtube fa-lg"></i></a>
                           <a style="color: #3b5998;" href="#!" role="button"><i class="fa fa-facebook fa-lg"></i></a>
                           <a style="color: #55acee;" href="#!" role="button"><i class="fa fa-twitter fa-lg"></i></a>
                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1600">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Services We Provide</h2>
                            <div class="widget-body">
                   <p> Pet Sitting <br> Pet Training <br>Pet Walking  <br> Pet Grooming <br> Pet Breading <br> Pet Photography</p>
                                <!-- Newsletter Form Start -->
                                <div class="newsletter-form-wrap p-t-5">                             
                                   
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                                <!-- Newsletter Form End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/payment/App Store.svg')}}" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/payment/Google Play.svg')}}" alt="Product" />
                                            </a>
                                      </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-name-light p-t-20 p-b-20">
            <div class="container">
                <div class="row align-items-center m-b-n20">
                    <div class="col-md-6 text-center text-md-start order-2 order-md-1 m-b-20">
                        <div class="copyright-content">
                            <p class="mb-0">© 2022 <strong>Pethows.</strong>All rights reserved. <a href="https://sales@paladinsoftwares.com/">HasThemes.</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end order-1 order-md-2 m-b-20">
                        <div class="copyright-content">
                            <p> <a href="https://sales@paladinsoftwares.com/">Terms&Conditions &emsp;&emsp; Privacy</a></p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{URL::asset('front-end/assets/images/products/large-product/1.png')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{URL::asset('front-end/assets/images/products/large-product/2.png')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{URL::asset('front-end/assets/images/products/large-product/3.png')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{URL::asset('front-end/assets/images/products/large-product/4.png')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{URL::asset('front-end/assets/images/products/large-product/5.png')}}" alt="Product">
                                    </a>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="ti-arrow-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="ti-arrow-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head m-b-15">
                                <h2 class="product-title">Single Product Slider</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Rating Start -->
                            <span class="rating justify-content-start m-b-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                            <!-- Rating End -->

                            <!-- Price Box Start -->
                            <div class="price-box m-b-10">
                                <span class="regular-price">$70.00</span>
                                <span class="old-price"><del>$85.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- SKU Start -->
                            <div class="sku m-b-15">
                                <span>SKU: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                            <div class="product-inventroy m-b-15">
                                <span class="inventroy-title"> <strong>Availability:</strong></span>
                                <span class="inventory-varient">12 Left in Stock</span>
                            </div>
                            <!-- Product Inventory End -->

                            <!-- Description Start -->
                            <p class="desc-content m-b-25">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <!-- Description End -->

                            <!-- Quantity Start -->
                            <div class="quantity d-flex align-items-center justify-content-start m-b-25">
                                <span class="m-r-10"><strong>Qty: </strong></span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart Button Start -->
                            <div class="cart-btn action-btn m-b-30">
                                <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                    <div class="add-to_cart">
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <!-- Cart Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <div class="widget-social justify-content-center m-b-30">
                                    <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option m-t-20 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="#">
                                    <img class="fit-image m-l-5" src="{{URL::asset('front-end/assets/images/payment/payment_large.png')}}" alt="Payment Option Image">
                                </a>
                            </div>
                            <!-- Payment Option End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top ti-angle-double-up"></i>
        <i class="arrow-bottom ti-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="fa fa-times"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                    <li><a href="index-4.html">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="shop.html">Shop Grid</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                    <li><a href="single-product-group.html">Single Product Group</a></li>
                                    <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                    <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{URL::asset('/about/about')}}">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="{{URL::asset('/login/login')}}">Login | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="{{URL::asset('/about/about')}}">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Language, Currency & Link Start -->
                <div class="offcanvas-lag-curr m-b-30">
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <h4 class="title">Language:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Romanian</a></li>
                            </ul>
                        </div>
                        <div class="header-top-curr dropdown">
                            <h4 class="title">Currency:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->


    <!-- 
    <script src="{{URL::asset('front-end/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>   
    -->


    <!-- Plugins JS -->


    <!-- 
    <script src="{{URL::asset('front-end/assets/js/plugins/aos.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins/nice-select.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins/countdown.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins/lightgallery-all.min.js')}}"></script>  
    -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <script src="{{URL::asset('front-end/assets/js/vendor.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/plugins.min.js')}}"></script>

    <!--Main JS-->
    <script src="{{URL::asset('front-end/assets/js/main.js')}}"></script>
</body>

</html>