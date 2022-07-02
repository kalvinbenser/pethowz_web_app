

@extends('layouts.main')
@section('styles')
  <style>
  #update{
    background: #ffffff;
    border-radius: 5px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #000000;
    font-size: 14px;
    height: 50px;
    margin-bottom: 20px;
    padding-left: 10px;
    padding-right: 10px;
    width: 100%;
    border: 1px solid #ebebeb;
  }
      </style>
      @endsection
@section('content')
<div class="section position-relative">
  <div class="row"  id="user-profile">
    <div class="col-12 col-sm-6 col-lg-4 m-b-40" id="profile1" data-aos="fade-up" data-aos-duration="1000">
    <h3>Profile</h3>   
    </div>
      <div class="col-12 col-sm-6 col-lg-4 m-b-40" data-aos="fade-up" data-aos-duration="1000">
    <div class="profile-details">
        <form>
            <input type="hidden" value="" name="" id="">
        <div class="image-upload">
           
                 
                <div class="upload-icon">
                  <img class="prev" src="">
                  {{-- <img class="profile-pic" id="profils" src="{{URL::asset('front-end/assets/images/review/User Image.png')}}"> --}}

                  <img class="profile-pic" id="profils" >


                  <label for="file-input" style="cursor: pointer">  <span class="pro-img"><i class="fa fa-camera"></i></span>  </label>
                </div> 
                <input id="file-input" type="file" />
              </div>
              <h1 style="font-size:medium;">{{$collection['name']}}</h1>
              <p style="font-size: small;"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fa fa-pencil "></i>Edit</a></p>
              <div class="single-footer-widget" id="pro-details">
                            <ul>
                                <li class="addicon2"><i class="fa fa-envelope-o addicon4" style="color:  #FF9A71"></i><p class="addicon1"> <strong>{{$collection['email']}}</strong></p></li>
                                <li class="addicon2"><i class="fa fa-phone  addicon4" style="color:  #FF9A71"></i> <p class="addicon1"><strong>{{$collection['contact_number']}}</strong></p></li>
                                
                                <li class="addicon2"><i class="fa fa-map-marker addicon4" style="color:  #FF9A71"></i><p class="addicon1">{{$collection['address']}}</span></li>
                               
                               {{--     <li class="addicon2"><p class="addicon3">45/3 Residency Road,Mahatma Gandhi Rd,</p></li>
                                <li class="addicon2"><p class="addicon3">ShanthalamNagar,Ashok Nagar,</p></li>
                                <li class="addicon2"><p class="addicon3">Bengaluru,Karnadaka -560025</p></li> --}}
                               
                                
                            </ul>
                        </div>
        </form>

    </div>

      </div>
      <div class="col-12 col-sm-6 col-lg-3 m-b-40" id="profile2" data-aos="fade-up" data-aos-duration="1000">
        <p><span><a href=""><img src="{{URL::asset('front-end/assets/images/banner/Help.svg')}}" >Help&nbsp;&nbsp;&nbsp;</a></span><span><a  href="/user_logout" style="cursor: pointer"><i class="fa fa-sign-out" style="color:#FF9A71;font-size:25px;"></i>Logout</a></span></p>
      </div>
 </div>
</div>
<div class="section position-relative">
  <div class="container">
       {{-- @if(session()->has('user_id'))
       <h1>{{session()->get('user_id')}}</h1>
       @endif --}}
      <!-- Section Title & Tab Start -->
      <div class="row " data-aos="fade-up" data-aos-duration="1000" >
          <!-- Tab Start -->
          <div class="col-12 my-3">
              <h1>My Venues</h1>
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
                                      <a href="{{('/petspace_details')}}" class="image">
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
  <!-- Banner Section Start -->
  <div class="section section-margin">
    <div class="container" >
        <div class="service-providers">
    <h1>Venue Booking</h1>
        <!-- Banners Start -->
        <div class="row m-b-n30">

            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>  
            </div>
          <!-- Banner End -->
           <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
               <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
               </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
            </div>
            <!-- Banner End -->
             <!-- Banner Start -->
             <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
            </div>
            <!-- Banner End -->
             <!-- Banner Start -->
             <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
            </div>
            <!-- Banner End -->
            

        </div>
        <!-- Banners End -->
    </div>
    </div>
