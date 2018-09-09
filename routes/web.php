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
    return view('home');
});

Auth::routes();

//Just to the backend of the site
//Route Group
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function() {
    Route::get('/', 'ManagementController@home');
    Route::get('/dashboard', 'ManagementController@dashboard')->name('manage.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
