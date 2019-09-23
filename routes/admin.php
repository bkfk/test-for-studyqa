<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function(){

  Route::get('/', function(){
    return view('admin.main');
  })->name('admin.main');

Route::get('page_edit', 'SectionController@page_edit')->name('page_edit');


  Route::middleware('feast.admin')->group(function(){

    Route::get('feast/{feast}/member', 'FeastMemberController@index')->name('member.index');

    Route::delete('feast/{feast}/member/{member}', 'FeastMemberController@destroy')->name('member.destroy');

  });

  Route::put('user/{user}/update_email', 'AdminController@update_email')->name('update_email');

  Route::put('section/{section}/update_images', 'SectionController@update_images')->name('update_images');

});
