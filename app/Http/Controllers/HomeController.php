<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 use App\Support\Collection;


class HomeController extends Controller
{
   public function test(){
    $petServiceData=[
        "pending"=>true,
        "approved"=>false,
        "rejected"=>false
    ];
    $petServiceUrl=env('API').'getAllPetService';
  
    $petServiceRequest=Http::post($petServiceUrl,$petServiceData);
    $petServiceResponse=$petServiceRequest->json();
    $pet=$petServiceResponse['data'];
    // dd($pet);
       return view('test',compact('pet'));
   }

    // index view
      public function index(){


         //*********************  Pet Space  ***************************\\

         $petSpaceData=[
            "pending"=>true,
            "approved"=>false,
            "rejected"=>false,
        
           
        ];
        $petSpaceUrl= env('API').'getAllPetSpace';
       
        $petSpaceRequest = Http::post($petSpaceUrl,$petSpaceData);
  
        $petSpaceResponse = $petSpaceRequest->json();
        
        //dd($petSpaceResponse[data]);

        //************************** Pet Service  ****************************\\
        $petServiceData=[
            "pending"=>true,
            "approved"=>false,
            "rejected"=>false
        ];
        $petServiceUrl=env('API').'getAllPetService';
      
        $petServiceRequest=Http::post($petServiceUrl,$petServiceData);
        $petServiceResponse=$petServiceRequest->json();
        //dd($petServiceResponse);

        return view('home/index');
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
            "pending"=>true,
            "approved"=>false,
            "rejected"=>false
        ];
        $petServiceUrl=env('API').'getAllPetService';
      
        $petServiceRequest=Http::post($petServiceUrl,$petServiceData);
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
        return view('/exclusive_petspaces/exclusive-petspaces');
    }

      //house_apartment

      public function house_apartment(){
        return view('/house_apartment/house_apartment');
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
     try{   $name=$request->name;
            $contact=$request->contact;
            $pet_name=$request->pet_name;
            $pet_count=$request->pet_count;
            $no_of_days=$request->no_of_days;
            $select_service=$request->select_service;
            $service_type=$request->service_type;
    
       
        $petSpaceData=[
            'name'=>$name,
            'contact'=>$contact,
            'pet_name'=>$pet_name,
            'pet_count'=>$pet_count,
            'no_of_days'=>$no_of_days,
            'select_service'=>$select_service,
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
        $your_self=$request->your_self;
        $experience=$request->experience;
        $service_your=$request->service_your;
        $work_enjoy=$request->work_enjoy;
        $enjoy_work=$request->enjoy_work;
        $category=$request->category;
       
        $data=[
            'your_self'=>$your_self,
            'experience'=>$experience,
            'service_your'=>$service_your,
            'work_enjoy'=>$work_enjoy,
            'enjoy_work'=>$enjoy_work,
            'category'=>$category
        ];
      //  dd($data);
      return redirect('/pet_space_form')->with('message','your Pet Service Added');

      

    }

  
  
    function insert_otp_details(Request $request){
        $mobile_otp1=$request->mobile_otp1;
        $mobile_otp2=$request->mobile_otp2;
        $mobile_otp3=$request->mobile_otp3;
        $mobile_otp4=$request->mobile_otp4;
        
       return response()->json(['status' => 'insert successfully','mobile_otp1'=> $mobile_otp1,'mobile_otp2'=>$mobile_otp2,'mobile_otp3'=>$mobile_otp3,'mobile_otp4'=>$mobile_otp4]);
    }

        //profile-details

        public function profile(){
        return view('/profile/profile');
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
      
        
       /* $response = Http::post('http://example.com',[
                'name'=> $name,
                'contact'=>$contact,
                 'pet name'=>$pet_name,
                 'pet count'=>$pet_count,
                 'number of days'=>$no_of_days 
     ]
     ); */
     return response()->json(['status' => 'insert successfully','select_category'=> $select_category]);
    }

}
