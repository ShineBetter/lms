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
Route::get('/panel', 'HomeController@index')->name('panel');

//quiz route
Route::get('/exam', 'HomeController@quiz')->middleware('auth')->name('quiz');
Route::resource('quiz','QuizController')->middleware('auth');
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
Route::resource('parent','ParentsController')->middleware(['auth']);

//teacher list route
Route::resource('teacher','teacherController')->middleware('auth');
Route::resource('ticket','TicketController')->middleware('auth');
Route::get('teacher/warn/{id}','teacherController@setWarn')->middleware('auth')->name('teacher-warn');
Route::get('ticket/close/{id}','TicketController@close')->middleware('auth')->name('ticket.close');
Route::get('teacher/kick/{id}','teacherController@kick')->middleware('auth')->name('teacher-kick');

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
    return view('webSit.about');
});

//profile setting route
Route::get('/user/profile','profileController@getInformation')->name('profile')->middleware('auth');;
Route::post('/user/profile/save/info','profileController@saveInformation')->name('profile.save.info')->middleware('auth');;
Route::get('/user/profile/delete/profile/image','profileController@deleteProfileImage')->name('profile.delete.image')->middleware('auth');;
Route::post('/user/profile/change/password','profileController@changePassword')->name('profile.change.password')->middleware('auth');;

Route::view('/teachers','webSit.teachers');
Route::view('/teacher-detail','webSit.teacher-detail');
Route::view('/student-quiz-result-details-2','student-quiz-result-details-2');
Route::view('/student-quiz-result-details','webSit.student-quiz-result-details');
Route::view('/student-quiz','student-quiz');
Route::view('/student-path-assessment','student-path-assessment');
Route::view('/shopping-cart','shopping-cart');
Route::view('/pricing-table','webSit.pricing-table');
Route::view('/my-courses','webSit.my-courses');
Route::view('/faq','webSit.faq');
Route::view('/course-grid','webSit.course-grid');
Route::view('/contact','webSit.contact')->name("contact-main");
Route::view('/course-details','webSit.course-details');



////////////////home page dinamicks///////////
/// routs
Route::get("/contact-m","ContactController@index")->middleware("auth")->name("contact.index");
Route::get("/contact-form","ContactController@formindex")->middleware("auth")->name("contact.form-index");
Route::get("/contact-show/{id}","ContactController@formshow")->middleware("auth")->name("contact.form-show");
Route::get("/contact/edit/{id}","ContactController@edit")->middleware("auth")->name("contact.edit");
Route::put("/contact/update{id}","ContactController@update")->middleware("auth")->name("contact.update");
Route::put("/social/update{id}","ContactController@updateSocial")->middleware("auth")->name("Social.update");
Route::get("/social","ContactController@indexSocial")->middleware("auth")->name("social.index");
Route::get("/social/edit/{id}","ContactController@editSocial")->middleware("auth")->name("social.edit");
Route::get("/social/create","ContactController@create")->middleware("auth")->name("social.create");
Route::delete("/social/delete{id}","ContactController@destroy")->middleware("auth")->name("social.destroy");
Route::post("/social/store","ContactController@store")->middleware("auth")->name("social.store");
Route::post("/contact-form","ContactController@insertForm")->name("contact-form");

//////////////////////about us panel dinamic
/// comment panel///////
Route::get("/comments","CommentController@index")->middleware("auth")->name("comment.index");
Route::get("/comments/edit/{id}","CommentController@edit")->middleware("auth")->name("comment.edit");
Route::post("/comments/store","CommentController@store")->middleware("auth")->name("comment.store");
Route::get("/comments/create","CommentController@create")->middleware("auth")->name("comment.create");
Route::delete("/comments/delete{id}","CommentController@destroy")->middleware("auth")->name("comment.destroy");
Route::put("/comments/update{id}","CommentController@update")->middleware("auth")->name("comment.update");

/////////text panel///////
Route::get("/aboutText","AboutTextController@index")->middleware("auth")->name("aboutText.index");
Route::get("/aboutText/edit/{id}","AboutTextController@edit")->middleware("auth")->name("aboutText.edit");
Route::put("/aboutText/update{id}","AboutTextController@update")->middleware("auth")->name("aboutText.update");

///////////midel col-4
Route::get("/midel-4","Midel4Controller@index")->middleware("auth")->name("midel-4.index");
Route::get("/midel-4/edit/{id}","Midel4Controller@edit")->middleware("auth")->name("midel-4.edit");
Route::put("/midel-4/update{id}","Midel4Controller@update")->middleware("auth")->name("midel-4.update");

///////////teacher
Route::get("/aboutTeacher","AboutTeacherController@index")->middleware("auth")->name("aboutTeacher.index");
Route::get("/aboutTeacher/edit/{id}","AboutTeacherController@edit")->middleware("auth")->name("aboutTeacher.edit");
Route::put("/aboutTeacher/update{id}","AboutTeacherController@update")->middleware("auth")->name("aboutTeacher.update");
