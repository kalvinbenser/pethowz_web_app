<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 use App\Support\Collection;


class HomeController extends Controller
{

    
     public function closeModel(Request $request){
        $user_id=$request->session()->get('user_id');
       
                     
        if(!$user_id){



            return redirect('/')->with('warning','Please Login First');
        }
        else{

         
          //profile
         $registerDataUrl=env('API').'getRegistrationDetails/'.$user_id;
      
        $registerDetailsRequest=Http::get($registerDataUrl);
        $registerDetailsResponse=$registerDetailsRequest->json();
         //dd($registerDetailsResponse);
         if($registerDetailsResponse['Success']==true){
            return redirect()->back();
         }
         else{
            return redirect('register_view');
         }
            
        }
     
     }
    // index view
      public function index(){


         //********************* Index Pet Space  ***************************\\

       
        $petSpaceUrl= env('API').'getAllPetSpace';
       
        $petSpaceRequest = Http::get($petSpaceUrl);
  
        $petSpaceResponse = $petSpaceRequest->json();
        $pet_space=$petSpaceResponse['data'];
       // dd($petSpaceResponse[data]);

        //**************************  Pet Service  ****************************\\
       
        // $petServiceUrl=env('API').'getAllPetService';
      
        // $petServiceRequest=Http::get($petServiceUrl);
        // $petServiceResponse=$petServiceRequest->json();
        // //dd($petServiceResponse);
        // $pet_service=$petServiceResponse['data'];
        // // dd($pet_service);
        //
        $collection = (new Collection($pet_space))->paginate(8);
       // dd($collection);
        return view('home/index',compact('collection'));
    }
  
    //about

    public function about(){
        return view('about/about');
    }

    //sitting service

    public function sitting(){
        return view('/service/sitting/sitting');
    }
    
    //main service

    public function service(){

          //************************** Pet Service  ****************************\\
       
        $petServiceUrl=env('API').'getAllPetService';
      
        $petServiceRequest=Http::get($petServiceUrl);
        $petServiceResponse=$petServiceRequest->json();
        //dd($petServiceResponse['data']);
           
        $pet_service=$petServiceResponse['data'];
                
        $PetServiceCollection = collect($pet_service);

        $filtered = $PetServiceCollection->filter(function ($value, $key) {
            // return $value['approved']==true;
            return $value['approved']==true;
        });
    
        //dd($filtered->all());
        //dd($filtered->all());
           

        $collection = (new Collection($filtered->all()))->paginate(8);
       // dd($collection);
        return view('/petservice/pet_service',compact('collection'));
    }
    //grooming service

    public function grooming(){
        return view('/service/grooming/grooming');
    }

    //walking service

    public function walking(){
        return view('/service/walking/walking');
    }

    //breading service

    public function breading(){
        return view('/service/breading/breading');
    }

    //training service

    public function training(){
        return view('/service/training/training');
    }

    //grooming service

    public function photography(){
        return view('/service/photography/photography');
    }

    //pethost

    public function pethost(){
        return view('/pethost/pethost');
    }

     //exclusive_petspaces

     public function exclusive_petspaces(){
           //*********************  Pet Space  ***************************\\

        $petSpaceUrl= env('API').'getAllPetSpace';
       
        $petSpaceRequest = Http::get($petSpaceUrl);
  
        $petSpaceResponse = $petSpaceRequest->json();
        
        $pet_space=$petSpaceResponse['data'];

      

        $collection = (new Collection($pet_space))->paginate(8);
       // dd($collection);
        return view('/exclusive_petspaces/exclusive-petspaces',compact('collection'));

     }

      //house_apartment

      public function house_apartment(){
            //*********************  house & apartment ***************************\\
 
            $petSpaceData=[
        
           
            ];
         $petSpaceUrl= env('API').'getAllPetSpace';
        
         $petSpaceRequest = Http::get($petSpaceUrl,$petSpaceData);
   
         $petSpaceResponse = $petSpaceRequest->json();
         
         //dd($petSpaceResponse[data]);
 
         //************************** Pet Service  ****************************\\
         $petServiceData=[
 ];
         $petServiceUrl=env('API').'getAllPetService';
       
         $petServiceRequest=Http::get($petServiceUrl,$petServiceData);
         $petServiceResponse=$petServiceRequest->json();
         //dd($petServiceResponse);
         $pet_service=$petServiceResponse['data'];
 
         $collection = (new Collection($pet_service))->paginate(8);
        // dd($collection);
         return view('/house&apartment/house_apartment',compact('collection'));
    }

   

