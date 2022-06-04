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
      </style>
@endsection
@section('content')      
    <div class="container">
            <h1 id="yourself">Pet Space</h1>
              <form action="/booking_create" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row m-b-n40">
                      <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                 <div class="service-providers">
                    <div class="row">
                        <label class="about">Select Venue Category</label>
                        <select class="form-select select_category" name="venue_category[]" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Audi</option>
                          <option value="2">BMW</option>
                          <option value="3">Mercedes</option>
                          <option value="4">Volvo</option>
                          <option value="5">Lexus</option>
                          <option value="6">Tesla</option>
                        </select>                                     
                      </div>
                     
                 </div>
                 <div class="service-providers">
                      <div class="row">
                        <label class="about">Select the Service</label>
                        <select class="form-select select_serv" name="select_service[]" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Sitting</option>
                          <option value="2">Breading</option>
                          <option value="3">Photography</option>
                          <option value="4">Grooming</option>
                          <option value="5">Waiking</option>
                          <option value="6">Training</option>
                        </select>               
                      </div>
                     
                    </div>
                      <label class="about">Select the Service</label>
                    <div class="range-wrap">
                      <div class="range-value" id="rangeV"></div>
                      <input id="range" type="range" name="cost_per_hour" min="0" max="1000" value="0" step="1">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers">
                    <label class="about">Venue Details</label>                 
                        <textarea id="user-message" name="venue" class="form-control venue_details" cols="5" rows="2" placeholder=""></textarea>
                        
                    </div>
                    <div class="service-providers">
                        <label for="user-message" class="about">Service Details</label>                    
                            <textarea id="user-message" name="servive_details" class="form-control serv_details" cols="5" rows="2" placeholder=""></textarea>
                            
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers">
                    <div class="row">
                        <label class="about">Select the options which are applicable</label>
                        <select class="form-select select_applicable" name="options[]" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Play Area</option>
                          <option value="2">CCTV</option>
                        </select>               
                      </div>
                      
                    </div>
                    <div class="service-providers">
                      <div class="row">
                        <label class="about">Choose Location</label>
                        <select class="form-select select_location" name="location[]" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
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
                   
                        <div class="service-providers">
                        <div class="row">
                            <label class="about">Amenities</label>
                            <select class="form-select select_amenities" name="amenities[]" id="" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
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
                    <input type="file"  accept="image/*" name="image" id="file_input"  style="display: none;padding:15px;">
                    <label class="images" for="file_input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
                    <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
                    <div class="">
                    <span id="select_profile_error" class="text-danger"></span>
                    </div>
                    <div class="view-all">
                      <input type="submit" value="submit" class="submite" >
                   <!-- <button id="booking_btn" class="submite" name="submite">Submit</button>-->
               </div>
            </div>
        </div>
    </div>
  </form>
</div>

@endsection 
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $('#file_input').change(function() {
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
<script>
    $('body').on('click','#booking_btn',function(e){
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        }); 


        e.preventDefault();
        var select_category = $('.select_category').val();
         var select_serv= $('.select_serv').val();        
        // var venue_details= $('.venue_details').val();
        // var serv_details= $('.serv_details').val();
        // var select_applicable=$('.select_applicable').val();
        // var select_location=$('.select_location').val();
        // var select_amenities=$('.select_amenities').val();
        // var select_profile=$('.select_profile').val();
        // alert(select_category);
        // alert(select_serv);
        // alert(venue_details);
        // alert(serv_details);
        // alert(select_applicable);
        // alert(select_location);
        // alert(select_amenities);
      
                           if(!select_category){
                            select_category_error="category is required";
                             $('#select_category_error').html("");
                             $('#select_category_error').html(select_category_error);
                           }
                           else{
                            select_category_error="";
                              $('#select_category_error').html("");
                           }

                           if(!select_serv){
                            select_serv_error="service is required";
                             $('#select_serv_error').html("");
                             $('#select_serv_error').html(select_serv_error);
                           }
                           else{
                            select_serv_error="";
                              $('#select_serv_error').html("");
                           }
                          //  if(!venue_details){
                          //   venue_details_error="venue details is required";
                          //    $('#venue_details_error').html("");
                          //    $('#venue_details_error').html(venue_details_error);
                          //  }
                          //  else{
                          //   venue_details_error="";
                          //     $('#venue_details_error').html("");
                          //  }
                          //  if(!serv_details){
                          //   serv_details_error="service details is required";
                          //    $('#serv_details_error').html("");
                          //    $('#serv_details_error').html(serv_details_error);
                          //  }
                          //  else{
                          //   serv_details_error="";
                          //     $('#serv_details_error').html("");
                          //  }
                          //  if(!select_applicable){
                          //   select_applicable_error="number of days is required";
                          //    $('#select_applicable_error').html("");
                          //    $('#select_applicable_error').html(select_applicable_error);
                          //  }
                          //  else{
                          //   select_applicable_error="";
                          //     $('#select_applicable_error').html("");
                          //  }
                          //  if(!select_location){
                          //   select_location_error="location is required";
                          //    $('#select_location_error').html("");
                          //    $('#select_location_error').html(select_location_error);
                          //  }
                          //  else{
                          //   select_location_error="";
                          //     $('#select_location_error').html("");
                          //  }
                          //  if(!select_amenities){
                          //   select_amenities_error="amenities is required";
                          //    $('#select_amenities_error').html("");
                          //    $('#select_amenities_error').html(select_amenities_error);
                          //  }
                          //  else{
                          //   select_amenities_error="";
                          //     $('#select_amenities_error').html("");
                          //  }
        //                   /* if(!select_profile){
        //                     select_profile_error="profile pic is required";
        //                      $('#select_profile_error').html("");
        //                      $('#select_profile_error').html(select_profile_error);
        //                    }
        //                    else{
        //                     select_profile_error="";
        //                       $('#select_profile_error').html("");
        //                    }              */


                           if(select_category_error !='' || select_serv_error !="" ){
                             return false;
                           }
                           else{ 
                           $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ url('insert_booking_form_details') }}",
                                            data:{
                                        
                                              select_category:select_category,
                                              // select_serv:select_serv
                                              // venue_details:venue_details,
                                              // serv_details:serv_details,
                                              // select_applicable:select_applicable,
                                              // select_amenities:select_amenities,
                                              //select_profile:select_profile
                                            },
                                            success:function(data){
                                              alert(1);
                                                    // alert(data.select_category);
                                                    // console.log(select_serv);
                                                    // console.log(data.venue_details);
                                                    // console.log(data.serv_details);
                                                    // console.log(data.select_applicable);
                                                    // console.log(data.select_amenities);
                                                    // console.log(data.select_amenities);
                                                    // alert(data.select_category,select_serv);
                                                   // $('#exampleModal').modal('show');
                                            }
                                           
                                            });


                                                }
                                              });
                                            
                                            
                                      
                                      
                      
    </script>
@endsection 