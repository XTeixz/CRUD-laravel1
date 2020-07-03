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

Route::get('/data-tables', function () {
    return view('items.data-tables');
});

Route::get('/pertanyaan', 'QuestionController@index');
Route::get('/pertanyaan/create', 'QuestionController@create');
Route::post('/pertanyaan', 'QuestionController@store');