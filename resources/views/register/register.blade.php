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
                    <div class="section section-margin">
                        <div class="container">
                            <div class="row">
                                <h1>Registration Details</h1>
                            <div class="login-wrapper">
                                <script src="{{URL::asset('front-end/assets/js/jquery.min.js')}}"></script>
                                <form action="" method="post" enctype="multipart/form-data">
                            <div class="row" id="category">
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10" id="reg-img">
                           
                                  <div class="image-upload">
                                    <label for="file-input">
                                           <div class="upload-icon">
                                            <img class="icon" id="profil" src="{{URL::asset('front-end/assets/images/review/User white 2.svg')}}">
                                            <img class="prev" src="">
                                            <p class="pro-img">Upload Image</p>
                                            </div>
                                          </label>
                                    <input id="file-input" type="file" />
                                  </div>
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
                                <div class="gender">
                                    <div class="row">                                   
                                            <div>
                                            <p class="desc-content">Gender</p>
                                            </div>
                                            <div>
                                                <button type="button" class="gender-btn"><span class="fa fa-mars"></span></button>
                                                <button type="button"  class="gender-btn"><span class="fa fa-venus"></span></button>
                                            </div>
                                            <div >
                                                <button class="pro-submite" type="submit" value="Submit">Submit</button>
                                            </div>
                                    </div>
                            </div>
                            </div>
                    </form>
                      </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function readURL(input) {
  var id = $(input).attr("id");

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('label[for="' + id + '"] .upload-icon').css("border", "none");
      $('label[for="' + id + '"] .icon').hide();
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