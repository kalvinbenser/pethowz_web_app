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
    
    
        </div>
        <!-- Header Section End -->
    
        <div class="section section-margin">
            <div class="container">
            <h1>Pet Sitting Service Providers</h1>
                <!-- Banners Start -->
                <div class="row m-b-n30">
    
                    <!-- Banner Start -->
                    <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                        <div class="sitting align_service">
                            <a href="shop.html">
                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Group 18007.svg')}}" alt="Banner Image" />
                            </a>
                        </div>  
                    </div>
                  <!-- Banner End -->
                   <!-- Banner Start -->
                    <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                       <div class="grooming align_service">
                            <a href="shop.html">
                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Grooming white.svg')}}" alt="Banner Image" />
                            </a>
                       </div>
                    </div>
                    <!-- Banner End -->
                    <!-- Banner Start -->
                    <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                        <div class="walking align_service">
                            <a href="shop.html" >
                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Walking White.svg')}}" alt="Banner Image" />
                            </a>
                        </div>
                    </div>
                    <!-- Banner End -->
                    <!-- Banner Start -->
                    <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                        <div class="breading align_service">
                            <a href="shop.html" >
                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Breeding White.svg')}}" alt="Banner Image" />
                            </a>
                        </div>
                    </div>
                    <!-- Banner End -->
                    <!-- Banner Start -->
                    <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                        <div class="training align_service">
                            <a href="shop.html" >
                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Path 27524.svg')}}" alt="Banner Image" />
                            </a>
                        </div>
                    </div>
                    <!-- Banner End -->
                      <!-- Banner Start -->
                      <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                        <div class="photo align_service">
                            <a href="shop.html">
                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Photography White.svg')}}" alt="Banner Image" />
                            </a>
                        </div>
                    </div>
                    <!-- Banner End -->
    
                </div>
                <!-- Banners End -->
            </div>
        </div>
        @endsection 