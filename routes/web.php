<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('home/index');
});
Route::get('/home/index', function () {
    return view('home/index');
});
Route::get('/about/about', function () {
    return view('about/about');
});
Route::get('/sitting', function () {
    return view('/service/sitting/sitting');
});
Route::get('/grooming', function () {
    return view('/service/grooming/grooming');
});
Route::get('/walking', function () {
    return view('/service/walking/walking');
});
Route::get('/breading', function () {
    return view('/service/breading/breading');
});
Route::get('/training', function () {
    return view('/service/training/training');
});
Route::get('/photography', function () {
    return view('/service/photography/photography');
});
Route::get('/pethost/pethost', function () {
    return view('pethost/pethost');
});
Route::get('/exclusive_petspaces', function () {
    return view('exclusive_petspaces/exclusive-petspaces');
});
Route::get('/house&apartment/house_apartment', function () {
    return view('house&apartment/house_apartment');
});
Route::get('/petspace_details', function () {
    return view('petspace/pethost_details');
});
Route::get('/terms_condition', function () {
    return view('terms_coditions/terms_coditions');
});
Route::get('/bookingdetails', function () {
    return view('booking-details/bookingdeteils');
});
Route::get('/add', function () {
    return view('add/add');
});
Route::get('/bookingform', function () {
    return view('booking-details/booking_form/booking_form');
});
Route::get('/register', function () {
    return view('register/register');
});
Route::get('/profile', function () {
    return view('profile/profile');
});


// booking details

Route::post('/insert_booking_details',[HomeController::class,'insert_booking_details']);

// login details

Route::post('/insert_login_details',[HomeController::class,'insert_login_details']);

// register details

Route::post('/insert_register_details',[HomeController::class,'insert_register_details']);

// otp details

Route::post('/insert_otp_details',[HomeController::class,'insert_otp_details']);

require __DIR__.'/Auth.php';