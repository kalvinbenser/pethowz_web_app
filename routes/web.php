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

//service form
Route::get('/service_form', [ServiceController::class,'service_form']);
Route::post('/create_service', [ServiceController::class,'create_service']);

//pethost

Route::get('/pethost/pethost',[HomeController::class,'pethost']);

//exclusive_petspaces

Route::get('/exclusive_petspaces',[HomeController::class,'exclusive_petspaces']);

//house_apartment

Route::get('/house&apartment/house_apartment',[HomeController::class,'house_apartment']);

//petspace_details

Route::get('/petspace_details',[HomeController::class,'petspace_details']);

//petspace_details

Route::get('/terms_condition',[HomeController::class,'terms_condition']);

//petspace_details

Route::get('/bookingdetails',[HomeController::class,'bookingdetails']);

//add_details

Route::get('/add',[HomeController::class,'add']);


//register_details

Route::get('/register',[HomeController::class,'register']);

//profile_details

Route::get('/profile',[HomeController::class,'profile']);

//allimages_details

Route::get('/allimages',[HomeController::class,'allimages']);

// booking details

Route::post('/insert_booking_details',[HomeController::class,'insert_booking_details']);

// login details

Route::post('/insert_login_details',[HomeController::class,'insert_login_details']);

// register details

Route::post('/insert_register_details',[HomeController::class,'insert_register_details']);

// otp details

Route::post('/insert_otp_details',[HomeController::class,'insert_otp_details']);


//about your selfe details

Route::post('/test_data',[HomeController::class,'test_data']);

//pethost details

Route::post('/pet_host_details',[HomeController::class,'pet_host_details']);


//bookingform_details

Route::get('/bookingform',[ServiceController::class,'bookingform']);
Route::post('/booking_create', [ServiceController::class,'booking_create']);


require __DIR__.'/Auth.php';