    //terms_coditions

    public function terms_coditions(){
        return view('/terms_coditions/terms_coditions');
    }

     //booking-details

     public function bookingdetails(Request $request){
        // if(!$request->session()->get('user_id')){
        //     return redirect('/')->with('warning','Please Login First');
        // }
        // else{
        //     return view('/booking-details/bookingdeteils');
        // }

        return view('/booking-details/bookingdeteils');
      
    }
  

     //add-details

     public function add_your_self(Request $request){
        if(!$request->session()->get('user_id')){
            return redirect('/')->with('warning','Please Login First');
        }
        else{

            return view('/add/add');
        }
        
    }

    public function create_your_self(Request $request){
                   
        $validated = $request->validate([
            'content1' => 'required',
             'content2' => 'required',
             'content3'=>'required',
             'content4'=>'required',
             'content5'=>'required',
             'content6'=>'required',
             'category'=>'required'
         ]);

                $user_id=$request->session()->get('user_id');
                $content1=$request->content1;
                $content2=$request->content2;
                $content3=$request->content3;
                $content4=$request->content4;
                $content5=$request->content5;
                $content6=$request->content6;
                $category=$request->category;
                $data=[
                    'user_id'=>$user_id,
                    'content1'=>$content1,
                    'content2'=>$content2,
                    'content3'=>$content3,
                    'content4'=>$content4,
                    'content5'=>$content5,
                    'content6'=>$content6,
                    'category'=>$category
                ];
                //dd($data);
              

                try{
                    $yourSelfUrl=env('API').'createSelfDescription';
                    $yourSelfRequest=Http::post($yourSelfUrl,$data);
                    $yourSelfResponse=$yourSelfRequest->json();
                    //dd( $yourSelfResponse);
                    if($yourSelfResponse['Success']==true){
                        return redirect('/pet_space_form')->with('message','self intro added successfully');
                    }
                    else{
                       
                        $request->session()->put('custom_error',$yourSelfResponse['Message']);
                        return redirect()->back();
                    }
                   
                }
                catch(Exception $e){
                    echo 'Message: ' .$e->getMessage();
                }
    }

      // add details
      public function welcome(){
        return view('welcome');
      }
      
      // Mobile otp 
    function insert_otp_details(Request $request){
        $mobile_otp1=$request->mobile_otp1;
        $mobile_otp2=$request->mobile_otp2;
        $mobile_otp3=$request->mobile_otp3;
        $mobile_otp4=$request->mobile_otp4;
        
       return response()->json(['status' => 'insert successfully','mobile_otp1'=> $mobile_otp1,'mobile_otp2'=>$mobile_otp2,'mobile_otp3'=>$mobile_otp3,'mobile_otp4'=>$mobile_otp4]);
    }

        //profile-details
     
         //************************** get profile ****************************\\

