<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);

/*****************************************     UserController     *****************************************************/
Route::get('home', ['as' => 'home', 'uses' => 'UserController@home']);
Route::get('accounts', ['as' => 'accounts', 'uses' => 'UserController@accounts']);
Route::get('wish_list', ['as' => 'wish_list', 'uses' => 'UserController@wish_list']);
Route::get('queued_books', ['as' => 'queued_books', 'uses' => 'UserController@queued_books']);
Route::get('contacts', ['as' => 'contacts', 'uses' => 'UserController@contacts']);
Route::get('lost_book', ['as' => 'lost_book', 'uses' => 'UserController@lost_book']);
Route::get('donate_book', ['as' => 'donate_book', 'uses' => 'UserController@donate_book']);
Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
/**********************************************************************************************************************/

/*AdminController*/
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@hello']);
