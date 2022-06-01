@extends('layouts.main')
@section('content')
      <!-- Hero/Intro Slider Start -->
    <div class="section gallary-details">
        <div class="profile_images">
      <div class="row">
        <div class="col-md-6 col-lg-5 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
            <div class="col-lg-12">
                     <img class="pro-images" src="{{URL::asset('front-end/assets/images/profile-images/Exc pet space pt2 image 1 in webscreen 4.png')}}" alt="Banner Image" />
            </div>
         </div>
         <div class="col-md-6 col-lg-7 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
            <div class="row">
            <div class=" col-md-3 col-lg-6 m-b-30">  
                  <div class="col-lg-12">                    
                    <img class="pro-images2" src="{{URL::asset('front-end/assets/images/profile-images/Exc pet space pt2 image 1 in webscreen 4.png')}}" alt="Banner Image" />
                  </div>
            </div>
            <div class=" col-md-12 col-lg-6 m-b-30">  
                <div class="">
                <div class=" col-md-3 col-lg-12 m-b-30">  
                    <div class="col-lg-123">                    
                      <img class="pro-images3" src="{{URL::asset('front-end/assets/images/profile-images/Exc pet space pt2 image 1 in webscreen 4.png')}}" alt="Banner Image" />
                    </div>
              </div>
               <div class=" col-md-3 col-lg-12 m-b-30">  
                <div class="col-lg-12">                    
                  <img class="pro-images3" src="{{URL::asset('front-end/assets/images/profile-images/Exc pet space pt2 image 1 in webscreen 4.png')}}" alt="Banner Image" />
                  <div class="view-allpic">
                    <a  href="{{URL::asset('/allimages')}}">More Images</a>
                </div>
                </div>
          </div>
                </div>
          </div>
             
                
         </div>
         </div>
         </div>
      </div>
        </div>
    

 
  
            <div class="section profile-details">
                <div class="testimonial-thumb text-center">
                <div class="row m-b-n40">
                                <div class="col-12 col-md-2 col-sm-4 col-lg-2 m-b-40 user_pic">
                        
                            <img src="{{URL::asset('front-end/assets/images/testimonial/User Image.png')}}" alt="Testimonial Image"/>
                                </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-7 m-b-40">
                                <div class="name_details">
                                <h3 class="thumb-title">Jonathon Jhon</h3>
                                <h6 class="thumb-subtitle">joining date</h6>
                                </div>
                           </div>
             
                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1600">
                        <div class="single-footer-widget booking_form_details">
                            <h3 class="rupee"> <i class="fa fa-rupee" style="font-size:24px"><span id="amound" value="100">100</span></i></h3>
                            <h6 class="rupee">Per Hour</h6>
                            <div class="booking-all">
                                <button  href="{{URL::asset('/bookingdetails')}}" id="btn"  class="btn btn-primary btn-sm mx-auto">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
              
    <div class="section section-margin pets-details">

          <div class="container">
           
              <div class="row m-b-n30">

                <div class="col-md-6 col-12 m-b-30" data-aos="fade-up" data-aos-duration="1000">
                   <h2> <i class="fa fa-user" style="color:#f6ab49;font-size:50px"></i>About Me</h2>
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
            <div class="service-providers" id="yourservice">
        <h1>Select Your Service</h1>
            <!-- Banners Start -->
            <div class="row m-b-n30">

                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic1" id="one" value="Sitting">
                    <div class="sittink align_services">
                        <input type="checkbox" name="category[]" value="Sitting" id="cb1" />
                        <label for="cb1"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Sitting Green.svg')}}"/>
                        </label>
                        <div class="sitt">Sitting</div>
                    </div> 
                    <div>
                    <h3 class="rupee1"><i class="fa fa-rupee">60</i></h3> 
                    <h5 class="rupee2">Per Hour</h5>
                    </div>
                    </div>
                </div>
              <!-- Banner End -->
               <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic2" id="two" value="60">
                   <div class="groomink align_services">
                        <input type="checkbox" name="category[]" value="Grooming" id="cb2" />
                        <label for="cb2"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Grooming Blue.svg')}}"/>
                        </label>
                        <div class="grom">Grooming</div>
                   </div>
                   <div>
                    <h3  class="rupee1"><i class="fa fa-rupee">60</i></h3> 
                    <h5 class="rupee2">Per Hour</h5>
                    </div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                    <div class="service-pic service-pic3" id="three" value="60">
                    <div class="walkink align_services">
                        <input type="checkbox" name="category[]" value="Walking" id="cb3" />
                        <label for="cb3"  ><img class="fit-image"  src="{{URL::asset('front-end/assets/images/lightgallery/Walking Orange.svg')}}"/>
                        </label>
                        <div class="walk">Walking</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">60</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic4" id="four" value="60">
                    <div class="breadink align_services">
                        <input type="checkbox" name="category[]" value="Breading" id="cb4" />
                        <label for="cb4"  ><img class="fit-image"  src="{{URL::asset('front-end/assets/images/lightgallery/Breeding Yellow.svg')}}"/>
                        </label> 
                        <div class="brea">Breading</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">60</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                    </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic5" id="five" value="60">
                    <div class="trainink align_services">
                        <input type="checkbox" name="category[]" value="Training" id="cb5" />
                        <label for="cb5"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Training Blue.svg')}}"/>
                        </label> 
                        <div class="trai">Training</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">60</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
                  <!-- Banner Start -->
                  <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                      <div class="service-pic service-pic6" id="six" value="60">
                    <div class="photography align_services" >
                        <input type="checkbox" name="category[]" value="Photography" id="cb6" />
                        <label for="cb6"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/lightgallery/Photography Blue.svg')}}" />
                        </label>  
                        <div class="phot">Photography</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">60</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
        </div>
    </div>
 


     @endsection
     @section('scripts')
     {{-- <script>
     $(".service-pic1").on("click", function(){
        var one   = parseInt($("#one").val(), 10);
        var seven  = parseInt($("#amound").val(), 10); 
        var sum = seven + one;
        $("#amound").text(sum);        // or $("#amound") since you gave it an ID
    })
    </script>
    <script>
        $(".service-pic2").on("click", function(){
           var two   = parseInt($("#two").val(), 10); 
           var seven  = parseInt($("#amound").val(), 10);
           var sum = seven + one;
           $("#amound").text(sum);        // or $("#amound") since you gave it an ID
       })
       </script>
       <script>
        $(".service-pic3").on("click", function(){
          
           var three = parseInt($("#three").val(), 10);
           var seven  = parseInt($("#amound").val(), 10);
           var sum = seven + three;
           $("amound").text(sum);        // or $("#p") since you gave it an ID
       })
       </script>
       <script>
        $(".service-pic4").on("click", function(){
           var four  = parseInt($("#four").val(), 10); 
           var seven  = parseInt($("#amound").val(), 10); 
           var sum = seven + four;
           $("amound").text(sum);        // or $("#p") since you gave it an ID
       })
       </script>
       <script>
        $(".service-pic5").on("click", function(){
           var five = parseInt($("#five").val(), 10);
           var seven  = parseInt($("#amound").val(), 10); 
           var sum = seven + five;
           $("amound").text(sum);        // or $("#p") since you gave it an ID
       })
       </script>
       <script>
        $(".service-pic6").on("click", function(){
           var six = parseInt($("#six").val(), 10);
           var seven  = parseInt($("#amound").val(), 10); 
           var sum = seven + six;
           $("amound").text(sum);        // or $("#p") since you gave it an ID
       })
       </script>--}}
       <script>
          $("#btn").click(function(event){
            event.preventDefault();
            var searchIDs = $("input:checkbox:checked").map(function(){
                return this.value;
            }).toArray();

         
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
          }); 
          $.ajax({
                                            type:'POST',
                                            url:"{{ url('pet_host_details') }}",
                                            data:{
                                        
                                              select_category:searchIDs
                                            },
                                            success:function(data){
                                           console.log(data.select_category);
                                            }
                                           
                                            });
            });
           </script>
     @endsection 