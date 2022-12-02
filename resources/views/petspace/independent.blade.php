@extends('layouts.main')
@section('content')

    <!-- pet Section Start -->
    <div class="section position-relative">
         <div class="container">

            <!-- Section Title & Tab Start -->
            <div class="row " data-aos="fade-up" data-aos-duration="1000" >
                <!-- Tab Start -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <h1 class="h3 text-secondary">Independent House | Apartment</h1>
                </div>
                <div class="view-all col-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="/pet_space_form" target="">
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
                                @foreach ($collection as $item)
                                <!-- Product Start -->
                              <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="{{('/pet_space_booking')}}/{{$item['id']}}" class="image">
                                              
                                                {{-- <img class="fit-image" src="https://firebasestorage.googleapis.com/v0/b/pethouse-otp.appspot.com/o/user%2F1656477109457-images.jpeg?alt=media" alt="Product" />
                                             --}}
                                               
                                                <img class="fits-image" src="{{$item['image'][0]}}"   alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">4.5</span>
                                                </span>
                                          
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <a href="{{('/pet_space_booking')}}/{{$item['id']}}" class="image">
                                            <h5 class="title"><p>{{$item['venue_name']}}</p></h5>
                                            </a>
                                            <span class="price">
                                                <span class="new">₹ {{$item['cost_per_hour']}}/Hr</span>
                                                </span>
                                            <!-- <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="like"><i class="fa fa-heart-o"></i></span>     -->
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
            <!-- Products Tab End -->
            <div class="m-5">
                {{  $collection->links('vendor.pagination.bootstrap-5')  }}
                </div>              
        </div>
    </div>
    <!-- Product Section End -->
    @endsection