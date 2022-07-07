<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    
//******************   user Login , Logout***************************** */
public function user_login(Request $request){
    $user_id=$request->user_id;
       
    if($request->session()->get('user_id')){
        $request->session()->forget('user_id');
    }

    $request->session()->put('user_id', $user_id);
    return response()->json(['status'=>'login successfully','user_id'=>$user_id]);
    //  return redirect()->back()->with('message','login successfull');
}

public function user_logout(Request $request){
    if($request->session()->has('user_id')){
        $request->session()->forget('user_id');
        return redirect('/');
    }
}

         public function register( Request $request){
               
        if(!$request->session()->get('user_id')){
            return redirect('/')->with('warning','Please Login First');
        }
        else{
            $user_id=  $request->session()->get('user_id');
          
            $registerDataUrl=env('API').'getRegistrationDetails/'.$user_id;
         
           $registerDetailsRequest=Http::get($registerDataUrl);
           $registerDetailsResponse=$registerDetailsRequest->json();
        
                 $profile_data= $registerDetailsResponse['data'];
                 //dd($profile_data);
                 if($registerDetailsResponse['Success']==false){
                   return redirect('/register_view');
                 }
                 else{
                     return redirect('/');
                 }

        }

       // return view('/register/register');
        }


        public function register_view(Request $request){
            $user_id=$request->session()->get('user_id');
            if($user_id){
                return view('/register/register');
            }
            else{
               return redirect('/')->with('Login First');  
            }
            
        }
    
        //regiter form details
    
        // function insert_register(Request $request){

        //     try{

        //         $validated = $request->validate([
        //             'name' => 'required',
        //             'mail'=>'required',
        //             'number'=>'required',
        //             'address'=>'required',
        //             'gender'=>'required',
        //             'image'=>'required',
        //         ]);
        //         $user_id=$request->session()->get('user_id');
        //         $name=$request->name;
        //         $mail=$request->mail;
        //         $number=$request->number;
        //         $address=$request->address;
        //         $gender=$request->gender;
    
    
        //             //upload image
                
        //             $imageName = time().'.'.$request->file('image')->guessExtension();
        //             $request->image->move(public_path('images/profile'),$imageName);
                                       
        //           //API for create Registeration
        //             $data=[
        //                 "user_id"=> $user_id,
        //                 "name"=> $name,
        //                 "contact_number"=> $number,
        //                 "img"=> $imageName,
        //                 "gender"=> $gender,
        //                 "email"=> $mail,
        //                 "address"=>$address
        //             ];

        //             dd($data);
        //             $url=  env('API').'createRegistration';
        //             $request = Http::post($url,$data );
        //             $response=  $request->json();
        //          //   dd($response);
                  

        //      return redirect("/")->with('message','registeration successfull');
        //         //  return view('home/index',compact('response'));
     

        //     }
        //     catch(Exception $e){
        //         echo 'message'.$e;
        //     }

        //               }


          
           public function create_register( Request $request){

       
            $validated = $request->validate([
                'name' => 'required',
                'mail'=>'required',
                'number'=>'required',
                'address'=>'required',
                'gender'=>'required',
                'image'=>'required',
            ]);
             $image=$request->image;
            
             $user_id=$request->session()->get('user_id');
             $name=$request->name;
             $mail=$request->mail;
             $number=$request->number;
             $address=$request->address;
             $gender=$request->gender;
             $datas=[
                "user_id"=> $user_id,
                "name"=> $name,
                "contact_number"=> $number,
                "img"=> $image,
                "gender"=> $gender,
                "email"=> $mail,
                "address"=>$address
            ];
            
            // dd($datas);
            $url=  env('API').'createRegistration';
            $request = Http::post($url,$datas);
            $response=  $request->json();
           
          
            return response()->json(['image'=>$image,'datas'=>$datas,'response'=>$response]);
           }           


           


}
