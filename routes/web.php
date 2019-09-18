<?php

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
//
//Route::get('/about', function () {
//    return view('pages.static.about');
//});


Route::get('/post/{slug}','PostController@showPost');

Route::get('/posts','PostController@allPosts');

Route::get('/event/{slug}','EventController@showEvent');

Route::get('/events','EventController@allEvents');

Route::get('/contact','TicketController@addTicket');
Route::post('/contact','TicketController@handleTicket');

Route::get('/course/{slug}','CourseController@showCourse');

Route::get('/courses','CourseController@allCourses');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
