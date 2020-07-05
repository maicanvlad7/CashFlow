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


Route::get('/projects', 'ProjectsController@display')->name('projects');
Route::post('/projects', 'ProjectsController@store')->name('projects_adder');

//Route::delete('money/{id}', 'MoneyController@destroy')->name('money');
Route::get('/', 'MoneyController@display')->name('cashflow');
Route::post('money', 'MoneyController@store')->name('adder');

Route::get('/workflow', 'WorkflowController@display')->name('workflow');
Route::post('/workflow', 'WorkflowController@store')->name('task_adder');
Route::get('/workflow/{id}', 'WorkflowController@markAsDone')->name('task-done');
