<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    // public function login(){
    //     return view('auth/login');
    // }
    // public function register(){
    //     return view('auth/register');
    // }

    // public function reg(){
    //     return view('auth/reg');
    // }


         //register-details

         public function register(){
            return view('/register/register');
        }
    
        //regiter form details
    
        function insert_register(Request $request){

            try{

                $name=$request->name;
                $mail=$request->mail;
                $number=$request->number;
                $address=$request->address;
                $gender=$request->gender;
    
    
                    //upload image
                
                    $imageName = time().'.'.$request->file('image')->guessExtension();
                    $request->image->move(public_path('images/profile'),$imageName);
 

                   $data=[
                    'image'=>$imageName,
                    'name'=>$name,
                    'mail'=>$mail,
                    'number'=>$number,
                    'address'=>$address,
                    'gender'=>$gender
                ];
                   
                    // dd($data);  
                   
                  //API for create Registeration
                    $data=[
                        "user_id"=> "12312",
                        "name"=> $name,
                        "contact_number"=> $number,
                        "img"=> $imageName,
                        "gender"=> $gender,
                        "email"=> $mail,
                        "address"=>$address
                    ];
                    $url=  env('API').'createRegistration';
                    $request = Http::post($url,$data );
                    $response=  $request->json();
                  //  dd($response);

                 return redirect("/add_your_self")->with('message','registeration successfull');
     

            }
            catch(Exception $e){
                echo 'message'.$e;
            }

                      }
}
