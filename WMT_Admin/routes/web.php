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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','loginController@index');
Route::post('/login','loginController@authenticate');
Route::get('/listhotels','hotelsController@index');
Route::get('/listplaces','placesController@index');
Route::get('/listproviders','providersController@index');
Route::get('/listusers','usersController@index');
Route::get('/addhotels','hotelsController@create');
Route::get('/addplaces','placesController@create');
Route::get('/addproviders','providersController@create');
Route::get('/addusers','usersController@create');
Route::post('/listhotels','hotelsController@store');
Route::post('/listhotels/{id}','hotelsController@updateData');
Route::get('/listhotels/delete/{id}', 'hotelsController@destroy');
Route::get('/listhotels/edit/{id}','hotelsController@update');
Route::post('/listusers','usersController@store');
Route::post('/listusers/{id}','usersController@updateData');
Route::get('/listusers/delete/{id}', 'usersController@destroy');
Route::get('/listusers/edit/{id}','usersController@update');
Route::post('/listplaces','placesController@store');
Route::post('/listplaces/{id}','placesController@updateData');
Route::get('/listplaces/delete/{id}', 'placesController@destroy');
Route::get('/listplaces/edit/{id}','placesController@update');
Route::post('/listproviders','providersController@store');
Route::post('/listproviders/{id}','providersController@updateData');
Route::get('/listproviders/delete/{id}', 'providersController@destroy');
Route::get('/listproviders/edit/{id}','providersController@update');
Route::get('/listcountry','countryController@index');
Route::get('/addcountry','countryController@create');
Route::post('/listcountry','countryController@store');
Route::post('/listcountry/{id}','countryController@updateData');
Route::get('/listcountry/delete/{id}', 'countryController@destroy');
Route::get('/listcountry/edit/{id}','countryController@update');
Route::get('/liststate','stateController@index');
Route::get('/addstate','stateController@create');
Route::post('/liststate','stateController@store');
Route::post('/liststate/{id}','stateController@updateData');
Route::get('/liststate/delete/{id}', 'stateController@destroy');
Route::get('/liststate/edit/{id}','stateController@update');
Route::get('/listcity','cityController@index');
Route::get('/addcity','cityController@create');
Route::post('/listcity','cityController@store');
Route::post('/listcity/{id}','cityController@updateData');
Route::get('/listcity/delete/{id}', 'cityController@destroy');
Route::get('/listcity/edit/{id}','cityController@update');