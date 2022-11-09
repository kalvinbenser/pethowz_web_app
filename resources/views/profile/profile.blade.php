

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

                  <img class="profile-pic" id="profils" src="{{$collection['img']}}" alt="profile">


                  {{-- <label for="file-input" style="cursor: pointer">  <span class="pro-img"><i class="fa fa-camera"></i></span>  </label> --}}
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
<!--                            
                               {{--     <li class="addicon2"><p class="addicon3">45/3 Residency Road,Mahatma Gandhi Rd,</p></li>
                                <li class="addicon2"><p class="addicon3">ShanthalamNagar,Ashok Nagar,</p></li>
                                <li class="addicon2"><p class="addicon3">Bengaluru,Karnadaka -560025</p></li> --}} -->
                               
                                
                            </ul>
                        </div>
        </form>

    </div>

      </div>
      <div class="col-12 col-sm-6 col-lg-3 m-b-40" id="profile2" data-aos="fade-up" data-aos-duration="1000">
        <p><span><a href=""><img src="{{URL::asset('front-end/assets/images/banner/Help.svg')}}" >&nbsp;Help&nbsp;&nbsp;&nbsp;</a></span>&nbsp;&nbsp;&nbsp;<span><a  href="/user_logout" style="cursor: pointer"><i class="fa fa-sign-out" style="color:#FF9A71;font-size:25px;"></i>&nbsp; Logout</a></span></p>
      </div>
 </div>
</div>
<div class="section position-relative" style="margin-top:100px">
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

      <!-- Pet space Tab Start -->
      <div class="row" data-aos="fade-up" data-aos-duration="1100">
          <div class="col-12">
              <div class="tab-content">

                  <div class="tab-pane fade show active" id="tab-product-all">
                      <div class="row m-b-n40">

                          <!-- Product Start -->
                          @if(count($my_venue)>0)
                          @foreach($my_venue as $venue)
                          <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                              <div class="product">
                                  <!-- Thumb Start  -->
                                  <div class="thumb">
                                      <a href="#" class="image">
                                          <img class="fit-image" src="{{$venue['image'][0]}}" style="width: 100%;height: 15vw;object-fit: cover;" alt="Product" />
                                      </a>
                                      {{-- <span class="badges">
                                      <span class="sale">-18%</span>
                                      </span> --}}
                                    
                                  </div>
                                  <!-- Thumb End  -->

                                  <!-- Content Start  -->
                                  <div class="content">
                                      <h5 class="title"><a href="single-product.html">{{$venue['venue_name']}}</a></h5>
                                      <!-- <span class="rating">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                  </span> -->
                                      <span class="price">
                                      <span class="new">₹{{$venue['cost_per_hour']}}</span>
                                      <span class="old">₹2000</span>
                                      </span>
                                  </div>
                                  <!-- Content End  -->
                              </div>
                          </div>
                          @endforeach
                          @endif
                          <!-- Product End -->

                       

                      </div>
                  </div>
                

              </div>
          </div>
      </div>
      <!-- Pet space Tab End -->
  
      <div class="row " data-aos="fade-up" data-aos-duration="1000" >
        <!-- Tab Start -->
        <div class="col-12 my-3">
            <h1>My Services</h1>
        </div>
        
        <!-- Tab End -->
    </div>
       <!-- Pet service Tab Start -->
       <div class="row" data-aos="fade-up" data-aos-duration="1100">
        <div class="col-12">
            <div class="tab-content">

                <div class="tab-pane fade show active" id="tab-product-all">
                    <div class="row m-b-n40">

                        <!-- Product Start -->
                        @if(count($my_service)>0)
                        @foreach($my_service as $service)
                        <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                            <div class="product">
                                <!-- Thumb Start  -->
                                <div class="thumb">
                                    <a href="#" class="image">
                                        <img class="fit-image" src="{{$service['image'][0]}}" style="width: 100%;height: 15vw;object-fit: cover;" alt="Product" />
                                    </a>
                                    {{-- <span class="badges">
                                    <span class="sale">-18%</span>
                                    </span> --}}
                                  
                                </div>
                                <!-- Thumb End  -->

                                <!-- Content Start  -->
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">{{$service['venue_name']}}</a></h5>
                                    <!-- <span class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span> -->
                                    <span class="price">
                                    {{-- <span class="new">₹{{$service['cost_per_hour']}}</span> --}}
                                    <span class="old">₹2080</span>
                                    </span>
                                </div>
                                <!-- Content End  -->
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!-- Product End -->

                     

                    </div>
                </div>
            


            </div>
        </div>
    </div>
    <!-- Pet service Tab End -->




  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      
          <div class="modal-content">    
            <div class="modal-body model-update">
                  


            <div>
                <div>
                <p>Edit Profile</p>
                </div>

                <div> 
                 
                    <p class="text-start">Name</p>
                    <input type="text" name="name" id="name" class="form-control" value="{{$collection['name']}}"/>
                </div>

                <div>
                    <p class="text-start">Email</p>
                    <input type="email" name="mail" id="mail"  class="form-control" value="{{$collection['email']}}"/>
                </div>

                <div>
                <p class="text-start">Phone Number</p>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{$collection['contact_number']}}" />
                </div>

                <div>
                <p class="text-start">Address</p>
                <textarea id="address" class="form-control">
                    {{$collection['address']}}
                </textarea>
                </div>

                <div>
                <p class="text-start">Gender</p>
                    <div class="d-flex">
                <input type="radio" id="gender" name="gender" value=1 {{ $collection['gender'] == 1 ? 'checked' : '' }} >
                 <label for="html">mail</label>
                 <input type="radio" id="gender" name="gender" value=0 {{ $collection['gender'] == 0 ? 'checked' : '' }}>
                 <label for="css">Femail</label>
                      </div>
                </div>
              
                   <div>
                   <p class="text-start">Image</p>
             
                   <input type="file" name="files" id="files">
                        
            
                   </div>

                   <div>
                    <button id="update-btn" class="btn-model">submit</button>
                   </div>
            </div>
                    
                  
    
           </div>
          
    
         
            </div>


  </div>
