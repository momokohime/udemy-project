<?php
App::setLocale('es');


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/politicas', 'politicas')->name('politicas');





Route::resource('portafolio', 'ProjectController')
	-> parameters(['portafolio' => 'project'])
	-> names('projects');
	// ->middleware('auth');

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portafolio/create', 'ProjectController@create')->name('projects.create');
// Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::get('/portafolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');




Route::view('/contactos', 'contactos')->name('contactos');
Route::post('/contactos', 'MessageController@store')->name('messages.store');

Auth::routes(['register'=>false]);

// Route::get('/home', 'HomeController@index')->name('home');
