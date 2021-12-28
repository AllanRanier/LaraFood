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


Route::get('admin', 'Admin\PlanController@index')->name('admin.index');

Route::prefix('admin')->group(function () {
    Route::get('plans', 'Admin\PlanController@index')->name('plans.index');
    Route::get('plans/create', 'Admin\PlanController@create')->name('plans.create');
    Route::post('plans', 'Admin\PlanController@store')->name('plans.store');
    Route::get('plans/{url}', 'Admin\PlanController@show')->name('plans.show');
    Route::put('plans/{id}', 'Admin\PlanController@update')->name('plans.update');
    Route::get('plans/{id}/edit', 'Admin\PlanController@edit')->name('plans.edit');
    Route::delete('plans/{url}', 'Admin\PlanController@destroy')->name('plans.destroy');
    Route::any('plans/search', 'Admin\PlanController@search')->name('plans.search');
});


