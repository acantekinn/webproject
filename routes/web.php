<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

/*

Route::get('/hello', function () {
    return '<h1> Hello </h1>';
});
*/
/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user  ' .$name. ' with an id ' .$id;
});
*/


Route::get('/', 'PagesController@index') ;
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/