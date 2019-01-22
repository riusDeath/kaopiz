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

Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/login', 'HomeController@login')->name('login');
Route::post('/login', 'HomeController@postlogin')->name('login');

Route::group(['namespace' => 'Client'], function(){

	Route::group(['prefix' => 'Contest'], function(){
		Route::get('/contest.html', 'TestController@index')->name('contest');
		Route::get('/Full-test.html', 'TestController@fulltest')->name('contest.full-test');
		Route::get('/Full-test/test_{id}.html', 'TestController@test')->name('contest.fulltest.test');
		Route::get('/result{id}', 'TestController@result')->name('contest.fulltest.test.result');
	});

	Route::group(['prefix' => 'Post'], function(){
		Route::get('/detail{id}.html', 'PostController@detail')->name('client.post.detail');
	});

	Route::group(['prefix' => 'Listening'], function(){
		Route::get('/Listening.html', 'ListeingController@index')->name('contest.listeing.index');
		Route::get('/Listening.part1.html', 'ListeingController@part1')->name('contest.listeing.part1');
		Route::get('/Listening.part2.html', 'ListeingController@part2')->name('contest.listeing.part2');
		Route::get('/Listening.part3.html', 'ListeingController@part3')->name('contest.listeing.part3');
		Route::get('/Listening.part4.html', 'ListeingController@part4')->name('contest.listeing.part4');
		Route::get('/Listening.part1.level_{id}.html', 'ListeingController@part1test')->name('contest.listeing.part1.test');
		Route::get('/Listening.part2.level_{id}.html', 'ListeingController@part2test')->name('contest.listeing.part2.test');
		Route::get('/Listening.part3.level_{id}.html', 'ListeingController@part3test')->name('contest.listeing.part3.test');
		Route::get('/Listening.part4.level_{id}.html', 'ListeingController@part4test')->name('contest.listeing.part4.test');
	});

	Route::group(['prefix' => 'Reading'], function(){
		Route::get('/Reading.html', 'ReadingController@index')->name('contest.reading.index');
		Route::get('/reading.part5.html', 'ReadingController@part5')->name('contest.reading.part5');
		Route::get('/reading.part6.html', 'ReadingController@part6')->name('contest.reading.part6');
		Route::get('/Reading.part7.html', 'ReadingController@part7')->name('contest.reading.part7');
		Route::get('/Reading.part5.level_{id}.html', 'ReadingController@part5test')->name('contest.reading.part5.test');
		Route::get('/Reading.part6.level_{id}.html', 'ReadingController@part6test')->name('contest.reading.part6.test');
		Route::get('/Reading.part7.level_{id}.html', 'ReadingController@part7test')->name('contest.reading.part7.test');
	});
});