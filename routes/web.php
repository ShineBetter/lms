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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/rel', 'LessonController@test')->name('test');
Route::resource('banner','BannerController');
Route::resource('level','LevelController');
Route::resource('conference','ConferenceController');
Route::resource('lesson','LessonController');
Route::resource('test','LessonController');
