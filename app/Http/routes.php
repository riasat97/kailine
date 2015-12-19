<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('registration', [
    'as'=>'register',
    'uses'=>'UsersController@getRegister'
]);

Route::post('registration', [
    'as'=>'register.post',
    'uses'=>'UsersController@postRegister'
]);

Route::get('participants',[
    'as'=>'participants',
    'uses'=>'UsersController@getParticipants'
]);


