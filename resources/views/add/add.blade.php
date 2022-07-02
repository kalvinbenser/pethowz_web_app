@extends('layouts.main')
@section('styles')
  <style>
  .Your_Category input[type="checkbox"] {
      display: none !important;
  }
  .birds{
    border: 2px solid #ff9a71;
  }
  .cat{
    border: 2px solid #ff9a71;
  }
  .dog{
    border: 2px solid #ff9a71;
  }
  
      </style>
      @endsection
@section('content')
 
     <!-- Section Title Start -->
<div class="container" id="yourself">
    <h1 class="yourself">About Your Self</h1>

 <div class="product-deal-carousel arrow-outside-container">
    <form action="{{ url('/create_your_self') }}" method="post" enctype="multipart/form-data">
        @csrf
                <!-- Single Product Deal Start -->
                <div class="single-deal-product row m-b-n30">
                    <!-- Deal Thumb Start -->
                   
                    <div class="deal-thumb col-md-6 m-b-30" data-aos="fade-up" data-aos-duration="1200">
                       
                        <div class="form-group">
                            <label for="user-message" class="about">Introduce yourself and why enjoy being with pets.
                            </label>
                            <input type="text" name="content1" class="form-control add_self"/>
                          </div><!--ends from group-->
                          <div class="form-group form-group1">
                            <label for="user-message" class="about">Tell us about the type of bet you have and your experience with if
                            </label>
                            
                            <input type="text" name="content2" class="form-control add_self"/>
                         
                          </div><!--ends from group-->
                          <div class="form-group form-group1">
                            <label for="user-message" class="about">How dose your service stand out?
                            </label>
                        
                            <input type="text" name="content3" class="form-control add_self"/>
                       
                          </div><!--ends from group-->
                          <div class="form-group form-group1">
                            <label for="user-message" class="about">What do you enjoy about the work you do?
                            </label>
                      
                            <input type="text" name="content4" class="form-control add_self"/>
                       
                          </div><!--ends from group-->
                          <div class="form-group form-group1">
                            <label for="user-message" class="about">Your skils and qualifications
                            </label>
                        
                            <input type="text" name="content5" class="form-control add_self"/>
                         
                          </div><!--ends from group-->
                          <div class="form-group form-group1">
                            <label for="user-message" class="about">Other special skills with per or qualification ?
                            </label>
                        
                            <input type="text" name="content6" class="form-control add_self"/>
                         
                          </div><!--ends from group-->
                     
                    </div>
                    <!-- Deal Thumb End -->
                    <!-- Deal Content Start -->
                    <div class="product-deal-content col-md-6 m-b-30"  data-aos-duration="1400">
                        
                            <h1 class="yourself">Select Your Category</h1>
                            <div class="row" id="category">
                            <div class=" col-md-4 m-b-15  Your_Category" data-aos-duration="1200">
                              <div class="pic11">
                                <input type="checkbox" name="category[]" value=1 id="cb4" />
                                <label for="cb4"  ><img class="fit-image2 click_logo1" src="{{URL::asset('front-end/assets/images/category/Select category  - Bird.png')}}" />
                                </label> 
                                <p class="about">Birds</p>
                              </div>
                            </div>
                            <div class="col-md-4 m-b-15 Your_Category " data-aos-duration="1200">
                              <div class="pic22">
                                <input type="checkbox" name="category[]" value=2 id="cb3" />
                                <label for="cb3"  ><img class="fit-image2 click_logo2" src="{{URL::asset('front-end/assets/images/category/Select category  - cat.png')}}" />
                                </label>  
                                <p class="about">Cat</p>
                              </div>
                            </div>
                            <div class=" col-md-4 m-b-15 Your_Category " data-aos-duration="1200">
                              <div class="pic33">
                                    <input type="checkbox" name="category[]" value=3 id="cb2" />
                                        <label for="cb2"  ><img class="fit-image2 click_logo3" src="{{URL::asset('front-end/assets/images/category/Select category  - Dog.png')}}" />
                                        </label>                                   
                                <p class="about">Dog</p>
                              </div>
                            </div>
                              
                            <div class="form-group booking_button col-md-5">

                                <button type="submit" class="btn btn-primary btn-sm mx-auto">Save</button>

                            </div>
                
                      </div>
                    <!-- Deal Content End -->
                </div>
           
                <!-- Single Product Deal End -->
            </div>
        </form>
        </div>
</div>
<!-- Latest Blog Carousel End -->
@endsection
@section('scripts')

<script>
    $(".click_logo1").on("click", function(){
     $(".pic11").toggleClass("birds");
})
$(".click_logo2").on("click", function(){
     $(".pic22").toggleClass("cat");
})
$(".click_logo3").on("click", function(){
     $(".pic33").toggleClass("dog");
})
   </script>
   @endsection
