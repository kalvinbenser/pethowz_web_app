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
                                    <input type="hidden" id="image_url" >
                                    <p class="pro-image">Upload Image</p>
                                 
                                  </div>
                            </div>                             
                                   </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">

                            <div class="single-input-item m-b-10">
                            <input type="text" id="name" class="profile_name" name="name" placeholder="Name" >
                        
                            </div>
                            <div class="single-input-item m-b-10">
                            <input type="email" id="mail " class="profile_email" name="mail" placeholder="E-mail" >
                     
                            </div>
                            </div>
                            <div class="deal-thumb col-md-3 m-b-15" data-aos="fade-up" data-aos-duration="1200">
                            <div class="single-input-item m-b-10">
                            <input type="number" id="number" class= "profile_number" name="number" placeholder="Mobile Number" >
                         
                            </div>
                            <div class="single-input-item m-b-10">
                               <textarea id="address" name="address" class="profile_address" placeholder="Address" ></textarea>
                               
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
                                                        <button  id="user_reg" class="submite" >submit</button>
                                                    
                                                   </div>
                                            </div>
                                    </div>
                            </div>
                            </div>
                 
                      </div>
                            </div>
                        </div>
                    </div>

                        


@endsection
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
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
  $('body').on('click','#user_reg',function(e){
     
         e.preventDefault();
          // alert(profile_gender);
              //  alert("aaaaaaaaaaaaaaa");
          var profile_name=$("input[name='name']").val();
            var profile_mail=$("input[name='mail']").val();
            var profile_number=$("input[name='number']").val();
            var profile_address=$("#address").val();
            var profile_gender=$("input[name='gender']:checked").val();
            var imgfile = document.getElementById("file-input");
            var kalvin="kalvn";
                //  alert(profile_address);

                
            if(imgfile.files.length == 0 ){
              toastr.error("Image  is require");
            }
            
            if(!profile_mail){
              toastr.error("Mail  is require");
            }

              
         

            if(!profile_number){
              toastr.error("Number  is require");
            }

            if(!profile_address){
              toastr.error("address  is require");
            }

            if(!profile_gender){
              toastr.error("gender is require");
            }
              

            if(imgfile.files.length == 0 || !profile_mail || !profile_number || !profile_address || !profile_gender){
              return false;
            }
            else{


              const firebaseConfig = {
     apiKey: "AIzaSyAlCo1n1jNYbvD0DEAjKepE27FcdZqkfmY",
     authDomain: "pethouse-otp.firebaseapp.com",
     databaseURL: "https://pethouse-otp-default-rtdb.firebaseio.com",
     projectId: "pethouse-otp",
     storageBucket: "pethouse-otp.appspot.com",
     messagingSenderId: "589343176814",
     appId: "1:589343176814:web:5e6e291ee9ab25be6e0e7f",
     measurementId: "G-4VQD1X0NDR"
   };
       // Initialize Firebase
       firebase.initializeApp(firebaseConfig);
       console.log(firebase);
   
         const ref = firebase.storage().ref();
         const file = document.querySelector("#file-input").files[0];
         var Imagename = +new Date() + "-" + file.name;
        
          console.log(Imagename);
         const metadata = {
           contentType: file.type
         };
         const task = ref.child('/user/'+Imagename).put(file, metadata);
         task
           .then(snapshot => snapshot.ref.getDownloadURL())
           .then(url => {
             console.log(url);
                   
               
           })
           .catch(console.error);
       
            }
           

            // alert(Imagename);
     
           
           
                   
          // start
                   
          $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ url('create_register') }}",
                                            data:{
                                              image:Imagename,
                                              name:profile_name,
                                              mail:profile_mail,
                                              number:profile_number,
                                              address:profile_address,
                                              gender:profile_gender
                                             
                                            },
                                            success:function(data){
                                                // alert(data.mail);
                                                console.log(data.datas);
                                                console.log(data.response);
                                                if(data.response.Success==true){
                                                  toastr.success("Registered successfully");
                                                }
                                                else{
                                                  toastr.error("Registeration failed");
                                                }
                                            }
                                        });
                                    



          //end




                                          

         
                                    



          //end

                            















     
                              
                              
  });

</script> 


@endsection