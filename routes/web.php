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

Route::get('/', function () {
    return view('welcome');
    
});



Auth::routes();

//Route::get('/home', 'HomeController@index');


//Numbers routes Admin

Route::get('/numbers','PhoneNumbersController@index');
Route::get('/numbers/add', 'PhoneNumbersController@create');
Route::post('/numbers/store', 'PhoneNumbersController@store');
Route::get('/numbers/{id}/edit', 'PhoneNumbersController@edit');
Route::patch('/numbers/{id}', 'PhoneNumbersController@update');
Route::delete('/numbers/{id}', 'PhoneNumbersController@destroy');
Route::get('/{phone_number}', 'VisitorController@show');


//Show number 

