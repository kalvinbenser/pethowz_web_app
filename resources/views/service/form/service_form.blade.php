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
            <h1 id="yourself">List Your Pet Services</h1>
              <form action="/create_service" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row m-b-n40">
                      <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-providers">
                          <label class="about">Venue Name</label>                 
                             <input type="text" name="venue" class="form-control" placeholder="Enter Name">
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
                    <label class="about">Service Details</label>                 
                        <textarea id="user-message" name="service_detail" class="form-control venue_details" cols="5" rows="2" placeholder=""></textarea>                      
                    </div>
                    <div class="service-providers">
                        <div class="row">
                            <label class="about">Select the options which are applicable</label>
                            <select class="form-select select_applicable" name="option[]" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
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
                            <select class="form-select select_amenities" name="select_service[]" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                              <option value="1">Sitting</option>
                              <option value="2">Walking</option>
                              <option value="3">Training</option>
                              <option value="4">Grooming</option>
                              <option value="5">Photography</option>
                              <option value="6">Breading</option>
                            </select>               
                          </div>
                         
                        </div> 
                        <div class="service-providers"> 
                        <label class="about">Cost Per Hour</label>
                        <div class="range-wrap">
                            <div class="range-value" id="rangeV"></div>
                            <input id="range" name="cost_per_hour" type="range" min="0" max="1000" value="0" step="1">
                          </div>
                        </div>                     
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="service-providers">
                        <input type="file"  accept="image/*" name="image" id="file_input"  style="display: none;padding:15px;">
                        <label class="images" for="file_input"  style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
                        <i class="fa fa-image " style="color:#FF9A71;font-size:20px;"></i><input id="title" class="pro_name select_profile" />
                        <div class="">
                       
                        </div>
                </div>
                    <div class="view-all">
                        <input type="submit" value="submit" class="submite" >
                        {{-- id="booking_btn" class="submite"  --}}
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
@endsection 