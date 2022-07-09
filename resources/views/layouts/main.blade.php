<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{URL::asset('front-end/assets/css/model.css')}}">
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


  
     <!-- Font Awesome -->



@yield('styles')
<style>
    input[type="checkbox"] {
    display: inline;
}

    </style>

</head>

<body>

    <!-- Header Section Start -->
    <div class="header section">
        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- Header Logo Start -->
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="header-logo">
                                <img src="{{URL::asset('front-end/assets/images/logo/Pethowz logo with text.svg')}}" alt="Site Logo" />
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{URL::asset('/')}}">Home</a>                                        
                                   </li>  
                                   <!-- <li><a href="">About</a></li>                                   -->
                                   <li>
                                        <a href="{{URL::asset('/pet_host')}}">Pet host</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{URL::asset('/service')}}">services</a>
                                      </li>
                                   
                                   @if(!session()->has('user_id'))
                                    <li>
                                        <a onclick="" data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor: pointer">Login</a>
                                    </li>
                                    @endif
                                  
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
                                @if(session()->has('user_id'))
                                <a href="{{URL::asset('/profile')}}" class="header-action-btn header-action-btn-wishlist">
                                    <i class="icon-user icons"></i>
                                </a>
                                @endif
                                <!-- Header My Account Button End -->

                                <!-- Header Action Button Start -->
                                <div class="header-action-btn header-action-btn-cart d-none d-sm-flex">
                                    <a class="cart-visible" href="javascript:void(0)">
                                        <i class="icon-bell icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>

                                    <!-- Header Cart Content Start -->
                                    <!-- <div class="header-cart-content"> -->

                                        <!-- Cart Procut Wrapper Start  -->
                                        <!-- <div class="cart-product-wrapper"> -->

                                            <!-- Cart Product/Price Start -->
                                            <!-- <div class="cart-product-inner p-b-20 m-b-20 border-bottom"> -->

                                                <!-- Single Cart Product Start -->
                                                <!-- <div class="single-cart-product">
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
                                                </div> -->
                                                <!-- Single Cart Product End -->

                                                <!-- Product Remove Start -->
                                                <!-- <div class="cart-product-remove">
                                                    <a href="#/"><i class="icon-close"></i></a>
                                                </div> -->
                                                <!-- Product Remove End -->

                                            <!-- </div> -->
                                            <!-- Cart Product/Price End -->

                                            <!-- Cart Product/Price Start -->
                                            <!-- <div class="cart-product-inner p-b-20 m-b-20 border-bottom"> -->

                                                <!-- Single Cart Product Start -->
                                                <!-- <div class="single-cart-product">
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
                                                </div> -->
                                                <!-- Single Cart Product End -->

                                                <!-- Product Remove Start -->
                                                <!-- <div class="cart-product-remove">
                                                    <a href="#/"><i class="icon-close"></i></a>
                                                </div> -->
                                                <!-- Product Remove End -->

                                            <!-- </div> -->
                                            <!-- Cart Product/Price End -->

                                        <!-- </div> -->
                                        <!-- Cart Procut Wrapper -->

                                        <!-- Cart Product Total Start -->
                                        <!-- <div class="cart-product-total p-b-20 m-b-20 border-bottom">
                                            <span class="value">Total</span>
                                            <span class="price">200$</span>
                                        </div> -->
                                        <!-- Cart Product Total End -->

                                        <!-- Cart Product Button Start -->
                                        <!-- <div class="cart-product-btn m-t-20">
                                            <a href="cart.html" class="btn btn-outline-light btn-hover-primary w-100">View cart</a>
                                            <a href="checkout.html" class="btn btn-outline-light btn-hover-primary w-100 m-t-20">Checkout</a>
                                        </div> -->
                                        <!-- Cart Product Button End -->

                                    <!-- </div> -->
                                    <!-- Header Cart Content End -->

                                <!-- </div>
                                <div class="header-action-btn header-action-btn-cart d-flex d-sm-none">
                                    <a href="cart.html">
                                        <i class="icon-handbag icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>
                                </div> -->
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

   @yield('content')
   <div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content ">
      
        <div class="modal-body">
          <div class="model-item-center">
            <div class="row">
                
                  <div >
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz logo.svg')}}" alt="" class="logo-size" /><br>
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz.svg')}}" alt="" width="70px" />
                    
                  </div>

              </div>

              </div>

              <p class="model-text-center mt-2">You will get One Time Password<br>to this number</p>

              <div class="model-item-center">
                <input type="text" class="model-input-text mobile_number" id="loginNumber" placeholder="+91">
              </div>
              <span id="mobile_number_error" class="text-danger"></span>
              <div class="p-4 d-flex justify-content-center">
                <div id="recaptcha-container" ></div>
              </div>
             
              <div class="model-item-center mt-2">
              <input type="submit" id="booking_btn" onclick="phoneSendAuth();" value="SUBMIT"  class="btn-model" >
              </div>

              <p class="model-text-center mt-2">Or Login With</p>

              <div class="model-item-center">
                <div >
                  <img src="{{asset('front-end/assets/images/logo/Gmail-model.png')}}" alt="" />
 
                  
                  <img src="{{asset('front-end/assets/images/logo/facebook-model.png')}}" alt=""  width="50px" />
                 
                </div>
                
              </div>
        
            </div>
      

     
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>



  
  <div class="modal fade " id="loginModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content">
      
        <div class="modal-body model-login-two">
          <div class="model-item-center">
            <div class="row">
                
                  <div >
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz logo.svg')}}" alt="" class="logo-size" /><br>
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz.svg')}}" alt="" width="70px" />
                    
                  </div>

              </div>

              </div>

              <p class=" model-text-center mt-5">Enter the 4-Digit Verification Code</p>

              <div class="model-item-center mt-2">
                <div style="display: flex;justify-content: center" id="otp-container">
                    <input type="text" class="form-control" id="verificationCode"/>
           
              </div>
              </div>
              <p class="model-text-center mt-1">Did not receive the code? <span class="model-resend-text">Re-send</span></p>
              <span id="mobile_otp_error" class="text-danger"></span>
              <div class="model-item-center">
              <input type="submit" value="VERIFY" id="booking_btn2" onclick="codeverify();"  class="btn-model-verify" > 
              </div>

            </div>
      

     
        </div>
    </div>
  </div>
