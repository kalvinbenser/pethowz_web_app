@extends('layouts.main')
@section('styles')
<style>
   .sittinks:hover{
    background: linear-gradient(178deg, rgba(86,171,47,1) 0%, rgba(168,224,99,1) 100%);
  
}
.groominks:hover{
    background: linear-gradient(178deg, rgba(54,209,220,1) 0%, rgba(91,134,229,1) 100%);
}
.walkinks:hover{
     background: linear-gradient(188deg, rgba(255,95,109,1) 0%, rgba(255,195,113,1) 75%);
}
.breadinks:hover{
    background: linear-gradient(188deg, rgba(250,214,55,1) 0%, rgba(231,176,77,1) 75%);
}
.traininks:hover{
    background: linear-gradient(246deg, rgba(39,239,246,1) 0%, rgba(0,205,172,1) 75%);
}
.photographys:hover{
    background: linear-gradient(188deg, rgba(45,56,138,1) 0%, rgba(1,174,239,1) 75%);
} 

.sittink{
    background: linear-gradient(178deg, rgba(86,171,47,1) 0%, rgba(168,224,99,1) 100%);
  
}
.groomink{
    background: linear-gradient(178deg, rgba(54,209,220,1) 0%, rgba(91,134,229,1) 100%);
}
.walkink{
     background: linear-gradient(188deg, rgba(255,95,109,1) 0%, rgba(255,195,113,1) 75%);
}
.breadink{
    background: linear-gradient(188deg, rgba(250,214,55,1) 0%, rgba(231,176,77,1) 75%);
}
.trainink{
    background: linear-gradient(246deg, rgba(39,239,246,1) 0%, rgba(0,205,172,1) 75%);
}
.photography{
    background: linear-gradient(188deg, rgba(45,56,138,1) 0%, rgba(1,174,239,1) 75%);
} 


.click_logo1{
    cursor: pointer;
}
.click_logo2{
    cursor: pointer;
}
.click_logo3{
    cursor: pointer;
}
.click_logo4{
    cursor: pointer;
}
.click_logo5{
    cursor: pointer;
}
.click_logo6{
    cursor: pointer;
}
.align_services input[type="checkbox"] {
    display: none;
}
</style>
    
