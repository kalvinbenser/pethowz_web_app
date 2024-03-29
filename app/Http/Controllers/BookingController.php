<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;
use App\Support\Collection;



class BookingController extends Controller
{
    //********************************    petspace booking ***********************************\\

    public function pet_space_booking(Request $request, $s_id)
    {


        // pet space
        $petSpaceUrl = env('API') . 'getPetSpaceById/' . $s_id;


        $petSpaceRequest = Http::get($petSpaceUrl);
        $petSpaceData = $petSpaceRequest->json();
        $data['detail'] = $petSpaceData['data'][0];
        // dd($data['detail']);
        $user_id = $data['detail']['user_id'];

        // self intro

        $selfIntroUrl = env('API') . 'getSelfDescription/' . $user_id;
        $selfIntroRequest = Http::get($selfIntroUrl);
        $selfIntroResponse = $selfIntroRequest->json();

        $data['self'] = $selfIntroResponse['data'];

        //user data
        $regUrl = env('API') . 'getRegistrationDetails/' . $user_id;
        $regRequest = Http::get($regUrl);
        $regResponse = $regRequest->json();
        //dd($selfIntroResponse['data']);
        $data['reg'] = $regResponse['data'];
        // dd( $data['reg'] );
        //s_id
        //service slot
        $slotUrl = env('API') . 'getSlotByPetSpaceId/' . $s_id;
        $slotRequest = Http::get($slotUrl);
        $slotResponse = $slotRequest->json();
        //dd($slotResponse);
        $data['slot'] = $slotResponse['data'];


        $data['s_id'] = $s_id;

        return view('booking/pet_space_booking', $data);
    }



    //create pet space Booking

    public function create_pet_space_booking_form(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        if ($user_id) {
            $user_service = $request->user_service;
            $user_price = $request->user_price;
            $user_amount = $request->user_amount;
            $venue_name = $request->venue_name;
            $pet_space_id = $request->p_space_id;

            $data = [
                'user_service' => $user_service,
                'user_amount' => $user_amount,
                'user_price' => $user_price,
                'pet_space_id' => $pet_space_id,
                'venue_name' => $venue_name

            ];

            // dd($data);

            //$service_cart_id=$request->ser_cart_id;
            if ($request->session()->has('user_service')) {
                $request->session()->forget('user_service');
            }


            if ($request->session()->has('user_amount')) {
                $request->session()->forget('user_amount');
            }

            if ($request->session()->has('venue_name')) {
                $request->session()->forget('venue_name');
            }



            $request->session()->put('user_service', $user_service);
            $request->session()->put('user_amount', $user_amount);
            $request->session()->put('venue_name', $venue_name);
            //dd($request->session()->get('user_amount'));


            return view('booking/pet_space_booking_form', compact('pet_space_id'));
        } else {
            return redirect()->back()->with('warning', 'Please Login');
        }
    }

    function pet_space_booking_form()
    {
        return view('booking/pet_space_booking_form');
    }





