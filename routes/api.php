<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('feast/{feast}/member', 'FeastMemberController')->except(['index', 'create', 'destroy']);

Route::put('section/{section}/update_content', 'SectionController@update_content')->name('update_content');
