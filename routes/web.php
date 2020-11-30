<?php

use Illuminate\Support\Facades\Route;

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


//index route
Route::get('/', 'FrontEndController@index')->name('index');

//auth shortcode route
Auth::routes(['register'=>false]);

//login route
Route::get('user/login','FrontEndController@login')->name('login.form');
Route::get('user/logout','FrontEndController@logout')->name('user.logout');
Route::post('user/login','FrontEndController@submitLogin')->name('login.submit');

//register route
Route::get('user/register','FrontEndController@register')->name('register.form');
Route::post('user/register','FrontEndController@registerSubmit')->name('register.submit');

//panel route
Route::get('/panel', 'HomeController@index')->middleware('auth')->name('panel');

//role route
Route::resource('role','RoleController')->middleware('auth');

//banner route
Route::resource('banner','BannerController')->middleware('auth');

//level route
Route::resource('level','LevelController')->middleware('auth');

//conference route
Route::resource('conference','ConferenceController')->middleware('auth');

//lesson list route
Route::resource('lesson','LessonController')->middleware('auth');

//parent list route
Route::resource('parent','ParentsController')->middleware('auth');

//teacher list route
Route::resource('teacher','teacherController')->middleware('auth');

//student list route
Route::resource('student','studentController')->middleware('auth');

//admin list route
Route::resource('admin','adminController')->middleware('auth');

//users lesson routes
Route::get('/userLessons/{id}','userLessonsController@index')->middleware('auth')->name('userLessons.index');
Route::post('/userLessons/{id}','userLessonsController@store')->middleware('auth')->name('userLessons.store');
Route::get('/userLessons/{id}/create','userLessonsController@create')->middleware('auth')->name('userLessons.create');
Route::delete('/userLessons/delete/{lesson_id}/{user_id}','userLessonsController@destroy')->middleware('auth')->name('userLessons.destroy');
Route::put('/userLessons/{lesson_id}/{user_id}','userLessonsController@update')->middleware('auth')->name('userLessons.update');
Route::get('/userLessons/{userLesson}','userLessonsController@show')->middleware('auth')->name('userLessons.show');
Route::get('/userLessons/{lesson_id}/{user_id}/edit','userLessonsController@edit')->middleware('auth')->name('userLessons.edit');

//users level routes
Route::get('/userLevels/{id}','userLevelsController@index')->middleware('auth')->name('userLevels.index');
Route::post('/userLevels/{id}','userLevelsController@store')->middleware('auth')->name('userLevels.store');
Route::get('/userLevels/{id}/create','userLevelsController@create')->middleware('auth')->name('userLevels.create');
Route::delete('/userLevels/delete/{level_id}/{user_id}','userLevelsController@destroy')->middleware('auth')->name('userLevels.destroy');
Route::put('/userLevels/{level_id}/{user_id}','userLevelsController@update')->middleware('auth')->name('userLevels.update');
Route::get('/userLevels/{userLevels}','userLevelsController@show')->middleware('auth')->name('userLevels.show');
Route::get('/userLevels/{level_id}/{user_id}/edit','userLevelsController@edit')->middleware('auth')->name('userLevels.edit');


//make test in database
Route::get('/cr/{id}','teacherController@cr');



//new routes for site fornt
Route::get('/about', function () {
    return view('about');
});

//profile setting route
Route::get('/user/profile','profileController@getInformation')->name('profile');
Route::post('/user/profile/save/info','profileController@saveInformation')->name('profile.save.info');

Route::view('/teachers','teachers');
Route::view('/teacher-detail','teacher-detail');
Route::view('/student-quiz-result-details-2','student-quiz-result-details-2');
Route::view('/student-quiz-result-details','student-quiz-result-details');
Route::view('/student-quiz-result-details','student-quiz-result-details');
Route::view('/student-quiz','student-quiz');
Route::view('/student-path-assessment','student-path-assessment');
Route::view('/shopping-cart','shopping-cart');
Route::view('/pricing-table','pricing-table');
Route::view('/my-courses','my-courses');
Route::view('/faq','faq');
Route::view('/course-grid','course-grid');
Route::view('/contact','contact');
Route::view('/course-details','course-details');