    // create pet space booking 
    function create_pet_space_booking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact' => 'required',
            'pet_name' => 'required',
            'pet_count' => 'required',
            'no_days'=>'required',
            'service_type'=>'required'
       
        ]);
        if ($validator->passes()) {
            $name = $request->name;
            $contact = $request->contact;
            $pet_name = $request->pet_name;
            $pet_count = $request->pet_count;
            $no_of_days = $request->no_days;
            $service_type = $request->service_type;
            $service = $request->session()->get('user_service');
            if ($service == null) {
                $service_array = null;
            } else {
                $service_array = preg_split("/[,]/", $service);
            }
            $cost_per_hour = $request->session()->get('user_amount');
            $user_id = $request->session()->get('user_id');
            $pet_space_id = $request->pet_space_id;
            //dd($pet_space_id);
            $venue_name = $request->session()->get('venue_name');
            // dd($service_type);


            $petSpaceData = [
                'service' => $service_array,
                'cost_per_hour' => $cost_per_hour,
                'service_type' => $service_type,
                'days' => $no_of_days,
                'pet_count' => $pet_count,
                'pet_name' => $pet_name,
                'contact_number' => $contact,
                'name' => $name,
                'user_id' => $user_id,
                "venue_name" => $venue_name,
                "pet_space_id" => $pet_space_id

            ];

            //Message

            //dd($petSpaceData);
            $petSpaceUrl = env('API') . 'createPetSpaceBooking';
            $petSpaceRequest = Http::post($petSpaceUrl, $petSpaceData);
            $petSpaceResponse = $petSpaceRequest->json();


            return response()->json(['success' => 'Added new records.', "petSpaceResponse" => $petSpaceResponse]);
        }

        return response()->json(['error' => $validator->errors()]);

        // dd($petSpaceResponse);
        // if ($petSpaceResponse['Success'] == true) {

        //     return redirect('/')->with('message', 'Pet space booked successfuly');
        // } else {
        //     $request->session()->put('custom_error', $petSpaceResponse['Message']);
        //     $route = '/pet_space_booking/' . $pet_space_id;
        //     return redirect($route);
        // }
    }



    //********************************   pet service  booking **********************************\\


    public function pet_service_booking(Request $request, $s_id)
    {


        // pet space
        $petServiceUrl = env('API') . 'getPetServiceById/' . $s_id;


        $petServiceRequest = Http::get($petServiceUrl);
        $petServiceData = $petServiceRequest->json();
        $data['detail'] = $petServiceData['data'];
        $user_id = $data['detail']['user_id'];
        // dd( $data['detail']);
        // self intro

        $selfIntroUrl = env('API') . 'getSelfDescription/' . $user_id;
        $selfIntroRequest = Http::get($selfIntroUrl);
        $selfIntroResponse = $selfIntroRequest->json();

        $data['self'] = $selfIntroResponse['data'];

        //user data
        $regUrl = env('API') . 'getRegistrationDetails/' . $user_id;
        $regRequest = Http::get($regUrl);
        $regResponse = $regRequest->json();
        //dd($selfIntroResponse['data']);
        $data['reg'] = $regResponse['data'];
        //service slot
        $slotUrl = env('API') . 'getSlotByPetServiceId/' . $s_id;
        $slotRequest = Http::get($slotUrl);
        $slotResponse = $slotRequest->json();
        //dd($slotResponse);
        $data['slot'] = $slotResponse['data'];
        $data['s_id'] = $s_id;



        return view('/booking/pet_service_booking', $data)->with("no", 1);
    }


    //create pet service  Booking

    public function create_pet_service_booking_form(Request $request)
    {

        $user_id = $request->session()->get('user_id');
        if ($user_id) {
            $user_service = $request->user_service;
            $user_amount = $request->user_amount;
            $venue_name = $request->venue_name;
            $user_price = $request->user_price;
            $pet_service_id = $request->p_service_id;
            $data = [
                'user_service' => $user_service,
                'user_amount' => $user_amount,
                'user_price' => $user_price,

                'venue_name' => $venue_name

            ];
            //dd($data);

            if (!$user_service) {
                return redirect()->back()->with('warning', 'please select service');
            }

            //$service_cart_id=$request->ser_cart_id;
            if ($request->session()->has('user_service')) {
                $request->session()->forget('user_service');
            }


            if ($request->session()->has('user_amount')) {
                $request->session()->forget('user_amount');
            }

            if ($request->session()->has('venue_name')) {
                $request->session()->forget('venue_name');
            }



            $request->session()->put('user_service', $user_service);
            $request->session()->put('user_amount', $user_amount);
            $request->session()->put('venue_name', $venue_name);

            //  dd($request->session()->get('user_amount'));

            return view('booking/pet_service_booking_form', compact('pet_service_id'));
        } else {
            return redirect()->back()->with('warning', 'Please Login');
        }
    }


    function pet_service_booking_form()
    {
        return view('booking/pet_service_booking_form');
    }



    // create pet service booking 
    public function create_pet_service_booking(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'contact' => 'required',
                'pet_name' => 'required',
                'pet_count' => 'required',
                'no_days'=>'required',
                'service_type'=>'required'
           
            ]);
            if ($validator->passes()) {
                $name = $request->name;
                $contact = $request->contact;
                $pet_name = $request->pet_name;
                $pet_count = $request->pet_count;
                $no_of_days = $request->no_days;
                $service_type = $request->service_type;
                $service = $request->session()->get('user_service');
                $service_array = preg_split("/[,]/", $service);
                $cost_per_hour = $request->session()->get('user_amount');
                $user_id = $request->session()->get('user_id');
                $venue_name = $request->session()->get('venue_name');
                $pet_service_id = $request->pet_service_id;
                // dd($service_type);
    
    
                $petServiceData = [
                    'service' => $service_array,
                    'cost_per_hour' => $cost_per_hour,
                    'service_type' => $service_type,
                    'days' => $no_of_days,
                    'pet_count' => $pet_count,
                    'pet_name' => $pet_name,
                    'contact_number' => $contact,
                    'name' => $name,
                    'user_id' => $user_id,
                    "venue_name" => $venue_name,
                    "pet_service_id" => $pet_service_id
    
                ];
    
    
                //dd($petServiceData);
                $petServiceUrl = env('API') . 'createPetServiceBooking';
                $petServiceRequest = Http::post($petServiceUrl, $petServiceData);
                $petServiceResponse = $petServiceRequest->json();
                //  dd($petServiceResponse);
                return response()->json(['success'=>'Added new records.',"petServiceResponse"=>$petServiceResponse]);
                
            }
    
            return response()->json(['error'=>$validator->errors()]);
          

            // if ($petServiceResponse['Success'] == true) {

            //     return redirect('/')->with('message', 'Pet service booked successfuly');
            // } else {
            //     $request->session()->put('custom_error', $petServiceResponse['Message']);
            //     return redirect()->back();
            // }
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }
}
