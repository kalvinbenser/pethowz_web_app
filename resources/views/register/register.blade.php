@extends('layouts.main')
@section('content')
                    <div class="section">
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
                    <div class="">
                        <div class="container">
                            <div class="row">
                                <h1 class="registeration">Registration Details</h1>
                            <div class="login-wrapper">
                            
                                <form action="" method="post" enctype="multipart/form-data">
                            <div class="row" id="category">
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10" id="reg-img">
                           
                                  <div class="image-upload" id="image-upload">
                                    <label for="file-input">
                                           <div class="upload-icon">
                                            <img class="icons" id="profil" src="{{URL::asset('front-end/assets/images/review/User white.svg')}}">
                                            <img class="prev" src="">
                                            </div>
                                          </label>
                                    <input id="file-input" class="profile_pic" type="file" />
                                    <p class="pro-image">Upload Image</p>
                                    <span id="profile_pic_error" class="text-danger"></span>
                                  </div>
                            </div>                             
                                   </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">

                            <div class="single-input-item m-b-10">
                            <input type="text" id="name"class="profile_name" name="name" placeholder="Name" required="">
                            <span id="profile_name_error" class="text-danger"></span>
                            </div>
                            <div class="single-input-item m-b-10">
                            <input type="email" id="mail " class="profile_email" name="mail" placeholder="E-mail" required="">
                            <span id="profile_email_error" class="text-danger"></span>
                            </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10">
                            <input type="number" id="number" class= "profile_number" name="number" placeholder="Mobile Number" required="">
                            <span id="profile_number_error" class="text-danger"></span>
                            </div>
                            <div class="single-input-item m-b-10">
                               <textarea id="address" name="address" class=" profile_address" placeholder="Address" required=""></textarea>
                               <span id="profile_address_error" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                                <div class="gender">
                                    <div class="row">                                   
                                            <div>
                                            <span class="gender-text">Gender</span>
                    
                                                <button type="button" value="male" class="gender-btn"><span class="fa fa-mars"></span></button>
                                                <button type="button" value="female"  class="gender-btn"><span class="fa fa-venus"></span></button>
                                            </div>
                                            <div >  
                                                 
                                                <button class="pro-submite"  id="booking_btn"  type="submit" value="Submit">Submit</button>
                                            </div>
                                    </div>
                            </div>
                            </div>
                    </form>
                      </div>
                            </div>
                        </div>
                    </div>

                        


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
$('label[for="' + id + '"] .icons').hide();
$('label[for="' + id + '"] .prev').attr('src', e.target.result).show();
}

reader.readAsDataURL(input.files[0]);
}
}

$("input[id^='file-input']").change(function() {
readURL(this);
});
    </script>
    <script>
      document.querySelectorAll('.gender-btn').forEach(function(e) {
                e.addEventListener('click', function() {
                    this.style.backgroundColor = " #ff9a71";
                })
                });
    </script>
    
<script>
    $('body').on('click','#booking_btn',function(e){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        }); 


        e.preventDefault();
        var profile_pic=$('.profile_pic').val();
        var profile_name = $('.profile_name').val();
        var profile_email= $('.profile_email').val();
        var profile_number= $('.profile_number').val();
        var profile_address= $('.profile_address').val();
      
      
                          if(!profile_pic){
                            profile_pic_error="profile is required";
                             $('#profile_pic_error').html("");
                             $('#profile_pic_error').html(profile_pic_error);
                           }
                           else{
                            profile_pic_error="";
                              $('#profile_pic_error').html("");
                           }

                           if(!profile_name){
                             profile_name_error="name is required";
                             $('#profile_name_error').html("");
                             $('#profile_name_error').html(profile_name_error);
                           }
                           else{
                               profile_name_error="";
                              $('#profile_name_error').html("");
                           }
                           if(!profile_email){
                            profile_email_error="email is required";
                             $('#profile_email_error').html("");
                             $('#profile_email_error').html(profile_email_error);
                           }
                           else{
                            profile_email_error="";
                              $('#profile_email_error').html("");
                           }

                           if(!profile_number){
                            profile_number_error="mobile number is required";
                             $('#profile_number_error').html("");
                             $('#profile_number_error').html(profile_number_error);
                           }
                           else{
                            profile_number_error="";
                              $('#profile_number_error').html("");
                           }

                           if(! profile_address){
                            profile_address_error="email is required";
                             $('#profile_address_error').html("");
                             $('#profile_address_error').html(profile_address_error);
                           }
                           else{
                            profile_address_error="";
                              $('#profile_address_error').html("");
                           }
                           

                     


                                 
                           
                           if(profile_pic_error !='' || profile_name_error !='' || profile_email_error !='' || profile_number_error || profile_address_error){
                             return false;
                           }
                           else{
                          //  alert(2);
                           
                              
                            $.ajaxSetup({
                                             headers: {
                                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                             }
                                         });
                                         $.ajax({
                                            type:'POST',
                                             url:"{{ url('insert_register_details') }}",
                                             data:{
                                                 profile_pic:profile_pic,
                                                 profile_name:profile_name,
                                                 profile_email:profile_email,
                                                 profile_number:profile_number,
                                                 profile_address:profile_address
                                             //  no_of_days:no_of_days
                                             },
                                             success:function(data){
                                                    // console.log(data.profile_pic,profile_name,profile_email,profile_number,profile_address);
                                                    // alert(data.status);
                                                    window.location.href = "{{url('/add')}}";
                                             }
                                             });


                                                 }
                                              }); 
                                            
                                            
                                      
                                      
                      
    </script>
@endsection