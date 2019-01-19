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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'HomeController@login')->name('login');
Route::post('/login', 'HomeController@postlogin')->name('login');

Route::group(['namespace' => 'Client'], function(){
	Route::get('/contest.html', 'TestController@index')->name('contest');
	Route::get('/Full-test.html', 'TestController@fulltest')->name('contest.full-test');
	Route::get('/Full-test/test_{id}.html', 'TestController@test')->name('contest.fulltest.test');
});