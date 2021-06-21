<?php

use App\Models\Son;
use App\Models\People;

// GET, POSt PUT DLETE, ANY

// Route::get('/hola', function(){
// 	return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::post('People/store', 'PeopleController@store')->name('people.store');
Route::get('/People/Edit/{People}', 'PeopleController@edit')->name('people.edit');
Route::post('/People/update/{People}', 'PeopleController@update')->name('people.update');
Route::delete('/People/delete/{People}', 'PeopleController@delete')->name('people.delete');

// Route::view('/', 'home');

Route::get('hola/{name?}', 'HomeController@hola')->name('hola');

Route::view('/zapato', 'zapato');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
