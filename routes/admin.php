<?php 

	Route::get('/', 'DashboardController@index')->name('dashboard');

	/*
	* manager test 
	*	
	*/
	Route::group(['namespace' => 'Test', 'prefix' => 'Test'], function(){
		Route::get('/', 'TestController@index')->name('test.index');

		Route::get('/add', 'TestController@create')->name('test.add');
		Route::post('/add', 'TestController@create');

		Route::get('/save', 'TestController@save')->name('test.save'); // ajax update test
		Route::post('/save', 'TestController@save'); // method new test

		Route::get('/delete', 'TestController@delete')->name('test.delete');

		Route::get('/view/{id}.html', 'TestController@view')->name('test.view');

		Route::group(['prefix' => 'Part1'], function(){
			Route::get('/delete', 'Part1Controller@delete')->name('part1.delete');

			Route::post('/add', 'Part1Controller@add')->name('part1.add');
		});
	});

 ?>