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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('eloquent','EloquentController@Home');


Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('contactus', 'ContactController');


Route::resource('law', 'lawController');
Route::get('/contactus', 'LawController@contactus');
Route::get('/aboutme', 'LawController@aboutme');
Route::get('/ourteam', 'LawController@ourteam');
Route::get('/practices', 'LawController@practices');

//Route::get('/appointment', 'LawController@appointment');

Route::resource('appointment', 'AppointmentController');
Route::get('create', 'AppointmentController@create');




Route::resource('student', 'StudentController');

Route::resource('writer', 'WriterController');
//Route::get('/blog', 'WriterController@blog');
Route::get('writer.blog','WriterController@blog');
Route::get('dashboard','WriterController@dashboard');
Route::resource('userprofile', 'UserprofileController');
Route::get('application', 'UserprofileController@application');
Route::get('profile', 'UserprofileController@profile');
Route::get('userprofile', 'UserprofileController@Index');

Route::get('blogpost', 'WriterController@blogpost');


//Route::resource('contactus', 'ContactController');

Route::get('takedata', 'WriterController@takedata');
