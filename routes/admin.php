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
			Route::get('/add', 'Part1Controller@index')->name('part1.index');
		});

		Route::group(['prefix' => 'part2'], function(){
			Route::post('/add', 'Part2Controller@add')->name('part2.add');
			Route::get('/delete', 'Part2Controller@delete')->name('part2.delete');
			Route::get('/index', 'Part2Controller@index')->name('part2.index');

		});

		Route::group(['prefix' => 'part3'], function(){
			Route::post('/add', 'Part3Controller@add')->name('part3.add');
			Route::get('/delete', 'Part3Controller@delete')->name('part3.delete');
			Route::get('/index', 'Part3Controller@index')->name('part3.index');
		});

		Route::group(['prefix' => 'part4'], function(){
			Route::get('/index', 'Part4Controller@index')->name('part4.index');
			Route::post('/add', 'Part4Controller@add')->name('part4.add');
			Route::get('/delete', 'Part4Controller@delete')->name('part4.delete');
		});

		Route::group(['prefix' => 'part5'], function(){
			Route::get('/index', 'Part5Controller@index')->name('part5.index');
			Route::post('/add', 'Part5Controller@add')->name('part5.add');
			Route::get('/delete', 'Part5Controller@delete')->name('part5.delete');
		});

		Route::group(['prefix' => 'part6'], function(){
			Route::get('/index', 'Part6Controller@index')->name('part6.index');
			Route::post('/add', 'Part6Controller@add')->name('part6.add');
			Route::get('/delete', 'Part6Controller@delete')->name('part6.delete');
		});

		Route::group(['prefix' => 'part7'], function(){
			Route::get('/index', 'Part7Controller@index')->name('part7.index');
			Route::post('/add', 'Part7Controller@add')->name('part7.add');
			Route::get('/delete', 'Part7Controller@delete')->name('part7.delete');
		});

	});

	Route::group(['prefix' => 'User'], function(){
			Route::get('/index', 'UserController@index')->name('user.index');
			Route::get('/delete', 'UserController@delete')->name('user.delete');
			Route::get('/save', 'UserController@save')->name('user.save');
	});

	Route::group(['namespace' => 'Guides', 'prefix' => 'Grammar guides'], function(){
			Route::get('/index', 'GrammarGuidesController@index')->name('grammar_guides.index');
			Route::get('/delete', 'UserController@delete')->name('user.delete');
			Route::get('/save', 'UserController@save')->name('user.save');
	});

 ?>