</div>
  <!-- Banner Section Start -->
  <div class="serv-booking">
    <div class="container" >
        <div class="service-providers">
    <h1>Service  Booking</h1>
        <!-- Banners Start -->
        <div class="row m-b-n30">

            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="service-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>  
                <div class="px">
                    <p>ddfgjdijdihidhi</p>
                    </div>
            </div>
          <!-- Banner End -->
           <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
               <div class="service-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
               </div>
               <div class="px">
                <p>ddfgjdijdihidhi</p>
                </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                <div class="service-booking">
                    <a class="banner">
                        <img href="myFunction()" class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
                <div class="px">
                    <p>ddfgjdijdihidhi</p>
                    </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="service-booking">
                    <a  class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
                <div class="px">
                    <p>ddfgjdijdihidhi</p>
                    </div>
            </div>
            <!-- Banner End -->
             <!-- Banner Start -->
             <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                <div class="service-booking">
                    <a class="banner">
                        <img href="myFunction()" class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
                <div class="px">
                    <p>ddfgjdijdihidhi</p>
                    </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="service-booking">
                    <a  class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">john</h1>
                </div>
                <div class="px">
                    <p>ddfgjdijdihidhi</p>
                    </div>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog model-center">
  
      <div class="modal-content">    
        <div class="modal-body model-login-two">
              <p class="model-text-center mt-5">Edit Your Details</p>
              <div class="model-item-center mt-2">
                <div style="display: flex;justify-content: center" id="otp-container">
                <form action="{{('/update_Profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                           <div class="single-input-item m-b-10">
                            <input type="email" id="update" class="profile_email" value="{{$collection['email']}}" name="update_mail" placeholder="Email" >                
                            </div>
                            <div class="single-input-item m-b-10">
                            <input type="number" id="update" class="profile_number" value="{{$collection['contact_number']}}" name="update_number" placeholder="Mobile Number" >                       
                            </div>
                            <div class="single-input-item m-b-10">
                               <textarea id="update" name="update_address"  class="profile_address" placeholder="Address" >{{$collection['address']}}</textarea>                         
                                </div>
                       <div class="model-item-center">
                        <input type="submit" value="Update" > 
                        </div>
                  </form>
              </div>
              </div>
              

            </div>
      

     
        </div>
    </div>
    </div>
    <!-- Edit Modal -->
    

 @endsection
@section('scripts')
<script src="{{URL::asset('front-end/assets/js/jquery.min.js')}}"></script>
<script>
    function readURL(input) {
var id = $(input).attr("id");

if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function(e) {
$('label[for="' + id + '"] .upload-icon').css("border", "none");
$('[for="' + id + '"] .profile-pic').hide();
$('[for="' + id + '"] .prev').attr('src', e.target.result).show();
}

reader.readAsDataURL(input.files[0]);
}
}

$("input[id^='file-input']").change(function() {
readURL(this);
});
    </script>
 <script>
    var coll = document.getElementsByClassName("service-booking");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var px = this.nextElementSibling;
        if (px.style.display === "block") {
          px.style.display = "none";
        } else {
          px.style.display = "block";
        }
      });
    }
    </script>


<script>
       function getImage(){
      var storage    = firebase.storage();
var storageRef = storage.ref();
//var spaceRef = storageRef.child('images/photo_1.png');

storageRef.child('user/1656479213056-index.jpeg').getDownloadURL().then(function(url) {


 var test = url;
 
 document.querySelector('#profils').src = test;

}).catch(function(error) {
     alert(error);
});


     }


     window.onload = getImage;
</script>


@endsection