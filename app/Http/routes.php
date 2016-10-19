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

// Route::get('/', function () {
//     // return view('index')
//     // \View::make('index')
//     // ->nest('footerscript','footerscript');


// });

Route::get('/', 'PagesController@getIndex');
Route::get('/{page}', 'PagesController@getView');

Route::post('send', [
	'as' 	=> 'send',
	'uses'	=> 'EmailController@send',
]);