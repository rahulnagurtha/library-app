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
/*****************************************     UserController     *****************************************************/
Route::get('home', ['as' => 'home', 'uses' => 'UserController@home']);
Route::get('accounts', ['as' => 'accounts', 'uses' => 'UserController@accounts']);
Route::get('wish_list', ['as' => 'wish_list', 'uses' => 'UserController@wish_list']);
Route::get('queued_books', ['as' => 'queued_books', 'uses' => 'UserController@queued_books']);
Route::get('contacts', ['as' => 'contacts', 'uses' => 'UserController@contacts']);
Route::get('lost_book', ['as' => 'lost_book', 'uses' => 'UserController@lost_book']);
Route::get('donate_book', ['as' => 'donate_book', 'uses' => 'UserController@donate_book']);
Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::post('login', ['as' => 'login', 'uses' => 'UserController@postlogin']);
Route::get('lock_screen', ['as' => 'lock_screen', 'uses' => 'UserController@lock_screen']);
Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
/**********************************************************************************************************************/

/*AdminController*/
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@test']);
Route::get('admin/login', ['as' => 'adminlogin', 'uses' => 'AdminController@login']);
Route::post('admin/login', ['as' => 'adminlogin', 'uses' => 'AdminController@postlogin']);
Route::get('admin/logout', ['as' => 'adminlogout', 'uses' => 'AdminController@logout']);
Route::get('admin/update', ['as' => 'adminupdate', 'uses' => 'AdminController@update']);
Route::get('admin/lostbook', ['as' => 'adminlostbook', 'uses' => 'AdminController@lost']);
Route::get('admin/user', ['as' => 'adminuser', 'uses' => 'AdminController@userprofile']);
Route::get('admin/tables/users', ['as' => 'tabusers', 'uses' => 'AdminController@tabusers']);
Route::get('admin/tables/books', ['as' => 'tabbooks', 'uses' => 'AdminController@tabbooks']);
Route::post('func/edit', ['as' => 'func_edit', 'uses' => 'HomeController@func_edit']);
Route::post('func/new', ['as' => 'func_new', 'uses' => 'HomeController@func_add']);
Route::post('func/delete', ['as' => 'func_del', 'uses' => 'HomeController@func_del']);
Route::post('func/bookDetail', ['as' => 'func_book_detail', 'uses' => 'HomeController@book_detail']);
Route::post('func/payFine', ['as' => 'func_pay_fine', 'uses' => 'HomeController@pay_fine']);
Route::post('func/showBook', ['as' => 'func_show_book', 'uses' => 'HomeController@show_book']);
Route::post('func/issueBook', ['as' => 'func_issue_book', 'uses' => 'HomeController@issue_book']);
Route::post('func/lostBook', ['as' => 'func_lost_book', 'uses' => 'HomeController@lost_book']);

Route::group(array('before'=>'auth.admin'),function()
{
    Route::get('test', ['as' => 'test', 'uses' => 'AdminController@test']);
});
