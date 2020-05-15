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

// Below routes are coming Automatically 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'CrudsController@index')->name('crud');

// All above routes will come automatically


// Below is defined one 
Route::get('/crud', 'CrudsController@index')->name('crud');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');


// Resource Controller 
Route::resource('crud','CrudsController');

Route::get('/crud/downloadPdf/{id}', 'CrudsController@downloadPdf')->name('crud.downloadPdf');