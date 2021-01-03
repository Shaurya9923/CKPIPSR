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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'LandingController@landing');

Route::middleware(['auth'])->group(function () {

    // Route::get('faculty','FacultyController@index');
    // Route::get('faculty/create','FacultyController@create');
    // Route::post('faculty','FacultyController@store');
    Route::get('faculty/{fac}/show','FacultyController@show');
    // Route::get('faculty/{fac}/edit','FacultyController@edit');
    // Route::post('faculty/{fac}','FacultyController@update');
    Route::get('faculty/{fac}/delete','FacultyController@destroy');
    Route::resource('faculty',"FacultyController");
});

Route::middleware(['auth'])->group(function(){
    // Route::get('event','EventController@index');
    // Route::get('event/create','EventController@create');
    // Route::post('event','EventController@store');
    // Route::get('event/{eve}/show','EventController@show');
    // Route::get('event/{eve}/edit','EventController@edit');
    // Route::post('event/{eve}','EventController@update');
    // Route::get('event/{eve}','EventController@destroy');

    Route::get('event/{eve}/show','EventController@show');
    Route::get('event/{eve}/delete','EventController@destroy');
    Route::resource('event',"EventController");
});

Route::middleware(['auth'])->group(function(){
    Route::get('news/{new}/show','NewsController@show');    
    Route::get('news/{new}/delete','NewsController@destroy');
    Route::resource('news',"NewsController");
});

Route::middleware(['auth'])->group(function(){
    Route::get('achievement/{achieve}/show','AchievementController@show');    
    Route::get('achievement/{achieve}/delete','AchievementController@destroy');
    Route::resource('achievement',"AchievementController");
});

Route::get('/ckpipsr', function () {
    return view('Ckpipsr.main');
});