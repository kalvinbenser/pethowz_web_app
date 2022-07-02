<?php

use Illuminate\Support\Facades\Route;
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

Route::get("/login",[AuthController::class,'login']);
//Route::get("/register",[AuthController::class,'register']);

//register_details

Route::get('/register',[AuthController::class,'register']);

// insert register details

Route::post('/insert_register',[AuthController::class,'insert_register']);
Route::post('/create_register',[AuthController::class,'create_register']);
