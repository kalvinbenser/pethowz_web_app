<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 use App\Support\Collection;


class HomeController extends Controller
{

    // index view
      public function index(){


         //********************* Index Pet Space  ***************************\\

         $petSpaceData=[
        ];
        $petSpaceUrl= env('API').'getAllPetSpace';
       
        $petSpaceRequest = Http::get($petSpaceUrl,$petSpaceData);
  
        $petSpaceResponse = $petSpaceRequest->json();
        
        //dd($petSpaceResponse[data]);

        //**************************  Pet Service  ****************************\\
        $petServiceData=[
        ];
        $petServiceUrl=env('API').'getAllPetService';
      
        $petServiceRequest=Http::get($petServiceUrl,$petServiceData);
        $petServiceResponse=$petServiceRequest->json();
        //dd($petServiceResponse);
        $pet_service=$petServiceResponse['data'];
        // dd($pet_service);
        //
        $collection = (new Collection($pet_service))->paginate(8);
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
          $petServiceData=[
           
        ];
        $petServiceUrl=env('API').'getAllPetService';
      
        $petServiceRequest=Http::get($petServiceUrl,$petServiceData);
        $petServiceResponse=$petServiceRequest->json();
        //dd($petServiceResponse['data']);

        $pet_service=$petServiceResponse['data'];

        $collection = (new Collection($pet_service))->paginate(8);
       // dd($collection);
        return view('/service/service',compact('collection'));
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
        return view('/exclusive_petspaces/exclusive-petspaces',compact('collection'));
    //   return collection($pet_service);
    //  // dd($collection);
    //     $collect=collection();
    //     $newCollect -> filter( function ($value,$key) {
    //           $key='venue_category';
    //           $value==1;
    //           return true;
    //     });
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

    //petspace_details

    public function petspace_details(){
    
        return view('/petspace/pethost_details');
    }

    //terms_coditions

    public function terms_coditions(){
        return view('/terms_coditions/terms_coditions');
    }

     //booking-details

     public function bookingdetails(){
        return view('/booking-details/bookingdeteils');
    }
    // insert booking details
    function insert_booking_details(Request $request){
     try{  
        
        $validated = $request->validate([
            'name' => 'required',
             'contact' => 'required',
             'pet_name'=>'required',
             'pet_count'=>'required',
             'no_of_days'=>'required',
             'service_type'=>'required',
         ]);
            $name=$request->name;
            $contact=$request->contact;
            $pet_name=$request->pet_name;
            $pet_count=$request->pet_count;
            $no_of_days=$request->no_of_days;
           
            $service_type=$request->service_type;
            // dd($service_type);
    
       
        $petSpaceData=[
            'name'=>$name,
            'contact'=>$contact,
            'pet_name'=>$pet_name,
            'pet_count'=>$pet_count,
            'no_of_days'=>$no_of_days,
          
            'service_type'=>$service_type
        ];
        $petSpaceUrl=env('API').'createPetSpace';
        $petSpaceRequest=Http::post($petSpaceUrl,$petSpaceData);
        $petSpaceResponse=$petSpaceRequest->json();
      //  dd($data);
      return redirect('/service')->with('message','your Pet Service Added');
    }
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }

    }

     //add-details

     public function add_your_self(){
        return view('/add/add');
    }

      // add details
    
      public function test_data(Request $request){

        try{  
        
            $validated = $request->validate([
                'your_self' => 'required',
                 'experience' => 'required',
                 'service_your'=>'required|min:0',
                 'work_enjoy'=>'required',
                 'skill_qualification'=>'required',
                 'other_qualification'=>'required',
                 'category'=>'required',
             ]);
             $your_self=$request->your_self;
             $experience=$request->experience;
             $service_your=$request->service_your;
             $work_enjoy=$request->work_enjoy;           
             $skill_qualification=$request->skill_qualification;
             $other_qualification=$request->other_qualification;
             $category=$request->category;
        
           
            $addSelfData=[
                'your_self'=>$your_self,
                'experience'=>$experience,
                'service_your'=>$service_your,
                'work_enjoy'=>$work_enjoy,
                'skill_qualification'=>$skill_qualification,
                'other_qualification'=>$other_qualification,
                'category'=>$category
            ];
            $petSpaceUrl=env('API').'createSelfDescription';
            $petSpaceRequest=Http::post($petSpaceUrl,$addSelfData);
            $petSpaceResponse=$petSpaceRequest->json();
           // dd($data);
          return redirect('/pet_space_form')->with('message','your Pet Service Booking Added');
        }
        catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }

    }

  
  
    function insert_otp_details(Request $request){
        $mobile_otp1=$request->mobile_otp1;
        $mobile_otp2=$request->mobile_otp2;
        $mobile_otp3=$request->mobile_otp3;
        $mobile_otp4=$request->mobile_otp4;
        
       return response()->json(['status' => 'insert successfully','mobile_otp1'=> $mobile_otp1,'mobile_otp2'=>$mobile_otp2,'mobile_otp3'=>$mobile_otp3,'mobile_otp4'=>$mobile_otp4]);
    }

        //profile-details
     
         //************************** get profile ****************************\\

        public function profile( $reg_id){
        $registerDataUrl=env('API').'getRegistrationDetails/62b026923bd337e11267dbf0';
      
        $registerDetailsRequest=Http::get($registerDataUrl);
        $registerDetailsResponse=$registerDetailsRequest->json();
      // dd($registerDetailsResponse);

       $register_data=$registerDetailsResponse['data'];

        $collection = (new Collection($register_data));
       // dd($collection);
        return view('/profile/profile',compact('collection'));
    
    }
    
    
    public function update_Profile(Request $request){

        try{  
             $update_mail=$request->update_mail;
             $update_number=$request->update_number;
             $update_address=$request->update_address;
        
           
            $profileData=[
                'update_mail'=>$update_mail,
                'update_number'=>$update_number,
                'update_address'=>$update_address
               
            ];
            $editProfileUrl=env('API').'updateRegistrationDetails';
            $editProfileRequest=Http::put($editProfileUrl,$profileData);
            $editProfileResponse=$editProfileRequest->json();
            dd($data);
          return redirect('/profile/profile')->with('message','your datas are updated Added');
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

}