<!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal3">
  test
</button> -->
   
  <div class="modal fade " id="loginModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content " style="height: 480px">
      
  
          




              {{-- //begin  --}}


                 <p class="model-terms-heading">Terms And Conditions</p>

             
              <div class="modal-body  modal-content-overflow " style="text-align: left;">
                
                
            <p>  Pethowz is an online marketplace which connects pet owners with pet hosts and pet service providers. The 
platforms enables the pet hosts and services providers to host pets and also list various pet services so that pet 
owners can search and book the required services. </p>
<p>
The terms and conditions of refund and cancelation of booking is this platform is regulated and formulated by 
Pethowz and can be changed any time and for any reason via and updated version of the cancelation policy.</p>
<b>Pethowz Transaction Charges</b>
<p>Pethowz deducts the service transaction charges of 5% of various pet services transaction in the platform.</p>
<p>	Transactional fees- The transaction fees of every transaction made is not refundable under any 
circumstances. </p>
<p>Dispute settlement- In case of any grievances, feud, claims and controversy between the pet owners and the 
services providers, Pethowz shall have final say in any dispute between them w.r.t cancellation policies, money to be 
refunded, termination, formation and definition of anything in the policy.</p>
<p>Cancellation platform- The cancellation policy obligates all the party to do booking cancellation via 
platform. If not, your cancellation of the booking would not be considered effective.</p>
                
                
              </div>
            





              {{-- //end
               --}}




             
               <form action="{{('/closeModel')}}" method="post">
                @csrf
                <input type="checkbox" id="terms" name="terms" value="ok" required>
                <label for="terms">I accept the Terms and Conditions</label><br>
                <input type="submit" class="btn-model-verify mt-2 mb-2" value="submit" />
              </form>
           

<!-- 
              <div>
                <input type="checkbox" id="terms" name="terms" style="margin-left: 30px;margin-top:20px" value="ok" required>
                <label for="terms">I accept the <u>Terms and Conditions</u></label><br>
                <div class="p-4 d-flex justify-content-center">
                   
                    <button class="btn-model" type="submit" onclick="closeModel()">submit</button>
          
                </div>
              </div> -->
             
              
             
              
              {{-- <button class="btn-model" onclick="clodeModel()" >submit</button> --}}
      

     
        </div>
    </div>
  </div>


    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-name-bright section-padding1">
            <div class="container">
                <div class="row m-b-n40">
                    <div class="col-12 col-sm-3 col-lg-4 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">Head Office</h1>
                            <ul>
                                <li class="addicon2"><i class="fa fa-map-marker addicon4"></i><p class="addicon1"> Springboard, Gopala krishna complex,</span></li>
                                <li class="addicon2"><p class="addicon3">45/3 Residency Road,Mahatma Gandhi Rd,</p></li>
                                <li class="addicon2"><p class="addicon3">ShanthalamNagar,Ashok Nagar,</p></li>
                                <li class="addicon2"><p class="addicon3">Bengaluru,karnataka -560025</p></li>
                                <li class="addicon2"><i class="fa fa-phone  addicon4"></i> <p class="addicon1"><strong>098840 42119</strong></p></li>
                                <li class="addicon2"><i class="fa fa-envelope-o addicon4"></i><p class="addicon1"> <strong>Support@pethows.com</strong></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2 m-b-40" data-aos="fade-up" data-aos-duration="1200">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Site Links</h2>
                           
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2 m-b-40" data-aos="fade-up" data-aos-duration="1400">
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
                    <div class="col-12 col-sm-3 col-lg-4 m-b-40" data-aos="fade-up" data-aos-duration="1600">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Services We Provide</h2>
                            <div class="widget-body">
                                <ul>
                                    <li><p class="serv-pro">Pet Sitting</p></li>
                                    <li><p class="serv-pro">Pet Training</p></li>
                                    <li><p class="serv-pro">Pet Walking</p></li>
                                    <li><p class="serv-pro"> Pet Grooming</p></li>
                                    <li><p class="serv-pro">Pet Breading</p></li>
                                    <li><p class="serv-pro">Pet Photography</p></li>
                                        <ul>
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
            <div class="app ">
                                             <div class="paytm">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/payment/App Store.svg')}}" alt="Product" />
                                            </a>
                                             </div>
                                             <div class="gpay">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{URL::asset('front-end/assets/images/payment/Google Play.svg')}}" alt="Product" />
                                            </a>
                                             </div>
                                      </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-name-light p-t-20 p-b-20">
            <div class="container">
                <div class="row align-items-center m-b-n20">
                    <div class="col-md-6 text-center text-md-start order-2 order-md-2 m-b-20">
                        <div class="copyright-content">
                            <span class="mb-0">© 2022 <strong>Pethows.</strong>All rights reserved. </span>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end order-1 order-md-2 m-b-20">
                        <div class="copyright-content">
                            <span> <a href="{{URL::asset('/terms_coditions')}}">Terms&Conditions &emsp;&emsp;</a> </span>                          
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
                                        <!-- <a class="btn btn-primary btn-hover-dark rounded-0" href="#">test</a> -->
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
                            <li>
                                <a href="{{URL::asset('/')}}">Home</a>                                        
                           </li>  
                           <li><a href="">About</a></li>                                  
                           <li>
                                <a href="{{URL::asset('/pet_host')}}">Pet host</a>
                            </li>
                            
                            <li class="has-children">
                                <a href="{{URL::asset('/service')}}">services</a>
                            </li>
                            <li>
                                <a onclick="" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                            </li>
                          
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

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
                        <a style="color: #ac2bac;" href="#!" role="button"><i class="fa fa-instagram fa-lg"></i></a>
                        <a style="color: #dd4b39;" href="#!" role="button"><i class="fa fa-youtube fa-lg"></i></a>
                        <a style="color: #3b5998;" href="#!" role="button"><i class="fa fa-facebook fa-lg"></i></a>
                        <a style="color: #55acee;" href="#!" role="button"><i class="fa fa-twitter fa-lg"></i></a>
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

    <script src="{{URL::asset('front-end/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/bootstrap.min.js')}}"></script>
  
    <script src="{{URL::asset('front-end/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{URL::asset('front-end/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>   
    


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
     <!--Multiselect-->
    <script src="{{URL::asset('front-end/assets/js/multiselect-dropdown.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    <script>
    


    const firebaseConfig = {
      apiKey:"{{env('API_KEY')}}",
      authDomain:"{{env('AUTH_DOMAIN')}}",
      projectId:"{{env('PROJECT_ID')}}",
      storageBucket:"{{env('STORAGE_BUGET')}}",
      messagingSenderId: "{{env('MESS_SENDER_ID')}}",
      appId: "{{env('APP_ID')}}",
      measurementId: "{{env('MEASUREMENT_ID')}}"
    };
    
    
    
    firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript">
    window.onload=function () {
    render();
    };
    function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
    }
    function phoneSendAuth() {
    var number = $("#loginNumber").val();
    console.log(number);
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
    window.confirmationResult=confirmationResult;
    coderesult=confirmationResult;
    console.log(coderesult);
    $("#sentSuccess").text("number Sent Successfully.");
    $("#sentSuccess").show();

    $("#loginModal").modal('hide');
    $("#loginModal2").modal('show');

    }).catch(function (error) {
    $("#mobile_number_error").text(error.message);
    // $("#error").show();
  
   
    });
    }
    function codeverify() {
    var code = $("#verificationCode").val();
    coderesult.confirm(code).then(function (result) {
     var user=result.user;
     var userId=user.uid;
 
       if(userId){
        // localStorage.setItem("user_id",userId);


          // start
                   
          $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ url('user_login') }}",
                                            data:{
                                              user_id:userId,
                                             
                                            },
                                            success:function(data){
                                            if(data.user_id){
                                      
                                             $("#loginModal2").modal('hide');
                                             $("#loginModal3").modal('show');
                                                // toastr.success(data.status);
                                            }
                                            }
                                        });
                                    



          //end

      
       }
      console.log(userId);





    }).catch(function (error) {
    // $("#error").text(error.message);
    // $("#error").show();
    toastr.error(error.message);
    });
    }
    </script>








              {{-- toaster --}}
<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif
  

    
    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>




<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>

<script>
     @if(Session::has('custom_error'))
     
          @foreach(Session::get('custom_error') as $test)
          toastr.error("{{ $test }}");     
           @endforeach
    
    
            @php
                Session::forget('custom_error');
            @endphp
       
        @endif
</script>


  <!-- <script>
    closeModel(){
        window.location.href="{{url('/')}}";
    }
  </script> -->


    @yield('scripts')
      
</body>

</html>