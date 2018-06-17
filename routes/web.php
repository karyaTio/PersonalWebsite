<?php

// General
Route::get('/', function(){
    return view('home');
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('/about-me', function(){
    return view('about-me');
});

// Posts
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/manage', 'PostController@manage');
Route::get('/posts/{slug}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::patch('/posts/{id}', 'PostController@update');

// Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// Sessions
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');