        public function profile(Request $request ){

              $user_id=$request->session()->get('user_id');
              //dd($user_id);
        if(isset($user_id)){

            $registerDataUrl=env('API').'getRegistrationDetails/'.$user_id;
         
            $registerDetailsRequest=Http::get($registerDataUrl);
            $registerDetailsResponse=$registerDetailsRequest->json();
            //$profile_data=$registerDetailsResponse['data'];
             //dd($registerDetailsResponse);
             if($registerDetailsResponse['Success']==false){
                
               
              return redirect('register_view');

             }
             else{
                $profile_data=$registerDetailsResponse['data'];

                $data['collection'] = (new Collection($profile_data));
              
                //my venue
                $myVenueUrl=env('API').'getPetSpaceMobileListById/'.$user_id;
                $myVenueRequest=Http::get($myVenueUrl);
                $myVenueResponse=$myVenueRequest->json();
                $data['my_venue']=$myVenueResponse['data'];
                //dd( $data['my_venue']);
  
  
  
                //my service
  
                $myServiceUrl=env('API').'getPetServiceMobileListById/'.$user_id;
                $myServiceRequest=Http::get($myServiceUrl);
                $myServiceResponse=$myServiceRequest->json();
                $data['my_service']=$myServiceResponse['data'];
                //dd( $data['my_service']);
  
  
                
                return view('/profile/profile',$data);
              
             }

        }
        else{
            return redirect()->back()-with('message','login first');
        }
       
                     
        // $user_id=$request->session()->get('user_id');
       
                     
        // if(!$user_id){



        //     return redirect('/')->with('warning','Please Login First');
        // }
        // else{

            

        //     $user_id=  $request->session()->get('user_id');
        //   //profile
        //  $registerDataUrl=env('API').'getRegistrationDetails/'.$user_id;
      
        // $registerDetailsRequest=Http::get($registerDataUrl);
        // $registerDetailsResponse=$registerDetailsRequest->json();
        
        //       $profile_data= $registerDetailsResponse['data'];
        //       dd($profile_data);
        //       if($registerDetailsResponse['Success']==false){
        //         return redirect('/register_view');
        //       }
        //       else{
                        
        //              $data['collection'] = (new Collection($profile_data));
              
        //       //my venue
        //       $myVenueUrl=env('API').'getPetSpaceMobileListById/'.$user_id;
        //       $myVenueRequest=Http::get($myVenueUrl);
        //       $myVenueResponse=$myVenueRequest->json();
        //       $data['my_venue']=$myVenueResponse['data'];
        //       //dd( $data['my_venue']);



        //       //my service

        //       $myServiceUrl=env('API').'getPetServiceMobileListById/'.$user_id;
        //       $myServiceRequest=Http::get($myServiceUrl);
        //       $myServiceResponse=$myServiceRequest->json();
        //       $data['my_service']=$myServiceResponse['data'];
        //       //dd( $data['my_service']);


              
        //        return view('/profile/profile',$data);

        //       }
                   
              
       // }

   

    //    $register_data=$registerDetailsResponse['data'];

    //     $collection = (new Collection($register_data));
       // dd($collection);
      
        
    
    }
    
    
    public function update_Profile(Request $request){

        try{  
             $update_mail=$request->update_mail;
             $update_number=$request->update_number;
             $update_address=$request->update_address;
             $user_id =$request->session()->get('user_id');
           // dd($user_id);
            $profileData=[
                'user_id'=>$user_id,
                'email'=>$update_mail,
                'contact_number'=>$update_number,
                'address'=>$update_address
               
            ];
            //dd($profileData);

            // "user_id": "wfLB4hhiZaWISswbtPAGmAhwDm52",
            // "name": "uthayakumar",
            // "contact_number": "9042973776",
            // "img": "http://img/uk.com",
            // "gender": 0,
            // "email": "uthaya363@gmail.com",
            // "address": "New address"
        
            $editProfileUrl=env('API').'updateRegistrationDetails';
           // dd($editProfileUrl);
            $editProfileRequest=Http::put($editProfileUrl,$profileData);
            $editProfileResponse=$editProfileRequest->json();
            //dd($editProfileResponse);
          return redirect('/profile')->with('message','your profile updated');
        }
        catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }

    }

    //allimages-details

    public function allimages(){
        return view('/photos/photos');
    }

    
  

    function insert_login_details(Request $request){
        
        $mobile_number=$request->mobile_number;
        
        
      /*   $response = Http::post('http://example.com',[
                'name'=> $name,
                'contact'=>$contact,
     ]
     ); */

        return response()->json(['status' => 'insert successfully','mobile_number'=>$mobile_number]);
    }
   
    
    function pet_host_details(Request $request){
        $select_category=$request->select_category;
     return response()->json(['status' => 'insert successfully','select_category'=> $select_category]);
    }

    function pet_host(Request $request){

        $petSpaceUrl= env('API').'getAllPetSpace';
       
        $petSpaceRequest = Http::get($petSpaceUrl);
  
        $petSpaceResponse = $petSpaceRequest->json();
      


        

        
        $pet_space=$petSpaceResponse['data'];
        
       
        $PetSpaceCollection = collect($pet_space);
        //dd($PetSpaceCollection);
        $filtered = $PetSpaceCollection->filter(function ($value, $key) {
               
            return $value['approved']==true;
        });
    
        //dd($filtered->all());
        //dd($filtered->all());
           

        $collection = (new Collection($filtered->all()))->paginate(8);

        // $collection = (new Collection($pet_space))->paginate(8);
       // dd($collection);
        return view('petspace/pet_host',compact('collection'));
      
    }



}
