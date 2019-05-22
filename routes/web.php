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

Route::resource('/artists', 'ArtistsController');
Route::resource('/news', 'NewsController');
Route::resource('/uslugi', 'UslugiController');

Route::get('/contact', function () {
    return view('contact');
});
 
Route::get('/project', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});
 

Route::get('/shows', function () {
    return view('shows');
});

Route::post('/feedback', 'AjaxController@feedback')->name('feedback');
 
Auth::routes();

Route::get('/admin', 'DashboardController@index');

 