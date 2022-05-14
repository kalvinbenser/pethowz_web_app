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
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/Webscreen 13 image 4.png')}}" alt="Slider Image" />
                    </div>
                </div>
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/istockphoto-1262197572-612x612.jpg')}}" alt="Slider Image" />
                    </div>
                </div>
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/slider.png')}}" alt="Slider Image" />
                    </div>
                </div>
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{URL::asset('front-end/assets/images/slider/Footer Image.png')}}" alt="Slider Image" />
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
     <div class="testimonial-thumb text-center">
         <div class="profile_pic">
        <img src="{{URL::asset('front-end/assets/images/testimonial/User Image.png')}}" alt="Testimonial Image">
        <h3 class="thumb-title">Jonathon Jhon</h3>
        <h6 class="thumb-subtitle">Customer</h6>
         </div>
    </div>
     @endsection