<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index view

Route::get('/',[HomeController::class,'index']);
Route::get('/home/index',[HomeController::class,'index']);

//about

Route::get('/about',[HomeController::class,'about']);
Route::get('/privacy',[HomeController::class,'privacy']);


//sitting service

Route::get('/sitting',[HomeController::class,'sitting']);



//grooming service

// Route::get('/grooming',[HomeController::class,'grooming']);

// //walking service

// Route::get('/walking',[HomeController::class,'walking']);

// //breading service

// Route::get('/breading',[HomeController::class,'breading']);

// //training service

// Route::get('/training',[HomeController::class,'training']);

// //photography service

// Route::get('/photography',[HomeController::class,'photography']);



//pethost

Route::get('/pethost/pethost',[HomeController::class,'pethost']);

//exclusive_petspaces

Route::get('/exclusive_petspaces',[HomeController::class,'exclusive_petspaces']);

//house_apartment

Route::get('/house_apartment',[HomeController::class,'house_apartment']);



//terms_condition

Route::get('/terms_coditions',[HomeController::class,'terms_coditions']);


//add_details

Route::get('/add_your_self',[HomeController::class,'add_your_self']);
Route::post('/create_your_self',[HomeController::class,'create_your_self']);



//profile_details

// Route::get('/profile',[HomeController::class,'profile']);
// Route::get('/profile/{reg_id}/show',[HomeController::class,'profile']);
Route::get('/profile',[HomeController::class,'profile']);
Route::post('/update_Profile',[HomeController::class,'update_Profile']);

//allimages_details

Route::get('/allimages',[HomeController::class,'allimages']);

// login details

Route::post('/insert_login_details',[HomeController::class,'insert_login_details']);

// otp details

Route::post('/insert_otp_details',[HomeController::class,'insert_otp_details']);

//pethost details

Route::post('/pet_host_details',[HomeController::class,'pet_host_details']);
Route::get('/pet_host',[HomeController::class,'pet_host']);



// ********************* pet service *************************\\ 


Route::get('/service',[HomeController::class,'service']);
Route::get('/pet_service_form', [ServiceController::class,'service_form']);
Route::post('/create_service', [ServiceController::class,'create_service']);


//********************** end pet service ***********************\\



//bookingform_details

Route::get('/pet_space_form',[ServiceController::class,'pet_space_form']);
Route::post('/pet_space_create', [ServiceController::class,'pet_space_create']);
//create booking
Route::post('/create_booking',[ServiceController::class,'create_booking']);


Route::get('/test',[ServiceController::class,'test']);

//user session set

Route::post('/user_login',[AuthController::class,'user_login']);
Route::get('/user_logout',[AuthController::class,'user_logout']);

// service category
Route::get('/service_category',[ServiceController::class,'service_category']);
//close model

Route::post('/closeModel',[HomeController::class,'closeModel']);


require __DIR__.'/Auth.php';
require __DIR__.'/Booking.php';