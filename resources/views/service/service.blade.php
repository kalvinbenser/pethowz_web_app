@extends('layouts.main')

@section('content')
  <!-- Banner Section Start -->
  <div class="section section-margin">
    <div class="container" >
        <div class="service-providers">
    <h1>Pet Service  Category</h1>
        <!-- Banners Start -->
        <div class="row m-b-n30">

            <!-- Banner Start -->
            <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="sitting align_service">
                    <a href="{{('/sitting')}}" class="banner">
                        <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Group 18007.svg')}}" alt="Banner Image" />
                    </a>
                    <div class="sitti">Sitting</div>
                </div>  
            </div>
          <!-- Banner End -->
           <!-- Banner Start -->
            <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
               <div class="grooming align_service">
                    <a href="{{('/grooming')}}" class="banner">
                        <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Grooming white.svg')}}" alt="Banner Image" />
                    </a>
                    <div class="groom">Grooming</div>
               </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000"   >
                <div class="walking align_service">
                    <a href="{{('/walking')}}" class="banner">
                        <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Walking White.svg')}}" alt="Banner Image" />
                    </a>
                    <div class="walks">Walking</div>
                </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="breading align_service">
                    <a href="{{('/breading')}}" class="banner">
                        <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Breeding White.svg')}}" alt="Banner Image" />
                    </a>
                    <div class="bread">Breading</div>
                </div>
            </div>
            <!-- Banner End -->
            <!-- Banner Start -->
            <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="training align_service">
                    <a href="{{('/training')}}" class="banner">
                        <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Path 27524.svg')}}" alt="Banner Image" />
                    </a>
                    <div class="train">Training</div>
                </div>
            </div>
            <!-- Banner End -->
              <!-- Banner Start -->
              <div class="col-md-2 col-6 m-b-30" data-aos="fade-up" data-aos-duration="1000" >
                <div class="photo align_service">
                    <a href="{{('/photography')}}" class="banner">
                        <img class="fit-image" src="{{URL::asset('front-end/assets/images/banner/Photography White.svg')}}" alt="Banner Image" />
                    </a>
                    <div class="photog">Photography</div>
                </div>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
    </div>
</div>
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
                                  <a href="{{('/petspace_details')}}" class="image">
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