<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

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

Route::get('/about/about',[HomeController::class,'about']);


//sitting service

Route::get('/sitting',[HomeController::class,'sitting']);

//main service

Route::get('/service',[HomeController::class,'service']);

//grooming service

Route::get('/grooming',[HomeController::class,'grooming']);

//walking service

Route::get('/walking',[HomeController::class,'walking']);

//breading service

Route::get('/breading',[HomeController::class,'breading']);

//training service

Route::get('/training',[HomeController::class,'training']);

//photography service

Route::get('/photography',[HomeController::class,'photography']);



//pethost

Route::get('/pethost/pethost',[HomeController::class,'pethost']);

//exclusive_petspaces

Route::get('/exclusive_petspaces',[HomeController::class,'exclusive_petspaces']);

//house_apartment

Route::get('/house&apartment/house_apartment',[HomeController::class,'house_apartment']);

//petspace_details

Route::get('/petspace_details',[HomeController::class,'petspace_details']);

//terms_condition

Route::get('/terms_condition',[HomeController::class,'terms_condition']);

//booking_details

Route::get('/bookingdetails',[HomeController::class,'bookingdetails']);

// booking details

Route::get('/insert_booking_details',[HomeController::class,'insert_booking_details']);

//add_details

Route::get('/add_your_self',[HomeController::class,'add_your_self']);




//profile_details

// Route::get('/profile',[HomeController::class,'profile']);
Route::get('/profile/{_id}',[HomeController::class,'profile']);
Route::put('/update_Profile/{reg_id}',[HomeController::class,'update_Profile']);

//allimages_details

Route::get('/allimages',[HomeController::class,'allimages']);

// login details

Route::post('/insert_login_details',[HomeController::class,'insert_login_details']);

// otp details

Route::post('/insert_otp_details',[HomeController::class,'insert_otp_details']);


//about your selfe details

Route::post('/test_data',[HomeController::class,'test_data']);

//pethost details

Route::post('/pet_host_details',[HomeController::class,'pet_host_details']);



//service form
Route::get('/service_form', [ServiceController::class,'service_form']);
Route::post('/create_service', [ServiceController::class,'create_service']);
//bookingform_details

Route::get('/pet_space_form',[ServiceController::class,'pet_space_form']);
Route::post('/pet_space_create', [ServiceController::class,'pet_space_create']);
//create booking
Route::post('/create_booking',[ServiceController::class,'create_booking']);


Route::get('/test',[HomeController::class,'test']);

require __DIR__.'/Auth.php';