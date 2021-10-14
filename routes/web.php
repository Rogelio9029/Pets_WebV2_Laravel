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
    // return view('User_Views/Home');
    return view('Home');
})->name('/');

Route::get('services', function () {
    // return view('User_Views/Home');
    return view('Services');
})->name('services');

Route::get('contact', function () {
    // return view('User_Views/Home');
    return view('Contact');
})->name('contact');

Route::get('about', function () {
    // return view('User_Views/Home');
    return view('About');
})->name('about');

Route::get('login', function () {
    // return view('User_Views/Home');
    return view('auth/login');
})->name('login');

Route::get('register', function () {
    // return view('User_Views/Home');
    return view('auth/register');
})->name('register');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
