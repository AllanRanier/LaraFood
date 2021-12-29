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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {

        /**
         * Routes Details Plans
         */
        Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plans.index');
        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plans.create');
        Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plans.store');
        Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('details.plans.edit');
        Route::put('plans/{url}/details/{idDetail}', 'DetailPlanController@update')->name('details.plans.update');



        /**
         * Routes Plans
         */
        Route::get('plans', 'PlanController@index')->name('plans.index');
        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::post('plans', 'PlanController@store')->name('plans.store');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::put('plans/{id}', 'PlanController@update')->name('plans.update');
        Route::get('plans/{id}/edit', 'PlanController@edit')->name('plans.edit');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::any('plans/search', 'PlanController@search')->name('plans.search');

        /**
         * Home Dashboard
         */
        Route::get('/', 'PlanController@index')->name('admin.index');
});
