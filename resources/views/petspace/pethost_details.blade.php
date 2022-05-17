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
    

 
  
            <div class="container">
                <div class="testimonial-thumb text-center">
                <div class="row m-b-n40">
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="single-footer-widget">
                        
                            <img src="{{URL::asset('front-end/assets/images/testimonial/User Image.png')}}" alt="Testimonial Image"/>
                            <div class="name_details">
                                <h3 class="thumb-title">Jonathon Jhon</h3>
                                <h6 class="thumb-subtitle">joining date</h6>
                           </div>
                            </div> 
                        </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1200">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1400">        
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1600">
                        <div class="single-footer-widget">
                            <h3 class="rupee"> <a href=""><i class="fa fa-rupee" style="font-size:24px">100</i></a></h3>
                            <h6 class="rupee">Per Hour</h6>
                            <div class="book">
                                <a  href="{{URL::asset('')}}"  class="btn btn-danger btn-sm mx-auto">Book</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
              
    <div class="section section-margin">

          <div class="container">
           
              <div class="row m-b-n30">

                <div class="col-md-6 col-12 m-b-30" data-aos="fade-up" data-aos-duration="1000">
                   <h2> <i class="fa fa-user" style="color:#f6ab49;font-size:50px"></i>About Me<h2>
                       <div class="about-us">
                       <p class="about"><b>Introduce yourself and why you enjoy being with pets.</b></p>
                       <p class="about">e.g. I'm a pet lover and i love pets as they are absolutely adorable</p>
                       <p class="about"><b>Tell us about the type of pet you have and your experience with it.</b></p>
                       <p class="about">e.g. I own a German Shepard since i was 18, it's a wonderful pet an takes care of me and my family.I walk with her daily </p>
                       <p class="about"><b>How dose your service stand out ?</b></p>
                       <p class="about">Tell potential customers why they should choose you about others</p>
                       <p class="about"><b>What do you enjoy about the work you do ?</b></p>
                       <p class="about">Discribe what makes you enjoy what you do.</p>
                       </div>
                </div>
                
                <div class="col-md-6 col-12 m-b-30" data-aos="fade-up" data-aos-duration="1400">
               
                                    <h2><img src="{{URL::asset('front-end/assets/images/logo/Venue.svg')}}"  alt="Smiley face" height="32px" width="42px">Venue Details<h2>
                                        <div class="venue">
                            <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1200">
                              <div class="single-footer-widget">
                                  <p class="about">Category<p>
                                 <p class="about">Venue <p>
                                      <p class="about">Amenities <p>
                                 <p class="about">Applicable <p>
                                    <p class="about">Location<p>
                                </div>
                             </div>
                         </div>
                        <div class="venue_det">
                            <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1200">
                                <div class="single-footer-widget">
                                 <p class="about">Cat<p>
                                 <p class="about"> Apartment<p>
                                 <p class="about">cage,Caretakers<p>
                                    <p class="about">Play Area,CCTV<p>
                                      <p class="about">chennai<p>
                                </div>
                             </div>
                        </div>
        
             
                </div>
              </div>
           
        

           </div>
    </div>
      <!-- Banner Section Start -->
      <div class="section section-margin">
        <div class="container" >
            <div class="service-providers">
        <h1>Select Your Service</h1>
            <!-- Banners Start -->
            <div class="row m-b-n30">

                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="sittink align_services">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Sitting Green.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="sitt">Sitting</div>
                    </div>  
                </div>
              <!-- Banner End -->
               <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                   <div class="groomink align_services">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Grooming Blue.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="grom">Grooming</div>
                   </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                    <div class="walkink align_services">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Walking Orange.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="walk">Walking</div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="breadink align_services">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Breeding Yellow.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="brea">Breading</div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="trainink align_services">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Training Blue.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="trai">Training</div>
                    </div>
                </div>
                <!-- Banner End -->
                  <!-- Banner Start -->
                  <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="photography align_services">
                        <a href="shop.html" class="banner">
                            <img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Photography Blue.svg')}}" alt="Banner Image" />
                        </a>
                        <div class="phot">Photography</div>
                    </div>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
        </div>
    </div>


     @endsection