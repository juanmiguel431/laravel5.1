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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('notes', 'NotesController@index');
Route::post('notes', 'NotesController@store');

Route::get('notes/{num}', 'NotesController@show')->where('num','\d*');

//Route::get('notes/create', 'NotesController@create');

Route::get('notes/new', 'NotesController@newNote');
	
Route::group(['middleware' => ['web']], function ()
{
	Route::get('notes', 'NotesController@index');
	Route::get('notes/create', 'NotesController@create');	
});

Route::get('notes/edad/{edad}', [ 'middleware' => 'age:20', function ()
	{
		return "Eres mayor de edad! Puedes ver el video";
	}
] );

Route::get('lang/{lang}', 'NotesController@changeLang')->where([ 'lang' => 'en|es']);

