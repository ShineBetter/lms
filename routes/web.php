<?php

use Illuminate\Support\Facades\Route;
use AliBayat\LaravelCategorizable\Category;
use Trez\RayganSms\Facades\RayganSms;
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
Route::post('/exam', 'HomeController@quiz')->middleware('auth')->name('quiz');
Route::post('/exam/pay', 'HomeController@examPay')->middleware('auth')->name('examPay');
Route::post('/exam/next', 'HomeController@getQuestion')->middleware('auth')->name('getQuestion');
Route::post('/exam/sendAnswer', 'HomeController@sendAnswer')->middleware('auth')->name('sendAnswer');
Route::post('/exam/getFirst', 'HomeController@getFirstAnswer')->middleware('auth')->name('getFirstAnswer');
Route::post('/checkAnswers', 'HomeController@checkAnswers')->middleware('auth')->name('checkAnswers');
Route::view('/quiz-result','backend.admin.quizResult.quizResult')->middleware('auth')->name('result');
Route::resource('quiz','QuizController')->middleware('auth');

//questions route
Route::resource('questions','QuestionsController')->middleware('auth');

//quizResult route
Route::resource('quizResult','QuizResultController')->middleware('auth');

//role route
Route::resource('role','RoleController')->middleware('auth');

//banner route
Route::resource('banner','BannerController')->middleware('auth');

//level route
Route::resource('level','LevelController')->middleware('auth');

//category route


Route::resource('category','CategoryController')->middleware('auth');

//product route
Route::resource('product','ProductController')->middleware('auth');

//conference route
Route::resource('conference','ConferenceController')->middleware('auth');

//lesson list route
Route::resource('lesson','LessonController')->middleware('auth');

//parent list route
Route::resource('parent','ParentsController')->middleware(['auth']);

//teacher list route
Route::resource('teacher','teacherController')->middleware('auth');
Route::get('teacher/warn/{id}/{text}','teacherController@setWarn')->middleware('auth')->name('teacher-warn');
Route::get('teacher/kick/{id}/{status}','teacherController@kick')->middleware('auth')->name('teacher-kick');
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
Route::get('/cat',function (){
});



//new routes for site fornt
Route::get('/about', function () {
    return view('webSit.about');
});

Route::view('/select','backend.admin.selected');

//profile setting route
Route::get('/user/profile','profileController@getInformation')->name('profile')->middleware('auth');;
Route::post('/user/profile/save/info','profileController@saveInformation')->name('profile.save.info')->middleware('auth');;
Route::get('/user/profile/delete/profile/image','profileController@deleteProfileImage')->name('profile.delete.image')->middleware('auth');;
Route::post('/user/profile/change/password','profileController@changePassword')->name('profile.change.password')->middleware('auth');;

Route::view('/teachers','webSit.teachers');
Route::view('/teacher-detail','webSit.teacher-detail');
Route::view('/student-quiz-result-details-2','webSit.student-quiz-result-details-2');
Route::view('/examResult','backend.admin.quizResult.quizResult');
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

///////////aboutpiuc
Route::get("/aboutpic","AboutpicController@index")->middleware("auth")->name("aboutpic.index");
Route::get("/aboutpic/edit/{id}","AboutpicController@edit")->middleware("auth")->name("aboutpic.edit");
Route::put("/aboutpic/update{id}","AboutpicController@update")->middleware("auth")->name("aboutpic.update");



////////////////////////////////main page
///
/// mainpage3col
Route::get("/mainpage","Mainpage3colController@index")->middleware("auth")->name("mainpage.index");
Route::get("/mainpage/edit/{id}","Mainpage3colController@edit")->middleware("auth")->name("mainpage.edit");
Route::put("/mainpage/update{id}","Mainpage3colController@update")->middleware("auth")->name("mainpage.update");

/////mainpage slider

Route::get("/mainCount","MainCountController@index")->middleware("auth")->name("mainCount.index");
Route::get("/mainCount/edit/{id}","MainCountController@edit")->middleware("auth")->name("mainCount.edit");
Route::put("/mainCount/update{id}","MainCountController@update")->middleware("auth")->name("mainCount.update");

//////////form-client
/// main page course free
Route::get("/form-main-free/a","FormFreecourseController@index")->middleware("auth")->name("formFree.index");
Route::get("/form-main-free","FormFreecourseController@store")->name("formFree.store");
Route::delete("/form-main-free/delete/{id}","FormFreecourseController@destroy")->middleware("auth")->name("formFree.destroy");

////////form news
Route::get("/form-news/a","FormNewsController@index")->middleware("auth")->name("formNews.index");
Route::get("/form-news","FormNewsController@store")->name("formNews.store");
Route::delete("/form-news/delete/{id}","FormNewsController@destroy")->middleware("auth")->name("formNews.destroy");

///////formFaq

Route::get("/form-faq/a","FormFaqController@index")->middleware("auth")->name("formFaq.index");
Route::get("/form-faq","FormFaqController@store")->name("formFaq.store");
Route::get("/form-faq/show/{id}","FormFaqController@show")->middleware("auth")->name("formFaq.show");
Route::put("/form-faq/update/{id}","FormFaqController@update")->middleware("auth")->name("formFaq.update");
Route::delete("/form-faq/delete/{id}","FormFaqController@destroy")->middleware("auth")->name("formFaq.destroy");

