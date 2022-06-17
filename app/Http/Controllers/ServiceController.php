<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServiceController extends Controller
{
    // ******************************** service-form ******************************** \\
    public function service_form(){
        return view('/service/form/service_form');
    }

    public function create_service(Request $request){

        try {

            $venue=$request->venue;
            //$location=$request->location;
            $location="anna nager";
            $service_detail=$request->service_detail;
            $options_id=$request->option;
            $services_id=$request->select_service;
            $cost=$request->cost_per_hour;
            $user_id="123";
    
    
               //image upload
           
               $imageName = time().'.'.$request->file('image')->guessExtension();
                $request->image->move(public_path('images/service'),$imageName);
    
                //************************** Pet Service API****************************\\
            $petServiceData=[
                "user_id"=>$user_id,
                "venue_name"=>$venue,
                "service_details"=>$service_detail,
                "services_id"=>$services_id,
                "cost_per_hour"=>$cost,
                "location"=>$location,
                "options_id"=>$options_id,
               "image"=>$imageName
            ];
            $petServiceUrl=env('API').'createPetService';
          
            $petServiceRequest=Http::post($petServiceUrl,$petServiceData);
            $petServiceResponse=$petServiceRequest->json();
            // dd($petServiceResponse);
           
           
             return redirect('/service')->with('message','your Pet Service Added');
          
        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
          }
       
       
    }
     //end service form

     // ******************************** petspace-form ******************************** \\
        //bookingform-details

        public function pet_space_form(){
            return view('/booking-details/petspace_form/petspace_form');
        }
    public function pet_space_create(Request $request){

        try{
          

               $validated = $request->validate([
               'venue_category' => 'required',
                'venue' => 'required',
                'cost_per_hour'=>'required',
                'select_service'=>'required',
                'servive_details'=>'required',
                'options'=>'required',
                'location'=>'required',
                'amenities'=>'required',
                'image'=>'required',
            ]);

            $user_id="1234";
            // /$venue_category=$request->venue_category;
            $venue_category="snake";
            // $select_service=$request->select_service;
            $select_service=1;
            $cost_per_hour=$request->cost_per_hour;
            $venue_details=$request->venue;
            $servive_details=$request->servive_details;
            $options=$request->options;
            //$location=$request->location;
            $location="Ambature";
            $amenities=$request->amenities;
            

            $imageName = time().'.'.$request->file('image')->guessExtension();
        //upload image
    
          $request->image->move(public_path('images/petspace/images'),$imageName);
        //   $image_url='imap.com/'.$imageName;
    
            $petSpaceData=[
                "user_id"=> $user_id,
                "venue_cat"=>$venue_category,
                "venue_details"=> $venue_details,
                "cost_per_hour"=> $cost_per_hour,
                "amenities_id"=>$amenities,
                "options_id"=>$options,
                "location"=>$location,
                "service"=> $servive_details,
                "service_count"=> $select_service
            ];
              dd($petSpaceData);
        //    $petSpaceUrl=env('API').'createPetSpace';
        //    $petSpaceRequest=Http::post($petSpaceUrl,$petSpaceData);
        //    $petSpaceResponse=$petSpaceRequest->json();
        //    dd($petSpaceResponse);

        
        return redirect('/pethost/pethost')->with('message','your Pet Space Added');
        }
        catch(Exception $e){
            echo 'message: '.$e->getMessage();
        }

     

    }

    //create Booking

    public function create_booking(Request $request){

        $user_service=$request->user_service;
        $user_amount=$request->user_amount;
        $data=[
            'service'=>$user_service,
            'amount'=>$user_amount
        ];
        //dd($data);
        return back()->with('message','booked successfully');

    }

}