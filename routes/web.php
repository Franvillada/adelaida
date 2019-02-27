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
Route::get('/noticias','NewsController@index');

/* Backoffice routes */
Route::get('/admcontenidos/login', 'BackofficeController@showloginForm')->name('login');
Route::post('/admcontenidos/login', 'BackofficeController@login');

Route::get('/admcontenidos', 'BackofficeController@index')->name('backoffice')->middleware('auth');

Route::get('/admcontenidos/imagen-principal','ImageController@index')->name('imagen-principal')->middleware('auth');
Route::post('/admcontenidos/imagen-principal','ImageController@store');

Route::get('/admcontenidos/encabezado-principal','PhraseController@index')->name('encabezado-principal')->middleware('auth');
Route::post('/admcontenidos/encabezado-principal','PhraseController@store');

Route::get('/admcontenidos/noticias','NewsController@create')->name('noticias')->middleware('auth');
Route::post('/admcontenidos/noticias','NewsController@store');
