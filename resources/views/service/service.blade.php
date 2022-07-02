@extends('layouts.main')

@section('content')
    <!-- Exclusive Pet Spaces in service cender -->
      <!-- pet Section Start -->
      <div class="section position-relative">
        <div class="container">
  <!-- Section Title & Tab Start -->
  <div class="row" data-aos="fade-up" data-aos-duration="1000">
      <!-- Tab Start -->
   <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <h1>All Services</h1>
      </div>
      <div class="view-all col-12 col-sm-6 col-md-6 col-lg-6">
        <a href="/pet_service_form" target="">
             <i class="fa fa-plus-square"  style="font-size:28px;color:#FF9966"></i>
           </a>
     </div>
    
      <!-- Tab End -->
  </div>
  <!-- Section Title & Tab End -->
  <!-- Products Tab Start -->
  
 <div class="row" data-aos="fade-up" data-aos-duration="1100">
      <div class="col-12">
          <div class="tab-content">
              <div class="tab-pane fade show active" id="tab-product-all">
                  <div class="row m-b-n40">
                      <!-- Product Start -->                     
                  @foreach($collection as $pet_ser)
                      <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                          <div class="product">
                              <!-- Thumb Start  -->
                              <div class="thumb">
                                  <a href="{{('/pet_service_booking')}}/{{$pet_ser['_id']}}" class="image">
                                      <img class="fit-image" src="{{URL::asset('front-end/assets/images/products/medium-product/Exc pet space image 1.png')}}" alt="Product" />
                                 </a>
                                  <span class="badges">
                                  <span class="sale">4.5</span>
                                  </span>
                                
                             </div>
                              <!-- Thumb End  -->
                              <!-- Content Start  -->
                              <div class="content">
                                  <h5 class="title"><p>{{$pet_ser['venue_name']}}</p></h5>
                                  <span class="price">
                                  <span class="new">RS {{$pet_ser['cost_per_hour']}}/Hr</span>
                                                                          
                                </span>
                                <span class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <span class="like"><i class="fa fa-heart-o"></i></span>    
                              </div>
                              <!-- Content End  -->
                          </div>
                      </div>
                  @endforeach
                      <!-- Product End -->    
                                   
                  </div>
             
                </div>
                     
          </div>
          
      </div>

  </div>
  <div class="m-5">
  {{  $collection->links('vendor.pagination.bootstrap-5')  }}
  </div>

  <!-- Products Tab End --> 
</div>
</div>  

@endsection