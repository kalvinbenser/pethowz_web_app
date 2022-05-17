@extends('layouts.main')
@section('styles')

@endsection
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
    
        <!-- Breadcrumb Area Start -->
        {{-- <div class="section breadcrumb-area bg-name-bright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-wrapper">
                            <h2 class="breadcrumb-title">Login</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Breadcrumb Area End -->
    
        <!-- Login Section Start -->
        <div class="section section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 m-auto">
                        <div class="login-wrapper">
    
                            <!-- Login Title & Content Start -->
                            <div class="section-content m-b-30">

                                <h2 class="title m-b-10">Registeration Details</h2>
                            </div>
                            <!-- Login Title & Content End -->
    
    
                            <div class="row">
                                <div class="col-sm-5 col-md-2">

                                    <img  src="{{asset('front-end/assets/images/logo/user-avatar.png')}}" height="100px" width="100px" ><br>
                                  
                                    <label for="inputTag"> Upload Image <input id="inputTag" type="file" class="hidden"  style="color:transparent;"/> </label>
                                
                                </div>
                                <div class="col-sm-5 col-md-3">
                                    <div class="single-input-item m-b-10">
                                        <input type="password" placeholder="Name">
                                    </div>
                                    <div class="single-input-item m-b-10">
                                        <input type="password" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-3">
                                    <div class="single-input-item m-b-10">
                                        <input type="password" placeholder="Mobile Number">
                                    </div>
                                    
                                        <textarea name="address"  class="form-control"  id="" cols="32" rows="2" placeholder="Address"></textarea>
                          
                                   
                                  
                                </div>

                          
                                  
                                <div class="col-sm-5 col-md-2 ml-2">
                                    <span>Gender</span>
                                    <i class="fa-solid fa-mars"><input type="radio" name="gender" class="ml-2"></i>
                                    <i class="fa-solid fa-venus"><input type="radio" name="gender" class="ml-2"></i>
                                </div>
                                
                               


                                <div class="col-sm-5 col-md-2 ml-2">

                                   <input type="submit" class="btn-orange btn-sm mt-5">

                                </div>
                               
                              </div>
    
                            {{-- <!-- Form Action Start -->
                            <form action="#" method="post">
    
                                <!-- Input Email Start -->
                                <div class="single-input-item m-b-10">
                                    <input type="email" placeholder="Email or Username">
                                </div>
                                <!-- Input Email End -->
    
                                <!-- Input Password Start -->
                                <div class="single-input-item m-b-10">
                                    <input type="password" placeholder="Enter your Password">
                                </div>
                                <!-- Input Password End -->
    
                                <!-- Button/Forget Password Start -->
                                <div class="single-input-item m-b-15">
                                    <div class="login-reg-form-meta m-b-n15">
    
                                        <button class="btn btn btn-gray-deep btn-hover-primary m-b-15">Sign In</button>
                                        <a href="#" class="forget-pwd m-b-15">Forget Password?</a>
    
                                    </div>
                                </div>
                                <!-- Button/Forget Password End -->
    
                                <!-- Lost Password & Creat New Account Start -->
                                <div class="lost-password">
                                    <a href="register.html">Creat Account</a>
                                </div>
                                <!-- Lost Password & Creat New Account End -->
    
                            </form>
                            <!-- Form Action End --> --}}
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Section End -->
@endsection
