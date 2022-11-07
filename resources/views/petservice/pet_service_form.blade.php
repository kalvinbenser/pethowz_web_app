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
.button-success{
  width: 60px;
    height: 30px;
    background-color: #FF9966 !important;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffff;
    font-size: 18px;
}

.button-danger{
  width: 60px !important;
    height: 30px !important;
    background-color: #FF9966 !important;
    display: flex;
    align-items: center;
    font-size: 25px;
    justify-content: center;

}
.service-provide{
  padding-left: 30px;
  padding-right:30px;

}
.select_serv{
  width: 285px;
}
      </style>
@endsection
@section('content')    

    <div class="container">
  
            <h1 id="yourself">List Your Pet Services</h1>
            
                  <div class="row m-b-n40">
                      <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-providers">
                          <label class="about">Venue Name</label>                 
                             <input type="text" name="venue" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="service-providers">
                  <div class="row justify-content-md-center">
                  <label class="about">Select the Service</label>
                <select  id="service" class="select_serv form-select">
                  @foreach($serviceMaster as $service)
                  <option value={{$service['id']}}>{{$service['service_name']}}</option>
                  @endforeach
                  {{-- <option value="Sitting">Sitting</option>
                  <option value="Breading">Breading</option>
                  <option value="Photography">Photography</option>
                  <option value="Grooming">Grooming</option>
                  <option value="Walking">Walking </option>
                  <option value="Training">Training</option> --}}
                </select>           
            </div>
            <div class="to-do-output">
              <table class="table table-striped mt-3 mb-0" id="addedtasklist">
                
              </table>
             </div>
                    </div>   
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers p-t-25">
                    <label class="about">Service Details</label>                 
                        <!-- <textarea id="user-message" name="service_detail" class="form-control venue_details" cols="5" rows="2" placeholder=""></textarea>                      -->
                        <input type="text" class="form-control service_details" name="service_detail" id="service_detail" placeholder="">
                      </div>
                      <div class="service-provide">
                    <label class="about">Price Details</label>                 
                        <!-- <textarea id="user-message" name="service_detail" class="form-control venue_details" cols="5" rows="2" placeholder=""></textarea>                      -->
                        <input type="number" class="form-control" placeholder="Enter your price" id="price" />
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                <div class="service-providers" >
                    <div class="">
                      <label class="about">Choose Location</label>
                      <select class="form-select select_location" name="location" id="location" >
                        <option value="0" >--- Select Location ---</option>
                        <option value="T Nagar">T Nagar</option>
                        <option value="Nungambakkam">Nungambakkam</option>
                        <option value="Alwarpet">Alwarpet</option>
                        <option value="Kodambakkam">Kodambakkam</option>
                        <option value="Teynampet">Teynampet</option>             
                      </select>               
                    </div>   
                    </div>
                    <div class="service-provide p-t-25">
                      <input type="button" value="+" class="btn btn-success submite" id="addtaskbtn" >
                      </div>                                          
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                         <div class="service-providers2"> 
                          <input type="file"  accept="image/*" name="image" id="file-input"  style="display: none;padding:15px;">
                          <label class="images" for="file-input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
                          <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
                        </div>
                
                    <div class="view-all">
                        <input type="submit" id="pet_service_submit" value="submit" class="submite" >
                   </div>                     
        </div>
    </div>
  
</div>

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