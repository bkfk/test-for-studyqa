<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainPageController@index')->name('main');

Route::get('/thanks', function(){
  return view('front.thanks');
})->name('thanks');

Route::get('/send_err', function(){
  return view('front.send_err');
})->name('send_err');

Route::get('/feast/{feast}/member/create', 'FeastMemberController@create')->name('member.create');

Auth::routes();
