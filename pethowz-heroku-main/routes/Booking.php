<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;




//Booking

Route::get('/pet_space_booking/{id}',[BookingController::class,'pet_space_booking']);

Route::get('/pet_service_booking/{id}',[BookingController::class,'pet_service_booking']);


//booking form

Route::post('/create_pet_space_booking_form',[BookingController::class,'create_pet_space_booking_form']);

Route::post('/create_pet_service_booking_form',[BookingController::class,'create_pet_service_booking_form']);

Route::get('/pet_space_booking_form',[BookingController::class,'pet_space_booking_form']);

Route::get('/pet_service_booking_form',[BookingController::class,'pet_service_booking_form']);


//create booking


Route::post('/create_pet_space_booking',[BookingController::class,'create_pet_space_booking']);

Route::post('/create_pet_service_booking',[BookingController::class,'create_pet_service_booking']);
