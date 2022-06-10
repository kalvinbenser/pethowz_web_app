@extends('layouts.main')
@section('styles')
    <style>
    .choices {
    background-color: #ffffff;
    padding: 7px 11px;
    display: inline-block;
    font-size: 16px;
    font-family: century gothic;
    font-weight: bold;
    margin: 10px 4px;
    cursor: pointer;
    border-radius: 12px;
    border: 2px solid #ff9062;
    }
    .checkbox{
        display: none;
    }

    .choices:hover {
      background: #ff9062;
    }

    input:checked+label>choices {
      background: #ff9062 ;
    }
    input:checked+label>.choices {
      background-color: #ff9062 !important;
    }
        </style>
        @endsection
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
                            
                                <form action="/insert_register" method="post" enctype="multipart/form-data">
                                    @csrf
                            <div class="row" id="category">
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10" id="reg-img">
                           
                                  <div class="image-upload" id="image-upload">
                                    <label for="file-input" >
                                           <div class="upload-icon">
                                            <img class="icons" id="profil" src="{{URL::asset('front-end/assets/images/review/User white.svg')}}">
                                            <img class="prev" src="">
                                            </div>
                                          </label>
                                    <input id="file-input" name="image" class="profile_pic" type="file" />
                                    <p class="pro-image">Upload Image</p>
                                  </div>
                            </div>                             
                                   </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">

                            <div class="single-input-item m-b-10">
                            <input type="text" id="name" class="profile_name" name="name" placeholder="Name" required="">
                        
                            </div>
                            <div class="single-input-item m-b-10">
                            <input type="email" id="mail " class="profile_email" name="mail" placeholder="E-mail" required="">
                     
                            </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10">
                            <input type="number" id="number" class= "profile_number" name="number" placeholder="Mobile Number" required="">
                         
                            </div>
                            <div class="single-input-item m-b-10">
                               <textarea id="address" name="address" class=" profile_address" placeholder="Address" required=""></textarea>
                               
                                </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                                <div class="gender">
                                    <div class="row">                                   
                                            <div>
                                            
                                            <input  type="radio" class="checkbox" name="gender" value=1 id="cb6" />
                                            <label for="cb6">
                                                <div class="choices"><span class="fa fa-mars"></span></div>
                                                </label>
                                                
                                                <input  type="radio" class="checkbox" name="gender" value=0 id="cb5" />
                                                <label for="cb5">
                                                    <div class="choices"><span class="fa fa-venus"></span></div>
                                                    </label>
                                                    <div class="view-all">
                                                        <input type="submit" value="submit" class="submite" >
                                                   </div>
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
    

@endsection