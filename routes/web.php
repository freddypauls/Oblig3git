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

//Routes som henter og sender og henter informasjon til views og controllers ('første parabel er view', 'andre parabel er controller @ etter at kommer hvilken funskjon i controlleren som skal brukes')

Route::get('/', 'CategoriesController@index'); //Eksempel, denne henter fra '/' og sender til funkjonen index i CategoriesController (som returner til view('welcome'))

Route::get('/categories/create', 'CategoriesController@create');

Route::post('/categories', 'CategoriesController@store');

Route::get('/categories/{c}', 'CategoriesController@show');



Route::get('/listings/index', 'ListingsController@index');

Route::get('/listings/create', 'ListingsController@create');

Route::post('/listings', 'ListingsController@store');

Route::get('/listings/{l}', 'ListingsController@show');


Route::post('listings/{l}/messages', 'MessagesController@store');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');