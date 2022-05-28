@extends('layouts.main')
@section('content')
    <div class="myaccount-content">
        <h3 class="title" id="title1">Booking Details</h3>
        <div class="account-details-form">
            <form action="#" mehod="post">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="single-input-item m-b-15">
                            <label for="name" class="required m-b-10 ">First Name</label>
                            <input type="text" class="name" id="first-name" placeholder="Name" />
                            <span id="name_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-input-item m-b-15">
                            <label for="contact" class="required m-b-10">Contact Number</label>
                            <input type="number" class="contact" id="contact" placeholder="Number" />
                            <span id="contact_error" class="text-danger"></span>
                        </div>
                    </div>
               
                <div class="col-lg-3">
                <div class="single-input-item m-b-15">
                    <label for="pet-name" class="required m-b-10">Pet Name</label>
                    <input type="text" class="pet_name" id="pet-name" placeholder="Pet Name" />
                    <span id="pet_name_error" class="text-danger"></span>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="single-input-item m-b-15">
                    <label for="count" class="required m-b-5">Pets Count</label>
                    <input type="number"  class="pet_count" id="count" placeholder="Pets count" />
                    <span id="pet_count_error" class="text-danger"></span>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-input-item m-b-15">
                        <label for="days" class="required m-b-5">No.of.Days</label>
                        <input type="number" class="no_of_days" id="days" placeholder="days" />
                        <span id="no_of_days_error" class="text-danger"></span>
                    </div>
                    </div>
                    <div class="col-lg-3">
                      
                        <div class="single-input-item m-b-15">
                          <label for="sel1" class="form-label">Select Service</label>
                            <select class="form-select select_service" id="sel1"  name="sellist1">
                            <option>Select</option>
                            <option>Sitting</option>
                            <option>Grooming</option>
                            <option>Walking</option>
                            <option>Breading</option>
                            <option>Training</option>
                            <option>Photography</option>
                            </select>
                            <span id="select_service_error" class="text-danger"></span>
                        </div>
                      
                     </div>
                    <div class="col-lg-3">
                         
                                <label for="service type" class="required m-b-5">service Type</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day" id="day" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Days
                                    </label>
                                </div>
                                    </div>
                                    <div class="col-sm-6">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day" id="day" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Weeks
                                    </label>
                                  </div>
                                    </div>
                                    <div class="col-sm-6">
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day" id="day" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Month
                                    </label>
                                  </div>
                                    </div>
                            </div>
                        </div>
                
                        <div class="col-lg-2">
                        <div class="single-input-item single-item-button m-t-30">
                         <a  id="booking_btn" class="btn btn-primary">Submit</a>
                    
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


<script>
    $('body').on('click','#booking_btn',function(e){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        }); 


        e.preventDefault();
        var name = $('.name').val();
         var contact= $('.contact').val();
        var pet_name= $('.pet_name').val();
        var pet_count= $('.pet_count').val();
        var no_of_days=$('.no_of_days').val();
       // var select_service=$('.select_service').val();
      

                           if(!name){
                             name_error="name is required";
                             $('#name_error').html("");
                             $('#name_error').html(name_error);
                           }
                           else{
                              name_error="";
                              $('#name_error').html("");
                           }

                           if(!contact){
                             contact_error="contact number is required";
                             $('#contact_error').html("");
                             $('#contact_error').html(contact_error);
                           }
                           else{
                            contact_error="";
                              $('#contact_error').html("");
                           }
                           if(!pet_name){
                            pet_name_error="pet name is required";
                             $('#pet_name_error').html("");
                             $('#pet_name_error').html(pet_name_error);
                           }
                           else{
                            pet_name_error="";
                              $('#pet_name_error').html("");
                           }
                           if(!pet_count){
                            pet_count_error="pet count is required";
                             $('#pet_count_error').html("");
                             $('#pet_count_error').html(pet_count_error);
                           }
                           else{
                            pet_count_error="";
                              $('#pet_count_error').html("");
                           }
                           if(!no_of_days){
                            no_of_days_error="number of days is required";
                             $('#no_of_days_error').html("");
                             $('#no_of_days_error').html(no_of_days_error);
                           }
                           else{
                            no_of_days_error="";
                              $('#no_of_days_error').html("");
                           }
                          
                         /* if(!select_service){
                            select_service_error="number of days is required";
                             $('#select_service_error').html("Select");
                             $('#select_service_error').html(select_service);
                           }
                           else{
                            select_service_error="";
                              $('#select_service_error').html("Select");
                           } */
                     
                     



                           
                           if(name_error !='' || contact_error !=''|| pet_name_error !=''|| pet_count_error !=''|| no_of_days_error !=''){
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
                                            url:"{{ url('insert_booking_details') }}",
                                            data:{
                                        
                                              name:name,
                                              contact:contact,
                                              pet_name:pet_name,
                                              pet_count:pet_count,
                                              no_of_days:no_of_days
                                            },
                                            success:function(data){
                                                    //console.log(data.name,contact, pet_name, pet_count,no_of_days);
                                                    // alert(data.name);
                                                    $('#exampleModal').modal('show');
                                            }
                                           
                                            });


                                                }
                                              });
                                            
                                            
                                      
                                      
                      
    </script>
@endsection