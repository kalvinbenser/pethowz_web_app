@extends('layouts.main')
@section('content')      
    <div class="container">
        <div class="row">
            <h1 class="yourself">Pet Space</h1>
            <div class="row m-b-n40">
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1000">
                 <div class="service-providers">
                    <div class="row"><div class="col ">
                        <label class="about">Select Venue Category</label>
                        <select class="select" name="field1" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Audi</option>
                          <option value="2">BMW</option>
                          <option value="3">Mercedes</option>
                          <option value="4">Volvo</option>
                          <option value="5">Lexus</option>
                          <option value="6">Tesla</option>
                        </select>               
                      </div>
                    </div>
                 </div>
                 <div class="service-providers">
                      <div class="row"><div class="col ">
                        <label class="about">Select the Service</label>
                        <select class="select" name="field1" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Audi</option>
                          <option value="2">BMW</option>
                          <option value="3">Mercedes</option>
                          <option value="4">Volvo</option>
                          <option value="5">Lexus</option>
                          <option value="6">Tesla</option>
                        </select>               
                      </div>
                </div>
                </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1200">
                    <div class="service-providers">
                    <label class="about">Venue Details
                    </label>
                 
                        <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder=""></textarea>
                    </div>
                    <div class="service-providers">
                        <label for="user-message" class="about">Service Details
                        </label>
                     
                            <textarea name="user-message" id="user-message" class="form-control" cols="5" rows="2" placeholder=""></textarea>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1400">
                    <div class="service-providers">
                    <div class="row"><div class="col ">
                        <label class="about">Select the options which are applicable</label>
                        <select class="select" name="field1" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Audi</option>
                          <option value="2">BMW</option>
                          <option value="3">Mercedes</option>
                          <option value="4">Volvo</option>
                          <option value="5">Lexus</option>
                          <option value="6">Tesla</option>
                        </select>               
                      </div>
                    </div>
                    </div>
                    <div class="service-providers">
                      <div class="row"><div class="col ">
                        <label class="about">Choose Location</label>
                        <select class="select" name="field1" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                          <option value="1">Audi</option>
                          <option value="2">BMW</option>
                          <option value="3">Mercedes</option>
                          <option value="4">Volvo</option>
                          <option value="5">Lexus</option>
                          <option value="6">Tesla</option>
                        </select>               
                      </div>
                      </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 m-b-40" data-aos="fade-up" data-aos-duration="1600">
                   
                        <div class="service-providers">
                        <div class="row"><div class="col ">
                            <label class="about">Amenities</label>
                            <select class="select" name="field1" id="field1" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))" multiselect-hide-x="true">
                              <option value="1">Audi</option>
                              <option value="2">BMW</option>
                              <option value="3">Mercedes</option>
                              <option value="4">Volvo</option>
                              <option value="5">Lexus</option>
                              <option value="6">Tesla</option>
                            </select>               
                          </div>
                        </div>                       
                    </div>
                    <div class="service-providers">
                        <form action="{{URL::asset('/home/index')}}">
                    <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;padding:15px;">
                    <label class="images" for="file" style="cursor: pointer;">Upload Image<i class="fa fa-upload" style="color: white;"></i></label>
                    <img id="output" width="250" style="padding: 10px;"/>
                    <button class="submite" name="submite">Submit</button>
                        </form>

                        <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('output');
                        image.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
               </div>
            </div>
        </div>
    </div>

@endsection 