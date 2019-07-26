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
Route::get('/', function(){
    return view('welcome');
});

//Route::get('/signup','HomeController@index')->middleware('guest');

Route::get('/my', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::resource('/projects','ProjectController')->middleware('can:update,project');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');
//Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/completed-tasks/{task}','CompletedTasksController@store');
Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
