@extends('layouts.main')
@section('content') 
<div class="p-4 ">
    <h3 class="text-secondary">List Your Pet Space</h3>
</div>
<form class="row g-3 p-4">
    <div class="col-12 col-sm-6 col-md-4">
      <label for="venue_name" class="form-label text-secondary">Venue Name</label>
      <input type="text" id="venue_name" class="form-control" name="venue_name" placeholder="">
    </div>
   
    <div class="col-12 col-sm-6 col-md-4">
        <label for="inputEmail4" class="form-label text-secondary">Select Venue Category</label>
        <select class="form-select" name="venue_category[]" id="venue_category" multiple id="basic-select" data-mdb-validation="true" data-mdb-valid-feedback="This value is valid" data-mdb-invalid-feedback="This value is invalid"  data-mdb-clear-button="true">
            <option value="home">Home</option>
            <option value="Independent House">Independent House</option>
            <option value="Apartment">Apartment</option>
          
          </select>  
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <label for="inputPassword4" class="form-label text-secondary">Amenities</label>
        <select class="form-select" name="amenities[]" id="amenities" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                              
            <option value="park signs"> park signs</option>
            <option value="water fountains">water fountains</option>
            <option value="park benches">park benches</option>
            <option value="picnic tables">picnic tables</option>
            <option value="agility equipment">agility equipment</option>
            <option value="cage">cage</option>
          </select>    
      </div>
      
      <div class="col-12 col-sm-6 col-md-4">
        <label for="inputPassword4" class="form-label text-secondary">Choose Location</label>
        <select class="form-select select_location" name="location" id="location">
            <option value="T Nagar">T Nagar</option>
            <option value="Nungambakkam">Nungambakkam</option>
            <option value="Alwarpet">Alwarpet</option>
            <option value="Kodambakkam">Kodambakkam</option>
            <option value="Teynampet">Teynampet</option>  
          </select>    
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <label for="venue_cost" class="form-label text-secondary">venue cost</label>
        <input type="number" class="form-control" id="venue_cost">
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <input type="file"  accept="image/*" name="image" id="file-input"  style="display: none;padding:15px;">
        <label class="images text-secondary" for="file-input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
        <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
    </div>
    <h6 class="text-secondary">Add your Services(optional)</h6>
      <div class="col-12 col-sm-6 col-md-3">
       
        <label for="inputPassword4" class="form-label text-secondary">Select the Service</label>
        <select  id="service" class="form-select select_location">
          @foreach($serviceMaster as $service)
          <option value="{{$service['id']}}.{{$service['service_name']}}">{{$service['service_name']}}</option>
          @endforeach
        </select>   
      </div>
      <div class="col-12 col-sm-6 col-md-2">
        <label for="inputEmail4" class="form-label text-secondary">Price Details</label>
        <input type="number" class="form-control" placeholder="Enter your price" id="price" />
    </div>
    <div class="col-12 col-sm-6 col-md-1">
        <input type="button" value="+" class="btn btn-primary btn-sm mt-4" id="addtaskbtn" >
    </div>
    
  
     <div class="col-12 col-sm-6 col-md-4">
        <div class="to-do-output">
            <table class="table table-striped mt-3 mb-0" id="addedtasklist">
              
            </table>
           </div>
     </div>
    <div class="col-12 col-sm-6 col-md-2">
 
      <input type="submit" value="submit"  class="submite btn btn-primary btn-sm" id="pet_service_form" >
    </div>
  </form>
@endsection


@section('scripts')
<script src="{{URL::asset('front-end/assets/js/vendor/mains.js')}}"></script>
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
              var venue=$("input[name='venue_name']").val();
              var location=$("#location").val();
              var venue_cost=$("#venue_cost").val();
              
              // var service_cost=$("#service_cost").val();
              // var select_service=$("#select_service").val();
              // var cost_per_hour=$("input[name='cost_per_hour']").val();
              // var option=$("#option").val();
              var service_detail1=localStorage.getItem("localtask");
           
              var service_detail=JSON.parse(service_detail1);
             
              var amenities=$("#amenities").val();
             // alert(amenities);
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
              if(!venue_cost){
                toastr.error("venue cost  is required");
              }   
              if(!amenities){
                toastr.error("amenities  is required");
              }  
              
              if(location == 0){
                toastr.error("location  is required");
              }    
              
        

              // if(!option){
              //   toastr.error("option  is required");
              // }
   
              if(imgfile.files.length == 0 ){
                toastr.error("Image  is required");
              }

        

             if(imgfile.files.length == 0 ||  !venue || !venue_category || !amenities || !venue_cost || location==0  ){
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
                                                venue_cost:venue_cost,
                                                venue_category:venue_category,
                                                location:location,
                                                 service:service_detail
                                             
                                            },
                                            success:function(data){
                                                // alert(data.mail);
                                           
                                               
                                                if(data.response.Success==true){
                                                     console.log(data.response.Message);
                                                  localStorage.removeItem("localtask");
                                                  window.location.href = "{{url('/')}}";
                                                  toastr.success("pet space created successfully");
                                                }
                                                else{
                                                  console.log(data.response.Message);
                                                  data.response.Message.forEach(element => toastr.error(element));
                                                  // $.each(data.response.Message, function( key, value ) {
                                                  //   toastr.error(value);
                                                  //  });
                                                  // toastr.error("failed");
                                                
                                                 
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