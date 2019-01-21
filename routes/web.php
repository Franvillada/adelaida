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

Route::get('/',  'HomeController@index');
Route::get('/home',  'HomeController@index')->name('home');

Route::get('/admcontenidos', 'BackofficeController@index');
Route::get('/admcontenidos/imagen-principal','ImageController@index')->name('imagen-principal');
Route::post('/admcontenidos/imagen-principal','ImageController@store');
Route::get('/admcontenidos/phrases','PhraseController@index');
Route::get('/admcontenidos/news','NewsController@index');
