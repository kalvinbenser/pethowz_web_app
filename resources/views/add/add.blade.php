@extends('layouts.main')
@section('content')
   <!-- Section Title Start -->
<div class="container" id="yourself">

    <h1 class="yourself">About Your Self</h1>

 <div class="product-deal-carousel arrow-outside-container">
    <div class="swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <!-- Single Product Deal Start -->
                <div class="single-deal-product row m-b-n30">
                    <!-- Deal Thumb Start -->
                    <div class="deal-thumb col-md-6 m-b-30" data-aos="fade-up" data-aos-duration="1200">
                        <div class="form-group">
                            <label for="user-message" class="about">Introduce yourself and why enjoy being with pets.
                            </label>
                         
                                <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder="100 words"></textarea>
                           
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">Tell us about the type of bet you have and your experience with if
                            </label>
                            
                                <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder="100 words"></textarea>
                         
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">How dose your service stand out?
                            </label>
                        
                                <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder="100 words"></textarea>
                       
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">What do you enjoy about the work you do?
                            </label>
                      
                                <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder="100 words"></textarea>
                       
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">What do you enjoy about the work you do?
                            </label>
                        
                                <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder="100 words"></textarea>
                         
                          </div><!--ends from group-->
                     
                    </div>
                    <!-- Deal Thumb End -->
                    <!-- Deal Content Start -->
                    <div class="product-deal-content col-md-6 m-b-30" data-aos="fade-up" data-aos-duration="1400">
                        
                            <h1 class="yourself">Select Your Category</h1>
                            <div class="row" id="category">
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                                <a href="single-product.html">
                                    <img class="fit-image" src="{{URL::asset('front-end/assets/images/category/Select category  - Bird.png')}}" alt="Product Image">
                                </a>
                                <p class="about">Birds</p>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                                <a href="single-product.html">
                                    <img class="fit-image" src="{{URL::asset('front-end/assets/images/category/Select category  - cat.png')}}" alt="Product Image">
                                </a>
                                <p class="about">Cat</p>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                                <a href="single-product.html">
                                    <img class="fit-image" src="{{URL::asset('front-end/assets/images/category/Select category  - Dog.png')}}" alt="Product Image">
                                </a>
                                <p class="about">Dog</p>
                            </div>
                            <div class="next-btn">
                                <a href="/bookingform" class="btn btn-primary btn-hover-dark">Next</a>
                            </div>
                
                      </div>
                    <!-- Deal Content End -->
                </div>
                <!-- Single Product Deal End -->
            </div>
        </div>
     </div>
   </div>
</div>
<!-- Latest Blog Carousel End -->
@endsection