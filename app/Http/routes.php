<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// View
	Route::get('/', 'HomeController@index');
	Route::get('view/{course_id}', 'HomeController@chapterList');

	Route::get('chapter', 'ChapterController@show');
	Route::get('chapter/list/{course_id}', 'ChapterController@chapterList');
	Route::get('chapter/new', 'ChapterController@chapterAdd')->middleware('auth');
	Route::get('chapter/delete/{id}', 'ChapterController@destroy')->middleware('auth');
	Route::get('chapter/detail/{id}/{chaper_name}', 'ChapterController@detail');
	Route::get('chapter/download/{id}', 'ChapterController@download_attachment');	

	Route::get('course', 'CourseController@show');
	Route::get('course/new', function () {
	    return view('course.content-form');
	})->middleware('auth');
	Route::get('course/delete/{id}', 'CourseController@destroy')->middleware('auth');


	Route::get('user', 'UserController@userList')->middleware('auth');
	Route::get('user/new', 'UserController@formAdd')->middleware('auth');
	Route::get('user/delete/{id}', 'UserController@destroy')->middleware('auth');

	Route::get('information', 'InformationController@informationList');
	Route::get('information/new', 'InformationController@formAdd')->middleware('auth');
	Route::get('information/delete/{id}', 'InformationController@destroy')->middleware('auth');
	Route::get('information/detail/{id}/{information_title}', 'InformationController@detail');

	Route::get('login', 'UserController@login');
	Route::get('logout', 'UserController@logout');
// End View


// Process
	// Example
	Route::post('user/form/add', 'UserController@store');
	Route::post('chapter/form/add', 'ChapterController@store');
	Route::post('course/form/add', 'CourseController@store');

	// Used
	Route::post('course/new', 'CourseController@store')->middleware('auth');
	Route::post('chapter/new', 'ChapterController@store')->middleware('auth');
	Route::post('user/new', 'UserController@store')->middleware('auth');
	Route::post('information/new', 'InformationController@store')->middleware('auth');
	Route::post('login', 'UserController@authenticate');



// End Process

Route::auth();

Route::get('/home', 'HomeController@index');
