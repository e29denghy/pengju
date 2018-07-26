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

Route::get('/heyun/joinus', 'HeyunController@joinus')->name('joinus');
Route::get('/heyun/joinok', 'HeyunController@joinok')->name('joinok');
Route::post('/heyun/entry', 'HeyunController@entry')->name('heyun_entry');
Route::get('/heyun/search', 'HeyunController@search')->name('search');
Route::post('/heyun/searchmember', 'HeyunController@searchmember')->name('heyun_member');
Route::get('/admin/heyun/entry', 'AdminController@heyun')->name('heyun_list');

///////////////////////////////////////////////////////////

Route::get('/admin', 'AdminController@dashboard')->name('admin');
Route::get('/admin/entry', 'AdminController@entry')->name('entry_list');

Route::get('/', 'StaticPagesController@winworld')->name('win');
Route::get('/pengju', 'StaticPagesController@home')->name('home');

Route::get('/course/com', 'IndexController@com')->name('com');

Route::get('/course/sun', 'IndexController@sun')->name('sun');

Route::get('/question', 'IndexController@question')->name('question');

Route::get('/signup', 'IndexController@signup')->name('signup');

Route::get('/signok', 'IndexController@signok')->name('signok');

Route::get('/notify', 'IndexController@notify')->name('notify');

Route::post('/course/entry', 'IndexController@entry')->name('entry');

Route::any('/wechat', 'WechatController@serve');

//Route::post('/wechat/authback', 'WechatController@authback')->name('authback');

Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('login', 'SessionsController@create')->name('login');
