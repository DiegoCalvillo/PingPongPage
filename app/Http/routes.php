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
Route::get('/', 'FrontController@index');
Route::get('product/', 'FrontController@product');
Route::get('med/', 'FrontController@med');
Route::get('logistics/', 'FrontController@logistics');
Route::get('events/', 'FrontController@events');
Route::get('spaces/', 'FrontController@spaces');
Route::get('nfc/', 'FrontController@nfc');
Route::get('about/', 'FrontController@about');
Route::get('español/', 'FrontController@español');
Route::get('productos/', 'FrontController@producto');
Route::get('eventos/', 'FrontController@eventos');
Route::get('espacios/', 'FrontController@espacios');
Route::get('medico/', 'FrontController@medico');
Route::get('logistica/', 'FrontController@logistica');
Route::get('nfc_español/', 'FrontController@nfc_español');
Route::get('sobre_nosotros/', 'FrontController@sobre_nosotros');
Route::get('contact/', 'FrontController@contact');
Route::get('contacto/'. 'FrontController@contacto');

Route::resource('mail','MailController');
/*Route::get('/', function () {
    return view('welcome');
});*/
