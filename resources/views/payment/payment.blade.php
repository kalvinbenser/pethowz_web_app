@extends('layouts.main')
@section('content')
   <!-- Section Title Start -->
<div class="container" id="yourself">
    <h1 class="yourself">Payment Method</h1>
    <div class="row">
        <div class="deal-thumb col-md-4 m-b-15" data-aos="fade-up" data-aos-duration="1200">
            <div class="row" id="payment">
            <div class="deal-thumb col-md-2 m-b-15" data-aos="fade-up" data-aos-duration="1200">
            <a href="single-product.html">
                <img class="pay-image" src="{{URL::asset('front-end/assets/images/payment/Visa.svg')}}" alt="Product Image">
            </a>
            </div>
            <div class="deal-thumb col-md-2 m-b-15" data-aos="fade-up" data-aos-duration="1200">
            <p class="about"><strong>Visa xxxx 1657</strong><br>Expires on 16/24</p>
            </div>
         </div>
        <div class="deal-thumb col-md-4 m-b-15" data-aos="fade-up" data-aos-duration="1200">
            <div class="row" id="payment">
            <div class="deal-thumb col-md-2 m-b-15" data-aos="fade-up" data-aos-duration="1200">
            <a href="single-product.html">
                <img class="pay-image" src="{{URL::asset('front-end/assets/images/payment/Mastercard.svg')}}" alt="Product Image">
            </a>
            </div>
            <div class="deal-thumb col-md-2 m-b-15" data-aos="fade-up" data-aos-duration="1200">
            <p class="about"><strong>Mastercard xxxx 9878</strong><br>expires on 16/24</p>
          </div>
        </div>
    </div>
        </div>

 <div class="product-deal-carousel arrow-outside-container">
    <div class="swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <!-- Single Product Deal Start -->
                <div class="single-deal-product row m-b-n30">
                    <!-- Deal Thumb Start -->
                    <div class="deal-thumb col-md-6 m-b-30" data-aos="fade-up" data-aos-duration="1200">
                        
                     
                    </div>
                    <!-- Deal Thumb End -->
                    <!-- Deal Content Start -->
                    <div class="product-deal-content col-md-6 m-b-30" data-aos="fade-up" data-aos-duration="1400">                        
                           <h1 class="yourself">Select Your Category</h1>
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