</div>
 







    <!-- Edit Modal -->


    <!-- Banner Section Start -->
 <div class="section section-margin">
    <div class="container" >
        <div class="service-providers">
    <h1>Venue Booking</h1>
        <!-- Banners Start -->
        <div class="row m-b-n30">

            <!-- Banner Start -->
     
            @if(count($my_space_book)>0)
            @foreach($my_space_book as $my)
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">{{$my['name']}}</h1>
                </div>  
            </div>
            @endforeach
            @endif
          <!-- Banner End -->
     
        </div>
        <!-- Banners End -->
    </div>
    </div>
</div> 

  <!-- Banner Section Start -->
  <div class="section section-margin">
    <div class="container" >
        <div class="service-providers">
    <h1>Servcie Booking</h1>
        <!-- Banners Start -->
        <div class="row m-b-n30">

            <!-- Banner Start -->
     
            @if(count($my_service_book)>0)
            @foreach($my_service_book as $my)
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="venue-booking">
                    <a class="banner">
                        <img class="fit-img" src="{{URL::asset('front-end/assets/images/banner/User Image.png')}}" alt="Banner Image" />
                    </a>
                    <h1 style="font-size:medium;">{{$my['name']}}</h1>
                </div>  
            </div>
            @endforeach
            @endif
          <!-- Banner End -->

        </div>
        <!-- Banners End -->
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
<!-- <script src="{{URL::asset('front-end/assets/js/jquery.min.js')}}"></script> -->



<script>

  $('body').on('click','#update-btn',function(e){
     
     e.preventDefault();
     console.log("update");
             



     var profile_name=$("input[name='name']").val();
            var profile_mail=$("input[name='mail']").val();
            var profile_number=$("input[name='phone']").val();
            var profile_address=$("#address").val();
            var profile_gender=$('[name=gender]:checked').val()
            var profile_number=$("input[name='phone']").val();
           var fileName=document.getElementById("files");
            console.log(profile_mail);
            console.log(profile_name);
            console.log(profile_number);
            console.log(profile_address);
           console.log(profile_gender);
            //console.log(file);
            
            
            if(fileName.files.length != 0 ){
                      
                        

   
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
         const file = document.querySelector("#files").files[0];
         var Imagename = +new Date() + "-" + file.name;
        
          console.log(Imagename);
         const metadata = {
           contentType: file.type
         };
         const task = ref.child('/users/'+Imagename).put(file, metadata);
         task
           .then(snapshot => snapshot.ref.getDownloadURL())
           .then(url => {
             console.log(url);

                             
        


                     
          //start
                   
          $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ url('update_Profile') }}",
                                            data:{
                                              image:url,
                                              name:profile_name,
                                              mail:profile_mail,
                                              number:profile_number,
                                              address:profile_address,
                                              gender:profile_gender
                                             
                                            },
                                            success:function(data){
                                                // alert(data.mail);
                                                console.log(data.response);
                                                if(data.response.Success==true){
                                                
                                                   $("#exampleModal").modal('hide');
                                                   window.location.href = '{{"/profile"}}';
                                                  toastr.success("update successfully");
                                                 }
                                                else{
                                                   console.log(data.response.Message);
                                                  data.response.Message.forEach(element => toastr.error(element));
                                                 }
                                                
                                            }
                                        });
                                    



        //  end


                                          

               
           })
           .catch(console.error);
       
            
    





            }else{


      
            
    
                     
          //start
                   
          $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ url('update_Profile') }}",
                                            data:{
                                            //   image:url,
                                              name:profile_name,
                                              mail:profile_mail,
                                              number:profile_number,
                                              address:profile_address,
                                              gender:profile_gender
                                             
                                            },
                                            success:function(data){
                                                // alert(data.mail);
                                               // console.log(data.datas);
                                                console.log(data.response);
                                                if(data.response.Success==true){
                                                
                                                   $("#exampleModal").modal('hide');
                                                   window.location.href = '{{"/profile"}}';
                                                  toastr.success("update successfully");
                                                 }
                                                else{
                                                   console.log(data.response.Message);
                                                  data.response.Message.forEach(element => toastr.error(element));
                                                 }
                                            }
                                        });
                                    



        //  end





            }
            


          



});
</script>

@endsection