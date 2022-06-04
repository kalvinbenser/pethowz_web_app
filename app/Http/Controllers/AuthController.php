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
                $imageName = time().'.'.$request->file('image')->guessExtension();
                //upload image
                $name=$request->name;
                $mail=$request->mail;
                $number=$request->number;
                $address=$request->address;
                $gender=$request->gender;
               
            
                  $request->image->move(public_path('images/profile'),$imageName);
                  $image_url='http://img/uk.com'.$imageName;
            
               
                $data=[
                    'image'=>$imageName,
                    'name'=>$name,
                    'mail'=>$mail,
                    'number'=>$number,
                    'address'=>$address,
                    'gender'=>$gender
                ];
                // dd($data);
        
                $response = Http::post('http://13.232.59.246:1337/api/v1/createRegistration', [
                    "user_id"=> "12312",
                    "name"=> $name,
                    "contact_number"=> $number,
                    "img"=> $image_url,
                    "gender"=> $gender,
                    "email"=> $mail,
                    "address"=>$address
                ]);

                return response()->json(["status"=>200,"data"=>$data]);
            }
}
