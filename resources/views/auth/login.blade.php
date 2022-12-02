@extends('layouts.main')
@section('styles')
<link rel="stylesheet" href="{{URL::asset('front-end/assets/css/model.css')}}">

@endsection
@section('content')


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Login
  </button>


  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content ">
      
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
                <input type="text" class="model-input-text" placeholder="Mobile Number">
                
              </div>

              <div class="model-item-center mt-2">
                <input type="submit" value="Submit"  data-bs-toggle="modal" class="btn-model" data-bs-target="#exampleModal2" >
                
              </div>

              <p class="model-text-center mt-2">Or Login With</p>

              <div class="model-item-center">
                <div >
                  <img src="{{asset('front-end/assets/images/logo/Gmail-model.png')}}" alt="" />
 
                  
                  <img src="{{asset('front-end/assets/images/logo/facebook-model.png')}}" alt=""  width="50px" />
                 
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
      
        <div class="modal-body model-login-two">
          <div class="model-item-center">
            <div class="row">
                
                  <div >
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz logo.svg')}}" alt="" class="logo-size" /><br>
                    <img src="{{asset('front-end/assets/images/Web App/Icons/Pethowz.svg')}}" alt="" width="70px" />
                    
                  </div>

              </div>

              </div>

              <p class="model-text-center mt-5">Enter the 4-Degit Verification Code</p>

              <div class="model-item-center mt-2">
                <div style="display: flex;justify-content: center" id="otp-container">
                  <input oninput="inputInsideOtpInput(this)"
                         maxlength="1" class="model-otp" type="number">
          
                  <input oninput="inputInsideOtpInput(this)"
                         maxlength="1" class="model-otp" type="number">
          
                  <input oninput="inputInsideOtpInput(this)"
                         maxlength="1" class="model-otp" type="number">
          
                  <input oninput="inputInsideOtpInput(this)"
                         maxlength="1" class="model-otp" type="number">
          
                 
              </div>
                
              </div>
              <p class="model-text-center mt-1">Did not receive the code? <span class="model-resend-text">Re-send</span></p>

              <div class="model-item-center">
                <input type="submit" value="VERIFY"  data-bs-toggle="modal" class="btn-model-verify" data-bs-target="#exampleModal3" >
                
              </div>

            </div>
      

     
        </div>
    </div>
  </div>


   
  <div class="modal fade " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-center">
      <div class="modal-content">
      
  
          




              {{-- //begin  --}}


                 <p class="model-terms-heading">Terms And Conditions</p>

             
              <div class="modal-body  modal-content-overflow">
                
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus orci sit amet lacus lobortis viverra a tincidunt nunc. Morbi elementum ipsum eu lectus gravida fermentum. Maecenas vel luctus nisl. Donec lacinia dolor sit amet neque dapibus, eget semper enim placerat. Vestibulum congue, purus quis semper imperdiet, diam mi ultrices purus, sit amet posuere diam arcu at ligula. Fusce id vestibulum magna. Quisque vitae bibendum dolor. Praesent arcu urna, fringilla non consectetur sollicitudin, porttitor quis quam. Suspendisse viverra ex maximus arcu elementum consequat. Sed tortor purus, interdum a dapibus quis, laoreet ut nulla. Integer eu vulputate est, nec pellentesque nunc. Curabitur tempor congue arcu, vitae consectetur lacus congue ut.
        
        Mauris tempor nunc nisl, vitae dictum justo venenatis non. Mauris ultricies nisl nec sagittis eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur rutrum laoreet nibh, vitae laoreet nulla. In facilisis, massa eu elementum elementum, mi turpis semper lectus, euismod scelerisque neque justo ultrices justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In consequat, justo vitae facilisis aliquam, sem libero convallis diam, vitae mattis eros urna vitae turpis. Praesent aliquam arcu mauris, sit amet scelerisque odio dictum ac.
        
        Nam a quam vehicula, vehicula ante vel, tristique nulla. Duis ac placerat arcu. Mauris eu nulla in nunc viverra gravida ac eu massa. Duis scelerisque ultrices velit, at efficitur eros gravida non. Curabitur accumsan scelerisque erat sagittis placerat. Donec scelerisque ultricies ipsum, ac facilisis orci bibendum ac. Suspendisse eu molestie justo. In quis efficitur dolor. Sed porttitor mauris vitae aliquam sollicitudin. In ut cursus ligula. Quisque ut magna sed magna commodo vulputate et vitae metus. Praesent gravida, diam ac pharetra vestibulum, enim sapien vulputate lacus, at tempor mi enim quis lorem. Suspendisse mi eros, cursus quis iaculis sed, rhoncus in est. Maecenas non lacinia magna.
        
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque non hendrerit arcu. Curabitur posuere sem sit amet tortor consectetur, nec placerat ligula hendrerit. Ut consectetur nec metus sed dignissim. In id lorem malesuada, mollis libero a, egestas justo. Cras auctor sapien quis nisl pretium, sit amet gravida augue semper. In eu imperdiet felis, sit amet feugiat est. Nunc eu vehicula quam, non feugiat purus.
        
        Aliquam aliquet ipsum eu eros vehicula volutpat. Nunc rhoncus vulputate eros non egestas. Cras eleifend in justo quis malesuada. Integer cursus ante et ex venenatis porta. Pellentesque et libero tristique, mollis leo eu, convallis sapien. Nullam cursus quis urna nec finibus. Curabitur ultricies euismod diam ut suscipit. Nam non orci sed quam porttitor varius. Nunc mattis lobortis efficitur. Nunc sed est sit amet metus interdum tristique. Duis in ipsum metus. Vestibulum eleifend interdum porta. Donec blandit elementum tortor semper interdum. Aliquam tempor sapien tortor, a consectetur odio varius eget.
        
        Mauris vel pretium neque, vel pretium justo. In tristique imperdiet justo, nec blandit sem ornare et. Vivamus lacinia tortor purus. Proin semper, orci ut mattis ultricies, purus ante ornare erat, id gravida neque purus in ipsum. Praesent scelerisque vestibulum mi, et lobortis lacus faucibus id. In ut pulvinar diam. Donec at faucibus leo. Fusce ac suscipit risus. Donec congue, tortor vel dictum facilisis, ligula dui tincidunt lectus, ac suscipit sapien magna dictum tortor. Morbi at auctor nunc.
        
        Cras ac orci posuere, fermentum mauris vel, elementum erat. Nulla nec aliquam sem, vestibulum commodo augue. Nullam molestie ex nec pretium vehicula. Sed pretium cursus elit, et hendrerit nibh dapibus vel. Vivamus nec mattis enim. Aliquam et ipsum non tortor dapibus luctus. Donec sit amet porta urna, eu ullamcorper lectus. Sed turpis nisl, pretium sit amet posuere in, pharetra ac turpis. Nullam ut risus nunc. Nullam sed augue neque. Quisque sem sapien, fringilla at congue eu, sodales at orci. Nullam vehicula vel nulla non tristique. Proin dapibus luctus volutpat. Suspendisse elementum tellus nec lacus varius eleifend. Aliquam elementum, enim in lacinia facilisis, ligula ex consectetur nisi, at dapibus sapien erat ac neque. In hac habitasse platea dictumst.
        
        Praesent sed felis quis ex euismod convallis. Integer massa ipsum, posuere id vulputate vitae, euismod non ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed tellus eu ligula varius euismod sit amet in ex. Quisque eget fermentum urna. Cras tempor bibendum vehicula. Sed porttitor tellus sed metus tempor venenatis id nec ex. Quisque et aliquet elit. Nam vestibulum lorem vitae metus lacinia bibendum. Nam nulla lorem, feugiat in tellus sit amet, scelerisque sodales erat. Cras vel lacus quis tortor cursus pellentesque. Nam ultricies vehicula orci a efficitur. Nulla aliquet dolor ac sem fermentum laoreet.
        
        Sed consequat ullamcorper tristique. Fusce rhoncus mauris turpis. Donec rhoncus blandit rhoncus. Pellentesque venenatis lobortis arcu, a pellentesque tortor commodo sit amet. Praesent ut nulla metus. Aenean quis consequat sapien. Nunc vehicula vestibulum tortor eget finibus. Donec maximus tincidunt sapien sit amet pretium. Ut aliquet magna tortor, eu imperdiet turpis condimentum non. Suspendisse mattis, ligula ut ultrices lobortis, tellus diam posuere elit, vel laoreet ante metus ac lorem.
        
        Ut pharetra urna ut lacus volutpat hendrerit. Curabitur quis elit leo. Praesent non accumsan nibh. Vestibulum quam est, rhoncus non diam in, blandit consectetur mi. Sed lobortis id velit eu malesuada. Morbi mattis felis non massa accumsan, in pretium metus aliquet. Ut porttitor commodo urna vel suscipit. Maecenas dictum odio eu nisl maximus, vel laoreet lorem egestas. Proin leo lectus, vestibulum eu suscipit sit amet, consequat vel libero. Nam eros quam, rhoncus interdum lacus sit amet, tristique finibus erat. Nullam ut euismod nunc, quis efficitur leo. Aenean accumsan odio ut ante vehicula, in eleifend orci varius. Integer ut ultrices neque. Duis nec ullamcorper lorem, sit amet pharetra magna.
        
        Mauris elit orci, blandit eu libero vel, malesuada vehicula nulla. Fusce dictum, tortor id ultrices rhoncus, justo augue imperdiet ex, a egestas sapien mi sit amet orci. Curabitur vitae diam at ex mollis pharetra. Ut tellus massa, dapibus eget sodales ac, feugiat et nunc. Phasellus tristique maximus orci, eu pharetra arcu pulvinar sit amet. Morbi fermentum condimentum felis, a elementum nibh viverra ac. Suspendisse ac posuere ex. Ut rutrum ligula libero, aliquet iaculis lectus tempus eget. Quisque egestas tellus commodo elementum commodo. Phasellus ultricies enim at massa ultricies blandit. Morbi a euismod nulla.
        
        Praesent finibus pellentesque turpis quis vehicula. Pellentesque mi mauris, hendrerit et dolor vel, tempus vehicula massa. Suspendisse pellentesque, ex eget vehicula fringilla, ante tortor varius libero, a semper ligula dolor at diam. Donec a convallis metus. Morbi lobortis molestie odio sed facilisis. Proin vitae aliquam metus. Donec quis orci urna.
        
        In cursus dolor sollicitudin fermentum rhoncus. Nam ante arcu, ullamcorper sit amet fringilla ac, sollicitudin ut est. Aliquam consectetur nibh sed dolor imperdiet, id congue ligula bibendum. Nulla quis volutpat felis, id accumsan sem. Nam quis volutpat lorem, in porta turpis. Maecenas non dignissim libero. Donec mollis pellentesque molestie. Morbi sollicitudin imperdiet turpis, et fringilla mauris luctus eu. Mauris posuere, eros id venenatis pulvinar, massa tellus imperdiet diam, a aliquam erat sem non urna. Morbi placerat, leo vitae tempus porta, felis libero auctor augue, eu suscipit felis felis quis tellus. Maecenas facilisis felis at consequat vehicula.
        
        Fusce eget nisi et ipsum porta consequat. Nullam id nisi nisl. Vivamus blandit dignissim eros, eget ornare diam placerat non. Sed ipsum dolor, tempus vitae risus quis, mollis ultricies velit. Cras consectetur vestibulum erat, quis sodales ante porta et. Pellentesque faucibus metus sit amet lacus tristique, sit amet interdum leo consequat. Ut at felis nisi. Fusce cursus efficitur ligula, ut laoreet lacus. Sed id lobortis enim, vitae dapibus nunc. Fusce ullamcorper arcu eget justo tincidunt, at ultricies purus malesuada. Duis a risus tempor, finibus neque ut, ultricies est. Nulla id vestibulum erat, nec lacinia dolor.
        
        Aenean consectetur risus aliquet lectus congue, suscipit euismod dolor euismod. Quisque ut lorem rutrum, venenatis turpis non, feugiat nunc. Vestibulum sodales erat turpis, eget sodales nunc elementum ullamcorper. Sed sollicitudin in ipsum id lacinia. Nunc at lectus eget diam placerat tincidunt. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In dapibus consequat massa porta porta. Curabitur sit amet dui risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc imperdiet consectetur lacus, mollis vulputate enim lacinia vitae. Sed scelerisque nisl ipsum, non pulvinar lectus pulvinar a. Nulla facilisi.
                
                
                
              </div>
            





              {{-- //end
               --}}








               <input type="checkbox" name="terms" class="model-agree-box" id="terms" onchange="activateButton(this)">  I Agree Terms & Coditions
               <br><br>


              <div class="model-item-center mb-5">
                <input type="submit" value="Submit" id="submit" class="btn-model-verify" >
                
              </div>

           
      

     
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


@section('scripts')
<script>
function inputInsideOtpInput(el) {
  if (el.value.length > 1){
      el.value = el.value[el.value.length - 1];
  }
  try {
      if(el.value == null || el.value == ""){
          this.foucusOnInput(el.previousElementSibling);
      }else {
          this.foucusOnInput(el.nextElementSibling);
      }
  }catch (e) {
      console.log(e);
  }
}

function foucusOnInput(ele){
 ele.focus();
 let val = ele.value;
 ele.value = "";
 // ele.value = val;
 setTimeout(()=>{
     ele.value = val;
 })
}


function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }

  }
</script>
@endsection
