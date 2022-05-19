@extends('layouts.main')
@section('content')
                    <div class="section" id="register">
                        <div class="hero-slider swiper-container">
                            <div class="swiper-wrapper">
                        
                                <div class="hero-slide-item swiper-slide">
                                    <div class="hero-slide-bg">
                                        <img src="{{URL::asset('front-end/assets/images/slider/Slider Image.png')}}" alt="Slider Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-margin">
                        <div class="container">
                            <div class="row">
                                <h1>Resitration Details</h1>
                            <div class="login-wrapper">
                            <div class="row" id="category">
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10" id="reg-img">
                                <form action="{{URL::asset('/home/index')}}" method="POST" enctype="multipart/form-data">      
                                    <label for="img"><img class="reg-image" src="{{URL::asset('front-end/assets/images/review/User white 2.svg')}}" alt=""></label>
                                    <input type="file" id="img" name="img" accept="image/*" style="display: none;"> 
                                <p class="upload" >Upload image</p>
                            </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">

                            <div class="single-input-item m-b-10">
                            <input type="text" id="name" name="name" placeholder="Name" required="">
                            </div>
                            <div class="single-input-item m-b-10">
                            <input type="email" id="mail" name="mail" placeholder="E-mail" required="">
                            </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10">
                            <input type="number" id="number" name="number" placeholder="Mobile Number" required="">
                            </div>
                            <div class="single-input-item m-b-10">
                               <textarea id="address" name="address" placeholder="Address" required=""></textarea>
                                </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                                <label for="img"><img class="reg-image" src="{{URL::asset('front-end/assets/images/gender/Male.svg')}}" alt=""></label>
                                <label for="img"><img class="reg-image" src="{{URL::asset('front-end/assets/images/gender/Female.svg')}}" alt=""></label>
                            </div>
                        </div>
                      </div>
                            </div>
                        </div>
                    </div>
                        

@endsection