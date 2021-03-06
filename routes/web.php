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

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/','UserController@login')->name('user.login');
Route::post('/login','UserController@postLogin');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('user','UserController');
    Route::get('/dashboard','DashboardController@index')->name('user.dashboard');
    Route::get('/profile','UserController@profile')->name('user.profile');
    Route::get('/logout','UserController@logout')->name('user.logout');
    Route::get('/lock','UserController@lock')->name('user.lock');
    Route::resource('project','ProjectController');
    Route::resource('customer','CustomerController');
    Route::get('/customer/{id}/print','CustomerController@print')->name('customer.print');
    Route::get('/report/projects','ReportController@projects')->name('report.projects');
    Route::get('/report/customers','ReportController@customers')->name('report.customers');



});
