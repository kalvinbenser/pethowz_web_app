<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Support\Collection;


class ServiceController extends Controller
{

    public function test(Request $request){

        // $user_id=$request->session()->get('user_id');
        // if($user_id){

        //     $registerDataUrl=env('API').'getRegistrationDetails/'.$user_id;
         
        //     $registerDetailsRequest=Http::get($registerDataUrl);
        //     $registerDetailsResponse=$registerDetailsRequest->json();
        //      //dd($registerDetailsResponse);
        //      if($registerDetailsResponse['Success']==true){
                
           

            // $filteredArray = Arr::where($myArray, function ($value, $key) {
            //     return $value['type'] == 1;
            // });
                   

            // dd($filteredArray);

                return view("test");
        //      }
        //      else{
        //         return redirect('register_view');
        //      }

        // }
        // else{
        //     return redirect()->back()-with('message','login first');
        // }
       
        
    }
    // ******************************** service-form ******************************** \\
    public function service_form( Request $request){
        $user_id=$request->session()->get('user_id');
        if(isset($user_id)){
            $petSelfUrl=env('API').'getSelfDescription/'.$user_id;
          
            $petSelfRequest=Http::get($petSelfUrl);
            $petSelfResponse=$petSelfRequest->json();
            if($petSelfResponse['Success']==false){
                return redirect('add_your_self');
            }
            else{
                return view('/petservice/pet_service_form');
            }
        }
        else{
           return redirect()->back()->with('warning','Please Login');
        }
        
     
    }

    public function create_service(Request $request){

        try {
            // $validated = $request->validate([
            //      'venue' => 'required',
            //      'select_service'=>'required',
            //      'service_detail'=>'required',
            //      'option'=>'required',
            //      'location'=>'required',
            //  ]);

            $venue=$request->venue_name;
            $location=$request->location;
            $service_detail=$request->service_detail;
            $options_id=$request->option;
            $services_id=$request->select_service;
            $cost=$request->cost_per_hour;
            $user_id=$request->session()->get('user_id');;
            $image= $request->image;
    
               //image upload
           
            //    $imageName = time().'.'.$request->file('image')->guessExtension();
            //     $request->image->move(public_path('images/service'),$imageName);
    
                //************************** Pet Service API****************************\\
            $petServiceData=[
                "user_id"=>$user_id,
                "venue_name"=>$venue,
                "service_details"=>$service_detail,
                "services_id"=>$services_id,
                "cost_per_hour"=>$cost,
                "location"=>$location,
                "options_id"=>$options_id,
                "image"=>$image
            ];
    
            $petServiceUrl=env('API').'createPetService';
          
            $petServiceRequest=Http::post($petServiceUrl,$petServiceData);
            $petServiceResponse=$petServiceRequest->json();
            //dd($petServiceResponse);
           
           
            //  return redirect('/')->with('message','your Pet Service Added');
            return response()->json(['response'=> $petServiceResponse]);
          
        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
          }
       
       
    }
     //end service form

     // ******************************** petspace-form ******************************** \\
        //bookingform-details

        public function pet_space_form(Request $request){

            $user_id=$request->session()->get('user_id');
            if(isset($user_id)){
                $petSelfUrl=env('API').'getSelfDescription/'.$user_id;
              
                $petSelfRequest=Http::get($petSelfUrl);
                $petSelfResponse=$petSelfRequest->json();
                if($petSelfResponse['Success']==false){
                    return redirect('add_your_self');
                }
                else{
                    return view('/petspace/pet_space_form');
                }
            }
            else{
                return redirect()->back()->with('warning','Please Login');
            }
             
            
        }
    public function pet_space_create(Request $request){

        try{
            //    $validated = $request->validate([
            //    'venue_category' => 'required',
            //     'venue' => 'required',
            //     'cost_per_hour'=>'required',
            //     'select_service'=>'required',
            //     'service_cost'=>'required',
            //     'options'=>'required',
            //     'location'=>'required',
            //     'amenities'=>'required',
            //     'image'=>'required',
            // ]);
            $venue= $request->venue;
               $user_id=$request->session()->get('user_id');
               $venue_category=$request->venue_category;
         // dd($venue_category);
            $select_service=$request->select_service;
            $service_cost=$request->service_cost;
            $cost_per_hour=$request->cost_per_hour;
            $venue_name=$request->venue;
            // $service_cost=100;
            //$service_cost=$request->service_cost;
            $options=$request->option;
            $location=$request->location;
            $amenities=$request->amenities;
            $imageName=$request->image;
            
   
    
            $petSpaceData=[
                "user_id"=> $user_id,
                "venue_category"=>$venue_category,
                "venue_name"=> $venue,         
                "cost_per_hour"=> $cost_per_hour,
                "amenities_id"=>$amenities,
                "options_id"=>$options,
                "location"=>$location,
                "service_cost"=> $service_cost,
                "service_id"=> $select_service,
                "image"=>$imageName
            ];
            // dd($petSpaceData);
           $petSpaceUrl=env('API').'createPetSpace';
           $petSpaceRequest=Http::post($petSpaceUrl,$petSpaceData);
           $petSpaceResponse=$petSpaceRequest->json();
        //  dd($petSpaceResponse);
         return response()->json(['response'=>$petSpaceResponse]);
          
        
     
        }
        catch(Exception $e){
            echo 'message: '.$e->getMessage();
        }

     

    }

    //service category

    public function service_category(){
        $petSpaceUrl=env('API').'getAllPetSpace';
        $petSpaceRequest=Http::get($petSpaceUrl);
        $petSpaceResponse=$petSpaceRequest->json();
        //dd($petSpaceResponse['data']);

        $PetSpaceCollection = collect($petSpaceResponse['data']['venue_name']);
        dd($PetSpaceCollection);
        $filtered = $PetSpaceCollection->filter(function ($value, $key) {
            // return $value['approved']==true;
            return $value['service_id'];
        });


    }
  


}