<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 


class HomeController extends Controller
{
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

    function insert_login_details(Request $request){
        
        $mobile_number=$request->mobile_number;
        
        
      /*   $response = Http::post('http://example.com',[
                'name'=> $name,
                'contact'=>$contact,
     ]
     ); */

        return response()->json(['status' => 'insert successfully','mobile_number'=>$mobile_number]);
    }
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

    function insert_booking_form_details(Request $request){
        $select_category=$request->select_category;
        $select_serv=$request->select_serv;
        $venue_details=$request-> venue_details;
        $serv_details=$request->serv_details;
        $select_applicable=$request->select_applicable;
        $select_amenities=$request->select_amenities;
      //  $select_profile=$request->select_profile;
        
       /* $response = Http::post('http://example.com',[
                'name'=> $name,
                'contact'=>$contact,
                 'pet name'=>$pet_name,
                 'pet count'=>$pet_count,
                 'number of days'=>$no_of_days
     ]
     ); */

        return response()->json(['status' => 'insert successfully', 'select_category'=> $select_category,'select_serv'=>$select_serv,'venue_details'=>$venue_details,'serv_details'=>$serv_details0,'select_applicable'=>$select_applicable,'select_amenities'=>$select_amenities]);
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
