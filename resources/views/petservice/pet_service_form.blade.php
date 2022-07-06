@extends('layouts.main')
@section('styles')
    <style>
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
.multiselect-dropdown-list input[type="checkbox"] {
    display: none;
}
      </style>
@endsection
@section('content')    

    <div class="container">
  
            <h1 id="yourself">List Your Pet Services</h1>
            
                  <div class="row m-b-n40">
                      <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-providers1">
                          <label class="about">Venue Name</label>                 
                             <input type="text" name="venue" class="form-control" placeholder="Enter Name">
                        </div>
                 <div class="service-providers">
                    <div class="row">
                      <label class="about">Choose Location</label>
                      <select class="form-select select_location" name="location" id="location" >
                        <option value="0" >--- Select Location ---</option>
                        <option value="1">T Nagar</option>
                        <option value="2">Nungambakkam</option>
                        <option value="3">Alwarpet</option>
                        <option value="4">Kodambakkam</option>
                        <option value="5">Teynampet</option>             
                      </select>               
                    </div>                
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers servive_detail2">
                    <label class="about">Service Details</label>                 
                        <!-- <textarea id="user-message" name="service_detail" class="form-control venue_details" cols="5" rows="2" placeholder=""></textarea>                      -->
                        <input type="text" class="form-control service_details" name="service_detail" id="service_detail" placeholder="">
                      </div>
                    <div class="service-providers">
                        <div class="row">
                            <label class="about">Select the options which are applicable</label>
                            <select class="form-select select_applicable" name="option[]" id="option" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                              <option value="1">Play area</option>
                              <option value="2">CCTV</option>
                            </select>               
                          </div>
                         
                        </div>    
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                  <div class="service-providers">
                    <div class="row">
                      <label class="about">Select the Service</label>
                      <select class="form-select select_serv" name="select_service[]" id="select_service" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                        <option value="0">--- select service ---</option>
                        <option value="1">Sitting</option>
                        <option value="2">Breading</option>
                        <option value="3">Photography</option>
                        <option value="4">Grooming</option>
                        <option value="5">Waiking</option>
                        <option value="6">Training</option>
                      </select>               
                    </div>
                    </div>
                        <div class="service-providers2"> 
                          <input type="file"  accept="image/*" name="image" id="file-input"  style="display: none;padding:15px;">
                          <label class="images" for="file-input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
                          <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
                        </div>                     
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers">
                      <label class="about">Cost Per Hour</label>
                      <div class="range-wrap">
                          <div class="range-value" id="rangeV"></div>
                          <input id="range" name="cost_per_hour" id="cost_per_hour" type="range" min="0" max="1000" value="0" step="1">
                        </div>
                </div>
                    <div class="view-all">
                        <input type="submit" id="pet_service_submit" value="submit" class="submite" >
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

<script>
  $('#file-input').change(function() {
     $('#title').val(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');
   })
</script>
{{-- firebase --}}

  
<script>
  $('body').on('click','#pet_service_submit',function(e){
     
         e.preventDefault();
          // alert(profile_gender);
               //alert("aaaaaaaaaaaaaaa");
              var venue_name=$("input[name='venue']").val();
              var location=$("#location").val();
              var service_detail=$("#service_detail").val();
              var select_service=$("#select_service").val();
              var option=$("#option").val();
              var cost_per_hour=$("input[name='cost_per_hour']").val();
              var imgfile = document.getElementById("file-input");
             // const file = document.querySelector("#file-input").files[0];
                //console.log(file);
                //alert(service_detail);
                   console.log(select_service);
              if(!venue_name){
                toastr.error("venue name  is required");
              }    
              
              if(location==0){
                toastr.error("location  is required");
              }    
              
              if(!service_detail){
                toastr.error("service details  is required");
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

             if(imgfile.files.length == 0 || cost_per_hour==0 || !venue_name || location==0 || !service_detail ||select_service==0 || !option){
                return false;
              }
              else{
                // alert("success");

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
         const task = ref.child('/petservice/'+Imagename).put(file, metadata);
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
                                            url:"{{ url('create_service') }}",
                                            data:{
                                                image:url,
                                                venue_name:venue_name,
                                                location:location,
                                                service_detail:service_detail,
                                                select_service:select_service,
                                                option:option,
                                                cost_per_hour:cost_per_hour
                                             
                                            },
                                            success:function(data){
                                                // alert(data.mail);
                                              
                                                console.log(data.response);
                                                if(data.response.Success==true){
                                                  toastr.success("pet service created successfully");
                                                }
                                                else{
                                                  toastr.error(" failed");
                                                }
                                            }
                                        });
          }
        
                                    



          //end




                                          

               
           })
           .catch(console.error);
       
            

              }

   
       
                                  
                              
  });

</script> 

@endsection 