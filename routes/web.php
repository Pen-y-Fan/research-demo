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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/about',
    function () {
        return view('about');
    }
);

Route::get(
    '/services',
    function () {
        return view('services');
    }
);

Route::get(
    '/research',
    function () {
        return view('research');
    }
);

Route::get(
    '/team',
    function () {
        return view('team');
    }
);

Route::get(
    '/contact',
    function () {
        return view('contact');
    }
);

Route::post('/contact','ContactController@store')->name('contactUs');

Auth::routes();

Route::get('/staff/contact','ContactController@index')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
