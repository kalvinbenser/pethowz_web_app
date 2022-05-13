<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/service/service', function () {
    return view('service/service');
});
Route::get('/pethost/pethost', function () {
    return view('pethost/pethost');
});
Route::get('/exclusive_petspaces/exclusive_petspaces', function () {
    return view('exclusive_petspaces/exclusive-petspaces');
});
Route::get('/house&apartment/house_apartment', function () {
    return view('house&apartment/house_apartment');
});


require __DIR__.'/Auth.php';