@extends('layouts.main')
@section('content')
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
                <div class="col-12 col-sm-6 col-md-6 col-lg-8">
                    <h1 class="pet_space">Exclusive Pet Spaces</h1>
                </div>
                <div class="view-all col-12 col-sm-6 col-md-6 col-lg-4">
                    <a href="{{URL::asset('/exclusive_petspaces')}}" class="btn btn-warning btn-sm mx-auto">view all</a>
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 1.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                           
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                           

                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 2 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 3 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 1 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                           
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/6.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/7.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/8.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/1.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                         
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                         
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
        <div class="container" >
            <div class="service-providers">
        <h1>Pet Service Providers</h1>
            <!-- Banners Start -->
            <div class="row m-b-n30">

                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="sitting align_service">
                        <a href="{{('/petspace_details')}}" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Group 18007.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="sitti">Sitting</div>
                    </div>  
                </div>
              <!-- Banner End -->
               <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                   <div class="grooming align_service">
                        <a href="{{('/petspace_details')}}" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Grooming white.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="groom">Grooming</div>
                   </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                    <div class="walking align_service">
                        <a href="{{('/petspace_details')}}" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Walking White.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="walks">Walking</div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="breading align_service">
                        <a href="{{('/petspace_details')}}" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Breeding White.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="bread">Breading</div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="training align_service">
                        <a href="{{('/petspace_details')}}" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Path 27524.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="train">Training</div>
                    </div>
                </div>
                <!-- Banner End -->
                  <!-- Banner Start -->
                  <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="photo align_service">
                        <a href="{{('/petspace_details')}}" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Photography White.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="photog">Photography</div>
                    </div>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
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
             <div class="col-12 col-sm-6 col-md-6 col-lg-8">
                    <h1 class="pet_space">Independent House | Apartment</h1>
                </div>
                <div class="view-all col-12 col-sm-6 col-md-6 col-lg-4">
                    <a  href="{{URL::asset('/house&apartment/house_apartment')}}" class="btn btn-warning btn-sm mx-auto">view all</a>
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 1.png')}}" alt="Product" />
                                           </a>
                                           <span class="badges">
                                            <span class="sale">4.5</span>
                                            </span>
                                          
                                       </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                                                                   </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                           </a>
                                           <span class="badges">
                                            <span class="sale">4.5</span>
                                            </span>
                                            
                                       </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                           
                                                                                  </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 2 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 3 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space pt1 image 1 in webscreen 5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                           
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/5.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/6.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 3.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
                                        </div>ntent End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/7.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/8.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/1.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                         
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/2.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                            
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                                            <a href="{{('/petspace_details')}}" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 4.png')}}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                        </div>
                                        <!-- Thumb End  -->
                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><p>Pet Food Corner</p></h5>
                                            <span class="price">
                                                <span class="new">RS 250/Hr</span>
                                                </span>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>    
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
                            <h2 class="title m-0" id="title-color">List your space for pets<br>and start earning</h2>
                            <a href="/register" class="btn btn-dark btn-hover-primary">become a Pethost</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Testimonial Section End -->
@endsection
