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
    return view('site.home');
});

Route::get('/blog', function () {
    return view('site.blog');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/timetables', function () {
    return view('site.timetables');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/blog-single', function () {
    return view('site.blog.blog-single');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
