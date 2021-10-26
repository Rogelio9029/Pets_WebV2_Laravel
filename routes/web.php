<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{any}', function () {
//     return view('spa');
// })->where('any', '.*');

// Route::get('/', function () {
//     // return view('User_Views/Home');
//     return view('welcome');
// })->name('/');

// Route::get('index', function () {
//     // return view('User_Views/Home');
//     return view('index');
// })->name('index');

// Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');
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

Route::get('home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@index')->name('admin');

// Route::get('pets-admin', function () {
//     return view('admin.pet.table');
// })->name('pets-admin');

// Route::get('gender-admin', function () {
//     return view('admin.gender.table');
// })->name('gender-admin');

// Route::get('gender-admin/register', function () {
//     return view('admin.gender.register');
// })->name('gender-admin/register');

// Route::get('gender-admin/{id}', function () {
//     return view('admin.gender.edit');
// })->name('gender-admin/{id}');