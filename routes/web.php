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

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');

Route::get('/cars', 'CarController@index');
Route::get('/clients', 'ClientController@index');
Route::get('/engines', 'EngineController@index');
Route::get('/rents', 'RentController@index');

Route::get('/cars/new', 'CarController@create');
Route::post('/cars', 'CarController@store');
Route::get('/cars/delete/{id}', 'CarController@destroy');

Route::get('/clients/new', 'ClientController@create');
Route::post('/clients', 'ClientController@store');
Route::get('/clients/delete/{id}', 'ClientController@destroy');

Route::get('/engines/new', 'EngineController@create');
Route::post('/engines', 'EngineController@store');
Route::get('/engines/delete/{id}', 'EngineController@destroy');

Route::get('/rents/new', 'RentController@create');
Route::post('/rents', 'RentController@store');
Route::get('/rents/delete/{id}', 'RentController@destroy');

Route::get('/attributes', 'AttributeController@index');

Route::get('/attributes/new', 'AttributeController@create');
Route::post('/attributes', 'AttributeController@store');

Route::get('/attributes/delete/{id}', 'AttributeController@destroy');