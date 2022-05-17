@extends('layouts.main')
@section('styles')
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/model.css')}}">
@endsection
@section('content')


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>


  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content">
      
        <div class="modal-body">

        
          
          <div class="model-item-center">
            <div class="row">
                
                  <div >
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz logo.svg')}}" alt="" class="logo-size" /><br>
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz.svg')}}" alt="" width="70px" />
                    
                  </div>

          
                 

              </div>

             

             
              </div>

                
              <p class="model-text-center mt-2">You will get One Time Password<br>to this number</p>
        
          
                

              
              
              
          <div class="model-item-center">
            <div class="row">
                
                  <div >
                     <input type="number" placeholder="Mobile Number" class="form-control">
                  </div>
                   <div>
                    <input type="submit" value="SUBMIT" class="model-btn">
                   </div>
             
                 

              </div>

             

             
              </div>
    
                  
    
              




           
            </div>
      

     
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>



  
  <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content">
       
        <div class="modal-body">

          <div class="row">
          <div class="col-md-4">
          
            </div>
            <div class="col-md-4">
              <div >
                <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz logo.svg')}}" alt="" class="logo-size" /><br>
                <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz.svg')}}" alt="" width="70px" />

              </div>

              <div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" >submit</button>
              </div>
              
            </div>
            <div class="col-md-4">
       
            </div>
          </div>
        
          

     
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>


   
  <div class="modal fade " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content">
       
        <div class="modal-body">

          <div class="row">
          <div class="col-md-4">
          
            </div>
            <div class="col-md-4">
              <div >
                <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz logo.svg')}}" alt="" class="logo-size" /><br>
                <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz.svg')}}" alt="" width="70px" />

              </div>

              <div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" >submit</button>
              </div>
              
            </div>
            <div class="col-md-4">
       
            </div>
          </div>
        
          

     
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>


    
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Login</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Login Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 m-auto">
                    <div class="login-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center m-b-30">
                            <h2 class="title m-b-10">Login</h2>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="#" method="post">

                            <!-- Input Email Start -->
                            <div class="single-input-item m-b-10">
                                <input type="email" placeholder="Email or Username">
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item m-b-10">
                                <input type="password" placeholder="Enter your Password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Button/Forget Password Start -->
                            <div class="single-input-item m-b-15">
                                <div class="login-reg-form-meta m-b-n15">

                                    <button class="btn btn btn-gray-deep btn-hover-primary m-b-15">Sign In</button>
                                    <a href="#" class="forget-pwd m-b-15">Forget Password?</a>

                                </div>
                            </div>
                            <!-- Button/Forget Password End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="register.html">Creat Account</a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

@endsection
