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
// Route::get('user/{id}', 'ShowProfile');
Route::get('/', 'TodoController@index');
Route::get('/todos/create', 'TodoController@showCreateForm')->name('todos.create');
Route::post('/todos/create', 'TodoController@create');
