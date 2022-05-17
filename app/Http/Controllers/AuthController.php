<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    public function register(){
        return view('auth/register');
    }
<<<<<<< HEAD

    public function reg(){
        return view('auth/reg');
=======
    public function sitting(){
        return view('/service/sitting/sitting');
>>>>>>> 358eb4a6d93d076f4c594985f283bd3b1e6d6a5b
    }
}
