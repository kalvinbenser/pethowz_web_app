<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 


class HomeController extends Controller
{
    // index view
      public function index(){
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

    //pethost_details

    public function pethost_details(){
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

     //add-details

     public function add(){
        return view('/add/add');
    }

    function insert_booking_details(Request $request){
        $name=$request->name;
        $contact=$request->contact;
        $pet_name=$request->pet_name;
        $pet_count=$request->pet_count;
        $no_of_days=$request->no_of_days;
        
       /* $response = Http::post('http://example.com',[
                'name'=> $name,
                'contact'=>$contact,
                 'pet name'=>$pet_name,
                 'pet count'=>$pet_count,
                 'number of days'=>$no_of_days
     ]
     ); */

        return response()->json(['status' => 'insert successfully', 'name'=> $name,'contact'=>$contact,'pet_name'=>$pet_name,'pet_count'=>$pet_count,'no_of_days'=>$no_of_days]);
    }

       //register-details

       public function register(){
        return view('/register/register');
    }
    //regiter form details
    function insert_register_details(Request $request){
        $profile_name=$request->profile_name;
        $profile_email=$request->profile_email;
        $profile_number=$request->profile_number;
        $profile_address=$request->profile_address;
       // $no_of_days=$request->no_of_days;
       return response()->json(['status' => 'insert successfully','profile_name'=> $profile_name,'profile_email'=>$profile_email,'profile_number'=>$profile_number,'profile_address'=>$profile_address]);
    }
    function insert_otp_details(Request $request){
        $mobile_otp=$request->mobile_otp;
        
       return response()->json(['status' => 'insert successfully','profile_name'=> $profile_name,'profile_email'=>$profile_email,'profile_number'=>$profile_number,'profile_address'=>$profile_address]);
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
        dd($data);

      

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