@endsection
@section('content')
      <!-- Hero/Intro Slider Start -->
      <div class="section gallary-details">
        <div class="profile_images">
      <div class="row">
      
      @if($detail['image'])
         <div class=" col-md-4 col-lg-4 m-b-30">  
                  <div class="col-lg-12">                    
                    <img class="pro-images2" src="{{$detail['image']}}" alt="Banner Image" />
                  </div>
            </div> 
         @else

         <div class=" col-md-4 col-lg-4 m-b-30">  
                  <div class="col-lg-12">                    
                    <img class="pro-images2" src="{{URL::asset('front-end/assets/gallery/pet1.jpg')}}" alt="Banner Image" />
                  </div>
            </div>
            
         @endif
             
                
         
        
         </div>
      </div>
        </div> 





 
  
            <div class="section profile-details">
                <div class="testimonial-thumb text-center">
                <div class="row m-b-n40">
                <div class="col-12 col-md-2 col-sm-4 col-lg-2 user_pic">
                        @if(isset($reg['img']))
                        <img src="{{$reg['img']}}" alt=" Image"/>
                        @else
                        <img  alt=" Image"/>
                        @endif
                            </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3">
                            <div class="name_details">
                            @if(isset($reg['name']))
                            <h3 class="thumb-title">{{$reg['name']}}</h3>
                            @else
                            <h3 class="thumb-title">Name</h3>
                            @endif
                            <!-- <h6 class="thumb-subtitle">joining date</h6> -->
                            </div>
                           </div>
             
                    <div class="col-12 col-sm-4 col-md-3 col-lg-7" data-aos="fade-up" data-aos-duration="1600">
                        <div class="single-footer-widget booking_form_details">
                            <h3 class="rupee"> <i class="fa fa-rupee" style="font-size:24px"><span id="usertotal" >{{$detail['cost_per_hour']}}</span></i></h3>
                            <h6 class="rupee">Per Hour</h6>
                            <div class="bookings-all">
                                {{-- form --}}
                                <form action="/create_pet_service_booking_form" method="post">
                                    @csrf
                                    <input type="hidden" name="venue_name" value="{{ $detail['venue_name']}}" >
                                    <input type="hidden" name="user_service" id="userService">
                                    <input type="hidden" name="user_amount" id="userAmount" value={{$detail['cost_per_hour']}}>
                                    <input type="hidden" name="ser_cart_id" value={{$detail['_id']}}>
                                    <button  class="btn btn-primary btn-sm mx-auto" id="btn">Book</button>
                                </form>
                                {{-- <button  href="{{URL::asset('/bookingdetails')}}" id="btn"  class="btn btn-primary btn-sm mx-auto">Book</button> --}}


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
                       @if(isset($self['content1']))
                       <p class="about">{{$self['content1']}}</p>
                       @endif
                       <p class="about"><b>Tell us about the type of pet you have and your experience with it.</b></p>
                       @if(isset($self['content2']))
                       <p class="about">{{$self['content2']}} </p>
                       @endif
                       <p class="about"><b>How dose your service stand out ?</b></p>
                       @if(isset($self['content3']))
                       <p class="about">{{$self['content3']}}</p>
                       @endif
                       <p class="about"><b>What do you enjoy about the work you do ?</b></p>
                       @if(isset($self['content4']))
                       <p class="about">{{$self['content4']}}</p>
                       @endif
                       <p class="about"><b>Your Skills and qualifications</b></p>
                       @if(isset($self['content5']))
                       <p class="about">{{$self['content5']}}</p>
                       @endif
                       <p class="about"><b>Other special skills with per or qualification ?</b></p>
                       @if(isset($self['content6']))
                       <p class="about">{{$self['content6']}}</p>
                       @endif
                       
                       
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
                    <div class="service-pic service-pic1" id="one">
                    <div class="align_services sittinks pic1">
                        <input type="checkbox"  class="checkbox" name="category[]" value=1 id="cb1" />
                        <label for="cb1"  ><img class="fit-image click_logo1" src="{{URL::asset('front-end/assets/images/lightgallery/Sitting Green.svg')}}"/>
                        </label>
                        <div class="sitt">Sitting</div>
                    </div> 
                    <div>
                    <h3 class="rupee1"><i class="fa fa-rupee">{{$detail['cost_per_hour']}}</i></h3> 
                    <h5 class="rupee2">Per Hour</h5>
                    </div>
                    </div>
                </div>
              <!-- Banner End -->
               <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic2" id="two" >
                   <div class="groominks align_services pic2">
                        <input type="checkbox"  class="checkbox" name="category[]" value=2 id="cb2" />
                        <label for="cb2"  ><img class="fit-image click_logo2" src="{{URL::asset('front-end/assets/images/lightgallery/Grooming Blue.svg')}}"/>
                        </label>
                        <div class="grom">Grooming</div>
                   </div>
                   <div>
                    <h3  class="rupee1"><i class="fa fa-rupee">{{$detail['cost_per_hour']}}</i></h3> 
                    <h5 class="rupee2">Per Hour</h5>
                    </div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                    <div class="service-pic service-pic3" id="three">
                    <div class="walkinks align_services pic3">
                        <input type="checkbox"  class="checkbox" name="category[]" value=3 id="cb3"  />
                        <label for="cb3"  ><img class="fit-image click_logo3"  src="{{URL::asset('front-end/assets/images/lightgallery/Walking Orange.svg')}}"/>
                        </label>
                        <div class="walk">Walking</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">{{$detail['cost_per_hour']}}</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic4" id="four" >
                    <div class="breadinks align_services pic4">
                        <input type="checkbox" class="checkbox" name="category[]" value=4 id="cb4" />
                        <label for="cb4"  ><img class="fit-image click_logo4"  src="{{URL::asset('front-end/assets/images/lightgallery/Breeding Yellow.svg')}}"/>
                        </label> 
                        <div class="brea">Breading</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">{{$detail['cost_per_hour']}}</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                    </div>
                <!-- Banner End -->
                <!-- Banner Start -->
                <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="service-pic service-pic5" id="five" >
                    <div class="traininks align_services pic5">
                        <input type="checkbox" class="checkbox" name="category[]" value=5 id="cb5" />
                        <label for="cb5"  ><img class="fit-image click_logo5" src="{{URL::asset('front-end/assets/images/lightgallery/Training Blue.svg')}}"/>
                        </label> 
                        <div class="trai">Training</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">{{$detail['cost_per_hour']}}</i></h3> 
                        <h5 class="rupee2">Per Hour</h5>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
                  <!-- Banner Start -->
                  <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                      <div class="service-pic service-pic6" id="six">
                    <div class="photographys align_services pic6" >
                        <input type="checkbox"  class="checkbox" name="category[]" value=6 id="cb6" />
                        <label for="cb6"  ><img class="fit-image click_logo6" src="{{URL::asset('front-end/assets/images/lightgallery/Photography Blue.svg')}}" />
                        </label>  
                        <div class="phot">Photography</div>
                    </div>
                    <div>
                        <h3  class="rupee1"><i class="fa fa-rupee">{{$detail['cost_per_hour']}}</i></h3> 
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

     <script>
         $(".click_logo1").on("click", function(){
          $(".pic1").toggleClass("sittink");
    })
    $(".click_logo2").on("click", function(){
          $(".pic2").toggleClass("groomink");
    })
    $(".click_logo3").on("click", function(){
          $(".pic3").toggleClass("walkink");
    })
    $(".click_logo4").on("click", function(){
          $(".pic4").toggleClass("breadink");
    })
    $(".click_logo5").on("click", function(){
          $(".pic5").toggleClass("trainink");
    })
    $(".click_logo6").on("click", function(){
          $(".pic6").toggleClass("photography");
    })
        </script>
       <script>
          $("#btn").click(function(event){
            // event.preventDefault();
        
                var searchIDs = $("input:checkbox:checked").map(function(){
                return this.value;
            }).toArray();
            $('#userService').val(searchIDs)
               
              
           

         
         
       
            });
           </script>

{{--            
 <script>
    $('input:checkbox').change(function(){ 
	var tot=0;

$('input:checkbox:checked').each(function(){
	tot+=parseInt($(this).val());
});


$('#usertotal').html(tot)
$('#userAmount').val(tot)
});
 </script> --}}


     @endsection 