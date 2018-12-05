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
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');

Route::post('projects/{project}/tasks', 'ProjectTasksController@store');

// Following REST principles, it makes sense to create a controller for state updates,
// but I am not sure if I find this more readable when it's just toggling a boolean
Route::patch('tasks/{task}', 'TasksCompletionController@store');
Route::delete('tasks/{task}', 'TasksCompletionController@destroy');
