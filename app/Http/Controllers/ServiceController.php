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

        
       
        $venue=$request->venue;
        $location=$request->location;
        $service_detail=$request->service_detail;
        $option=$request->option;
        $select_service=$request->select_service;
        $cost=$request->cost_per_hour;
        $imageName = time().'.'.$request->file('image')->guessExtension();
    //upload image

      $request->image->move(public_path('images/service'),$imageName);
    //   $image_url='imap.com/'.$imageName;

        $data=[
            'venue'=>$venue,
            'location'=>$location,
            'service_detail'=>$service_detail,
            'option'=>$option,
            'select_service'=>$select_service,
            'cost_per_hour'=>$cost,
            'image'=>$imageName,
        ];
     


        $response = Http::post('http://13.232.59.246:1337/api/v1/getAllPetService', [
           
        "user_id"=> "369",
        "venue_name"=>"ksksk",
        "service_details"=>"test4",
        "services_id"=>[
            1,
            2,
            3
        ],
        "cost_per_hour"=> 1000,
        "location"=> "test369",
        "options_id"=> [
            1,
            2,
            3
        ],
        "image"=> "test369",
        ]);

        return response()->json(["status"=>200,"data"=>"kalvin"]);

    }
     //end service form

     // ******************************** petspace-form ******************************** \\
        //bookingform-details

        public function bookingform(){
            return view('/booking-details/petspace_form/petspace_form');
        }

    public function booking_create(Request $request){

        $venue_category=$request->venue_category;
        $select_service=$request->select_service;
        $cost=$request->cost_per_hour;
        $venue=$request->venue;
        $servive_details=$request->servive_details;
        $options=$request->options;
        $location=$request->location;
        $amenities=$request->amenities;
       
       
       
        $imageName = time().'.'.$request->file('image')->guessExtension();
    //upload image

      $request->image->move(public_path('images/petspace/images'),$imageName);
    //   $image_url='imap.com/'.$imageName;

        $data=[
            'venue_category'=>$venue_category,
            'select_service'=>$select_service,
            'cost_per_hour'=>$cost,
            'venue'=>$venue,
            'servive_details'=>$servive_details,
            'options'=>$options,
            'location'=>$location,
            'amenities'=>$amenities,          
            'image'=>$imageName,
        ];
      //dd($data);
   
     
         dd($data);

    }

}