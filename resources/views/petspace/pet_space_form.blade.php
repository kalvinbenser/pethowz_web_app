@extends('layouts.main')
@section('styles')
    <style>
.multiselect-dropdown-list input[type="checkbox"] {
    display: none;
}
      input[type="checkbox"]:checked+label:after {
    opacity: 1;
}
input[type="checkbox"]:checked+label:before {
    border: 1px solid #f6ab49;
}
input[type="checkbox"]+label:after {
    position: absolute;
    left: 0;
    top: 0;
    display: block;
    content: "\f00c";
    font-family: 'FontAwesome';
    font-weight: 600;
    font-size: 12px;
    line-height: 15px;
    opacity: 0;
    width: 15px;
    text-align: center;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
    color: #f6ab49;
}
input[type="checkbox"]+label:before {
    position: absolute;
    left: 0;
    top: 0;
    width: 15px;
    height: 15px;
    display: block;
    border: 1px solid #cccccc;
    content: "";
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
input[type="checkbox"]+label {
    position: relative;
    padding-left: 30px;
    line-height: 14px;
    font-size: 14px;
    font-weight: 500;
    margin: 0;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.multiselect-dropdown {
    width: 100% !important;
}
.servive{
  padding-bottom: 30px;
}
      </style>
@endsection
@section('content')      
    <div class="container">



            <h1 id="yourself">Pet Space</h1>
              <form action="/pet_space_create" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row m-b-n40">
                      <div class="col-12 col-sm-6 col-md-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                 
                 <div class="service-providers servive_detail1 servive" >
                  <div class="form-outline">
                  <label for="user-message" class="about">Venue Name</label>                    
                            <!-- <textarea id="user-message" name="servive_details" class="form-control serv_details" cols="5" rows="2" placeholder=""></textarea> -->
                            <input type="text" class="form-control" name="service_cost" placeholder="" id="service_cost">
                    </div>
                      
                     
                    </div>
                    <div class="service-providers">
                    <!-- <div class="">

                           

                    <label class="about">Select Venue Category</label>    -->
                        <!-- <label class="about">Select Venue Category</label> -->
                        <!-- <select class="form-select select_category" name="venue_category[]" id="venue_category" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Exclusive Pet Space</option>
                          <option value="2">House</option>
                          <option value="3">Apartment</option>
                        </select> 
                                                        
                      </div> -->
                      <label class="about">Select Venue Category</label>  
                          <select class="select select_category" name="venue_category[]" id="venue_category" multiple id="basic-select" data-mdb-validation="true" data-mdb-valid-feedback="This value is valid" data-mdb-invalid-feedback="This value is invalid"  data-mdb-clear-button="true">
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                          <option value="5">Five</option>
                          <option value="6">Six</option>
                          <option value="7">Seven</option>
                          <option value="8">Eight</option>
                        </select>
                   
                     
                 </div>
                    <div class="service-providers petspace_renge">
                      <label class="about">Cost Per Hour</label>
                    <div class="range-wrap">
                      <div class="range-value" id="rangeV"></div>
                      <input id="range" name="cost_per_hour" id="cost_per_hour" type="range" min="0" max="1000" value="0" step="1">
                      <!-- <input type="hidden" id="textInput" value=""> -->
                    </div>
                    </div>

                    
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                  <div class="service-providers">
                  <div class="">
                    <label class="about">Select the Service</label>
                    <select class="form-select select_serv" name="select_service[]" id="select_service" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                      <option value="1">Sitting</option>
                      <option value="2">Breading</option>
                      <option value="3">Photography</option>
                      <option value="4">Grooming</option>
                      <option value="5">Waiking</option>
                      <option value="6">Training</option>
                    </select>               
                  </div>
                  </div>
                    <div class="service-providers servive_detail1">
                    <label class="about">Venue Details</label>                 
                        <!-- <textarea id="user-message" name="venue" class="form-control venue_details" cols="5" rows="2" placeholder=""></textarea>  -->
                        <input type="text" class="form-control venue_details" name="venue" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers">
                    <div class="">
                        <label class="about">Select the options which are applicable</label>
                        <select class="form-select select_applicable" name="options[]" id="option" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Play Area</option>
                          <option value="2">CCTV</option>
                        </select>               
                      </div>
                      
                    </div>
                    <div class="service-providers  petspace_service">
                      <div class="">
                        <label class="about">Choose Location</label>
                        <select class="form-select select_location" name="location" id="location">
                          <option value="0">---Select Location---</option>
                          <option value="1">T Nagar</option>
                          <option value="2">Nungambakkam</option>
                          <option value="3">Alwarpet</option>
                          <option value="4">Kodambakkam</option>
                          <option value="5">Teynampet</option>  
                        </select>               
                      </div>
                    
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                   
                        <div class="service-providers">
                        <div class="">
                            <label class="about">Amenities</label>
                            <select class="form-select select_amenities" name="amenities[]" id="amenities" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                              
                              <option value="1"> park signs</option>
                              <option value="2">water fountains</option>
                              <option value="3">park benches</option>
                              <option value="4">picnic tables</option>
                              <option value="5">agility equipment</option>
                              <option value="6">cage</option>
                            </select>               
                          </div>
                          <span id="select_amenities_error" class="text-danger"></span>
                        </div>                       
                    <div class="service-providers">
                    <input type="file"  accept="image/*" name="image" id="file-input"  style="display: none;padding:15px;">
                    <label class="images" for="file-input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
                    <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
                    <div class="">
                    </div>
                    <div class="view-all">
                      <input type="submit" value="submit" id="pet_service_form" class="submite" >
               </div>
            </div>
        </div>
    </div>
  </form>
</div>

@endsection 
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
<script>
  $('#file-input').change(function() {
     $('#title').val(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');

   })
</script>
<script>
  const
  range = document.getElementById('range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
  </script>
    <!-- <script>
  function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
        </script> -->


    
<script>
  $('body').on('click','#pet_service_form',function(e){
     
         e.preventDefault();
          // alert(profile_gender);
               
              var venue_category=$("#venue_category").val();
              var venue=$("input[name='venue']").val();
              var location=$("#location").val();
              var service_cost=$("#service_cost").val();
              var select_service=$("#select_service").val();
              var cost_per_hour=$("input[name='cost_per_hour']").val();
              var option=$("#option").val();
              var amenities=$("#amenities").val();
              
              var imgfile = document.getElementById("file-input");
            //  alert(venue_category);
             // const file = document.querySelector("#file-input").files[0];
                //console.log(file);
                //alert(service_detail);
                  // console.log(select_service);
              if(!venue){
                toastr.error("venue name  is required");
              }  

              if(!venue_category){
                toastr.error("venue category  is required");
              }   

              if(!amenities){
                toastr.error("amenities  is required");
              }  
              
              if(location == 0){
                toastr.error("location  is required");
              }    
              
              if(!service_cost){
                toastr.error("service cost is required");
              }   

              if(select_service==0){
                toastr.error("select service  is required");
              } 

              if(!option){
                toastr.error("option  is required");
              }
   
              if(imgfile.files.length == 0 ){
                toastr.error("Image  is required");
              }

              if(cost_per_hour == 0 ){
                toastr.error("Cost Per Hour is required");
              }

             if(imgfile.files.length == 0 || cost_per_hour==0 || !venue || !venue_category || !amenities || location==0  ||service_cost==0 || !option){
                return false;
              }
              else{
                                
                const firebaseConfig = {
      apiKey:"{{env('API_KEY')}}",
      authDomain:"{{env('AUTH_DOMAIN')}}",
      projectId:"{{env('PROJECT_ID')}}",
      storageBucket:"{{env('STORAGE_BUGET')}}",
      messagingSenderId: "{{env('MESS_SENDER_ID')}}",
      appId: "{{env('APP_ID')}}",
      measurementId: "{{env('MEASUREMENT_ID')}}"
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
         const task = ref.child('/petspace/'+Imagename).put(file, metadata);
         task
           .then(snapshot => snapshot.ref.getDownloadURL())
           .then(url => {
             console.log(url);

                  
                   
          // start
                  if(url){
                    $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ url('pet_space_create') }}",
                                            data:{
                                                image:url,
                                                venue:venue,
                                                amenities:amenities,
                                                venue_category:venue_category,
                                                location:location,
                                                service_cost:service_cost,
                                                select_service:select_service,
                                                option:option,
                                                cost_per_hour:cost_per_hour,
                                             
                                            },
                                            success:function(data){
                                                // alert(data.mail);
                                              
                                                 console.log(data.response);
                                                // alert(data.venue);
                                                if(data.response.Success==true){
                                                  toastr.success("pet space created successfully");
                                                }
                                                else{
                                                  toastr.error(" failed");
                                                }
                                            }
                                        });
                                    
                  } 
        



         




                                          

               
           })
           .catch(console.error);
       
             //end








             
              }

  


                                  
                              
  });

</script> 

@endsection 