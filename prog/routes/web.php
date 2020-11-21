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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
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
Route::view('/','course-details');
Route::view('/course-details','course-details');
Route::view('/dashboard','layout.dashboard.dashboard');
Route::view('/dashboard-bookmark','layout.dashboard.dashboard-bookmark');
Route::view('/dashboard-courses','layout.dashboard.dashboard-courses');
Route::view('/dashboard-earnings','layout.dashboard.dashboard-earnings');
Route::view('/dashboard-enrolled-courses','layout.dashboard.dashboard-enrolled-courses');
Route::view('/dashboard-message','layout.dashboard.dashboard-message');
Route::view('/dashboard-profile','layout.dashboard.dashboard-profile');
Route::view('/dashboard-purchase-history','layout.dashboard.dashboard-purchase-history');
Route::view('/dashboard-quiz','layout.dashboard.dashboard-quiz');
Route::view('/dashboard-reviews','layout.dashboard.dashboard-reviews');
Route::view('/dashboard-settings','layout.dashboard.dashboard-settings');
Route::view('/dashboard-submit-course','layout.dashboard.dashboard-submit-course');
Route::view('/dashboard-withdraw','layout.dashboard.dashboard-withdraw');
