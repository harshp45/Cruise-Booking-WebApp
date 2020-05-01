<?php

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

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\JobEmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index','IndexController@index');
Route::get('/index/session','IndexController@session');
Route::get('/AboutUs','AboutUsController@index');
Route::get('/Accessorie','AccessorieController@index');
Route::get('/accessorie','AccessorieController@GetFemale');
Route::get('/accessorieMale','AccessorieController@GetMale');
Route::get('/accessorieKids','AccessorieController@GetKids');
Route::post('/accessorieSearch','AccessorieController@Search');
Route::get('/Careers','CareersController@index');
Route::get('/ContactUs','ContactUsController@index');
Route::post('/ContactUs','ContactUsController@store');
Route::get('/Hotels','HotelsController@index');
Route::get('/Login','LoginController@index');
Route::get('/SignUp','SignUpController@index');
Route::post('/SignUp','SignUpController@store');
Route::get('/Places','PlacesController@index');
Route::get('/Result','ResultController@index');
Route::get('/CruiseInfo','CruiseInfoController@index');
Route::get('/Thanks','ThanksController@index');
Route::post('/searchPlace','PlacesController@Search');
Route::post('/jobapplication','JobEmailController@index');
Route::post ('/sendemail','JobEmailController@send');
Route::post('/login','LoginController@login');
Route::post('/Result','ResultController@getList');
Route::post('/sendEmail','sendEmailController@send');
Route::post('/CruiseInfo','CruiseInfoController@getInfo');
Route::post('/sendjobmail','sendEmailController@send');
Route::post('/bookEmail','sendEmailToCustomers@sendemail');
Route::get('/bookingDetail','bookingDetail@index');
Route::post('/bookingDetails','bookingDetail@store');
Route::post('/forget','sendEmailToCustomers@forget');
route::get('/Forget','ForgotController@index');
