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
			Route::get('/view', 'UserController@view')->name('user.view');
			Route::get('/account', 'UserController@account')->name('user.account');
	});

	Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
			Route::get('/post.html', 'PostController@index')->name('post.index');
			Route::get('/edit/{id}', 'PostController@edit')->name('post.edit');
			Route::post('/edit/{id}', 'PostController@update')->name('post.edit');
			Route::get('/delete/{id}', 'PostController@delete')->name('post.delete');
			Route::get('/newpost.html', 'PostController@add')->name('post.add');
			Route::post('/newpost.html', 'PostController@create');
			Route::get('/post.revisions{id}.html', 'PostController@revision')->name('post.revisions');
			Route::get('/post.restore{id}.html', 'PostController@restore')->name('post.restore');
			Route::get('/category', 'CategoryController@add')->name('category.add');
			Route::get('/post.category.html', 'CategoryController@index')->name('post.category');
			Route::get('/post.category.edit{id}.html', 'CategoryController@edit')->name('post.category.edit');
			Route::post('/post.category.save.html', 'CategoryController@save')->name('post.category.save');
			Route::get('/post.category.delete{id}.html', 'CategoryController@delete')->name('post.category.delete');
	});

	Route::group(['prefix' => 'Comment', 'namespace' => 'Comment'], function(){
			Route::get('/index.html', 'CommentController@index')->name('comment.index');
			Route::get('/comment/edit{id}.html', 'CommentController@edit')->name('comment.edit');
			Route::get('/comment/delete{id}.html', 'CommentController@delete')->name('comment.delete');
	});

 ?>