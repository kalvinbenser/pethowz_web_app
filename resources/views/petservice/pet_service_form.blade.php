@extends('layouts.main')
@section('content') 
<div class="p-4 ">
    <h3 class="text-secondary">List Your Pet Service</h3>
</div>
<form class="row g-3 p-4">


    <div class="col-12 col-sm-6 col-md-3">
        <label class="text-secondary">Venue Name</label>                 
        <input type="text" name="venue" class="form-control" placeholder="Enter Name">
    </div>
    
    <div class="col-12 col-sm-6 col-md-3">
        <label class="text-secondary">Service Details</label>                 
        <input type="text" class="form-control service_details" name="service_detail" id="service_detail" placeholder="">
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <label class="text-secondary">Choose Location</label>
        <select class="form-select select_location" name="location" id="location" >
        
          <option value="T Nagar">T Nagar</option>
          <option value="Nungambakkam">Nungambakkam</option>
          <option value="Alwarpet">Alwarpet</option>
          <option value="Kodambakkam">Kodambakkam</option>
          <option value="Teynampet">Teynampet</option>             
        </select>   
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <input type="file"  accept="image/*" name="image" id="file-input"  style="display: none;padding:15px;">
        <label class="images text-secondary" for="file-input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
        <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
      </div>
      
     
    <h6 class="text-secondary">Add your Services</h6>
      <div class="col-12 col-sm-6 col-md-3">
       
        <label for="inputPassword4" class="text-secondary">Select the Service</label>
        <select  id="service" class="form-select select_location">
          @foreach($serviceMaster as $service)
          <option value="{{$service['id']}}.{{$service['service_name']}}">{{$service['service_name']}}</option>
          @endforeach
        </select>   
      </div>
      <div class="col-12 col-sm-6 col-md-2">
        <label for="inputEmail4" class="text-secondary">Price Details</label>
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
 
      <input type="submit" value="Submit"  class="submite btn btn-primary btn-sm" id="pet_service_submit" >
    </div>
  </form>
@endsection

@section('scripts')
<script src="{{URL::asset('front-end/assets/js/vendor/mains.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
                <script>
                      $(document).ready(function(){
                        $(".add-item-btn").click(function(e){
                          e.preventDefault();
                          $("#service-providers").prepend(` <div id="service-providers" >
                          <div class="">
                          <label class="about">Select the Service</label>
                      <select class="form-select select_location select_serv" name="select_service[]" id="select_service" onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                        <option value="0">--- select service ---</option>
                        <option value="1">Sitting</option>
                        <option value="2">Breeding</option>
                        <option value="3">Photography</option>
                        <option value="4">Grooming</option>
                        <option value="5">Walking</option>
                        <option value="6">Training</option>
                      </select>               
                    </div>
                    <div class="btn_danger">
                    <i class="fa fa-minus-square remove-item-btn"  style="font-size:28px;color:#FF9966";></i><input type="number" class="form-control" name="cost_per_hour[value][]" placeholder="Cost Per Hour" id="cost_per_hour">             
                    <div>
                    </div>`);
                        })
                    // alert("dfsdf");
                    $(document).on('click', '.remove-item-btn',function(e){
                      e.preventDefault();
                      let row_item = $(this).parent().parent();
                      $(row_item).remove();
                    })
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

<script>
  $('#file-input').change(function() {
     $('#title').val(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');
   })
</script>
{{-- firebase --}}
<script> 
 
var myarr = []; 
 
// $('body').on('click','#pet_service_submit',function addTo() { 
//    myarr.push(document.getElementById("cost_per_hour").value); 
//    console.log(myarr); //to confirm it has been added to the array 

// } );
 
</script>
  
<script>
  $('body').on('click','#pet_service_submit',function(e){
     
         e.preventDefault();
          // alert(profile_gender);
              // alert("aaaaaaaaaaaaaaa");
               
              var venue_name=$("input[name='venue']").val();
              var location=$("#location").val();
              var service1=localStorage.getItem("localtask");
              var service=JSON.parse(service1);
              var service_detail=$("#service_detail").val();
            
              var imgfile = document.getElementById("file-input");
             // const file = document.querySelector("#file-input").files[0];
                //console.log(file);
                //alert(service_detail);
                  // console.log(select_service);
                //  console.log(cost_per_hour);
              if(!venue_name){
                toastr.error("venue name  is required");
              }    
              
              if(location==0){
                toastr.error("location  is required");
              }    
              
              if(!service_detail){
                toastr.error("service details  is required");
              }   


              // if(!option){
              //   toastr.error("option  is required");
              // }
   
              if(imgfile.files.length == 0 ){
                toastr.error("Image  is required");
              }

        

             if(imgfile.files.length == 0 ||  !venue_name || location==0 || !service_detail){
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
     //  console.log(firebase);
   
         const ref = firebase.storage().ref();
         const file = document.querySelector("#file-input").files[0];
         var Imagename = +new Date() + "-" + file.name;
        
        //  console.log(Imagename);
         const metadata = {
           contentType: file.type
         };
         const task = ref.child('/petservice/'+Imagename).put(file, metadata);
         task
           .then(snapshot => snapshot.ref.getDownloadURL())
           .then(url => {
          //   console.log(url);

              
                   
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
                                                service:service,
                                      
                                             
                                            },
                                            success:function(data){
                                                // alert(data.cost_per_hour);
                                                // alert(data.select_service);
                                              
                                              //  console.log(data.response);
                                                if(data.response.Success==true){
                                                  localStorage.removeItem("localtask");
                                                  window.location.href = "{{url('/')}}";
                                                  toastr.success("pet service created successfully");
                                                }
                                                else{
                                                //  console.log(data.response.Message);
                                                  data.response.Message.forEach(element => toastr.error(element));
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