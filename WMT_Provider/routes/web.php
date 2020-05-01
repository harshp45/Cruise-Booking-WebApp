<?php

//use Illuminate\Routing\Route;

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

// Route::get('/get', function () {
//     return view('welcome');
// });

Route::get('/','loginController@index');
Route::post('/login','loginController@authenticate');
Route::get('/listaccesories','accesoriesController@index');
Route::get('/listjobs','jobsController@index');
Route::get('/listcruises','cruisesController@index');
Route::get('/addcruises','cruisesController@create');
Route::get('/addjobs','jobsController@create');
Route::get('/addaccesories','accesoriesController@create');
Route::post('/listcruises','cruisesController@store');
Route::post('/listcruises/{id}','cruisesController@updateData');
Route::get('/listcruises/delete/{id}', 'cruisesController@destroy');
Route::get('/listcruises/edit/{id}','cruisesController@update');
Route::post('/listjobs','jobsController@store');
Route::post('/listjobs/{id}','jobsController@updateData');
Route::get('/listjobs/delete/{id}', 'jobsController@destroy');
Route::get('/listjobs/edit/{id}','jobsController@update');
Route::post('/listaccesories','accesoriesController@store');
Route::post('/listaccesories/{id}','accesoriesController@updateData');
Route::get('/listaccesories/delete/{id}', 'accesoriesController@destroy');
Route::get('/listaccesories/edit/{id}','accesoriesController@update');
Route::post('/listproviders/{id}','loginController@updateData');
Route::get('/listproviders/edit','loginController@update');
Route::post('/listproviderspassword/{id}','loginController@updateDataPassword');
Route::get('/listproviderspassword/edit','loginController@updatePassword');
Route::get('/listorders','orderController@index');