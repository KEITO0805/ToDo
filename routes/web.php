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
Route::get('/', 'TaskController@index');
Route::get('/todo/create', 'TaskController@create');
Route::post('/todo', 'TaskController@store');
Route::get('/todos/{task}/edit', 'TaskController@edit');
Route::put('/todos/{task}', 'TaskController@update');
Route::delete('/todos/{task}', 'TaskController@delete');