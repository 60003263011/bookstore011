<?php

//Route::get('about','SiteController@index');



Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'SiteController@index')->name('about');

Route::get('typebooks','TypeBooksController@index')->name('typebooks');
Route::get('typebooks/destroy/{id}','TypeBooksController@destroy');

//ตั้งชื่อ method index ว่า books
Route::resource('books','BooksController')->name('index','books');
Route::resource('profiles','ProfilesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin','AdminController');
