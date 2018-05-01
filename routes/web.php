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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::any('add', 'manage@AddArticle');
Route::get('myView/{art}/delete','manage@Delete_Article');

Route::get('myView/{art}/edit','manage@edit');
Route::post('myView/{art}/update','manage@update');



Route::get('view', 'manage@view');
Route::get('myView', 'manage@myView');
Route::get('/read/{id}', 'manage@read');
Route::post('/read/{id}', 'manage@read');




Route::get('read/{id}/updateC','manage@updateC');
Route::post('read/{id}/updateBtC','manage@updateBtC');

