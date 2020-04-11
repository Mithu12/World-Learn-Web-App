<?php

use Illuminate\Support\Facades\Route;



/****************log out********/
Route::get('/logout',function ()
{
  Auth::logout();
  return redirect('/');
})->name("logout");

//=======================Test routes

//Route::get('/test', 'UsersController@test');


/*==========================visitor routes=================*/
Route::get('/','VisitorController@index')->name('landingPage');

/*==========================Word meaning routes=================*/
Route::get('/meaning/{word}','WordsController@getMeaning');
Route::get('/test','WordsController@getPage');

Auth::routes();
/*==========================user profile routes rotes=================*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/create', 'UsersController@addProfile')->name('add');
Route::get('/profile', 'UsersController@viewProfile')->name('viewProfile');
Route::get('/profile/edit', 'UsersController@editProfile')->name('editProfile');
Route::get('/profile/post', 'PostsController@newPost')->name('newPosts');

Route::post('/profile/post/upload', 'PostsController@makePost')->name('makePosts');
Route::post('/profile/update', 'UsersController@updateProfile')->name('updateProfile');
Route::post('/profile/password/update', 'UsersController@changePass')->name('changePass');
