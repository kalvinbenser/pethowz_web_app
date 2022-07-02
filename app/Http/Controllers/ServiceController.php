<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ServiceController extends Controller
{

    public function test(){
        return view("test");
    }
    // ******************************** service-form ******************************** \\
    public function service_form( Request $request){

        if(!$request->session()->get('user_id')){
            return redirect('/')->with('warning','Please Login First');
        }
        else{
            return view('/service/form/service_form');
        }
        
     
    }

    public function create_service(Request $request){

        try {
            $validated = $request->validate([
                 'venue' => 'required',
                 'cost_per_hour'=>'required',
                 'select_service'=>'required',
                 'service_detail'=>'required',
                 'option'=>'required',
                 'location'=>'required',
               
                 'image'=>'required',
             ]);

            $venue=$request->venue;
            $location=$request->location;
            $service_detail=$request->service_detail;
            $options_id=$request->option;
            $services_id=$request->select_service;
            $cost=$request->cost_per_hour;
            $user_id=$request->session()->get('user_id');;
    
    
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
            //dd($petServiceResponse);
           
           
             return redirect('/')->with('message','your Pet Service Added');
          
        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
          }
       
       
    }
     //end service form

     // ******************************** petspace-form ******************************** \\
        //bookingform-details

        public function pet_space_form(Request $request){

            if(!$request->session()->get('user_id')){
                return redirect('/')->with('warning','Please Login First');
            }
            else{
                return view('/booking-details/petspace_form/petspace_form');
            }
            
        }
    public function pet_space_create(Request $request){

        try{
          

               $validated = $request->validate([
               'venue_category' => 'required',
                'venue' => 'required',
                'cost_per_hour'=>'required',
                'select_service'=>'required',
                'service_cost'=>'required',
                'options'=>'required',
                'location'=>'required',
                'amenities'=>'required',
                'image'=>'required',
            ]);

            $user_id=$request->session()->get('user_id');
            $venue_category=$request->venue_category;
         //   dd($venue_category);
            $select_service=$request->select_service;
            $cost_per_hour=$request->cost_per_hour;
            $venue_details=$request->venue;
            $service_cost=$request->service_cost;
            $options=$request->options;
            $location=$request->location;
            $amenities=$request->amenities;
            
             // dd($venue_category);
            $imageName = time().'.'.$request->file('image')->guessExtension();
        //upload image
    
          $request->image->move(public_path('images/petspace/images'),$imageName);
        //   $image_url='imap.com/'.$imageName;
    
            $petSpaceData=[
                "user_id"=> $user_id,
                "venue_category"=>$venue_category,
                "venue_name"=> $venue_details,
               
                "cost_per_hour"=> $cost_per_hour,
                "amenities_id"=>$amenities,
                "options_id"=>$options,
                "location"=>$location,
                "service_cost"=> $service_cost,
                "service_id"=> $select_service,
                "image"=>$imageName
            ];
              //dd($petSpaceData);
           $petSpaceUrl=env('API').'createPetSpace';
           $petSpaceRequest=Http::post($petSpaceUrl,$petSpaceData);
           $petSpaceResponse=$petSpaceRequest->json();
        //    dd($petSpaceResponse);
           if($petSpaceResponse['Message']=="SUCCESS"){
            return redirect('/')->with('message','your Pet Space Added');
           }
           else{
           
            return redirect()->back()->with('error',"Pet spaces added failed");
           }
          
        
     
        }
        catch(Exception $e){
            echo 'message: '.$e->getMessage();
        }

     

    }

  


}