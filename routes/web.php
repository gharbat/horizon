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

Route::get('/about', function () {
    return view('pages.static.about');
});



Route::get('/admin/panel', function () {
    return view('admin.index');
});

Route::get('/admin/add-course', function () {
    return view('admin.add-course');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
