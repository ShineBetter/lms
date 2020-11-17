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

Route::get('/', 'FrontEndController@index')->name('index');

Auth::routes(['register'=>false]);
Route::get('user/login','FrontEndController@login')->name('login.form');
Route::get('user/logout','FrontEndController@logout')->name('user.logout');
Route::post('user/login','FrontEndController@submitLogin')->name('login.submit');

Route::get('user/register','FrontEndController@register')->name('register.form');
Route::post('user/register','FrontEndController@registerSubmit')->name('register.submit');
Route::get('/panel', 'HomeController@index')->name('panel')->middleware('auth');
Route::resource('role','RoleController')->middleware('auth');
Route::resource('banner','BannerController')->middleware('auth');
Route::resource('level','LevelController')->middleware('auth');
Route::resource('conference','ConferenceController')->middleware('auth');
Route::resource('lesson','LessonController')->middleware('auth');
Route::resource('parent','ParentsController')->middleware('auth');
Route::resource('teacher','teacherController')->middleware('auth');
//Route::resource('userLessons','userLessonsController')->middleware('auth');
Route::resource('student','studentController')->middleware('auth');
Route::resource('admin','adminController')->middleware('auth');
Route::get('/userLessons/{id}','userLessonsController@index')->middleware('auth')->name('userLessons.index');
Route::post('/userLessons','userLessonsController@store')->middleware('auth')->name('userLessons.store');
Route::post('/userLessons/create','userLessonsController@create')->middleware('auth')->name('userLessons.create');
Route::delete('/userLessons/delete/{userLesson}','userLessonsController@destroy')->middleware('auth')->name('userLessons.destroy');
Route::put('/userLessons/{userLesson}','userLessonsController@update')->middleware('auth')->name('userLessons.update');
Route::get('/userLessons/{userLesson}','userLessonsController@show')->middleware('auth')->name('userLessons.show');
Route::get('/userLessons/{userLesson}/edit','userLessonsController@edit')->middleware('auth')->name('userLessons.edit');
Route::get('/cr/{id}','teacherController@cr');
