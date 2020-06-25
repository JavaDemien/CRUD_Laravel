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
Route::get('/', 'CrudController@index')->name('table');

Route::get('all', 'CrudController@allData')->name('all');

Route::get('cars/create', 'CrudController@create')->name('crud.create');

Route::post('cars/store', 'CrudController@store')->name('crud.store');

Route::get('cars/{id}/edit', 'CrudController@edit')->name('crud.edit');

Route::post('cars/{id}/update', 'CrudController@update')->name('crud.update');

Route::delete('cars/{id}/delete', 'CrudController@delete')->name('crud.delete');




