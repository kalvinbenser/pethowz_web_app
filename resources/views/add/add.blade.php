@extends('layouts.main')
@section('content')
   <!-- Section Title Start -->
<div class="container" id="yourself">

    <h1 class="yourself">About Your Self</h1>

 <div class="product-deal-carousel arrow-outside-container">
    <form action="{{ url('/test_data') }}" method="post" enctype="multipart/form-data">
        @csrf
                <!-- Single Product Deal Start -->
                <div class="single-deal-product row m-b-n30">
                    <!-- Deal Thumb Start -->
                   
                    <div class="deal-thumb col-md-6 m-b-30" data-aos="fade-up" data-aos-duration="1200">
                       
                        <div class="form-group">
                            <label for="user-message" class="about">Introduce yourself and why enjoy being with pets.
                            </label>
                            <input type="text" name="your_self" class="form-control"/>
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">Tell us about the type of bet you have and your experience with if
                            </label>
                            
                            <input type="text" name="experience" class="form-control"/>
                         
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">How dose your service stand out?
                            </label>
                        
                            <input type="text" name="service_your" class="form-control"/>
                       
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">What do you enjoy about the work you do?
                            </label>
                      
                            <input type="text" name="work_enjoy" class="form-control"/>
                       
                          </div><!--ends from group-->
                          <div class="form-group">
                            <label for="user-message" class="about">What do you enjoy about the work you do?
                            </label>
                        
                            <input type="text" name="enjoy_work" class="form-control"/>
                         
                          </div><!--ends from group-->
                     
                    </div>
                    <!-- Deal Thumb End -->
                    <!-- Deal Content Start -->
                    <div class="product-deal-content col-md-6 m-b-30"  data-aos-duration="1400">
                        
                            <h1 class="yourself">Select Your Category</h1>
                            <div class="row" id="category">
                            <div class=" col-md-4 m-b-15" data-aos-duration="1200">
                                <input type="checkbox" name="category[]" value="3" id="cb4" />
                                <label for="cb4"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/category/Select category  - Bird.png')}}" />
                                </label> 
                                <p class="about">Birds</p>
                            </div>
                            <div class="col-md-4 m-b-15" data-aos-duration="1200">
                                <input type="checkbox" name="category[]" value="2" id="cb3" />
                                <label for="cb3"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/category/Select category  - cat.png')}}" />
                                </label>  
                                <p class="about">Cat</p>
                            </div>
                            <div class=" col-md-4 m-b-15" data-aos-duration="1200">
                                    <input type="checkbox" name="category[]" value="1" id="cb2" />
                                        <label for="cb2"  ><img class="fit-image" src="{{URL::asset('front-end/assets/images/category/Select category  - Dog.png')}}" />
                                        </label>                                   
                                <p class="about">Dog</p>
                            </div>
                              
                            <div class="form-group booking_button col-md-5">

                                <button type="submit" class="btn btn-primary btn-sm mx-auto">Save</button>

                            </div>
                
                      </div>
                    <!-- Deal Content End -->
                </div>
           
                <!-- Single Product Deal End -->
            </div>
        </form>
        </div>
</div>
<!-- Latest Blog Carousel End -->
@endsection
{{-- @section('scripts')
<script>
    $('body').on('click','#booking_btn',function(e){
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        }); 


        e.preventDefault();
        var pets_enjoy = $('.pets_enjoy').val();
         alert(pets_enjoy);
      
                           if(!pets_enjoy){
                            pets_enjoy_error="category is required";
                             $('#pets_enjoy_error').html("");
                             $('#pets_enjoy_error').html(pets_enjoy_error);
                           }
                           else{
                            pets_enjoy_error="";
                              $('#pets_enjoy_error').html("");
                           }
                           if(pets_enjoy_error !='' ){
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
                                            url:"{{ url('insert_your_self_details') }}",
                                            data:{
                                        
                                                pets_enjoy:pets_enjoy
                                            },
                                            success:function(data){
                                              alert(1);
                                                    // alert(data.pets_enjoy);
                                                    // console.log(select_serv);
                                                   // $('#exampleModal').modal('show');
                                            }
                                           
                                            });


                                                }
                                              });
                                            
                                            
                                      
                                      
                      
    </script> --}}
{{-- @endsection  --}}