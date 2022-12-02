@extends('layouts.main')
@section('content')
    <div class="myaccount-content">
        <h3 class="text-secondary py-2" >Booking Details</h3>
       
        <div class="account-details-form">
            <form action="/create_pet_service_booking" method="post">
              @csrf
                <div class="row">
                    <div class="col-lg-3">
                        <div class="single-input-item m-b-15">
                            <label for="name" class="required m-b-10 ">First Name</label>
                            <input type="text" class="name" name="name" id="first-name" placeholder="Name" />
                           
                        </div><input type="hidden"  name="pet_service_id" value={{$pet_service_id}} />
                    </div>
                    <div class="col-lg-3">
                        <div class="single-input-item m-b-15">
                            <label for="contact" class="required m-b-10">Contact Number</label>
                            <input type="number" class="contact" name="contact" id="contact" placeholder="Number" />
                           
                        </div>
                    </div>
               
                <div class="col-lg-3">
                <div class="single-input-item m-b-15">
                    <label for="pet-name" class="required m-b-10">Pet Name</label>
                    <input type="text" class="pet_name" name="pet_name" id="pet-name" placeholder="Pet Name" />
                  
                </div>
                </div>
                <div class="col-lg-3">
                <div class="single-input-item m-b-15">
                    <label for="count" class="required m-b-5">Pets Count</label>
                    <input type="number"  class="pet_count" name="pet_count" id="count" placeholder="Pets count" />
                   
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-input-item m-b-15">
                        <label for="days" class="required m-b-5">No.of.Days</label>
                        <input type="number" class="no_of_days" name="no_of_days" id="days" placeholder="days" />
                        
                    </div>
                    </div>

                    <div class="col-lg-6">
                         
                                <label for="service type" class="required m-b-5">service Type</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                   <div class="form-check">
                                    <input class="form-check-input" name="service_type" type="radio"  id="day" value="days" >
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Days
                                    </label>
                                </div>
                                    </div>
                                    <div class="col-sm-6">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="service_type" id="day" value="weeks" >
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Weeks
                                    </label>
                                  </div>
                                    </div>
                                    <div class="col-sm-6">
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="service_type" id="day" value="months" >
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Month
                                    </label>
                                  </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                         <input class="form-check-input" type="radio"  name="service_type" id="day" value="immediate" >
                                         <label class="form-check-label" for="exampleRadios1">
                                            immediate
                                         </label>
                                       </div>
                                         </div>
                            </div>
                        </div>
                
                        <div class="col-lg-2">
                        <!--  <div class="single-input-item single-item-button m-t-30">
                         <a  id="booking_btn" class="btn btn-primary">Submit</a>
                    
                    </div>  -->
                    <div class="view-all">
                      <input type="submit" value="Submit" class="submite" >
                 </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog model-center">
          <div class="modal-content ">
          
            <div class="modal-body">
              <div class="model-item-center">
                <div class="row">                    
                      <div >
                        <img src="{{asset('front-end/assets/images/Web App/Icons/Booking Submitted.svg')}}" alt="" class="logo-size" />     
                      </div>    
                  </div>    
                  </div>    
                  <p class="model-text-center mt-2">Your  Booking Request is Submitted</p>
                  <p class="about">Pethows Admin would revert shartly</p>   
                  <div class="model-item-center mt-2">
                 
                      <a href="{{URL::asset('/profile')}}" class="btn btn-primary" >CONTINUE</a>
                                    
                  </div>           
                  <div class="model-item-center">
                  </div>            
                </div>
          
    
         
            </div>
          <!--  <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>


@endsection


@section('scripts')
@endsection